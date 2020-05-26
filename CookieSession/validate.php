<?php
    $host = "localhost";
    $user = "luffy";
    $pswd = "Luffy199618";
    $database = "myinfo"; 
    $connect = mysqli_connect($host,$user,$pswd,$database);
    if($connect == FALSE)
    {
        die("Cannot connect".mysqli_error());
    }
    session_start();
    $date = date("Y-m-d h:i:s");
    
    // echo isset($_POST);
    // echo $_POST["user"];
    if(isset($_POST))
    {
        if($_POST["type"] == "login")
        {
            $sql = "SELECT Password FROM user WHERE Username='{$_POST["user"]}'";
            $result = $connect->query($sql);
            $rows = mysqli_num_rows($result);
            
            if($rows!=0)
            {
                $password = mysqli_fetch_array($result,MYSQLI_NUM)[0];
                if($_POST["pswd"]==$password)
                {
                    $resp = array(
                        "user"=>$_POST["user"],
                        "code"=>"666",
                        "state"=>"Successful"
                    );
                    $_SESSION["pass"] = TRUE;
                    $_SESSION["expires"] = time() + 60;
                    //echo $_SESSION["pass"];
                    //echo $_SESSION["expires"];
                    //echo $_COOKIE["user"];
                    //echo $_COOKIE["pswd"];
                    echo json_encode($resp);
                }
                else
                {
                    $resp = array(
                        "user"=>$_POST["user"],
                        "code"=>"233",
                        "state"=>"Failed"
                    );
                    echo json_encode($resp);
                }
            }
            else
            {
                $resp = array(
                    "user"=>"游客",
                    "code"=>"999",
                    "state"=>"Failed"
                );
                echo json_encode($resp);
            }
        }
        else if($_POST["type"] == "signin")
        {
            $sql1 = "SELECT * FROM user WHERE Username={$_POST['user']}";
            if(!($result = $connect->query($sql1)))
            {
                die(mysqli_error($connect));
            }
            $has = mysqli_num_rows($result);
            if($has==0){
                $sql = "INSERT INTO user (Username,Password,Addtime) VALUES ('{$_POST["user"]}','{$_POST["pswd"]}','{$date}')";
                if(!$connect->query($sql))
                {
                    die("Error".mysqli_error($connect));
                }
                else
                {
                    $resp = array(
                        "user"=>$_POST["user"],
                        "code"=>"666",
                        "state"=>"Successful"
                    );
                    echo json_encode($resp);
                }
            }
            else{
                $resp = array(
                    "user"=>$_POST["user"],
                    "code"=>"888",
                    "state"=>"Failed"
                );
                echo json_encode($resp);
            }
            
        }
    }
    
?>