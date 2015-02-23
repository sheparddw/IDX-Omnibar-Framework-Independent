//Enter Your IDX domain here. (example: http://demo.idxbroker.com or http://search.ptdemo.com)
var idxUrl = 'http://YOURDOMAINHERE.idxbroker.com'

//grab locationlist.json data (cities, counties, and zip codes)
	$.get("locationlist.json", function (data) {
		locationList = data;
	});
	$(document).ajaxComplete(function () {
		var cities = [];
		$(locationList.cities).each(function () {
			cities.push(this.name);
		});
		var counties = [];
		$(locationList.counties).each(function () {
			counties.push(this.name);
		});;
		var zipcodes = [];
		$(locationList.zipcodes).each(function () {
			zipcodes.push(this.name);
		});;
		var allLocations = cities.concat(counties).concat(zipcodes);
		var cleanLocations = [];
		$.each(allLocations, function (i, el) {
			if ($.inArray(el, cleanLocations) === -1) cleanLocations.push(el);
		});
		new Awesomplete(document.querySelector('#omnibar')).list = cleanLocations;
        
		document.querySelector('.omnibar').addEventListener('submit', function (event) {
			event.preventDefault();

			runSearch()

		}, false);
		runSearch = function () {
			var ID_search = idxUrl + '/idx/results/listings?csv_listingID=';
			var input = document.querySelector('#omnibar').value;
			var lth = input.length;
			var zero = input * 0;
			var firsttwo = input.substring(0, 2) * 0;
			var nexteight = input.substring(2, 8) * 0;
			var a = cities.indexOf(input, 0);
			var input = document.querySelector('#omnibar').value;
			var foundResult = false;
			var notLocation = function () {
					var hasSpaces = /\s/g.test(input)
					if (hasSpaces == false && parseInt(input) != NaN) {

						var gogoID = ID_search + input;

						window.location = gogoID;

					} else if (!input) {

						var all_search = idxUrl + '/idx/results/listings';
						var all_search_end = '&per=10&srt=prd';
						var go_all = all_search + '&pt=' + jQuery('#search-property-type').val() + '&bd=' + jQuery('#search-beds').val() + '&tb=' + jQuery('#search-baths').val() + '&lp=' + jQuery('#search-min-price').val() + '&hp=' + jQuery('#search-max-price').val() + all_search_end;

						window.location = go_all;

					} else {

						var res = input.split(" ");
						var add_search_num = idxUrl + '/idx/results/listings?pt=1&ccz=city&a_streetNumber=';
						var add_search_st = '&aw_streetName='
						var add_search = add_search_num + res[0] + add_search_st + res[1];

						window.location = add_search;
					}
				}
			var isCounty = function () {
				//if county
				for (var i = 0; i < locationList.counties.length; i++) {
					if (input.toLowerCase() == locationList.counties[i].name.toLowerCase()) {
						var go_county = idxUrl + '/idx/results/listings?ccz=county&county[]=' + locationList.counties[i].id;
						window.location = go_county;
						foundResult = true;

					} else if (foundResult == false && i == locationList.counties.length - 1) {
						isZipcode()
					}
				}
			}
			var isZipcode = function () {

				//if zipcode
				for (var i = 0; i < locationList.zipcodes.length; i++) {
					if (input == locationList.zipcodes[i].name) {
						var go_zipcode = idxUrl + '/idx/results/listings?ccz=zipcode&zipcode[]=' + locationList.zipcodes[i].id;
						window.location = go_zipcode;
						foundResult = true;
					} else if (foundResult == false && i == locationList.zipcodes.length - 1) {
						notLocation();
					}
				}
			}
				//if city
			for (var i = 0; i < locationList.cities.length; i++) {
				if (input.toLowerCase() == locationList.cities[i].name.toLowerCase()) {
					var go_city = idxUrl + '/idx/results/listings?ccz=city&city[]=' + locationList.cities[i].id;
					window.location = go_city;
					foundResult = true;

				} else if (foundResult == false && i == locationList.cities.length - 1) {
					isCounty()
				}
			}
			


		};
	});
