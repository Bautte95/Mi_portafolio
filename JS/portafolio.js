const menuLateral = document.querySelector(".barra_menu_lateral");
const iconoMenu = document.querySelector(".fa-bars");
const enlacesLaterales = document.querySelector(".menu__lateral");
const enlacesMenu = document.querySelectorAll(".enlaces__lat");

// codigo dinamismo de la barra lateral del menu de navegacion

iconoMenu.addEventListener("click", ()=>{
    if(enlacesLaterales.clientHeight == 0){
        enlacesLaterales.classList.add("menu__lateral_click");
    }else{
        enlacesLaterales.classList.remove("menu__lateral_click");
    }
});

enlacesMenu.forEach((e)=>{
    e.addEventListener("click",()=>{
        enlacesLaterales.classList.remove("menu__lateral_click");
    });
});

function mostrarNavLateral(){
    let scrollVertical = document.documentElement.scrollTop;
    if(scrollVertical >= 260){
        menuLateral.classList.add("menu__lateral__visible");
    }else{
        menuLateral.classList.remove("menu__lateral__visible");
        enlacesLaterales.classList.remove("menu__lateral_click");
    }
}

window.addEventListener("scroll",mostrarNavLateral);

// codigo de mas informacion boton proyecto SENA

const infoProyectoSena = document.querySelector(".info__proyecto__SENA");

infoProyectoSena.addEventListener("click", ()=>{

    swal({
        text: "Este es un proyecto grupal del SENA en donde se esta está diseñando y desarrollando una agenda virtual para una empresa dedicada a la distribución y almacenamiento de alimentos congelados, esta agenda virtual tiene como propósito unificar los diferentes canales de información que los clientes de la empresa utilizan para solicitar sus servicios de cargue, descargue y almacenamiento de alimentos.",
      });
});

// codigo validacion de formulario y codigo ajax

const nombre = document.getElementById("nombre");
const correo = document.getElementById("email");
const mensaje = document.getElementById("mensaje");
const alertaError = document.getElementById("error");

$("#enviar__datos").click(function(){
    var datos = $('#envio__form').serialize();
    if(nombre.value === null || nombre.value == ''){
        alertaError.innerHTML = "Por favor ingresa tu nombre";
    }
    else if(correo.value === null || correo.value == ""){
        alertaError.innerHTML = "Por favor ingresa un correo electronico";
    }else if(correo.value.indexOf("@") == -1 || correo.value.indexOf(".") == -1){
        alertaError.innerHTML = "Por favor ingresa un correo electrónico correcto";
    }
    else if(mensaje.value === null || mensaje.value == ""){
        alertaError.innerHTML = "Por favor ingresa tu mensaje";
    }else{
        nombre.value = "";
        correo.value = "";
        mensaje.value = "";

        $.ajax({
            url: '../PHP/contactar.php',
            type: 'POST',
            data: datos,
            success: function(e){
                if(e == 1){
                    swal("Enviado con éxito!", "Pronto me pondre en contacto contigo!", "success");
                    alertaError.innerHTML = "";
                }else{
                    swal({
                        title: "Ups hubo un error!",
                        text: "Intenta nuevamente",
                        icon: "error",
                        dangerMode: true,
                      })
                }
            }
          });
    }
});



// codigo de libreria Typpy.js

const imgHtml = document.getElementById("img__html");
const imgCss = document.getElementById("img__CSS");
const imgBootstrap = document.getElementById("img__BOOTSTRAP");
const imgJS = document.getElementById("img__JS");
const imgGit = document.getElementById("img__GIT");
const imgMysql = document.getElementById("img__MYSQL");
const imgPhp = document.getElementById("img__PHP");


tippy(imgHtml, {
    content: 'HTML',
  });

  tippy(imgCss, {
    content: 'CSS',
  });

  tippy(imgBootstrap, {
    content: 'BOOTSTRAP',
  });

  tippy(imgJS, {
    content: 'JAVASCRIPT',
  });

  tippy(imgGit, {
    content: 'GITHUB',
  });

  tippy(imgMysql, {
    content: 'MYSQL',
  });

  tippy(imgPhp, {
    content: 'PHP',
  });