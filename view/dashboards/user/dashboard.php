<section id="dashboard" class="tab-content">
    <h3 class="text-xl font-bold mb-4">Dashboard</h3>
    <div class="grid grid-cols-1 lg:grid-cols-1 gap-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-[#121f2e] p-6 rounded-xl shadow-md ">
                <h4 class="font-semibold mb-3 border-b border-gray-600 pb-1">Announcements</h4>
                <ul class="space-y-3 text-gray-300">
                    <li class="flex items-start">
                        <span class="text-orange-400 mr-2 mt-1"><i class="fas fa-dumbbell"></i></span>
                        <span>New Yoga classes available every Saturday!</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-400 mr-2 mt-1"><i class="fas fa-tag"></i></span>
                        <span>Promo: Get 10% off annual memberships!</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-400 mr-2 mt-1"><i class="fas fa-clock"></i></span>
                        <span>Gym open hours: 6 AM - 10 PM daily</span>
                    </li>
                </ul>
            </div>

            <?php if (is_array($paymentInfo)): ?>
                <div class="bg-[#121f2e] p-6 rounded-xl shadow-md">
                    <h4 class="font-semibold mb-3 border-b border-gray-600 pb-1 text-center lg:text-left">Quick Summary</h4>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-300">Active Membership:</span>
                            <span class="text-orange-400 font-semibold">
                                <?= htmlspecialchars($paymentInfo['plan'] ?? 'N/A'); ?>
                            </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-300">Membership Plan:</span>
                            <span class="text-orange-400 font-semibold">
                                <?= htmlspecialchars($paymentInfo['membership_status'] ?? 'N/A'); ?>
                            </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-300">Last Payment:</span>
                            <span class="text-orange-400 font-semibold">
                                <?= htmlspecialchars(date('F j, Y', strtotime($paymentInfo['payment_date'] ?? '')) ?: 'N/A'); ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="bg-[#121f2e] p-6 rounded-xl shadow-md">
                    <h4 class="font-semibold mb-3 border-b border-gray-600 pb-1 text-center lg:text-left">Quick Summary</h4>
                    <p class="text-center text-gray-400">No active membership found.</p>
                </div>
            <?php endif; ?>
        </div>


        <!-- if user is a member -->
        <?php if (empty($paymentInfo) || $paymentInfo['membership_status'] !== 'Active'): ?>
            <div class="text-center p-6">
                <p class="text-green-500 font-semibold mb-4">Share your feedback, get your membership now.
                </p>
            </div>
        <?php endif; ?>

        <?php if (!empty($paymentInfo) && $paymentInfo['membership_status'] === 'Active'): ?>

            <!-- else -->
            <div class="bg-[#121f2e] p-6 rounded-xl shadow-md mt-10 w-full">
                <h3 class="text-xl font-bold mb-4">Share Your Feedback</h3>

                <?php if (!empty($_SESSION['success'])): ?>
                    <div class="mb-4 p-4 bg-green-100 border border-greeb-400 text-green-700 rounded">
                        <ul class="list-disc list-inside">
                            <?php foreach ($_SESSION['success'] as $success): ?>
                                <li><?= htmlspecialchars($success) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php unset($_SESSION['success']); ?>
                <?php endif; ?>

                <?php if (!empty($_SESSION['errors'])): ?>
                    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                        <ul class="list-disc list-inside">
                            <?php foreach ($_SESSION['errors'] as $error): ?>
                                <li><?= htmlspecialchars($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php unset($_SESSION['errors']); ?>
                <?php endif; ?>

                <form id="feedbackForm" class="space-y-4 w-full" method="POST" action="/feedback">
                    <div class="grid grid-cols-1 md:-gridcols-2 gap-4">

                        <input type="text" name="name" placeholder="Full Name" readonly
                            value="<?= $_SESSION['user']['username']; ?>"
                            class="p-3 rounded bg-[#1a2a3f] w-full focus:outline-none focus:ring-1 focus:ring-orange-500" />

                        <input type="email" name="email" value="<?= $_SESSION['user']['email']; ?>"
                            class="p-3 rounded bg-[#1a2a3f] w-full focus:outline-none focus:ring-1 focus:ring-orange-500" />

                    </div>
                    <textarea name="feedback_text" placeholder="Write your feedback here..." required
                        class="p-3 rounded bg-[#1a2a3f] w-full h-32 focus:outline-none focus:ring-1 focus:ring-orange-500"><?= htmlspecialchars($_POST['feedback_text'] ?? '') ?></textarea>

                    <!-- Hidden input to store star rating -->
                    <input type="hidden" name="rating" id="feedback_rating" value="0">

                    <div class="flex flex-col md:flex-row md:items-center space-y-2 md:space-y-0 md:space-x-4">
                        <span class="text-gray-300">Rating:</span>
                        <div id="stars" class="flex space-x-1 text-2xl cursor-pointer">
                            <span class="text-gray-400 hover:text-yellow-400 transition-colors">☆</span>
                            <span class="text-gray-400 hover:text-yellow-400 transition-colors">☆</span>
                            <span class="text-gray-400 hover:text-yellow-400 transition-colors">☆</span>
                            <span class="text-gray-400 hover:text-yellow-400 transition-colors">☆</span>
                            <span class="text-gray-400 hover:text-yellow-400 transition-colors">☆</span>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-3 rounded-lg transition-colors w-full md:w-auto"
                            name="feedback">
                            Submit Feedback
                        </button>
                    </div>
                </form>
            </div>
        <?php endif; ?>
</section>