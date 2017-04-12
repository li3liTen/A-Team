<?php
const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myfile';

function upload_file() {
	if (empty($_FILES[InputKey])) {	//handle error
		throw new Exception("No file included");
	}

	if ($_FILES[InputKey]['error'] > 0) { //handle error
		throw new Exception("File Empty");;
	}


	if (!in_array($_FILES[InputKey]['type'], AllowedTypes)) {
		throw new Exception("Wrong Type");
	}


	$tmpFile = $_FILES[InputKey]['tmp_name'];

	//DOMAIN SPECIFIC:  eg., move the file
	$dstFile = 'images/blogposts/' . $_FILES[InputKey]['name'];

	if (!move_uploaded_file($tmpFile, $dstFile)) {
		throw new Exception("error");
	}
		
	//Clean up the temp file
	if (file_exists($tmpFile)) {
		unlink($tmp); 
	}
};

