<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    // 載入View共用元件
    private function loadView($contentName, $data = array())
    {

        $data['content'] = $this->load->view($contentName, $data, true);
        $this->load->view('container', $data);
    }

    //首頁
	public function index()
	{
		$data = array();

        //load news Model
        $this->load->Model('mdl_news');
        $data['top5'] = $this->mdl_news->top5(); 

        $this->loadView('main', $data);

	}

    //最新消息
    public function news($id = null, $pageStart = 0)
    {
        
        $data = array();
        $pageLimit = 5;

        //load news Model
        $this->load->Model('mdl_news');

        //find main news
        $data['one'] = $this->mdl_news->pageOne($id);

        if (sizeof($data['one']) == 0) {
            redirect('news');
            exit;
        }
        $data['one'] = $data['one'][0];

        $data['ogTitle'] = $data['one']->title;

        //total count
        $newsCount = $this->db->count_all('news');

        //load pagination library
        $this->load->library('pagination');

        $config['base_url'] = '/news/page/';
        $config['first_link'] = false;
        $config['first_url'] = '/news';
        $config['last_link'] = false;
        $config['total_rows'] = $newsCount;
        $config['per_page'] = $pageLimit;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        //find others
        $data['others'] = $this->mdl_news->pageOthers($data['one']->id, $pageStart, $pageLimit);

        $this->loadView('news', $data);
    }

    //品牌故事
    public function about()
    {
        
        $data = array();

        $this->loadView('about', $data);
    }

    //室內設計
    public function interior()
    {
        
        $data = array();

        $this->loadView('interior', $data);
    }

    //商業空間
    public function exhibition()
    {
        
        $data = array();

        $this->loadView('exhibition', $data);
    }

    //平面視覺
    public function graphic()
    {
        
        $data = array();

        $this->loadView('graphic', $data);
    }

    //聯絡我們
    public function contact()
    {
        
        $data = array();

        $this->loadView('contact', $data);
    }

    //專案經歷
    public function experience()
    {
        
        $data = array();

        $this->loadView('experience', $data);
    }

    //團隊
    public function ourteam()
    {
        
        $data = array();

        $this->loadView('ourteam', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
