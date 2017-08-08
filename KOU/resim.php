
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
   if( isset($_POST['yukle']) ) {
      header('Content-Type: image/jpeg');
      include('SimpleImage.php');
      $image = new SimpleImage();
      $image->load($_FILES['resim']['tmp_name']);
      $image->resizeToWidth(150);
     $image->save('Ekler/' . $_FILES['Resim']['tmp_name']);
   } else {
?>
   <form action="resim.php" method="post" enctype="multipart/form-data">
 
      <input type="file" name="resim" />
 
      <input type="submit" name="yukle" value="Yükle" />
 
   </form>
<?php
   }
?>


</body>
</html>