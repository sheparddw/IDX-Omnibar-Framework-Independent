<!DOCTYPE html>
<html>

<head>
	<title>Omnibar</title>
</head>

<body>
	<h1>Classic Omnibar</h1>
	<!-- Copy the following and place it where you would like the Classic Omnibar widget on your page-->
	<form class="idx-omnibar-form idx-omnibar-original-form">
      <input class="idx-omnibar-input" type="text" placeholder="City, Postal Code, Address, or Listing ID" onblur="if (this.value == '') {this.value = 'City, Postal Code, Address, or Listing ID';}" onfocus="if (this.value == 'City, Postal Code, Address, or Listing ID') {this.value = '';}"><button type="submit" value="Search"><i class="fa fa-search"></i><span>Search</span></button>
      <div class="idx-omnibar-extra idx-omnibar-price-container"><label>Price Max</label><input class="idx-omnibar-price" type="number" min="0"></div><div class="idx-omnibar-extra idx-omnibar-bed-container"><label>Beds</label><input class="idx-omnibar-bed" type="number" min="0"></div><div class="idx-omnibar-extra idx-omnibar-bath-container"><label>Baths</label><input class="idx-omnibar-bath" type="number" min="0" step="0.01"></div>
    </form>
	<link rel="stylesheet" href="assets/css/awesomplete.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="assets/css/idx-omnibar.css" media="screen" title="no title" charset="utf-8">
	<script src="assets/js/awesomplete.min.js"></script>
	<script src="assets/js/idx-omnibar.js"></script>
	<script src="assets/js/locationlist.json" defer></script>
	<!-- End of Classic Omnibar -->
	<h1>Omnibar with Extra Fields</h1>
	<!-- Copy the following and place it where you would like the Omnibar Extra Fields widget on your page-->
	<form class="idx-omnibar-form idx-omnibar-extra-form">
      <input class="idx-omnibar-input" type="text" placeholder="City, Postal Code, Address, or Listing ID" onblur="if (this.value == '') {this.value = 'City, Postal Code, Address, or Listing ID';}" onfocus="if (this.value == 'City, Postal Code, Address, or Listing ID') {this.value = '';}">
      <div class="idx-omnibar-extra idx-omnibar-price-container"><label>Price Max</label><input class="idx-omnibar-price" type="number" min="0" title="No commas or dollar signs are allowed."></div><div class="idx-omnibar-extra idx-omnibar-bed-container"><label>Beds</label><input class="idx-omnibar-bed" type="number" min="0"></div><div class="idx-omnibar-extra idx-omnibar-bath-container"><label>Baths</label><input class="idx-omnibar-bath" type="number" min="0" step="0.01" title="Only numbers and decimals are allowed"></div>
      <button type="submit" value="Search"><i class="fa fa-search"></i><span>Search</span></button>
    </form>
	<link rel="stylesheet" href="assets/css/awesomplete.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="assets/css/idx-omnibar.css" media="screen" title="no title" charset="utf-8">
	<script src="assets/js/awesomplete.min.js"></script>
	<script src="assets/js/idx-omnibar.js"></script>
	<script src="assets/js/locationlist.json" defer></script>
	<!-- End of Omnibar with Extra Fields -->

</body>

</html>
