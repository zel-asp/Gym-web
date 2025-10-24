<div class="w-full mx-auto">
    <section class="page-content" id="announcement">
        <div class="flex flex-row sm:flex-row justify-between items-start sm:items-center mb-6 sm:mb-8 gap-4">
            <h2 class="ml-10 md:ml-0 text-xl sm:text-2xl font-semibold">Announcements</h2>
        </div>

        <div class="bg-gray-900 rounded-lg p-4 sm:p-5 shadow-lg">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-5 gap-4">
                <h3 class="text-lg font-semibold">Gym Announcements</h3>
                <button onclick="toggleAnnouncementForm()"
                    class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg transition-colors text-sm">
                    <i class="fas fa-plus mr-2"></i> Add New
                </button>
            </div>

            <?php if (!empty($_SESSION['announcementSuccess'])): ?>
                <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    <ul class="list-disc list-inside">
                        <?php
                        $successes = is_array($_SESSION['announcementSuccess']) ? $_SESSION['announcementSuccess'] : [$_SESSION['announcementSuccess']];
                        foreach ($successes as $success): ?>
                            <li><?= htmlspecialchars($success) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php unset($_SESSION['announcementSuccess']); ?>
            <?php endif; ?>

            <!-- Add New Announcement Modal -->
            <div id="announcementModal"
                class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
                <div class="bg-gray-800 rounded-lg w-full max-w-md">
                    <div class="flex justify-between items-center p-6 border-b border-gray-700">
                        <h3 class="text-lg font-semibold text-white">Create New Announcement</h3>
                        <button onclick="toggleAnnouncementForm()" class="text-gray-400 hover:text-white">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <form method="POST" action="/createAnnouncement" class="p-6 space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Announcement Title
                            </label>
                            <input type="text" name="title" placeholder="Enter announcement title" required
                                class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-lg text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-colors">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Announcement Details
                            </label>
                            <textarea name="details" rows="4" placeholder="Enter announcement details..." required
                                maxlength="1000" class=" w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-lg text-gray-100
                                placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500
                                focus:border-transparent transition-colors"></textarea>
                        </div>

                        <div class="flex gap-2 pt-4">
                            <button type="submit"
                                class="bg-orange-500 text-white rounded-lg px-4 py-2 text-sm hover:bg-orange-600 transition-colors">
                                Create Announcement
                            </button>
                            <button type="button" onclick="toggleAnnouncementForm()"
                                class="bg-transparent border border-gray-600 text-gray-100 rounded-lg px-4 py-2 text-sm hover:bg-gray-700 transition-colors">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full border-collapse min-w-[800px]">
                    <thead>
                        <tr class="bg-gray-800">
                            <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                                Announcement
                            </th>
                            <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                                Details
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
                        <!-- announcement 1 -->
                        <?php if (!empty($announcements)): ?>
                            <?php foreach ($announcements as $announcement): ?>
                                <tr class="hover:bg-gray-800 transition-colors">
                                    <td class="p-3 border-b border-gray-700">
                                        <div class="center-vertical">
                                            <span class="text-orange-400 mr-3 mt-1 text-lg"><i
                                                    class="fas fa-bullhorn"></i></span>
                                            <span class="font-medium"><?= htmlspecialchars($announcement['title']); ?></span>
                                        </div>
                                    </td>
                                    <td class="p-3 border-b border-gray-700 max-w-xs">
                                        <p class="text-gray-400 text-sm"><?= htmlspecialchars($announcement['details']); ?></p>
                                    </td>
                                    <td class="p-3 border-b border-gray-700 whitespace-nowrap">
                                        <?= date('F j, Y g:i A', strtotime(htmlspecialchars($announcement['created_at']))); ?>
                                    </td>
                                    <td class="p-3 border-b border-gray-700 whitespace-nowrap">
                                        <div class="flex gap-2">
                                            <form action="/deleteAnnouncement" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this announcement?');">
                                                <input type="hidden" name="__method" value="DELETE">
                                                <input type="hidden" name="id"
                                                    value="<?= htmlspecialchars($announcement['id']); ?>">
                                                <button type="submit" name="deleteAnnouncement"
                                                    class="w-full bg-transparent border border-gray-600 text-red-400 rounded-lg px-3 py-1 text-sm hover:bg-red-900 transition-colors">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="bg-[#121f2e] p-6 rounded-xl shadow-md">
                                <h4 class="font-semibold mb-3 border-b border-gray-600 pb-1 text-center lg:text-left">Quick
                                    Summary</h4>
                                <p class="text-center text-gray-400">No announcement found.</p>
                            </div>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>