<?php
include('database.php');

if (isset($_POST['get_order'])) {
    global $con;

    $search_string = mysqli_real_escape_string($con, $_POST['search_key']);

    $get_order_query = mysqli_query($con, "SELECT * FROM `customer_orders` WHERE `invoice_no` LIKE '%" . $search_string . "%'");

    $count_orders = mysqli_num_rows($get_order_query);

    if ($count_orders <= 0) {
    } else {
        while ($row_orders = mysqli_fetch_array($get_order_query)) {
            echo "<tr>
                <td>{$row_orders['customer_id']}</td>
                <td>{$row_orders['total_amount']}</td>
                <td><a href='#'>{$row_orders['invoice_no']}</a></td>
                <td>{$row_orders['total_products']}</td>
                <td>{$row_orders['order_status']}</td>
                <td>{$row_orders['customer_location']}</td>
            </tr>>";
        }
    }
}
