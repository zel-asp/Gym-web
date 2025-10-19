<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

    <?php require base_path('view/partials/head.php'); ?>


    <body>
        <!-- navigation -->
        <?php require base_path('view/partials/nav.php'); ?>

        <!-- Landing Page -->
        <div class="w-full h-screen relative" id="landing">

            <img src="assets/imgs/background.jpg" class=" w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="absolute b-0 t-100 bg-brand"></div>

            <div class="absolute inset-0 flex-center flex-col md:flex-row gap-10 md:justify-around w-full p-5">
                <div class="md:hidden">
                    <img src="assets/imgs/logo.png" alt="padogskie Logo" class="w-[180px] mx-auto">
                </div>
                <div class="text-white text-center flex-center flex-col  text-4xl font-bold">
                    <h1>Start a better shape of you!<span class="text-brand"> Come join us!</span> </h1>
                    <button
                        class="flex lg:self-start text-sm text-brand p-2 md:py-2 md:px-4 mt-3 bg-white hover:text-white hover:bg-brand rounded-lg">Learn
                        more</button>
                </div>
                <div class="hidden md:block">
                    <img src="assets/imgs/logo.png" alt="padogskie Logo" class="w-[150px] md:w-auto mx-auto">
                </div>

            </div>

            <div class="absolute bottom-0 left-0 w-full h-40 
            bg-gradient-to-t from-brand via-[hsl(25,95%,53%,0.5)] to-[hsl(25,95%,53%,0)]">
                <a href="#main" class="absolute bottom-10 left-1/2 transform -translate-x-1/2 text-3xl">
                    <i class="text-white fa-solid fa-chevron-down animate-bounce"></i>
                </a>
            </div>
        </div>

        <!-- main content-->
        <?php require base_path('view/home/main.php'); ?>

        <!-- offer Section -->
        <?php require base_path('view/home/offer.php'); ?>

        <?php require base_path('view/home/gallery.php'); ?>

        <!-- stats section -->
        <?php require base_path('view/home/stats.php'); ?>


        <?php require base_path('view/partials/footer.php'); ?>
    </body>

</html>