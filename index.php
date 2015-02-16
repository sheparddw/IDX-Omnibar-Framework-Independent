<!DOCTYPE html>
<html>

<head>
	<title>Omnibar</title>
	<link rel="stylesheet" href="jquery-ui.css?ver=4.1">
	<link rel="stylesheet" href="style.css">
	<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script type='text/javascript' src='jquery/ui/core.min.js?ver=1.11.2'></script>
	<script type='text/javascript' src='jquery/ui/widget.min.js?ver=1.11.2'></script>
	<script type='text/javascript' src='jquery/ui/position.min.js?ver=1.11.2'></script>
	<script type='text/javascript' src='jquery/ui/menu.min.js?ver=1.11.2'></script>
	<script type='text/javascript' src='jquery/ui/autocomplete.min.js?ver=1.11.2'></script>
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
