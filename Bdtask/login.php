<!doctype html>
<?php 
 ob_start();
 session_start();
?>
<html lang="en">

<head>
  <title>Login With Json file</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</head>

<body>
     <?php 
     if(file_exists('class.json')){
          $string = file_get_contents("class.json");
          $json_a = json_decode($string, true);
     }
     foreach($json_a as $values)
     if(isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])){
          if(($_POST['email'] == $values['uemail']) && ($_POST['password'] == $values['upassword'])){
               $_SESSION['valid']=true;
               $_SESSION ['timeout'] = time();
               $_SESSION ['id'] ='1';

               header('Refresh: 0.01; URL = index.php');
          }
          else{
               echo"Place enter your email and password ";
          }
     }

     ?>

      
     <div class="container">
          <div class="row">
               <div class="col-md-6 d-block mx-auto">
                    <h1 class="text-center">Login Form</h1>
                    <form action="" method="post">
                         <div class="mb-3">
                              <label for="" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email" id="" placeholder="Enter Your E-mail">
                         </div>
                         <div class="mb-3">
                              <label for="" class="form-label">Password</label>
                              <input type="password" class="form-control" name="password">
                         </div>
                         <button class="btn btn-primary" name ="login">Submit</button>
                    </form>
               </div>
          </div>
     </div>

</body>

</html>