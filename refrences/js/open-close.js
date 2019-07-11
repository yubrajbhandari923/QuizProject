document.addEventListener("DOMContentLoaded",function(){
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

    document.getElementById("search-icon").onclick = function(){
        document.getElementById("search-form").style.animation = "animate 2s forwards 1";
        document.querySelector(".page-links ul").style.opacity = "0";
    }
    document.getElementById("search-ham").onclick = function(){
        document.getElementById("search-form").style.animation = "animate 2s backwards 1";
        document.querySelector(".page-links ul").style.opacity = "1";

    }

})