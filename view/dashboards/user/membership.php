<!-- Membership Section -->
<section id="membership" class="tab-content hidden text-black">
    <h3 class="text-xl font-bold mb-4 text-white">User Information</h3>
    <div class="bg-[#121f2e] p-6 rounded-xl shadow-md">
        <form class="space-y-6">
            <div>
                <h4 class="font-semibold mb-3 border-b border-gray-600 pb-1 text-white">Personal Information</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" placeholder="Full Name"
                        class="p-3 rounded bg-white w-full focus:outline-none focus:ring-1 focus:ring-orange-500" />
                    <input type="date"
                        class="p-3 rounded bg-white w-full focus:outline-none focus:ring-1 focus:ring-orange-500" />
                    <select class="p-3 rounded bg-white w-full focus:outline-none focus:ring-1 focus:ring-orange-500">
                        <option>Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    <input type="text" placeholder="Contact Number"
                        class="p-3 rounded bg-white w-full focus:outline-none focus:ring-1 focus:ring-orange-500" />
                    <input type="text" placeholder="Address"
                        class="p-3 rounded bg-white w-full focus:outline-none focus:ring-1 focus:ring-orange-500 md:col-span-2" />
                    <input type="email" placeholder="Email Address"
                        class="p-3 rounded bg-white w-full focus:outline-none focus:ring-1 focus:ring-orange-500 md:col-span-2" />
                </div>
            </div>
            <div>
                <h4 class="font-semibold mb-3 border-b border-gray-600 pb-1 text-white">Health Information</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="number" placeholder="Height (cm)"
                        class="p-3 rounded bg-white w-full focus:outline-none focus:ring-1 focus:ring-orange-500" />
                    <input type="number" placeholder="Weight (kg)"
                        class="p-3 rounded bg-white w-full focus:outline-none focus:ring-1 focus:ring-orange-500" />
                    <textarea placeholder="Medical Conditions"
                        class="p-3 rounded bg-white w-full h-24 focus:outline-none focus:ring-1 focus:ring-orange-500 md:col-span-2"></textarea>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="button"
                    class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-3 rounded-lg transition-colors w-full md:w-auto">
                    Register
                </button>
            </div>
        </form>
    </div>
</section>