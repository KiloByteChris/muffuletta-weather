function getWeatherData() {
    // Function uses the courses api to display the title of the selected course
    //var city = "vancouver,us"
    //var data = {"city": city};
    var url = "wp-content/plugins/muffuletta-weather/includes/get-weather-data.php?action=getWeather"
    $.ajax({
        url: url,
        //data: data,
        datatype: "json",
        method: "GET"
    }).done( function(data) {
        console.log(data);
        //data = JSON.parse(data);
        console.log(typeof data);
        //var subHeaderString = "<h2>"+data.name+"</h2>";
        //$("#subHeader").html(subHeaderString);
    });
}
getWeatherData();
