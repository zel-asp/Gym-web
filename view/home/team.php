<!DOCTYPE html>
<html lang="en">

    <?php require base_path('view/partials/head.php'); ?>

    <body>
        <!-- navigation -->
        <?php require base_path('view/partials/nav.php'); ?>
        <!-- Hero Section -->
        <section class="bg-gray-200 py-16 mt-15 md:mt-20">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Meet Our Team</h1>
                <p class="text-xl max-w-2xl mx-auto">We're a passionate group of professionals dedicated to
                    delivering exceptional results for our clients.</p>
            </div>
        </section>

        <!-- Team Section -->
        <section class="py-16 px-10">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Leadership Team</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Our experienced leaders guide the company with
                        vision and expertise.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-auto gap-8 justify-items-center">
                    <!-- Team Member 1 -->
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                        <div class="h-64 bg-gray-100 flex items-center justify-center">
                            <div>
                                <img src="assets/imgs/background.jpg" alt="" class="w-40 h-40  border rounded-full">
                            </div>
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-bold text-gray-800">Legend 1</h3>
                            <p class="text-gray-400 mb-4 text-sm">CEO & Founder</p>
                            <p class="text-gray-600 mb-4">Legend 1 founded the company in 2015 with a vision to
                                revolutionize the industry.</p>
                            <div class="flex justify-center space-x-4">
                                <a href="#" class="text-gray-500 hover:text-brand"><i
                                        class="fab fa-facebook text-xl"></i></a>
                                <a href="#" class="text-gray-500 hover:text-brand"><i
                                        class="fab fa-twitter text-xl"></i></a>
                                <a href="#" class="text-gray-500 hover:text-brand"><i
                                        class="fas fa-envelope text-xl"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                        <div class="h-64 bg-gray-100 flex items-center justify-center">
                            <div>
                                <img src="assets/imgs/background.jpg" alt="" class="w-40 h-40  border rounded-full">
                            </div>
                        </div>
                        <div class="p-6 text-center">
                            <h3 class="text-xl font-bold text-gray-800">Legend 2</h3>
                            <p class="text-gray-400 mb-4 text-sm">CTO</p>
                            <p class="text-gray-600 mb-4">Legend 2 our technical team with over 15 years of
                                experience in software staffelopment.</p>
                            <div class="flex justify-center space-x-4">
                                <a href="#" class="text-gray-500 hover:text-brand"><i
                                        class="fab fa-facebook text-xl"></i></a>
                                <a href="#" class="text-gray-500 hover:text-brand"><i
                                        class="fab fa-github text-xl"></i></a>
                                <a href="#" class="text-gray-500 hover:text-brand"><i
                                        class="fas fa-envelope text-xl"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- staff Team Section -->
        <section class="py-16 px-10">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">staffelopment Team</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Our talented staffelopers build the products that
                        power our success.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- staff Team Member 1 -->
                    <div class="bg-white rounded-lg shadow-xl p-6 text-center ">
                        <div
                            class="w-24 h-24 rounded-full bg-indigo-100 flex items-center justify-center mx-auto mb-4 ">
                            <div>
                                <img src="assets/imgs/background.jpg" alt="" class="w-24 h-24  border rounded-full">
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Miya</h3>
                        <p class="text-gray-400 text-sm mb-2">Staff 1</p>
                        <p class="text-gray-600 text-sm">Full-stack staffeloper specializing in React and Node.js
                        </p>
                    </div>

                    <!-- staff Team Member 2 -->
                    <div class="bg-white rounded-lg shadow-xl p-6 text-center">
                        <div
                            class="w-24 h-24 rounded-full bg-purple-100 flex items-center justify-center mx-auto mb-4 ">
                            <div>
                                <img src="assets/imgs/background.jpg" alt="" class="w-24 h-24  border rounded-full">
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Marco Polo</h3>
                        <p class="text-gray-400 text-sm mb-2">Staff 2</p>
                        <p class="text-gray-600 text-sm">Creating beautiful and intuitive user experiences</p>
                    </div>

                    <!-- staff Team Member 3 -->
                    <div class="bg-white rounded-lg shadow-xl p-6 text-center">
                        <div class="w-24 h-24 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-4">
                            <div>
                                <img src="assets/imgs/background.jpg" alt="" class="w-24 h-24  border rounded-full">
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Kara David</h3>
                        <p class="text-gray-400 text-sm mb-2">Staff 3</p>
                        <p class="text-gray-600 text-sm">Ensuring our systems run smoothly and securely</p>
                    </div>

                    <!-- staff Team Member 4 -->
                    <div class="bg-white rounded-lg shadow-xl p-6 text-center">
                        <div class="w-24 h-24 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-4">
                            <div>
                                <img src="assets/imgs/background.jpg" alt="" class="w-24 h-24  border rounded-full">
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800">Shikamaru</h3>
                        <p class="text-gray-400 text-sm mb-2">Staff 4</p>
                        <p class="text-gray-600 text-sm">Building cross-platform mobile applications</p>
                    </div>
                </div>
            </div>
        </section>

        <?php require base_path('view/partials/footer.php'); ?>
    </body>

</html>