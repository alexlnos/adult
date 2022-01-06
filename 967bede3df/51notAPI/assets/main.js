

$(function() {
	var d1 = new Date(new Date().getTime() + 0 * 24 * 60 * 60 * 1000);
	var d2 = new Date(new Date().getTime() - 7 * 24 * 60 * 60 * 1000);
	var d4 = new Date(new Date().getTime() - 4 * 24 * 60 * 60 * 1000);
	
	var day1 = d1.getDate();
	var day2 = d2.getDate();
	var day4 = d4.getDate();
	
	var month = d2.getMonth() + 2;
	var month2 = d2.getMonth() + 1;
	var year2 = d2.getFullYear();
	
	$('#date1').text(day1 + "." + month2 + "." + year2);
	$('#date2').text(day2 + "." + month2 + "." + year2);
});