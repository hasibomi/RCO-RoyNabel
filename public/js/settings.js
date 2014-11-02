function passmatch() {
	var new_pass = $("#new_pass").val();
	var con_pass = $("#con_pass").val();

	if (new_pass != con_pass) {
		$("#call_back").fadeIn();
		$("#call_message").html("<center><b>Password does not match</b></center>");
	} else {
		$("#call_back").fadeOut();
	}
}

function passmatch2() {
	var new_pass = $("#new_pass").val();
	var con_pass = $("#con_pass").val();

	if (con_pass != "") {
		if (new_pass != con_pass) {
			$("#call_back").fadeIn();
			$("#call_message").html("<center><b>Password does not match</b></center>");
		} else {
			$("#call_back").fadeOut();
		}
	}
}

$(document).ready(function() {
	$("#change").click(function() {
		var new_pass = $("#new_pass").val();
		var con_pass = $("#con_pass").val();
 
		if (new_pass == "" && con_pass == "") {
			$("#call_back").fadeIn();
			$("#call_message").html("<center><b>Please fill up all fields</b></center>");
		} else if (new_pass == "") {
			$("#call_back").fadeIn();
			$("#call_message").html("<center><b>Please fill up a new password</b></center>");
		} else if (con_pass == "") {
			$("#call_back").fadeIn();
			$("#call_message").html("<center><b>Please fill up confirm password</b></center>");
		} else if (new_pass != con_pass) {
			$("#call_back").fadeIn();
			$("#call_message").html("<center><b>Password does not match</b></center>");
		} else {
			$("#pre_pass").show();
			$("#message").fadeIn();

			$("#change").hide();

			$("#call_back").fadeOut();

			$("#perform_change").show();
		}
	});

	$("#perform_change").click(function(e) {
		var new_pass = $("#new_pass").val();
		var con_pass = $("#con_pass").val();
		var old_pass = $("#old_pass").val();

		if (new_pass == "" && con_pass == "") {
			$("#call_back").fadeIn();
			$("#call_message").html("<center><b>Please fill up all fields</b></center>");
			e.preventDefault();
		} else if (new_pass == "") {
			$("#call_back").fadeIn();
			$("#call_message").html("<center><b>Please fill up a new password</b></center>");
			e.preventDefault();
		} else if (new_pass != con_pass) {
			$("#call_back").fadeIn();
			$("#call_message").html("<center><b>Password does not match</b></center>");
			e.preventDefault();
		} else if (con_pass == "") {
			$("#call_back").fadeIn();
			$("#call_message").html("<center><b>Please fill up confirm password</b></center>");
			e.preventDefault();
		} else if (old_pass == "") {
			$("#message").fadeOut();
			$("#message").fadeIn();
			e.preventDefault();
		} else {
			$("#message").fadeOut();
			
			$("#event").fadeIn();
		}
	});

	$("#con_pass").keyup(passmatch);

	$("#new_pass").keyup(passmatch2);
});