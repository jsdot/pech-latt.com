<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
$(document).ready(function(){
    $('input.timepicker').timepicker({
        timeFormat: 'HH:mm:ss',
        minTime: '11:45:00' // 11:45:00 AM,
        maxHour: 20,
        maxMinutes: 30,
        startTime: new Date(0,0,0,15,0,0) // 3:00:00 PM - noon
        interval: 15 // 15 minutes
    });
});</script>
<!-- end Simple Custom CSS and JS -->
