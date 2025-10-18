<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Padogskei Gym</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

            body {
                font-family: 'Inter', sans-serif;
            }

            .active-tab {
                background-color: #1c2d42;
            }

            .mobile-menu {
                transition: all 0.3s ease;
            }

            .sidebar {
                transition: all 0.3s ease;
            }

            @media (max-width: 768px) {
                .sidebar {
                    transform: translateX(-100%);
                    position: fixed;
                    height: 100vh;
                    z-index: 50;
                }

                .sidebar.open {
                    transform: translateX(0);
                }

                .overlay {
                    display: none;
                    position: fixed;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background-color: rgba(0, 0, 0, 0.5);
                    z-index: 40;
                }

                .overlay.open {
                    display: block;
                }
            }
        </style>
    </head>

    <body class="bg-[#0e1824] text-white font-sans">

        <header class="lg:hidden bg-[#121f2e] p-4 flex justify-between items-center sticky top-0 z-30">
            <div class="flex items-center">
                <button id="mobile-menu-btn" class="mr-4 text-xl">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="text-xl font-bold">🏋️‍♂️ Padogskei Gym</h1>
            </div>
            <div class="flex items-center space-x-3">
                <span class="text-gray-300 text-sm">Abdul</span>
                <div class="w-8 h-8 bg-gray-600 rounded-full"></div>
            </div>
        </header>

        <div class="flex min-h-screen">
            <?php require base_path('view/dashboards/user/nav.php'); ?>

            <!-- Overlay for mobile menu -->
            <div class="overlay lg:hidden" id="overlay"></div>

            <!-- Main Content -->
            <main class="flex-1 p-4 lg:p-8 w-full lg:w-auto">
                <div class="hidden lg:flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-semibold">Welcome, Abdul Jabar</h2>
                    <div class="flex items-center space-x-3">
                        <span class="text-gray-300">Profile</span>
                        <div class="w-8 h-8 bg-gray-600 rounded-full"></div>
                    </div>
                </div>

                <!-- Dashboard -->
                <?php require base_path('view/dashboards/user/dashboard.php'); ?>

                <!-- Membership Section -->
                <?php require base_path('view/dashboards/user/membership.php'); ?>

                <!-- Payment Section -->
                <?php require base_path('view/dashboards/user/payment.php'); ?>

                <!-- Feedback Section -->
                <?php require base_path('view/dashboards/user/feedback.php'); ?>

                <!-- Help Section -->
                <?php require base_path('view/dashboards/user/help.php'); ?>


                <?php require base_path('view/dashboards/user/settings.php'); ?>

                <script src="assets/js/userDashboard.js">
                </script>
    </body>

</html>