$(function() {
    $('a[href^=".my-skills"]').click(function() {
        let target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top}, 1000);
            return false;
    });
});

$(function() {
    $('a[href^=".my-jobs"]').click(function() {
        let target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top}, 1000);
            return false;
    });
});


// Счетчик работ
let number = document.querySelector('.number');
let numberTop = number.getBoundingClientRect().top
let start = +number.innerHTML, end = +number.dataset.max;

window.addEventListener('scroll', function onScroll() { // Функция открывается при скролле
		if(window.pageYOffset > numberTop - window.innerHeight / 2) {
    		this.removeEventListener('scroll', onScroll);
        	let interval = setInterval(function() {
        			number.innerHTML = ++start;
            		if(start == end) {
            			clearInterval(interval);
            		}
        }, 100);
    }
});


new TypeIt("#user-header", {
  strings: ["Привет, меня зовут Мадияр", "Я веб-разработчик"],
  speed: 100,
  waitUntilVisible: true
}).go();