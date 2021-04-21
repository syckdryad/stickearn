<div class="sidenav">
    <a href="{{ url('topscore') }}">Top Score</a>
    <a href="{{ url('games') }}">Play</a>
</div>

<div class="main">
    <div class="contained-table">
        <table>
          <caption>Scoreboard</caption>
          <thead>
            <tr>
              <th>Name</th>
              <th>Score</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $key => $dat) 
                <tr>
                    <td data-th="Name">{{$key}}</td>
                    <td data-th="Score">{{$dat}}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>


  <style>
      /* The sidebar menu */
.sidenav {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 160px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
}

/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Style page content */
.main {
  margin-left: 160px; /* Same as the width of the sidebar */
  padding: 0px 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

body {
  background-size: cover;
  min-height: 100vh;
}

.contained-table {
  background-color: #fff;
  border: 1px solid #eee;
  margin: .5em;
  padding: .3em;
}

table {
  border-collapse: collapse;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}

caption {
  font-size: 4vw;
  font-weight: bold;
  padding: .8em;
}

table,
th,
tr,
td {
  padding: .5em .75em;
}

th,
[data-th]:first-child {
  background-color: #eee;
}

[data-th="Name"] {
  color: #134A8E;
  font-weight: bold;
}

[data-th="Name"] img {
  max-width: 30px;
  vertical-align: middle;
  padding: .3em;
}

[data-th="Score"] {
  font-size: 1.125em;
  font-weight: bold;
}

.long {
  display: none;
}

@media screen and (max-width: 300px) {
  caption {
    font-size: 1em;
  }
  /* hide detailed columns */
  th:not(:first-child):not(:last-child),
  td:not(:first-child):not(:last-child) {
    display: none;
  }
  td {
    padding: 1.5em;
  }
}

@media screen and (min-width: 301px) and (max-width: 450px) {
  /* vertical display */
  table, thead, tbody, th, tr, td {
    display: block;
  }
  thead tr {
    position: absolute;
    top: -9999px;
    left: -9999px;
  }
  td {
    position: relative;
    padding-left: 50%;
  }
  /* add row labels */
  td:before {
    position: absolute;
    left: 6px;
    content: attr(data-th);
    font-weight: bold;
  }
}

@media screen and (min-width: 451px) {
  .short {
    display: none;
  }
  .long {
    display: block;
  }
  /* horizontal scroll */
  .contained-table {
    margin: 1em auto;
    max-width: 50em;
    overflow-x: auto;
  }
  table {
    margin: 1.5em auto;
    max-width: 100%;
  }
}
  </style>