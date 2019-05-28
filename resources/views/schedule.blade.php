<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		$(document).ready(function() {

    // page is now ready, initialize the calendar..
    $('#calendar').fullCalendar({
        weekends: false,
        dayClick: function() {
          alert('a day has been clicked!');
        },
        defaultView: 'agendaWeek'
        
    });
	</style>
</head>
<body>
 <div id='calendar'></div>
</body>
</html>


