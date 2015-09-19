<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        //type mapping url
        $this->typeLink = array(1 => 'interior', 2 => 'exhibition', 3 => 'graphic');
    }

    // 載入View共用元件
    private function loadView($contentName, $data = array())
    {
        //load news Model
        $this->load->Model('mdl_news');
        $data['newsTop2'] = $this->mdl_news->newsTop2();

        $data['content'] = $this->load->view($contentName, $data, true);
        $this->load->view('container', $data);
    }

    // 解析專案陣列
    private function parseProjectArray($v) {
        $img = json_decode($v->images);
        $v->cover = IMAGE_FOLDER . $img[0];
        $v->url = $this->typeLink[$v->type] . '/' . $v->id;
        unset($v->images);
        return $v;
    }

    public function index()
    {
        $this->main(1);
    }

    //首頁
	public function main($pageStart = 1)
	{
		$data = array();
        

        /*$pageLimit = 8;

        //load projects Model
        $this->load->Model('mdl_projects');
        $top2 = $this->mdl_projects->top2();
        foreach($top2 as $k => $v) {
            $data['top2'][] = $this->parseProjectArray($v);
        }

        //total count
        $count = $this->db->count_all('projects');

        //load pagination library
        $this->load->library('pagination');

        $config['base_url'] = '/main/page/';
        $config['first_link'] = false;
        $config['first_url'] = '/';
        $config['last_link'] = false;
        $config['total_rows'] = $count;
        $config['per_page'] = $pageLimit;
        $config['use_page_numbers'] = TRUE;
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        //find all
        $tmpAll = array();
        $all = $this->mdl_projects->pageAll($pageStart, $pageLimit);

        foreach($all as $k => $v) {
            $tmpAll[] = $this->parseProjectArray($v);
        }

        $data['all'] = $tmpAll;*/

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
    public function brand($type = 'story')
    {
        
        $data = array('brand_img' => 'brand_' . $type);

        $this->loadView('brand', $data);
    }

    //室內設計
    public function interior($id = null)
    {
        
        $data = array('projectMenu' => true);
        $type = 1;

        //load news Model
        $this->load->Model('mdl_projects');

        //load projects Model
        $data['one'] = $this->mdl_projects->pageOne($id, $type);

        if (!$data['one']) {
            redirect('/');
            exit;
        }
        
        $data['one'] = $data['one'][0];

        //find projects nav
        $data['nav'] = $this->mdl_projects->pageNav($type);
        $data['nav'] = $data['nav'];

        $this->loadView('interior', $data);
    }

    //商業空間
    public function exhibition($id = null)
    {
        
        $data = array('projectMenu' => true);
        $type = 2;

        //load projects Model
        $this->load->Model('mdl_projects');

        //find main projects
        $data['one'] = $this->mdl_projects->pageOne($id, $type);

        if (!$data['one']) {
            redirect('/');
            exit;
        }

        $data['one'] = $data['one'][0];

        //find projects nav
        $data['nav'] = $this->mdl_projects->pageNav($type);
        $data['nav'] = $data['nav'];

        $this->loadView('exhibition', $data);
    }

    //平面視覺
    public function graphic($id = null)
    {
        
        $data = array('projectMenu' => true);
        $type = 3;

        //load projects Model
        $this->load->Model('mdl_projects');

        //find main projects
        $data['one'] = $this->mdl_projects->pageOne($id, $type);
        
        if (!$data['one']) {
            redirect('/');
            exit;
        }

        $data['one'] = $data['one'][0];

        //find projects nav
        $data['nav'] = $this->mdl_projects->pageNav($type);
        $data['nav'] = $data['nav'];

        $this->loadView('graphic', $data);
    }

    //聯絡我們
    public function contact()
    {
        
        $data = array();

        $this->loadView('contact', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
