<html lang="en" dir="ltr">
<body>
    <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300;500&display=swap" rel="stylesheet">

    <div class="container">
    <div class="header">
        <div class="header-logo">
        <svg class="site-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M512 256a15 15 0 00-7.1-12.8l-52-32 52-32.5a15 15 0 000-25.4L264 2.3c-4.8-3-11-3-15.9 0L7 153.3a15 15 0 000 25.4L58.9 211 7.1 243.3a15 15 0 000 25.4L58.8 301 7.1 333.3a15 15 0 000 25.4l241 151a15 15 0 0015.9 0l241-151a15 15 0 00-.1-25.5l-52-32 52-32.5A15 15 0 00512 256zM43.3 166L256 32.7 468.7 166 256 298.3 43.3 166zM468.6 346L256 479.3 43.3 346l43.9-27.4L248 418.7a15 15 0 0015.8 0L424.4 319l44.2 27.2zM256 388.3L43.3 256l43.9-27.4L248 328.7a15 15 0 0015.8 0L424.4 229l44.1 27.2L256 388.3z" />
        </svg>
        </div>
        <div class="header-search">
        <button class="button-menu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 385 385">
            <path d="M12 120.3h361a12 12 0 000-24H12a12 12 0 000 24zM373 180.5H12a12 12 0 000 24h361a12 12 0 000-24zM373 264.7H132.2a12 12 0 000 24H373a12 12 0 000-24z" />
            </svg></button>
        </div>
    </div>
    <div class="main">
        <div class="sidebar">
        <ul>
            <li><a href="{{ url('topscore') }}" class="active"><i class="lni lni-home"></i><span>Top Score</span></a></li>
            <li><a href="{{ url('games') }}"><i class="lni lni-text-format"></i><span>Play</span></a></li>
        </ul>
        </div>
        <div class="page-content">
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
    </div>
    </div>


    {{-- <div class="sidenav" class="sidebar">
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
    </div> --}}
</body>
</html>

<style>
#copyright {
  text-align: center;
  position: fixed;
  bottom: 0;
}

* {
  margin: 0;
  padding: 0;
}
body {
  font-family: "Hind Vadodara", -apple-system, BlinkMacSystemFont, Segoe UI,
    Helvetica Neue, Arial, sans-serif;
}
.container {
  display: flex;
  height: 100vh;
  width: 100vw;
  flex-wrap: wrap;
  overflow: hidden;
}
.main {
  height: calc(100% - 50px);
  display: flex;
  flex: 1;
}
.sidebar {
  height: 100%;
  width: 220px;
  box-sizing: border-box;
  box-shadow: 0 0 2rem 0 rgb(0 0 0 / 5%);
  overflow: hidden;
  transition: width 0.5s ease;
}
.container.nav-closed .sidebar,
.container.nav-closed .header-logo {
  width: 0;
}
.sidebar ul {
  display: flex;
  flex-direction: column;
  padding: 5px;
}
.sidebar ul li {
  display: flex;
  align-items: center;
}
.sidebar ul li a {
  color: #000;
  text-decoration: none;
  display: flex;
  align-items: center;
  width: 100%;
  padding: 10px;
  white-space: nowrap;
}
.sidebar ul li a.active,
.sidebar ul li a:hover {
  background: #e8ecef;
}
.sidebar ul li span {
  margin-left: 16px;
  font-size: 16px;
  font-weight: 100;
}
.sidebar ul li i {
  font-size: 18px;
  color: #111;
  font-weight: normal;
}
.header {
  height: 50px;
  background: #303f9f;
  width: 100%;
  display: flex;
  align-items: center;
  flex-basis: 100%;
}
.sidebar ul li a.active i {
  color: #303f9e;
}
.site-logo {
  height: 32px;
  width: 32px;
  min-height: 32px;
  min-width: 32px;
  margin: 0 18px 0 15px;
}
.site-logo path {
  fill: #fff;
}
.site-title {
  color: #fff;
  font-size: 24px;
  letter-spacing: 1px;
  font-weight: 400;
}
.page-content {
  padding: 10px 20px;
  box-sizing: border-box;
  width: 100%;
  flex: 1;
}
.page-content h1 {
  font-size: 20px;
  font-weight: 400;
  color: #333;
}
.header-search {
  height: 100%;
  align-items: center;
  display: flex;
  padding: 0 20px;
  flex: 1;
}
.header-search .button-menu {
  width: 28px;
  height: 28px;
  margin-right: 15px;
  background: none;
  border: 0;
  cursor: pointer;
}
.header-logo {
  display: flex;
  align-items: center;
  width: 220px;
  overflow: hidden;
  transition: width 0.5s ease;
}
.header-search input[type="search"] {
  height: 100%;
  width: 300px;
  padding: 10px 20px;
  box-sizing: border-box;
  font-size: 14px;
  font-weight: 100;
  background: none;
  border: none;
  color: #fff;
}
.header-search input[type="search"]:focus {
  outline: none;
}
.header-search input[type="search"]::placeholder {
  color: #ccc;
}
.header-search .button-menu:focus {
  outline: none;
  border: none;
}
.header-search .button-menu svg path {
  fill: #fff;
}
@media screen and (max-width: 991px) {
  .page-content {
    width: 100vw;
  }
}
@media screen and (max-width: 767px) {
  .header-logo {
    display: none;
  }
}
</style>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    let menuButton = document.querySelector(".button-menu");
    let container = document.querySelector(".container");
    let pageContent = document.querySelector(".page-content");
    let responsiveBreakpoint = 991;

    if (window.innerWidth <= responsiveBreakpoint) {
    container.classList.add("nav-closed");
    }

    menuButton.addEventListener("click", function () {
    container.classList.toggle("nav-closed");
    });

    pageContent.addEventListener("click", function () {
    if (window.innerWidth <= responsiveBreakpoint) {
        container.classList.add("nav-closed");
    }
    });


    window.addEventListener("resize", function () {
    if (window.innerWidth > responsiveBreakpoint) {
        container.classList.remove("nav-closed");
    }
    });

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