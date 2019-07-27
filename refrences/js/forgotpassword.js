document.addEventListener('DOMContentLoaded',function(){
    var a = document.getElementsByClassName('error');
    for (i=0;i<a.length;i++){
    if(a[i].innerHTML.trim()!=""){
       a[i].style.display= "block";
    }
}
})