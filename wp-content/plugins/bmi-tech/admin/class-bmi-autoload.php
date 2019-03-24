<?php

class adminAutoLoader {

    public function __construct()
    {
    	$currentID = get_current_user_id();
    	if ($currentID){
		    $user_meta=get_userdata($currentID);
		    $user_roles=$user_meta->roles;
		    if (in_array('administrator', $user_roles))
		    {
			    $this->loadMVC();
		    }
	    }

    }

    private function loadMVC(){

        $input = $_GET;

        $controller = isset($input['controller'])?$input['controller']:null;

        if ($controller){
            $task = isset($input['task'])?$input['task']:null;
            if ($task){

                $file = plugin_dir_path( dirname( __FILE__ ) ) . 'admin/'.$controller.'/controller.php';

                if (file_exists($file)) {
                    require_once $file;
                    $class = __NAMESPACE__ . "\\" . "BMIController" . $controller;

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