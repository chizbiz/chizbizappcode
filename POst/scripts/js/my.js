function show_panel()
{
	$("#my_modal11").toggle();
}
function hide_panel()
{
	$("#my_modal11").hide();

}


function alert_msg()
{
	alert("you must login...before purchase the product.");
}
function hide()
{
	$("#show-hide").hide();
}
function show_form()
{
		$("#signup_form").hide();
	$("#show-hide").toggle();	
}
function hide_signup()
{
	$("#signup_form").hide();
}

function show_signup()
{
	$("#show-hide").hide();
	$("#signup_form").toggle();
}

function show()
{
	$(".modal1").show();

	var fname=document.getElementById("fname").value;
	var lname=document.getElementById("lname").value;
	var gender=document.getElementById("gender").value;
	var check=document.getElementById("check").value;
	var email=document.getElementById("email").value;
	var xmlstring="";

	xmlstring+="<studentInfo>"+"<br>";
		xmlstring+="<firstName>";
		xmlstring+=fname;
		xmlstring+="</firstName>"+"<br>";
		xmlstring+="<lastName>";
		xmlstring+=lname;
		xmlstring+="</lastName>"+"<br>";
		xmlstring+="<gender>";
		xmlstring+=gender;
		xmlstring+="</gender>"+"<br>";
		xmlstring+="<sports>";
		xmlstring+=check;
		xmlstring+="</sports>"+"<br>"
		xmlstring+="<email>";
		xmlstring+=email;
		xmlstring+="</email>"+"<br>";
	xmlstring+="</studentInfo>";
		document.getElementById("try").innerHTML=xmlstring;
	alert(xmlstring);
}