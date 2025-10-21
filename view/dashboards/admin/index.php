<!DOCTYPE html>
<html lang="en">

    <?php require base_path('view/partials/head.php'); ?>

    <body class="bg-gray-700 text-gray-100 flex min-h-screen">

        <!-- sidebar Page -->
        <?php require base_path('view/dashboards/admin/sidebar.php'); ?>

        <!-- Main Content -->
        <div class="flex-1 p-5 ml-0 overflow-y-auto md:ml-64">

            <!-- Dashboard Page -->
            <?php require base_path('view/dashboards/admin/dashboard.php'); ?>

            <!-- Members Page -->
            <?php require base_path('view/dashboards/admin/members.php'); ?>

            <!-- Payments Page -->
            <?php require base_path('view/dashboards/admin/payment.php'); ?>

            <!-- Feedback Page -->
            <?php require base_path('view/dashboards/admin/feedback.php'); ?>

            <!-- Settings Page -->
            <?php require base_path('view/dashboards/admin/setting.php'); ?>

        </div>

        <script src="assets/js/adminDashboard.js">
        </script>
    </body>

</html>