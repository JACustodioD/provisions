let animate = document.querySelectorAll(".animate");
let animate1 = document.querySelectorAll(".animate1");
let animate_benefits = document.querySelectorAll(".animate_benefits");

function toShowScroll(){
    let scrollTop = document.documentElement.scrollTop;
    for(var i =0; i < animate.length; i++){
        let heightAnimate = animate[i].offsetTop;
        if (heightAnimate +200 < scrollTop) {
            animate[i].style.opacity = 1
            animate[i].classList.add("show-effect-h1");
            animate[1].classList.add("show-effect-img");
        }
    }
}
function toShowScroll1(){
    let scrollTop = document.documentElement.scrollTop;
    for(var i =0; i < animate1.length; i++){
        let heightAnimated = animate1[i].offsetTop;
        if (heightAnimated +600 < scrollTop) {
            animate1[i].style.opacity = 1
            animate1[i].classList.add("show-effect-h1-1");
            animate1[1].classList.add("show-effect-img-1");
        }
    }
}
function toShowScroll2(){
    let scrollTop = document.documentElement.scrollTop;
    for (let i = 0; i < animate_benefits.length; i++) {
        let heightAnimateb = animate_benefits[i].offsetTop;
        if (heightAnimateb +1500 < scrollTop) {
            animate_benefits[i].style.opacity = 1
            animate_benefits[i].classList.add("show-effect-benefits")
            animate_benefits[1].classList.add("show-effect-benefits-h")
        }
        
    }
}
window.addEventListener('scroll', toShowScroll);
window.addEventListener('scroll', toShowScroll1);
window.addEventListener('scroll', toShowScroll2);