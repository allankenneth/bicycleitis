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
$output .= <<<EOD
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
EOD;
$export = 'index.html';
file_put_contents($export, $output);
echo $output;
