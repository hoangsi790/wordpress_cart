<?php session_start(); ?>
<?php $parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] ); require_once( $parse_uri[0] . 'wp-load.php' ); ?>
<?php
$product_id=$_POST['value_delete_product_id'];
unset($_SESSION['product_id'][$product_id]);  /*Click vào dấu x thì xóa product id đó trong sesstion*/
unset($_SESSION['product_quantity'][$product_id]); /* Và xóa luôn số lượng trong giỏ hàng của sản phẩm đó*/



