<?php
// -----------以下可根據需求修改參數-----------

// 要壓縮的資料夾
$the_folder = "sample_file";

// 暫時建立壓縮檔在伺服器上的檔名
$zip_file_name = "TempZip.zip";
//$zip_file_name = time().".zip";


// -----------以下為不建議修改的部份-----------
require_once("FlxZipArchive.php");

// $requestFileName: 取得request的檔名
$requestURLArray = explode("/",$_SERVER['REQUEST_URI']);
$requestLastURL = explode("?",end($requestURLArray));
$requestFileName = $requestLastURL[0];

// 伺服器有裝 zip -PHP Extension的話
if(extension_loaded('zip'))
{
	$zip = new FlxZipArchive;
	$res = $zip->open($zip_file_name, ZipArchive::CREATE);
	
	if($res === TRUE) {
		$zip->addDir($the_folder, basename($the_folder));
		$zip->close();
		
		if(file_exists($zip_file_name)){
			// push to download the zip
			header('Content-type: application/zip');
			
			header('Content-Disposition: attachment; filename="'.str_replace(".php",".zip", $requestFileName ).'"');
			header('Content-Length: ' . filesize($zip_file_name));
			readfile($zip_file_name);
			// remove zip file is exists in temp path
			unlink($zip_file_name);
		}
	}
	else {
		// 檔案存取壓縮失敗
		header('HTTP/1.1 500 Internal Server Error');
		header('X-Error-Message: UnZIP', true, 500);
	}
}
// 伺服器未有 zip -PHP Extension
else {
	// 
	header('HTTP/1.1 500 Internal Server Error');
	header('X-Error-Message: UnZIP', true, 500);
}