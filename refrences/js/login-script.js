window.onload =function(){
    document.querySelector("#goto-reg").onclick = function(){
        document.querySelector(".forms").className = " forms forms-reg"
        return false
    }
    
    document.querySelector("#goto-log").onclick = function(){
        document.querySelector(".forms").className = " forms forms-log"
        return false
    }
    
    }