<form action='' method='post'>
	请输入三角形层数: <input type='text' name='text'>
</form>
<?php
	//var_dump($_POST['text']);

    $n=(int)$_POST['text'];
    for($i=1;$i<=$n;$i++)
    {
    	for($k=1;$k<=$n-$i;$k++)
        	echo "&nbsp;";
    	for($j=1;$j<=2*$i-1;$j++)
        	echo "*";
    	echo "<br/>";
	}
?>