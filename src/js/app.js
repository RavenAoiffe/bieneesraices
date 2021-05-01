document.addEventListener('DOMContentLoaded', function(){

    eventListeners();
    darkMode();
})

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar');
}

const darkMode = ()=>{
    const darkMode = document.querySelector('.dark-mode-boton');

    const preferencesDarkMode = window.matchMedia('(prefers-color-sheme: dark)');
    //console.log(preferencesDarkMode.matches);
    cambiarPreferencias(preferencesDarkMode);
    

    preferencesDarkMode.addEventListener('change', function(){
        cambiarPreferencias(preferencesDarkMode);
    })

    darkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    })
}

const cambiarPreferencias = preferencesDarkMode =>{
    if(preferencesDarkMode.matches){
        document.body.classList.add('dark-mode-boton');
    }
    else{
        document.body.classList.remove('dark-mode-boton');
    } 
}