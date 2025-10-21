<div class="page-content" id="members">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-semibold">Members Management</h2>

    </div>

    <form method="GET" action="/adminDashboard" class="flex gap-4 mb-5 flex-wrap items-center">
        <!-- preserve tab in URL -->
        <input type="hidden" name="tab" value="<?= htmlspecialchars($_GET['tab'] ?? 'members') ?>">

        <div class="flex-1 min-w-64 relative">
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            <input type="text" name="search" value="<?= htmlspecialchars($_GET['search'] ?? '') ?>"
                placeholder="Search members..."
                class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-600 bg-gray-700 text-gray-100">
        </div>

        <select name="status" class="p-2 rounded-lg border border-gray-600 bg-gray-700 text-gray-100 min-w-40">
            <?php
            $statuses = ['All', 'Active', 'Pending', 'Expired'];
            foreach ($statuses as $status) {
                $selected = (($_GET['status'] ?? 'All') === $status) ? 'selected' : '';
                echo "<option value='$status' $selected>$status</option>";
            }
            ?>
        </select>

        <select name="membership" class="p-2 rounded-lg border border-gray-600 bg-gray-700 text-gray-100 min-w-40">
            <?php
            $types = ['All', 'Basic', 'Regular', 'Premium'];
            foreach ($types as $type) {
                $selected = (($_GET['membership'] ?? 'All') === $type) ? 'selected' : '';
                echo "<option value='$type' $selected>$type</option>";
            }
            ?>
        </select>

        <button type="submit" class="bg-brand text-white rounded-lg px-4 py-2 hover:bg-orange-600 transition-colors">
            <i class="fas fa-filter mr-2"></i> Filter
        </button>
    </form>



    <div class="bg-gray-900 rounded-lg p-5 shadow-lg">
        <div class="flex justify-between items-center mb-5">
            <h3 class="text-lg font-semibold">All Members (<?= count($paymentRecord); ?>)</h3>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr>
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
                    <?php foreach ($paymentRecord as $record): ?>
                        <tr>
                            <td class="p-3 border-b border-gray-700"><?= htmlspecialchars($record['payment_id']); ?></td>
                            <td class="p-3 border-b border-gray-700"><?= htmlspecialchars($record['username']); ?></td>
                            <td class="p-3 border-b border-gray-700"><?= htmlspecialchars($record['email']); ?></td>
                            <td class="p-3 border-b border-gray-700"><?= htmlspecialchars($record['membership_status']); ?>
                            </td>
                            <td class="p-3 border-b border-gray-700">
                                <?= htmlspecialchars(date('M d, Y', strtotime($record['created_at']))); ?>
                            </td>
                            <td class="p-3 border-b border-gray-700">
                                <span
                                    class="status <?= strtolower($record['membership_status']); ?>"><?= htmlspecialchars($record['membership_status']); ?></span>
                            </td>
                            <td class="p-3 border-b border-gray-700 flex flex-col lg:flex-row gap-2">
                                <!-- Delete (admin only) -->
                                <?php if (isset($_SESSION['admin'])): ?>
                                    <form action="/userDelete" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        <input type="hidden" name="id" value="<?= $record['payment_id']; ?>">
                                        <input type="hidden" name="__method" value="DELETE">
                                        <button name="delete"
                                            class="bg-transparent border border-gray-600 text-red-100 rounded-lg px-3 py-1 text-sm hover:bg-red-700 transition-colors">
                                            Delete
                                        </button>
                                    </form>
                                <?php endif; ?>

                                <!-- Membership dropdown -->
                                <form action="/updateMembership" method="POST"
                                    onsubmit="return confirm('Are you sure you want to change the membership status?');">
                                    <input type="hidden" name="payment_id" value="<?= $record['payment_id']; ?>">
                                    <input type="hidden" name="__method" value="PATCH">
                                    <select name="status"
                                        class="bg-gray-800 border border-gray-600 text-gray-100 text-sm rounded-lg px-2 py-1 hover:border-brand focus:ring-2 focus:ring-brand focus:outline-none transition-all duration-200"
                                        onchange="this.form.submit()">
                                        <?php
                                        $options = ['Pending', 'Basic', 'Regular', 'Premium', 'Expired'];
                                        foreach ($options as $option):
                                            $selected = ($record['status'] === $option) ? 'selected' : '';
                                            echo "<option value='$option' $selected>$option</option>";
                                        endforeach;
                                        ?>
                                    </select>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>