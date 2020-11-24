let animate = document.querySelectorAll(".animate");
let animate1 = document.querySelectorAll(".animate1");
let animate_benefits = document.querySelectorAll(".animate_benefits");
let animate_project = document.querySelectorAll(".animate_project");
let animate_services = document.querySelectorAll(".animate_services");
let about_icon = document.querySelectorAll(".about_icon");


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


window.addEventListener('scroll', function(){showElements(animate, 100, 'show-effect-h1', 'show-effect-img')});
window.addEventListener('scroll', function(){showElements(animate1, 600, 'show-effect-img', 'show-effect-h1')});
window.addEventListener('scroll', function(){showElements(animate_benefits, 1300, 'show-effect-h1', 'show-effect-img')});
window.addEventListener('scroll', function(){showElements(animate_project, 1900, 'show-effect-h1')});
window.addEventListener('scroll', function(){showElements(animate_services, 2600, 'show-effect-h1')});
window.addEventListener('scroll', function(){showElements(about_icon, 600, 'show-effect-img','show-effect-img')});



