<!DOCTYPE html>
<html lang="en">
    <?php require base_path('view/partials/head.php'); ?>

    <body class="bg-gray-50 text-gray-800 font-sans min-h-screen">

        <!-- Page Container -->
        <div class="container mx-auto px-6 md:px-12 py-16">

            <!-- Page Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Terms of Service</h1>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Last updated: <?php echo date('F j, Y'); ?></p>
            </div>

            <!-- Table of Contents -->
            <div class="bg-white rounded-lg shadow-sm p-6 mb-10 border border-gray-200">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">Table of Contents</h2>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <li class="flex items-center">
                        <span class="text-orange-500 mr-2">•</span>
                        <a href="#use-of-service"
                            class="text-blue-500 hover:underline hover:text-blue-700 transition-colors">1. Use of
                            Service</a>
                    </li>
                    <li class="flex items-center">
                        <span class="text-orange-500 mr-2">•</span>
                        <a href="#membership"
                            class="text-blue-500 hover:underline hover:text-blue-700 transition-colors">2.
                            Membership</a>
                    </li>
                    <li class="flex items-center">
                        <span class="text-orange-500 mr-2">•</span>
                        <a href="#payments"
                            class="text-blue-500 hover:underline hover:text-blue-700 transition-colors">3. Payments</a>
                    </li>
                    <li class="flex items-center">
                        <span class="text-orange-500 mr-2">•</span>
                        <a href="#health-safety"
                            class="text-blue-500 hover:underline hover:text-blue-700 transition-colors">4. Health &
                            Safety</a>
                    </li>
                    <li class="flex items-center">
                        <span class="text-orange-500 mr-2">•</span>
                        <a href="#data-privacy"
                            class="text-blue-500 hover:underline hover:text-blue-700 transition-colors">5. Data
                            Privacy</a>
                    </li>
                    <li class="flex items-center">
                        <span class="text-orange-500 mr-2">•</span>
                        <a href="#liability"
                            class="text-blue-500 hover:underline hover:text-blue-700 transition-colors">6. Limitation of
                            Liability</a>
                    </li>
                    <li class="flex items-center">
                        <span class="text-orange-500 mr-2">•</span>
                        <a href="#changes"
                            class="text-blue-500 hover:underline hover:text-blue-700 transition-colors">7. Changes to
                            Terms</a>
                    </li>
                </ul>
            </div>

            <!-- Introduction -->
            <div class="bg-white rounded-lg shadow-sm p-6 mb-8 border border-gray-200">
                <p class="mb-4 text-lg">Welcome to <span class="font-semibold text-orange-500">Padogskei Wild
                        Gym</span>! By accessing or using our services, website, or mobile platform, you agree to comply
                    with and be bound by the following terms and conditions.</p>
                <p class="text-gray-600">Please read these Terms of Service carefully before using our website, mobile
                    platform, or services. These terms govern your use of our digital platforms and physical facilities.
                </p>
            </div>

            <!-- Terms Sections -->
            <div class="space-y-10">
                <section id="use-of-service"
                    class="bg-white rounded-lg shadow-sm p-6 border border-gray-200 scroll-mt-20">
                    <div class="flex items-center mb-4">
                        <div
                            class="bg-orange-100 text-orange-600 rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3">
                            1</div>
                        <h2 class="text-2xl font-semibold text-gray-800">Use of Service</h2>
                    </div>
                    <div class="pl-11">
                        <p class="mb-4">
                            You may use our gym services, website, and mobile platform for lawful purposes only. Any
                            unauthorized or illegal use is strictly prohibited.
                        </p>
                        <div class="bg-orange-50 border-l-4 border-orange-500 p-4 my-4">
                            <p class="text-sm text-gray-700"><span class="font-semibold">Note:</span> Unauthorized use
                                includes but is not limited to: sharing login credentials, reselling services, using
                                facilities in a manner that disrupts other members, or attempting to compromise system
                                security.</p>
                        </div>
                        <h3 class="font-semibold text-gray-700 mb-2">Website and Platform Usage:</h3>
                        <ul class="list-disc pl-5 mb-4 space-y-2">
                            <li>Members must provide accurate information during registration</li>
                            <li>Accounts are personal and non-transferable</li>
                            <li>Automated scraping or data collection is prohibited</li>
                            <li>Users must not attempt to breach system security</li>
                        </ul>
                    </div>
                </section>

                <section id="membership" class="bg-white rounded-lg shadow-sm p-6 border border-gray-200 scroll-mt-20">
                    <div class="flex items-center mb-4">
                        <div
                            class="bg-orange-100 text-orange-600 rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3">
                            2</div>
                        <h2 class="text-2xl font-semibold text-gray-800">Membership</h2>
                    </div>
                    <div class="pl-11">
                        <p class="mb-4">
                            All memberships are personal and non-transferable. You are responsible for maintaining the
                            confidentiality of your account information.
                        </p>
                        <h3 class="font-semibold text-gray-700 mb-2">Membership Requirements:</h3>
                        <ul class="list-disc pl-5 mb-4 space-y-2">
                            <li>Membership cards must be presented upon entry</li>
                            <li>Membership fees are non-refundable except as required by law</li>
                            <li>Membership may be suspended for violation of gym policies</li>
                            <li>Automatic renewal terms apply as selected during registration</li>
                        </ul>
                        <div class="bg-gray-50 rounded p-4 my-4">
                            <h3 class="font-semibold text-gray-700 mb-2">Online Registration:</h3>
                            <p class="text-sm text-gray-700">By registering through our website or mobile platform, you
                                acknowledge that all provided information is accurate and complete. Padogskei Wild Gym
                                reserves the right to verify membership information and suspend accounts with fraudulent
                                details.</p>
                        </div>
                    </div>
                </section>

                <section id="payments" class="bg-white rounded-lg shadow-sm p-6 border border-gray-200 scroll-mt-20">
                    <div class="flex items-center mb-4">
                        <div
                            class="bg-orange-100 text-orange-600 rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3">
                            3</div>
                        <h2 class="text-2xl font-semibold text-gray-800">Payments</h2>
                    </div>
                    <div class="pl-11">
                        <p class="mb-4">
                            Membership fees must be paid in full and on time. Late or failed payments may result in
                            suspension or termination of membership.
                        </p>
                        <div class="bg-gray-50 rounded p-4 my-4">
                            <h3 class="font-semibold text-gray-700 mb-2">Payment Methods Accepted:</h3>
                            <ul class="list-disc pl-5 space-y-1">
                                <li>GCash</li>
                                <li>Credit/Debit Cards (Visa, MasterCard)</li>
                                <li>Bank Transfers</li>
                                <li>Cash (at our physical location only)</li>
                            </ul>
                        </div>
                        <h3 class="font-semibold text-gray-700 mb-2">Payment Terms:</h3>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Recurring payments will be automatically charged on due dates</li>
                            <li>Failed payments may incur administrative fees</li>
                            <li>Members must maintain valid payment information</li>
                            <li>Refund requests must be submitted in writing within 7 days</li>
                        </ul>
                    </div>
                </section>

                <section id="health-safety"
                    class="bg-white rounded-lg shadow-sm p-6 border border-gray-200 scroll-mt-20">
                    <div class="flex items-center mb-4">
                        <div
                            class="bg-orange-100 text-orange-600 rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3">
                            4</div>
                        <h2 class="text-2xl font-semibold text-gray-800">Health & Safety</h2>
                    </div>
                    <div class="pl-11">
                        <p class="mb-4">
                            You acknowledge that participation in physical activities involves inherent risks. Padogskei
                            Wild Gym is not liable for any injuries sustained during use of facilities.
                        </p>
                        <div class="bg-red-50 border-l-4 border-red-500 p-4 my-4">
                            <p class="text-sm text-gray-700"><span class="font-semibold">Important:</span> All members
                                must complete a health screening questionnaire before using gym facilities. Consult with
                                a physician before beginning any new exercise program. Members assume all risks
                                associated with physical activity.</p>
                        </div>
                        <h3 class="font-semibold text-gray-700 mb-2">Safety Requirements:</h3>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Proper athletic attire and closed-toe shoes required</li>
                            <li>Equipment must be used as intended and properly cleaned after use</li>
                            <li>Report any equipment malfunctions or safety hazards immediately</li>
                            <li>Follow all posted safety guidelines and staff instructions</li>
                        </ul>
                    </div>
                </section>

                <section id="data-privacy"
                    class="bg-white rounded-lg shadow-sm p-6 border border-gray-200 scroll-mt-20">
                    <div class="flex items-center mb-4">
                        <div
                            class="bg-orange-100 text-orange-600 rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3">
                            5</div>
                        <h2 class="text-2xl font-semibold text-gray-800">Data Privacy</h2>
                    </div>
                    <div class="pl-11">
                        <p class="mb-4">
                            Padogskei Wild Gym is committed to protecting your personal information in compliance with
                            the Philippine Data Privacy Act of 2012.
                        </p>
                        <h3 class="font-semibold text-gray-700 mb-2">Data Collection and Use:</h3>
                        <ul class="list-disc pl-5 mb-4 space-y-2">
                            <li>We collect personal information for membership management and service improvement</li>
                            <li>Payment information is processed securely through encrypted channels</li>
                            <li>Personal data will not be shared with third parties without consent, except as required
                                by law</li>
                            <li>Members may request access to or correction of their personal data</li>
                        </ul>
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 my-4">
                            <p class="text-sm text-gray-700"><span class="font-semibold">Your Rights:</span> You have
                                the right to access, correct, and object to the processing of your personal data. For
                                data privacy concerns, contact our Data Protection Officer at <a
                                    href="mailto:privacy@padogskeigym.com"
                                    class="text-blue-500 hover:underline">privacy@padogskeigym.com</a>.</p>
                        </div>
                    </div>
                </section>

                <section id="liability" class="bg-white rounded-lg shadow-sm p-6 border border-gray-200 scroll-mt-20">
                    <div class="flex items-center mb-4">
                        <div
                            class="bg-orange-100 text-orange-600 rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3">
                            6</div>
                        <h2 class="text-2xl font-semibold text-gray-800">Limitation of Liability</h2>
                    </div>
                    <div class="pl-11">
                        <p class="mb-4">
                            To the maximum extent permitted by law, Padogskei Wild Gym shall not be liable for any
                            direct, indirect, incidental, or consequential damages arising from your use of our
                            services, website, or facilities.
                        </p>
                        <h3 class="font-semibold text-gray-700 mb-2">Specific Limitations:</h3>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Injuries sustained during gym use or participation in activities</li>
                            <li>Loss or theft of personal property on premises</li>
                            <li>Service interruptions or technical issues with digital platforms</li>
                            <li>Third-party actions or conduct of other members</li>
                        </ul>
                    </div>
                </section>

                <section id="changes" class="bg-white rounded-lg shadow-sm p-6 border border-gray-200 scroll-mt-20">
                    <div class="flex items-center mb-4">
                        <div
                            class="bg-orange-100 text-orange-600 rounded-full w-8 h-8 flex items-center justify-center font-bold mr-3">
                            7</div>
                        <h2 class="text-2xl font-semibold text-gray-800">Changes to Terms</h2>
                    </div>
                    <div class="pl-11">
                        <p class="mb-4">
                            We may update these Terms of Service from time to time. Changes will be effective
                            immediately upon posting on our website.
                        </p>
                        <p class="text-gray-600 text-sm mb-4">
                            We encourage you to periodically review this page for the latest information on our terms of
                            service. Continued use of our services after changes constitutes acceptance of the modified
                            terms.
                        </p>
                        <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                            <p class="text-sm text-gray-700"><span class="font-semibold">Notification:</span> For
                                material changes, we will notify registered members via email or through platform
                                notifications at least 15 days before changes take effect.</p>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Governing Law Section -->
            <div class="bg-white rounded-lg shadow-sm p-6 mt-10 border border-gray-200">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">Governing Law</h2>
                <p class="mb-4">These Terms of Service shall be governed by and construed in accordance with the laws of
                    the Republic of the Philippines. Any disputes arising from these terms shall be subject to the
                    exclusive jurisdiction of the courts of Caloocan City.</p>
            </div>

            <!-- Contact Section -->
            <div
                class="bg-gradient-to-r from-orange-500 to-orange-400 rounded-lg shadow-md p-8 mt-12 text-white text-center">
                <h2 class="text-2xl font-bold mb-4">Questions About Our Terms?</h2>
                <p class="mb-6 max-w-2xl mx-auto">If you have any questions regarding these terms, please don't hesitate
                    to contact us.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="mailto:info@padogskeigym.com"
                        class="inline-block bg-white text-orange-500 font-semibold py-3 px-8 rounded-lg hover:bg-gray-100 transition-colors duration-300 shadow-md">
                        Contact Us
                    </a>
                    <a href="/privacy-policy"
                        class="inline-block border-2 border-white text-white font-semibold py-3 px-8 rounded-lg hover:bg-white hover:text-orange-500 transition-colors duration-300">
                        Privacy Policy
                    </a>
                </div>
            </div>

        </div>

        <?php require base_path('view/partials/footer.php'); ?>



        <style>
            </body></html>