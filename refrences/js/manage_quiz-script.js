window.onload = function(){
    let closeButt = document.querySelectorAll(".close-section")
    for(i=0;i < closeButt.length; i++){
        closeButt[i].addEventListener("click", function(){
        document.querySelector("#cover").style.display = "none";
        this.parentElement.style.display = "none";
        })
    }

    document.querySelector(".addQuizSetButt").onclick= function(){
        window.scrollTo(0,0)
        document.querySelector("#cover").style.display = "block";
        document.querySelector("#formAddQS").style.display = "block";
        
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




function scrollToS(pos, time) {
    /*Time is only applicable for scrolling upwards*/
    /*Code written by hev1*/
    /*pos is the y-position to scroll to (in pixels)*/
    if (isNaN(pos)) {
      throw "Position must be a number";
    }
    if (pos < 0) {
      throw "Position can not be negative";
    }
    var currentPos = window.scrollY || window.screenTop;
    if (currentPos < pos) {
      var t = 10;
      for (let i = currentPos; i <= pos; i += 10) {
        t += 10;
        setTimeout(function() {
          window.scrollTo(0, i);
        }, t / 2);
      }
    } else {
      time = time || 2;
      var i = currentPos;
      var x;
      x = setInterval(function() {
        window.scrollTo(0, i);
        i -= 10;
        if (i <= pos) {
          clearInterval(x);
        }
      }, time);
    }
  }