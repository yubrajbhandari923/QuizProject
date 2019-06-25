function addquizquestion(){
    var  question=document.getElementById('question').value;
    var answer=document.getElementById('answer').value;
    var opt1=document.getElementById('opt1').value;
    var opt2=document.getElementById('opt2').value;
    var opt3=document.getElementById('opt3').value;
    var submit_check=document.getElementById('submit_question').value;
    var datahold='question='+question + '&answer='+answer + '&opt1='+opt1 + '&opt2='+opt2 + '&opt3='+opt3 + '&submit_check='+submit_check;
    $.ajax({
        type:'POST',
        url:'handle/addquiz.php',
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