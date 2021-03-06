<html>
<head>
<title> Statment if</title>
</head>
<body>
<?php echo"<form action=\"$php_selt\" method=\"post\">";
$nilai=$_POST[' nilai1 '];
echo"berapa nilai PHPmu? :
<input name=\"nilai1\" value=\"$nilai1\" size=\"3\" type=\"text\"
value=\"$nilai1\">
<input name=\"cek\" type=\"submit\" value=\"cek\"> </form>";
if ($_POST['cek'])
{ echo"<br><h1>";
    if($nilai1=="A")
	    { echo"anda belum menentukan nilai...!"; }
	   elseif(!is_numeric($nilai1))
	   { echo" Ini bukan nilai angka"; }
	   else
	   {
	       if($nilai1<=30)
		   { echo"anda mendapat nilai huruf <b> E </b>"; }
		   elseif($nilai1<=50)
		   { echo"anda mendapat nilai huruf <b> D </b>"; }
		   elseif($nilai1<=70)
		   { echo"anda mendapat nilai huruf <b> C </b>"; }
		   elseif($nilai1<=85)
		   { echo"anda mendapat nilai huruf <b> AB </b>"; }
		   else
		   {echo"anda mendapat nilai huruf <b> A </b>"; }
		   
		 } 
    }
	?>
<div class="pernyataan if" >
 <h2 class="judul"> berapa nilai PHPMU?: </h2>
 <form method="post" action="pernyataanif.php">
 <input type="text" name="nilai1" placeholder="nilai1" />
 <input type="submit" name="hitung" value="cek" class="tombol">
 <form method="post" action="index.php"></h2>
 </form>
 <?php if(isset($_POST['nilai1'])){?>
 <input type="text" value="<?php echo $cek; ?>" class="nilai">
 <?php }else{ ?>
 <input type="text" value="" class="nilai">
 <?php } ?>
 </form>
 </div>
 </body>
 </html>