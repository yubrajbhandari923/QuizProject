function namechange(){
    var  name=document.getElementById('fullname').value;
    var password=document.getElementById('password').value;
    var submit_check=document.getElementById('submit_namechange').value;
    var datahold='name='+name + '&password='+password+'&submit_check='+submit_check;
    $.ajax({
        type:'POST',
        url:'handle/change_name.php',
        data:datahold,
        cache:false,
        success:function(html){
            if(html=='Success'){
                location.reload();
            }else{
            $('.errorMsgForm').html(html);
            }
        }
    })
    return false;
}