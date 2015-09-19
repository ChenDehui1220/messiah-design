<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Manage extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    //密碼變更
    public function password()
    {
        $data = array();

        $this->load_class_js = 'password';
        $this->loadView('webadmin/manage_password', $data);
    }

}

/* End of file manage.php */
/* Location: ./application/controllers/webadmin/manage.php */
