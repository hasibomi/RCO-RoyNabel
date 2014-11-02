$(document).ready( function() {
	$("#submit").click( function(e) {
		if ($("#valid_number").val() == 0) {
			alert('Quantity cannot be 0');
			e.preventDefault();
		}
	});

	/*Restor cart*/
	$("#main").click( function() {
		if ($("#delete_btn").trigger('click')) {
			$.ajax( {
				url: '../cart/restore_cart',
				type: 'POST',
				datatype: 'html',
				data: 'id=' + $("#id").val(),
				success: function(data) {
					// Successfully deleted
				}
			});
		}
	});
});