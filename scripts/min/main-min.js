$(document).ready(function(){function e(){$("#1").show("fade",500).delay(5e3).hide("fade",500)}$("#factOne").on("mouseover",function(){console.log("testing")}),$(window).load(function(){$(".loader").fadeOut("slow")}),$(".slider").on("click",function(){$(".slider").toggleClass("slider-change")}),setTimeout(function(){$(".first-slider").fadeOut(200),$(".second-slider").delay(500).fadeIn(200)},5e3),setTimeout(function(){$(".second-slider").fadeOut(200),$(".third-slider").delay(500).fadeIn(200)},1e4),setTimeout(function(){$(".third-slider").fadeOut(200),$(".forth-slider").delay(500).fadeIn(200)},15e3),setTimeout(function(){$(".forth-slider").fadeOut(200),$(".fifth-slider").delay(500).fadeIn(200)},2e4),setTimeout(function(){$(".fifth-slider").fadeOut(200),$(".first-slider").delay(500).fadeIn(200)},25e3),setInterval(function(){setTimeout(function(){$(".first-slider").fadeOut(200),$(".second-slider").delay(500).fadeIn(200)},5e3),setTimeout(function(){$(".second-slider").fadeOut(200),$(".third-slider").delay(500).fadeIn(200)},1e4),setTimeout(function(){$(".third-slider").fadeOut(200),$(".forth-slider").delay(500).fadeIn(200)},15e3),setTimeout(function(){$(".forth-slider").fadeOut(200),$(".fifth-slider").delay(500).fadeIn(200)},2e4),setTimeout(function(){$(".fifth-slider").fadeOut(200),$(".first-slider").delay(500).fadeIn(200)},25e3)},25e3),$(window).load(function(){e()}),$("#nav-toggle").on("click",function(){$("#nav-toggle").toggleClass("active"),$("#menuMask").toggleClass("menuMask"),$(".hamburgNavi").slideToggle(500)});var d=new Date,t=d.getHours(),o;o=t>=18?"Good Evening!":t>=12?"Good Afternoon!":t>=5?"Good Morning!":t>=0?"Go to bed zzZZ!":"Welcome! ";var n=document.createElement("h3"),a=document.createTextNode(o);n.appendChild(a);var i=document.getElementById("greeting");i.appendChild(n),$("#imageBox").on("mouseover",function(){$("#smallBub").fadeToggle(300).delay(900),$("#mediumBub").fadeToggle(300).delay(900),$("#largeBub").fadeToggle(300).delay(900),$("#messageBub").fadeToggle(300).delay(900)}),$("#imageBox").on("mouseout",function(){$("#smallBub").fadeToggle(300).delay(900),$("#mediumBub").fadeToggle(300).delay(900),$("#largeBub").fadeToggle(300).delay(900),$("#messageBub").fadeToggle(300).delay(900)}),$("#factOne").on("mouseover",function(){alert("testing")})});