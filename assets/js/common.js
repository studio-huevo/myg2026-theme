"use strict";
document.addEventListener("DOMContentLoaded", function() {
	var e = window.navigator.userAgent.toLowerCase(),
		i = document.querySelector("body");
	console.log(e), -1 != e.indexOf("msie") || -1 != e.indexOf("trident") ? i.classList
		.add("ie") : -1 != e.indexOf("edge") ? i.classList.add("edge") : -1 != e.indexOf(
			"chrome") ? i.classList.add("chrome") : -1 != e.indexOf("safari") ? i.classList
		.add("safari") : -1 != e.indexOf("firefox") ? (console.log("FireFoxをお使いですね"),
			i.classList.add("firefox")) : -1 != e.indexOf("opera") && i.classList.add(
			"opera"), -1 != e.indexOf("windows nt") ? i.classList.add("win") : -1 != e
		.indexOf("android") ? i.classList.add("android") : -1 != e.indexOf("iphone") ?
		i.classList.add("iphone") : -1 != e.indexOf("ipad") ? i.classList.add(
			"ipad") : -1 != e.indexOf("mac os x") ? i.classList.add("mac") : i.classList
		.add("etc"), new Swiper(".topics-ticker", {
			direction: "vertical",
			effect: "slide",
			speed: 1500,
			slidesPerView: 1,
			loop: !0,
			autoplay: {
				delay: 4e3
			}
		}), $(function() {
			var i = $(".tab-menu__btn__item");
			$(".tab-menu__btn__item").on("click", function() {
				$(".active").removeClass("active"), $(this).addClass("active");
				var e = i.index(this);
				$(".tab-menu__contents__item").removeClass("show").eq(e).addClass(
					"show")
			})
		})
}), $(function() {
	var e = $(".js-spmenu-trigger"),
		i = $(".global-nav"),
		s = $(".fixed-nav"),
		t = $("body"),
		a = "active";
	e.on("click", function() {
		t.toggleClass("js-sp-menu-opened"), i.toggleClass(a), s.toggleClass(a), $(
			".site-header").toggleClass("active"), $(this).toggleClass(a)
	})
}), $(function() {
	$(".js-acc-trigger").on("click", function() {
		var e = $(this).closest(".js-acc-scope"),
			i = e.find(".js-acc-target");
		e.stop().toggleClass("open"), i.stop().slideToggle()
	})
}), $(function() {
	var e = $(".js-select-change");
	e.on("change", function() {
		window.location.href = e.val()
	})
}), $(function() {
	var e = $("#page-top");
	e.hide(), $(window).scroll(function() {
		$(window).width();
		100 < $(this).scrollTop() ? e.fadeIn() : e.fadeOut()
	}), e.click(function() {
		return $("body,html").animate({
			scrollTop: 0
		}, 500), !1
	})
})/* , $(function() {
	$('a[href^="#"]').click(function() {
		var e = $(this).attr("href"),
			i = $("#" == e || "" == e ? "html" : e).offset().top;
		return $("html, body").animate({
			scrollTop: i
		}, 500, "swing"), !1
	})
}) */, $(function() {
	objectFitImages(".ofi-img")
});