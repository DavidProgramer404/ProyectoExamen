<?php



if(isset($_POST['perfil'])){

   $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
   $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
   $clave = mysqli_real_escape_string($conexion, md5($_POST['clave']));
   $cpass = mysqli_real_escape_string($conexion, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conexion, "SELECT * FROM `user_form` WHERE correo = '$email' AND clave = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conexion, "INSERT INTO `user_form`(nombre, correo, clave, image) VALUES('$nombre', '$correo', '$clave', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:login.php');
         }else{
            $message[] = 'registeration failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>perfil</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/perfil.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Registro de perfil</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="nombre" placeholder="Ingrese nombre" class="box" required>
      <input type="email" name="correo" placeholder="Ingrese correo electrónico" class="box" required>
      <input type="password" name="clave" placeholder="Ingrese clave" class="box" required>
      <input type="password" name="cpassword" placeholder="Confirmar clave" class="box" required>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" name="submit" value="Registrate ahora" class="btn">
      <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
   </form>

</div>

</body>
</html>