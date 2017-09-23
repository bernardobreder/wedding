
function teaOrder(id) {
	$.get("/tea_book.php", function(data) {
		data = data.replace("${product_id}", id);
		var html = $(data);
		html.find(".product_id").text(id);
		$('.container .modal').remove();
		$(".container").append(html);
		$('.container .modal').modal();
	});
}

function teaBookKey() {
	var name = $('#book-name').val()
	var email = $('#book-email').val()
    $(".book-submit").removeAttr("disabled");
	$(".book-form-name").removeClass("has-error").removeClass("has-success");
	if (validateName(name)) {
		$(".book-form-name").addClass("has-success");
	} else {
		$(".book-form-name").addClass("has-error");
		$(".book-submit").attr("disabled", true);
	}
	$(".book-form-email").removeClass("has-error").removeClass("has-success");
	if (validateEmail(email)) {
		$(".book-form-email").addClass("has-success");
	} else {
		$(".book-form-email").addClass("has-error");
		$(".book-submit").attr("disabled", true);
	}
}

function teaBook(id, name, email) {
	$.get("/tea_book_action.php?id=" + id + "&name=" + name + "&email=" + email, function(data) {
		location.reload();
	});
}

function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}

function validateName(name) {
    var re = /^[a-zA-Z ]+$/;
    return re.test(name);
}