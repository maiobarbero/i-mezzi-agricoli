// import LocomotiveScroll from 'locomotive-scroll'

// import Swup from 'swup'
// import SwupBodyClassPlugin from '@swup/body-class-plugin'
// import SwupHeadPlugin from '@swup/head-plugin'
// import SwupGtmPlugin from '@swup/gtm-plugin'

// import Flickity from 'flickity'

jQuery(function ($) {
	// ! Locomotive.
	// const scroll = new LocomotiveScroll({
	// 	el: document.querySelector('[data-scroll-container]'),
	// 	smooth: true,
	// })

	// ! Swup.
	// const options = {
	// 	animateHistoryBrowsing: false,
	// 	animationSelector: '[class*="transition"]',
	// 	containers: ['#swup'],
	// 	cache: false,
	// 	plugins: [
	// 		new SwupBodyClassPlugin(),
	// 		new SwupHeadPlugin(),
	// 		new SwupGtmPlugin(),
	// 	],
	// 	linkSelector:
	// 		'a[href^="' +
	// 		window.location.origin +
	// 		'"]:not([data-no-swup]), a[href^="/"]:not([data-no-swup])',
	// 	skipPopStateHandling: function (event) {
	// 		if (event.state && event.state.source == 'swup') {
	// 			return false
	// 		}
	// 		return true
	// 	},
	// }
	// const swup = new Swup(options)

	// document.addEventListener('swup:willReplaceContent', event => {
	// 	scroll.destroy()
	// })

	// document.addEventListener('swup:contentReplaced', event => {
	// 	// $('.menu__container').removeClass('active')
	// 	// $('.navbar__burger').removeClass('active')
	// })
	// document.addEventListener('swup:transitionEnd', event => {
	// 	// scroll.init()
	// 	loadScripts()
	// })
	// document.addEventListener('swup:clickLink', event => {
	// 	scroll.destroy()
	// })

	// document.addEventListener('swup:transitionStart', event => {
	// 	scroll.scrollTo('top')
	// })

	function loadScripts() {
		// ! Flickity
		// var flkty = new Flickity('.main-carousel', {
		// TODO options
		// })

		// ! Refresh when mobile
		$(window).on('resize', function () {
			if ($(window).width() > 480 && $(window).width() < 768) {
				location.reload() // refresh page
			}
		})
	}
	loadScripts()

	// ! Burger
	$('.menu__toggle').on('click', function () {
		$('.menu__toggle').toggleClass('active')
		$('.menu__container').toggleClass('active')
	})

	// function maxHeightBlock() {
	// 	var maxHeightBlock = 0
	// 	jQuery('.loop-card h3')
	// 		.each(function () {
	// 			maxHeightBlock = Math.max(maxHeightBlock, jQuery(this).height())
	// 		})
	// 		.height(maxHeightBlock)
	// }
	// maxHeightBlock()
})
