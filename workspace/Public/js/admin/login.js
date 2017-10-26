/**
 * 后台管理员登录功能
 */
  $("body").keydown(function() {
	  if (event.keyCode == "13") {//keyCode=13是回车键
		  login.checkUser();
	  }
  })
var login={
	checkUser:function(){
		var username=$('input[name="username"]').val();
		var password=$('input[name="password"]').val();
		var url="/p2164894/workspace/index.php/admin/login/checkUser";
		var userData={'username':username,'password':password};
		$.post(url,userData,function(result){
			if(result['status']==0){
				dialog.error(result['message']);
			}else{
				dialog.success(result['message'],'/p2164894/workspace/index.php/admin/index/index');
			}
		},'json');
	}
}














