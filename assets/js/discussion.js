$(document).ready(()=>{

	// Render comments
	function renderComments(img, user, comment, date) {
		return `
			<div class="comment row mt-4">
				<div class="col-2 col-sm-1 col-lg-1">
					<img class='user-avatar' src="assets/uploads/userImgs/`+img+`" width="50">
				</div>
				<div class="col-8 col-sm-8 col-lg-9 comment-col">
					<header>`+user+`</header>
					<div class="comment-text">`+comment+`</div>
				</div>
				<div class="col-1 col-sm-1 col-lg-2">`+date+`</div>
			</div>
		`;
	}

	// Load Comments
	function loadComments() {
		let output = "";
		let id = $(".discussion-content").attr('d-id');
		let rawData = { dID:id };
		let data = JSON.stringify(rawData);
		$.ajax({
			url: "assets/php/api/fetchPostComments.php",
			method: "POST",
			data: data,
			dataType: "json",
			success: function (data) {
				x = data;
				for(let i = 0; i < x.length; i++){
					output += renderComments(x[i].img, x[i].user, x[i].comment, x[i].date);
					count = x[i].count;
				}
				$("#comments-content").html(output);
				$("#comment-count").text(count);
			},
			error: function () {
				console.log("err with fetch comment req");
			}
		});
	}
	loadComments();

	// Post a comment
	$("#addComment").click((e)=>{
		e.preventDefault();

		let dID = $(".discussion-content").attr('d-id');
		let comment = $("#comment-text").val();
		let rawData = { dID:dID, comment:comment };
		let data = JSON.stringify(rawData);
		$.ajax({
			url: "assets/php/api/addComment.php",
			method: "POST",
			data: data,
			dataType: "json",
			success: function (data) {
				$(".comment-form")[0].reset();
				loadComments();
			},
			error: function () {
				console.log("err wd add cmnt req!");
			}
		});
	});
});