<!DOCTYPE html>
<html lang="en">

    <?php require base_path('view/partials/head.php'); ?>


    <body>
        <div class="bg-indigo-900 relative overflow-hidden h-screen">
            <img src="https://external-preview.redd.it/4MddL-315mp40uH18BgGL2-5b6NIPHcDMBSWuN11ynM.jpg?width=960&crop=smart&auto=webp&s=b98d54a43b3dac555df398588a2c791e0f3076d9"
                class="absolute h-full w-full object-cover" />
            <div class="inset-0 bg-black opacity-25 absolute">
            </div>
            <div class="container flex-col mx-auto px-6 md:px-12 relative z-10 center-vertical py-32 xl:py-40">
                <div class="w-full font-mono  flex-col center-vertical relative z-10">
                    <h1 class="font-extrabold text-5xl text-center text-white leading-tight mt-4">
                        You are all alone here
                    </h1>
                    <a href="/" class="font-extrabold text-blue-500 hover:text-sky-500 underline text-5xl">Go
                        back</a>
                    <p class="font-extrabold text-8xl my-44 text-white animate-bounce">
                        404
                    </p>
                </div>

            </div>
        </div>

        <?php require base_path('view/partials/footer.php'); ?>
    </body>

</html>