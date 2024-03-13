$(document).ready(()=>{
	// Hide login, show signup
	$("#signUpBtn").click((e)=>{
		e.preventDefault();
		$(".login-box").hide();
		$(".sign-up-box").fadeIn();
	});

	// Validating roll No.
	function validateRollNumber(rollNo) {
		if (rollNo.length != 10) {
			$("#rollNumber").addClass('invalid-input');
			$(".validation-msg").text("Length must be 10 digits.");
			return false;
		}
		else {
			$("#rollNumber").removeClass('invalid-input');
			$(".validation-msg").hide();
			return true;
		}
	}

	// Search rollNumber
	$("#searchByRoll").click((e)=>{
		e.preventDefault();

		$("#step-1-btns").css('display', 'none');
		$("#step-2").fadeIn();
		$("#email").focus();

		// let rollno = $("#rollNumber").val();
		// if (validateRollNumber(rollno) == true) {
		// 	let rawData = { rollNumber:rollno };
		// 	let data = JSON.stringify(rawData);
		// 	$.ajax({
		// 		url: "assets/php/api/searchByRollNumber.php",
		// 		method: "POST",
		// 		data: data,
		// 		dataType: "json",
		// 		success: function (data) {
		// 			if (data.status == true) {
		// 				$("#fullname").val(data.name);
		// 				$("#step-1-btns").css('display', 'none');
		// 				$("#step-2").fadeIn();
		// 				$("#email").focus();
		// 			}
		// 			else if (data.status == false) {
		// 				$(".validation-msg").fadeIn();
		// 				$(".validation-msg").text(data.msg);
		// 			}
		// 			else {
		// 				alert("Something Went Wrong!");
		// 			}
		// 		},
		// 		error: function () {
		// 			console.log("err with search req");
		// 		}
		// 	});
		// }
	});

	// Back btn for sign up
	$("#back-btn").click((e)=>{
		e.preventDefault();
		$("#rollNumber").val("");
		$(".sign-up-box").hide();
		$(".login-box").fadeIn();
	});

	
	// Show dp preview 
	$("#dp").on('change', function (event) {
		if(event.target.files.length > 0){
	    var src = URL.createObjectURL(event.target.files[0]);
	    var preview = document.getElementById("dpPreview");
	    preview.src = src;
	  }
	})
}); // Main