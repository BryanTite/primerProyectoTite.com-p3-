
//MOSTRAR RESEÑAS
const lista = document.getElementById("listaResena");

let filtro =  document.getElementById("filtro").value;
document.getElementById("filtro").addEventListener("change", () => {
    filtro = document.getElementById("filtro").value;
    mostrarResena();
});

let resultado =  [];

function mostrarResena(){
    lista.innerHTML = '';
    fetch("https://bryantite.bernat2023.tk/p3/api/api.php")
    .then(response => response.json())
    .then((data) => {
        resultado = data;
        if(filtro === 'ASC'){
            resultado.sort((a,b)=> a.valoracion - b.valoracion);
        }else if(filtro === 'DES'){
            resultado.sort((a,b)=> b.valoracion - a.valoracion);
        }
        resultado.forEach((post) =>{

            let est1 = '';
            let est2 = '';
            let est3 = '';
            let est4 = '';
            let est5 = '';

            if(post.valoracion == 5){
                est5 = 'checked';
            }else if(post.valoracion == 4){
                est4 = 'checked';
            }else if(post.valoracion == 3){
                est3 = 'checked';
            }else if(post.valoracion == 2){
                est2 = 'checked';
            }else if(post.valoracion == 1){
                est1 = 'checked';
            }


            const li = document.createElement('div')
            li.className = 'col-6';
            cod = `
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4" style="align-self: center;">
                            <img src="/p3/assets/images/img2/logo2.webp" class="img-fluid rounded-start" alt="Se observa el segundo logo del a web.">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">${post.email}</h5>
                            <hr style="margin: 0px;">
                            <p class="clasificacion" style="font-size: 2rem;margin-bottom:0px">
                                <input type="radio" value="5" ${est5}>
                                    <label>★</label>
                                <input type="radio" value="4" ${est4}>
                                    <label>★</label>
                                <input type="radio" value="3" ${est3}>
                                    <label>★</label>
                                <input type="radio" value="2" ${est2}>
                                    <label>★</label>
                                <input type="radio" value="1" ${est1}>
                                    <label>★</label>
                            </p>
                            <hr style="margin-bottom: 8px;margin-top: 0px;">
                            <p class="card-text">Reseña del pedido: ${post.cod_pedido}</p>
                            <p class="card-text" style="float: left;margin-right: 5px;">Comentario:</p>
                            <p>${post.comentario}</p>
                            <p class="card-text"><small class="text-muted">Se a creado: ${post.fecha}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                          
            `
            li.innerHTML = cod;
            lista.append(li)
        })
    })
}



//Enviar los datos a la BD
function valoracionUser(){
    let valoracion = document.querySelector('input[name="estrellas"]:checked').value;

    let comentario = document.getElementById("comentarioResena").value;

    let cod_pedido = document.getElementById("cod").value;


    fetch("https://bryantite.bernat2023.tk/p3/api/api.php", {
        method: 'POST',
        body: JSON.stringify({
            cod_pedido: cod_pedido,
            valo: valoracion,
            comen: comentario,
        }),
        headers: {
            'Content-type': 'application/jason; charset=UTF-8',
        },
    })
    .then(res => [console.log(cod_pedido)])
    .then(res => [console.log(valoracion)])
    .then(res => [console.log(comentario)])
    .then(res => notie.alert({ type: 'success', text: '¡Se ha insertado la reseña correctamente!', time: 2 }))
    
}
