window.onload = function(){
    document.querySelector("#cover").style.display = "none";
    
    document.querySelector(".addQuizSetButt").onclick= function(){
        toggleCover()
        document.querySelector("#formAddQS").style.display = "block";
    }
    document.querySelector(".close-section").onclick = function(){
        toggleCover()
        this.parentElement.style.display = "none";
    }
    document.querySelector("#viewQSbutt").onclick= function(){
        
    }
    document.querySelector("#manageQSbutt").onclick= function(){

    }
    document.querySelector(".removeThisQSbutt").onclick= function(){

    }
    document.querySelector(".addQbutt").onclick= function(){

    }
}
function toggleCover(){
    let a = document.querySelector("#cover").style.display;
    if(a=="none"){
        document.querySelector("#cover").style.display = "block";
    }else{
        document.querySelector("#cover").style.display = "none";
    }
}