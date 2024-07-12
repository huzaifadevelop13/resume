//active navbar//

let nav = document.querySelector(".navigation-wrap");
window.onscroll = function () {
    if (document.documentElement.scrollTop > 20) {
        nav.classList.add("scroll-on");

    } else {
        nav.classList.remove("scroll-on");
    }
}

// nav hide

let navBar = document.querySelectorAll('.nav-link');
let navCollapse = document.querySelector('.navbar-collapse.collapse');
navBar.forEach(function(a){
    a.addEventListener("click", function(){
        navCollapse.classList.remove("show");
    })
})


// -------vector-----////


document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".img-fluid");
    let index = 0;

    function switchImage() {
        images[index].classList.remove("active");
        index = (index + 1) % images.length;
        images[index].classList.add("active");
    }

    setInterval(switchImage, 1500); // Switch image every 3 seconds
});


// --------CARD--------//













  











