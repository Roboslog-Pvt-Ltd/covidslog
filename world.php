<!DOCTYPE html>
<html>
<head>
	<title>Covid's Log in India & Worldwide</title>
  	<link rel="icon" href="img/virus.png">
	<?php include'link/links.php'; ?>
	<?php include'css/world_css.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/world_css1.css">
</head>
<body onload="fetch()">

<ul>
    <li><img src="img/logo.gif" ALT="Logo" width="50px" height="50px"style="padding:5px;"></li>
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="#worldcases">CasesGlobally</a></li>
    <li><a href="team.php">Team</a></li>
  </ul>


<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="img/unity.jpg" width="300" height="300">
			</div>
		</div>

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"> <img src="img/corona.png" width="50" height="50"></span>na Virus</h1>
			</div>
		</div>
	</div>
</div>

<!--live corana update worldwide---->

<section class="corona_update container-fluid" id="worldid">
	<div class="mb-3">
		<h3 class="text-uppercase text-center">COVID-19 LIVE UPDATES OF THE WORLD</h3>
	</div>

	<div class="table-responsive">
		
		<table class=" table table-bordered table-striped text-center" id="tbval">
			<tr style="color: #fff; background: #202020;">
				<th>Country</th>
				<th>TotalConfirmed</th>
				<th>TotalRecovered</th>
				<th>TotalDeaths</th>
				<th>NewConfirmed</th>
				<th>NewRecovered</th>
				<th>NewDeaths</th>
			</tr>
		</table>

	</div>
	
</section>

<!--- corona symptoms-->

<div class="container-fluid pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Coronavirus Symptoms</h1>	
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="img/cough.png" class="img-fluid" width="120" height="120">
					<figcaption>Cough</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="img/runnynose.png" class="img-fluid" width="120" height="120">
					<figcaption>Running Nose</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="img/fever.png" class="img-fluid" width="120" height="120">
					<figcaption>Fever</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="img/sick.png" class="img-fluid" width="120" height="120">
					<figcaption>Cold</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="img/tired.png" class="img-fluid" width="120" height="120">
					<figcaption>Tiredness</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="img/breathing.png" class="img-fluid" width="120" height="120">
					<figcaption>Difficulty in breathing(severe cases)</figcaption>
				</figure>
			</div>
		</div>
	</div>
</div>

<!--- corona prevention-->

<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>6 Steps Prevention Against Coronavirus</h1>	
	</div>

	<div class="container">
		<div class="row">

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="img/handwash.png" class="img-fluid" width="90" height="90">
				</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							Wash your hands regurarly for 20 seconds with soap and water or alcohol-based hand rub.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="img/mask.png" class="img-fluid" width="90" height="90">
				</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="img/close_contact.png" class="img-fluid" width="90" height="90">
				</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							Avoid close contact(1 meter or 3 feet) with people who are unwell.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="img/home.png" class="img-fluid" width="90" height="90">
				</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							Stay home and self-isolate from others in the household if you feel unwell.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="img/news.png" class="img-fluid" width="90" height="90">
				</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							Stay informed by watching news & follow the recommended practices.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="img/fever1.png" class="img-fluid" width="90" height="90">
				</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							If you have fever, cough and difficulty breathing, seek mdeical care early.
						</p>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>

<!----scroll top ---->

<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>

<!---Footer --->
  <footer class="mt-5">
  <div class="footer_style text-black text-center container-fluid">
    <p style="text-align: center;">Developed by Rehan Khan @ Copyright by Roboslog <a href="http://stemslog.com/covid_privacy.html"><br>Click here for privacy detail</a></p>
  </div>
</footer>

<script type="text/javascript">

	$('.count').counterUp({
		delay:10,
		time:3000
	})
	mybutton = document.getElementById("myBtn");

	window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
		if(document.body.scrollTop >100 || document.documentElement.scrollTop > 100) {
			mybutton.style.display = "block";
		}
		else {
			mybutton.style.display = "none";
		}
	}

	function topFunction() {
		document.body.scrollTop = 0; // For safari
		document.documentElement.scrollTop = 0; //For chrome, firefox and Opera
	}

function fetch() {
	$.get("https://api.covid19api.com/summary",

		function (data)
		{
			//console.log(data['Countries'].length)
			var tbval = document.getElementById('tbval');

			for (var i=1; i<(data['Countries'].length); i++){
				var x =tbval.insertRow();
				x.insertCell(0);

				tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];

				x.insertCell(1);
				tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];	
				x.insertCell(2);
				tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];

				x.insertCell(3);
				tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
;
				x.insertCell(4);
				tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];

				x.insertCell(5);
				tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];

				x.insertCell(6);
				tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
			}
		}
	);
}

</script>
</body>