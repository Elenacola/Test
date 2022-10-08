if(isset($_POST["btnSubmit"])){    
        $errors = array();
        // accetto solo documenti immagine
        $extension = array("jpeg","jpg","png","gif");
        $bytes = 1024;
        $allowedKB = 100;
        $totalBytes = $allowedKB * $bytes;
        if(isset($_FILES["files"])==false)
        {
            echo "<b>Attenzione, devi selezionare un file!!!</b>";
            return;
        }
        $conn = mysqli_connect("localhost","root","","phpfiles");
        foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
        {
            $uploadThisFile = true;
            $file_name=$_FILES["files"]["name"][$key];
            $file_tmp=$_FILES["files"]["tmp_name"][$key];
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);
            if(!in_array(strtolower($ext),$extension))
            {
                array_push($errors, "Tipo di file non valido. Nome:- ".$file_name);
                $uploadThisFile = false;
            }
            if($_FILES["files"]["size"][$key] > $totalBytes){
                array_push($errors, "File superiore a 100KB. Nome:- ".$file_name);
                $uploadThisFile = false;
            }
            if(file_exists("Upload/".$_FILES["files"]["name"][$key]))
            {
                array_push($errors, "File già presente. Nome:- ". $file_name);
                $uploadThisFile = false;
            }
            if($uploadThisFile){
                $filename=basename($file_name,$ext);
                $newFileName=$filename.$ext;               
                move_uploaded_file($_FILES["files"]["tmp_name"][$key],"Upload/".$newFileName);
                $query = "INSERT INTO UserFiles(FilePath, FileName) VALUES('Upload','".$newFileName."')";
                mysqli_query($conn, $query);
            }
        }
        mysqli_close($conn);
        $count = count($errors);
        if($count != 0){
            foreach($errors as $error){
                echo $error."<br/>";
            }
        }
}
