/*-----------------------------------------------------------------------------------
/*
/* Main JS
/*
----------------------------------------------------------------------------------- */  

(function($) { 	


  	/* Mobile Menu
   ------------------------------------------------------ */  
  	var toggle_button = $("<a>", {                         
                        id: "toggle-btn", 
                        html : "Menu",
                        title: "Menu",
                        href : "#" } 
                        );
  	var nav_wrap = $('nav#nav-wrap')
  	var nav = $("ul#nav");  

  	/* if JS is enabled, remove the two a.mobile-btns 
  	and dynamically prepend a.toggle-btn to #nav-wrap */
  	nav_wrap.find('a.mobile-btn').remove(); 
  	nav_wrap.prepend(toggle_button); 

  	toggle_button.on("click", function(e) {
   	e.preventDefault();
    	nav.slideToggle("fast");     
  	});

  	if (toggle_button.is(':visible')) nav.addClass('mobile');
  	$(window).resize(function(){
   	if (toggle_button.is(':visible')) nav.addClass('mobile');
    	else nav.removeClass('mobile');
  	});

  	$('ul#nav li a').on("click", function(){      
   	if (nav.hasClass('mobile')) nav.fadeOut('fast');      
  	});	

  
  	/* Smooth Scrolling
  	------------------------------------------------------ */
  	$('.smoothscroll').on('click', function (e) {
	 	
	 	e.preventDefault();

   	var target = this.hash,
    	$target = $(target);

    	$('html, body').stop().animate({
       	'scrollTop': $target.offset().top
      }, 800, 'swing', function () {
      	window.location.hash = target;
      });

  	}); 

  	
  	/*	Back To Top Button
	------------------------------------------------------- */
	var pxShow = 300; //height on which the button will show
	var fadeInTime = 400; //how slow/fast you want the button to show
	var fadeOutTime = 400; //how slow/fast you want the button to hide
	var scrollSpeed = 300; //how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'

   // Show or hide the sticky footer button
	$(window).scroll(function() {

		if ($(window).scrollTop() >= pxShow) {
			$("#go-top").fadeIn(fadeInTime);
		} else {
			$("#go-top").fadeOut(fadeOutTime);
		}

	});
	var countComment = $('.commentCount').length;
	//$('.commentCount').attr();
	$('#contactForm').submit(function () { //ajax send comment
		var formData =$(this).serialize();
		var url = $('#contactForm').attr('action');

		$.post( url, formData, processData);
		function processData(data) {

			var newComment =
				'<li class="depth-1">' +
				'<div class="avatar">' +
				'<img width="50" height="50" class="avatar" src="images/user-01.png" alt="">' +
				'</div>' +
				'<div class="comment-content">' +
				'<div class="comment-info">' +
				'<cite>' + data.author +'</cite>' +
				'<div class="comment-meta">' +
				'<time class="comment-time" ' +
				'>' + data.date +'</time>' +
				'<span class="sep">/</span>' +
				'<a class="reply" href="#">Reply</a>' +
				'</div></div>' +
				'<div class="comment-text" id="test"><p>' +
				data.text + '</p></div></div>' +
				'</li>';

			$('#successMessage').append(newComment);
			$('.showComment').attr('value', '');
			$('#cMessage').attr('value', '');
			$('.sendComment').hide(300);
			$('.showComment').attr('placeholder', 'Оставить комментарий');


			console.log("SOSI HUY");


		}
		return false;
	});
	$('.showComment').click(function () {
		$('.sendComment').slideDown(300);
		$('.showComment').attr('placeholder', 'Nickname');
		$('.your_message').focus();
		$('.your_message').removeClass('your_message');

	});


})(jQuery);