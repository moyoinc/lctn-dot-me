/**
 * Generate weather entries based on location
 * 
 * The JSON request is build up like this:
 * 
 * data -> current_condition [weather_data]
 * 		-> request [request data]
 * 		-> weather [day 1 weather data]
 * 		-> weather [day n weather data]
 *
 * SAMPLE: 
 * 
 * { "data": {
 * "request": [ {"query": "Lat 48.83 and Lon 2.39", "type": "LatLon" } ],
 * "weather": [
 * {"date": "2010-11-03", "precipMM": "0.4", "tempMaxC": "16", "tempMaxF": "60", "tempMinC": "10", "tempMinF": "51", "weatherCode": "116", "weatherDesc": [ {"value": "Partly Cloudy" } ], "weatherIconUrl": [ {"value": "http:\/\/www.worldweatheronline.com\/images\/wsymbols01_png_64\/wsymbol_0002_sunny_intervals.png" } ], "winddir16Point": "SW", "winddirDegree": "231", "winddirection": "SW", "windspeedKmph": "18", "windspeedMiles": "11" },
 * {"date": "2010-11-04", "precipMM": "0.6", "tempMaxC": "17", "tempMaxF": "63", "tempMinC": "13", "tempMinF": "55", "weatherCode": "119", "weatherDesc": [ {"value": "Cloudy" } ], "weatherIconUrl": [ {"value": "http:\/\/www.worldweatheronline.com\/images\/wsymbols01_png_64\/wsymbol_0003_white_cloud.png" } ], "winddir16Point": "SW", "winddirDegree": "235", "winddirection": "SW", "windspeedKmph": "18", "windspeedMiles": "11" },
 * {"date": "2010-11-05", "precipMM": "0.2", "tempMaxC": "14", "tempMaxF": "57", "tempMinC": "10", "tempMinF": "50", "weatherCode": "116", "weatherDesc": [ {"value": "Partly Cloudy" } ], "weatherIconUrl": [ {"value": "http:\/\/www.worldweatheronline.com\/images\/wsymbols01_png_64\/wsymbol_0002_sunny_intervals.png" } ], "winddir16Point": "SW", "winddirDegree": "229", "winddirection": "SW", "windspeedKmph": "18", "windspeedMiles": "11" },
 * {"date": "2010-11-06", "precipMM": "3.7", "tempMaxC": "13", "tempMaxF": "56", "tempMinC": "9", "tempMinF": "48", "weatherCode": "119", "weatherDesc": [ {"value": "Cloudy" } ], "weatherIconUrl": [ {"value": "http:\/\/www.worldweatheronline.com\/images\/wsymbols01_png_64\/wsymbol_0003_white_cloud.png" } ], "winddir16Point": "SSW", "winddirDegree": "212", "winddirection": "SSW", "windspeedKmph": "26", "windspeedMiles": "16" }, 
 * {"date": "2010-11-07", "precipMM": "5.4", "tempMaxC": "8", "tempMaxF": "47", "tempMinC": "4", "tempMinF": "38", "weatherCode": "296", "weatherDesc": [ {"value": "Light rain" } ], "weatherIconUrl": [ {"value": "http:\/\/www.worldweatheronline.com\/images\/wsymbols01_png_64\/wsymbol_0017_cloudy_with_light_rain.png" } ], "winddir16Point": "NE", "winddirDegree": "39", "winddirection": "NE", "windspeedKmph": "16", "windspeedMiles": "10" }
 * ] }}
 */
function getWeather(selectedLocation, days) {
	listOfWeather = [];
	jQuery(function() {
		var script = document.createElement('script');
		script.type = 'text/javascript';
		script.src = "http://www.worldweatheronline.com/feed/weather.ashx?cc=no&format=json&key=f7d8c40a98131239100311&q="
				+ selectedLocation.lat()
				+ ","
				+ selectedLocation.lng()
				+ "&callback=processResults"
				+ "&num_of_days=" + days;
		$("body").append(script);
	});
}

function processResults(jsonData) {
	var shtml = '';
	var description = "";
	var icon = "";
	var weather = jsonData.data.weather;
	var i = 0;
	var output = "";

	if (weather) {
		for (i = 0; i < weather.length; i++) {	
			description = weather[i].weatherDesc[0].value;
			icon = weather[i].weatherIconUrl[0].value;
			output = "<img title=\"" + description + "\" src=\"" + icon + "\"/>";
			listOfWeather[i] = output;
		}
	}

	if (listOfWeather.length == 0) {
		listOfWeather[0] = "No weather data found";
	}
	updateWeatherDisplay();
}
