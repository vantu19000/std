<?php

require plugin_dir_path( dirname( __FILE__ ) ) . 'libraries/bmiView.php';

class BMIMenu {

    public static function admin_menu() {
        add_menu_page( 'BMI', 'Quản lý website', 'manage_options', 'bmi_dashboard',  array( get_called_class(),'bmi_dashboard'), 'dashicons-admin-generic', 5 );
//        add_menu_page( 'HBPRO', 'Booking', 'manage_options', 'hb_booking',  array( get_called_class(), 'booking' ), site_url().'/wp-content/plugins/hbpro/assets/images/booking.png', 5 );
//        add_menu_page( 'HBPRO', 'Hotels', 'manage_options', 'hb_hotels',  array( get_called_class(), 'hotels' ), site_url().'/wp-content/plugins/hbpro/assets/images/booking.png', 5 );
        add_submenu_page( 'bmi_dashboard', 'Danh sách liên hệ', 'Danh sách liên hệ', 'manage_options', 'bmi_contact', array( get_called_class(), 'contact_page' ) );
//        add_submenu_page( 'bmi_dashboard', 'Danh sách mail đã gửi', 'Danh sách Mail đã gửi', 'manage_options', 'bmi_emails', array( get_called_class(), 'emails_page' ) );
        add_submenu_page( 'bmi_dashboard', 'Đội ngũ nhân viên', 'Đội ngũ nhân viên', 'manage_options', 'bmi_employee', array( get_called_class(), 'employee_page' ) );
        add_submenu_page( 'bmi_dashboard', 'Cài đặt chung', 'Cài đặt chung', 'manage_options', 'bmi_setting', array( get_called_class(), 'setting_page' ) );
//        add_submenu_page( 'bmi_dashboard', 'Hiển thị trang sản phẩm', 'Hiển thị trang sản phẩm', 'manage_options', 'product_page', array( get_called_class(), 'product_page' ) );
    }

    public static function product_page(){
	    require plugin_dir_path( dirname( __FILE__ ) ) . 'admin/productview/view.php';
    }

    public static function bmi_dashboard(){
//        return BMIView::loadView('settings');
        require plugin_dir_path( dirname( __FILE__ ) ) . 'admin/dashboard/view.php';
    }

    public static function contact_page(){
	    require plugin_dir_path( dirname( __FILE__ ) ) . 'admin/contacts/view.php';
    }

    public static function setting_page(){
	    require plugin_dir_path( dirname( __FILE__ ) ) . 'admin/settings/view.php';
    }
    public static function emails_page(){
	    require plugin_dir_path( dirname( __FILE__ ) ) . 'admin/emails/view.php';
    }

    public static function debug_page(){
	    require plugin_dir_path( dirname( __FILE__ ) ) . 'admin/debug/view.php';
    }

    public static function employee_page(){
	    require plugin_dir_path( dirname( __FILE__ ) ) . 'admin/employee/view.php';
    }

    public function run(){
        add_action( 'admin_menu', array( get_called_class(), 'admin_menu' ));
    }
}