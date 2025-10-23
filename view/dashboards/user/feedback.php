<!-- Feedback Section -->
<section id="feedback" class="tab-content">
    <!-- Header with Stats -->
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 sm:mb-8 gap-4">
        <div>
            <h3 class="text-xl sm:text-2xl font-bold text-white mb-2">User Feedbacks</h3>
            <p class="text-gray-400 text-sm">What our members are saying about us</p>
        </div>
        <div class="flex items-center gap-4 bg-gray-800 px-4 py-2 rounded-lg">
            <div class="text-center">
                <p class="text-2xl font-bold text-orange-400"><?= count($feedback); ?></p>
                <p class="text-xs text-gray-400">Total Reviews</p>
            </div>
            <div class="h-8 w-px bg-gray-600"></div>
            <div class="text-center">
                <p class="text-2xl font-bold text-green-400">
                    <?= !empty($feedback) ? number_format(array_sum(array_column($feedback, 'rating')) / count($feedback), 1) : '0.0'; ?>
                </p>
                <p class="text-xs text-gray-400">Avg Rating</p>
            </div>
        </div>
    </div>

    <?php if (empty($feedback)): ?>
        <!-- Empty State -->
        <div class="text-center py-12 bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl border border-gray-700">
            <div class="w-16 h-16 mx-auto mb-4 bg-gray-700 rounded-full flex items-center justify-center">
                <i class="fas fa-comment text-gray-400 text-xl"></i>
            </div>
            <h4 class="text-lg font-semibold text-white mb-2">No Feedback Yet</h4>
            <p class="text-gray-400 max-w-sm mx-auto">
                Be the first to share your experience with our gym facilities and services.
            </p>
        </div>
    <?php else: ?>
        <!-- Feedback Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4 sm:gap-6">
            <?php foreach ($feedback as $feedbacks): ?>
                <div
                    class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl border border-gray-700 p-5 sm:p-6 hover:border-orange-500/30 transition-all duration-300 hover:transform hover:-translate-y-1">
                    <!-- Header -->
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-orange-500/20 rounded-full flex items-center justify-center">
                                <span class="text-orange-400 font-semibold text-sm">
                                    <?= strtoupper(substr(htmlspecialchars($feedbacks['name']), 0, 1)); ?>
                                </span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-white text-sm sm:text-base">
                                    <?= htmlspecialchars($feedbacks['name']); ?>
                                </h4>
                                <p class="text-gray-400 text-xs">Member</p>
                            </div>
                        </div>
                        <div class="text-yellow-400 text-sm sm:text-base flex gap-0.5">
                            <?php
                            $stars = intval($feedbacks['rating']);
                            for ($i = 1; $i <= 5; $i++) {
                                echo $i <= $stars
                                    ? '<span class="text-yellow-400">★</span>'
                                    : '<span class="text-gray-600">★</span>';
                            }
                            ?>
                        </div>
                    </div>

                    <!-- message -->
                    <p class="text-gray-300 text-sm sm:text-base leading-relaxed mb-4 line-clamp-3">
                        "<?= htmlspecialchars($feedbacks['feedback_text']); ?>"
                    </p>

                    <!-- reply from admin-->
                    <?php if (isset($feedbacks['admin_reply'])): ?>
                        <div class="bg-gray-700/50 rounded-lg p-4 mb-4 border-l-4 border-orange-500">
                            <div class="flex items-center gap-2 mb-2">
                                <div class="w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center">
                                    <span class="text-white font-semibold text-xs">A</span>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-white text-sm">Admin Reply</h5>
                                    <p class="text-gray-400 text-xs">WildGym Team</p>
                                </div>
                            </div>
                            <p class="text-gray-300 text-sm leading-relaxed">
                                <?= htmlspecialchars($feedbacks['admin_reply'] ?? ''); ?>
                            </p>
                        </div>
                    <?php endif; ?>

                    <!-- Footer -->
                    <div class="flex items-center justify-between pt-4 border-t border-gray-700">
                        <span class="text-gray-400 text-xs">
                            <?= date('M j, Y', strtotime($feedbacks['created_at'] ?? 'now')); ?>
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    <?php endif; ?>
</section>