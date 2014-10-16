window.onload=initall;

function initall(){
	document.getElementById("save").onclick=changederict;
}

function changederict(){
	alert("保存成功！");
	window.location=this;
	return false;
}