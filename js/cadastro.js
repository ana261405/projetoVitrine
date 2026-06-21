// primeiro para o formulario cadastrar

function validarCategoria(){
    const categoria = document.getElementById("categoria");
    const campoBebida = document.getElementById("campoBebida");
    //se a categoria for de bebida ele adiciona os campos de bebida
    if(categoria.value == 2){
        document.getElementById("campoBebida").style.display = "block";
    }else{
        document.getElementById("campoBebida").style.display = "none";
    }

}

function validarForm(){
    const nome = document.getElementById("nome");
    const preco = document.getElementById("preco");
    const descricao = document.getElementById("descricao");
    const imagem = document.getElementById("imagem");
}
