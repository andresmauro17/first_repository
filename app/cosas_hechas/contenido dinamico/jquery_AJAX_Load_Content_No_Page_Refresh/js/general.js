$(document).ready(function(){
	//initial
	$('#content').load('content/index.php');

	//handled click
	$('ul#nav li a').click(function(){
		var page = $(this).attr('href');
		$('#content').load('content/'+ page +'.php')
		return false;

	});

});