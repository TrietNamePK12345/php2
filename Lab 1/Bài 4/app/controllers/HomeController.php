<?php 
class HomeController extends Controller{
    public $data = [], $model=[], $users;

    public function __construct(){
        $this->users = $this->model('HomeModel');
    }

    public function index(){
        $this->data['sub_content']['page_title'] = 'Trang chủ';
        $this->data['content'] = 'client/table/table';
        $this->render('layouts/client_layout', $this->data);
    }
}


?>