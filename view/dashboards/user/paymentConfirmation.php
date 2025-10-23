<!DOCTYPE html>
<html lang="en">
    <?php require base_path('view/partials/head.php'); ?>

    <body
        class="min-h-screen bg-gradient-to-br from-[#0e1824] via-[#162435] to-[#0e1824] text-white flex items-center justify-center font-sans px-4 py-8">
        <div
            class="w-full max-w-4xl bg-[#121f2e]/90 p-6 sm:p-8 rounded-2xl shadow-2xl backdrop-blur-sm border border-gray-700">
            <div class="text-center mb-6 sm:mb-8">
                <div class="flex justify-center mb-4">
                    <div
                        class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-green-500 flex items-center justify-center animate-bounce">
                        <i class="fas fa-check text-white text-2xl sm:text-3xl"></i>
                    </div>
                </div>
                <h4 class="text-xl sm:text-2xl font-semibold">Payment Confirmed!</h4>
                <p class="text-gray-400 mt-2 text-sm">Please complete your payment using GCash</p>
            </div>

            <!-- Payment Details -->
            <div class="border border-gray-700 rounded-xl p-4 mb-6 space-y-2">
                <div class="flex justify-between">
                    <span class="text-gray-400">Plan:</span>
                    <span id="selected-plan"
                        class="font-medium text-sm sm:text-base"><?= htmlspecialchars($paymentInfo['plan']); ?></span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-400">Amount:</span>
                    <span id="payment-amount"
                        class="font-medium text-sm sm:text-base"><?= htmlspecialchars($paymentInfo['amount']) ?></span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-400">Payment Method:</span>
                    <span id="selected-method"
                        class="font-medium text-sm sm:text-base"><?= htmlspecialchars($paymentInfo['payment_method']); ?></span>
                </div>
            </div>

            <!-- Instructions -->
            <div class="bg-blue-900/30 border border-blue-700 rounded-xl p-4 mb-6">
                <div class="flex items-start">
                    <i class="fas fa-info-circle text-blue-400 mt-1 mr-2 flex-shrink-0"></i>
                    <div class="min-w-0">
                        <h6 class="font-medium text-sm sm:text-base">How to Pay with GCash</h6>
                        <ol class="text-xs sm:text-sm text-gray-300 mt-2 list-decimal pl-4 sm:pl-5 space-y-1">
                            <li>Open the GCash app</li>
                            <li>Tap "Scan QR" or the QR icon</li>
                            <li>Scan the QR code below or click the download QR code</li>
                            <li>In GCash click the Upload QR</li>
                            <li>Enter the payment amount</li>
                            <li>Confirm your payment</li>
                            <li>Show GCash transaction to the frontdesk to verify</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- QR Code Section -->
            <div class="text-center mb-6">
                <h5 class="font-medium mb-3 text-base sm:text-lg">Scan QR Code to Pay</h5>
                <div class="bg-white p-3 sm:p-4 rounded-xl inline-block shadow-md max-w-full mb-4">
                    <div
                        class="w-48 h-48 sm:w-56 sm:h-56 bg-gradient-to-br from-blue-400 to-green-400 flex items-center justify-center rounded-lg mx-auto">
                        <img src="assets/imgs/gcashqr.jpg" alt="GCash QR Code"
                            class="w-full h-full object-cover rounded-lg" id="qr-code-image">
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row justify-between gap-3 sm:gap-0">
                <form action="/destroy" method="POST" class="w-full sm:w-auto">
                    <input type="hidden" name="__method" value="DELETE">
                    <button type="submit" id="back-to-payment" name="cancel"
                        class="w-full sm:w-auto bg-red-700 hover:bg-red-600 text-white font-medium px-4 py-2 rounded-lg transition-all duration-200 cursor-pointer text-sm sm:text-base">
                        <i class="fas fa-arrow-left mr-2"></i>Cancel
                    </button>
                </form>

                <!-- Download Button -->
                <button onclick="downloadQRCode()"
                    class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-lg transition-all duration-200 text-center text-sm sm:text-base">
                    <i class="fas fa-download"></i>
                    Download QR Code
                </button>
                <a href="/userdashboard?tab=payment" id="payment-done"
                    class="w-full sm:w-auto bg-green-600 hover:bg-green-700 text-white font-medium px-4 py-2 rounded-lg transition-all duration-200 text-center text-sm sm:text-base">
                    I've Paid <i class="fas fa-check ml-2"></i>
                </a>
            </div>
        </div>

        <script src="assets/js/userDashboard.js">
        </script>
    </body>

</html>