$(function ($) {
	//弹出登录
	$("#example").hover(function () {
		$(this).stop().animate({
			opacity: '1'
		}, 600);
	}, function () {
		$(this).stop().animate({
			opacity: '0.6'
		}, 1000);
	}).on('click', function () {
		$("body").append("<div id='mask'></div>");
		$("#mask").addClass("mask").fadeIn("slow");
		$("#LoginBox").fadeIn("slow");
	});
	//
	//按钮的透明度
	$("#loginbtn").hover(function () {
		$(this).stop().animate({
			opacity: '1'
		}, 600);
	}, function () {
		$(this).stop().animate({
			opacity: '0.8'
		}, 1000);
	});
	//文本框不允许为空---按钮触发
	$("#loginbtn").on('click', function () {
		var txtName = $("#txtName").val();
		var txtPwd = $("#txtPwd").val();
		if (txtName == "" || txtName == undefined || txtName == null) {
			if (txtPwd == "" || txtPwd == undefined || txtPwd == null) {
				$(".warning").css({ display: 'block' });
			}
			else {
				$("#warn").css({ display: 'block' });
				$("#warn2").css({ display: 'none' });
			}
		}
		else {
			if (txtPwd == "" || txtPwd == undefined || txtPwd == null) {
				$("#warn").css({ display: 'none' });
				$(".warn2").css({ display: 'block' });
			}
			else {
				$(".warning").css({ display: 'none' });
			}
		}
	});
	//文本框不允许为空---单个文本触发
	$("#txtName").on('blur', function () {
		var txtName = $("#txtName").val();
		if (txtName == "" || txtName == undefined || txtName == null) {
			$("#warn").css({ display: 'block' });
		}
		else {
			$("#warn").css({ display: 'none' });
		}
	});
	$("#txtName").on('focus', function () {
		$("#warn").css({ display: 'none' });
	});
	//
	$("#txtPwd").on('blur', function () {
		var txtName = $("#txtPwd").val();
		if (txtName == "" || txtName == undefined || txtName == null) {
			$("#warn2").css({ display: 'block' });
		}
		else {
			$("#warn2").css({ display: 'none' });
		}
	});
	$("#txtPwd").on('focus', function () {
		$("#warn2").css({ display: 'none' });
	});
	//关闭
	$(".close_btn").hover(function () { $(this).css({ color: 'black' }) }, function () { $(this).css({ color: '#999' }) }).on('click', function () {
		$("#LoginBox").fadeOut("fast");
		$("#mask").css({ display: 'none' });
	});
});




$(function ($) {
	//弹出登录
	$("#example2").hover(function () {
		$(this).stop().animate({
			opacity: '1'
		}, 600);
	}, function () {
		$(this).stop().animate({
			opacity: '0.6'
		}, 1000);
	}).on('click', function () {
		$("body").append("<div id='mask2'></div>");
		$("#mask2").addClass("mask2").fadeIn("slow");
		$("#LoginBox2").fadeIn("slow");
	});

	
	//按钮的透明度
	$("#loginbtn2").hover(function () {
		$(this).stop().animate({
			opacity: '1'
		}, 600);
	}, function () {
		$(this).stop().animate({
			opacity: '0.8'
		}, 1000);
	});
	//文本框不允许为空---按钮触发
	$("#loginbtn2").on('click', function () {
		var txtName2 = $("#txtName2").val();
		var txtPwd2 = $("#txtPwd2").val();
		if (txtName2 == "" || txtName2 == undefined || txtName2 == null) {
			if (txtPwd2 == "" || txtPwd2 == undefined || txtPwd2 == null) {
				$(".warning2").css({ display: 'block' });
			}
			else {
				$("#warn3").css({ display: 'block' });
				$("#warn4").css({ display: 'none' });
			}
		}
		else {
			if (txtPwd2 == "" || txtPwd2 == undefined || txtPwd2 == null) {
				$("#warn3").css({ display: 'none' });
				$(".warn4").css({ display: 'block' });
			}
			else {
				$(".warning2").css({ display: 'none' });
			}
		}
	});
	//文本框不允许为空---单个文本触发
	$("#txtName2").on('blur', function () {
		var txtName2 = $("#txtName2").val();
		if (txtName2 == "" || txtName2 == undefined || txtName2 == null) {
			$("#warn3").css({ display: 'block' });
		}
		else {
			$("#warn3").css({ display: 'none' });
		}
	});
	$("#txtName2").on('focus', function () {
		$("#warn3").css({ display: 'none' });
	});
	// //
	$("#txtPwd2").on('blur', function () {
		var txtName2 = $("#txtPwd2").val();
		if (txtName2 == "" || txtName2 == undefined || txtName2 == null) {
			$("#warn4").css({ display: 'block' });
		}
		else {
			$("#warn4").css({ display: 'none' });
		}
	});
	$("#txtPwd2").on('focus', function () {
		$("#warn4").css({ display: 'none' });
	});
	//关闭
	$(".close_btn2").hover(function () { $(this).css({ color: 'black' }) }, function () { $(this).css({ color: '#999' }) }).on('click', function () {
		$("#LoginBox2").fadeOut("fast");
		$("#mask2").css({ display: 'none' });
	});
});