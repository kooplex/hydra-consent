<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: davidt
 * Date: 2018.03.05.
 * Time: 9:34
 */

class Manage extends Base_Controller
{
    public function index(){
        $vars = [];

        $this->load->model('As_user_model');
        $r = $this->As_user_model->find_all();
        $vars[]=$r;
        $this->twig->display('manage/index',['vars'=>$vars]);
    }
}
