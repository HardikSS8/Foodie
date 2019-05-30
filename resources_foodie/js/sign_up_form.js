var $;

$(function validate() {
	'use strict';
	$('.error').hide();
    $(".button").click(function () {
      
		$('.error').hide();
		var name = $("input#name").val();
		if (name === "") {
			$("label#name_error").show();
			$("input#name").focus();
			return false;
        }
		var email = $("input#email").val();
		if (email === "") {
			$("label#email_error").show();
			$("input#email").focus();
            return false;
        }
		var password = $("input#password").val();
		if (password === "") {
			$("label#password_error").show();
			$("input#password").focus();
            return false;
        }
		var RepeatPassword = $("input#RepeatPassword").val();
		if (RepeatPassword === "" && RepeatPassword !== "password") {
			$("label#RepeatPassword_error").show();
			$("input#RepeatPassword").focus();
            return false;
        }
      
    });
	
});