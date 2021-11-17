/**
 * Sticky Header
 * Adds a class to header on scroll
 */

jQuery(document).on('scroll', function () {
	if (0 < jQuery(document).scrollTop()) {
		jQuery('header, body').addClass('shrink');
	} else {
		jQuery('header, body').removeClass('shrink');
	}
});

/**
 * Document Ready Function
 * Triggered when document get's ready
 */
jQuery(document).ready(function (jQuery) {

	// /**
	//  * Toggle menu for mobile
	//  */
	// jQuery('.menu-btn').click(function () {
	// 	jQuery(this).toggleClass('active');
	// 	jQuery('.menu-overlay').toggleClass('open');
	// 	jQuery('html, body').toggleClass('no-overflow');
	// 	jQuery('.main-menu ul li.active').removeClass('active');
	// 	jQuery('.main-menu ul.sub-menu').slideUp();
	// });

	// /**
	//  * Add span tag to multi-level accordion menu for mobile menus
	//  */
	// jQuery('li').each(function () {
	// 	if (jQuery(this).hasClass('menu-item-has-children')) {
	// 		jQuery(this).prepend('<span class="submenu-icon"></span>');
	// 	}
	// });

	// /**
	//  * Slide Up/Down internal sub-menu when mobile menu arrow clicked
	//  */
	// jQuery('.main-menu .submenu-icon').click(function () {
	// 	const link = jQuery(this);
	// 	const closestUl = link.closest('ul');
	// 	const parallelActiveLinks = closestUl.find('.active');
	// 	const closestLi = link.closest('li');
	// 	const linkStatus = closestLi.hasClass('active');
	// 	let count = 0;

	// 	closestUl.find('ul').slideUp(function () {
	// 		if (++count === closestUl.find('ul').length) {
	// 			parallelActiveLinks.removeClass('active');
	// 		}
	// 	});

	// 	if (!linkStatus) {
	// 		closestLi.children('ul').slideDown();
	// 		closestLi.addClass('active');
	// 	}
	// });
	// var myVar;
	// var count = people.length;
	// var enoughFood = count > sandwiches.length;

	// if (enoughFood) {
	// 	var count = sandwiches.length; // accidentally overriding the count variable
	// 	console.log('We have ' + count + ' sandwiches for everyone. Plenty for all!');
	// }

	// // our count variable is no longer accurate
	// console.log('We have ' + count + ' people and ' + sandwiches.length + ' sandwiches!');

});


// https://stackoverflow.com/questions/123999/how-can-i-tell-if-a-dom-element-is-visible-in-the-current-viewport
function isElementInViewport(el) {
	var rect = el.getBoundingClientRect();
	return (
		rect.top >= 0 &&
		rect.left >= 0 &&
		rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
		rect.right <= (window.innerWidth || document.documentElement.clientWidth)
	);
}

function runAnimations(el) {
	console.log('Run Animations Funciton Called');
	var elements = document.querySelectorAll(el);
	var inViewport = [];
	for (var i = 0; i < elements.length; i++) {
		if (isElementInViewport(elements[i])) {
			inViewport.push(elements[i]);
		}
	}
	for (var i = 0; i < inViewport.length; i++) {
		var element = inViewport[i];
		element.parentElement.classList.add(element.dataset.animation);
	}
}

window.addEventListener('scroll', function () {
	runAnimations(".post-image-archive");
});

jQuery(window).load(function (jQuery) {
    // This gets executed when the content is loaded
	console.log('loaded');
	runAnimations(".post-image-archive");
});
