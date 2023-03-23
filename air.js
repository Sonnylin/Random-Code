const errorLabel = document.querySelector("label[for='error-msg']")
const latInp = document.querySelector("#latitude")
const lonInp = document.querySelector("#longitude")
const airQuality = document.querySelector(".air-quality")
const airQualityStat = document.querySelector(".air-quality-status")
const srchBtn = document.querySelector(".search-btn")
const componentsEle = document.querySelectorAll(".component-val")

const appId = "bd55593ecb666c01d38f4ec9276324e8" // Get your own API Key from https://home.openweathermap.org/api_keys
const link = "https://api.openweathermap.org/data/2.5/air_pollution"	// API end point

const getUserLocation = async (e) => {

	const link = "http://api.openweathermap.org/geo/1.0/direct"	// API end point
	
	const rawData = await fetch(`${link}?q=${e}&limit=1&appid=${appId}`).catch(err => {
		onPositionGatherError({ message: "Something went wrong. Check your internet conection." })
		console.log(err)
	})

	const geoData = await rawData.json();

	var lat = geoData[0].lat;
	var lon = geoData[0].lon;

	getAirQuality(lat, lon)
}

const getAirQuality = async (lat, lon) => {
	// Get data from api
	const rawData = await fetch(`${link}?lat=${lat}&lon=${lon}&appid=${appId}`).catch(err => {
		onPositionGatherError({ message: "Something went wrong. Check your internet conection." })
		console.log(err)
	})
	const airData = await rawData.json();
	setValuesOfAir(airData);
	setComponentsOfAir(airData);
}

const setValuesOfAir = airData => {
	const aqi = airData.list[0].main.aqi
	let airStat = "", color = ""

	// Set Air Quality Index
	airQuality.innerText = aqi

	// Set status of air quality
	switch (aqi) {
		case 1:
			airStat = "Good"
			color = "rgb(19, 201, 28)"
			break
			case 2:
				airStat = "Fair"
				color = "rgb(15, 134, 25)"
				break
			case 3:
				airStat = "Moderate"
				color = "rgb(201, 204, 13)"
				break
			case 4:
				airStat = "Poor"
				color = "rgb(204, 83, 13)"
				break
		case 5:
			airStat = "Very Poor"
			color = "rgb(204, 13, 13)"
			break
		default:
			airStat = "Unknown"
	}

	airQualityStat.innerText = airStat
	airQualityStat.style.color = color
}

const setComponentsOfAir = airData => {
	let components = {...airData.list[0].components}
	componentsEle.forEach(ele => {
		const attr = ele.getAttribute('data-comp')
		ele.innerText = components[attr] += " μg/m³"
	})
}

const onPositionGatherError = e => {
	errorLabel.innerText = e.message
}

$(function() {
	const btn = document.getElementById('search-btn');
	
	btn.onclick = function() {
		console.log('Button pressed');
		getUserLocation(document.getElementById('search').value);
	};
});
