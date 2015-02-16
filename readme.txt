Note that this project is not supported by IDX Broker in any way.

This is an Omnibar for use with IDX Broker.

You will need:

1. An Active Account with IDX Broker
2. The API Key from this account
3. The domain for IDX pages on this account (example: ptdemo.idxbroker.com or if you have a subdomain set up, search.ptdemo.com)

Open getlocations.php and enter your API key in the appropriate place.
Open omnibar.js and enter the domain for IDX pages where instructed.
You will have to run getlocations.php first before you will have cities, counties, or zipcodes for your omnibar.
You can setup a cronjob so this script is run once a day if you wish. Avoid running it too often so your API call limit is not reached (see this article and the included documents for more information: http://kb.idxbroker.com/Knowledgebase/Article/View/25/13/api-key-control).
You can test the omnibar with the index.php file and potentially copy the source code of all that is necessary to integrate this into your website.
The script, omnibar.js, grabs the locations from the locationlist file and compares the value entered in the omnibar to each of them. If no result is found, it searches for it as an MLS number unless spaces are found in the value. Then it is run as an address search.
Feel free to improve upon this code as this was merely a proof of concept and not intended to be optimized and easy to integrate into a website. This could easily be made into a WordPress plugin.
