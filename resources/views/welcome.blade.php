<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #FCFDFD;
        }

        .mg {
            margin: 0px;
            padding: 0px;
        }

        .data {
            text-align: center;
            width: 100%;
            line-height: 20px;
            padding: 24% 0%;
        }

        .part1 {
            height: 100vh;
        }

        .part2 {
            height: 100vh;
            position: relative;
        }

        .bar {
            width: 6px;
            height: 100vh;
            background-color: #24262b;
            position: absolute;
            top: 0;
            left: 0px;
        }

        .m0 {
            margin-left: 0px;
        }

        .data_img img {
            padding-top: 22%;
        }

        .we {
            font-size: 45px;
            text-transform: uppercase;
            font-weight: 900;
        }

        .loading {
            font-size: 80px;
            position: relative;
        }

        .imgGif {
            position: absolute;
            top: 28%;
            left: 35%;
        }

        #demo {
            padding-top: 3%;
            padding-bottom: 3%;
            font-weight: 900;
        }

        .data a {
            color: rgb(255, 255, 255);
        }

        .button {
            padding: 16px 38px;
            background-color: #24262b;
            font-size: 15px;
            text-transform: uppercase;
            font-weight: 900;
            text-decoration: none;
            margin-top: 2%;
            display: inline-block;
            transition: all linear .3s;
            transform: skew(-11deg);
        }

        .clock {
            font-size: 30px;
            font-weight: 900;
        }

        #blur.active {
            filter: blur(20px);
            pointer-events: none;
            user-select: none;
        }

        #pop {
            width: 60%;
            height: 60%;
            background: #000000;
            position: fixed;
            top: 20%;
            left: 20%;
            box-shadow: 0px 5px 30px rgb(49 49 49);
            visibility: hidden;
            opacity: 0;
            transition: 0.5s;
        }

        .popUp {
            position: relative;
        }

        .button2 {
            padding: 10px 24px;
            background-color: #ebebeb;
            font-size: 13px;
            text-transform: uppercase;
            font-weight: 900;
            text-decoration: none;
            margin-top: 2%;
            display: inline-block;
            transition: all linear .3s;
            transform: skew(0deg);
            position: absolute;
            top: 2px;
            right: 2%;
            color: #000000;
        }

        #pop.active {
            visibility: visible;
            opacity: 1;
            transition: 0.5s;
        }

        .form input {
            width: 90%;
            display: inline-block;
            height: 45px;
            border: 0px;
            margin-bottom: 40px;
            padding-left: 20px;
            font-size: 15px;
            font-weight: 900;
        }

        .form input:focus {
            outline: 0px;
        }

        .popUpp {
            margin-top: 20%;
        }

        .submit {
            padding: 10px 20px;
            font-weight: 900;
        }

        .tc {
            color: #ebebeb;
            font-weight: 900;
            font-size: 15px;
            margin-top: -30px;
            margin-right: 30px;
        }
    </style>
</head>

<body>
    <div class="container-fluid" id="blur">
        <div class="row">
            <div class="col-lg-8 part1 mg">
                <div class="data">
                    <h1 class="we">we are on <span class="loading">loading</span> phase <img src="{{asset("./images/gif.gif")}}" alt="" class="imgGif">
                    </h1>
                    <p id="demo" class="clock"></p>
                    <a href="#" class="button" id="join" onclick="toggle()">join us</a>
                </div>
            </div>
            <div class="col-lg-4 part2">
                <div class="bar"></div>
                <div class="data_img">
                    <img src="{{asset("./images/SP_transparent.png")}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div id="pop">
        <a href="#" class="button2" id="join" onclick="toggle()">close</a>
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset("./images/img1.jpeg")}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="popUpp"></div>"> <form action="#" class="form"> @csrf <input type="text"
                        placeholder="User Name">
                    <input type="email" placeholder="User Email">
                    <button type="submit" class="submit">submit</button>
                </form>
            </div>
        </div>
        <p class="tc text-end">*T&C applied</p>
    </div>
    </div>
    <script type="text/javascript">
        // popup-js 
        function toggle(){
            var blur = document.getElementById('blur');
            blur.classList.toggle('active');

            var pop = document.getElementById('pop');
            pop.classList.toggle('active');
        }
    
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 1, 2023 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = days + " day , " + hours + " hours , "
                + minutes + " minute , " + seconds + " second";
            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- Code injected by live-server --> {{-- <script>
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function () {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function (msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        }
        else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
	// ]]>
    </script> --}}
</body>

</html>