# 📂 tests/test_payments.php - Pruebas de Validación de Pagos

<?php
use PHPUnit\Framework\TestCase;
class PaymentTest extends TestCase {
    public function testProcessPayment() {
        $response = file_get_contents("http://localhost/api/process_payment.php");
        $data = json_decode($response, true);
        $this->assertEquals("success", $data["status"]);
    }
}
?>