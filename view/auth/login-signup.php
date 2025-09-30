<!DOCTYPE html>
<html lang="en">

    <?php require base_path('view/partials/head.php'); ?>


    <body>

        <div class="relative h-full md:h-screen bg-[url(/assets/imgs/background.jpg)] bg-cover bg-center text-white/80">
            <div class="absolute inset-0 bg-black/10"></div>

            <!--login-->
            <div id="LogIn" class="relative flex-center h-screen font-medium ">
                <div class="content relative flex-center flex-col md:flex-row gap-5 md:gap-20 w-full max-w-4xl m-5 
            bg-white/10 backdrop-blur-md rounded-xl shadow-lg p-10 md:p-20">
                    <button onclick="history.back()" class="absolute top-5 right-8 cursor-pointer">
                        <i class="fa-regular fa-circle-xmark"></i>
                    </button>

                    <div class="mt-5 md:hidden">
                        <img src="assets/imgs/logo.png" alt="padogskie Logo" class="w-[150px] mx-auto">
                    </div>
                    <div class="signIn_form">
                        <h1 class="text-center md:text-start text-xl font-bold lg:text-2xl" id="Sign-In-Title">Sign-In
                        </h1>
                        <form action="" method="POST">

                            <div class="flex flex-col mt-5">
                                <label for="loginEmail">Email*</label>
                                <input type="email" id="loginEmail" name="email" class="LoginInput" required />
                            </div>
                            <div class="flex flex-col mb-0">
                                <label for="loginPassword">Password*</label>
                                <input type="password" id="loginPassword" name="password" class="LoginInput" required>
                            </div>

                            <div class="text-xs md:text-sm lg:text-lg flex-center gap-5">
                                <div class="center-vertical gap-1">
                                    <input type="checkbox" id="rememberLogin" name="remember" class="cursor-crosshair">
                                    <label for="rememberLogin" class="extra cursor-pointer">Remember me</label>
                                </div>

                                <a href="" class="extra hover:underline">Forgot Password?</a>
                            </div>

                            <button
                                class="w-full mt-3 bg-brand p-1 rounded-xl lg:p-2 hover:bg-white hover:text-brand cursor-pointer"
                                name="login">Login</button>

                            <p class="text-xs text-center mt-2 ">Don't have account? <a href="#"
                                    class="text-sky-500 hover:underline" data-show="#SignUp"
                                    data-hide="#LogIn">Sign-up</a>
                            </p>
                        </form>
                    </div>
                    <div>
                        <img src="assets/imgs/logo.png" alt="padogskie Logo"
                            class="hidden md:block lg:w-[300px] w-[240px] mx-auto">
                    </div>
                </div>
            </div>

            <!-- Sign-Up -->
            <div id="SignUp" class="relative hidden flex-center h-full font-[Poppins,sans-serif] font-medium ">
                <div
                    class="content flex-center  flex-col md:flex-row gap-5 md:gap-20 w-full max-w-4xl m-5 bg-white/10 backdrop-blur-md rounded-xl shadow-lg p-10 md:p-20">
                    <div class="mt-5 md:hidden">
                        <img src="assets/imgs/logo.png" alt="padogskie Logo" class="w-[150px] mx-auto">
                    </div>
                    <button onclick="history.back()" class="absolute top-5 right-8 cursor-pointer">
                        <i class="fa-regular fa-circle-xmark"></i>
                    </button>

                    <div class="signIn_form">
                        <h1 class="text-center md:text-start text-xl font-bold lg:text-2xl" id="Sign-Up-Title">Sign-up
                        </h1>

                        <form action="" method="POST">

                            <div class="flex flex-col mt-5">
                                <label for="signupUsername">Username*</label>
                                <input type="text" id="signupUsername" name="username" class="LoginInput" required />
                            </div>
                            <div class="flex flex-col mb-0">
                                <label for="signupEmail">Email*</label>
                                <input type="email" id="signupEmail" name="email" class="LoginInput" required>
                            </div>
                            <div class="flex flex-col mb-0">
                                <label for="signupPassword">Create Password*</label>
                                <input type="password" id="signupPassword" name="password" class="LoginInput" required>
                            </div>
                            <div class="flex flex-col mb-0">
                                <label for="signupPasswordConfirm">Re-type Password*</label>
                                <input type="password" id="signupPasswordConfirm" name="password_confirm"
                                    class="LoginInput" required>
                            </div>

                            <div class="flex-vertical gap-1 mt-2">
                                <input type="checkbox" id="signupTerms" name="terms" class="cursor-crosshair">
                                <label for="signupTerms" class="extra  cursor-pointer">Accept all the Terms and
                                    Conditions</label>
                            </div>

                            <button
                                class="w-full mt-3 bg-brand  p-1 rounded-xl lg:p-2 hover:bg-white hover:text-brand cursor-pointer"
                                name="register">Register</button>

                        </form>

                        <p class="text-xs text-center mt-2">Already have account? <a href="#"
                                class="text-sky-500 hover:underline" data-show="#LogIn" data-hide="#SignUp">Sign-In</a>
                        </p>
                    </div>
                    <div>
                        <img src="assets/imgs/logo.png" alt="padogskie Logo"
                            class="hidden md:block lg:w-[350px] w-[290px] mx-auto">
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/script.js"></script>
    </body>

</html>