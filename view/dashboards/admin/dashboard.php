<div class="page-content active" id="dashboard">
    <div class="flex items-center justify-between gap-2">
        <h2 class="lg:hidden text-2xl font-semibold w-full">Dashboard Overview</h2>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 gap-5 mb-8 md:grid-cols-2 lg:grid-cols-3">
        <!-- Total Members -->
        <div class="bg-gray-900 rounded-lg p-5 shadow-lg flex items-center">
            <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center mr-4">
                <i class="fas fa-users text-brand text-xl"></i>
            </div>
            <div>
                <h3 class="text-2xl font-bold"><?= number_format($userCount) ?></h3>
                <p class="text-gray-400 text-sm">Total Members</p>
            </div>
        </div>

        <!-- Revenue  -->
        <div class="bg-gray-900 rounded-lg p-5 shadow-lg flex items-center">
            <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center mr-4">
                <i class="fas fa-money-bill-wave text-green-500 text-xl"></i>
            </div>
            <div>
                <h3 class="text-2xl font-bold">₱<?= number_format($totalPayments, 2) ?></h3>
                <p class="text-gray-400 text-sm">Revenue This Month</p>
            </div>
        </div>

        <!-- New feedback -->
        <div class="bg-gray-900 rounded-lg p-5 shadow-lg flex items-center">
            <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mr-4">
                <i class="fas fa-comments text-purple-500 text-xl"></i>
            </div>
            <div>
                <h3 class="text-2xl font-bold"><?= number_format($totalFeedback) ?></h3>
                <p class="text-gray-400 text-sm">New Feedback</p>
            </div>
        </div>
    </div>


    <?php require base_path('view/dashboards/admin/dashboards/recentMemebers.php'); ?>

    <?php require base_path('view/dashboards/admin/dashboards/recentActivity.php'); ?>

</div>