window.onload = function(){
    let closeButt = document.querySelectorAll(".close-section")
    for(i=0;i < closeButt.length; i++){
        closeButt[i].addEventListener("click", function(){
        document.querySelector("#cover").style.display = "none";
        this.parentElement.style.display = "none";
        })
    }

    document.querySelector(".addQuizSetButt").onclick= function(){
        document.querySelector("#cover").style.display = "block";
        document.querySelector("#formAddQS").style.display = "block";
        
    }
    document.querySelectorAll(".close-section").onclick = function(){
        
    }
    
    document.querySelector("#manageQSbutt").onclick= function(){
        document.querySelector("#manageQS-contain").style.display = "block";
        // Aba yaha chahi tyo Quiz Set ma vako question ani quiz set Name load garne AJAX.
        
        
    }
    document.querySelector(".removeThisQSbutt").onclick= function(){
        
    }
    document.querySelector(".addQbutt").onclick= function(){
        document.querySelector("#cover").style.display = "block";
        document.querySelector("#formAddQ").style.display= "block"
    }
}