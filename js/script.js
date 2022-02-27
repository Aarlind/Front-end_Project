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
    window.location.href = 'shop.php';
}
function contactRedirect(){
    window.location.href = 'contact.php';
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






   

 



