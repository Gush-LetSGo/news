<?php
/*
 * 公共的方法
 */
 
//向前台返回信息
function show($status,$message,$data){
    $result=array(
        'status'=>$status,
        'message'=>$message,
        'data'=>$data,
    );
    exit(json_encode($result));
}

//给密码加md5
function getMd5Password($password){
    return md5($password.C('MD5_PRE'));
}

//菜单类型显示
function getMenuType($type){
    return $type==1?"后台菜单":"前台菜单";
}

function status($status){
    if($status==0){
        $str="关闭";
    }elseif($status==1){
        $str="正常";
    }elseif($status==-1){
        $str="删除";
    }
    return $str;
}









