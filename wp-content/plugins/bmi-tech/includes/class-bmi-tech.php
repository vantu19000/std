<?php


class BMI_INIT {

    protected $loader;
    protected $plugin_name;
    protected $version;

    public function __construct() {

        $this->plugin_name = 'BMI-TECH';
        $this->version = '1.0.0';
        $this->loadClass();
        if (is_admin()){
            $this->adminHook();
        }else{
            $this->loadMVC();
        }

    }

    private function loadClass(){
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-bmi-tech-loader.php';
        if (is_admin()){
            require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-bmi-tech.php';
            require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-bmi-autoload.php';
            require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-bmi-menu.php';
        }


        $this->loader = new BMI_LOADER();
    }

    private function loadMVC(){

        $input = $_GET;

        $view= isset($input['view'])?$input['view']:null;
        if($view){
            $file = plugin_dir_path( dirname( __FILE__ ) ) . 'templates/'.$view.'.php';
            if (file_exists($file)){
                require_once $file;
                exit();
            }
        }else{
            $controller = isset($input['bmiaction'])?$input['bmiaction']:null;

            if ($controller){
                $task = isset($input['task'])?$input['task']:null;
                if ($task){

                    $file = plugin_dir_path( dirname( __FILE__ ) ) . 'includes/functions/class-'.$controller.'.php';

                    if (file_exists($file)) {
                        require_once $file;
                        $class = __NAMESPACE__ . "\\" . "BMI" . $controller;

                        if (!class_exists($class)){
                            return;
                        }
                        $controllerClass = new $class();

                        if (method_exists($controllerClass, $task)){
                            $controllerClass->$task();
                        }
                    }

                }
            }

        }
    }

    private function adminHook() {

        $admin = new adminAutoLoader();
        $menu = new BMIMenu();
        $menu->run();

        $admin = new BMI_ADMIN_INIT($this->getPluginName(), $this->getVersion());
        $this->loader->add_action('admin_enqueue_scripts', $admin, 'enqueue_styles');
        $this->loader->add_action( 'admin_enqueue_scripts', $admin, 'enqueue_scripts' );
        $this->loader->add_action( 'init', $admin, 'new_cpt_job' );
        $this->loader->add_action( 'admin_menu', $admin, 'add_menu' );


//        $this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
//        $this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
//        $this->loader->add_action( 'init', $plugin_admin, 'new_cpt_job' );
//        $this->loader->add_action( 'init', $plugin_admin, 'new_taxonomy_type' );
//        $this->loader->add_filter( 'plugin_action_links_' . NOW_HIRING_FILE, $plugin_admin, 'link_settings' );
//        $this->loader->add_action( 'plugin_row_meta', $plugin_admin, 'link_row', 10, 2 );
//        $this->loader->add_action( 'admin_init', $plugin_admin, 'register_settings' );
//        $this->loader->add_action( 'admin_init', $plugin_admin, 'register_sections' );
//        $this->loader->add_action( 'admin_init', $plugin_admin, 'register_fields' );
//        $this->loader->add_action( 'admin_notices', $plugin_admin, 'display_admin_notices' );
//        $this->loader->add_action( 'admin_init', $plugin_admin, 'admin_notices_init' );

    }


    private function define_public_hooks() {

//        $plugin_public = new Now_Hiring_Public( $this->get_plugin_name(), $this->get_version() );
//        $this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles', $this->get_version(), TRUE );
//        $this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts', $this->get_version(), TRUE );
//        $this->loader->add_filter( 'single_template', $plugin_public, 'single_cpt_template' );
//        $this->loader->add_action( 'init', $plugin_public, 'register_shortcodes' );
//        $this->loader->add_action( 'nowhiring', $plugin_public, 'list_openings' );
//        $this->loader->add_action( 'nowhiring_howtoapply', $plugin_public, 'how_to_apply' );


    } // define_public_hooks()

    public function run() {
        $this->loader->run();
    }
    public function getPluginName() {
        return $this->plugin_name;
    }
    public function get_loader() {
        return $this->loader;
    }
    public function getVersion() {
        return $this->version;
    }

}
