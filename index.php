<!DOCTYPE html>
<html>

<head>
	<title>Omnibar</title>
	<link rel="stylesheet" href="awesomplete.css">
	<link rel="stylesheet" href="style.css">
    <script src="awesomplete.min.js"></script>
	<script src="omnibar.js"></script>
</head>

<body>
	<h1>Search for Properties</h1>
	<form class="omnibar">
		<input id="omnibar" class="" type="text" placeholder="City, County, Zipcode, Address or MLS Number" onblur="if (this.value == '') {this.value = 'City, County, Zipcode, Address or MLS Number';}" onfocus="if (this.value == 'City, County, Zipcode, Address or MLS Number') {this.value = '';}">
		<input type="submit" value="Search">
	</form>
</body>

</html>
