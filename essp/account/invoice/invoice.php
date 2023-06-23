<?php
use Phppot\Order;

require_once __DIR__ . '/Model/Order.php';
$orderModel = new Order();
$result = $orderModel->getPdfGenerateValues($_GET["id"]);
$orderItemResult = $orderModel->getOrderItems($result[0]["id"]);
if (! empty($result)) {
    require_once __DIR__ . "/lib/PDFService.php";
    $pdfService = new PDFService();
    $pdfService->generatePDF($result, $orderItemResult);
}