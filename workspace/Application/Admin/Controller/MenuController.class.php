<?php
/**
 * 菜单页面相关
 */
namespace Admin\Controller;
use Think\Controller;

class MenuController extends CommonController {
    //菜单页面展示
    function index(){
        $data=array();
        if(isset($_REQUEST["type"])&&in_array($_REQUEST["type"],array(0,1))){
            if($_REQUEST["type"]!=2){
                $data["type"]=$_REQUEST["type"];
                $this->assign("type",$data["type"]);
            }else{
                $this->assign("type",2);
            }
        }else{
            $this->assign("type",2);
        }
        
        
        //菜单首页table分页操作
        $page=$_REQUEST["p"]?$_REQUEST["p"]:1;
        $pageSize=$_REQUEST["pageSize"]?$_REQUEST["pageSize"]:5;
        $menuData=D("Menu")->getMenus($data,$page,$pageSize);
        $menusContent=D("Menu")->getMenusContent($data);
        
        $res=new \Think\Page($menusContent,$pageSize);
        $pageRse=$res->show();
        $this->assign("pageRes",$pageRse);
        $this->assign("menuData",$menuData);
        $this->display();
    }
    
    //菜单添加
    function add(){
        if($_POST){
            if(!$_POST[name] || !isset($_POST[name])){
                return show(0,'菜单名不能为空!');
            }
            if(!$_POST[m] || !isset($_POST[name])){
                return show(0,'模块名不能为空!');
            }
            if(!$_POST[c] || !isset($_POST[name])){
                return show(0,'控制器名不能为空!');
            }
            if(!$_POST[f] || !isset($_POST[name])){
                return show(0,'方法名名不能为空!');
            }
            $menuId=D('Menu')->insert($_POST);
            if($menuId){
                return show(1,'添加成功!',$menuId);
            }
            return show(0,'添加失败!',$menuId);
        }else{
            $this->display();
        }
        
    }
}

















