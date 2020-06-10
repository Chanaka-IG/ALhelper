
<!DOCTYPE html>
<html>
<head>
    <title>Upload a file</title>
    <link rel="stylesheet" href="css/upload.css" type="text/css">
</head>

<body>
    <div class="loginBox">
        <h2>AL-Helper</h2>
            
        <form method="post" enctype="multipart/form-data">
            <div>
                <label for="title">Enter a title</label><br>
                <input type= "text" name="title">
            </div>
            <div>
                <label for="pnumb">Enter the paper number</label><br>
                <input type= "text" name="pnumb">
            </div>
            <div>
                <div>
                    <label for="Choose_file">Enter the file</label>
                    <input type="File" name="file">
                </div>
                <input type="submit" name="upload" value="upload">
            </div>
        
        </form>
        </div>


</body>
</html>

<?php

$localhost= "localhost";
$dbusername="root";
$dbpassword="";
$dbname="alhelper";

#connection string
$conn= mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

?>

<?php

if (isset($_POST["upload"]))
{   
    
    #retrieve file title
    $title = $_POST["title"];
    $pnumb= $_POST["pnumb"];


    $fileName= $_FILES['file']['name'];
    $fileTmpName= $_FILES['file']['tmp_name'];
    $fileSize= $_FILES['file']['size'];
    $fileError= $_FILES['file']['error'];
    $fileType= $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array ('pdf');

    
    
    if (in_array( $fileActualExt, $allowed)){
        
            if($fileSize < 1000000) {
              
                $pname= rand (1000,10000)."-".$_FILES["file"]["name"];

               # $tname= $_FILES["files"]["tmp_name"];
            
                $uploads_dir = '/files';
            
               # move_uploaded_file($tname, $uploads_dir.'/'.$pname);
            
                $sql= "INSERT into fileup(title,paper_no,paper) VALUES ('$title','$pnumb','$pname')";
                
                
                if(mysqli_query ($conn,$sql) )
                {
                   echo "File Successfully Uploaded!";
                }
                else
                {
                    echo "error";
                }
            
            }
            else{
                echo "Your file is too big";
            }


        }
        else
        {
           echo "You can only upload pdf files";
        }
    
   
  
   

}


?>

