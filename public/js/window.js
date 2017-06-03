(function ($) {
	const gmail = document.querySelector('webview#gmail');
	const facebook = document.querySelector('webview#facebook');
	const messenger = document.querySelector('webview#messenger');
	const whatsapp = document.querySelector('webview#whatsapp');
	const telegram = document.querySelector('webview#telegram');
	const twitter = document.querySelector('webview#twitter');
	const youtube = document.querySelector('webview#youtube');
	const shell = require('electron').shell;
	const ipcRenderer = require('electron').ipcRenderer;

	setTimeout(function () {
		var width = $(window).width();
		var height = $(window).height() - 51;
		$(".davis-webviews").css({'height': height + 'px'});
	}, 2000);

	$(window).resize(function () {
		var width = $(window).width();
		var height = $(window).height() - 51;
		$(".davis-webviews").css({'height': height + 'px'});
	});

	setTimeout(function () {
		$('#loader_app').hide();
		$('#app').show();
	}, 10000);

	setInterval(function () {
		if (facebook.getTitle().indexOf('(') != -1) {
			$('#badge-facebook').css({'visibility': 'visible'});
			$('#badge-facebook').css({'display': ''});
		} else {
			$('#badge-facebook').css({'display': 'none'});
		}
		if (gmail.getTitle().indexOf('(') != -1) {
			$('#badge-gmail').css({'visibility': 'visible'});
			$('#badge-gmail').css({'display': ''});
		} else {
			$('#badge-gmail').css({'display': 'none'});
		}
		if (whatsapp.getTitle().indexOf('(') != -1) {
			$('#badge-whatsapp').css({'visibility': 'visible'});
			$('#badge-whatsapp').css({'display': ''});
		} else {
			$('#badge-whatsapp').css({'display': 'none'});
		}
		if (telegram.getTitle().indexOf('n') != -1) {
			$('#badge-telegram').css({'visibility': 'visible'});
			$('#badge-telegram').css({'display': ''});
		} else {
			$('#badge-telegram').css({'display': 'none'});
		}
		if (twitter.getTitle().indexOf('(') != -1) {
			$('#badge-twitter').css({'visibility': 'visible'});
			$('#badge-twitter').css({'display': ''});
		} else {
			$('#badge-twitter').css({'display': 'none'});
		}
		if (youtube.getTitle().indexOf('(') != -1) {
			$('#badge-youtube').css({'visibility': 'visible'});
			$('#badge-youtube').css({'display': ''});
		} else {
			$('#badge-youtube').css({'display': 'none'});
		}
	}, 30);

	gmail.addEventListener('new-window', function (event) {
		const protocol = require('url').parse(event.url).protocol;
		if (protocol === 'http:' || protocol === 'https:') {
			shell.openExternal(event.url)
		}
	});

	facebook.addEventListener('new-window', function (event) {
		const protocol = require('url').parse(event.url).protocol;
		if (protocol === 'http:' || protocol === 'https:') {
			shell.openExternal(event.url)
		}
	});

	messenger.addEventListener('new-window', function (event) {
		const protocol = require('url').parse(event.url).protocol;
		if (protocol === 'http:' || protocol === 'https:') {
			shell.openExternal(event.url)
		}
	});

	whatsapp.addEventListener('new-window', function (event) {
		const protocol = require('url').parse(event.url).protocol;
		if (protocol === 'http:' || protocol === 'https:') {
			shell.openExternal(event.url)
		}
	});

	telegram.addEventListener('new-window', function (event) {
		const protocol = require('url').parse(event.url).protocol;
		if (protocol === 'http:' || protocol === 'https:') {
			shell.openExternal(event.url)
		}
	});


	telegram.addEventListener("ipc-message", function (e) {
		if (e.channel === "window-data") {
			// console.log(e.args[0]);

			/*	$(".tab.active .tab-favicon").attr("src", e.args[0].favicon);*/
			setInterval(function () {
				alert(e.args[0].title);

			}, 1000)
			/*$("#url-bar").val(e.args[0].url);*/

			/*
			 if ($(".tab.active").data("page") === "pages/start.html") {
			 $(".tab.active .tab-title").html(e.args[0].title);
			 } else {
			 }
			 */
		}
	});


	twitter.addEventListener('new-window', function (event) {
		const protocol = require('url').parse(event.url).protocol;
		if (protocol === 'http:' || protocol === 'https:') {
			shell.openExternal(event.url)
		}
	});

	youtube.addEventListener('new-window', function (event) {
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




