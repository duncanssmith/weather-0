import React, { useState } from "react";
import Axios from "axios";

// import "./App.css";

function Weather() {

  // const [count, setCount] = useState("")
  const [weather, setWeather] = useState("")

  const getWeather = () => {
    Axios.get("https://api.openweathermap.org/data/2.5/forecast?q=London&mode=json&units=metric&appid=786986c790691a6fe26c60fcd9fae106").then((response)=>{

      console.log(response);

    //   for (const item of response.data) {
        //   console.log(item)
    //   }

      // clone the response
      // const data = [...example]
      // const items = example.slice()
      // const items = [].concat(response.data) 
      // console.log("ITEMS: " + response.data)

      // items.forEach(function(item){
      //   console.log('Duncan ' + item.city.name)
      // })

      setWeather("City: " + response.data.city.name + ", " +  response.data.city.country + ", " +
          " Datetime: " + response.data.list[0].dt_txt  + " " +
          " Clouds: " + response.data.list[0].clouds.all + "%, " +
          " Desc: " + response.data.list[0].weather[0].description +
          " Temp: " + response.data.list[0].main.temp + " deg C " +
          " Temp min: " + response.data.list[0].main.temp_min + " deg C " +
          " Temp max: "  + response.data.list[0].main.temp_max + " deg C " +
          " Humidity: " + response.data.list[0].main.humidity + "% " +
          " Wind direction: " + response.data.list[0].wind.deg + " degrees " +
          " Wind speed: " + response.data.list[0].wind.speed + " " +
          " Count of data points: " + response.data.cnt)
      // setWeather(response.data.list)
      // setCount(response.data.cnt)
    });
  }
  console.log("DUNCAN DEBUG");

  return <div>
    Hello Duncan <button onClick={getWeather}>Get weather right now</button>
    <form>
      <label for="location">Location [e.g. London, Edinburgh, Cardiff, Manchester]</label>
      <input id="location"></input>
      <br/>
      <label for="format">Format [xml|json]</label>
      <input id="format"></input>
    </form>
    <br/>
    <hr/>
    {/* {count} */}
    {weather}
    <hr/>
    </div>;
}

export default Weather;

if (document.getElementById('weather')) {
    ReactDOM.render(<Weather />, document.getElementById('weather'));
}