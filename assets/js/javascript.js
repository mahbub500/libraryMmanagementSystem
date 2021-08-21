// Division Section select
function divisionsList() {
	// get value from division lists
	var diviList = document.getElementById('divisions').value;

	// set barishal division districts
	if(diviList == 'Barishal'){		
		var disctList = '<option disabled selected>Select District</option><option value="Barguna">Barguna</option><option value="Barishal">Barishal</option><option value="Bhola">Bhola</option><option value="Jhalokati">Jhalokati</option><option value="Patuakhali">Patuakhali</option><option value="Pirojpur">Pirojpur</option>';
	}
	// set Chattogram division districts
	else if(diviList == 'Chattogram') {
		var disctList = '<option disabled selected>Select Division</option><option value="Bandarban">Bandarban</option><option value="Chandpur">Chandpur</option><option value="Chattogram">Chattogram</option><option value="Cumilla">Cumilla</option><option value="Cox\'s Bazar">Cox\'s Bazar</option><option value="Feni">Feni</option><option value="Khagrachhari">Khagrachhari</option><option value="Noakhali">Noakhali</option><option value="Rangamati">Rangamati</option>';	
	}
	// set Dhaka division districts
	else if(diviList == 'Dhaka') {
		var disctList = '<option disabled selected>Select Division</option><option value="Dhaka">Dhaka</option><option value="Jessore ">Jessore </option><option value="Gazipur">Gazipur</option><option value="Gopalganj">Gopalganj</option><option value="Kishoreganj">Kishoreganj</option><option value="Madaripur">Madaripur</option><option value="Kushtia">Kushtia</option><option value="Munshiganj">Munshiganj</option><option value="Satkhira">Satkhira</option><option value="Narsingdi">Narsingdi</option><option value="Rajbari">Rajbari</option><option value="Shariatpur">Shariatpur</option><option value="Tangail">Tangail</option>';
	}
	// set Khulna division districts
	else if(diviList == 'Khulna') {
		var disctList = '<option disabled selected>Select Division</option><option value="Khulna">Khulna</option><option value="Faridpur">Faridpur</option><option value="Narail">Narail</option><option value="Bagerhat">Bagerhat</option><option value="Magura">Magura</option><option value="Jhenaidah">Jhenaidah</option><option value="Chuadanga">Chuadanga</option><option value="Kushtia">Kushtia</option><option value="Narayanganj">Narayanganj</option><option value="Meherpur">Meherpur</option>';
	}
	// set Mymensingh division districts
	else if(diviList == 'Mymensingh') {
		var disctList = '<option disabled selected>Select Division</option><option value="Mymensingh">Mymensingh</option><option value="Jamalpur">Jamalpur</option><option value="Sherpur">Sherpur</option><option value="Netrokona">Netrokona</option>';
	}
	// set Rangpur division districts
	else if(diviList == 'Rangpur') {
		var disctList = '<option disabled selected>Select Division</option><option value="Rangpur">Rangpur</option><option value="Natore">Natore</option><option value="Pabna">Pabna</option><option value="Bogura">Bogura</option><option value="Chapainawabganj">Chapainawabganj</option><option value="Joypurhat">Joypurhat</option><option value="Naogaon">Naogaon</option><option value="Sirajganj">Sirajganj</option>';
	}
	// set Khulna division districts
	else if(diviList == 'Khulna') {
		var disctList = '<option disabled selected>Select Division</option><option value="Khulna">Khulna</option><option value="Gaibandha">Gaibandha</option><option value="Nilphamari">Nilphamari</option><option value="Kurigram">Kurigram</option><option value="Lalmonirhat">Lalmonirhat</option><option value="Dinajpur">Dinajpur</option><option value="Thakurgaon">Thakurgaon</option><option value="Panchagarh">Panchagarh</option>';
	}
	// set Sylhet division districts
	else if(diviList == 'Sylhet') {
		var disctList = '<option disabled selected>Select Division</option><option value="Sylhet">Sylhet</option><option value="Maulvibazar">Maulvibazar</option><option value="Habiganj">Habiganj</option><option value="Sunamganj">Sunamganj</option>';
	}

	//  set/send districts name to District lists from division
	document.getElementById("distr").innerHTML= disctList;
}

// Thana Section select
function thanaList(){
	var DisList = document.getElementById('distr').value;
	// Set Police Station list
	if(DisList == 'Barguna') {
		var thanaList = '<option disabled selected>Select District</option><option value="Barguna">Barguna</option><option value="Barishal">Barishal</option><option value="Bhola">Bhola</option><option value="Jhalokati">Jhalokati</option><option value="Patuakhali">Patuakhali</option><option value="Pirojpur">Pirojpur</option>';
	}


	if(DisList == 'Dhaka') {
		var thanaList = '<option disabled selected>Select District</option><option value="Wari">Wari</option><option value="Vatara">Vatara</option><option value="Bshantek">Bshantek</option><option value="Uttar Khan">Uttar Khan</option><option value="Uttara West">Uttara West</option><option value="Uttara East">Uttara East</option><option value="Turag">Turag</option><option value="Tejgoan">Tejgoan</option><option value="Sher e Bangla Nagar">Sher e Bangla Nagar</option><option value="Shyampur">Shyampur</option><option value="Sutrapur">Sutrapur</option><option value="Shahjanpur">Shahjanpur</option><option value="Shahbag">Shahbag</option><option value="Shan Ali">Shan Ali</option><option value="Sobujbag">Sobujbag</option><option value="Rupnagar">Rupnagar</option><option value="Rampura">Rampura</option><option value="Ramna">Ramna</option><option value="Platan">Platan</option><option value="Pallbi">Pallbi</option><option value="New Market ">New Market </option><option value="Mugda">Mugda</option><option value="Motijheel">Motijheel</option><option value="Mohammadpur">Mohammadpur</option><option value="Mirpur">Mirpur</option><option value="Lalbag">Lalbag</option><option value="Kotwali">Kotwali</option><option value="kodomtoli">kodomtoli</option><option value="Khilkhet">Khilkhet</option><option value="khigoan">khigoan</option><option value="Kamrangirchar">Kamrangirchar</option><option value="Kalabazan">Kalabazan</option><option value="Kafrul">Kafrul</option><option value="Jattrabari">Jattrabari</option><option value="Hazaribaz">Hazaribaz</option><option value="Gulshan">Gulshan</option><option value="Gandaria">Gandaria</option><option value="Dhanmondi">Dhanmondi</option><option value="Demra">Demra</option><option value="Darus-Salam">Darus-Salam</option><option value="Adabor">Adabor</option><option value="Badda">Badda</option><option value="Banani">Banani</option><option value="Bangshal">Bangshal</option><option value="Bimanbandar">Bimanbandar</option><option value="Cantonment">Cantonment</option><option value="Chalkbazar">Chalkbazar</option><option value="Dakshin Khan">Dakshin Khan</option>';
	}
	document.getElementById("polic_sta").innerHTML= thanaList;
}