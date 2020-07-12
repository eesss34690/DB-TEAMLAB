<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>大學校系導覽</title>
<?php
<script type="text/javascript">
	function getData(pagename) {
		header("Location: area.htm");
	}
</script>
?>
</head>
<body>


	<div>
		<span onclick="getData('area.htm');", span style="border:1px red solid;font-size:22px;background-color:yellow;">各地區大學</span>
		<span style="border:1px red solid;font-size:22px;background-color:yellow;">18學群</span>
		<span style="border:1px red solid;font-size:22px;background-color:yellow;">落點分析</span>
		<span style="border:1px red solid;font-size:22px;background-color:yellow;">更新資料</span>
	</div>
	<hr/>
	<div id = "content"></div>
</body>
</html>