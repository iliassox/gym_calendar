<head>
    <meta charset='utf-8' />
    <link href='{{ asset('js/lib/main.css') }}' rel='stylesheet' />
    <script src='{{ asset('js/lib/main.js') }}'></script>
    <script>

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
                dayHeaderFormat: { weekday: 'long' },
                events: [
                    @foreach($sessions as $session)
                    {
                        title: '   \t{{ \App\Models\Activity::find($session->activity_id)->name }} \n at room : {{ \App\Models\Room::find($session->room_id)->id }}   By : {{ \App\Models\Coach::find($session->coach_id)->name }} ',
                        start: '{{ $days[$session->day] }}T{{ $session->hour }}',
                        end: '{{ $days[$session->day] }}T{{ $session->end }}',
                        classNames:['titles'],
                        backgroundColor: '{{ \App\Models\Colors::$colors[($session->activity_id) % 10] }}'
                    },
                    @endforeach
                ]
            });
            calendar.render();
        });

    </script>
</head>
<body>
<div id='calendar'></div>
</body>
