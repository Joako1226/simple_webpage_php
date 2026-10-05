<?php

session_start();

require_once '../vendor/autoload.php';

use Dompdf\Dompdf;


$orderId = $_GET['order_id'];

$order = $_SESSION['user_history'][$orderId];

$orderTotal = 0;

$html = '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Historial de compra</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        h1 {
            text-align: center;
        }

        h3 {
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #343a40;
            color: white;
        }

        .total {
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h1>Historial de compra</h1>

    <h3>Data: ' . htmlspecialchars($order['date']) . '</h3>

    <table>

        <thead>
            <tr>
                <th>Producte</th>
                <th>Preu</th>
                <th>Quantitat</th>
                <th>Subtotal</th>
            </tr>
        </thead>

        <tbody>
';

foreach ($order['cart'] as $product) {

    $subtotal = $product['price'] * $product['qty'];

    $orderTotal += $subtotal;

    $html .= '
        <tr>
            <td>' . htmlspecialchars($product['name']) . '</td>
            <td>' . number_format($product['price'], 2) . ' €</td>
            <td>' . $product['qty'] . '</td>
            <td>' . number_format($subtotal, 2) . ' €</td>
        </tr>
    ';
}

$html .= '
        </tbody>

        <tfoot>
            <tr>
                <td colspan="3" class="total">
                    Total:
                </td>

                <td>
                    ' . number_format($orderTotal, 2) . ' €
                </td>
            </tr>
        </tfoot>

    </table>

</body>
</html>
';

$dompdf = new Dompdf();

$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

$dompdf->stream(
    'compra_' . $orderId . '.pdf',
    [
        'Attachment' => true
    ]
);

exit;
