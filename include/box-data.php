<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!---- Bulma ---->
	<link rel="stylesheet" href="/css/bulma.min.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Style -->
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
	<title>Navbar</title>
	<style>
		.covid-hero {
  			color: white;
  			background-image: url("../img/corona-wall.jpg");
  			background-position: center;
  			background-repeat: no-repeat;
		}

		.eng {
			font-family: 'Noto Sans', sans-serif;
		}

		.th {
			font-family: 'Kanit', sans-serif;
		}
	</style>
</head>
<body>
<?php
    $urlWithoutProtocol = "http://covid19.ddc.moph.go.th/th";
    $request         = "";
    $isRequestHeader = false;
 
    $exHeaderInfoArr   = array();
    $exHeaderInfoArr[] = "Content-type: text/xml";
    $exHeaderInfoArr[] = "Authorization: "."Basic ".base64_encode("authen_user:authen_pwd");
 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlWithoutProtocol);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
    curl_setopt($ch, CURLOPT_HEADER, (($isRequestHeader) ? 1 : 0));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    if( is_array($exHeaderInfo) && !empty($exHeaderInfo) )
    {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $exHeaderInfo);
    }
    $response = curl_exec($ch);
    curl_close($ch);
 
    echo $response;
?>
</body>
</html>