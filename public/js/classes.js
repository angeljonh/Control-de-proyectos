/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Menu


******************************/

$(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	setHeader();

	$(window).on('resize', function()
	{
		setHeader();

		setTimeout(function()
		{
			$(window).trigger('resize.px.parallax');
		}, 375);
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	initMenu();

	/* 

	2. Set Header

	*/

	function setHeader()
	{
		var header = $('.fixed_header');

		if($(window).scrollTop() > 180)
		{
			header.addClass('scrolled');
		}
		else
		{
			header.removeClass('scrolled');
		}
	}

	/* 

	3. Init Menu

	*/

	function initMenu()
	{
		if($('.menu').length && $('.hamburger').length)
		{
			var menu = $('.menu');
			var hamburger = $('.hamburger');
			var close = $('.menu_close');
			var door = $('.menu_door');
			var menuContent = $('.menu_content');
			var items = $('.menu_nav ul li');

			hamburger.on('click', function()
			{
				// menu.toggleClass('active');

				// Open menu
				TweenMax.to(menu, 0,
				{
					visibility:'visible',
					opacity:1
				});
				TweenMax.to(door, 1,
				{
					width:'50%',
					ease: Power3.easeOut
				});
				TweenMax.to(menuContent, 0.4,
				{
					opacity:1,
					delay:0.4
				});
				TweenMax.staggerFromTo(items,1,
				{
					y:10,
					opacity:0,
					ease:Power2.easeInOut
				},
				{
					y:0,
					opacity:1,
					delay:0.2
				},0.08)
			});

			close.on('click', function()
			{
				// menu.toggleClass('active');
				TweenMax.to(menuContent, 0.4,
				{
					opacity:0
				});
				TweenMax.to(door, 1,
				{
					width:0,
					ease: Power3.easeOut,
					delay:0.6
				});
				TweenMax.to(menu, 0,
				{
					visibility:'hidden',
					opacity:0,
					delay:1.5
				});
			});
		}
	}

$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			defaultDate: '2016-12-12',
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2016-12-01'
				},
				{
					title: 'Long Event',
					start: '2016-12-07',
					end: '2016-12-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-12-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-12-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2016-12-11',
					end: '2016-12-13'
				},
				{
					title: 'Meeting',
					start: '2016-12-12T10:30:00',
					end: '2016-12-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2016-12-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2016-12-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2016-12-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2016-12-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2016-12-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'https://google.com/',
					start: '2016-12-28'
				}
			]
		});

});