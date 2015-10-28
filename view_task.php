<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>Просмотр занятия</title>
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
		
				
		     <div id="content">
			  <h1>Просмотр занятия</h1>
			 <!-- Форма группы-->
				<div id="view_task">
		
					<a onclick="$('#name').slideToggle('slow');" href="javascript://">Свернуть/Развернуть занятие</a>				
				<form class="form-horizontal" method="post" action="">
					
					<div  id="name" class="NavFrame">
						
						<h1>Высшая ступень 2016</h1><br>
						
						<div style="width:auto;background-color:white;display:inline-block;margin-top:1%;padding:4px;margin-left:30%" name="name">Быстрая сортировка</div>	
						<div style="width:auto;background-color:white;display:inline-block;margin-top:1%;padding:4px" name="name" >23.07.15</div><br/>
					
						<div style="width:74.5%;background-color:#FDF5E6;margin-top:1%;height:auto;min-height:100px;margin-left:10%" >Здесь у нас появляется текст занятия</div><br>
						<input type="text"  style="width:74.5%" name="name" class="placeholder" placeholder="Название задания"/>	
						<input type="text" style="width:15%" name="name" class="placeholder" placeholder="Вес"/>
						<textarea rows="2" class="textarea_add_task" style="resize:none" placeholder="Описание задания"></textarea>
						<input type="image" src="images/delete.png"><br>
						<input type="image" src="images/add.png" style="margin-left: 45%;margin-top:10px"><br>
					</div>
				
					<table id="table_edit" border="2px" class="table table-striped table-bordered table-hover" >
					  <tr>
					  <tr>
							<td ><label>Список группы</label></td>
							<td style="width:20px;font:15px verdana"><label>Посещение</label><br></td>
							<td style="width:20px"><label>1</label><br></td>
							<td style="width:15px"><label>2</label><br></td>
							<td style="width:15px"><label>3</label><br></td>
						</tr>
						<tr>
							<td><label>Петров Егор</label></td>
							<td><input type="checkbox" ><br></td>
							<td><input name="first_name" type="text" value="<?=$first_name?>"><br></td>
							<td><input name="first_name" type="text" value="<?=$first_name?>"><br></td>
							<td><input name="first_name" type="text" value="<?=$first_name?>"><br></td>
						</tr>
						<tr>
							<td><label>Егоров Петр</label></td>
							<td><input name="first_name" type="checkbox" ><br></td>
							<td><input name="first_name" type="text" value="<?=$first_name?>"><br></td>
							<td><input name="first_name" type="text" value="<?=$first_name?>"><br></td>
							<td><input name="first_name" type="text" value="<?=$first_name?>"><br></td>
						</tr>
						<tr>
							<td><label>Левый чел</label></td>
						<td><input name="first_name" type="checkbox" ><br></td>
							<td><input name="first_name" type="text" value="<?=$first_name?>"><br></td>
							<td><input name="first_name" type="text" value="<?=$first_name?>"><br></td>
							<td><input name="first_name" type="text" value="<?=$first_name?>"><br></td>
						</tr>
						<tr>
							<td><label>Левыdsfsdfgsfgй чел</label></td>
						<td><input name="first_name" type="checkbox" ><br></td>
							<td><input name="first_name" type="text" value="<?=$first_name?>"><br></td>
							<td><input name="first_name" type="text" value="<?=$first_name?>"><br></td>
							<td><input name="first_name" type="text" value="<?=$first_name?>"><br></td>
						</tr>
						<tr>
							<td><label>Левый чел</label></td>
						<td><input name="first_name" type="checkbox" ><br></td>
							<td><input name="first_name" type="text" value="<?=$first_name?>"><br></td>
							<td><input name="first_name" type="text" value="<?=$first_name?>"><br></td>
							<td><input name="first_name" type="text" value="<?=$first_name?>"><br></td>
						</tr>
						</tr>
					</table>	
							
					<!-- возвращаемся обратно в admin_list_group_raiting с имзиенениями-->
					<div style="margin-left:60%">
					<input class="button_green" type="submit" style="width:150px" value="Принять"/>
					<input class="button_red" type="reset" style="width:150px" value="Отменить"/>
					</div>
					
				</form>
		</div>
		</div>
	<div id="footer">Copyright © 1999 – 2015 Институт математики и компьютерных наук.<br> Дальневосточный Федеральный Университет
		</div>
</body>
</html>