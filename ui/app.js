$(document).ready(function () {
	var helloUrl = new URL(document.URL);
	var helloSettingType = helloUrl.searchParams.get('action');

	var url = '/rest/payment/helloworld/setting/'+helloSettingType+'/';
	$.ajax({
		url : url
	}).done(function (r){
		console.log(r);
		$('hello-ui').html(r);
	}).fail(function() {

	});
})