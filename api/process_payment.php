# 📂 api/process_payment.php - API de Procesamiento de Pagos

<?php
header("Content-Type: application/json");
$input = json_decode(file_get_contents("php://input"), true);
$response = ["status" => "success", "message" => "Pago aprobado"];
echo json_encode($response);
?>