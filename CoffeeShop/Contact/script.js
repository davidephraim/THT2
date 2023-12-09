const slides = document.querySelectorAll('.slider img');
let currentSlide = 0;

function showSlide(index){
    slides.forEach((slide, i) => {
        slide.style.display = i === index ? 'block' : 'none';
    });
}

function nextSlide(){
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

function prevSlide(){
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
}

setInterval(nextSlide, 3000);

document.getElementById('slide-1').addEventListener('click', () => showSlide(0));
document.getElementById('slide-2').addEventListener('click', () => showSlide(1));
document.getElementById('slide-3').addEventListener('click', () => showSlide(2));