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


    ajax.open('GET', '../../php/backend/ajaxmerkdepan.php?keyword=' + keyword.value, true);
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


    ajax.open('GET', '../../php/backend/sortmerkdepan.php?metode=' + asc.value, true);
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


    ajax.open('GET', '../../php/backend/sortmerkdepan.php?metode=' + desc.value, true);
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


    ajax.open('GET', '../../php/backend/sortmerkdepan.php?metode=' + asc1.value, true);
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


    ajax.open('GET', '../../php/backend/sortmerkdepan.php?metode=' + desc1.value, true);
    ajax.send();

});