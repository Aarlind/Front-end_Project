const timeout = setTimeout('ndrroParag()', 4000);
function ndrroParag(){
    var paragraph = document.getElementsByClassName("head-div");
    var paragraph1 = document.getElementsByClassName("head-div1");
    
    clearTimeout(timeout);
    if(!paragraph[0].classList.contains('hidden-content')){
        paragraph[0].classList.add('hidden-content');
        paragraph1[0].classList.remove('hidden-content');
        paragraph1[0].classList.add('show-content');
    }    
}
function shopRedirect(){
    window.location.href = 'shop.html';
}
function contactRedirect(){
    window.location.href = 'contact.html';
}

var product = document.getElementsByClassName('item-div');
var Req = document.getElementsByClassName('l-requirements');
var paragraph = document.getElementsByClassName('emri-h2');

function click1(){

    for(let i = 1;i<product.length;i++){
        product[i].classList.add('hidden-content');
        product[0].style.width = '1400px';
        product[0].style.width = '900px';
        Req[0].classList.remove('hidden-content');
        paragraph[0].classList.add('hidden-content');
    }   
 
}
function click2(){

    for(let i = 2;i<product.length;i++){
        product[i].classList.add('hidden-content');
        product[1].style.width = '1400px';
        product[1].style.width = '900px';
        Req[1].classList.remove('hidden-content');
        paragraph[1].classList.add('hidden-content');
    }
     
    for(let j = 0;j<product.length; j--){
        product[j].classList.add('hidden-content');
    }
}
 
function click3(){

    for(let i = 3;i<product.length;i++){
        product[i].classList.add('hidden-content');
        product[2].style.width = '1400px';
        product[2].style.width = '900px';
        Req[2].classList.remove('hidden-content');
        paragraph[2].classList.add('hidden-content');
    }   
    for(let j = 1;j<product.length; j--){
        product[j].classList.add('hidden-content');
    }
}

function click4(){

    for(let i = 4;i<product.length;i++){
        product[i].classList.add('hidden-content');
        product[3].style.width = '1400px';
        product[3].style.width = '900px';
        Req[3].classList.remove('hidden-content');
        paragraph[3].classList.add('hidden-content');
    }   
    for(let j = 2;j<product.length; j--){
        product[j].classList.add('hidden-content');
    }

}
function click5(){

    for(let i = 5;i<product.length;i++){
        product[i].classList.add('hidden-content');
        product[4].style.width = '1400px';
        product[4].style.width = '900px';
        Req[4].classList.remove('hidden-content');
        paragraph[4].classList.add('hidden-content');
    }   
    for(let j = 3;j<product.length; j--){
        product[j].classList.add('hidden-content');
    }

}
function click6(){

    for(let i = 6;i<product.length;i++){
        product[i].classList.add('hidden-content');
        product[5].style.width = '1400px';
        product[5].style.width = '900px';
        Req[5].classList.remove('hidden-content');
        paragraph[5].classList.add('hidden-content');
    }   
    for(let j = 4;j<product.length; j--){
        product[j].classList.add('hidden-content');
    }

}
function click7(){

    for(let i = 7;i<product.length;i++){
        product[i].classList.add('hidden-content');
        product[6].style.width = '1400px';
        product[6].style.width = '900px';
        Req[6].classList.remove('hidden-content');
        paragraph[6].classList.add('hidden-content');
    }   
    for(let j = 5;j<product.length; j--){
        product[j].classList.add('hidden-content');
    }

}
function click8(){ 
    for(let j = 6;j<product.length; j--){
        product[j].classList.add('hidden-content');
        
        product[7].style.width = '1400px';
        product[7].style.width = '900px';
        Req[7].classList.remove('hidden-content');
        paragraph[7].classList.add('hidden-content');
    }

}


   

 



