

////////////////// NAVIGATION SCRIPTS //////////////////

const menuBtn = document.querySelector('.hamburger');
const nav = document.querySelector('.mobileNavigationMenu');


document.querySelector('.hamburger').addEventListener('click', function() {
    this.classList.toggle('is-active');
});

let isOpen = false;

if (!isOpen) {
    document.querySelector('.mobileNavigationMenu').style.right = "-100%"    
}

// GSAP Animations
const openNav = () => {
    gsap.to(nav, {
      duration: 0.45,
      right: "-40%", // Bring navigation fully into view
      ease: "expo.in",
    });
};
  
const closeNav = () => {
    gsap.to(nav, {
      duration: 0.45,
      right: "-100%", // Move navigation fully out of view
      ease: "expo.in",
    });

};
  
  // Toggle Navigation

  menuBtn.addEventListener("click", () => {
    isOpen = !isOpen;
    if (isOpen) {
      openNav();
    } else {
      closeNav();
    }
  });
  



////////////////// SWIPER INIT //////////////////

document.addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper('.swiper', {
        loop: true, // Enable looping
        slidesPerView: 3,
        breakpoints: {
            950: { slidesPerView: 3}, // Desktop
            576: { slidesPerView: 2},  // Tablets
            320: { slidesPerView: 1},   // Mobile
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});


