document.addEventListener("DOMContentLoaded",function(){
    let a = document.querySelectorAll("input[type=radio]") 
    console.log(a);
})
function flipIt(){
    document.querySelector("#flip-scene").className = "isflip";
}
function unFlipIt(){
    document.querySelector("#flip-scene").className = "";
}