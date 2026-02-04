<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ประพิณพร สร้อยสุวรรณ(กลอยใจ)</title>
</head>

<body>
<h1>ประพิณพร สร้อยสุวรรณ(กลอยใจ)</h1>

<?php
	echo $_SESSION['name'] ."ประพิณพร สร้อยสุวรรณ";
	echo $_SESSION['nickname'] = "กลอยใจ";
	echo $_SESSION['p1'] = "โซฟา";
	echo $_SESSION['p2'] = "ห่วงยาง";
์?>

</body>
</html>