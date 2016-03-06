<html>
<head>
	<title>php ajax</title>
	<meta charset="utf-8">
</head>
<body>
	<script>
//		function showTips(str){
//			if(str.length ==0){
//				document.getElementById("text").innerHTML="";
//				return;
//			}
//			xhr = new XMLHttpRequest();
//			xhr.onreadystatechange = function(){
//				if(xhr.readyState ==4 && xhr.status == 200)
//					document.getElementById("text").innerHTML = xhr.responseText;
//			}
//			xhr.open("GET","showTip.php?q="+str,true);
//			xhr.send();
//		}
	function showGuest(str){
					if(str.length ==0){
				document.getElementById("text").innerHTML="";
				return;
			}
			xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState ==4 && xhr.status == 200)
					document.getElementById("text").innerHTML = xhr.responseText;
			}
			xhr.open("GET","showTip.php?q="+str,true);
			xhr.send();
	}
	</script>
	<form>
		<!--<label>输入姓名：</label>
		<input type="text" onkeyup="showTips(this.value)">-->
	<label>选择嘉宾</label>
	<select name="guests" onchange="showGuest(this.value)">
		<option>选择</option>
		<option>Jack</option>
		<option>John</option>
	</select>
	</form>
	<p id="text"></p>
</body>
</html>
