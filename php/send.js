document.querySelector("#botao_carrinho").addEventListener("click",()=>{

    var x = document.getElementsByClassName("quant");
    var armazenamento = new Array;

     for(var i = 0; i<x.length; i++){
        if(x[i].value == ""){
            armazenamento.push(0);
        }else{
            armazenamento.push(x[i].value);
        }
     }

     window.location.href = "Carrinho.php?pedido=" + armazenamento;
    
})
