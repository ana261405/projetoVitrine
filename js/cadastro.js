// primeiro para o formulario cadastrar

const categoria = document.getElementById("categoria");
const campoBebida = document.getElementById("campoBebida");
//se a categoria for de bebida ele adiciona os campos de bebida

//essa função significa se houver uma mudança no campo select ele verifica o valor da categoria
categoria.addEventListener("change", function () {
    if(categoria.value == 2){
        document.getElementById("campoBebida").style.display = "block";
    }else{
        document.getElementById("campoBebida").style.display = "none";
    }
});
