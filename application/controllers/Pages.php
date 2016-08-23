<?php
/**
 * Created by PhpStorm.
 * User: wangzl
 * Date: 16/8/6
 * Time: 上午10:59
 */

class Pages extends CI_Controller{
    
    public function view($page = 'home'){
//        var_dump(file_exists('/Users/wangzhonglin/My_Project/ci_test/application/views/pages/home.php'));
//        var_dump(APPPATH.'views/pages/'.$page.'.php');die;
        if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

    public function index(){
        echo 333333;die;
    }
}