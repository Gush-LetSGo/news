/**
 * 后台页面公共js方法
 */
//跳转到添加菜单页面
$("#button-add").click(function(){
	var url=SCOPE.add_url;
	window.location.href=url;
})
//添加菜单按钮提交方法
$("#singcms-button-submit").click(function(){
	var data=$("#singcms-form").serializeArray();
//	console.log(data);
	var postData={};
	$(data).each(function(i){
		postData[this.name]=this.value;
	})
	var url=SCOPE.save_url;
	$.post(url,postData,function(result){
		if(result.status==1){
			//添加成功
			return dialog.success(result.message,SCOPE.jump_url);
		}else if(result.status==0){
			//添加失败
			return dialog.error(result.message)
		}
	},'json');
	
})

//删除菜单
$(".delete_menu").click(function(){
	var menuId=$(this).attr("menu_id");
	var url='/news/workspace/index.php/admin/menu/delete';
	$.post(url,{'menuId':menuId},function(result){
		if(result.status==1){
			//添加成功
			return dialog.success(result.message,'/news/workspace/index.php/admin/menu/index');
		}else if(result.status==0){
			//添加失败
			return dialog.error(result.message)
		}
	},'json');
})


















