Getting started

Install Manually

1) Download InputParam
2) Unzip it and copy the directory into your PHP project directory.

Include it in your project:
	
	require "lib/InputParam.php";
	
	
Available Methods

	//  First Check GET Method Then Check POST Method
	$paramValue = InputParam::getPost('paramName')
	
	//  First Check Post Method Then Check POST Method
	$paramValue = InputParam::postGet('paramName')
	
	// Get Param Only Get Parameters
	$paramValue = InputParam::onlyGet('paramName')
	
	
	// Get Param Only Post Parameters
	$paramValue = InputParam::onlyPost('paramName')
	
	// Check Param is set Get Method then Check Post Methods 
	$boolean = InputParam::issetGetPost('paramName')
	
	
	// Check Param is set POST Method then Check GET Methods 
	$boolean = InputParam::issetPostGet('paramName')
	
	// Get All Parameters by GET Method
	$arrGet = InputParam::allGetParamInArray()
	
	// Get All Parameters by POST Method
	$arrPost = InputParam::allPostParamInArray()
	
	
	
	
	
	
	
	
	