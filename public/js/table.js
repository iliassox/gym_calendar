document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'timeGridWeek',
        dayHeaders: 'true',
        firstDay: 1,
        slotMinTime: '09:00:00',
        slotMaxTime: '20:00:00',
        allDaySlot: false,
        height: 'auto',
        aspectRatio: 1,
        navLinks: false,
        hiddenDays: [ 0 ],
        validRange: {
            start: '2022-04-11',
            end: '2022-04-18'
        },
        dayHeaderClassNames: 'table-heads',
        dayHeaderFormat: { weekday: 'long' }
    });
    calendar.render();
});
