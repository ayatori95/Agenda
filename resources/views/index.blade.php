<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='assets/packages/core/main.css' rel='stylesheet' />
<link href='assets/packages/daygrid/main.css' rel='stylesheet' />
<link href='assets/packages/timegrid/main.css' rel='stylesheet' />
<link href='assets/packages/list/main.css' rel='stylesheet' />
<link href='assets/css/style.css' rel='stylesheet' />
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
  <div id='wrap'>

    <div id='external-events'>
      <h4>Draggable Events</h4>

      <div id='external-events-list'>
        <div class='fc-event'>My Event 1</div>
        <div class='fc-event'>My Event 2</div>
        <div class='fc-event'>My Event 3</div>
        <div class='fc-event'>My Event 4</div>
        <div class='fc-event'>My Event 5</div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
<script src='assets/js/script.js'></script>
<script src='assets/js/home.js'></script>
</body>
</html>
