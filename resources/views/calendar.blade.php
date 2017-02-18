<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <link href='css/fullcalendar.min.css' rel='stylesheet' />
    <link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <script src='lib/moment.min.js'></script>
    <script src='lib/jquery.min.js'></script>
    <script src='js/fullcalendar.min.js'></script>
    <script>

        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listWeek'
                },
                defaultDate: '{{ Carbon\Carbon::now() }}',
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [

                @foreach($events as $event)
                    {
                        title: '{{$event->title}}',
                        start: '{{$event->start}}',
                        end:    '{{$event->end}}'
                    },
                @endforeach
                ]
            });

        });

    </script>
    <style>

        body {
            margin: 40px 10px;
            padding: 0;
            font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }

    </style>
</head>
<body>

<div id='calendar'></div>

</body>
</html>