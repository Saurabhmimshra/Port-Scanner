<html>
<style type="text/css">
	body {
		background-color : black;
	}
</style>
<div align="center">
	<br><h1>PORT SCANNER</h1>
<form action="scanner.php" method="POST"><br>
	<b>Host name/IPv4 address : <input name="ip"><br><br></b></div>

<div class="scan_type">
	<input type="radio" name="seq" value="1">Sequential Scan<a href="#" onClick="Javascript:confirm('Scans for the range of port numbers entered.');"> ? </a><br></div>
		<br><input type="checkbox" name="s[]" value="1">TCP<br>
			Beginning port number : <input name="st1">Ending port number : <input name="end1"><br>
		<input type="checkbox" name="s[]" value="2">UDP<br>
			Beginning port number : <input name="st2"> Ending port number : <input name="end2"><br><br>
<div class="scan_type">	
	<input type="radio" name="top" value="2">Hierarchical Scan<br></div>
		<input type="checkbox" name="h[]" value="1">TCP<br>
			<select name="tcp-portlist" color=red>
			  <option value="">Select range of tcp port...</option>
			  <option value="10">Top 10 ports</option><option value="50">Top 50 ports</option><option value="100">Top 100 ports</option>
			  <option value="500">Top 500 ports</option><option value="1000">Top 1000 ports</option><option value="5000">Top 5000 ports</option>
			</select>OR Scan for top <input name="tcp_custom"> ports.<br>
			
		<input type="checkbox" name="h[]" value="2">UDP<br>
			<select name="udp-portlist">
			  <option value="">Select range of udp port...</option>

			  <option value="500">Top 500 ports</option><option value="1000">Top 1000 ports</option><option value="5000">Top 5000 ports</option>
			</select>Or Scan for top <input name="udp_custom"> ports.<br>
	<br><br><input type="submit" name="sub" value="Scan"><br><br>

</form>
<style type="text/css">
	div.scan_type{
		margin-top: 0;
		padding: 0;
		color: white;
		background: #2A0D45;
		text-align: left;
		text-shadow: -1px -1px #444;
		clear: both;
		border-radius: 7px;
		-moz-border-radius: 7px;
		-webkit-border-radius: 7px;
	}
	body {
	  		background-image: url("http://www.ehrenfeste.de/wp-content/uploads/2013/04/Dark-Spots-TeXture-Background.jpg");
	  		background-repeat: no-repeat;
	  		background-position: center top;
	  		color: white;
	}
	h1   {color:red;text-shadow: 5px 5px 5px #FF0000;
		  	font-style: bold;
		  	font-size: 40px}
	a{color: red;}
	
</style>