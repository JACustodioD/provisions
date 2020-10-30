let animate = document.querySelectorAll(".animate");
let animate1 = document.querySelectorAll(".animate1");
let animate_benefits = document.querySelectorAll(".animate_benefits");


function showElements(elements, height, class1, class2) {
    let scrollTop = document.documentElement.scrollTop;

    for (let i = 0; i < elements.length; i++) {
        let heightAnimate = elements[i].offsetTop;
        let className = i == 0 ? class1 : class2 ;

        if (heightAnimate + height < scrollTop) {
            elements[i].style.opacity = 1
            elements[i].classList.add(className);
        }
    }
}


window.addEventListener('wheel', function(){showElements(animate, 200, 'show-effect-h1', 'show-effect-img')});
window.addEventListener('wheel', function(){showElements(animate1, 600, 'show-effect-img', 'show-effect-h1')});
window.addEventListener('wheel', function(){showElements(animate_benefits, 1400, 'show-effect-h1', 'show-effect-img')});


/*
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

*/