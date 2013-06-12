<?php

	define("ACTIVECAMPAIGN_URL", "");
	define("ACTIVECAMPAIGN_API_KEY", "");
	require_once("../../activecampaign-api-php/includes/ActiveCampaign.class.php");

	$listid = 1;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$ac = new ActiveCampaign(ACTIVECAMPAIGN_URL, ACTIVECAMPAIGN_API_KEY);

		$_POST["first_name"] = "";
		$_POST["last_name"] = "";
		$_POST["p"] = array($listid => $listid);
		$_POST["status"] = array($listid => 1);
		$_POST["instantresponders"] = array($listid => 1);

		// Need to add a custom field value? Include it below.
		//$_POST["field"] = array("%PERS_1%,0" => "Custom field value");

		$response = $ac->api("subscriber/add", $_POST);
$ac->dbg($response);

		// do something else here, like update a DIV below with the above result message?
		// try outputting something like $response->result_message
		exit();

	}

?>

<html>

<head>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>

</head>

<body>

	<div id="form_result_message"></div>

	<form id="subscribe_form">
		<input type="email" name="email" />
		<input type="button" value="Subscribe!" />
	</form>

	<script type="text/javascript">

		var $j = jQuery.noConflict();

		$j(document).ready(function() {

			$j('#subscribe_form input[type*="button"]').click(function() {

				var form_data = {};
				$j('#subscribe_form').each(function() {
					form_data = $j(this).serialize();
				});

				var geturl;
				geturl = $j.ajax({
					url: '', // the URL to this page.
					type: 'POST',
					//dataType: 'json',
					data: form_data,
					error: function(jqXHR, textStatus, errorThrown) {
						console.log('Error: ' + textStatus);
					},
					success: function(data) {
						$j('#form_result_message').html(data.message);
					}
				});

			});

		});

	</script>

</body>

</html>