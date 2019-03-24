<?php

class BMIView {


	protected $_template;
	protected $_path;

    public function __construct()
    {

        $view = $this->getName();

        $layout = 'default';
        if(isset($_REQUEST['layout'])){
            $layout = $_REQUEST['layout'] ? $_REQUEST['layout'] : 'default';
        }

        $file = plugin_dir_path( dirname( __FILE__ ) ) . 'admin/'.$view.'/tmpl/'.$layout.'.php';
        $file = plugin_dir_path( dirname( __FILE__ ) ) . 'admin/'.$view.'/view.php';

        if (file_exists($file)){
            $items = $this->loadModel($view);
            $required = require $file;
//            $required(['items', $items]);
        }

    }

    public function loadModel($view = null){
    	if (!$view) $view = $this->getName();
        $file = plugin_dir_path( dirname( __FILE__ ) ) . 'admin/'.$view.'/model.php';
        if (file_exists($file)){
            require $file;
            $class = __NAMESPACE__ . "\\" . "BMIModel" . $view;
            if (!class_exists($class)){
                return;
            }
            $modelClass = new $class();
            if (method_exists($modelClass, 'getItems')){
                return $modelClass->getItems();
            }
        }
    }

    public static function includeView($view, $data = null){
        $file = plugin_dir_path( dirname( __FILE__ ) ) . 'admin/'.$view.'/view.php';
        if (file_exists($file)){
            $require = require $file;
            $require(['items' => $data]);
        }
    }

    public function display($tpl = null)
    {
        $result = $this->loadTemplate($tpl);

        if ($result instanceof Exception)
        {
            return $result;
        }

        echo $result;
    }

    public function getName()
    {
        if (empty($this->_name))
        {
            $classname = get_class($this);
            $viewpos = strpos($classname, 'View');

            if ($viewpos === false)
            {
                throw new Exception('view not found', 500);
            }

            $this->_name = strtolower(substr($classname, $viewpos + 4));
        }

        return $this->_name;
    }

    public function loadTemplate($tpl = null)
    {
        $this->_output = null;
        $layout = 'default';

	    if(isset($_REQUEST['layout'])){
		    $layout = $_REQUEST['layout'] ? $_REQUEST['layout'] : 'default';
	    }

	    $file = $layout;
        $file = preg_replace('/[^A-Z0-9_\.-]/i', '', $file);
        $tpl = isset($tpl) ? preg_replace('/[^A-Z0-9_\.-]/i', '', $tpl) : $tpl;

        $filetofind = $tpl ? $tpl : $layout;

	    $this->_path = plugin_dir_path( dirname( __FILE__ ) ) . 'admin/' . $this->getName() . '/tmpl';

        $this->_template = $this->find($this->_path, $filetofind);

        if ($this->_template != false)
        {
            unset($tpl);
            unset($file);
            ob_start();
            include $this->_template;
            $this->_output = ob_get_contents();
            ob_end_clean();
            return $this->_output;
        }
        else
        {
            echo ('Layout file not found '.$this->_path.'/'.$file);
            return;
        }
    }

    public function find($path, $file)
    {
        $fullname = $path . '/' . $file.'.php';
        if (strpos($path, '://') === false)
        {
            $path = realpath($path);
            $fullname = realpath($fullname);
        }
        if (file_exists($fullname) && substr($fullname, 0, strlen($path)) == $path)
        {
            return $fullname;
        }
        return false;
    }


}