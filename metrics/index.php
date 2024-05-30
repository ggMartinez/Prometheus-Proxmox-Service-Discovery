<?php 
	
	$fileName = '/out/metrics.json';
	$filePointer = fopen($fileName, 'rb');

	header("Content-Length: " . filesize($fileName));
	header("Content-Type: application/json");
	fpassthru($filePointer);
