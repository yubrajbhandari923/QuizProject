document.addEventListener("DOMContentLoaded", function(){
    let closeButt = document.querySelectorAll(".close-section")
    for(i=0;i < closeButt.length; i++){
        closeButt[i].addEventListener("click", function(){
            document.querySelector("#cover").style.display = "none";
            this.parentElement.style.display = "none";
        })
    }
    document.querySelector("#changeDPbutt").onclick= function(){
        document.querySelector("#changeDP").click();
    }
})
function confirmPsd(){
    document.querySelector("#cover").style.display = "block";
    document.querySelector("#formConfirm").style.display = "block";
}
function changeName(){
    document.querySelector("#cover").style.display = "block";
    document.querySelector("#formChangeName").style.display = "block";  
}