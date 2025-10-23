<div class="page-content" id="members">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 sm:mb-8 gap-4">
        <h2 class="text-xl sm:text-2xl font-semibold">Members Management</h2>
    </div>

    <form method="GET" action="/adminDashboard"
        class="flex flex-col sm:flex-row gap-4 mb-5 items-start sm:items-center">
        <!-- preserve tab in URL -->
        <input type="hidden" name="tab" value="<?= htmlspecialchars($_GET['tab'] ?? 'members') ?>">

        <div class="w-full sm:flex-1 sm:min-w-64 relative">
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            <input type="text" name="search" value="<?= htmlspecialchars($_GET['search'] ?? '') ?>"
                placeholder="Search members..."
                class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-600 bg-gray-700 text-gray-100">
        </div>
        <button type="submit"
            class="w-full sm:w-auto bg-orange-500 text-white rounded-lg px-4 py-2 hover:bg-orange-600 transition-colors">
            <i class="fas fa-filter mr-2"></i> Filter
        </button>
    </form>

    <div class="bg-gray-900 rounded-lg p-4 sm:p-5 shadow-lg">
        <div class="flex justify-between items-center mb-5">
            <h3 class="text-lg font-semibold">All Members (<?= count($users); ?>)</h3>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse min-w-[800px]">
                <thead>
                    <tr class="bg-gray-800">
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">ID</th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">Name</th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">Email</th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">Membership
                        </th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">Join Date
                        </th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">Status</th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">Actions
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($users as $record): ?>
                        <tr class="hover:bg-gray-800 transition-colors">
                            <td class="p-3 border-b border-gray-700"><?= htmlspecialchars($record['user_id']); ?></td>
                            <td class="p-3 border-b border-gray-700"><?= htmlspecialchars($record['username']); ?></td>
                            <td class="p-3 border-b border-gray-700 truncate max-w-xs">
                                <?= htmlspecialchars($record['email']); ?></td>
                            <td class="p-3 border-b border-gray-700"><?= htmlspecialchars($record['status']); ?></td>
                            <td class="p-3 border-b border-gray-700 whitespace-nowrap">
                                <?= htmlspecialchars(date('M d, Y', strtotime($record['created_at']))); ?>
                            </td>
                            <td class="p-3 border-b border-gray-700">
                                <?php
                                $statusClass = 'bg-gray-700 text-gray-300';
                                if (strtolower($record['membership_status']) === 'active') {
                                    $statusClass = 'bg-green-900 text-green-300';
                                } elseif (strtolower($record['membership_status']) === 'pending') {
                                    $statusClass = 'bg-yellow-900 text-yellow-300';
                                } elseif (strtolower($record['membership_status']) === 'inactive') {
                                    $statusClass = 'bg-red-900 text-red-300';
                                }
                                ?>
                                <span class="inline-block px-2 py-1 text-xs rounded <?= $statusClass ?>">
                                    <?= htmlspecialchars($record['membership_status']); ?>
                                </span>
                            </td>
                            <td class="p-3 border-b border-gray-700">
                                <div class="flex flex-col sm:flex-row gap-2">
                                    <!-- Delete (admin only) -->
                                    <?php if (isset($_SESSION['admin'])): ?>
                                        <form action="/userDelete" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this user?');">
                                            <input type="hidden" name="id" value="<?= $record['user_id']; ?>">
                                            <input type="hidden" name="__method" value="DELETE">
                                            <button name="delete"
                                                class="w-full sm:w-auto bg-transparent border border-gray-600 text-red-400 rounded-lg px-3 py-1 text-sm hover:bg-red-900 transition-colors">
                                                Delete
                                            </button>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>