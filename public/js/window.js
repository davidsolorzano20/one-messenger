(function ($) {
	const gmail = document.querySelector('webview#gmail-views');
	const facebook = document.querySelector('webview#facebook-views');
	const messenger = document.querySelector('webview#messenger-views');
	const whatsapp = document.querySelector('webview#whatsapp-views');
	const telegram = document.querySelector('webview#telegram-views');
	const twitter = document.querySelector('webview#twitter-views');
	const youtube = document.querySelector('webview#youtube-views');
	const electron = require('electron');
	const shell = require('electron').shell;
//	const ipcRenderer = require('electron').ipcRenderer;

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
	}, 10);

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

	var link = "gmail";
	$("ul.nav-tabs > li > a").click(function() {
		var clicked = $(this).attr('href');
		link = clicked.substring(1);
	});

	$("#reload").click(function () {
		var webview = document.querySelector('#'+link+"-views");
		webview.reload();
	});
	$("#back").click(function ()	{
		var webview = document.querySelector('#'+link+"-views");
		webview.goBack();
	});
	 $("#next").click(function ()	{
		 var webview = document.querySelector('webview#'+link+"-views");
	   webview.goForward();
	 });

})($, jQuery);




