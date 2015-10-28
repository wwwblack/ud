﻿<?php
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
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<!--[if lt IE 9]><script type="text/javascript" src="/js/jquery.js"></script>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<h1>Мастер классы по программированию</h1>
		</div>
		
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
			 <h1>Высшая ступень 2016</h1> <!-- БЕРЕМ ИЗ БАЗЫ-->
		<div id="content">
			<div id="view_task">	
				<div id="">
					<? $view = listGroupRating();	?>
					<table class="table">
						<p>Кленина Надежда Викторовна <!-- БЕРЕМ ИЗ БАЗЫ-->
						<input class="button_green" type="submit" style="width:150px" value="Сменить"/> <!-- Только для админа-->
						<!-- только для админа и препода--><input class="button_red" type="submit" style="width:200px;float:right" onClick="location.href='prep_add_task.php'"  value="Добавить новое занятие"/><br></p>
				</div>
					<form class="form-horizontal" method="post" action="">		

				<table id="admin_table_list_group" border="2px" class="table table-striped table-bordered table-hover">
					<tr >
						<td width="200px" rowspan="2"></td>
						<th colspan="4">Сентябрь</th>
						<th colspan="5">Октябрь</th>
						<th colspan="4">Ноябрь</th>
						<th colspan="4">Декабрь</th>
					</tr>
					<tr>
						<td ><a href="view_task.php">7</td>
						<td>14</td>
						<td>21</td>
						<td>28</td>
								
						
					</tr>
					<?php foreach ($view as $studne):?>
					<tr>
					<!-- Сентябрь-->
						<td><?=$studne['fio']?></td>
						<td><?=$studne['email']?></td>
						<td></td>
						<td></td>
						<td></td>
					<!-- Октябрь-->	
					
					</tr>
					<?php endforeach; ?>
					
				</table>	</form>
					<input class="button_green" type="submit" style="width:220px" value="Рассылка группе"/>	
					<input class="button_green" type="submit" style="width:220px" value="плюсик"/>	
					<input class="button_green" type="submit" style="width:200px"  onClick="location.href='perem_stud.php'" value="Переместить группу"/>
					<!-- <input class="button_red" type="submit" style="width:200px" value="Расформировать группу"/> -->
					
			</div>
		</div>
		
		<div id="footer">Copyright © 1999 – 2015 Институт математики и компьютерных наук.<br> Дальневосточный Федеральный Университет
		</div>
		
	</div>
</body>
</html>