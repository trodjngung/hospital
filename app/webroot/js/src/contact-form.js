$(function() {
	function getCookie(cname) {
		var name = cname + "=";
		var ca = document.cookie.split(';');
		for (var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ')
				c = c.substring(1);
			if (c.indexOf(name) == 0)
				return c.substring(name.length, c.length);
		}
		return "";
	}

	var lang = getCookie("CakeCookie[lang]");
	
	if (lang == "vn") {
		var nameRequired = "Làm ơn nhập tên của bạn";
		var nameMaxLength = "Họ và tên tối đa 255 kí tự";
		var emailRequired = "Làm ơn nhập địa chỉ email của bạn";
		var emailValid = "Làm ơn nhập chính xác địa chỉ email";
		var emailMaxLength = "Email ko quá 100 kí tự";
		var phoneMaxLength = "Số điện thoại không quá 15 kí tự";
		var companyMaxLength = "Tên công ty không quá 255 kí tự";
		var divisionMaxLength = "Tên vị trí không quá 255 kí tự";
		var positionMaxLength = "Tên bộ phận không quá 255 kí tự";
		var noteMaxLength = "Lời nhắn không quá 255 kí tự";
	} else if (lang == "jpn") {
		var nameRequired = "名前を入力してください。";
		var nameMaxLength = "255文字越えないでテキストを入力してください。";
		var emailRequired = "あなたのメールアドレスを入力してください。";
		var emailValid = "メールアドレスフォーム通りに入力してください。";
		var emailMaxLength = "100文字越えないでテキストを入力してください。";
		var phoneMaxLength = "15文字越えないでテキストを入力してください。";
		var companyMaxLength = "255文字越えないでテキストを入力してください。";
		var divisionMaxLength = "255文字越えないでテキストを入力してください。";
		var positionMaxLength = "255文字越えないでテキストを入力してください。";
		var noteMaxLength = "255文字越えないでテキストを入力してください。";
	} else {
		var nameRequired = "Please enter your name";
		var nameMaxLength = "Please enter no more than 255 characters";
		var emailRequired = "Please enter your email address";
		var emailValid = "Please enter a valid email address";
		var emailMaxLength = "Please enter no more than 100 characters";
		var phoneMaxLength = "Please enter no more than 15 characters";
		var companyMaxLength = "Please enter no more than 255 characters";
		var divisionMaxLength = "Please enter no more than 255 characters";
		var positionMaxLength = "Please enter no more than 255 characters";
		var noteMaxLength = "Please enter no more than 255 characters";
	}
	$(".contact-form").validate({
		rules : {
			name : {
				required : true,
				maxlength : 255
			},
			email : {
				required : true,
				email : true,
				maxlength : 100
			},
			phoneNumber : {
				maxlength : 15
			},
			company : {
				maxlength : 255
			},
			division : {
				maxlength : 255
			},
			position : {
				maxlength : 255
			},
			note : {
				maxlength : 255
			}
		},
		messages : {
			name : {
				required : nameRequired,
				maxlength : nameMaxLength
			},
			email : {
				required : emailRequired,
				email : emailValid,
				maxlength : emailMaxLength
			},
			phoneNumber : {
				maxlength : phoneMaxLength
			},
			company : {
				maxlength : companyMaxLength
			},
			division : {
				maxlength : divisionMaxLength
			},
			position : {
				maxlength : positionMaxLength
			},
			note : {
				maxlength : noteMaxLength
			}
		},
		submitHandler : function(form) {
			$.ajax({
				url : "ajax_contact",
				type : "POST",
				data : $(".contact-form").serialize(),
				success : function(data) {
					window.location.href = './thanks_for_contact';
					console.log("Send email successfully!")
				}
			})
		}
	});

});