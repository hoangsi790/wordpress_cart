<?php
add_action( 'init', 'register_my_cpts_bill' );
function register_my_cpts_bill() {
	$labels = array(
		"name" => "Đơn hàng",
		"singular_name" => "Đơn hàng",
		"menu_name" => "Đơn hàng",
		"all_items" => "Tất cả Đơn hàng",
		"add_new" => "Thêm mới",
		"add_new_item" => "Thêm mới Đơn hàng",
		"edit" => "Sửa",
		"edit_item" => "Sửa Đơn hàng",
		"new_item" => "Đơn hàng mới",
		"view" => "Hiển thị",
		"view_item" => "Hiển thị Đơn hàng",
		"search_items" => "Tìm kiếm Đơn hàng",
		"not_found" => "Không tìm thấy Đơn hàng",
		"not_found_in_trash" => "Không tìm thấy Đơn hàng trong thùng rác",
		"parent" => "Đơn hàng cha",
		);
	$args = array(
		"labels" => $labels,
		"description" => "Custom post type Đơn hàng",
		"public" => true,
		"show_ui" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "don-hang", "with_front" => true ),
        "supports" =>array(
            'title',
            'editor',
            
            'thumbnail',
            'comments',
           
            'custom-fields'),
		"query_var" => true,
		"menu_position" => 4,
		"menu_icon" => "dashicons-clipboard"		
		
	);
	register_post_type( "don-hang", $args );
// End of register_my_cpts()
}
 
// Register Taxonomies
add_action( 'init', 'register_my_taxes_bill' );
function register_my_taxes_bill() {
	$labels = array(
		"name" => "Tình trạng Đơn hàng",
		"label" => "Tình trạng Đơn hàng",
		"menu_name" => "Tình trạng",
		"all_items" => "Tất cả Tình trạng",
		"edit_item" => "Chỉnh sửa Tình trạng",
		"view_item" => "Hiển thị Tình trạng",
		"update_item" => "Cập nhật tên Tình trạng",
		"add_new_item" => "Thêm mới Tình trạng",
		"new_item_name" => "Tên Tình trạng mới",
		"parent_item" => "Tình trạng cha",
		"parent_item_colon" => "Tình trạng cha:",
		"search_items" => "Tìm kiếm Tình trạng",
		"popular_items" => "Tình trạng phổ biến",
		"separate_items_with_commas" => "Ngăn cách chuyên mục bằng dấu phẩy",
		"add_or_remove_items" => "Thêm hoặc xóa Tình trạng",
		"choose_from_most_used" => "Chọn Tình trạng được sử dụng nhiều nhất",
		"not_found" => "Không tìm thấy Tình trạng"
		);
	$args = array(
		"labels" => $labels,
		"hierarchical" => true,
		"label" => "Tình trạng Đơn hàng",
		"show_ui" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'tinh-trang-don-hang', 'with_front' => true ),
		"show_admin_column" => true
	);
	register_taxonomy( "tinh-trang-don-hang", array( "don-hang" ), $args );
	
}