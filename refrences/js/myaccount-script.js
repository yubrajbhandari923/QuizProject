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
    document.querySelector("#changeDP").onchange = function (){
        document.querySelector("#cover").style.display = "block";
        document.querySelector("#bigDP").style.display = "block";
        displaypic();
    }

    document.querySelector(".dp img").onclick = function() {
        document.querySelector("#cover").style.display = "block";
        document.querySelector("#bigDP img").setAttribute("src", document.querySelector(".dp img").getAttribute("src"));
        document.querySelector("#bigDP").style.display = "block";
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
// ****************************
function displaypic(){
    var file_data = $('#changeDP').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    $.ajax({
        url: 'handle/temp-profile',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(html){
            if(html){//Success
                document.querySelector("#bigDP img").setAttribute("src",html);
            }
        }
     })
     return false;
    }
    //fiek no of questions level