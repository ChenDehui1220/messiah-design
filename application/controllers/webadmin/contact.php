<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Contact extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('mdl_contact');
    }

    // 聯絡我們
    public function index()
    {
        $data = array();
        $data['result'] = $this->mdl_contact->all();

        $this->loadView('webadmin/contact_index', $data);
    }

    // 刪除
    public function delete($id = 0)
    {   
        $data = array();

        if ($id !== 0) {
            $this->mdl_contact->delete($id);
        }
        redirect('/admin/contact');
    }

}

/* End of file contact.php */
/* Location: ./application/controllers/webadmin/contact.php */
