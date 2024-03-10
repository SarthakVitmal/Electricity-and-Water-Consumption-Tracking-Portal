let aboutus_btn = document.querySelector('.aboutus');
let about = document.querySelector('.about');
let contact_btn = document.querySelector('.contact-btn');
let contact_section = document.querySelector('.contactus');

aboutus_btn.addEventListener('click',() => {
    about.scrollIntoView({behavior:"smooth",block:'start'})
});

contact_btn.addEventListener('click',() => {
    contact_section.scrollIntoView({behavior:"smooth",block:'start'})
})

document.addEventListener('DOMContentLoaded', function () {
    const animatedElements = document.querySelectorAll('.animated');
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function handleScroll() {
        animatedElements.forEach(function (element) {
            if (isInViewport(element)) {
                element.classList.add('fade-in-up');
            }
        });
    }

    window.addEventListener('scroll', handleScroll);

    handleScroll();
});

