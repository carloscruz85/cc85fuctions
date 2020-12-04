<?php
/*
util functions by carloscruz85.com
*/

function timeNowFrom($d){
	/* instructions :
 args: $d example format: 2020-12-03 07:51:40 (created by: date("Y-m-d H:i:s"))

 return diference array between $d and now date:

 $dateResults = array(
   'years' 	=> $years,
   'months' 	=> $months,
   'days' 		=> $days,
   'hours' 	=> $hours,
   'minutes' => $minutes,
   'seconds' => $seconds
 );
	*/

	// config //
	date_default_timezone_set ('America/El_Salvador'); // watch the format in https://www.php.net/manual/es/timezones.php

	$now = strtotime(date("Y-m-d H:i:s"));
	$date = strtotime( date($d));
	$diff = $now - $date;
	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	$hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)	/ (60*60));
	$minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);
	$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60));
	$dateResults = array(
		'years' 	=> $years,
		'months' 	=> $months,
		'days' 		=> $days,
		'hours' 	=> $hours,
		'minutes' => $minutes,
		'seconds' => $seconds
	);
	return $dateResults;
}

function x($d){
  /*
  arg: an array
  show the structure of the arg array
  */
	?>
	<pre>
		<?php print_r($d) ?>
	</pre>
	<?php
}
?>
