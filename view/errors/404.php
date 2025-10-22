<!DOCTYPE html>
<html lang="en">

    <?php require base_path('view/partials/head.php'); ?>

    <body class="h-screen relative overflow-hidden">


        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black opacity-25"></div>

        <!-- Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6 md:px-12">
            <h1 class="text-white text-5xl md:text-6xl font-extrabold mb-6">
                401 Error
            </h1>

            <h4 class="text-white text-2xl md:text-3xl font-light mb-4">
                Oops, something went wrong.
            </h4>

            <h5 class="text-white text-xl md:text-2xl font-light mb-6">
                Invalid credentials.
            </h5>

            <!-- Links -->
            <div class="flex flex-col md:flex-row gap-6 mb-20">
                <a href="/login"
                    class="text-blue-500 hover:text-sky-400 text-xl md:text-2xl font-extrabold underline transition">
                    Sign in
                </a>
                <a href="/"
                    class="text-blue-500 hover:text-sky-400 text-xl md:text-2xl font-extrabold underline transition">
                    Go back
                </a>
            </div>

            <!-- GIF -->
            <img src="https://media2.giphy.com/media/830H0uF08yM5J29qjf/source.gif"
                class="w-64 md:w-80 rounded-lg shadow-lg animate-bounce" alt="Funny error gif">
        </div>

        <?php require base_path('view/partials/footer.php'); ?>
    </body>

</html>