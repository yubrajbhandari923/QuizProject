function addprofilepic(){
    var  changeDP=document.getElementById('changeDP').value;
    var uploadDBButt=document.getElementById('uploadDPButt').value;
    var datahold='filedata='+changeDP + '&upload_submit='+uploadDBButt;
    $.ajax({
        type:'POST',
        url:'handle/addprofilepic.php',
        data:datahold,
        cache:false,
        success:function(html){
         console.log(html);
        }
    })
    return false;
}