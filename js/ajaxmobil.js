var keyword = document.getElementById('keyword');
var tombolcari = document.getElementById('tombolcari');
var container = document.getElementById('container');


keyword.addEventListener('keyup', function(){
    var ajax = new XMLHttpRequest();
    
    ajax.onreadystatechange = function(){
        if( ajax.readyState == 4  && ajax.status == 200){
            container.innerHTML = ajax.responseText;
        }
    }


    ajax.open('GET', '../../php/backend/ajaxmobil.php?keyword=' + keyword.value, true);
    ajax.send();

});



var asc = document.getElementById('asc');
asc.addEventListener('click', function(){

 
    var ajax = new XMLHttpRequest();
    
    ajax.onreadystatechange = function(){
        if( ajax.readyState == 4  && ajax.status == 200){
            container.innerHTML = ajax.responseText;
        }
    }


    ajax.open('GET', '../../php/backend/sortmobil.php?metode=' + asc.value, true);
    ajax.send();

});


var desc = document.getElementById('desc');
desc.addEventListener('click', function(){

 
    var ajax = new XMLHttpRequest();
    
    ajax.onreadystatechange = function(){
        if( ajax.readyState == 4  && ajax.status == 200){
            container.innerHTML = ajax.responseText;
        }
    }


    ajax.open('GET', '../../php/backend/sortmobil.php?metode=' + desc.value, true);
    ajax.send();

});

var asc1 = document.getElementById('asc1');
asc1.addEventListener('click', function(){

 
    var ajax = new XMLHttpRequest();
    
    ajax.onreadystatechange = function(){
        if( ajax.readyState == 4  && ajax.status == 200){
            container.innerHTML = ajax.responseText;
        }
    }


    ajax.open('GET', '../../php/backend/sortmobil.php?metode=' + asc1.value, true);
    ajax.send();

});


var desc1 = document.getElementById('desc1');
desc1.addEventListener('click', function(){

 
    var ajax = new XMLHttpRequest();
    
    ajax.onreadystatechange = function(){
        if( ajax.readyState == 4  && ajax.status == 200){
            container.innerHTML = ajax.responseText;
        }
    }


    ajax.open('GET', '../../php/backend/sortmobil.php?metode=' + desc1.value, true);
    ajax.send();

});

var asc2 = document.getElementById('asc2');
asc2.addEventListener('click', function(){

 
    var ajax = new XMLHttpRequest();
    
    ajax.onreadystatechange = function(){
        if( ajax.readyState == 4  && ajax.status == 200){
            container.innerHTML = ajax.responseText;
        }
    }


    ajax.open('GET', '../../php/backend/sortmobil.php?metode=' + asc2.value, true);
    ajax.send();

});


var desc2 = document.getElementById('desc2');
desc2.addEventListener('click', function(){

 
    var ajax = new XMLHttpRequest();
    
    ajax.onreadystatechange = function(){
        if( ajax.readyState == 4  && ajax.status == 200){
            container.innerHTML = ajax.responseText;
        }
    }


    ajax.open('GET', '../../php/backend/sortmobil.php?metode=' + desc2.value, true);
    ajax.send();

});


var asc3 = document.getElementById('asc3');
asc3.addEventListener('click', function(){

 
    var ajax = new XMLHttpRequest();
    
    ajax.onreadystatechange = function(){
        if( ajax.readyState == 4  && ajax.status == 200){
            container.innerHTML = ajax.responseText;
        }
    }


    ajax.open('GET', '../../php/backend/sortmobil.php?metode=' + asc3.value, true);
    ajax.send();

});


var desc3 = document.getElementById('desc3');
desc3.addEventListener('click', function(){

 
    var ajax = new XMLHttpRequest();
    
    ajax.onreadystatechange = function(){
        if( ajax.readyState == 4  && ajax.status == 200){
            container.innerHTML = ajax.responseText;
        }
    }


    ajax.open('GET', '../../php/backend/sortmobil.php?metode=' + desc3.value, true);
    ajax.send();

});

var asc4 = document.getElementById('asc4');
asc4.addEventListener('click', function(){

 
    var ajax = new XMLHttpRequest();
    
    ajax.onreadystatechange = function(){
        if( ajax.readyState == 4  && ajax.status == 200){
            container.innerHTML = ajax.responseText;
        }
    }


    ajax.open('GET', '../../php/backend/sortmobil.php?metode=' + asc4.value, true);
    ajax.send();

});


var desc4 = document.getElementById('desc4');
desc4.addEventListener('click', function(){

 
    var ajax = new XMLHttpRequest();
    
    ajax.onreadystatechange = function(){
        if( ajax.readyState == 4  && ajax.status == 200){
            container.innerHTML = ajax.responseText;
        }
    }


    ajax.open('GET', '../../php/backend/sortmobil.php?metode=' + desc4.value, true);
    ajax.send();

});