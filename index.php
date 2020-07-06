<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=0.9, shrink-to-fit=no">
  <title>Covid's Log in India & Worldwide</title>
  <link rel="icon" href="img/virus.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/india.css">
  <link rel="stylesheet" type="text/css" href="css/india1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Loader -->
  <div class="preloader">
    <div class="status">
      <div class="loader">Loading...</div>
    </div>
  </div>
  <!---Navbar
  <ul>
    <li><img src="img/logo.gif" ALT="Logo" width="50px" height="50px"style="padding:5px;"></li>
    <li><a class="active" href="#home">Home</a></li>
    <li><a href="world.php">CasesGlobally</a></li>
    <li><a href="team.php">Team</a></li>
  </ul>
-->
<nav class="navbar navbar-light navbar-expand-md" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav main-nav">
                  <li><img src="img/logo.gif" ALT="Logo" width="50px" height="50px"style="padding:5px;"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" id="home" href="index.php">Home </a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="world.php">CasesGlobally</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="team.php">Team </a></li>
                    <li class="nav-item" role="presentation"></li>
                    
                </ul>
            </div>
        </div>
    </nav>

  <!-- Map-->
  <div id="page" style="display: none;">
    <h1 style="text-align: center;">Covid-19 cases in India</h1>
    <div class="container">
      <div id="india-cases" style="border-style: solid; border-width: thick;">
        <table class="table table-responsive">
          <thead>
            <tr>
              <th>Total Cases</th>
              <th>Total Active Cases</th>
              <th>Recovered</th>
              <th>Deaths</th>
            </tr>
          </thead>
          <tbody id="india-total-data"></tbody>
        </table>
      </div>
      <div id="updated-at"></div>
      <div id="map"></div>
      <div id="india-today-cases" style="border-style: solid; border-width: thick;">
        <table class="table table-responsive">
          <thead>
            <tr>
              <th>Today Cases</th>
              <th>Today Recovered</th>
              <th>Today Deaths</th>
            </tr>
          </thead>
          <tbody id="india-today-data"></tbody>
        </table>
      </div>
      <div class="bg">
        <div id="chartContainer" style="padding-right:30px;height: 300px; width: 45%; margin-top: 30px;display:inline-block;"></div>
        <div id="chartContainer3" style="padding-left:25px;height: 300px; width: 45%; margin-top: 25px;margin-left:10px;display:inline-block;"></div>
        <div id="chartContainer5" style="padding-right:30px;height: 300px; width: 45%; margin-top: 25px;display:inline-block;"></div>
        <div id="chartContainer6" style="padding-left:30px;height: 300px; width: 45%; margin-top: 25px;margin-left:10px;display:inline-block;"></div>
        <div id="chartContainer1" style="padding-right:40px;height: 600px; width: 45%; margin-top: 25px;display:inline-block;"></div>
        <div id="chartContainer2" style="padding-left:30px;height: 600px; width: 45%; margin-top: 25px;display:inline-block;"></div>
        <div id="chartContainer4" style="padding-right:30px;height: 103vh; width: 46%; margin-top: 25px;display:inline-block;"></div>
        <div id="chartContainer7" style="padding-left:30px;height: 103vh; width: 45%; margin-top: 25px;display:inline-block;"></div>
        <h1 style="text-align: center; text-decoration: underline;">Statewise Cases in India</h1>
        <div id="india-statewise-cases" style="overflow-x:scroll; border-style: solid; border-width: thick;">
          <table class="table table-responsive">
            <thead>
              <tr style="color: #fff; background: #2C3335;">
                <th>State</th>
                <th>Total</th>
                <th>Active</th>
                <th>Recovered</th>
                <th>Death</th>
              </tr>
            </thead>
            <tbody id="india-states-cases"></tbody>
          </table>
        </div>
        <!---Footer --->
        <footer class="mt-5">
        <div class="footer_style text-black text-center container-fluid">
          <p style="text-align: center;">Developed by Rehan Khan @ Copyright by Roboslog <a href="http://stemslog.com/covid_privacy.html" style="color: #5256B3; text-decoration: none;"><br>Click here for privacy detail</a></p>
        </div>
      </footer>

      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"
    integrity="sha256-T/f7Sju1ZfNNfBh7skWn0idlCBcI3RwdLSS4/I7NQKQ=" crossorigin="anonymous"></script>
  <script src="https://d3js.org/d3.v4.min.js"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"
    integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/topojson/1.6.20/topojson.min.js"></script>
  <script src="js/src.js"></script>
  <script src="js/prefixfree.dynamic-dom.js"></script>
</body>

</html>