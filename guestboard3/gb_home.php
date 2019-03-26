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
		<h1>欢迎来到梁可爱的留言板╭(●｀∀´●)╯╰</h1>
		<h3>[注意留言只能回复一次and已回复的留言不能删除]</h3>
	</div>
	<div align="center">
		<?php
			foreach ($messages as $key => $message) {
				$messageArray=explode('@', $message);
		?>
		<table>
			<?php global $f; ?>
			<tr>
				<td><img src="<?= $messageArray[1] ?>" width="50px"></td>
				<td><font size="5px" color="blue"><?= $messageArray[0] ?></font></td>				
			</tr>
			<tr>
				<td><?= $messageArray[2] ?></td>
			</tr>
			<?php
				if(count($messageArray)>3)
				{
					$f=1;
			?>
				<tr>
					<td>回复内容：</td> <!--只能回复一次-->
					<td><?= $messageArray[3] ?></td>
				</tr>
			<?php
				}
				else{
					$f=0;
				}
			?>
			<tr>
				<?php
					if($f==0)
					{
				?>
				<td>
					<form action="index.php?route=delete" method="post">
						<input type="hidden" name="name" value="<?= $messageArray[0]?>">
						<input type="hidden" name="avatar" value="<?= $messageArray[1]?>">
						<input type="hidden" name="message" value="<?= $messageArray[2]?>">
						<input type="submit" value="删除">
					</form>
				</td>			
				<td>
					<form action="index.php?route=reply" method="post">
						<input type="hidden" name="name" value="<?= $messageArray[0]?>">
						<input type="hidden" name="avatar" value="<?= $messageArray[1]?>">
						<input type="hidden" name="message" value="<?= $messageArray[2]?>">						
						<input type="text" name="replymessage">
						<input type="submit" value="回复">				
					</form>
				</td>
				<?php
					}
				?>
			</tr>
			<tr>
				
			</tr>
		</table>
		<hr width=50% />
		<?php
			}
		?>
	</div>
	<div align="center">	
		<h3>请留言</h3>
		<form action="index.php?route=add" method="post" enctype="multipart/form-data">
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