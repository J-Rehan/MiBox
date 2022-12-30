<div>
    <div id='calendar-container' wire:ignore>
        <div id='calendar'></div>
    </div>
</div>
@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js'></script>

    <script>
        document.addEventListener('livewire:load', function () {
            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendar.Draggable;
            var calendarEl = document.getElementById('calendar');
            var checkbox = document.getElementById('drop-remove');

            var data =   @this.events;
            var calendar = new Calendar(calendarEl, {
                events: JSON.parse(data),
                dateClick(info) {
                    console.log('info',info.dayEl.classList[2]);
                    var day = info.dayEl.classList[2];
                    var date = info.dateStr;
                    if(day != 'fc-day-sun' && day != 'fc-day-sat'){
                        calendar.addEvent({
                            title: 'Holiday',
                            start: date,
                        });
                        var eventAdd = date;
                        @this.addevent(eventAdd);
                        alert('added to holiday list... ');
                    }
                },
                editable: true,
                selectable: true,
                displayEventTime: false,
                droppable: true, // this allows things to be dropped onto the calendar
                drop: function (info) {
                    // is the "remove after drop" checkbox checked?
                    if (checkbox.checked) {
                        // if so, remove the element from the "Draggable Events" list
                        info.draggedEl.parentNode.removeChild(info.draggedEl);
                    }
                },
                eventClick: function (info) {
                    var deleteMsg = confirm("Do you really want to delete?");
                    console.log("info.event", info.event.startStr)
                    if (deleteMsg) {
                        var eventAdd = info.event.startStr;
                        @this.removedate(eventAdd);
                        info.event.remove();
                        alert('remove form holiday list... ');
                    }
                },
                loading: function (isLoading) {
                    if (!isLoading) {
                        // Reset custom events
                        this.getEvents().forEach(function (e) {
                            if (e.source === null) {
                                e.remove();
                            }
                        });
                    }
                },
                businessHours: {
                // days of week. an array of zero-based day of week integers (0=Sunday)
                    daysOfWeek: [ 1, 2, 3, 4, 5 ], // Monday - Friday
                }
            });
            calendar.render();
        @this.on(`refreshCalendar`, () => {
            calendar.refetchEvents()
        });
        });
    </script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css' rel='stylesheet'/>
@endpush
