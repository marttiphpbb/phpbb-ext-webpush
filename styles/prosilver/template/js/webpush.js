;(function($, window, document) {
	$('document').ready(function(){
		var $form_ucp = $('form#ucp');
		var $div_inner = $form_ucp.find('div.panel div.inner');
		var $table_notif = $div_inner.find('table');
		var $div_webpush = $('div#marttiphpbb_webpush');
		$('label[for="username"]').text($span.text());
		if ($span.data('auth-method') === 'db_email'){
			$('#username').attr('type', 'email');
		}
	});
})(jQuery, window, document);
