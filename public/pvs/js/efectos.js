let animate = document.querySelectorAll(".animate");

function toShowScroll(){
    let scrollTop = document.documentElement.scrollTop;
    for(var i =0; i < animate.length; i++){
        let heightAnimate = animate[i].offsetTop;
        if (heightAnimate -200 < scrollTop) {
            animate[i].style.opacity = 1
            animate[i].classList.add("show-effect")
        }
    }
}
window.addEventListener('scroll', toShowScroll);