document.querySelector("#botao_click").addEventListener("click",()=>{
    var verificar = true;
   var desc= 0;

if(document.getElementById("nomeid").value==""){
    alert("O campo de nome está vazio, por favor preencha.");
    verificar = false;
}
if(document.getElementById("emailid").value==""){
    if(verificar){
    alert("o campo de e-mail está vazio, preencha por favor.");
    verificar= false;
 }
}

if(document.getElementById("cupomid").value !=""){

    if(document.getElementById("cupomid").value == "HTH") {
        document.getElementById("cupomid").value =100;
    }
     else if (document.getElementById("cupomid").value=="VINTÃO")
     {
        document.getElementById("cupomid").value =20;
     }
     else if (document.getElementById("cupomid").value == "CINQUENTÃO"){
        document.getElementById("cupomid").value = 50;
     }
    }


if(document.getElementById("cidadeid").value==""){
    if(verificar){
        alert("o campo de endereço se encontra vazio, preencha por favor");
        verificar = false;
    }
}
if(document.getElementById("cpfid").value=="" || document.getElementById("cpfid").value<0 || document.getElementById("cpfid").value.toString().length != 11){
    if(verificar){
        alert("o campo de cpf está inválido, por favor, preencha");
        verificar=false;
    }
}
      

if (!document.getElementById("confi").checked){
    if(verificar){
        alert("Você não confirmou a caixa 'Li os termos de Requisto da Compra', por favor, marque-a.");
        verificar=false;
    }
}
if(verificar){
    Confirmado()
}
}
)
function Confirmado(){
    var novaurl = window.location.href;
    var aux = novaurl.indexOf('=');
    novaurl= novaurl.substring(aux+1,novaurl.length);

    window.location.href = "impressao.php?pedido="+novaurl
    +"&nome="+document.getElementById("nomeid").value
    +"&cidade="+document.getElementById("cidadeid").value
    +"&desconto="+document.getElementById("cupomid").value;

    
}



