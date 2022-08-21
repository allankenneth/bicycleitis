<?php 
/**
* J.K.'s Bicycle-itis build script
*/

$output = require('header.php');
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
$output .= require('footer.php');
$export = 'index.html';
file_put_contents($export, $output);
echo $output;
