<!-- Payment Section -->
<section id="payment" class="tab-content hidden">
    <h3 class="text-xl font-bold mb-4">Membership Payment</h3>
    <div class="bg-[#121f2e]  p-6 rounded-xl shadow-md w-full">
        <form class="space-y-4">
            <input type="text" placeholder="Full Name"
                class="p-3 rounded bg-[#1a2a3f] w-full focus:outline-none focus:ring-1 focus:ring-orange-500" />
            <select class="p-3 rounded bg-[#1a2a3f] w-full focus:outline-none focus:ring-1 focus:ring-orange-500">
                <option>Select Plan</option>
                <option>15 Days - ₱350</option>
                <option>Monntly - ₱700</option>
                <option>Quarterly - ₱2000</option>
            </select>
            <select class="p-3 rounded bg-[#1a2a3f] w-full focus:outline-none focus:ring-1 focus:ring-orange-500">
                <option>Choose Payment Method</option>
                <option>GCash</option>
                <option>PayPal</option>
            </select>
            <div class="flex justify-end">
                <button type="button"
                    class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-3 rounded-lg transition-colors w-full md:w-auto">
                    Confirm Payment
                </button>
            </div>
        </form>
    </div>
</section>