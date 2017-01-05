$(function(){
	$("form#form-msg").submit(function(){
		$.ajax({
			type:"POST",
			url: "action.php",
			data:{
				mensagem: $("textarea[name=mensagem]").val()
			}
		}).done(function(e){
			$("div.comments").append(e);
		});
		return false;
	});
})