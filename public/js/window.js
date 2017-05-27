/**
 * Created by david on 12/27/16.
 */
(function ($) {
	setTimeout(function () {
		var width = $(window).width();
		var height = $(window).height() - 51;
		$(".davis-webviews").css({'height': height + 'px'});
	}, 2000);

	setTimeout(function () {
		$('#loader_app').hide();
		$('#app').show();
	}, 10000)

	/*$("#active-mtech").click(function () {
		$("webview#active-collab-src").attr('src', 'https://app.activecollab.com/138123/projects');
	});

	$("#active-rambeck").click(function () {
		$("webview#active-collab-src").attr('src', 'https://app.activecollab.com/130252/projects');
	});

	$("a#back").click(function ()	{
		var webview = document.getElementById("google-web");
		webview.goBack();
	});

	$("a#next").click(function ()	{
		var webview = document.getElementById("google-web");
		webview.goForward();
	});*/

})($, jQuery);