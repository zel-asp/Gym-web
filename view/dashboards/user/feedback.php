<!-- Feedback Section -->
<section id="feedback" class="tab-content">

    <!-- Feedback List -->
    <div class=" space-y-4 w-full">
        <h3 class="text-xl font-bold text-white">User Feedbacks</h3>

        <?php foreach ($feedback as $feedbacks): ?>
            <div class="bg-[#1a2a3f] p-4 rounded-lg shadow">
                <div class="flex justify-between items-center mb-2">
                    <h4 class="font-semibold text-orange-400"><?= htmlspecialchars($feedbacks['name']); ?></h4>
                    <div class="text-yellow-400 text-lg">
                        <?php
                        $stars = intval($feedbacks['rating']);
                        echo str_repeat('★', $stars) . str_repeat('☆', 5 - $stars);
                        ?>
                    </div>
                </div>
                <p class="text-gray-300">
                    <?= htmlspecialchars($feedbacks['feedback_text']); ?>
                </p>
            </div>
        <?php endforeach; ?>

    </div>
</section>