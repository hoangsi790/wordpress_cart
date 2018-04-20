<?php session_start(); ?>
<?php $parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] ); require_once( $parse_uri[0] . 'wp-load.php' );  /*Sử dụng Ajax trong wordpress*/ ?>
<?php
if(isset($_POST['value_product_id'])) { /*Nếu tồn tại ID này từ Ajax, thêm nó vào SESSION để hiển thị trên giỏ hàng*/
	$product_id  =  array();  /*Khai báo 1 mảng rỗng, để chứa ID sản phẩm*/
	$product_id = $_POST['value_product_id']; /*Lấy giá trị ID sản phẩm từ Ajax*/
	$_SESSION['product_id'][$product_id] = $product_id; /*Cộng dồn id sản phẩm vào mảng SESSION ( Nhiều ID )*/
}
if(isset($_POST['value_product_quantity'])) { 
		$product_quantity =  array(); /*Tương tự như trên, lấy số lượng sản phẩm từ Ajax*/
		$product_quantity = $_POST['value_product_quantity'];
		$_SESSION['product_quantity'][$product_id] += $product_quantity; /*SESSION số lượng này sẽ có dạng, [mã sản phẩm] => số lượng, sẽ cộng dồn số lượng khi mua nhiều lần*/
}


if(isset($_POST['value_product_quantity_cart'])) {
	$product_quantity  =  array();
	$product_quantity = $_POST['value_product_quantity_cart'];  /*Lấy số lượng mới từ select ở trang giỏ hàng */
	$product_id  =  array();
	$product_id = $_POST['value_product_id_cart']; /* Lấy id của sản phẩm vừa thay đổi số lượng */
	$_SESSION['product_id'][$product_id] = $product_id;
	$_SESSION['product_quantity'][$product_id] = $product_quantity; 
}

// session_destroy();