<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>Добавить задание</title>
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
	 <h1 align="justify">Создание новой группы</h1>
	 <div>
		<form id="add_group">
			<table>
			<tr>
				<tr>
					<td><label>Выберите ступень</label>
						<select>
								  <option>Подготовительная</option>
								  <option>Начальная</option>
								  <option>Высшая</option>
								</select>
					</td>
				</tr>
				<tr>
					<td><label>Выберите год</label><!--Берем из базы -->
						<select>
								  <option>2015</option>
								  <option>2016</option>
								  <option>2017</option>
								</select>
					</td>
				</tr>	
				<tr>
					<td><label>Выберите преподавателя</label><!--Берем из базы -->
						<select>
								  <option>Кленина Надежда Викторовна</option>
								  <option>Малявин Никита Батькович</option>
								</select>
					</td>
					</tr>
				
							
			</tr>
		</table>
				<input class="button_green" type="submit" style="width:200px;margin-left:15%" value="Создать"/>
	<input class="button_red" type="reset" style="width:200px;margin-left:15%"  onClick="location.href='list_group.php" value="Отменить"/>	
		
		</form>
		</div>
	</div>
	
	
		
	<div id="footer">Copyright © 1999 – 2015 Институт математики и компьютерных наук.<br> Дальневосточный Федеральный Университет
		</div>
	</div>
</body>
</html>