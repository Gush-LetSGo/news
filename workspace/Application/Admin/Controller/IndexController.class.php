<?php
/**
 * 后台Index相关
 */
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    
    public function index(){
//         if(!session('userData')){
//             redirect('/p2164894/workspace/index.php/admin/login/index');
//         }
    	return $this->display();
    }

    public function main() {
    	$this->display();
    }
}