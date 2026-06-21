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
    console.log("Entrou na função");
    const categoria = document.getElementById("categoria");
    const nome = document.getElementById("nome");
    const preco = document.getElementById("preco");
    const descricao = document.getElementById("descricao");
    const imagem = document.getElementById("imagem");
    let volume, recipiente; 

    if(categoria.value == 2){
        volume = document.getElementById("volume");
        recipiente = document.getElementById("recipiente");
    }

    if(
        categoria.value == "" ||
        nome.value == "" || 
        preco.value == "" || 
        descricao.value == "" || 
        imagem.value ==0 )
    {
         alert("Todos os campos devem ser preenchidos!!!");
        
    }else{
        alert("Cadastro enviado!"); 
     
    }
}
