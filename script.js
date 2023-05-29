document.addEventListener("DOMContentLoaded", function () {
    function setFaviconByTheme() {
        const favicon = document.getElementById("favicon");
        const themeQuery = window.matchMedia("(prefers-color-scheme: dark)");

        if (themeQuery.matches) {
            favicon.href = "./assets/logo/logo_white_bold.png";
        } else {
            favicon.href = "./assets/logo/logo_black_bold.png";
        }
    }

    // Ejecutar la función al cargar la página
    setFaviconByTheme();

    // Escuchar cambios en las preferencias de color del sistema
    window
        .matchMedia("(prefers-color-scheme: dark)")
        .addEventListener("change", setFaviconByTheme);


    VANTA.FOG({
        el: "#inicio",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.0,
        minWidth: 200.0,
        highlightColor: 0x7d00f2,
        midtoneColor: 0x69ff,
        lowlightColor: 0xdeff00,
        baseColor: 0x090b11,
        blurFactor: 0.9,
        speed: 2.0,
        zoom: 1.5,
    });

    function smoothScroll(targetElement) {
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: "smooth",
                block: "start",
                inline: "nearest",
            });
        }
    }

    document.getElementById("btn-inicio").addEventListener("click", (e) => {
        e.preventDefault();
        smoothScroll(document.getElementById("inicio"));
    });

    document.getElementById("logo").addEventListener("click", (e) => {
        e.preventDefault();
        smoothScroll(document.getElementById("inicio"));
    });

    document.getElementById("btn-proyectos").addEventListener("click", (e) => {
        e.preventDefault();
        smoothScroll(document.getElementById("proyectos"));
    });

    document.getElementById("btn-sobreMi").addEventListener("click", (e) => {
        e.preventDefault();
        smoothScroll(document.getElementById("sobreMi"));
    });

    document.getElementById("btn-contacto").addEventListener("click", (e) => {
        e.preventDefault();
        smoothScroll(document.getElementById("contacto"));
    });

    document.getElementById("btn-habilidades").addEventListener("click", (e) => {
        e.preventDefault();
        smoothScroll(document.getElementById("habilidades"));
    });

    var typingEffect = new Typed(".multiText", {
        strings: ["Samuel Hernández", "Desarrollador Web"],
        loop: true,
        typeSpeed: 100,
        backSpeed: 80,
        backDelay: 1500,
    });

    //-------------------------------------------------

    document.getElementById("cambiarTema").addEventListener("click", (e) => {
        const btnClaro = document.getElementById("btn-claro");
        const btnOscuro = document.getElementById("btn-oscuro");

        if (btnClaro.classList.contains("oculto")) {
            btnClaro.classList.remove("oculto");
            btnOscuro.classList.add("oculto");
            VANTA.FOG({
                el: "#inicio",
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 200.0,
                minWidth: 200.0,
                highlightColor: 0x7d00f2,
                midtoneColor: 0x69ff,
                lowlightColor: 0xdeff00,
                baseColor: 0x090b11,
                blurFactor: 0.9,
                speed: 2.0,
                zoom: 1.5,
            });
        } else {
            btnOscuro.classList.remove("oculto");
            btnClaro.classList.add("oculto");
            VANTA.FOG({
                el: "#inicio",
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 200.0,
                minWidth: 200.0,
                highlightColor: 0x7d00f2,
                midtoneColor: 0x69ff,
                lowlightColor: 0xdeff00,
                baseColor: 0xffffff,
                blurFactor: 0.9,
                speed: 2.0,
                zoom: 1.5,
            });
        }
    });
});

$(document).ready(function () {
    $('#myForm').on('submit', function (e) {
        e.preventDefault(); 

        $.ajax({
            type: 'post',
            url: 'sendmail.php',
            data: $('#myForm').serialize(),
            success: function (response) {
                var data = JSON.parse(response);
                if (data.status === "success") {
                    Toastify({
                        text: data.message,
                        duration: 5000,
                        close: true,
                        gravity: "bottom",
                        position: 'right',
                        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                    }).showToast();
                    $('#myForm')[0].reset();
                } else {
                    Toastify({
                        text: data.message,
                        duration: 5000,
                        close: true,
                        gravity: "bottom",
                        position: 'right',
                        backgroundColor: "linear-gradient(to right, #FF5733, #FF5733)",
                    }).showToast();
                }
            }
            
            
        });
    });
});
