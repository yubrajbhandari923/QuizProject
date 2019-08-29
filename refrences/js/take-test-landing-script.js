document.addEventListener("DOMContentLoaded",function(){
	let dat = { 
		noOfSelected : 0
	}
    document.querySelector(".done-bttn").onclick =  function(){
		
	}
	document.querySelector("select[name=level]").addEventListener("click",function(){
		ab = this.value;
		if(ab=="easy"){
			document.getElementById("duration").innerText = "20s";
		}else if(ab=="medium"){
			  document.getElementById("duration").innerText = "15s";
			}else{
				document.getElementById("duration").innerText = "8s";
		}
	})

console.log("d")
	var zz = document.querySelectorAll(".btns-container > div");
	for(i=0;i<zz.length;i++){
	zz[i].onclick = function(){
		if(this.className.indexOf("selected-btn")==-1){
			this.className +="selected-btn ";
			dat.noOfSelected++;
		} else {
			this.className ="btns ";
			dat.noOfSelected--;
		}
		if (dat.noOfSelected > 0){
			document.querySelector(".done-bttn").style.display = "block";
		}else{
		document.querySelector(".done-bttn").style.display = "none";
		}
	}
}
document.querySelector(".done-bttn").onclick = function(){
	aa = document.querySelectorAll(".selected-btn")
		b = "";
		for(i=0;i<aa.length;i++){
			b += aa[i].innerText + ","
			if(i==3){
				b = b.slice(0, -1);
				b += " etc."
				break;}
		}
		document.getElementById("field_select").innerText = b;
		document.querySelector("input[name=field_select]").value = b;
		document.getElementById("duration").innerText = "20s";
		document.querySelector("#cover").style.display = "block";
}


	document.getElementById("cancel-butt").addEventListener("click",function(){
		document.querySelector("#cover").style.display = "none";
	})
})
function c(){
	document.getElementById("Done-select").click();
	return "True"
}
