var from="";
var to="";
var field="";
var comb="";
var from1 = "";
var to1 = "";

function addDate()
{
	var temp = 0;
	document.report.from.style="";
	document.report.to.style="";
	document.report.datecategory.style="";
	var x = document.getElementById("from").value;
	var y = document.getElementById("to").value;
	var z = document.getElementById("datecategory").value;
	if(x === "" && y === ""){
		alert("No Value Chosen");
		document.report.from.style = "border:2px solid red";
		document.report.to.style = "border:2px solid red";
		document.getElementById("from").focus();
		temp = 1;
	}
	else if(z === ""){
		alert("Please Select a Field");
		document.report.datecategory.style = "border:2px solid red";
		document.getElementById("datecategory").focus();
		temp = 1;
	}
	else if(x === ""){
		x = "1951-01-01";
	}
	else if(y === ""){
		y = new Date().toISOString().slice(0, 10);
	}
	if(temp !== 1)
	{
		if(from==="")
		{
			from=x;
			from1 = x;
		}
		else
		{
			from= ","+x;
			from1 = x;
		}
		if(to==="")
		{
			to=y;
			to1 = y;
		}
		else
		{
			to= ","+y;
			to1 = y;
		}
		if(field==="")
			field=z;
		else
			field= ","+z;

		if(comb==="")
			comb=from+","+to+","+field;
		else
			comb+=from+to+field;
	}

	var dz= document.getElementById("datecategory");
	field = document.getElementsByClassName("datele")[dz.selectedIndex - 1].label;
	var both2 = "";
	document.getElementById("datecat").innerHTML = "<div class='cat'><b>From : "+from1+" - To : "+to1+", "+field+"</b></div>";
	if(comb !== "")
		document.cookie ="comb ="+ comb;
}
function deleteFaculty(faculty) {
	var x=confirm("Do you want to remove this faculty?");
	if(x){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState === 4 && this.status === 200) {
				location.reload();
				alert(this.responseText);
			}
		};
		xmlhttp.open("GET", "deleteFaculty.php?q="+faculty, true);
		xmlhttp.send();
	}
}