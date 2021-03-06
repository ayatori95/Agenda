
  document.addEventListener('DOMContentLoaded', function() {
    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable

    /* initialize the external events
    -----------------------------------------------------------------*/

    var containerEl = document.getElementById('external-events-list');
    new Draggable(containerEl, {
      itemSelector: '.fc-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText.trim()
        }
      }
    });

    //// the individual way to do it
    // var containerEl = document.getElementById('external-events-list');
    // var eventEls = Array.prototype.slice.call(
    //   containerEl.querySelectorAll('.fc-event')
    // );
    // eventEls.forEach(function(eventEl) {
    //   new Draggable(eventEl, {
    //     eventData: {
    //       title: eventEl.innerText.trim(),
    //     }
    //   });
    // });

    /* initialize the calendar
    -----------------------------------------------------------------*/

    var calendarEl = document.getElementById('calendar');
    var calendar = new Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      locale: 'pt',
      navLinks: true,
      eventLimit: true,
      editable: true,
      droppable: true, // this allows things to be dropped onto the calendar
      drop: function(arg) {
        // is the "remove after drop" checkbox checked?
        if (document.getElementById('drop-remove').checked) {
          // if so, remove the element from the "Draggable Events" list
          arg.draggedEl.parentNode.removeChild(arg.draggedEl);
        }
      },
      eventDrop: function(element){
        let start = moment(element.event.start).format('YYYY-MM-DD HH:mm:ss');
        let end = moment(element.event.end).format('YYYY-MM-DD HH:mm:ss');
        
        let newEvent = {
          _method:'PUT',
          id: element.event.id,
          start: start,
          end: end
        };

        sendEvent(routeEvents('routeEventUpdate'),newEvent)
      },
      eventClick: function(event){
        alert('event Click');
      },
      eventResize: function(element){

        let start = moment(element.event.start).format('YYYY-MM-DD HH:mm:ss');
        let end = moment(element.event.end).format('YYYY-MM-DD HH:mm:ss');
        
        let newEvent = {
          _method:'PUT',
          id: element.event.id,
          start: start,
          end: end
        };

        sendEvent(routeEvents('routeEventUpdate'),newEvent)
      },
      select: function (event){
        alert ('event Select');
      },
      events: routeEvents('routeLoadEvents'),
    });
    calendar.render();

  });

