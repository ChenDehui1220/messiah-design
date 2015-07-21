<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class News extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('mdl_news');
        $this->load_class_js = 'news';
    }

    // 最新消息
    public function index()
    {
        $data = array();
        $data['result'] = $this->mdl_news->all();

        $this->loadView('webadmin/news_index', $data);
    }

    // 新增消息
    public function add()
    {   
        if ($this->input->post()){
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $createTime = $this->input->post('createTime');
            $status = $this->input->post('status');

            $result = $this->mdl_news->add($title, $content, $createTime, $status);

            if ($result!==null) {
                redirect('/admin/news');
                exit;
            }
        }
        $data = array('result' => (object) array('title'=>'','content'=>'','createTime'=>'','status'=>1));
        $this->loadView('webadmin/news_edit', $data);
    }

    // 編輯消息
    public function edit($id = 0)
    {   
        if ($this->input->post()){
            $id = $this->input->post('id');
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $createTime = $this->input->post('createTime');
            $status = $this->input->post('status');

            $result = $this->mdl_news->update($id, $title, $content, $createTime, $status);

            if ($result!==null) {
                redirect('/admin/news');
                exit;
            }
        }
        
        $data = array();

        if ($id !== 0) {
            $result = $this->mdl_news->one($id);
            $data['result'] = $result[0];
            $this->loadView('webadmin/news_edit', $data);
        } else {
            redirect('/admin/news');
        }
    }

    // 刪除消息
    public function delete($id = 0)
    {   
        $data = array();

        if ($id !== 0) {
            $this->mdl_news->delete($id);
        }
        redirect('/admin/news');
    }
}

/* End of file news.php */
/* Location: ./application/controllers/webadmin/news.php */
