
function calculateArea(btn){
	
	var d1 = document.getElementById('Demand_1').value;
	var d2 = document.getElementById('Demand_2').value;
	var d3 = document.getElementById('Demand_3').value;
	var d4 = document.getElementById('Demand_4').value;
	var d5 = document.getElementById('Demand_5').value;
	var d6 = document.getElementById('Demand_6').value;
	var d7 = document.getElementById('Demand_7').value;
	var d8 = document.getElementById('Demand_8').value;
	var d9 = document.getElementById('Demand_9').value;
	var f1 = document.getElementById('Demand_1').value;
	var a1 = document.getElementById('Alpha_1').value;
	
	let f2 = f1+a1*(d2-f1);
	let s2 = d2-f2;
	let f3 = f2+a1*s2;
	let f4 = f3+a1*(d3-f3);
	let f5 = f4+a1*(d4-f4);
	let f6 = f5+a1*(d5-f5);
	let f7 = f6+a1*(d6-f6);
	let f8 = f7+a1*(d7-f7);
	let f9 = f8+a1*(d8-f8);
	let f10 = f9+a1*(d9-f9);

	
	
	document.getElementById('result1').innerHTML = "<center><label style='font-size:26px;'>F1</label> <br /><span class='text-primary' style='font-size:30px;'>"+f1+"</span></center>";
	document.getElementById('result2').innerHTML = "<center><label style='font-size:26px;'>F2</label> <br /><span class='text-primary' style='font-size:30px;'>"+f2+"</span></center>";
	document.getElementById('result3').innerHTML = "<center><label style='font-size:26px;'>F3</label> <br /><span class='text-primary' style='font-size:30px;'>"+f3+"</span></center>";
	document.getElementById('result4').innerHTML = "<center><label style='font-size:26px;'>F4</label> <br /><span class='text-primary' style='font-size:30px;'>"+f4+"</span></center>";
	document.getElementById('result5').innerHTML = "<center><label style='font-size:26px;'>F5</label> <br /><span class='text-primary' style='font-size:30px;'>"+f5+"</span></center>";
	document.getElementById('result6').innerHTML = "<center><label style='font-size:26px;'>F6</label> <br /><span class='text-primary' style='font-size:30px;'>"+f6+"</span></center>";
	document.getElementById('result7').innerHTML = "<center><label style='font-size:26px;'>F7</label> <br /><span class='text-primary' style='font-size:30px;'>"+f7+"</span></center>";
	document.getElementById('result8').innerHTML = "<center><label style='font-size:26px;'>F8</label> <br /><span class='text-primary' style='font-size:30px;'>"+f8+"</span></center>";
	document.getElementById('result9').innerHTML = "<center><label style='font-size:26px;'>F9</label> <br /><span class='text-primary' style='font-size:30px;'>"+f9+"</span></center>";
	document.getElementById('result10').innerHTML = "<center><label style='font-size:26px;'>F10</label> <br /><span class='text-primary' style='font-size:30px;'>"+f10+"</span></center>";

}
