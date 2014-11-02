function trigger_function(main_button, associated_button, input_field) {
	main_button.click(function() {
		associated_button.trigger('click');
		associated_button.change(function() {
			input_field.val(associated_button.val());
		});
	});
}

$(document).ready(function() {
	$("#customers").click(trigger_function($("#customers"), $("#browse_customer"), $("input[name=import_customers]")));
	$("#employees").click(trigger_function($("#employees"), $("#browse_employee"), $("input[name=import_employees]")));
	$("#vendors").click(trigger_function($("#vendors"), $("#browse_vendor"), $("input[name=import_vendors]")));
});
