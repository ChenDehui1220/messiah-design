<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Projects extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('mdl_projects');
        $this->load_class_js = 'projects';
    }

    public function index()
    {
        $data = array();
        $data['result'] = $this->mdl_projects->all();

        $this->loadView('webadmin/projects_index', $data);
    }

    // 新增
    public function add()
    {   
        if ($this->input->post()){
            $type = $this->input->post('type');
            $top = $this->input->post('top');
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $address = $this->input->post('address');
            $createTime = $this->input->post('createTime');
            $status = $this->input->post('status');

            $result = $this->mdl_projects->add($type, $top, $title, $content, $address, $createTime, $status);

            if ($result!==null) {
                redirect('/admin/projects');
                exit;
            }
        }
        $data = array('result' => (object) array('type'=>'','top'=>0,'title'=>'','content'=>'','address'=>'','createTime'=>'','status'=>1));
        $this->loadView('webadmin/projects_edit', $data);
    }

    // 編輯
    public function edit($id = 0)
    {   
        if ($this->input->post()){
            $id = $this->input->post('id');
            $type = $this->input->post('type');
            $top = $this->input->post('top');
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $address = $this->input->post('address');
            $createTime = $this->input->post('createTime');
            $status = $this->input->post('status');

            $result = $this->mdl_projects->update($id, $type, $top, $title, $content, $address, $createTime, $status);

            if ($result!==null) {
                redirect('/admin/projects');
                exit;
            }
        }
        
        $data = array();

        if ($id !== 0) {
            $result = $this->mdl_projects->one($id);
            $data['result'] = $result[0];
            $this->loadView('webadmin/projects_edit', $data);
        } else {
            redirect('/admin/projects');
        }
    }

    // 刪除
    public function delete($id = 0)
    {   
        $data = array();

        if ($id !== 0) {
            $this->mdl_projects->delete($id);
        }
        redirect('/admin/projects');
    }
}

/* End of file news.php */
/* Location: ./application/controllers/webadmin/news.php */
