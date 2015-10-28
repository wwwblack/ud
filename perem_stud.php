<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>Перемещение ЮД</title>
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
		
		
			 <h1>ПЕремещение ЮД</h1>
			 	<div id="main">
			
		     <div id="content">
			 <!-- Форма группы-->
				<div id="perem_stud">	
				
				<form  method="post" action="">
				<p>Перемещение ЮД</p>
					<label>Из <select>
								  <option>вс 2016</option>
								 
								</select>	
							B <select>
								  <option>вс 2017</option>
								  
								</select>
								</label>
				
										<table id="perem_table" class="table table-striped table-bordered table-hover" >
								  <tr>
								  <tr>
										<td><label>Петров Егор Петрович</label></td>
										<td><label>80%</label></td>
										<td><input name="" type="checkbox" ><br></td>
									</tr>
									<tr>
										<td><label>Петров Егор Петрович</label></td>
										<td><label>80%</label></td>
										<td><input name="" type="checkbox" ><br></td>
									</tr>
									<tr>
										<td><label>Петров Егор Петрович</label></td>
										<td><label>80%</label></td>
										<td><input name="" type="checkbox" ><br></td>
									</tr>
									<tr>
										<td><label>Петров Егор Петрович</label></td>
										<td><label>80%</label></td>
										<td><input name="" type="checkbox" ><br></td>
									</tr>
									<tr>
										<td><label>Петров Егор Петрович</label></td>
										<td><label>80%</label></td>
										<td><input name="" type="checkbox" ><br></td>
									</tr>
									<tr>
										<td><label>Петров Егор Петрович</label></td>
										<td><label>80%</label></td>
										<td><input name="" type="checkbox" ><br></td>
									</tr>
									</tr>
								</table>	
					<textarea rows="3"  class="textarea_add_task" style="resize:none" placeholder="Причина перевода"></textarea>	
									<input class="button_green" type="submit" style="width:150px" value="Переместить"/>
									<input class="button_red" type="submit" style="width:150px;float:right;" value="Отменить"/>	
		
				
				</form>
		
			</div>
		</div>
	<div id="footer">Copyright © 1999 – 2015 Институт математики и компьютерных наук.<br> Дальневосточный Федеральный Университет
		</div>
	</div>
</body>
</html>