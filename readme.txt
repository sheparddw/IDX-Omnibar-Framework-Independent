#IDX Omnibar Search Widget - Platform Independent Version
Do NOT contact IDX Broker for support on this widget as this is a 3rd party widget.

You will need:
 * An active IDX Broker account
 * The account's API key
 * The account's results page URL

To get started:
 * Download the files and enter your IDX Broker account's API key at the top of getlocations.php
 * Enter your domain in the instructed place of the assets/js/idx-omnibar.js file
 * Copy the desired widget of the two on index.php - you may need to update the URLs of the referenced stylesheets and scripts depending upon where you place them within your website's directory
 * Visit getloations.php in your browser to manually update the locationlist.json file


 How this works:
 getlocations.php pulls your cities, counties, and zipcodes from the API and stores them in the assets/js/locationlist.json file. idx-omnibar.js uses this locationlist.json file to autocomplete cities, counties, and zipcodes and run a search based upon whether the input matches a city, county, or zipcode in the list. If no match is found, it looks for spaces. If there are spaces in the input, it runs a search based upon address number and street name. If no spaces are found, it searches for an MLS Number/Listing ID. You can manually update the getlocations.php every few days or weeks or set up a cron job to automatically run this script every few days or other set time period.
