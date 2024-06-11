/**
 * Custom JS for theme elements
 */

/**
 * 
 *  ADDED DELAY TO LIST ITEMS
 *
 */


let pawsCentralTime = 0.1;

let pawsCentralcontent = document.querySelectorAll('.wp-block-navigation__container,.wp-block-page-list');
pawsCentralcontent.forEach((item) => {
  let pawsCentralFirstChild = item.childNodes /* Target every single child node of content element */
  pawsCentralFirstChild.forEach(item => {
    let pawsCentralLastChild = item.lastChild;
    let ul = 'wp-block-navigation__submenu-container';
    if (pawsCentralLastChild.classList.contains(ul)) {   /* Check whether last child contains ul or not */
      let nestedChild = pawsCentralLastChild.children;
      Array.from(nestedChild).forEach((item, index) => {
        item.setAttribute("style", `transition-delay: ${pawsCentralTime * index}s`);
      })
    }
  })
})

function pawsCentralTimer(targetClass) {
  let pawsCentralOfferContent = document.querySelectorAll(`.${targetClass}`);
  if (pawsCentralOfferContent !== null) {
    pawsCentralOfferContent.forEach((item, index) => {
      let offerTime = 0.3;
      item.setAttribute("style", `transition-delay: ${offerTime * index}s`);
    })
  }
}

pawsCentralTimer('content')
pawsCentralTimer('recent-product-section .wc-block-grid__product')
pawsCentralTimer('services-section .wp-block-column')

// SHOW SEARCH FOR WHILE CLICK SEARCH ICON

const pawsCentralSearchInput = document.querySelector('.right-section .search-product input[type="search"]');
const pawsCentralMobileIcon = document.querySelector('.wp-mobile-icon-menu');
const pawsCentralSearchCont = document.querySelectorAll('.right-section');
const pawsCentralSearchDummy = document.querySelector('.dummy-icon .wp-block-search__button');
const pawsCentralSearchWrap = document.querySelector('.right-section .search-product');
const pawsCentralShowHandler = (e) => {
  e.preventDefault();
  let pawsCentralBody = document.body;
  pawsCentralBody.classList.toggle('search-toggle');
}
if (pawsCentralSearchCont !== null) {
  pawsCentralSearchCont.forEach((item) => {
    let pawsCentralSearchBtn = document.querySelectorAll('.dummy-icon .wp-block-search__button')
    pawsCentralSearchBtn.forEach((btn) => {
      btn.addEventListener('click', pawsCentralShowHandler)
    })
  })
  if (pawsCentralMobileIcon !== null && pawsCentralSearchDummy !== null && pawsCentralSearchWrap !== null) {
    document.addEventListener('click', function (e) {
      if (!pawsCentralSearchWrap.contains(e.target) && !pawsCentralSearchDummy.contains(e.target) && !pawsCentralMobileIcon.contains(e.target)) {
        let pawsCentralBody = document.body;
        pawsCentralBody.classList.remove('search-toggle')

      }
    }
    )
  }
}

window.addEventListener('load', function () {
  let pawsCentralMediaTitles = document.querySelectorAll('.media-content h2')
  let pawsCentralMediaContent = document.querySelector('.media-content p')
  let pawsCentralMediaButtons = document.querySelectorAll('.media-content .wp-block-button')
  if (pawsCentralMediaTitles && pawsCentralMediaContent && pawsCentralMediaButtons !== null) {
    pawsCentralMediaButtons.forEach((button) => {
      button.setAttribute('style', `transform: translateY(0)`)
      button.style.opacity = 1;
      button.style.clipPath = 'polygon(0 0, 100% 0, 100% 100%, 0 100%)'

    })
    pawsCentralMediaContent.setAttribute('style', `transform: translateY(0)`)
    pawsCentralMediaContent.style.opacity = 1;
    pawsCentralMediaContent.style.clipPath = 'polygon(0 0, 100% 0, 99% 100%, 0 100%)'
    pawsCentralMediaTitles.forEach((title) => {
      title.setAttribute('style', `transform: translateY(0)`)
      title.style.opacity = 1;
      title.style.clipPath = 'polygon(0 0, 100% 0, 100% 100%, 0 100%)'

    })
  }
})

/**
 * Scroll to JS for scroll and drag  horizontal on scroller sections
 * 
 *
 */

const pawsCentralSellerSection = document.querySelectorAll(".scroller-section .inner-wrap");

if (pawsCentralSellerSection !== null) {
  let isDown = false;
  let startX;
  let scrollLeft;
  pawsCentralSellerSection.forEach((item) => {


    item.addEventListener("mousedown", (e) => {
      isDown = true;
      item.classList.add("active");
      startX = e.pageX - item.offsetLeft;
      scrollLeft = item.scrollLeft;
    });
    item.addEventListener("mouseleave", () => {
      isDown = false;
      item.classList.remove("active");
    });
    item.addEventListener("mouseup", () => {
      isDown = false;
      item.classList.remove("active");
    });
    item.addEventListener("mousemove", (e) => {
      if (!isDown) return;

      e.preventDefault();

      let x = e.pageX - item.offsetLeft;
      let walk = (x - startX) * 3; //scroll-fast

      item.scrollLeft = scrollLeft - walk;
    });
  })
}


/**
 * 
 *  CREATE ELEMENT DIV TO WRAP EXISTING ELEM
 *
 */


window.addEventListener('DOMContentLoaded', function () {

  let divWrapper = document.querySelector('.tnp-subscription-minimal form');

  if (divWrapper !== null) {
    let appendIcon = document.querySelector('.tnp-subscription-minimal .tnp-submit');
    let newElem = document.createElement('div')
    newElem.classList.add('input-wrap');
    let innerAappend = newElem.appendChild(appendIcon)
    divWrapper.appendChild(newElem)
  }
})


/**
 * 
 *  ADD CLASS WHILE SECTION IS IN VIEWPORT
 *
 */

let udesignIsInViewport = function (elem) {
  let distance = elem.getBoundingClientRect();
  let windowHeight = window.innerHeight || document.documentElement.clientHeight;
  // Calculate the middle of the element
  let elementMiddle = distance.top + distance.height / 5 || distance.top + distance.height / 2;
  return (
    elementMiddle >= 0 &&
    elementMiddle <= windowHeight
  );
};
let sections = document.querySelectorAll('.wp-block-section');
if (sections !== null) {
  window.addEventListener('scroll', function (event) {
    // add event on scroll
    sections.forEach(element => {
      //for each .thisisatest
      if (udesignIsInViewport(element)) {
        //if in Viewport
        element.classList.add("transition-element");
      }
    });
  }, false);
}


/*
*
*
// SHOW TRANSPARENT HEADER WHILE SCROLL UP
*
*/

const pawsCentralHeader = document.querySelectorAll('.wp-mobile-icon-menu');
let pawsCentralPreviousScrollPos = window.pageYOffset || document.documentElement.scrollTop;

function pawsCentralHandleScroll() {
  pawsCentralHeader.forEach((headerScroll) => {
    const pawsCentralCurrentScrollPos = window.pageYOffset || document.documentElement.scrollTop;

    if (window.innerWidth < 1200) {
      if (pawsCentralCurrentScrollPos <= pawsCentralPreviousScrollPos) {
        // Scrolling up
        headerScroll.style.transform = 'none';
      } else {
        // Scrolling down or no movement
        headerScroll.style.transform = 'translateY(100%)';
      }

      pawsCentralPreviousScrollPos = pawsCentralCurrentScrollPos;
    } else {
      headerScroll.style.transform = 'none';
    }
  });
}

window.addEventListener('scroll', pawsCentralHandleScroll);
window.addEventListener('load', pawsCentralHandleScroll);
window.addEventListener('resize', pawsCentralHandleScroll);


// RATING

const pawsCentralRatingAppend = (ratingDiv) => {
  const pawsCentralRatingWrap = document.querySelectorAll(`.${ratingDiv}`)
  if (pawsCentralRatingWrap !== null) {
    pawsCentralRatingWrap.forEach((wrap) => {
      const pawsCentralRatingNumbers = wrap.querySelector('strong.rating')
      wrap.appendChild(pawsCentralRatingNumbers)
    })
  }
}

pawsCentralRatingAppend('star-rating')

// SHOW LOADER TILL ALL DOCUMENT LOAD AND HIDE

window.onload = function () {
  const pawsCentralLoaders = document.querySelectorAll(".loader");
  if (pawsCentralLoaders !== null) {
    // Hide the loader (if not already hidden)
    pawsCentralLoaders.forEach((loader) => {
      loader.style.opacity = 0;
      loader.style.visibility = 'hidden';
    })
  }
};

// ADD CUSTOM CSS FOR SHOWING CURRENT_MENU_ITEM CLASS

document.body.querySelectorAll('.wp-block-navigation').forEach(function (navBlock) {
  if (navBlock !== null) {
    navBlock.querySelectorAll('[href="' + window.location.href + '"]').forEach(function (navActiveLink) {
      navActiveLink.parentNode.classList.add('current-nav-item');
    });
  }
});