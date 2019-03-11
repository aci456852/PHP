<!DOCTYPE html>
<html>
<head>
	<title>梁可爱的留言板</title>
</head>
<body>
	<?php
		$messages=array();
		if(file_exists("./message.txt")){
			$messages=file("./message.txt");
		}
	?>
	<div align="center">
		<h1>欢迎来到梁可爱的留言板</h1>
	</div>
	<div align="center">
		<?php
			foreach ($messages as $key => $message) {
				$messageArray=explode('@', $message);
		?>
		<table>
			<tr>
				<td><img src="<?= $messageArray[1] ?>" width="50px"></td>
				<td><font size="5px" color="blue"><?= $messageArray[0] ?></font></td>				
			</tr>
			<tr>
				<td><?= $messageArray[2] ?></td>
			</tr>
		</table>
		<hr width=50% />
		<?php
			}
		?>
	</div>
	<div align="center">	
		<h3>请留言</h3>
		<form action="gb_handle.php" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>昵称</td>
					<td>
						<input type="text" name="name"></input>
					</td>
				</tr>
				<tr>
					<td>头像</td>
					<td>
						<input type="file" name="avatar"></input>
					</td>
				</tr>
				<tr>
					<td>留言内容</td>
					<td>
						<textarea name="message" cols="30" rows="5"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit1" value="提交"></input>
						<input type="reset" name="submit2" value="重置"></input>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>