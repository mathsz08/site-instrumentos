var carrinho = 0.0;
var gui = 0;
var bai = 0;
var pia = 0;
var bat = 0;
var sax = 0;
var vio = 0;


function add_guitarra(){
    carrinho = carrinho + 1119.90;
    document.getElementById("resultado").innerHTML = carrinho.toFixed(2);
    gui = gui +1;
    
}
function add_baixo(){
    carrinho = carrinho + 926.40;
    document.getElementById("resultado").innerHTML = carrinho.toFixed(2);
    bai = bai + 1;
   
}
function add_piano(){
    carrinho = carrinho + 72581.76;
    document.getElementById("resultado").innerHTML = carrinho.toFixed(2);
    pia = pia +1 
    
}
function add_bateria(){
    carrinho = carrinho + 12990.00;
    document.getElementById("resultado").innerHTML = carrinho.toFixed(2);
    bat = bat + 1;
    
}
function add_saxofone(){
    carrinho = carrinho +1859.99;
    document.getElementById("resultado").innerHTML = carrinho.toFixed(2);
    sax = sax+1;
    
}
function add_violao(){
    carrinho = carrinho +1797.99;
    document.getElementById("resultado").innerHTML = carrinho.toFixed(2);
    vio = vio + 1;
    
}

