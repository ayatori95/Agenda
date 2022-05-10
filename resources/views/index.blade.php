<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='assets/packages/core/main.css' rel='stylesheet' />
<link href='assets/packages/daygrid/main.css' rel='stylesheet' />
<link href='assets/packages/timegrid/main.css' rel='stylesheet' />
<link href='assets/packages/list/main.css' rel='stylesheet' />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href='assets/css/style.css' rel='stylesheet' />
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

@include('modal')
  <div id='wrap'>

    <div id='external-events'>
      <h4>Draggable Events</h4>

      <div id='external-events-list'>
        <div class='fc-event' data-event='{"id":"99","title":"Meu Evento","color":"#228B22","start":"12:00:00","end":"12:30:00","location":"casa","status":"Agendado"}'>Meu Evento</div>
      </div>

      <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>remove after drop</label>
      </p>
    </div>

    <div 
    id='calendar'
    data-route-load-events= "{{ route('routeLoadEvents') }}"
    data-route-event-update= "{{ route('routeEventUpdate') }}"
    data-route-event-store= "{{ route('routeEventStore') }}"
    data-route-event-delete= "{{ route('routeEventDelete') }}"
    ></div>

    <div style='clear:both'></div>

  </div>
<script src='assets/packages/core/main.js'></script>
<script src='assets/packages/interaction/main.js'></script>
<script src='assets/packages/daygrid/main.js'></script>
<script src='assets/packages/timegrid/main.js'></script>
<script src='assets/packages/list/main.js'></script>
<script src='assets/packages/core/locales-all.js'></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
<script src='assets/js/script.js'></script>
<script src='assets/js/home.js'></script>
</body>
</html>
