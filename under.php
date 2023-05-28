
<body>
  <link type="text/css" rel="stylesheet" href="css/under.css" />
    <div class="dinding">
      <div class="gangsar">

      <!-- ADD HEADING -->
      <h1>COMING SOON</h1>

      <!-- ADDING HORIZONTAL RULER -->
      <hr>

      <!-- ADDING PARAGRAPH -->
      <p id="demo" style="font-size: 30px"></p>
      </div>

    </div>
</body>


<!-- JAVASCRIPT -->

    <script>
    var countDownDate = new Date("Aug 28, 2018 15:00:00").getTime();
    var countDownfunction = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);


    document.getElementById("demo").innerHTML = days + hours + "h " + minutes + "m " + seconds + "s "


    if(distance < 0) {
      clearInterval(countDownfunction);
      document.getElementById("demo").innerHTML = "PEMILU EXPIRED";
    }
  },1000);
    </script>
