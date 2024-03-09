/* function to retrieve year */
function todayDate() {
	var d = new Date();
	var n = d.getFullYear() + ' ';
	return (document.getElementById('date').innerHTML = n);
}
