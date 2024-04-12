const slidersItem = document.querySelectorAll('.slider-item');
let sliderIndex = 0;

function removeActiveClass() {
    slidersItem.forEach(item => {
        item.classList.remove('active');
    });
}

function addActiveClass() {
    if (sliderIndex == slidersItem.length) {
        sliderIndex = 0;
    }
    slidersItem[sliderIndex].classList.add('active');

}

function dispatchSlider() {
    removeActiveClass();
    addActiveClass();
    sliderIndex++;
}

setInterval(dispatchSlider, 3500);