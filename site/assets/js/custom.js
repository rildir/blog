// const workLink = document.getElementById('work-link');
// const worksSection = document.getElementById('works');

// workLink.addEventListener('click', function (event) {
//     event.preventDefault(); // Prevent default link behavior

//     const targetOffset = worksSection.getBoundingClientRect().top + window.pageYOffset;
//     const targetScrollPosition = targetOffset - 100; // Scroll 100 pixels above the target

//     window.scrollTo({
//         top: targetScrollPosition,
//         behavior: 'smooth' // Use smooth scrolling behavior
//     });
// });

$(document).ready(function () {
	// Bağlantıya tıklama olayını ele al
	$("#scroll-to-top").click(function () {
		$("html, body").animate({ scrollTop: 0 }, "slow");
	});

	$("#scroll-to-bottom").click(function () {
		$("html, body").animate({ scrollTop: $(document).height() }, "slow");
	});
});

var swiper = new Swiper(".mySwiper", {
	slidesPerView: 2,
	spaceBetween: 10,
	rewind: true,
	loop: true,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	breakpoints: {
		640: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 25,
		},
		1024: {
			slidesPerView: 4,
			spaceBetween: 30,
		},
	},
});
