<?php
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
                    $sth = $dbco->prepare(
                        INSERT INTO form(prenom, mail, age)
                        VALUES(:prenom, :mail, :age););
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
			?>