//Mostrar alerta promoción
function showModal(delay){
    setTimeout(function (){
        $('#exampleModalCenter').modal('show');

    },delay);
}


//localStorage.clear()


//Alerta promoción cuando el user intente salir
let salidaPromocion = false;
if(!localStorage.getItem('modalShown')){
    showModal(5000);
    
    //Aparecerá después de 30 min
    showModal(180000);
    localStorage.setItem('modalShown', true);

    let alertaPromocion = document.getElementById("alertaPromocion");

    alertaPromocion.addEventListener("mouseover", function()  {
        salidaPromocion = true;
        showModal(0);
    })
}

