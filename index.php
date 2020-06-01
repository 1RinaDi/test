<?php
    require 'Models/DB.php';
    require 'Controllers/Order.php';

    $order = Orders::CalcNDS();
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <table>
            <tr>
                <td>
                    Сумма заказа (без учета НДС):
                </td>
                <td>
                    <?=number_format($order[0]["Сумма"], 2, ',', ' ')." руб.";?>
                </td>
            </tr>
            <tr>
                <td>
                    НДС заказа:

                </td>
                <td>
                    <?=number_format($order[0]["НДС"], 2, ',', ' ')." руб.";?>
                </td>
            </tr>
        </table>
    </body>
</html>
