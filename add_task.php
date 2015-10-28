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
					<li><a href="/"><div>Главная</div></a></li>
					<li><a href="/blog"><div>Информация</div></a>
						<div>
							<ul>
								<li><a href="#">О мастер-классах</a></li>
								<li><a href="#">Список преподавателей</a></li>
								<li><a href="#">Расписание</a></li>
							</ul>
						</div>
					</li>
					<li><a href="/contact"><div>Учебная часть</div></a>
						<div>
							<ul>
								<li><a href="#">Список активных групп</a></li>
								<li><a href="#">Архив групп</a></li>
							</ul>
						</div>
					
					</li>
					<li><a href="anketa.php"><div>Подать заявку</div></a></li>
					<li><a href="/forum"><div>Контакты</div></a></li>
				</ul>
			</nav>
		</div>
		
					 <h1>Добавление задания</h1>
		     <div id="content">
			 <!-- Форма добавления занятия-->
				<div id="add_task" >			
				<form class="form-horizontal" method="post" action="">
					<input type="text" name="name" class="placeholder" placeholder="Тема занятий"/>	
					<input type="text" style="width:57px" name="name" class="placeholder" placeholder="Дата"/><br/>
					<textarea class="textarea_add_task" rows="10" cols="70" style="resize:none" placeholder="Здесь записывается и редактируется сам текст занятия"></textarea><br>
					<input type="text" name="name" class="placeholder" placeholder="Название задания"/>	
					<input type="text" style="width:57px" name="name" class="placeholder" placeholder="Вес"/>
		
					<textarea rows="5" class="textarea_add_task" style="resize:none" placeholder="Описание задания"></textarea>
							<input type="image" src="images/delete.png"><br>
							<input type="image" src="images/add.png" style="margin-left: 45%;margin-top:10px"><br>
					<input class="button_green" type="submit" style="width:150px" value="Принять"/>
					<input class="button_red" type="submit" style="width:150px;float:right;" value="Отменить"/>
					<input type="hidden" name="action" value="reg" />
				</form>
		</div>
			</div>
		</div>
	<div id="footer">Copyright © 1999 – 2015 Институт математики и компьютерных наук.<br> Дальневосточный Федеральный Университет
		</div>
	</div>
</body>
</html>