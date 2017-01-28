<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
header ("Locaton: localhost");
header("Content-Type: text/html; charset=utf-8");

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf8_general_ci">
	<?php
	require_once "functions/functions.php";
	?>
	<meta name="discription" content="Информационно-ознакомительный сайт по наливным полам.
	Общие положения, какие существуют методы заливки и многое другое">
	<meta name="keywords" content="наливные полы, ремонт, заливка полов, декоративныеналивные полы, уроки по заливке полов">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- стили слайдера/sluder style -->
	<link href="/bxslider/jquery.bxslider.css" rel="stylesheet" />
	<!-- jquery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<!-- slider js -->
	<script src="bxslider/jquery.bxslider.js"></script>
	<?php require_once "js/scripting.js" ?>

</head>
<body>

	

<?php require_once "blocks/header.php" ?>
<?php require_once "blocks/line.php"?>



<div id="slider" class="container">

			<ul class="bxslider">
				<li><img class= "zalupa" src="/img/12.jpg" /></li>
				<li><img src="/img/22.jpg" /></li>
				<li><img src="/img/33.jpg" /></li>
			</ul>
	</div>

<br>
<hr>

	<div id="key">Производство работ под «ключ»</div>




	<ul id="list" type="disk">
		<li><div id="word">Наливные полимерные полы</div></li><br>
		<li><div id="word">Бетонные полы</div></li><br>
		<li><div id="word">Топпинги</div></li><br>
		<li><div id="word">Устройство кровельной гидроизоляции</div></li>
	</ul>

		<div id="key">Почему выбирают <span  id="us">нас?</span></div>
<br><br>
<br><br>


<div id="hehoMenu">
	<div id="rabota"> <span style="font-size: 30px"><strong>10</strong> лет работы</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span style="font-size: 30px"><strong>3</strong> года гарантии</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span style="font-size: 30px"><strong>Довольные</strong> клиенты</span>
	</div>
</div>


</div>
<br><br>
	<div style="text-align: center; font-size: 30px">Работаем по <strong>всей</strong> Центральной России</div>
<br><br>

<div style="font-size: 30px; margin-left: 2%">Мы наносим наливные полы:</div>
<img src="/img/russia.png" align="right">
<ul id="list" type="disk" style="text-align: left">
	<li><div id="word1">по свежеуложенному бетонному основанию</div></li><br>
	<li><div id="word1">по старым разрушенным бетонным основаниям</div></li><br>
	<li><div id="word1">плитке</div></li><br>
	<li><div id="word1">на этапе укладки бетона вододисперсными компаундами</div><br>
	<li><div id="word1">в <strong>сжатые</strong> сроки</div></li>
</ul>
<div id="nas">Наши клиенты</div>


<div id="hihoMenu">
	<img src="/img/metrop.png" align="left" width="200" style="display: inline">
	<img src="/img/tvoy.jpg" align="center" width="450"  style="margin-left: 310px; display: inline">
	<img src="/img/leroy.jpg" align="right" width="250" style="display: inline">

</div>

<br><br>
<br><br>
<br><br>
<br><br>
<br><br>


<aside>

</aside>


<?php require_once "blocks/footer.php" ?>

</body>
</html>