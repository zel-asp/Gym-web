<!DOCTYPE html>
<html lang="en">
    <?php require base_path('view/partials/head.php'); ?>

    <body
        class="min-h-screen bg-gradient-to-br from-[#0e1824] via-[#162435] to-[#0e1824] text-white flex items-center justify-center font-sans px-4">
        <div
            class="w-full max-w-4xl bg-[#121f2e]/90 p-8 rounded-2xl shadow-2xl backdrop-blur-sm border border-gray-700">
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <div class="w-20 h-20 rounded-full bg-green-500 flex items-center justify-center animate-bounce">
                        <i class="fas fa-check text-white text-3xl"></i>
                    </div>
                </div>
                <h4 class="text-2xl font-semibold">Payment Confirmed!</h4>
                <p class="text-gray-400 mt-2 text-sm">Please complete your payment using GCash</p>
            </div>

            <div class="border border-gray-700 rounded-xl p-4 mb-6 space-y-2">
                <div class="flex justify-between">
                    <span class="text-gray-400">Plan:</span>
                    <span id="selected-plan" class="font-medium"><?= htmlspecialchars($paymentInfo['plan']); ?></span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-400">Amount:</span>
                    <span id="payment-amount" class="font-medium"><?= htmlspecialchars($paymentInfo['amount']) ?></span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-400">Payment Method:</span>
                    <span id="selected-method"
                        class="font-medium"><?= htmlspecialchars($paymentInfo['payment_method']); ?></span>
                </div>
            </div>

            <div class="bg-blue-900/30 border border-blue-700 rounded-xl p-4 mb-6">
                <div class="flex items-start">
                    <i class="fas fa-info-circle text-blue-400 mt-1 mr-2"></i>
                    <div>
                        <h6 class="font-medium text-sm">How to Pay with GCash</h6>
                        <ol class="text-sm text-gray-300 mt-2 list-decimal pl-5 space-y-1">
                            <li>Open the GCash app</li>
                            <li>Tap “Scan QR”</li>
                            <li>Scan the QR code below</li>
                            <li>Enter the payment amount</li>
                            <li>Confirm your payment</li>
                            <li>Show GCash transaction to the frontdesk to verify</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="text-center mb-6">
                <h5 class="font-medium mb-3 text-lg">Scan QR Code to Pay</h5>
                <div class="bg-white p-4 rounded-xl inline-block shadow-md">
                    <div
                        class="w-56 h-56 bg-gradient-to-br from-blue-400 to-green-400 flex items-center justify-center rounded-lg">
                        <div class="text-center text-black p-4">
                            <div class="mb-2">
                                <i class="fas fa-qrcode text-4xl"></i>
                            </div>
                            <p class="text-sm font-bold">GCash QR Code</p>
                            <p class="text-xs mt-1">Scan to Pay</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-between">
                <form action="/destroy" method="POST">
                    <input type="hidden" name="__method" value="DELETE">
                    <button type="submit" id="back-to-payment" name="cancel"
                        class="bg-red-700 hover:bg-red-600 text-white font-medium px-4 py-2 rounded-lg transition-all duration-200 cursor-pointer">
                        <i class="fas fa-arrow-left mr-2"></i>Cancel
                    </button>
                </form>


                <a href=" /userdashboard?tab=payment" type="submit" id="payment-done"
                    class="bg-green-600 hover:bg-green-700 text-white font-medium px-4 py-2 rounded-lg transition-all duration-200">
                    I've Paid <i class="fas fa-check ml-2"></i>
                </a>
            </div>
        </div>
    </body>

</html>