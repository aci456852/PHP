<html>
<head>
	<title>输入个人信息</title>
	<style>
	td{
		border: 1px solid #111111
	}
	</style>
</head>
<body>
	<?php
		move_uploaded_file($_FILES['avatar']['tmp_name'],$_FILES['avatar']['name']);
		$avatar_filename=$_FILES['avatar']['name'];
	?>
	<table>
		<tr>
			<td>
				姓名
			</td>
			<td>
				<?= $_POST['name'] ?>
			</td>
		</tr>
		<tr>
			<td>性别</td>
			<td>
				<?= $_POST['sex'] ?>
			</td>
		</tr>
		<tr>
			<td>出生年月</td>
			<td>
				<?= $_POST['year'] ?>
			</td>
		</tr>
		<tr>
		<td>爱好</td>
		<td>
			<?php 
				for($i=0;$i<count($_POST['habit']);$i++)
				echo $_POST['habit'][$i].' ';
			?>
		</td>
		</tr>
		<tr>
			<td>地址</td>
			<td>
				<?= $_POST['address'] ?>
			</td>
		</tr>
		<tr>
			<td>电话</td>
			<td>
				<?= $_POST['phonenum'] ?>
			</td>
		</tr>
		<tr>
			<td>qq</td>
			<td>
				<?= $_POST['qq'] ?>
			</td>
		</tr>
		<tr>
			<td>自我评价</td>
			<td>
				<?= $_POST['comment'] ?>
			</td>
		</tr>
		<tr>
			<td>头像</td>
			<td>
				<img src="<?= $avatar_filename ?>" width="50px">
			</td>
		</tr>
	</table>
</body>
</html>