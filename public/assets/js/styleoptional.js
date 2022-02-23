const nav=document.querySelector('nav');
const devis=document.querySelector('.devis')
// const div=document.querySelector('.collapse')


if(window.innerWidth>991){
    div.classList.add('d-flex','justify-content-center')
}

if(window.innerWidth<992){
    devis.classList.add('mx-3')
}

// function onWindowScroll(event) {
//     if(window.innerWidth>991){
//         if (window.pageYOffset < 20) {
//             nav.classList.add('bg-transparent','navbar-transparent')
//             nav.classList.remove('bg-light','navbar-light','shadow-lg')
//         }
//         if (window.pageYOffset > 20)
//         {
//             nav.classList.remove('bg-transparent','navbar-transparent')
//             nav.classList.add('bg-light','navbar-light','shadow-lg')
//         }
//     }

//     if(window.innerWidth<992 && window.pageYOffset){
//             nav.classList.add('bg-light','navbar-light','shadow-lg')
//     }
// }

// window.addEventListener('scroll', onWindowScroll)


// function onresize(event){
//     if(window.innerWidth<992){
//         nav.classList.add('navbar-light','bg-light')
//         devis.classList.add('mx-3')
//         div.classList.remove('justify-content-center')
//     }
//     else{
//         nav.classList.remove('bg-light','navbar-light');
//         div.classList.add('justify-content-center')
//     }
// }
// window.addEventListener('resize',onresize)