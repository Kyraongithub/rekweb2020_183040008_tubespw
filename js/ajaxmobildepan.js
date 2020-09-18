var keyword = document.getElementById('keyword');
var tombolcari = document.getElementById('tombolcari');
var container = document.getElementById('container');
var merk = document.getElementById('merk');

keyword.addEventListener('keyup', function(){
    var ajax = new XMLHttpRequest();
    
    ajax.onreadystatechange = function(){
        if( ajax.readyState == 4  && ajax.status == 200){
            container.innerHTML = ajax.responseText;
        }
    }


    ajax.open('GET', '../../php/backend/ajaxmobildepan.php?keyword=' + keyword.value + '&merk=' + merk.value, true);
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


    ajax.open('GET', '../../php/backend/sortmobildepan.php?metode=' + asc.value + '&merk=' + merk.value, true);
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


    ajax.open('GET', '../../php/backend/sortmobildepan.php?metode=' + desc.value + '&merk=' + merk.value, true);
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


    ajax.open('GET', '../../php/backend/sortmobildepan.php?metode=' + asc1.value + '&merk=' + merk.value, true);
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


    ajax.open('GET', '../../php/backend/sortmobildepan.php?metode=' + desc1.value + '&merk=' + merk.value, true);
    ajax.send();

});
