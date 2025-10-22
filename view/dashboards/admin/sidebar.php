<!-- Sidebar -->
<div id="sidebar"
    class="w-64 bg-gray-900 p-0 shadow-lg fixed h-full overflow-y-auto z-10 transition-all duration-300 md:w-64 sidebar-mobile md:sidebar-mobile:translate-x-0">

    <div class="flex items-center gap-2 p-5 pb-5 mb-5">
        <h1 class="text-xl font-bold w-full">Padogskei Gym</h1>

        <div class="flex items-center justify-between p-5 pb-5 border-b border-gray-700 mb-5">
            <!-- Close button visible on mobile only -->
            <span id="closeSidebar" class="md:hidden cursor-pointer text-white ">
                <i class="fas fa-circle-xmark"></i>
            </span>
        </div>
    </div>

    <ul class="list-none p-0 px-4">
        <li class="mb-1">
            <a href="#"
                class="nav-link flex items-center p-3 rounded-lg text-gray-100 hover:bg-gray-700 hover:text-brand transition-all duration-300"
                data-page="dashboard">
                <i class="fas fa-home mr-3 text-lg"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="mb-1">
            <a href="#"
                class="nav-link flex items-center p-3 rounded-lg text-gray-100 hover:bg-gray-700 hover:text-brand transition-all duration-300"
                data-page="members">
                <i class="fas fa-users mr-3 text-lg"></i>
                <span>Members</span>
            </a>
        </li>
        <li class="mb-1">
            <a href="#"
                class="nav-link flex items-center p-3 rounded-lg text-gray-100 hover:bg-gray-700 hover:text-brand transition-all duration-300"
                data-page="payments">
                <i class="fas fa-credit-card mr-3 text-lg"></i>
                <span>Payments</span>
            </a>
        </li>
        <li class="mb-1">
            <a href="#"
                class="nav-link flex items-center p-3 rounded-lg text-gray-100 hover:bg-gray-700 hover:text-brand transition-all duration-300"
                data-page="feedback">
                <i class="fas fa-comment-dots mr-3 text-lg"></i>
                <span>Feedback</span>
            </a>
        </li>
        <li class="mb-1">
            <a href="#"
                class="nav-link flex items-center p-3 rounded-lg text-gray-100 hover:bg-gray-700 hover:text-brand transition-all duration-300"
                data-page="settings">
                <i class="fas fa-cog mr-3 text-lg"></i>
                <span>Settings</span>
            </a>
        </li>
        <a href="/">
            <div
                class="lg:hidden flex items-center space-x-3 text-blue-500 p-4 cursor-pointer rounded-lg hover:bg-[#1c2d42] transition-colors ">
                <span class="fa fa-arrow-left "></span>
                <p>Home Page</p>
            </div>
        </a>
    </ul>
</div>