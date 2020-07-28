const spans = document.querySelectorAll('h1 span')
let progress = document.getElementById('progressbar');
let slider = document.querySelector('.slider-container');
let sliderInd = document.querySelectorAll('.slider-test');
let accountant = 1;
let sizeWidth = sliderInd[0].clientWidth;
let interval = 3000;

spans.forEach(span => span.addEventListener('mouseover', function (e) {
    span.classList.add('animated', 'rubberBand')
}))
spans.forEach(span => span.addEventListener('mouseout', function (e) {
    span.classList.remove('animated', 'rubberBand')
}))

const t1 = gsap.timeline()

const controller = new ScrollMagic.Controller();
const scene = new ScrollMagic.Scene({
        triggerElement: '.skills',
        triggerHook: 1
    })
    .setTween(t1)
    .addTo(controller)

const showRequiredCategory = event => {
    const getId = event.id
    const links = document.querySelectorAll('.work-category button')
    for (i = 0; i < links.length; i++) {
        if (links[i].hasAttribute('class')) {
            links[i].classList.remove('active')
        }
    }

    event.classList.add('active')
    const getCategory = document.querySelector(`.category-${getId}`)
    const categories = document.querySelectorAll(`div[class ^= "category-"]`)
    for (i = 0; i < categories.length; i++) {
        if (categories[i].hasAttribute('class')) {
            categories[i].classList.remove('showCategory')
            categories[i].classList.add('hideCategory')
        }
    }
    getCategory.classList.remove('hideCategory')
    getCategory.classList.add('showCategory')
}

let totalHeight = document.body.scrollHeight - window.innerHeight;
window.onscroll = function () {
    let progressHeight = (window.pageYOffset / totalHeight) * 100;
    progress.style.height = progressHeight + "%";
};