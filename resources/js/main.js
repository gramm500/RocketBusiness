window.onload = function () {
	var SITE = {
		slider: function () {
			new Splide(".splide", {
				type: "loop",
				perPage: 3,
				gap: 32,
				arrows: false,
				pagination: true,
				focus: 0,
				height: 244,
				breakpoints: {
					740: {
						perPage: 1,
					},
				},
			}).mount();
		},

		mobileMenu: function () {
			(function () {
				var mobileData = {
					navToggle: document.querySelector(".header-menu-toggle"),
					nav: document.querySelector(".mobile-menu-container"),
					close: document.querySelector(
						".mobile-menu-container-close",
					),
					doToggle: function (e) {
						e.preventDefault();
						this.navToggle.classList.toggle("expanded");
						this.nav.classList.toggle("expanded");
					},
					hide: function (e) {
						e.preventDefault();
						this.navToggle.classList.remove("expanded");
						this.nav.classList.remove("expanded");
					},
				};

				mobileData.navToggle.addEventListener("click", function (e) {
					mobileData.doToggle(e);
				});
				mobileData.close.addEventListener("click", function (e) {
					mobileData.hide(event);
				});
				document.addEventListener("click", function (event) {
					if (
						!mobileData.nav.contains(event.target) &&
						!mobileData.navToggle.contains(event.target)
					) {
						mobileData.hide(event);
					}
				});
			})();
		},
	};

	SITE.slider();
	SITE.mobileMenu();
};
