$(document).ready(function () {
	var helloUrl = document.URL;
	var helloSettingType = url.searchParams.get('action');

	var url = '/rest/payment/helloworld/setting/'+helloSettingType+'/';
	$.ajax({
		url : url
	}).done(function (r){
		console.log(r);
		$('hello-ui').html(r);
	}).fail(function() {

	});
})