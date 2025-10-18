<section id="dashboard" class="tab-content">
    <h3 class="text-xl font-bold mb-4">Dashboard</h3>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-[#121f2e] p-6 rounded-xl shadow-md">
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
        <div class="bg-[#121f2e] p-6 rounded-xl shadow-md">
            <h4 class="font-semibold mb-3 border-b border-gray-600 pb-1 text-center lg:text-left">Quick Summary</h4>
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-gray-300">Active Membership:</span>
                    <span class="text-orange-400 font-semibold">Premium Plan</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-300">Membership Plan:</span>
                    <span class="text-orange-400 font-semibold">Active</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-300">Last Payment:</span>
                    <span class="text-orange-400 font-semibold">October 5, 2025</span>
                </div>
            </div>
        </div>

    </div>
    <div class="bg-[#121f2e] p-6 rounded-xl shadow-md w-full mt-10">
        <h3 class="text-xl font-bold mb-4">Share Your Feedback</h3>
        <form class="space-y-4 w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input type="text" placeholder="Full Name"
                    class="p-3 rounded bg-[#1a2a3f] w-full focus:outline-none focus:ring-1 focus:ring-orange-500" />
                <input type="email" placeholder="Email (optional)"
                    class="p-3 rounded bg-[#1a2a3f] w-full focus:outline-none focus:ring-1 focus:ring-orange-500" />
            </div>
            <textarea placeholder="Write your feedback here..."
                class="p-3 rounded bg-[#1a2a3f] w-full h-32 focus:outline-none focus:ring-1 focus:ring-orange-500"></textarea>
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
                <button type="button"
                    class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-3 rounded-lg transition-colors w-full md:w-auto">
                    Submit Feedback
                </button>
            </div>
        </form>
    </div>
</section>