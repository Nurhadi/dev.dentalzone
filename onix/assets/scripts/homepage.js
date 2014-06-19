$(document).ready(function(){
	// data table
	$('#slider').dataTable();

	// redactor
	$('#redactor').redactor({
		focus: true,
		minHeight: 125
	});

	// logo
	$("#text-edit-logo").click(function(){
		$("#box-display-logo").hide();
		$("#box-edit-logo").fadeIn("slow");
		return false;
	});

	$("#btn-cancel-logo").click(function(){
		$("#box-edit-logo").hide();
		$("#box-display-logo").fadeIn("slow");
		return false;
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
			url: "homepage/update_homepage_title",
			data: {title: title},
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
			url: "homepage/update_homepage_keywords",
			data: {keywords: keywords},
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
			url: "homepage/update_homepage_description",
			data: {description: description},
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

	// content
	$("#text-edit-content").click(function(){
		$("#box-display-content").hide();
		$("#box-edit-content").fadeIn("slow");
		return false;
	});

	$("#btn-cancel-content").click(function(){
		$("#box-edit-content").hide();
		$("#box-display-content").fadeIn("slow");
		return false;
	});;

	$("#btn-submit-content").click(function(){
		var content = $("#box-edit-content textarea").val();

		$.ajax({
			method: "post",
			url: "homepage/update_homepage_content",
			data: {content: content},
			success:function(data){
				if(data==="success"){
					$("#box-edit-content").hide();
					$("#box-display-content span").html(content);
					$("#box-display-content").fadeIn("slow");
				}
				else{
					alert("an error occured!");
				}
				return false;
			}
		});
	});

	// image address
	$("#text-edit-image-address").click(function(){
		$("#box-display-image-address").hide();
		$("#box-edit-image-address").fadeIn("slow");
		return false;
	});

	$("#btn-cancel-image-address").click(function(){
		$("#box-edit-image-address").hide();
		$("#box-display-image-address").fadeIn("slow");
		return false;
	});

	$(".btn-image-address").click(function(){
		$("#image-address").click();
		return false;
	});

	// address
	$("#text-edit-address").click(function(){
		$("#box-display-address").hide();
		$("#box-edit-address").fadeIn("slow");
		return false;
	});

	$("#btn-cancel-address").click(function(){
		$("#box-edit-address").hide();
		$("#box-display-address").fadeIn("slow");
		return false;
	});

	$("#btn-submit-address").click(function(){
		var address = $("#box-edit-address textarea").val();

		$.ajax({
			method: "post",
			url: "homepage/update_homepage_address",
			data: {address: address},
			success:function(data){
				if(data==="success"){
					$("#box-edit-address").hide();
					$("#box-display-address span").text(address);
					$("#box-display-address").fadeIn("slow");
				}
				else{
					alert("an error occured!");
				}
				return false;
			}
		});
	});

	// phone
	$("#text-edit-phone").click(function(){
		$("#box-display-phone").hide();
		$("#box-edit-phone").fadeIn("slow");
		return false;
	});

	$("#btn-cancel-phone").click(function(){
		$("#box-edit-phone").hide();
		$("#box-display-phone").fadeIn("slow");
		return false;
	});

	$("#btn-submit-phone").click(function(){
		var phone = $("#box-edit-phone textarea").val();

		$.ajax({
			method: "post",
			url: "homepage/update_homepage_phone",
			data: {phone: phone},
			success:function(data){
				if(data==="success"){
					$("#box-edit-phone").hide();
					$("#box-display-phone span").text(phone);
					$("#box-display-phone").fadeIn("slow");
				}
				else{
					alert("an error occured!");
				}
				return false;
			}
		});
	});

	// image founder 1
	$("#text-edit-image_founder_1").click(function(){
		$("#box-display-image_founder_1").hide();
		$("#box-edit-image_founder_1").fadeIn("slow");
		return false;
	});

	$("#btn-cancel-image_founder_1").click(function(){
		$("#box-edit-image_founder_1").hide();
		$("#box-display-image_founder_1").fadeIn("slow");
		return false;
	});

	$(".btn-founder-1").click(function(){
		$("#image-founder-1").click();
		return false;
	});

	// image founder 2
	$("#text-edit-image_founder_2").click(function(){
		$("#box-display-image_founder_2").hide();
		$("#box-edit-image_founder_2").fadeIn("slow");
		return false;
	});

	$("#btn-cancel-image_founder_2").click(function(){
		$("#box-edit-image_founder_2").hide();
		$("#box-display-image_founder_2").fadeIn("slow");
		return false;
	});

	$(".btn-founder-2").click(function(){
		$("#image-founder-2").click();
		return false;
	});

	// facebook
	$("#text-edit-facebook").click(function(){
		$("#box-display-facebook").hide();
		$("#box-edit-facebook").fadeIn("slow");
		return false;
	});

	$("#btn-cancel-facebook").click(function(){
		$("#box-edit-facebook").hide();
		$("#box-display-facebook").fadeIn("slow");
		return false;
	});

	$("#btn-submit-facebook").click(function(){
		var facebook = $("#box-edit-facebook textarea").val();

		$.ajax({
			method: "post",
			url: "homepage/update_homepage_facebook",
			data: {facebook: facebook},
			success:function(data){
				if(data==="success"){
					$("#box-edit-facebook").hide();
					$("#box-display-facebook span").text(facebook);
					$("#box-display-facebook").fadeIn("slow");
				}
				else{
					alert("an error occured!");
				}
				return false;
			}
		});
	});

	// twitter
	$("#text-edit-twitter").click(function(){
		$("#box-display-twitter").hide();
		$("#box-edit-twitter").fadeIn("slow");
		return false;
	});

	$("#btn-cancel-twitter").click(function(){
		$("#box-edit-twitter").hide();
		$("#box-display-twitter").fadeIn("slow");
		return false;
	});

	$("#btn-submit-twitter").click(function(){
		var twitter = $("#box-edit-twitter textarea").val();

		$.ajax({
			method: "post",
			url: "homepage/update_homepage_twitter",
			data: {twitter: twitter},
			success:function(data){
				if(data==="success"){
					$("#box-edit-twitter").hide();
					$("#box-display-twitter span").text(twitter);
					$("#box-display-twitter").fadeIn("slow");
				}
				else{
					alert("an error occured!");
				}
				return false;
			}
		});
	});

	// slider
	$("#text-add-slider").click(function(){
		$("#form_action").val("create");
		$("#slider_id").val("");
		$("#slider_name").val("");
		$("#image-slider").hide();
		$("#btn-choose-image").removeAttr("style");
		$("#image-slider").attr("src", "");
		$("#image-slider").hide();
		$("#box-table-slider").hide();
		$("#box-form-slider").fadeIn("slow");
		return false;
	});

	$(".text-edit-slider").click(function(){
		$("#form_action").val("update");
		var slider_id = $(this).attr("data-slider-id");
		$("#slider_id").val(slider_id);

		$.ajax({
			method: "post",
			url: "homepage/edit_slider",
			data: {slider_id: slider_id},
			success:function(data){
				var s = data.split("|");
				$("#slider_name").val(s[0]);
				$("#slider_path").text(s[1]);
				if(s[1] === ""){
					$("#btn-choose-image").removeAttr("style");
					$("#image-slider").attr("src", "");
					$("#image-slider").hide();
				}
				else{
					$("#btn-choose-image").css("display","block");
					$("#btn-choose-image").css("margin","0 auto 10px");
					$("#image-slider").attr("src", website_url + s[1]);
					$("#image-slider").show();
				}
				$("#status").val(s[2]);
				$("#box-table-slider").hide();
				$("#box-form-slider").fadeIn("slow");
			}
		});
	});

	$(".text-delete-slider").click(function(){
		var slider_id = $(this).attr("data-slider-id");
		var confirmation = confirm("Are you sure you want to delete this slider ?")

		if(confirmation === true){
			$.ajax({
				method: "post",
				url: "homepage/delete_slider",
				data: {slider_id: slider_id},
				success:function(data){
					if(data==="success"){
						alert("slider deleted");
						window.location.reload();
					}
					else{
						alert("an error occured!");
					}
				}
			});
		}
	});

	$("#btn-submit-slider").click(function(){
		var slider_name = $('#slider_name').val();
		var slider_path = $('#slider_path').val();
		var status = $('#status').val();
		var form_action = $('#form_action').val();

		if(slider_name === "" || status === "" || form_action === ""){
			$(".alert").slideDown();
			setTimeout(function(){
				$(".alert").slideUp();
			}, 3000);
			return false;
		}
		else{
			return true;
		}

		// ajax
		// if(form_action === "create"){
		// 	$.ajax({
		// 		method: "post",
		// 		url: "homepage/create_new_slider",
		// 		data: {slider_name: slider_name, slider_path: slider_path, status: status},
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
		// 	var slider_id = $("#slider_id").val();
		// 	$.ajax({
		// 		method: "post",
		// 		url: "homepage/update_slider",
		// 		data: {slider_id: slider_id, slider_name: slider_name, slider_path: slider_path, status: status},
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

	$("#btn-cancel-slider").click(function(){
		$("#box-form-slider").hide();
		$("#box-table-slider").fadeIn("slow");
		return false;
	});

	$(".btn-choose-slider").click(function(){
		$("#slider_path").click();
		return false;
	});
});