<?php

/*
* API Doc:
* api.php/getJson/{hour/day/week}/{1-5}	retrieve processed json data
* api.php/checkMD5/{1-15}/{md5}	check MD5 value of a particular json data. Return 0 if md5 values are the same.
*/
$path = $_SERVER['PATH_INFO'];
$request = explode('/', trim($_SERVER['PATH_INFO'], '/'));

if ($request[0] != null) {
	/* print out json file based on request. */
	if (strcmp($request[0], 'getJson') == 0) {
		if (strcmp($request[1], 'hour') == 0) {
			switch ($request[2]) {
			case 1:
				echo file_get_contents('all_hour.json');
				break;

			case 2:
				echo file_get_contents('significant_hour.json');
				break;

			case 3:
				echo file_get_contents('1.0_hour.json');
				break;

			case 4:
				echo file_get_contents('2.5_hour.json');
				break;

			case 5:
				echo file_get_contents('4.5_hour.json');
				break;

			default:
				echo 'invalid request';
				break;
			}
		}
		elseif (strcmp($request[1], 'day') == 0) {
			switch ($request[2]) {
			case 1:
				echo file_get_contents('all_day.json');
				break;

			case 2:
				echo file_get_contents('significant_day.json');
				break;

			case 3:
				echo file_get_contents('1.0_day.json');
				break;

			case 4:
				echo file_get_contents('2.5_day.json');
				break;

			case 5:
				echo file_get_contents('4.5_day.json');
				break;

			default:
				echo 'invalid request';
				break;
			}
		}
		elseif (strcmp($request[1], 'week') == 0) {
			switch ($request[2]) {
			case 1:
				echo file_get_contents('all_week.json');
				break;

			case 2:
				echo file_get_contents('significant_week.json');
				break;

			case 3:
				echo file_get_contents('1.0_week.json');
				break;

			case 4:
				echo file_get_contents('2.5_week.json');
				break;

			case 5:
				echo file_get_contents('4.5_week.json');
				break;

			default:
				echo 'invalid request';
				break;
			}
		}
		else {
			echo 'invalid request';
		}
	}
	elseif (strcmp($request[0], 'checkMD5') == 0) {
		if (strcmp($request[1], '') != 0) {
			/* get the md5 value of a particular json, return 0 if two md5 values are the same. */
			switch ($request[1]) {
			case 1:
				echo strcmp(md5(file_get_contents('all_hour.json')) , $request[2]);
				break;

			case 2:
				echo strcmp(md5(file_get_contents('significant_hour.json')) , $request[2]);
				break;

			case 3:
				echo strcmp(md5(file_get_contents('1.0_hour.json')) , $request[2]);
				break;

			case 4:
				echo strcmp(md5(file_get_contents('2.5_hour.json')) , $request[2]);
				break;

			case 5:
				echo strcmp(md5(file_get_contents('4.5_hour.json')) , $request[2]);
				break;

			case 6:
				echo strcmp(md5(file_get_contents('all_day.json')) , $request[2]);
				break;

			case 7:
				echo strcmp(md5(file_get_contents('significant_day.json')) , $request[2]);
				break;

			case 8:
				echo strcmp(md5(file_get_contents('1.0_day.json')) , $request[2]);
				break;

			case 9:
				echo strcmp(md5(file_get_contents('2.5_day.json')) , $request[2]);
				break;

			case 10:
				echo strcmp(md5(file_get_contents('4.5_day.json')) , $request[2]);
				break;

			case 11:
				echo strcmp(md5(file_get_contents('all_week.json')) , $request[2]);
				break;

			case 12:
				echo strcmp(md5(file_get_contents('significant_week.json')) , $request[2]);
				break;

			case 13:
				echo strcmp(md5(file_get_contents('1.0_week.json')) , $request[2]);
				break;

			case 14:
				echo strcmp(md5(file_get_contents('2.5_week.json')) , $request[2]);
				break;

			case 15:
				echo strcmp(md5(file_get_contents('4.5_week.json')) , $request[2]);
				break;

			default:
				echo 'invalid request';
				break;
			}
		}
		else {
			echo 'invalid request';
		}
	}
}
else {
	echo 'invalid request';
}

?>