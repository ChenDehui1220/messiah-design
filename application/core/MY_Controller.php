<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

date_default_timezone_set('Asia/Taipei');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->output->set_header("X-Frame-Options: sameorigin");
        $this->output->set_header("X-Content-Type-Options: nosniff");
        $this->output->set_header("X-XSS-Protection: 1;mode=block");

        // Codeigniter Profiler
        // $this->output->enable_profiler(TRUE);

        // 載入Session Library
        $this->load->library('session');
        
        // is_login
        if (!$this->session->userdata('is_login') && $this->router->fetch_class() !== 'welcome') {
            redirect('/admin');
            exit;
        }
    }

    // 載入View共用元件
    public function loadView($contentName, $data = array())
    {
        if ($contentName == 'webadmin/index') {
            $data['header'] = '';
            $data['menu'] = '';
            $data['footer'] = '';
        } else {
            $data['header'] = $this->load->view('webadmin/header', '', true);
            $data['menu'] = $this->load->view('webadmin/menu', '', true);
            $data['footer'] = $this->load->view('webadmin/footer', '', true);
        }
        $data['content'] = $this->load->view($contentName, $data, true);
        $this->load->view('webadmin/container', $data);
    }

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
