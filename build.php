<?php 
/**
* J.K.'s Bicycle-itis build script
*/
$header = <<<EOD
<!doctype html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="UTF-8">
<title>Bicycle-Itis 250-370-2282 Your Friendly Neighborhood Bike Shop in Victoria BC</title>
<meta name="description" content="Bicycleitis is Victoria's used bike shop connection. Opened in 1990 by Hans Kumbruch with a small loan and a big dream, Bicycleitis has been an important part of Victoria's bicycle community.">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
	background: #0E4D92;
	color: #FFF;
	font-size: 120%;
}
img { height: auto; max-width: 100%; }
.bike {
	background: #FFF;
	border-radius: 3px;
	color: #333;
	margin-bottom: 10px;
	padding: 15px;
}
.bike a { color: #333; }
h1 { font-size: 200%; }
h1, h2,
h3, h4 {
	font-weight: 300;
}
.table td,
.table th {
	border-top: 0;
}
.wesellopus {
	font-size: 24px;
}
</style>
</head>
<body>
<div class="container">
<div class="row justify-content-center mb-3">
<div class="col-md-12 text-center mb-3">
	<div class="mb-3">
		<a href="/" class="logor"><img class="mt-3" src="1D526A11-05D5-40C1-9C65-848EA0D6F5FF.png" alt="Bicycleitis Logo"></a>
	</div>
	<h1 class="my-3">Your Friendly Neighborhood Bike Store </h1>
</div>
<div class="col-md-6 mt-3">
			<h4 class="text-center mb-3">We have been fixing and selling bikes in Victoria BC since 1990, and plan to keep at it for many years to come!</h4>
<h2 class="text-center mt-3"><a href="tel:250-370-2282">250-370-2282</a></h2>
<h4 class="text-center">10:00 – 6:00 Tuesday – Saturday<br>
Closed Sunday/Monday</h4>
<h6 class="text-center mb-3">please note: we are often closed the Tuesday after a holiday Monday</h6>
<h3 class="text-center">1623 Bay St.</h3>
<h3 class="text-center">Victoria, BC</h3>
<div class="email text-center mb-3">bicycleitis@gmail.com</div>
<div class="insta text-center mb-3"><a href="https://www.instagram.com/bicycleitis/" target="_blank" rel="noopener noreferrer" title="Follow us on Instagram"><img loading="lazy" src="/wp-content/uploads/instagram-logo-white.png" alt="instagram logo - Follow us on Instagram" width="40" height="40"></a></div>
<div class="bike">
<h3>New & Used</h3>
<p>We sell both new and used bikes and stock a broad selection of affordable bicycles.</p>
<p>New bike brands we carry include Opus, Evo, Apollo, Lochside and Manhattan.</p>
<p>As inventory is difficult to predict with used bikes, we ask if you are looking for a particular type of bike to keep checking our site for available options.</p>
<p>For a list of new bikes currently in stock please <a href="https://docs.google.com/spreadsheets/d/1-uU6keyYtjakMreh_etkcApaNEoI43IQUw4GeE7P1EY/edit?usp=sharing">CLICK HERE</a></p>
</div>
<div class="bike">
<h3>We Buy Bikes!</h3>
<p>If you are looking to sell us a bike, please come in for a quote and bring your picture ID as you will need this to complete the transaction.</p>
</div>
<div class="bike">
<h3>Donations</h3>
<p>We are also happy to accept donations, and we are a metal/tire/tube recycling drop off spot.</p>
</div>
<div class="bike">
<h3>Parts</h3>
<p>We carry a broad range of replacement parts to keep your bike going, with a variety of much needed lights, locks, helmets, and many other things.</p>
<p><button type="button" class="btn btn-success btn-block text-uppercase my-3" data-toggle="modal" data-target="#rateList"><br>
View Our Rates<br>
</button></p>
</div>
<div class="modal" id="rateList" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title text-dark">Rates</h3>
<p><button type="button" class="close" data-dismiss="modal" aria-label="Close"><br>
<span aria-hidden="true">×</span><br>
</button></p>
</div>
<div class="modal-body">
<table class="table table-sm table-striped">
<thead>
<tr>
<th>Service</th>
<th>Rate</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tune-Up<em>set-up and adjust/tighten everything</em></td>
<td>$125</td>
</tr>
<tr>
<td>Tune-Up+ w/clean<em>set-up and adjust/tighten everything, give the bike a good cleaning, repack all bearing surfaces</em></td>
<td>$250</td>
</tr>
<tr>
<td>Gear or brake<em>cable/pad installation and adjustment</em></td>
<td>$20 – $25</td>
</tr>
<tr>
<td>Wheel truing</td>
<td>$20 – $50</td>
</tr>
<tr>
<td>Wheel building</td>
<td>$75</td>
</tr>
<tr>
<td>Repacking/Installation of Bottom bracket</td>
<td>$30 and up</td>
</tr>
<tr>
<td>Repacking/Installation of Headset</td>
<td>$30 – $40</td>
</tr>
<tr>
<td>Repacking of Front Hub</td>
<td>$30- $40</td>
</tr>
<tr>
<td>Repacking of Rear Hub</td>
<td>$40 – $50 with axle install</td>
</tr>
<tr>
<td>Assembly of boxed bike</td>
<td>$75 – $100 depending upon Tuning required.</td>
</tr>
<tr>
<td>Boxing a bike</td>
<td>$75</td>
</tr>
</tbody>
<tfoot>
<tr>
<td colspan="2">For any job that is not listed please come in or call us for an estimate. We always guarantee our work and pride ourselves on doing it right!</td>
</tr>
</tfoot>
</table>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><p></p>
</div>
</div>
</div>
</div>
<p><!-- /wp:html --></p>
	</div>
<div class="col-md-6 mt-3">
<div class="m-3 p-3 text-center text-uppercase wesellopus">We Sell<br><a href="https://www.opusbike.com/" target="_blank"><img src="https://bicycle-itis.com/wp-content/uploads/opus-bikes-logo.png"></a><br> Bikes</div>

EOD;
$output = $header;
$output .= '';
$count = 0;
$bikes = '';
  $dir = 'bikes';
  // Check if the directory exists
  if (file_exists($dir) && is_dir($dir) ) {
	  
      // Get the files of the directory as an array
      $scan_arr = scandir($dir);
      $files_arr = array_diff($scan_arr, array('.','..') );
      // echo "<pre>"; print_r( $files_arr ); echo "</pre>";
      // Get each files of our directory with line break
      foreach ($files_arr as $file) {
		  //Get the file path
		  $file_path = $dir.'/'.$file;
		  // Get the file extension
		  $file_ext = pathinfo($file_path, PATHINFO_EXTENSION);
		  if ($file_ext == "md") {
			  $count++;
			  $contents = file($dir.'/'.$file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
			  //print_r($trimmed);
			  $bikes .= <<<END
			  <div class="bike">
			  	<h3><span class="fw-bold inline-block float-right pl-2">\${$contents[2]}</span> {$contents[0]}</h3>
				<div>{$contents[3]}</div>
				<div><img src="{$contents[1]}" alt="{$contents[0]}"></div>
			  </div>
			END;
		  }
	  }
      
  }
$output .= '<h3><span class="badge badge-light">' . $count . '</span> bikes</h3>';
$output .= $bikes;
$footer = <<<EOD
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body></html>
EOD;
$output .= $footer;
$export = 'index.html';
file_put_contents($export, $output);
echo $output;
