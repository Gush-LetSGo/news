<?php
/**
 * 后台Index相关
 */
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    
    public function index(){
//         if(!session('userData')){
//             redirect('/news/workspace/index.php/admin/login/index');
//         }
    	return $this->display();
    }

    public function main() {
    	$this->display();
    }
}