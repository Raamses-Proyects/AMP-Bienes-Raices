// Variables
const mobilMenu = document.querySelector('.menu-hamburguesa__img');
const darkModeBtn = document.querySelector('.dark-mode-img');


// Eventos
addEventListeners();
function addEventListeners() {
    document.addEventListener('DOMContentLoaded', () => {
        darkModeAutomatico();
        mobilMenu.addEventListener('click', mostrarEnlaces);
        darkModeBtn.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });
    });
}


// Funciones
function mostrarEnlaces() {
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar');
}

function darkModeAutomatico() {

    // Obteniendo preferencias del sistema para aplicar el dark-mode automaticamente
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    // Validando si es dark-mode
    if( prefiereDarkMode.matches ) {
        document.body.classList.add('dark-mode');
    }
    else {
        document.body.classList.remove('dark-mode');
    }

    // Evento para que al detectar el cambio de claro o oscuro, se actualize el sitio sin recargar
    // prefiereDarkMode.addEventListener('click', () => {
    //     if( prefiereDarkMode.matches ) {
    //         document.body.classList.add('dark-mode');
    //     }
    //     else {
    //         document.body.classList.remove('dark-mode');
    //     }
    // });
}

/*Notas:
    1.- toggle: si tiene la clase se la quita, si no la tiene se la agrega
*/