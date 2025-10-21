<?php

use Core\Database;

session_start();

$config = require base_path('config/config.php');
$db = new Database($config['database']);

if (!isset($_SESSION['admin'])) {
    header('Location: /login');
    exit();
}

// Total users
$userCountStmt = $db->query("SELECT COUNT(*) AS total_users FROM users");
$userCount = $userCountStmt->fetch_one()['total_users'];

// total payment except pending status
$paymentSumStmt = $db->query("SELECT SUM(amount) AS total_payments FROM payments WHERE status != 'pending'");
$totalPayments = $paymentSumStmt->fetch_one()['total_payments'] ?? 0;

// payments
$recentPayments = $db->query("
        SELECT *
        FROM payments
        ORDER BY payment_date DESC
        LIMIT 5
    ")->find();

//for 1 person only
$recentPayment = $db->query("
        SELECT *
        FROM payments
        ORDER BY payment_date DESC
        LIMIT 1
    ")->fetch_one();


//select all
// Get filters from query string
$search = $_GET['search'] ?? '';
$statusFilter = $_GET['status'] ?? '';
$membershipFilter = $_GET['membership'] ?? '';

// Build the base query
$query = "
    SELECT 
        p.id AS payment_id,
        u.username,
        u.email,
        u.created_at,
        p.status,
        p.membership_status,
        p.payment_date
    FROM users u
    INNER JOIN payments p ON u.id = p.user_id
    WHERE p.payment_date = (
        SELECT MAX(p2.payment_date)
        FROM payments p2
        WHERE p2.user_id = u.id
    )
";

// Add filters dynamically
$params = [];

if (!empty($search)) {
    $query .= " AND (u.username LIKE ? OR u.email LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
}

if (!empty($statusFilter) && $statusFilter !== 'All') {
    $query .= " AND p.status = ?";
    $params[] = $statusFilter;
}

if (!empty($membershipFilter) && $membershipFilter !== 'All') {
    $query .= " AND p.membership_status = ?";
    $params[] = $membershipFilter;
}

$query .= " ORDER BY p.payment_date DESC";

$Payment = $db->query($query, $params)->find();




$recentFeedback = $db->query("
                SELECT *
                FROM feedback
                ORDER BY created_at DESC
                LIMIT 1
            ")->find();


// Total feedback
$feedbackCountStmt = $db->query("SELECT COUNT(*) AS total_feedback FROM feedback");
$totalFeedback = $feedbackCountStmt->fetch_one()['total_feedback'];

// Pass all to your view
view_path('dashboards/admin', 'index.php', [
    'userCount' => $userCount,
    'totalPayments' => $totalPayments,
    'totalFeedback' => $totalFeedback,
    'recentPayments' => $recentPayments,
    'recentFeedback' => $recentFeedback,
    'recentPayment' => $recentPayment,
    'paymentRecord' => $Payment
]);
