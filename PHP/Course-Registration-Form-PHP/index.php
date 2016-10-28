<?
$name=$_post["name"];
$usn=$_post["usn"];
$dept=$_post["dept"];
$branch=$_post["branch"];
$sem=$_post["sem"];

$sub1=$_post["1name"];
$sub2=$_post["2name"];
$sub3=$_post["3name"];
$sub4=$_post["4name"];
$sub5=$_post["5name"];
$sub6=$_post["6name"];

$mysql=mysql_connect("localhost","root","msrit");
mysql_select_db("student");
mysql_query("insert into reg values('$name','$usn','$dept','$branch','$sem','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6')");
?>
