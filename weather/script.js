$(document).ready(function () {
  var currentDate,
      currentLocation = 60647, // Default to Chicago
      currentTemp = [],
      currentUnits = 'f', // Default to Fahrenheit
      forecast = [],
      $forecastDivs = $('#future .container'),
      $locateBtn = $('#locateBtn'),
      $unitBtn = $('#unitBtn');

  // -----------------
  // Geolocation API
  // -----------------
  function getCurrentLocation() {
    // If geolocation is not supported, output msg and exit out of function
    if (!navigator.geolocation){
      showStatus('error', 'ERROR: Geolocation is not supported by this browser');
      return;
    }
    function showPosition(position) {
      var location  = position.coords.latitude + ',' + position.coords.longitude;
      getWeather(location); // Get weather after getting position
      showStatus('success', 'Success! Location found.');
      $locateBtn.addClass('on'); // Toggle btn class to on if successful
    }
    function showError(error) {
      switch(error.code) {
        case error.PERMISSION_DENIED:
          showStatus('error', 'ERROR: Geolocation request denied. Try visiting the HTTPS site: <a href="https://codepen.io/tiffanyadu/pen/qryXBo" target="_blank">https://codepen.io/tiffanyadu/pen/qryXBo</a>');
          break;
        case error.POSITION_UNAVAILABLE:
          showStatus('error', 'ERROR: Location information is unavailable.');
          break;
        case error.TIMEOUT:
          showStatus('error', 'ERROR: The request to get user location timed out.');
          break;
        case error.UNKNOWN_ERROR:
          showStatus('error', 'ERROR: An unknown error occurred.');
          break;
      }
    }
    showStatus('', 'Locating…'); // In progress text
    navigator.geolocation.getCurrentPosition(showPosition, showError, {enableHighAccuracy: true});
  }

  // ---------------
  // Weather API
  // ---------------

  // Send request to API to get weather data
  function getWeather(location) {
    var weatherRequest = $.ajax({
      method: 'GET',
      url: 'https://api.wunderground.com/api/d6fadca18738e4ec/geolookup/conditions/forecast/q/' + location + '.json'
    });
    // If getting was successful, send data to be processed
    weatherRequest.done(function(data) {
      processData(data);
    });
    // If request fails, show error
    weatherRequest.fail(function(xhr, status, error) {
      console.warn(error.message);
    });
  }

  // Grab only the needed info from weather request and return
  function processData(data) {
    var current = data.current_observation;
    var daily = data.forecast.simpleforecast.forecastday;
    // Store values for current date, location, and temp
    currentDate = daily[0].date.weekday + ', ' + daily[0].date.monthname + ' ' + daily[0].date.day + ', ' + daily[0].date.year;
    currentLocation = current.display_location.city + ', ' + current.display_location.state;
    currentTemp = {
      c: current.temp_c,
      f: current.temp_f
    };
    forecast.length = 0; // Empty array first
    // Store forecast info
    daily.forEach(function(day) {
      var obj = {}; // Temporary object
      obj.weekdayShort = day.date.weekday_short;
      obj.conditions = day.conditions;
      obj.icon = day.icon;
      obj.c = {
        high: day.high.celsius,
        low: day.low.celsius
      };
      obj.f = {
        high: day.high.fahrenheit,
        low: day.low.fahrenheit
      };
      forecast.push(obj);
    });
    // Display weather ONLY after processing
    displayWeather();
  }

  // Display data on page
  function displayWeather() {
    // Separate today's forecast from the rest
    var today = forecast.shift();
    // Today - Print weather data
    $('#current .location').html(currentLocation);
    $('#current .date').html(currentDate);
    $('#current .weatherIcon > div').attr('class', today.icon);
    $('#current .conditions').html(today.conditions);
    $('#lastUpdated').html('Last updated at ' + getCurrentTime());
    // Add forecast data to page, don't display temps yet
    $forecastDivs.each(function(index) {
      $(this).find('.day').html(forecast[index].weekdayShort);
      $(this).find('.weatherIcon').children().attr('class', forecast[index].icon);
      $(this).find('.conditions').html(forecast[index].conditions);
    });
    // Get/update temps with current units
    updateTemps(currentUnits);
  }

  // Update temps and add to page
  function updateTemps(units) {
    $('#current .temp').html(Math.round(currentTemp[units]));
    $forecastDivs.each(function(index) {
      $(this).find('.high').html(forecast[index][units].high);
      $(this).find('.low').html(forecast[index][units].low);
    });
  }

  // ------------
  // Status Bar
  // ------------
  var $statusBar = $('#status');

  function showStatus(statusType, message) {
    var $statusText = $statusBar.children('p');
    var icon = '';
    // Set icon based on statusType
    if (statusType === 'error') {
      icon = '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>';
    } else if (statusType === 'success') {
      icon = '<i class="fa fa-check-circle" aria-hidden="true"></i>';
    }
    // Set status class, icon, text, and open animation
    $statusText.html(icon + message);
    $statusBar.attr('class', statusType).slideDown('fast');
  }
  // Status bar close animation
  $statusBar.children('.close').on('click', function() {
    $statusBar.slideUp('fast'); // Slide up animation
  });

  // ---------------
  // Misc Functions
  // ---------------

  // Get and format current time
  function getCurrentTime() {
    var now = new Date();
    var hours = now.getHours();
    var mins = now.getMinutes();
    var period = 'am';
    if (hours > 11) {
      period = 'pm';
      if (hours > 12) hours -= 12; // Format for 12-hr clock
    }
    if (mins < 10) {
      mins = '0' + mins; // Format minutes
    }
    return hours + ':' + mins + period;
  }

  // ------------------------
  // Locate and Unit Buttons
  // ------------------------

  // locateBtn - click to get current location
  $locateBtn.on('click', function() {
    getCurrentLocation($(this));
    $(this).removeClass('on pulse');
  });

  // unitBtn - click to toggle units
  $unitBtn.on('click', function() {
    $(this).toggleClass('on')
           .attr('data-units', $(this).attr('data-units') === 'f' ? 'c' : 'f');
    currentUnits = $(this).attr('data-units');
    $(this).html(currentUnits);
    updateTemps(currentUnits);
  });

  // ------------------------
  // Functions to run onload
  // ------------------------
  window.onload = function() {
    getWeather(60647); // Default to get Chicago weather
    // Suggest to share location with message and button animation
    setTimeout(function() {
      showStatus('', 'Click on the <i class="fa fa-location-arrow" aria-hidden="true"></i> button to share your current location.');
      $locateBtn.addClass('pulse');
    }, 5000);
  };
});