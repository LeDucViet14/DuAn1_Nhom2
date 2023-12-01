<?php
require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "sk_test_51OHiR0Hyv2hYU0r6DaoDeJeXKgWaMSgnpH6flGF8H790oNY2sUrrmZFG0KOI6XuFdOIdcZQDKNRqrh9GThGAzDPU005izFzJhz";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$amount1 = 2000 * 100;  // 2000 VND
$amount2 = 700 * 100;   // 700 VND

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/duan1_nhom2/success.php",
    "cancel_url" => "http://localhost/duan1_nhom2/index.php",
    "locale" => "auto",
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "vnd",
                "unit_amount" => $amount1,
                "product_data" => [
                    "name" => "Phòng D101"
                ]
            ]
        ],
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);
