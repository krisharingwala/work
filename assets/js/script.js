$(function() {
	$("input[type='password'][data-eye]").each(function(i) {
		let $this = $(this);

		$this.wrap($("<div/>", {
			style: 'position:relative'
		}));
		$this.css({
			paddingRight: 60
		});
		$this.after($("<div/>", {
			html: '<i class="fas fa-eye-slash icon-2x"></i>',
			id: 'passeye-toggle-'+i,
			style: 'position:absolute;right:10px;top:50%;transform:translate(0,-50%);padding: 2px 7px;font-size:12px;cursor:pointer;'
		}));
		$this.after($("<input/>", {
			type: 'hidden',
			id: 'passeye-' + i
		}));
		$this.on("keyup paste", function() {
			$("#passeye-"+i).val($(this).val());
		});
		$("#passeye-toggle-"+i).on("click", function() {
			if($this.hasClass("show")) {
				$this.attr('type', 'password');
				$(this).html('<i class="fas fa-eye-slash icon-2x"></i>');
				$this.removeClass("show");
			}else{
				$this.attr('type', 'text');
				$this.val($("#passeye-"+i).val());
				$(this).html('<i class="fas fa-eye icon-2x"></i>');			
				$this.addClass("show");
			}
		});
	});


});


 $(document).ready(function(){
//*** login button click ***
	$('#login').click(function(){
		email=$.trim($("#email").val());
		password=$.trim($("#password").val());
		if (email.length!=''&&password.length!='') 
		{
			$.ajax({
			  	url:'user/loginChk',
			  	type:'POST',
			  	data:{'email':email,'password':password},
			  	success : function(feedback)
			  	{
			  		if (feedback=='success') 
			  		{
			  				$('#msg').html('Login Successfully.');
					  		$('#msg').addClass('success');
					  		$('#msg').removeClass('failure');
			  				$("#msg").fadeIn(4000,function(){
					            window.location.href="admin";
					        });
			  		} 
			  		else 
			  		{
			  				$('#msg').html('Wrong Username Or Password !!');
					  		$('#msg').addClass('failure');
					  		$('#msg').removeClass('success');
					  		$("#msg").fadeIn(4000).fadeOut(4000);
			  		}
			  			
			  	}
			});
		}
	});
});	