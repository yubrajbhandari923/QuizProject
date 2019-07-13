window.addEventListener('load',questions);
function questions(){
    localdata=JSON.parse(localStorage.getItem('field'));
    var  field=localdata.field
    var  no=localdata.no;
    var  level=localdata.level;
    var datahold='field='+field + '&no='+no;
    $.ajax({
        type:'POST',
        url:'handle/getquestions',
        data:datahold,
        cache:false,
        success:function(html){
            if(html){
                console.log(html);
            }else{
                console.log('error');
            }
        }
    })
    return false;
}