<!DOCTYPE html>
<html>

<head>
    <title>Stripe Example</title>
    <meta charset="UTF-8" />
</head>

<body>

    <h1>Stripe Example</h1>
    <p>Thank you for your payment!</p>
    <?php
    require 'vendor/autoload.php';

    \Stripe\Stripe::setApiKey('YOUR_STRIPE_SECRET_KEY');

    $checkout_session = \Stripe\Checkout\Session::retrieve($_GET['session_id']);

    // In thông tin hóa đơn
    echo "Hóa đơn đã thanh toán:";
    echo "<pre>";
    print_r($checkout_session);
    echo "</pre>";
    ?>
</body>

</html>