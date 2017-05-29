(function ($) {

	const gmail = document.querySelector('webview#gmail');
	const facebook = document.querySelector('webview#facebook');
	const messenger = document.querySelector('webview#messenger');
	const whatsapp = document.querySelector('webview#whatsapp');
	const telegram = document.querySelector('webview#telegram');
	const twitter = document.querySelector('webview#twitter');
	const youtube = document.querySelector('webview#youtube');
	const shell = require('electron').shell;

	setTimeout(function () {
		var width = $(window).width();
		var height = $(window).height() - 51;
		$(".davis-webviews").css({'height': height + 'px'});
	}, 2000);

	setTimeout(function () {
		$('#loader_app').hide();
		$('#app').show();
	}, 10000);

	gmail.addEventListener('new-window', function(event) {
		const protocol = require('url').parse(event.url).protocol;
		if (protocol === 'http:' || protocol === 'https:') {
			shell.openExternal(event.url)
		}
	});

	/*gmail.addEventListener('new-window', function(event) {
		const protocol = require('url').parse(event.url).protocol;
		if (protocol === 'http:' || protocol === 'https:') {
			if (event.url === "https://app.activecollab.com/138123/api/v1/acid-auth?i=X6AJ-L38LQ59VZW6GX74ODXQVO6LWYGZJ0LK-7DYXZ8639O36Z0EWVQJ58LNRXV0Q4MYG9KX4P7-DOA0QAGJWNVE45P8PN-A5EK7943KEANY083PJD-7QE4OKP&iin=adf16f3fd79d886b110941c7abda9e011bed5832") {
				gmail.loadURL(event.url);
			}
		}
	});*/

	facebook.addEventListener('new-window', function(event) {
		const protocol = require('url').parse(event.url).protocol;
		if (protocol === 'http:' || protocol === 'https:') {
			shell.openExternal(event.url)
		}
	});

	messenger.addEventListener('new-window', function(event) {
		const protocol = require('url').parse(event.url).protocol;
		if (protocol === 'http:' || protocol === 'https:') {
			shell.openExternal(event.url)
		}
	});

	whatsapp.addEventListener('new-window', function(event) {
		const protocol = require('url').parse(event.url).protocol;
		if (protocol === 'http:' || protocol === 'https:') {
			shell.openExternal(event.url)
		}
	});

	telegram.addEventListener('new-window', function(event) {
		const protocol = require('url').parse(event.url).protocol;
		if (protocol === 'http:' || protocol === 'https:') {
			shell.openExternal(event.url)
		}
	});

	twitter.addEventListener('new-window', function(event) {
		const protocol = require('url').parse(event.url).protocol;
		if (protocol === 'http:' || protocol === 'https:') {
			shell.openExternal(event.url)
		}
	});

	youtube.addEventListener('new-window', function(event) {
		const protocol = require('url').parse(event.url).protocol;
		if (protocol === 'http:' || protocol === 'https:') {
			shell.openExternal(event.url)
		}
	});


/*	 $("a#back").click(function ()	{
	 var webview = document.getElementById("google-web");
	 webview.goBack();
	 });

	 $("a#next").click(function ()	{
	 var webview = document.getElementById("google-web");
	 webview.goForward();
	 });*/

})($, jQuery);




