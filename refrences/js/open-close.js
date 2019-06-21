window.onload = function(){

    data ={
        UIB : true
    }
    document.querySelector("#user-info-butt").onclick = function(){
    if (data.UIB){
        document.querySelector("#user-info-butt > div").style.display = "block";
        data.UIB= false ;
    } else {
        document.querySelector("#user-info-butt > div").style.display = "none";
        data.UIB= true ;
    }
    }
}