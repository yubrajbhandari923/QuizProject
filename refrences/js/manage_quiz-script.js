window.onload = function(){
    
    document.querySelector(".addQuizSetButt").onclick= function(){
        document.querySelector("#cover").style.display = "block";
        document.querySelector("#formAddQS").style.display = "block";
    }
    document.querySelector(".close-section").onclick = function(){
        document.querySelector("#cover").style.display = "none";
        this.parentElement.style.display = "none";
    }
    document.querySelector("#viewQSbutt").onclick= function(){
        
    }

    document.querySelector("#manageQSbutt").onclick= function(){
        document.querySelector("#manageQS-contain").style.display = "block";
        // Aba yaha chahi tyo Quiz Set ma vako question load garne AJAX.

        
    }
    document.querySelector(".removeThisQSbutt").onclick= function(){

    }
    document.querySelector(".addQbutt").onclick= function(){

    }
}