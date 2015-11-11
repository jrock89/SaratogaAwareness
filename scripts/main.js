$(document).ready(function(){



	$('.brandBox').on('mouseover', function(){
		$('.brandBox img').attr('src', 'images/animateLogo.gif');
	});

	$('#factOne').on('mouseover', function(){
		console.log('testing');
	});

	$('.article_inner_1').on('click', function(){
		window.location.href = "WhoIsTheFeldenkraisMethodGoodFor.php";
	});
	$('.article_inner_2').on('click', function(){
		window.location.href = "WhatIsTheFeldenkraisMethod.php";
	});
	$('.article_inner_3').on('click', function(){
		window.location.href = "WhatIsTheTheoryBehindTheFeldenkraisMethod.php";
	});
	$('.article_inner_4').on('click', function(){
		window.location.href = "OurNervousSystem.php";
	});
	$('.article_inner_5').on('click', function(){
		window.location.href = "WhyWasTheFeldenkraisMethodCreated.php";
	});
	$('.article_inner_6').on('click', function(){
		window.location.href = "HowIsTheFeldenkraisMethodTaught.php";
	});

	// $('.article_inner').on('click', function(){
	// 	$(this).removeClass('article_inner').addClass('article_inner_keep');
	// 	$('.article_inner').fadeOut();
	// 	$('.article_inner').closest('article').removeClass('col-sm-4').addClass('col-sm-12')
	// 	$('.inside_article').fadeIn();
	// 	$('.imgMove').css('width', '30%', '!important');
	// 	$('.imgMove').css('float', 'left', '!important');
	// 	$('.imgMove').css('padding', '20px', '!important');
	// 	$('.btn-article').hide();
	//
	// });
	// var slideCount = $('#slider ul li').length;
 //    var slideWidth = $('#slider ul li').width();
 //    var slideHeight = $('#slider ul li').height();
 //    var sliderUlWidth = slideCount * slideWidth;

 //    $('#slider').css({ width: slideWidth, height: slideHeight });

 //    $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

 //    $('#slider ul li:last-child').prependTo('#slider ul');

 //    function moveLeft() {
 //        $('#slider ul').animate({
 //            left: + slideWidth
 //        }, 500, function () {
 //            $('#slider ul li:last-child').prependTo('#slider ul');
 //            $('#slider ul').css('left', '');
 //        });
 //    }

 //    function moveRight() {
 //        $('#slider ul').animate({
 //            left: - slideWidth
 //        }, 500, function () {
 //            $('#slider ul li:first-child').appendTo('#slider ul');
 //            $('#slider ul').css('left', '');
 //        });
 //    }

 //    $('a.control_prev').click(function () {
 //        moveLeft();
 //    });

 //    $('a.control_next').click(function () {
 //        moveRight();
 //    });


 //    window.setInterval(function(){
 //    	moveRight();
 //    }, 6000);

        $(window).load(function(){
            $(".loader").slideUp();

        });


        $('.slider').on('click', function(){
        	$('.slider').toggleClass('slider-change');
        });


	 	// setInterval(function(){
	 	// 	$('.first-slider').fadeOut();
	 	// }, 5000);

	 	// setInterval(function(){
	 	// 	$('.second-slider').delay(1000).fadeIn();
	 	// }, 5000);
	 	// setInterval(function(){
	 	// 	$('.second-slider').fadeOut();
	 	// }, 10000);
	 	// setInterval(function(){
	 	// 	$('.third-slider').delay(1000).fadeIn();
	 	// }, 10000);
	 	// setInterval(function(){
	 	// 	$('.third-slider').fadeOut();
	 	// }, 15000);
	 	// setInterval(function(){
	 	// 	$('.forth-slider').delay(1000).fadeIn();
	 	// }, 15000);
	 	// setInterval(function(){
	 	// 	$('.forth-slider').fadeOut();
	 	// }, 20000);
	 	// setInterval(function(){
	 	// 	$('.first-slider').fadeIn();
	 	// }, 20000);




	 	// setInterval(function(){
	 	// 	$('.first-slider').fadeOut();
	 	// 	$('.second-slider').delay(5000).fadeIn().delay(3000).fadeOut();
	 	// 	$('.third-slider').fadeIn().delay(3000).fadeOut();
	 	// 	$('.forth-slider').fadeIn().delay(3000).fadeOut();


	 	// }, 25000);


		 	setTimeout( function(){
		 		$('.first-slider').fadeOut(200);
		 		$('.second-slider').delay(500).fadeIn(200);
		 	}, 5000);
		 	setTimeout( function(){
		 		$('.second-slider').fadeOut(200);
		 		$('.third-slider').delay(500).fadeIn(200);
		 	}, 10000);
		 	setTimeout( function(){
		 		$('.third-slider').fadeOut(200);
		 		$('.forth-slider').delay(500).fadeIn(200);
		 	}, 15000);
		 	setTimeout( function(){
		 		$('.forth-slider').fadeOut(200);
		 		$('.fifth-slider').delay(500).fadeIn(200);
		 	}, 20000);
		 	setTimeout( function(){
		 		$('.fifth-slider').fadeOut(200);
		 		$('.first-slider').delay(500).fadeIn(200);
		 	}, 25000);

	 	setInterval( function(){
		 	setTimeout( function(){
		 		$('.first-slider').fadeOut(200);
		 		$('.second-slider').delay(500).fadeIn(200);
		 	}, 5000);
		 	setTimeout( function(){
		 		$('.second-slider').fadeOut(200);
		 		$('.third-slider').delay(500).fadeIn(200);
		 	}, 10000);
		 	setTimeout( function(){
		 		$('.third-slider').fadeOut(200);
		 		$('.forth-slider').delay(500).fadeIn(200);
		 	}, 15000);
		 	setTimeout( function(){
		 		$('.forth-slider').fadeOut(200);
		 		$('.fifth-slider').delay(500).fadeIn(200);
		 	}, 20000);
		 	setTimeout( function(){
		 		$('.fifth-slider').fadeOut(200);
		 		$('.first-slider').delay(500).fadeIn(200);
		 	}, 25000);
		}, 25000);






    // function fadeQuote(){
    // 	$('#1').fadeIn(200).delay(5000).fadeOut(200);

    // 	// $('#1').fadeOut(200);
    // 	// $('q1').fadeToggle(200);
    // 	// $('.q2').delay(500).fadeToggle(200);
    // 	// $('q2').fadeToggle(200).delay(500);
    // 	// $('.q3').delay(200).fadeToggle(200);
    // 	// $('q3').fadeToggle(200);
    // }

    // window.setInterval(function(){
    // 	fadeQuote();
    // }, 5000);

    // function fadeQuoteTwo(){
    // 	$('#2').fadeIn(200).delay(5000).fadeOut(200);

    // }

    // window.setInterval(function(){
    // 	fadeQuoteTwo();
    // }, 5000);


	function slider(){
       $('#1').show("fade", 500).delay(5000).hide("fade",500);


	 //   	var sc = $('#slider ul li').size();
		// var count=2;
		// setInterval(function(){
		// 	$("#slider" + count).show("fade", 500);
		// 	$("#slider" + count).delay(5500).hide("fade",500);

		// 	if(count == sc){
		// 		count = 1;

		// 	}else{
		// 		count = count + 1;
		// 	}

		// }, 6500);
	}
        $(window).load(function(){
        	slider();

        });


	$("#nav-toggle, #menu_mask").on('click', function(){

		// $('body').toggleClass('body_move');
		//
		// $('#nav-toggle').toggleClass('active').toggleClass('fixed');
		// $('#menu_mask').toggle();
		// $('.head-unit #menuMask').toggleClass('menu_mask_slide');
		// $('.hamburgNavi').slideToggle();

		$('.new_menu').slideToggle();

	});


	//Following is the code for the time of day greeting
	var today = new Date();
	var hourNow = today.getHours();
	var greeting;

	if (hourNow >= 18){
		greeting = 'Good Evening!';
	} else if (hourNow >= 12) {
		greeting = 'Good Afternoon!';
	} else if (hourNow >= 5) {
		greeting = 'Good Morning!';
	}else if (hourNow >= 0){
		greeting = 'Go to bed zzZZ!';
	}else {
		greeting = 'Welcome! ';
	}

	var paragraph = document.createElement('h3');
	var text = document.createTextNode(greeting);

	// paragraph.appendChild(text);

	// var element = document.getElementById("greeting");

	// element.appendChild(paragraph);



	//character animate
	$('#imageBox').on('mouseover', function(){
		$('#smallBub').fadeToggle(300).delay(900);
		$('#mediumBub').fadeToggle(300).delay(900);
		$('#largeBub').fadeToggle(300).delay(900);
		$('#messageBub').fadeToggle(300).delay(900);

	});


	$('#imageBox').on('mouseout', function(){
		$('#smallBub').fadeToggle(300).delay(900);
		$('#mediumBub').fadeToggle(300).delay(900);
		$('#largeBub').fadeToggle(300).delay(900);
		$('#messageBub').fadeToggle(300).delay(900);

	});






});
