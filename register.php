<?php 
   include("db.php");
      $error ="";
      
   if(isset($_POST['registrar'])){
      $nome = $_POST['nome'];
      $nomes = $_POST['sobrenome'];
      $email = $_POST['email'];
      $password = $_POST['pass'];
      $cpass = $_POST['cpass'];
      $number = $_POST['numero de telefone'];
      $notify = $_POST['notify'];

   $verify = mysqli_query(link, query)("SELECT * FROM users WHERE nome '$nome'");
   $verify = mysqli_query("SELECT * FROM users WHERE sobrenome '$sobrenome'");
   
   if(strlen($nome)<3){
      $error = "<h2 style= 'color: red'> nome muito pequeno</h2>";
   }else if (strlen($sobrenome) < 8){
      $error = "<h2 style= 'color: red'> sobrenome muito pequeno</h2>";
   }else if (strlen($email) < 8){
      $error = "<h2 style= 'color: red'> email muito pequeno</h2>";
   }else if (strlen($pass) < 8){
      $error = "<h2 style= 'color: red'> senha muito pequeno</h2>";
   }else if($pass != $cpass){
      $error = "<h2 style='color: red'>confirmação de senha não condiz</h2>";
   }else if(strlen($number) < 8){
      $error = "<h2 style= 'color: red'> numero de telefone muito pequeno</h2>";
   }else if(mysqli_num_rows($verify) > 0){
      $error = "<h2 style= 'color: red'> email já registrado!</h2>";
   }else 
      mysqli_query ("INSERT INTO `users` ( `nome`,`sobrenome`,`email`,`pass`,`numero de telefone`,`notify`,`active`) VALUES('$nome','$sobrenome','$email','$pass','$notify','false')"); 
       $error = "<h2 style = 'color: green'> Registrado com sucesso, Entre no seu email para verifica-lo!</h2>";
   }
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Register - renegado47</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include("header.php"); ?>
    <center>
           <div color= black:;?>
           <h1>REGISTRA-SE</h1>
              <div class="painel">
               <?php echo $error;?>
                 <form method="post">
                      <table width="50%">
                      <tr>
                      <td style="float: right;">NOME:</td>
                   <td><input type="name" name="nome"></td>
                </tr>
                   <tr>
                      <td style="float: right;">SOBRENOME:</td>
                   <td><input type="name" name="sname"></td>
                </tr>
                   <tr>
                      <td style="float: right;">EMAIL:</td>
                   <td><input type="email" name="email"></td>
                </tr>
                   <tr>
                      <td style="float: right;">SENHA:</td>
                   <td><input type="password" name="pass"></td>
                </tr>
                   <tr>
                      <td style="float: right;">CONFIRME A SENHA:</td>
                   <td><input type="password" name="cpass"></td>
                </tr>
                   <tr>
                      <td style="float: right;">NUMERO DO TELEFONE:</td>
                   <td><input type="number telephone" name="numero de telefone"></td>
                </tr>
            </table>
               <input type="submit" name="Registrar" Value="Registrar" style="width: 50%">
            </form>
         </div>
      </center>
   </body>
</html>