function addquizset(){
    var setname=document.getElementById('quizSetName').value;
    var fieldname=document.getElementById('quizFieldName').value;
    var submit_set=document.getElementById('submit-set').value;
    var dataString='quizSetName='+setname + '&quizFieldName='+fieldname + '&submit-set='+submit_set;
    $.ajax({
        type:'POST',
        url:'handle/addQuizSet.php',
        data:dataString,
        cache:false,
        success:function(html){
            $('.errorMsgForm').html(html);
        }
    })
    return false;
}