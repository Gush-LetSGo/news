<?php
namespace Common\Model;
use Think\Model;

/**
 * 管理员类
 * @author  gusheng
 */
class MenuModel extends Model {
    
    private $_db='';
    public function __construct(){
        $this->_db=M('menu');
    }
    
    //新增菜单
    public function insert($data=array()){
        if(!$data || !is_array($data)){
            return 0;
        }
        return $this->_db->add($data);
    }
    
    //获取菜单列表
    public function getMenus($data,$page,$pageSize=10){
        $data["status"]=array("neq",-1);
        $offset=($page-1)*$pageSize;
        $list=$this->_db->where($data)->order("menu_id desc")->limit($offset,$pageSize)->select();
        return $list;
    }
    
    //查询的菜单共有多少条
    public function getMenusContent($data){
        $data["status"]=array("neq",-1);
        return $this->_db->where($data)->count();
    }
}





















