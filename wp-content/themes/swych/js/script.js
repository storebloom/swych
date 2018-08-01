function logoCheck(elem) {
	var docViewTop = $(window).scrollTop(),
		docViewBottom = docViewTop + $(window).height(),
		elemTop = $(elem).offset().top,
		elemBottom = elemTop + $(elem).outerHeight();
	return ((elemBottom >= docViewTop) && (elemTop <= docViewTop));
}

function pastElement(elem) {
	var docViewTop = $(window).scrollTop(),
		docViewBottom = docViewTop + $(window).height(),
		elemTop = $(elem).offset().top,
		elemBottom = elemTop + $(elem).outerHeight(),
		elemMiddle = elemTop + ($(elem).outerHeight() / 2);
	return ((elemMiddle <= docViewBottom) && (elemBottom >= docViewTop));
}

function checkWhiteSections() {
	if ($(".main.home").length) {
		if (logoCheck($(".section.about"))) $(".header").addClass("black");
		else $(".header").removeClass("black");
	} else if ($(".main.about").length) {
		if (logoCheck($(".about .section:nth-child(2)")) || logoCheck($(".section.retailers")) || logoCheck($(".section.partnership"))) {
			$(".header").addClass("black");

			if ( logoCheck($(".about .section:nth-child(2)")) ) {
				$( '.header' ).removeClass( 'pink' );
			}
		} else $(".header").removeClass("black");
		if ( logoCheck($(".about .section:first-of-type")) ) {
			$( '.header' ).addClass( 'pink' );
		}
	} else if ($(".main.team").length) {
		if (logoCheck($(".team .section:nth-child(2)")) || logoCheck($(".section.blockchain_team")) || logoCheck($(".section.investor")) || logoCheck($(".section.board_of_directors")) || logoCheck($(".section.advisors"))) $(".header").addClass("black");
		else $(".header").removeClass("black");
	}
}

function checkServiceProgress() {
	$(".service").each(function () {
		var curService = $(this);
		if (pastElement($(this))) {
			$(this).addClass("active");
			setTimeout(function () {
				curService.addClass("active_dot");
			}, 300);
		} else {
			$(this).removeClass("active");
			setTimeout(function () {
				curService.removeClass("active_dot");
			}, 300);
		}
	});
}

function checkTeamMemberProgress() {
	$(".team_member").each(function () {
		var curTM = $(this);
		if (pastElement($(this))) {
			$(this).addClass("active");
			setTimeout(function () {
				curTM.addClass("active_dot");
			}, 300);
		} else {
			$(this).removeClass("active");
			setTimeout(function () {
				curTM.removeClass("active_dot");
			}, 300);
		}
	});
}
$(document).ready(function () {
	if ($(".main.home").length) {
		if ($(window).width() > 768) {
			$.scrollify({
				section: ".scrollify",
				sectionName: "section-name",
				interstitialSection: "",
				scrollSpeed: 800,
				offset: 0,
				scrollbars: true,
				standardScrollElements: ".scrollify_off",
				setHeights: false,
				overflowScroll: true,
				updateHash: false,
				touchScroll: true,
				before: function (index, sections) {
					if ($.scrollify.current().hasClass("intro_section")) {
						$(".active_intro").removeClass("active_intro");
						$.scrollify.current().addClass("active_intro");
					} else {
						$(".intro_section:last-child").addClass("active_intro");
					}
				},
				after: function () {},
				afterResize: function () {},
				afterRender: function () {
					if ($.scrollify.current().hasClass("intro_section")) {
						$.scrollify.current().addClass("active_intro");
					} else {
						$(".intro_section:last-child").addClass("active_intro");
					}
				},
			});
		}
	}

	$( '.flip' ).flip( {
		trigger: 'manual'
	} );

	window.setInterval(function(){
		$( '.flip' ).flip( 'toggle' );
	}, 1500);

	if ($(window).width() <= 835) {
		$(".team_member").each(function () {
			var tImg = $(this).children('img').clone();
			$(this).children('img').remove();
			$(this).children('.text').before(tImg);
		});
	}
	if ($(window).width() <= 768) {
		$(".intro_section:nth-child(2)").addClass('active_mobile_intro');
		$(".static_dot:first-child").addClass('active_intro_dot');
		$(".service").each(function () {
			var tImg = $(this).children('img').clone();
			$(this).children('img').remove();
			$(this).children('.text').before(tImg);
		});
		$(".step").each(function () {
			var tImg = $(this).children('.step_graphic').clone();
			$(this).children('.step_graphic').remove();
			$(this).children('.step_text').after(tImg);
		});
		var col1 = $(".footer_main .column:not(.menucolumn)").clone();
		$(".footer_main .column:not(.menucolumn)").remove();
		$(".footer_main").append(col1);
		$(".home .intro_section").on("swipeleft", swipeLeftHandler);
		function swipeLeftHandler(event) {
			var cur = $(event.currentTarget);
			if (!cur.is(":last-child")) {
				var iD = cur.index() + 1;
				$(".intro_section").removeClass('active_mobile_intro');
				cur.next().addClass('active_mobile_intro');
				$(".static_dot").removeClass('active_intro_dot');
				$(".static_dot:nth-child("+iD+")").addClass('active_intro_dot');
			}
		}
		$(".home .intro_section").on("swiperight", swipeRightHandler);
		function swipeRightHandler(event) {
			var cur = $(event.currentTarget);
			if (!cur.is(":nth-child(2)")) {
				var iD = cur.index() - 1;
				$(".intro_section").removeClass('active_mobile_intro');
				cur.prev().addClass('active_mobile_intro');
				$(".static_dot").removeClass('active_intro_dot');
				$(".static_dot:nth-child("+iD+")").addClass('active_intro_dot');
			}
		}
	}
	checkWhiteSections();
	if ($(".main.about").length) checkServiceProgress();
	if ($(".main.team").length) checkTeamMemberProgress();
	$(".menu_open").click(function () {
		$(".menu").toggleClass('show');
	});
	if ($("select").length) {
		$("select").each(function () {
			$(this).children("option:first-child").attr('disabled', 'disabled');
		});
	}
});


$(window).scroll(function () {
	checkWhiteSections();
	if ($(".main.about").length) checkServiceProgress();
	if ($(".main.team").length) checkTeamMemberProgress();
});
$(window).load(function () {});
$(window).resize(function () {
	if ($(window).width() < 768) {

		var col1 = $(".footer_main .column:not(.menucolumn)").clone();
		$(".footer_main .column:not(.menucolumn)").remove();
		$(".footer_main").append(col1);
	} else {
		var col1 = $(".footer_main .column:not(.menucolumn)").clone();
		$(".footer_main .column:not(.menucolumn)").remove();
		$(".footer_main").prepend(col1);
	}
	if ($(window).width() <= 835) {
		$(".team_member").each(function () {
			var tImg = $(this).children('img').clone();
			$(this).children('img').remove();
			$(this).children('.text').before(tImg);
		});
	}
});
