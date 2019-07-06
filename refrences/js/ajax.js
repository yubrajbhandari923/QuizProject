function getname(str){
    if (window.XMLHttpRequest) {        
        xmlhttp=new XMLHttpRequest();
      } else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function(){
          if(this.readyState==4 && this.status==200){
            if(str.length==0){
              document.getElementsByClassName('search-result')[0].innerHTML='';
            }else{
              document.getElementsByClassName('search-result')[0].innerHTML=xmlhttp.responseText;
            }
          }
      }
    xmlhttp.open("GET","handle/searchopp.php?text="+str);
    xmlhttp.send();

    scrollToSmoothly(300, 10);
}


function scrollToSmoothly(pos, time) {
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