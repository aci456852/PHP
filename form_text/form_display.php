<!DOCTYPE html>
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
	<form action="form_handler.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>
				姓名
			</td>
			<td>
				<input type="text" name="name"></input>
			</td>
		</tr>
		<tr>
			<td>性别</td>
			<td>
				<input type="radio" name="sex" value="男">男</input>
				<input type="radio" name="sex" value="女">女</input>
			</td>
		</tr>
		<tr>
			<td>出生年月</td>
			<td>
				<select name="year">
					<option value=""></option>
					<option value="1998">1998</option>
					<option value="1999">1999</option>
					<option value="2000">2000</option>
				</select>
			</td>
		</tr>
		<tr>
		<td>爱好</td>
		<td>
			<input type="checkbox" name="habit[]" value="看电影">看电影</input>
			<input type="checkbox" name="habit[]" value="听音乐">听音乐</input>
			<input type="checkbox" name="habit[]" value="演奏乐器">演奏乐器</input>
			<input type="checkbox" name="habit[]" value="打篮球">打篮球</input>
			<input type="checkbox" name="habit[]" value="看书">看书</input>
			<input type="checkbox" name="habit[]" value="上网">上网</input>
		</td>
		</tr>
		<tr>
			<td>地址</td>
			<td>
				<input type="text" name="address"></input>
			</td>
		</tr>
		<tr>
			<td>电话</td>
			<td>
				<input type="text" name="phonenum"></input>
			</td>
		</tr>
		<tr>
			<td>qq</td>
			<td>
				<input type="text" name="qq"></input>
			</td>
		</tr>
		<tr>
			<td>自我评价</td>
			<td>
				<textarea name="comment" cols="30" rows="5"></textarea>
			</td>
		</tr>		
		<tr>
			<td>头像</td>
			<td>
				<input type="file" name="avatar"></input>
			</td>
		</tr>
		<tr>
			<td>提交</td>
			<td>
				<input type="submit" name="submit1" value="提交"></input>
				<input type="reset" name="submit2" value="重置"></input>
			</td>
		</tr>
	</table>	
	</form>
</body>
</html>