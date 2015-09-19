<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Common extends REST_Controller {

    function __construct() {
        parent::__construct();
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

    //檔案上傳
    function upload_get()
    {
    }
    function upload_delete()
    {
        $this->load->helper('file');
        $args = $this->_delete_args;

        if (isset($args['name'])) {
            unlink('./uploads/'.$args['name']);
        }
    }
    function upload_post()
    {
        $width = $this->post('width');
        $height = $this->post('height');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '0';
        $config['max_width']  = '0';
        $config['max_height']  = '0';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        } else {
            $data = $this->upload->data();
            $data['site_img_url'] = $this->config->base_url() . 'uploads/' . $data['file_name'];

            //resize
            if (isset($width) && $width > 0 && isset($height) && $height > 0) {
                $config['image_library'] = 'gd2';
                $config['source_image'] = $data['full_path'];
                $config['maintain_ratio'] = TRUE;
                $config['width']  = $width;
                $config['height'] = $height;

                $this->load->library('image_lib',$config); 

                if (!$this->image_lib->resize())
                {
                    echo $this->image_lib->display_errors();
                } else {
                    $data['thum_name'] = $data['raw_name'] . '_thumb' . $data['file_ext'];
                }
            }

            chmod($data['full_path'], 0755);

            echo json_encode($data);
        }
    }
}
