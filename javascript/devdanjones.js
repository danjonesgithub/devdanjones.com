//--------------------------------
// Object Constructors
//--------------------------------
function Page(_id,_title,_desc,_url){
	this.Id = _id;
	this.Title = _title;
	this.Desc = _desc;
	this.Url = _url;
}

Page.prototype.updateMetas = function(){
	$(document).find('meta[name="description"]').attr('content',this.Desc);
	document.title = this.Title;
}

Page.prototype.pushState = function(){
	if(Modernizr.history){
		history.pushState(null, null, this.Url);
		this.updateMetas();
	}
}

Page.prototype.scrollTo = function(){
	$('html,body').stop().animate({
		scrollTop : $(this.Id).offset().top
		},
		800,
		'easeOutExpo',
		function(){
			scrollspyPushState = true;
		}
	);
	this.updateMetas();
}

//--------------------------------
// Modules
//--------------------------------

var sm = (function(){
	var setHomeHeight = function(){
		$(pages[0].Id).height($(window).height());
		$(pages[0].Id).find('.row1').height($(window).height());
		$('#navBar').css('top',$(window).height());
	}

	var checkMobile = function(){
		return $(window).width() <= 562;
	}

	var headerFixed = false;

	var checkFixHeader = function(){
		if (!this.headerFixed && $(window).scrollTop() >= $('#Home').outerHeight()){
			this.headerFixed = true;
			return true;
		}
		return false;
	}

	var checkUnfixHeader = function(){
		if (this.headerFixed && $(window).scrollTop() < $('#Home').outerHeight()){
			this.headerFixed = false;
			return true;
		}
		return false;
	}

	return {
		setHomeHeight : setHomeHeight,
		checkMobile	: checkMobile,
		checkFixHeader : checkFixHeader,
		checkUnfixHeader : checkUnfixHeader,
		headerFixed : headerFixed
	}

})();

//--------------------------------
// Global Variables
//--------------------------------

var baseUrl = 'devdanjones.com';
var scrollspyPushState = false;
var pages = [];


//--------------------------------
// Event functions
//--------------------------------

function popState(e){

	e.preventDefault();
	scrollspyPushState = false;

	var i = getPageIndexFromUrl(top.location.href);

	pages[i].scrollTo();
}

function topNavClick(e){

	e.preventDefault();
	scrollspyPushState = false;

	var i = $(e.target).data('index')

	pages[i].scrollTo();
	pages[i].pushState();
}

function scrollspyChangeActiveLink(e){

	var i = getPageIndexFromActiveLink();

	pages[i].pushState();
}


//--------------------------------
// Helper functions
//--------------------------------

function getPageIndexFromUrl(url){
	for(var i=0; i<pages.length; i++){
		if(pages[i].Url.toLowerCase().replace('http://','').replace('www.','') == url.toLowerCase().replace('http://','').replace('www.','').replace(baseUrl,'')){
			return i;
		}
	}
}

function getPageIndexFromActiveLink(){
	var activeLink = $('.navbar a.active').attr('href').replace(top.location.href, '');
	for(var i=0; i<pages.length; i++){
		if(pages[i].Id.toLowerCase() == activeLink.toLowerCase()){
			return i;
		}
	}
}

//--------------------------------
// Form functions
//--------------------------------

var formAction1 = '/cgi-bin/mailhandlerdevdj.pl';
var formAction2 = '/cgi-bin/mailhandlerdevdj.pl';

function submitFooterForm(event){
	event.preventDefault();
	if(event.target.checkValidity()){
		$.post(formAction1, $(event.target).serialize()).done(function() {
			$.post(formAction2, $(event.target).serialize()).done(function() {
				$(event.target).find('input textarea').val('');
				alert('Thank You. Your message has been sent. A copy has been sent to your email address too.');
			});
		});
	} else {
		alert('Please complete all the fields and add a valid email address!');
	}
}

function focusElement(el,tar){
		$('#' + tar).closest('.row-container').fadeIn()
		$('html, body').animate({scrollTop: $(window).scrollTop() + $('#' + tar).closest('.row-container').height()});
}

function focusSubmit(el,tar){
	$('#' + tar).closest('.submit-container').fadeIn();
	$('html, body').animate({scrollTop: $(window).scrollTop() + $('#' + tar).closest('.submit-container').height()});
}


//--------------------------------
// Initialisation functions
//--------------------------------

function constructPageObjects(){
	$('#navBar-nav a').each(function(){
		pages.push(new Page(
			this.href.replace(top.location.href,''),
			$(this).data('title'),
			$(this).data('desc'),
			$(this).data('url')
		));
	});
}

$(document).ready(function(){
	constructPageObjects();

	wow = new WOW({offset: 100, mobile: false})
    wow.init();

	//Initialise Homepage
	sm.setHomeHeight();
	$('.navbar').show();
	ABBinit(pages[0].Id.replace('#',''));
	$('#DDJLoading').css('opacity',0).delay(1000).css('display','none');


	//Initialise Bootstrap Scrollspy
	$('body').scrollspy({ target: '#navBar-nav', offset: 110 });
	$(window).on('activate.bs.scrollspy', function(e){
		if(scrollspyPushState == true){
			scrollspyChangeActiveLink(e);
		}
	});

	//Initialize top nav anchors
	$('#navBar-nav a').on('click', function(e){topNavClick(e);});

	//Setup PopState Handling
	if(Modernizr.history){
		$(window).on('popstate', function(e){popState(e);});
	}

	//scroll page to target if not home
	var i = getPageIndexFromUrl(top.location.href);
	pages[i].scrollTo();

	//init footer form
	$('#footerForm').on('submit', function(event){submitFooterForm(event);})

	//init resize
	$(window).on('resize', function(){
		sm.setHomeHeight();
	});

	// init scroll
	$(window).on('scroll', function(){
		if(sm.checkFixHeader()){
			$('#navBar').addClass('nav-fixed');
		} else if(sm.checkUnfixHeader()){
			$('#navBar').removeClass('nav-fixed no-animation');
		}
	});
});
