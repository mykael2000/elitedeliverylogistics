$(document).ready(function () {
    $("#track").click(function (event) {
        event.preventDefault();
		$(".loading-icon").removeClass("spin-hide");
		$('#track').attr('disabled', true);
		$(".btn-text").text("Tracking...");
		setTimeout(function(){
			$.ajax({
				url: "track_p.php",
				method: "POST",
				data: $("form").serialize(),
				success: function (data) {
					$("#error_msg").html(data);
				}
			})
			$(".loading-icon").addClass("spin-hide");
			$('#track').attr('disabled', false);
			$(".btn-text").text("Continue");
		}, 3000)     
    }) 
	
	$("#complete_submit").click(function (event) {
        event.preventDefault();
		$(".loading-icon").removeClass("spin-hide");
		$('#complete_submit').attr('disabled', true);
		$(".btn-text").text("Setting up dashboard...");
		var fname = $('#fname').val();
        var address = $('#address').val();
        var state = $('#state').val();
        var lga = $('#lga').val();
		setTimeout(function(){
			$.ajax({
				url: "regis_p.php",
				method: "POST",
				data: {finish_reg: 1, fname: fname, address: address, state: state, lga: lga},
				success: function (data) {
					$("#error_msg").html(data);
				}
			})			
			$(".loading-icon").addClass("spin-hide");
			$('#complete_submit').attr('disabled', false);
			$(".btn-text").text("Finish");
		}, 3000)
        
    }) 
	
	$("#login_btn").click(function (event) {
        event.preventDefault();
		$(".loading-icon").removeClass("spin-hide");
		$('#login_btn').attr('disabled', true);
		$(".btn-text").text("Connecting to server...");
		setTimeout(function(){
			$.ajax({
				url: "p_login_p.php",
				method: "POST",
				data: $("form").serialize(),
				success: function (data) {
					$("#error_msg").html(data);
				}
			})
			$(".loading-icon").addClass("spin-hide");
			$('#login_btn').attr('disabled', false);
			$(".btn-text").text("Login");
		}, 3000)
        
    })
	
	
	$("#registra").click(function (event) {
        event.preventDefault();
		$(".loading-icon").removeClass("spin-hide");
		$('#registra').attr('disabled', true);
		$(".btn-text").text("Validating user credentials...");
		setTimeout(function(){
			$.ajax({
				url: "regis_p.php",
				method: "POST",
				data: {registra: 1},
				success: function (data) {
					$("#error_msg").html(data);
				}
			})
			
			$(".loading-icon").addClass("spin-hide");
			$('#registra').attr('disabled', false);
			$(".btn-text").text("Sign up");
		}, 3000)
        
    })
	
	/*$("#schedule").click(function (event) {
        event.preventDefault();
		$(".loading-icon").removeClass("spin-hide");
		$('#schedule').attr('disabled', true);
		$(".btn-text").text("Preparing Appointment Plan...");
		var doc = $(this).attr("doc");
		var serv = $(this).attr("serv");
		setTimeout(function(){			
			$(".loading-icon").addClass("spin-hide");
			$('#schedule').attr('disabled', false);
			$(".btn-text").text("Redirecting...");
			window.location.href = "schedule.php?secure_pass=".var doc = $(this).attr("doc")."&major_authentication=".var serv = $(this).attr("serv")."";
		}, 3000)        
    })*/
	
	
	$("body").delegate("#send_mail", "click", function (event) {
        event.preventDefault();
        var receiver = $('#receiver').val();
        var to = $('#to').val();
        var title = $('#title').val();
        var msg = $('#msg').val();
        $.ajax({
            url: "process.php",
            method: "POST",
            data: {send_mail: 1, receiver: receiver, title: title, msg: msg},
            success: function (data) {
                $("#report").html(data);
            }
        })
    })
	
	$("body").delegate("#reader", "click", function (event) {
        var rid = $(this).attr("rid");
        $.ajax({
            url: "process.php",
            method: "POST",
            data: {read: 1, rid: rid},
            success: function (data) {
                $("#report").html(data);
            }
        })
    })
	
	function getNote() {
        setTimeout(function () {
            $('#notifications').fadeIn('slow').load('notifications.html').fadeIn('slow');
            getNote();
        }, 8000);
    }
    $('#notifications').load('notifications.html');
    getNote();
	
	function getMsg() {
        setTimeout(function () {
            $('#message').fadeIn('slow').load('messages.html').fadeIn('slow');
            getMsg();
        }, 8000);
    }
    $('#message').load('messages.html');
    getMsg();
	
	function getRating() {
        setTimeout(function () {
            $('#AVGrate').fadeIn('slow').load('rate_calc.html').fadeIn('slow');
            getRating();
        }, 8000);
    }
    $('#AVGrate').load('rate_calc.html');
    getRating();

})