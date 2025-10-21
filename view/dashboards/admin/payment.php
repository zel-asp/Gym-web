<div class="page-content" id="payments">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-semibold">Payment Management</h2>
        <button class="bg-brand text-white rounded-lg px-4 py-2 hover:bg-orange-600 transition-colors"><i
                class="fas fa-plus mr-2"></i> Record Payment</button>
    </div>

    <div class="bg-gray-900 rounded-lg p-5 shadow-lg">
        <div class="flex justify-between items-center mb-5">
            <h3 class="text-lg font-semibold">Payment History</h3>
            <div>
                <button
                    class="bg-transparent border border-gray-600 text-gray-100 rounded-lg px-4 py-2 hover:bg-gray-700 transition-colors"><i
                        class="fas fa-download mr-2"></i> Export</button>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                            Payment ID</th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                            Member</th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                            Amount</th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                            Payment Method</th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                            Date</th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                            Due Date</th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                            Status</th>
                        <th class="text-left p-3 text-gray-400 font-normal text-sm border-b border-gray-700">
                            Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-3 border-b border-gray-700">1</td>
                        <td class="p-3 border-b border-gray-700">Pedere San Goku</td>
                        <td class="p-3 border-b border-gray-700">₱1,500</td>
                        <td class="p-3 border-b border-gray-700">GCash</td>
                        <td class="p-3 border-b border-gray-700">Nov 15, 2025</td>
                        <td class="p-3 border-b border-gray-700">Nov 15, 2025</td>
                        <td class="p-3 border-b border-gray-700"><span class="status paid">Paid</span></td>
                        <td class="p-3 border-b border-gray-700">
                            <button
                                class="bg-transparent border border-gray-600 text-gray-100 rounded-lg px-3 py-1 text-sm hover:bg-gray-700 transition-colors mr-2">View</button>
                            <button
                                class="bg-transparent border border-gray-600 text-gray-100 rounded-lg px-3 py-1 text-sm hover:bg-gray-700 transition-colors">Receipt</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-3 border-b border-gray-700">2</td>
                        <td class="p-3 border-b border-gray-700">Juan Dela Cruz</td>
                        <td class="p-3 border-b border-gray-700">₱1,200</td>
                        <td class="p-3 border-b border-gray-700">Paypal</td>
                        <td class="p-3 border-b border-gray-700">Nov 14, 2025</td>
                        <td class="p-3 border-b border-gray-700">Nov 14, 2025</td>
                        <td class="p-3 border-b border-gray-700"><span class="status paid">Paid</span></td>
                        <td class="p-3 border-b border-gray-700">
                            <button
                                class="bg-transparent border border-gray-600 text-gray-100 rounded-lg px-3 py-1 text-sm hover:bg-gray-700 transition-colors mr-2">View</button>
                            <button
                                class="bg-transparent border border-gray-600 text-gray-100 rounded-lg px-3 py-1 text-sm hover:bg-gray-700 transition-colors">Receipt</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-3 border-b border-gray-700">3</td>
                        <td class="p-3 border-b border-gray-700">Johnloyd Garcia</td>
                        <td class="p-3 border-b border-gray-700">₱1,500</td>
                        <td class="p-3 border-b border-gray-700">Gcash</td>
                        <td class="p-3 border-b border-gray-700">Nov 10, 2025</td>
                        <td class="p-3 border-b border-gray-700">Nov 12, 2025</td>
                        <td class="p-3 border-b border-gray-700"><span class="status pending-payment">Pending</span>
                        </td>
                        <td class="p-3 border-b border-gray-700">
                            <button
                                class="bg-transparent border border-gray-600 text-gray-100 rounded-lg px-3 py-1 text-sm hover:bg-gray-700 transition-colors mr-2">View</button>
                            <button
                                class="bg-brand text-white rounded-lg px-3 py-1 text-sm hover:bg-orange-600 transition-colors">Remind</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-3 border-b border-gray-700">4</td>
                        <td class="p-3 border-b border-gray-700">Michael beez</td>
                        <td class="p-3 border-b border-gray-700">₱1,200</td>
                        <td class="p-3 border-b border-gray-700">Cash</td>
                        <td class="p-3 border-b border-gray-700">Nov 5, 2025</td>
                        <td class="p-3 border-b border-gray-700">Nov 1, 2025</td>
                        <td class="p-3 border-b border-gray-700"><span class="status overdue">Overdue</span>
                        </td>
                        <td class="p-3 border-b border-gray-700">
                            <button
                                class="bg-transparent border border-gray-600 text-gray-100 rounded-lg px-3 py-1 text-sm hover:bg-gray-700 transition-colors mr-2">View</button>
                            <button
                                class="bg-brand text-white rounded-lg px-3 py-1 text-sm hover:bg-orange-600 transition-colors">Remind</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-3 border-b border-gray-700">5</td>
                        <td class="p-3 border-b border-gray-700">Odette Johnson</td>
                        <td class="p-3 border-b border-gray-700">₱2,000</td>
                        <td class="p-3 border-b border-gray-700">GCash</td>
                        <td class="p-3 border-b border-gray-700">Nov 1, 2025</td>
                        <td class="p-3 border-b border-gray-700">Nov 1, 2025</td>
                        <td class="p-3 border-b border-gray-700"><span class="status paid">Paid</span></td>
                        <td class="p-3 border-b border-gray-700">
                            <button
                                class="bg-transparent border border-gray-600 text-gray-100 rounded-lg px-3 py-1 text-sm hover:bg-gray-700 transition-colors mr-2">View</button>
                            <button
                                class="bg-transparent border border-gray-600 text-gray-100 rounded-lg px-3 py-1 text-sm hover:bg-gray-700 transition-colors">Receipt</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>