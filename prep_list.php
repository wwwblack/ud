<?php 
require("bd.php");
mysql_query("SET NAMES 'utf8'");

$resultat = mysql_query("SELECT * FROM users WHERE id='$_GET[id_user]'");
$array = mysql_fetch_array($resultat);

$fio = $row['fio']; 
?>
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>������ </title>
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
			<h1>������-����� �� ����������������</h1>
		</div>
		
		<div id="menu">
			<nav role="navigation">
				<ul>
					<li><a href="index.html"><div>�������</div></a></li>
					<li><a><div>����������</div></a>
						<div>
							<ul>
								<li><a href="info.php">� ������-�������</a></li>
								<li><a href="prep_list.php">������ ��������������</a></li>
							</ul>
						</div>
					</li>
					<li><a ><div>������� �����</div></a>
						<div>
							<ul>
								<li><a href="list_group.php">������ �������� �����</li>
								<li><a href="#">����� �����</a></li>
							</ul>
						</div>
					
					</li>
					<li><a href="anketa.php"><div>������ ������</div></a></li>
					<li><a href="contacts.php"><div>��������</div></a></li>
				</ul>
			</nav>
		</div>
			 <h1>������ ��������������</h1>
		
	
		<div id="content">
		<div id="form_group" method="post" action="/">
			<table class="table table-striped table-bordered table-hover">
				<tr>
				<!-- ������ ������� ����� ����� �� ���� � ������������ ���������� ������� � ���������� ����������� �������  � ��������������, ������ �� ������ ��������� � �� ������� -->
					<td><a href="prep_card.php"><?php print $fio;?>������� �.�.</a></td>
					<td>�����</td>
					
				</tr>
				<tr>
				
					<td>������� �.�.</td>
					<td>�����</td>
					
				</tr>
				
			</table>
		
					</div>
			 
			</div>
		
			
			
			<div id="footer" style="margin-top:40%">Copyright � 1999 � 2015 �������� ���������� � ������������ ����.<br> ��������������� ����������� �����������
			</div>
		</div>
	</div>
	
</body>
</html>