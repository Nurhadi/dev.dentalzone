$(document).ready(function(){
	// data table
	$('#news').dataTable();

	// redactor
	$('#redactor').redactor({
		focus: true,
		minHeight: 125
	});

	// title
	$("#text-edit-title").click(function(){
		$("#box-display-title").hide();
		$("#box-edit-title").fadeIn("slow");
		return false;
	});

	$("#btn-cancel-title").click(function(){
		$("#box-edit-title").hide();
		$("#box-display-title").fadeIn("slow");
		return false;
	});

	$("#btn-submit-title").click(function(){
		var title = $("#box-edit-title textarea").val();

		$.ajax({
			method: "post",
			url: "page/update_page_title",
			data: {page_id: 1, title: title},
			success:function(data){
				if(data==="success"){
					$("#box-edit-title").hide();
					$("#box-display-title span").text(title);
					$("#box-display-title").fadeIn("slow");
				}
				else{
					alert("an error occured!");
				}
				return false;
			}
		});
	});

	// keywords
	$("#text-edit-keywords").click(function(){
		$("#box-display-keywords").hide();
		$("#box-edit-keywords").fadeIn("slow");
		return false;
	});

	$("#btn-cancel-keywords").click(function(){
		$("#box-edit-keywords").hide();
		$("#box-display-keywords").fadeIn("slow");
		return false;
	});

	$("#btn-submit-keywords").click(function(){
		var keywords = $("#box-edit-keywords textarea").val();

		$.ajax({
			method: "post",
			url: "page/update_page_keywords",
			data: {page_id: 1, keywords: keywords},
			success:function(data){
				if(data==="success"){
					$("#box-edit-keywords").hide();
					$("#box-display-keywords span").text(keywords);
					$("#box-display-keywords").fadeIn("slow");
				}
				else{
					alert("an error occured!");
				}
				return false;
			}
		});
	});

	// description
	$("#text-edit-description").click(function(){
		$("#box-display-description").hide();
		$("#box-edit-description").fadeIn("slow");
		return false;
	});

	$("#btn-cancel-description").click(function(){
		$("#box-edit-description").hide();
		$("#box-display-description").fadeIn("slow");
		return false;
	});

	$("#btn-submit-description").click(function(){
		var description = $("#box-edit-description textarea").val();

		$.ajax({
			method: "post",
			url: "page/update_page_description",
			data: {page_id: 1, description: description},
			success:function(data){
				if(data==="success"){
					$("#box-edit-description").hide();
					$("#box-display-description span").text(description);
					$("#box-display-description").fadeIn("slow");
				}
				else{
					alert("an error occured!");
				}
				return false;
			}
		});
	});

	// news
	$("#text-add-news").click(function(){
		$("#form_action").val("create");
		$("#news_id").val("");
		$("#box-table-news").hide();
		$("#box-form-slider").fadeIn("slow");
		return false;
	});

	$(".text-edit-news").click(function(){
		$("#form_action").val("update");
		var news_id = $(this).attr("data-news-id");
		$("#news_id").val(news_id);

		$.ajax({
			method: "post",
			url: "news/edit_news",
			data: {news_id: news_id},
			success:function(data){
				var s = data.split("|");
				$("#title").val(s[0]);
				$("#keywords").val(s[1]);
				$("#description").val(s[2]);
				if(s[3] === ""){
					$("#btn-choose-image").removeAttr("style");
					$("#image-thumbnail").attr("src", "");
					$("#image-thumbnail").hide();
				}
				else{
					$("#btn-choose-thumbnail").css("display","block");
					$("#btn-choose-thumbnail").css("margin","0 auto 10px");
					$("#image-thumbnail").attr("src", website_url + s[3]);
					$("#image-thumbnail").css("display", "block");
					$("#image-thumbnail").css("margin", "0 auto");
					$("#image-thumbnail").show();
				}
				$(".redactor_editor").html(s[4]);
				$(".content").html(s[4]);
				$("#promo").val(s[5]);
				$("#box-table-news").hide();
				$("#box-form-slider").fadeIn("slow");
			}
		});
	});

	$(".text-delete-news").click(function(){
		var news_id = $(this).attr("data-news-id");
		var confirmation = confirm("Are you sure you want to delete this news ?")

		if(confirmation === true){
			$.ajax({
				method: "post",
				url: "news/delete_news",
				data: {news_id: news_id},
				success:function(data){
					if(data==="success"){
						alert("news deleted");
						window.location.reload();
					}
					else{
						alert("an error occured!");
					}
				}
			});
		}
	});

	$("#btn-submit-news").click(function(){
		var title = $('#title').val();
		var keywords = $('#keywords').val();
		var description = $('#description').val();
		var thumbnail = $('#thumbnail').val();
		var content = $('.content').val();
		var promo = $('#promo').val();
		var form_action = $('#form_action').val();

		if(title === "" || keywords === "" || description === "" || content === "" || promo === "" || form_action === ""){
			$(".alert").slideDown();
			setTimeout(function(){
				$(".alert").slideUp();
			}, 3000);
			return false;
		}
		else{
			return true;
		}

		// if(form_action === "create"){
		// 	$.ajax({
		// 		method: "post",
		// 		url: "news/create_new_news",
		// 		data: {title: title, keywords: keywords, description: description, thumbnail: thumbnail, content: content, promo: promo},
		// 		success:function(data){
		// 			if(data==="success"){
		// 				alert("success");
		// 			}
		// 			else{
		// 				alert("an error occured!");
		// 			}
		// 		}
		// 	});
		// }
		// else{
		// 	var news_id = $("#news_id").val();
		// 	$.ajax({
		// 		method: "post",
		// 		url: "news/update_news",
		// 		data: {news_id: news_id, title: title, keywords: keywords, description: description, thumbnail: thumbnail, content: content, promo: promo},
		// 		success:function(data){
		// 			if(data==="success"){
		// 				alert("success");
		// 			}
		// 			else{
		// 				alert("an error occured!");
		// 			}
		// 		}
		// 	});
		// }
	});

	$("#btn-cancel-news").click(function(){
		$("#box-form-slider").hide();
		$("#box-table-news").fadeIn("slow");
		return false;
	});

	$("#btn-choose-thumbnail").click(function(){
		$("#thumbnail_path").click();
		return false;
	});
});