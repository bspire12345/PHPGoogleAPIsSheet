<?php
	// ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);
	// error_reporting(E_ALL);

	require __DIR__ . '/vendor/autoload.php';

	/*Get Data From POST Http Request*/
	$datas = file_get_contents('php://input');
	/*Decode Json From LINE Data Body*/
	$deCode = json_decode($datas,true);

	file_put_contents('log.txt', file_get_contents('php://input') . PHP_EOL, FILE_APPEND);

	$replyToken = $deCode['events'][0]['replyToken'];
	$userId = $deCode['events'][0]['source']['userId'];
	$type = $deCode['events'][0]['type'];

	$token = "LINE-ACCESS-TOKEN";https://www.dropbox.com/s/89tqjjzgcqaga5j/AppLineNT_Setup.rar?dl=0

	$LINEProfileDatas['url'] = "https://api.line.me/v2/bot/profile/".$userId;
  	$LINEProfileDatas['token'] = $token;

  	$resultsLineProfile = getLINEProfile($LINEProfileDatas);

  	$LINEUserProfile = json_decode($resultsLineProfile['message'],true);
  	$displayName = $LINEUserProfile['displayName'];

	/*
	 * We need to get a Google_Client object first to handle auth and api calls, etc.
	 */
	$client = new \Google_Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes(\Google_Service_Sheets::SPREADSHEETS);
    $client->setAuthConfig(__DIR__.'/amiable-octane-272311-e2e44b0f4852.json');{
  "type": "service_account",
  "project_id": "have-smoking",
  "private_key_id": "e5050300fbcb193ddf5403deb783e1e230a10e96",
  "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQC+6YD1d5xsuzB0\nDjGDD18VV95XUbE2lngwx9TYHyD+bhb1+jJ/fvyqWQh68Fi0/bV3miaqyVXQRnYb\nIugLkBhmR60LXqw3nncthZk0WBtBLBTYQ72cDVnTsbMTamzsQUnLXZ4/g4htUa4r\nfeq42LFOYOl6hFLxjZYA9R06wyIVh/MGNGduHsJHf0zL1YN8uPF0ICWnIE0rPaS/\n88JF+0AWf/UzJ4vtjP2XL5RkwwflrcvtJ6QD4MDXbUZ6iHcCcFMDJSZCRGXqVmxF\nD9Aoa+ZOgTY+pahUaT/vn+gfQ6/DYIsbAUcxYaOWKjTE3uDU3MirYqPCE2nbZcTX\nfmP9RrTVAgMBAAECggEADUvtF+ubQPVuo/6jEyo8aJukmDdP3Onw+BDK8byFS0M2\npS4mWzvodCLcVNetjfmHrItXexinuehWbIBrYfbIxELkugB/hSYrzcdayssCJvFf\niEp7h8VkRrq/KrCEYpYPgjMEhQ7vrxF7zHqqIPKysq9MQ6S4tCs00d9AiGmz04T0\nIUCbC5hsZyOzboESFIPCEHZmnGNHS2YdCPuUYq3AyYIXeuHL071hSP+LW1mhlE6B\nAk9dUPeC97HyPe8aVlASDsm3PZZoE0KbcT+6lfSzCQhhPyB7CcM1fyxJLUMsKRdX\n09LohWLDqt05UImn9a96tI2lxE0SVDs58ZtTLWWHgQKBgQDpBN4TPvcdrmYZhDtH\nHz+QWAc2k3RdTNgf02IMetKJr4hq4ZFQgF9UY4RNnw6Z6XjMokkk7jDgbu9tOcmR\nRbsyVRgT/po/6dsrZxMuFG+Lh7JoUOICGJtuJjO2NhA+RSiarO44aIRGobsg+33c\ne/faPXJpCOVatUtKEN+0utVbFQKBgQDRvYuXyIyRaddL47cH3WKTi7yOym5KEk7y\n35Q9yQUg5JqqCUcczVMReH6ybvElRkM5oZyW5vpVRxkKFOVbRJtOyimPmOfVM7ug\nqxuveNaxqtN/+GEu0KPE7ALgMUAmogAjoFA6Jl7VFOnIAEmvjjwJmc4cm8zpo5cs\nvjEppxNiwQKBgQCACritArBvkuFvrAWWs0kOXBC6oJQUoKEx+8mo6eS+28GuWXys\nK542lOiiboBreqtyZsqijHA3Iz5VWqe0OAkBQ1kTw5em/y37z4vuijQxC8OxJqDK\nXhMql7taqKKMVRxWwie0v1nQJhbZrNggS86KEbHInabKDUztyg/jE7chcQKBgQCn\naas9uSdyflAKVDXpQi2H5fbY5v3Hg/ueYxW5h3Xffnlxlbw8YiuW+13t4R38iavp\nGXWbAbz5SqnS4UD9a7Kn3jf0VbFe/U8bfNi5ZDPCVr9BGym/K2w9J8FX4Bf7fj2s\nMi83ax8w5+N+77PhPB/x7eGV9kpGh3yIiztEqwaPQQKBgQC6JJ9CB8UEJoIX6fyj\nj8WhymE51krVcwV2/fcz1am8bfAu+kxR3QvjHRHySGqED2lhq0LDv4kAGI7vBMb8\nPZ5X5mcVy2CDP8Ln8L6jewoOo65wZz1BF6eHj474wp0PuYvYXBVUYqK0ktGeDzej\ncq+SGpEPWDU8onv3ofKcC+CzyQ==\n-----END PRIVATE KEY-----\n",
  "client_email": "have-smoking@have-smoking.iam.gserviceaccount.com",
  "client_id": "108305498461763240173",
  "auth_uri": "https://accounts.google.com/o/oauth2/auth",
  "token_uri": "https://oauth2.googleapis.com/token",
  "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
  "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/have-smoking%40have-smoking.iam.gserviceaccount.com"
}

    $client->setAccessType('offline');
    // $client->setPrompt('select_account consent');

    $service = new \Google_Service_Sheets($client);

    $spreadsheetId = "GOOGLE-SHEETS-ID";/17mrGhER7mwVUfJc1QLJyBSCFaGm9fMglZbAgNbIXRBw

    // updateData($spreadsheetId,$service);
    insertData($spreadsheetId,$service,$displayName);

	function insertData($spreadsheetId,$service,$displayName)
    {
    	// $range = 'congress!D2:F1000000';
	    //INSERT DATA
	    $range = 'a2';
	    $values = [
	    	[$displayName],
	    ];
	    $body = new Google_Service_Sheets_ValueRange([
	    	'values' => $values
	    ]);
	    $params = [
	    	'valueInputOption' => 'RAW'
	    ];
	    $insert = [
	    	'insertDataOption' => 'INSERT_ROWS'
	    ];
	    $result = $service->spreadsheets_values->append(
	    	$spreadsheetId,
	    	$range,
	    	$body,
	    	$params,
	    	$insert
	    );
    }

    function updateData($spreadsheetId,$service)
    {
    	$range = 'a2:b2';
    	$values = [
	    	["Test","Test"],
	    ];
	    $body = new Google_Service_Sheets_ValueRange([
	    	'values' => $values
	    ]);
    	$params = [
	    	'valueInputOption' => 'RAW'
	    ];
	    $result = $service->spreadsheets_values->update(
	    	$spreadsheetId,
	    	$range,
	    	$body,
	    	$params
	    );
    }

    function getData($spreadsheetId,$service)
    {
    	// GET DATA
	    $range = 'congress!D2:F1000000';
		$response = $service->spreadsheets_values->get($spreadsheetId, $range);
		$values = $response->getValues();

		if(empty($values)){
			print "No Data Found.\n";
		}else{
			foreach ($values as $row) {
				echo $row[0]."<br/>";
			}
		}
    }

    function getLINEProfile($datas)
	{
		$datasReturn = [];

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $datas['url'],
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "Authorization: Bearer ".$datas['token'],
		    "Postman-Token: 32d99c7d-9f6e-4413-a4d2-fa0a9f1ecf6d",
		    "cache-control: no-cache"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
            $datasReturn['result'] = 'E';
            $datasReturn['message'] = $err;
        } else {
            if($response == "{}"){
                $datasReturn['result'] = 'S';
                $datasReturn['message'] = 'Success';
            }else{
                $datasReturn['result'] = 'E';
                $datasReturn['message'] = $response;
            }
        }

        return $datasReturn;
	}

    
    


	

