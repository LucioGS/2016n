<?php

	function datos_recurso($ficha){

		$url = "https://www.omdbapi.com/?apikey=fe8a7565&i=$ficha";
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
		$data = curl_exec($curl);
		curl_close($curl);
		$data_convertido = json_decode($data, true);
		return $data_convertido;

	}



?>