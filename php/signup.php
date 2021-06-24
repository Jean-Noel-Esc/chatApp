<?php
 //echo "data provenant de php"; 
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

     if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
            // verif email
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){//si l'email est valide
                //verifions si l'email existe deja dans la bdd ou non
                $sql= mysqli_query($conn, "SELECT email FROM users WHERE email ='{$email}'");
            if(mysqli_num_rows($sql) > 0){ // cas ou l'email existe deja
                    echo"$email - this email already exist!";
                }else{//verif si l'user a download une photo 

                    var_dump($_FILES);
                    if(isset($_FILES['image'])){//$_FILES return an array with filename, file typa, error, file size, tmp_name
                        //cas ou l'user a download un file
                        $img_name = $_FILES['image']['name'];//recup user img name
                        $img_type = $_FILES['image']['type'];//rcup user img type
                        $tmp_name = $_FILES['image']['tmp_name'];//temporary name pour sauver et déplacer l'img uploadé
                        //recup de l'extension par explode
                        $img_explode = explode('.',$img_name);
                        $img_ext = end($img_explode);// recup de l'extension de l'img
                        $extensions = ['png', 'jpeg', 'jpg'];//extension valide dans un array
                        if(in_array($img_ext, $extensions) === true){// si l'extension de l'img de l'user match avec l'array
                            $time = time();//current time
                            //qd l'img sera dans notre folder on renomera l'img avec le current time ainsi chaque img aura un nom unique
                            //deplacement de l'img dans notre folder
                            $new_img_name = $time.$img_name; //on met le current time devant le nom de l'img
                            
                            if(move_uploaded_file($tmp_name, "images/".$new_img_name)){ //si l'img uploadé move to notre folder avc success
                            $status = "Active now";// une fois signup le status sera actif
                            $random_id = rand(time(), 10000000);// creation d'un id random pour l'user

                            // user insert en bdd
                            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                                    VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
                            if($sql2){
                                //si les datas sont insert
                                //echo"Please select an image!";
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql3) > 0){
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id']; // on utilise cette session avec unique_id dans l'autre php file
                                    //header("location: http://localhost/chatapp/users.php");
                                }
                            }else{
                                //echo $error = "There is something wrong!";
                                echo = "There is something wrong!";
                            }    
                        }    
                        }else{
                            echo"Please select an Image file - jpeg jpg png!";

                        }
                    }else{
                        echo"Please download an image";
                    }
                }

        }else{
            echo "$email - this is not a valid email!";
        }
     }else{
         echo "Tous les champs sont requis";
     }

?>