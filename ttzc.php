<?PHP header("content-Type: text/html; charset=utf-8");

$username = $_GET['username'];
$userxx = $_GET['userxx'];
$password = $_GET['password'];
if($username=="")
{
echo "注册失败by迪莫乐破解司马dmlgzsOo0Oo0Oo0Oo0dmlgzsOo0Oo0Oo0Oo0"; 
exit();
}
elseif($userxx=="")
{
echo "注册失败by迪莫乐破解司马dmlgzsOo0Oo0Oo0Oo0dmlgzsOo0Oo0Oo0Oo0"; 
exit();
}
elseif($password=="dmlgzs")
{
$fileopen = fopen($username.".dmlgzsOo0Oo0Oo0Oo0","w");
fwrite($fileopen,$userxx);
fclose($fileopen);
echo "注册成功by迪莫乐破解司马dmlgzsOo0Oo0Oo0Oo0dmlgzsOo0Oo0Oo0Oo0"; 
}
else
{
echo "注册失败by迪莫乐破解司马dmlgzsOo0Oo0Oo0Oo0dmlgzsOo0Oo0Oo0Oo0"; 
exit();
}
?>
