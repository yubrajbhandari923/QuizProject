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
        var a = document.querySelectorAll(".page-links li")
        for(i=0;i<a.length;i++){
            a[i].classList.add("hide");
        }
        document.querySelector(".page-links > ul ").lastChild.style.display= "block";
    }

})