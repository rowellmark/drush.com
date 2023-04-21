(function ($, w, d, h, b) {
	$(document).ready(function () {

		/**
		 * Construct.
		 */
		__construct = () => {
			initNavigation();
			onScrollFixed();
			BurgerMenu();
			floating_scroll();

			/// specific for homepage
			if ($(b).hasClass('home')) {
				initCounter();
				runProperties();
			}

			AOS.init({ disable: 'mobile' });
		}

		initNavigation = () => {
			const $nav = $('#nav');
			if ($nav.length > 0) $nav.navTabDoubleTap();
		}
		onScrollFixed = () => {

			this.onScrollFixed = () => {
				const $header = $('.header');

				$(w).on('load scroll', function () {
					let currentScroll = w.pageYOffset || d.documentElement.scrollTop;
					let isDesktop = w.matchMedia('(min-width: 992px)').matches;

					if (isDesktop) {
						if (currentScroll > 0) {
							$header.addClass('header-float');
						}
						else {
							$header.removeClass('header-float');
						}
					}
					else {
						$header.removeClass('header-float');
					}

				});
			}
			this.onScrollFixed();
		}

		BurgerMenu = () => {

			const $expandedMenuWrapper = $('.expandedMenuWrapper');
			const $expandedMenuContainer = $('.expandedMenuContainer');
			const $expandedMenuBttn = $('.expanded-menu-bttn');
			const $expandedMenuClose = $('.expandedMenuClose');
			const $expandedNav = $('#expandedNav');

			$(window).on("load", function () {
				$expandedMenuContainer.mCustomScrollbar();

				$expandedNav.splitNav({
					"splitCount" : 4
				});
			});


			let mouse_is_inside = false;

			$expandedMenuContainer.hover(function () {
				mouse_is_inside = true;
				console.log('inside');
			}, function () {
				mouse_is_inside = false;
				console.log('outside');
			});


			$expandedMenuBttn.on('click', function () {
				$expandedMenuWrapper.addClass('active');
				$(b).addClass('expandedOpened');
			});

			$expandedMenuClose.on('click', function () {
				$expandedMenuWrapper.removeClass('active');
				$(b).removeClass('expandedOpened');
			});

			// if mouse_in_inside is false remove active class to hide expanded menu
			$expandedMenuWrapper.on('click', function () {
				if (mouse_is_inside == false) {
					$expandedMenuWrapper.removeClass('active');
					$(b).removeClass('expandedOpened');
				}
			});

		}
		floating_scroll = () => {

			const callback = (entries) => {
				entries.forEach(
					(entry) => {
						if (entry.isIntersecting) {

							$('.floating-smi').addClass('floating-dark');

						} else {

							$('.floating-smi').removeClass('floating-dark');

						}
					}
				);
			}

			const observerOptions = {
				root: null,
				rootMargin: '-50% -50%',
				threshold: [0, 0.5],
			};

			let observer = new IntersectionObserver(callback, observerOptions);

			const animationItems = document.querySelectorAll('.accent-bg');

			animationItems.forEach(item => {
				observer.observe(item)
			});

		}
		commaSeparateNumber = (val) => {
			while (/(\d+)(\d{3})/.test(val.toString())) {
				val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
			}
			return val;
		}
		initCounter = () => {

			if ($('body').hasClass('home')) {
				function isScrolledIntoView(elem) {
					const docViewTop = jQuery(window).scrollTop();
					let docViewBottom = docViewTop + jQuery(window).height();

					let elemTop = jQuery(elem).offset().top;
					let elemBottom = elemTop + jQuery(elem).height();

					return elemBottom <= docViewBottom && elemTop >= docViewTop;
				}

				var shown = false;

				$(w).scroll(function () {
					var myelement = $(".hp-performance-number");
					if (isScrolledIntoView(myelement)) {
						if (!shown) {
							$(".fn-lists em").each(function () {
								var $this = $(this);
								const limit = parseInt($this.attr("data-number"));

								$({ Counter: 0 }).animate(
									{ Counter: limit },
									{
										duration: 1000,
										easing: "swing",
										step: function () {
											$this.text(commaSeparateNumber(Math.ceil(this.Counter)));
										},
									}
								);
							});
						}
						shown = true;
					}
				});
			}
		}

		runProperties = () => {

			var $featuredListings = new Splide('.hpFlLists', {
				type: 'loop',
				perPage: 3,
				arrows: false,
				pagination: false
			});

			$featuredListings.mount();
		}

		/**
		 * Instant Initiate
		 */
		__construct();

	});

	$(window).on('load', function () {
		$('body').addClass('site-loaded');

	});

})(jQuery, window, document, 'html', 'body');