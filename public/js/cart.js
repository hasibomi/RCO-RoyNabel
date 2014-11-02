$(document).ready( function() {
	$(".btn-danger").click( function() {

		var id = $(this).attr('id');

		$.ajax( {
			url: '../cart/delete_cart',
			type: 'POST',
			datatype: 'html',
			data: 'id=' + id,
			success: function(data) {
				alert(data);
				location.href = '../cart/';
			}
		} );
	});
});