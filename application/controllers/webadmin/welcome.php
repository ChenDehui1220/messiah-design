<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Welcome extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // fetch class and method way example.
        // echo $this->router->fetch_class() . $this->router->fetch_method();
        // echo $this -> router -> fetch_module();

        $this->load_class_js = 'main';
    }

    // 後台登入頁
    public function index()
    {
        $data = array();

        $this->load_class_js = 'index';
        $this->loadView('webadmin/index', $data);
    }

    // 後台登入後首頁
    public function main()
    {
        $data = array();

        $this->loadView('webadmin/main', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/webadmin/welcome.php */
