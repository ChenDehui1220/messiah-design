<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Auth extends REST_Controller {

    function __construct() {
        parent::__construct();
    }

    //登入
    function login_post() {
        $finalResult = array('status' => 'failed');
        $account = $this->post('account');
        $password = $this->post('password');

        $this->load->model('mdl_auth');
        $result = $this->mdl_auth->auth($account, $password);

        if ($result) {
            $this->load->library('session');
            $this->session->set_userdata(array('is_login' => TRUE));

            $finalResult['status'] = 'success';
            $this->response($finalResult, 200);
        } else {
            $this->response(null, 400);
        }
    }

    //登出
    function logout_post() {
        $finalResult = array('status' => true);

        $this->load->library('session');
        $this->session->unset_userdata('is_login');

        $this->response($finalResult, 200);
    }

    //聯絡我們
    function contact_post() {
        $finalResult = array('status' => 'failed');
        $name = $this->post('name');
        $email = $this->post('email');
        $subject = $this->post('subject');
        $message = $this->post('message');

        $this->load->model('mdl_contact');
        $result = $this->mdl_contact->add($name, $email, $subject, $message);

        if ($result) {
            $finalResult['status'] = 'success';
            $this->response($finalResult, 200);
        } else {
            $this->response(null, 400);
        }
    }
}
