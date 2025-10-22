<!DOCTYPE html>
<html lang="en">

    <?php require base_path('view/partials/head.php'); ?>

    <body class="bg-green-200 text-gray-800 font-sans min-h-screen flex flex-col justify-center items-center">

        <h1 class="text-black font-montserrat text-5xl md:text-6xl font-light mb-10 text-center">401 Error</h1>

        <div class="flex flex-col md:flex-row items-center justify-center gap-10 px-4">
            <!-- Text Column -->
            <div class="flex flex-col items-center text-center space-y-4">
                <h4 class="text-2xl font-light">Oops, something went wrong.</h4>
                <h5 class="text-xl font-light">Invalid credentials.</h5>
                <p class="text-gray-700">
                    Click here to <a href="/login" class="text-indigo-600 hover:underline">signin</a>
                </p>
                <p class="text-gray-700">
                    Click here to <a href="/" class="text-indigo-600 hover:underline">Go back</a>
                </p>
            </div>

            <!-- Image Column -->
            <div class="flex justify-center">
                <img src="https://media2.giphy.com/media/830H0uF08yM5J29qjf/source.gif"
                    class="w-64 md:w-80 rounded-lg shadow-lg" alt="Funny error gif">
            </div>
        </div>

    </body>

</html>