<!DOCTYPE html>

<html>
<header>
  <title>TSSR liévin</title>
  <link rel="stylesheet" href="style.css" />
  <meta charset="utf-8" />


</header>

<body>
  <p>
    <image src="logotssr.jpg" />
  </p>

  <!-- Button to open the modal login form -->
  <button onclick="document.getElementById('id01').style.display='block'">Se connecter</button>

  <!-- The Modal -->
  <div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">Close</span>

    <!-- Modal Content -->
    <form class="modal-content animate" action="/action_page.php">
      <div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="uname"><b>Email</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="unchecked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'"
          class="cancelbtn">Cancel</button>
        <span class="psw"><a href="#">Forgot password?</a></span>
      </div>
    </form>
    <!-- <?php
            $servername = 'sql212.epizy.com ';
			$dbname = 'epiz_27834536_tssr';
            $username = 'epiz_27834536';
            $password = '8rUbmnkI0iAiOja';
            
            $user = $_POST["user"];
            $pswd = $_POST["mail"];
            
            try{
                //On se connecte à la BDD
                $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                //On insère les données reçues si les champs sont remplis
                if(!empty($user)  && !empty($pswd)){
                    $sth = $dbco->prepare("
                        INSERT INTO form(prenom, mail, age)
                        VALUES(:prenom, :mail, :age)");
                    $sth->bindParam(':prenom',$user);
                    $sth->bindParam(':mail',$pswd);
                    $sth->execute();
                }
                
                //On récupère les infos de la table 
                $sth = $dbco->prepare("SELECT user, pswd, FROM site");
                $sth->execute();
                }
            }   
            catch(PDOException $e){
                echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
            }
			?> -->
  </div>
  <!-- Button to open the modal -->
  <button onclick="document.getElementById('id02').style.display='block'">S'inscrire</button>

  <!-- The Modal (contains the Sign Up form) -->
  <div id="id02" class="modal">
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">Close</span>
    <form class="modal-content" action="/action_page.php">
      <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

        <label>
          <input type="checkbox" checked="unchecked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
          <button type="button" onclick="document.getElementById('id02').style.display='none'"
            class="cancelbtn">Cancel</button>
          <button type="submit" class="signup"><p>Sign Up</p>

          <?php
            $servername = 'sql212.epizy.com ';
			      $dbname = 'epiz_27834536_tssr';
            $username = 'epiz_27834536';
            $password = '8rUbmnkI0iAiOja';
            
            $user = $_POST["user"];
            $pswd = $_POST["mail"];
            
            try{
                //On se connecte à la BDD
                $dbco = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            
                //On insère les données reçues si les champs sont remplis
                if(!empty($user)  && !empty($pswd)){
                    $sth = $dbco->prepare('
                        INSERT $dbname (prenom, mail,)
                        VALUES(:prenom, :mail,)';);
                    $sth->bindParam(':prenom',$user);
                    $sth->bindParam(':mail',$pswd);
                    $sth->execute();
                }
                
                //On récupère les infos de la table 
                $sth = $dbco->prepare('SELECT user, pswd, FROM $dbname');
                $sth->execute();
                }
            }   
            catch(PDOException $e){
                echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
            }
			?>
          </button>
        </div>
      </div>
    </form>
    <?php
    ?>
  </div>

  <nav>
    <ul>
      <li class="deroulant"><a href="#">Cours Complets &ensp;</a>
        <ul class="sous">
          <li><a href="http://netshtssr.rf.gd">netsh</a></li>
        </ul>
      </li>
      <li class="dderoulant"><a href="#">Test ▼</a>
        <ul class="sous">
          <li><a href="#">TSSR</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="http://tssrlievin.epizy.com">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://netshtssr.rf.gd">Netsh</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="#">Action 1</a>
            <a class="dropdown-item" href="#">Action 2</a>
          </div>
        </li>
      </ul>
    </div>
  </nav> -->
</body>

</html>