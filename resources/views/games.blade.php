<html lang="en" dir="ltr">
<body>
    <div class="sidenav" class="sidebar">
        <a href="{{ url('topscore') }}">Top Score</a>
        <a href="{{ url('games') }}">Play</a>
    </div>
    <div class="main">
        <div id="divMain">
            @include('games_main')
        </div>
        <div id="divPlay" style="display:none">
            @include('games_play')
        </div>
        <div id="copyright">
            <p>Crafted by: <a target="_blank" href="https://www.linkedin.com/in/kevinandryani/">Kevin Andryani</a></p>
        </div>
    </div>
</body>
</html>

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

#copyright {
  text-align: center;
  position: fixed;
  bottom: 0;
}
</style>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    function play() {
        var x = document.getElementById("divMain");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }

        var y = document.getElementById("divPlay");
        if (y.style.display === "none") {
            y.style.display = "block";
        } else {
            y.style.display = "none";
        }
    }

    function submit() {
        var answer = document.getElementById("user-guess").value;
        var idx = document.getElementById("idx").value;
        var point = document.getElementById("point").value;

        $.ajax({
                url: "{!! url("submit") !!}",
                type: 'POST',
                data:  {
                    "_token": "{{ csrf_token() }}",
                    "answer":answer,
                    "idx":idx,
                    "point":point
                },
                success: function(data){
                    if(data) {
                        Swal.fire(
                            'Correct!',
                            'You answer is correct!',
                            'success'
                        )

                        var lastPoint = parseInt(point) + 10;
                        if(lastPoint <= 100) {
                            document.getElementById("point").value = parseInt(point) + 10;
                            generateScrambler(idx);
                        }
                        else {
                            Swal.fire(
                                'Info',
                                'You already reach the maximum score, Click Quit to quit the game!',
                                'warning'
                            );
                        }
                    }
                    else {
                        Swal.fire(
                            'Wrong!',
                            'You answer is wrong!',
                            'error'
                        )
                        var lastPoint = parseInt(point) - 5;
                        if(lastPoint >= 0) {
                            document.getElementById("point").value = parseInt(point) - 5;
                        }
                        else {
                            document.getElementById("point").value = 0;
                        }
                    }
                }
        });
    }

    function generateScrambler(idx) {
        $.ajax({
                url: "{!! url("generatescrambler") !!}",
                type: 'POST',
                data:  {
                    "_token": "{{ csrf_token() }}",
                    "idx":idx,
                },
                success: function(data){
                    document.getElementById("scramble-words").value = data;
                    document.getElementById("user-guess").value = "";
                    document.getElementById("idx").value = parseInt(idx) + 1;
                }
        });
    }

    function reset() {
        var point = document.getElementById("point").value;

        if(point > 0) {
            (async () => {
                const { value: name } = await Swal.fire({
                    title: 'Input your name',
                    input: 'text',
                    inputLabel: 'Your name',
                    inputPlaceholder: 'Enter your name'
                })

                if (name) {
                    var point = document.getElementById("point").value;
                    
                    $.ajax({
                        url: "{!! url("reset") !!}",
                        type: 'POST',
                        data:  {
                            "_token": "{{ csrf_token() }}",
                            "point":point,
                            "name":name
                        },
                        success: function(data){
                            play();
                        }
                    });
                }
            })()
        }
        else {
            play();
        }
    }
</script>