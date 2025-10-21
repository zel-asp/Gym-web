<!-- Recent activity section -->
<div class="bg-gray-900 rounded-lg p-5 shadow-lg">
    <div class="flex justify-between items-center mb-5">
        <h3 class="text-lg font-semibold">Recent Activity</h3>
    </div>
    <ul class="list-none p-0">

        <!-- New Member Registration -->
        <?php if ($recentPayment && is_array($recentPayment)): ?>
            <li class="flex p-4 border-b border-gray-700">
                <div class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center mr-4 text-brand">
                    <i class="fas fa-user-plus"></i>
                </div>
                <div>
                    <h4 class="text-sm mb-1">New member registration</h4>
                    <p class="text-gray-400 text-sm">
                        <?= htmlspecialchars($recentPayment['name']); ?> signed up for a membership
                    </p>
                    <p class="text-gray-400 text-xs mt-1">
                        <?= date('M d, Y', strtotime($recentPayment['payment_date'])); ?>
                    </p>
                </div>
            </li>

            <!-- Recent Payment -->
            <li class="flex p-4 border-b border-gray-700">
                <div class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center mr-4 text-brand">
                    <i class="fas fa-credit-card"></i>
                </div>
                <div>
                    <h4 class="text-sm mb-1">Payment received</h4>
                    <p class="text-gray-400 text-sm">
                        <?= htmlspecialchars($recentPayment['name']); ?> made a payment of
                        ₱<?= number_format($recentPayment['amount'], 2); ?>
                    </p>
                    <p class="text-gray-400 text-xs mt-1">
                        <?= date('M d, Y', strtotime($recentPayment['payment_date'])); ?>
                    </p>
                </div>
            </li>
        <?php else: ?>
            <li class="p-4 text-gray-400">No recent payments found.</li>
        <?php endif; ?>

        <!-- Feedback -->
        <?php if (!empty($recentFeedback)): ?>
            <?php foreach ($recentFeedback as $recent): ?>
                <li class="flex p-4 border-b border-gray-700">
                    <div class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center mr-4 text-brand">
                        <i class="fas fa-comment"></i>
                    </div>
                    <div>
                        <h4 class="text-sm mb-1">New feedback submitted</h4>
                        <p class="text-gray-400 text-sm">
                            <?= htmlspecialchars($recent['name']); ?> left a <?= $recent['rating']; ?>-star rating
                            with comments
                        </p>
                        <p class="text-gray-400 text-xs mt-1">
                            <?= date('M d, Y', strtotime($recent['created_at'])); ?>
                        </p>
                    </div>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li class="p-4 text-gray-400">No feedback yet.</li>
        <?php endif; ?>
    </ul>
</div>