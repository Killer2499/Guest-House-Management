<?php
session_start();
$sessionname=$_SESSION['username'];
if(isset($_POST['submit'])){
    

    $profilepic=$_FILES['profilepic'];

    $profilepic_Name=$_FILES['profilepic']['name'];
    $profilepic_Type=$_FILES['profilepic']['type'];
    $profilepic_Error=$_FILES['profilepic']['error'];
    $profilepic_Size=$_FILES['profilepic']['size'];
    $profilepic_Temp=$_FILES['profilepic']['tmp_name'];

    $profilepic_Ext=explode('.',$profilepic_Name);
    $profilepic_Actualext=strtolower(end($profilepic_Ext));

    $allowed=array('jpg');

    if(in_array($profilepic_Actualext,$allowed)){
        if($profilepic_Error===0){
            if($profilepic_Size<1000000){
                $profilepic_Name_New='profile'.$sessionname.'.'.$profilepic_Actualext;
                $profilepic_Destination='profilepic/'.$profilepic_Name_New;
                move_uploaded_file($profilepic_Temp,$profilepic_Destination);
                $dbc=mysqli_connect('localhost','root','','login');
                $query="UPDATE userdata Set profile_pic=1 where username='$sessionname'";
                $result=mysqli_query($dbc,$query);
                header('location:profile.php?sucess!!');                       
            }
            else{
                echo 'The file is too big to upload';
            }

        }
        else{
            echo 'Something went wrong during uploading';
        }

    }
    else{
        echo 'You cannot upload files of this type';
    }
    
    

}
?>