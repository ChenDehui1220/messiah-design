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

    //變更密碼
    function password_post() {
        $finalResult = array('status' => 'failed');
        $account = 'admin';
        $password = $this->post('old_password');
        $newPassword = $this->post('new_password');

        $this->load->model('mdl_auth');
        $result = $this->mdl_auth->auth($account, $password);

        if (!$result) {
            $finalResult['status'] = 'fail';
            $finalResult['message'] = '原密碼不正確，請重新輸入!';
            $this->response($finalResult, 400);
        } else {
            $result = $this->mdl_auth->update_password($newPassword);
            if ($result) {
                $finalResult['status'] = 'success';
                $this->response($finalResult, 200);
            } else {
                $finalResult['status'] = 'fail';
                $finalResult['message'] = '更新新密碼失敗，請聯絡工程師!';
                $this->response($finalResult, 400);
            }
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
