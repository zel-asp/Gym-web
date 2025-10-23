<!-- Recent mmbers section -->
<div class="bg-gray-900 rounded-lg p-5 shadow-lg mb-8">
    <div class="flex justify-between items-center mb-5">
        <h3 class="text-lg font-semibold">Recent Members</h3>
        <a href="/adminDashboard?tab=members" class="text-brand text-sm no-underline view-all" data-page="members">View
            All</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full border-collapse">
            <thead>
                <tr>
                    <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                        Name</th>
                    <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                        Join Date</th>
                    <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                        Membership</th>
                    <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                        Status</th>
                    <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                        Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($recentPayments)): ?>
                    <?php foreach ($recentPayments as $member): ?>
                        <tr>
                            <td class="p-3 border-b border-gray-700"><?= htmlspecialchars($member['name']) ?></td>
                            <td class="p-3 border-b border-gray-700">
                                <?= date('M d, Y', strtotime($member['payment_date'])) ?>
                            </td>

                            <!-- Membership column -->
                            <td class="p-3 border-b border-gray-700">
                                <?= strtolower($member['status']) !== 'pending' ? htmlspecialchars($member['status']) : '' ?>
                            </td>

                            <!-- status column -->
                            <td class="p-3 border-b border-gray-700">
                                <?php if (strtolower($member['status']) === 'pending'): ?>
                                    <span class="text-orange-200">
                                        <?= ucfirst($member['status']) ?>
                                    </span>
                                <?php elseif ($member['membership_status'] === 'Active'): ?>
                                    <span class="text-green-400">
                                        <?= ucfirst($member['membership_status']) ?>
                                    </span>
                                <?php else: ?>
                                    <span class="text-red-400">
                                        <?= ucfirst($member['membership_status']) ?>
                                    </span>
                                <?php endif; ?>
                            </td>

                            <td class="p-3 border-b border-gray-700">
                                <form action="/userDelete" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this user?');">
                                    <input type="hidden" name="id" value="<?= $member['id']; ?>">
                                    <input type="hidden" name="__method" value="DELETE">
                                    <button name="delete"
                                        class="bg-transparent border border-gray-600 text-red-100 rounded-lg px-3 py-1 text-sm hover:bg-red-700 transition-colors">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="p-3 text-center text-gray-400">No recent members found.</td>
                    </tr>
                <?php endif; ?>


            </tbody>
        </table>
    </div>
</div>