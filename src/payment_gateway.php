# 📂 src/payment_gateway.php - Plugin de Pagos en WordPress

<?php
/* Plugin Name: WordPress Payment Gateway */
function process_payment($order_id) {
    $order = wc_get_order($order_id);
    $payment_api_url = "https://api.banco.com/payments";
    
    $response = wp_remote_post($payment_api_url, [
        'body' => json_encode([
            'amount' => $order->get_total(),
            'card_number' => $_POST['card_number'],
            'expiry_date' => $_POST['expiry_date'],
            'cvv' => $_POST['cvv']
        ]),
    ]);
    
    return json_decode(wp_remote_retrieve_body($response));
}
add_action('woocommerce_payment_complete', 'process_payment');
?>