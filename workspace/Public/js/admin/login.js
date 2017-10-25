/**
 * 后台管理员登录功能
 */
var login={
	checkUser:function(){
		var username=$('input[name="username"]').val();
		var password=$('input[name="password"]').val();
		if(!username){
			dialog.error("用户名不能为空！");
		}
		if(!password){
			dialog.error("密码不能为空！");
		}
		var url="index.php/admin/login/checkUser";
		var userData={'username':username,'password':password};
		$.post(url,userData,function(result){
			alert(result);
		})
	}
}














