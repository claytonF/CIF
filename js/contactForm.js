function clearText(thefield)
{
if (thefield.value=="required" || thefield.value=="Invalid email address")
	thefield.value = "";
	thefield.style.color = "#000";
}
function inputBlur(thefield)
{
if (thefield.value=="") {
	thefield.value = "required";
	thefield.style.color = "#000"; }
else {
	thefield.style.color = "#000";
}
}


