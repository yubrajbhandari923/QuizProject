function getname(str){
    if (window.XMLHttpRequest) {        
        xmlhttp=new XMLHttpRequest();
      } else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function(){
          if(this.readyState==4 && this.status==200){
            if(str.length==0){
              document.getElementById('result-search').innerHTML='';
            }else{
              document.getElementById('result-search').innerHTML=xmlhttp.responseText;
            }
          }
      }
    xmlhttp.open("GET","searchopp.php?text="+str);
    xmlhttp.send();
}