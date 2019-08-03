document.addEventListener("DOMContentLoaded",function(){
    document.querySelector("#Done-select").onclick =  function(){
		aa = document.querySelectorAll(".btn-clicked .btn-value")
		b = "";
		for(i=0;i<aa.length;i++){
			b += aa[i].innerText + " "
		}
		document.getElementById("field_select").innerText = b;
		document.querySelector("input[name=field_select]").value = b;
		document.getElementById("duration").innerText = "20s";
		document.querySelector("#cover").style.display = "block";
	}
	document.querySelector("select[name=level]").addEventListener("click",function(){
		ab = this.value;
		if(ab=="easy"){
			document.getElementById("duration").innerText = "20s";
		}else if(a=="medium"){
			  document.getElementById("duration").innerText = "15s";
			}else{
				document.getElementById("duration").innerText = "8s";
		}
	})
	a = document.querySelectorAll(".btn")
	for(i=0;i<a.length;i++){
		a[i].addEventListener("click",function(){
			if(this.className.indexOf("btn-clicked")==-1){
				this.className += " btn-clicked";
			}else{
				this.className ="btn";
			}
		})
	}
	document.getElementById("cancel-butt").addEventListener("click",function(){
		document.querySelector("#cover").style.display = "none";
	})
})
function c(){
	document.getElementById("Done-select").click();
	return "True"
}
