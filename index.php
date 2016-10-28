<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title></title>
</head>
<body>

<form name="getName">
<input type="text" name="name" placeholder="&#35831;&#22312;&#27492;&#22788;&#22635;&#20889;&#22995;&#21517;"> <br>
<input type="button" value="&#25552;&#20132;" onclick="checkLength()">
</form> 




<script>

function checkLength(){


	var str = document.getElementsByName("name")[0].value;

	if ( str.length <= 0){
		alert("请填写您的姓名");
	}
	else if (str.length > 12) {
		alert("请输入小于12个字符（4个汉字）");

	}
	else{
		document.getElementsByName("getName")[0].action = "createImage.php";
		document.getElementsByName("getName")[0].submit();
	}
}
	
</script>


<!-- <img src="http://localhost/app/Image%20Generator/createImage.php"> -->
</body>
</html>