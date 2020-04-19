<?php

				$data=file_get_contents('https://api.covid19india.org/data.json');
				$coronaIndia=json_decode($data,true);

				// echo $coronaIndia['statewise'][1]['state'];

				$totalDays= count($coronaIndia['cases_time_series']);
				
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title > INDIA COVID 19 DAILY UPDATE</title>
	<link rel="shortcut icon" type="image/png" href="images.jpg">
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

  <style>
  	
  	*{
  		font-family: 'Roboto', sans-serif;
  		/*background-color: #fff;*/
   	}


  </style>
</head>
<body >
	
	<div class="main " style="background:orange;">
		

 			


			</div>

    
  </div>
  				<h3 class="text-uppercase m-0 p-3 text-center" style="background-color: #FFE53B;
background-image: -webkit-linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
background-image: -moz-linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
background-image: -o-linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
">date-wise covid-19 cases in india</h3>

		<h3 class="text-uppercase p-3 text-center d-flex justify-content-between " 

"> <a href="worldwidecovid19.herokuapp.com"target="_blank">world-wide cases</a><a href="indiacovid19pandemic.herokuapp.com"target="_blank">india cases</a></h3>

	

	
	<div class="table-responsive">
			
			<table class="table table-striped text-center table-hover  " >
				<thead >
				<tr>
					<th class="text-capitalize "  style="background-color:white;color:#17A2B8; ">Date</th>		
						
					<th class="text-capitalize " style="background-color:white;color:red; ">Confirmed</th>		
					
					<th class="text-capitalize " style="background-color:white;color:#28a745; ">Recovered</th>
					<th class="text-capitalize "style="background-color:white;color:6C757D; ">Deaths</th>		
			
	
				</tr>	
	
	
	
				
				<?php
	
	
				$i=$totalDays-1;	
				while ($i>0) 
				{
	
					?>
			
			<tr>
					<td class="bg-info " style="color:white;"><?php echo $coronaIndia['cases_time_series'][$i]['date']."2020<br>" ?></td>
				
					<td class="bg-danger" style="color:white;"><?php echo $coronaIndia['cases_time_series'][$i]['dailyconfirmed'] ?></td>
					
					<td class="bg-success" style="color:white;"><?php echo $coronaIndia['cases_time_series'][$i]['dailyrecovered'] ?></td>
					<td class="bg-secondary" style="color:white;"><?php echo $coronaIndia['cases_time_series'][$i]['dailydeceased'] ?></td>
	
			</tr>
	
	
	
	
			<?php
					$i--;
				}
	
				?>
			</thead>
			</table>
		</div>
			
	
				
			<footer class="page-footer font-small blue">
	
		
			  <div class="footer-copyright text-center py-3">
			    <a href="https://github.com/akm0786"target="_blank"> Developed By Abhishek Mishra </a>
			  </div>
		
	
			</footer>
			
	</div>

</body>
</html>
