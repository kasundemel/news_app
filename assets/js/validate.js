function addUser(){
	$.ajax({
		url:"welcome/validation",
		type:"POST",
		dataType:"json",
		data:$('#add_user').serialize(),
		encode:true,
		success:function(data){
			if(!data.success){
				if(data.errors){
					$('#message').html(data.errors).addClass(alert-danger);
				}
			}
			else{
				alert(data.message);
			}
		}
	})
}

function discard(){

}
