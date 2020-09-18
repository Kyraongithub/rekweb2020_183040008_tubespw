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


    ajax.open('GET', '../../php/backend/ajaxuser.php?keyword=' + keyword.value, true);
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


    ajax.open('GET', '../../php/backend/sortuser.php?metode=' + asc.value, true);
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


    ajax.open('GET', '../../php/backend/sortuser.php?metode=' + desc.value, true);
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


    ajax.open('GET', '../../php/backend/sortuser.php?metode=' + asc2.value, true);
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


    ajax.open('GET', '../../php/backend/sortuser.php?metode=' + desc2.value, true);
    ajax.send();

});