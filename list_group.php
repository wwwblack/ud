<?php
require("bd.php");
include("fun_list_group.php");
mysql_query("SET NAMES 'utf8'");
?>



<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>Список групп</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css">
	<link href="/css/bootstrap.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/jquery.leanModal.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<!--[if lt IE 9]><script type="text/javascript" src="/js/jquery.js"></script>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<h1>Мастер-класс по программированию</h1>
		</div>
		<?php
	$result_set = mysql_query("SELECT * FROM students");
						
							
								echo $result["fio"];
							
								?>
		<div id="menu">
			<nav role="navigation">
				<ul>
					<li><a href="index.html"><div>Главная</div></a></li>
					<li><a><div>Информация</div></a>
						<div>
							<ul>
								<li><a href="info.php">О мастер-классах</a></li>
								<li><a href="prep_list.php">Список преподавателей</a></li>
							</ul>
						</div>
					</li>
					<li><a ><div>Учебная часть</div></a>
						<div>
							<ul>
								<li><a href="list_group.php">Список активных групп</li>
								<li><a href="#">Архив групп</a></li>
							</ul>
						</div>
					
					</li>
					<li><a href="anketa.php"><div>Подать заявку</div></a></li>
					<li><a href="contacts.php"><div>Контакты</div></a></li>
				</ul>
			</nav>
		</div>
			 <h1>Список групп</h1>
		
	
		<div id="content">
		<div id="form_group" method="post" action="/">
		<? $view = listGroup();	?>
			<table class="table table-striped table-bordered table-hover">
				<?php foreach ($view as $studne):?>
				<tr>
				<!-- список текущих групп берем из базы с отображением количества человек и количества проведенных занятий  и преподавателей, кликая по группе переходим в ее рейтинг -->
					<td><a href="list_group_raiting.php"><?=$studne['name']?></a></td>
					<td>Кленина Н.В.</td>
					<td>7 человек</td>
					<td>8 занятий</td>
				</tr>
				<?php endforeach; ?>
				
			</table>
			
				<!-- ЭТА КНОПКА 'создать группу' ТОЛЬКО ДЛЯ АДМИНА-->
				<input class="button_green" type="submit" style="width:200px" onClick="location.href='add_group.php'" value="Создать группу"/>
				<!-- ЭТА КНОПКА 'рассылка' ТОЛЬКО ДЛЯ АДМИНА И ПРЕПОДА-->
				<input class="button_green" type="submit" style="width:200px" onClick="location.href='send_mail_all.php'" value="Общая рассылка"/>
		</div>
			 
			</div>
		
			
			
			<div id="footer" style="margin-top:40%">Copyright © 1999 – 2015 Институт математики и компьютерных наук.<br> Дальневосточный Федеральный Университет
			</div>
		</div>
	</div>
	
</body>
</html>