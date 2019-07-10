document.addEventListener('DOMContentLoaded',function(){
    document.querySelector("#goto-reg").onclick = function(){
        document.querySelector(".forms").className = " forms forms-reg"
        return false
    }
    
    document.querySelector("#goto-log").onclick = function(){
        document.querySelector(".forms").className = " forms forms-log"
        return false
    }
    var a = document.querySelectorAll('.error');
    for (i=1;i<=a.length;i++){
    if(document.querySelector('.error')[i].innerHTML!==''){
       this.style.display= "block";
    }
}
}