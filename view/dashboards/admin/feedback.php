<div class="page-content" id="feedback">
    <div class="flex flex-row sm:flex-row justify-between items-start sm:items-center mb-6 sm:mb-8 gap-4">
        <h2 class="ml-10 md:ml-0 text-xl sm:text-2xl font-semibold">Member Feedback</h2>
    </div>

    <div class="bg-gray-900 rounded-lg p-4 sm:p-5 shadow-lg">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-5 gap-4">
            <h3 class="text-lg font-semibold">Member Reviews & Feedback</h3>
        </div>

        <?php if (!empty($_SESSION['feedbackDeleted'])): ?>
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                <ul class="list-disc list-inside">
                    <?php
                    $successes = is_array($_SESSION['feedbackDeleted']) ? $_SESSION['feedbackDeleted'] : [$_SESSION['feedbackDeleted']];
                    foreach ($successes as $success): ?>
                        <li><?= htmlspecialchars($success) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php unset($_SESSION['feedbackDeleted']); ?>
        <?php endif; ?>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse min-w-[800px]">
                <thead>
                    <tr class="bg-gray-800">
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                            Member
                        </th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                            Rating
                        </th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                            Feedback
                        </th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                            Date
                        </th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allFeedback as $index => $feedbacks): ?>
                        <tr class="hover:bg-gray-800 transition-colors">
                            <td class="p-3 border-b border-gray-700"><?= htmlspecialchars($feedbacks['name']) ?></td>

                            <td class="p-3 border-b border-gray-700">
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <?php
                                    echo $i <= $feedbacks['rating'] ?
                                        '<span class="text-yellow-400">★</span>'
                                        : '<span class="text-gray-500">☆</span>';
                                    ?>
                                <?php endfor; ?>
                            </td>

                            <td class="p-3 border-b border-gray-700 max-w-xs truncate">
                                <?= htmlspecialchars($feedbacks['feedback_text']) ?>
                            </td>
                            <td class="p-3 border-b border-gray-700 whitespace-nowrap">
                                <?= date('F j, Y g:i A', strtotime($feedbacks['created_at'])) ?>
                            </td>

                            <td
                                class="flex flex-row md:flex-col p-3 border-b border-gray-700 whitespace-nowrap space-x-2 md:space-x-0 md:space-y-2 gap-3">
                                <form action="/deleteFeedback" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this feedback?');">
                                    <input type="hidden" name="__method" value="DELETE">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($feedbacks['id']); ?>">
                                    <button type="submit" name="deleteFeedback"
                                        class="w-full bg-transparent border border-gray-600 text-red-400 rounded-lg px-3 py-1 text-sm hover:bg-red-900 transition-colors">
                                        Delete
                                    </button>
                                </form>

                                <button onclick="toggleReplyForm(<?= $index ?>)"
                                    class="bg-orange-500 text-white rounded-lg px-3 py-1 text-sm hover:bg-orange-600 transition-colors">
                                    Reply
                                </button>
                            </td>

                        </tr>

                        <!--the reply form from admin-->
                        <tr id="reply-form-<?= $index ?>" class="hidden">
                            <td colspan="5" class="p-4 border-b border-gray-700 bg-gray-800/50">
                                <form method="POST" action="/reply" class="space-y-4">
                                    <input type="hidden" name="__method" value="PATCH">
                                    <input type="hidden" name="feedbackId" value="<?= $feedbacks['id'] ?>">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-300 mb-2">
                                            Reply to <?= htmlspecialchars($feedbacks['name']) ?>
                                        </label>
                                        <textarea name="reply_message" rows="4" placeholder="Type your response here..."
                                            maxlength="1000"
                                            class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-lg text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-colors"
                                            required><?= htmlspecialchars($feedbacks['admin_reply'] ?? '') ?></textarea>
                                    </div>

                                    <div class="flex gap-2">
                                        <button type="submit"
                                            class="bg-orange-500 text-white rounded-lg px-4 py-2 text-sm hover:bg-orange-600 transition-colors">
                                            <?php echo isset($feedbacks['admin_reply']) ? 'Update Reply' : 'Send Reply' ?>
                                        </button>
                                        <button type="button" onclick="toggleReplyForm(<?= $index ?>)"
                                            class="bg-transparent border border-gray-600 text-gray-100 rounded-lg px-4 py-2 text-sm hover:bg-gray-700 transition-colors">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>