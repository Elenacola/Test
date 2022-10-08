<!DOCTYPE html>
<html lang="it">
    <header>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP File Upload</title>        
        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .images{
                width:150px;
                height:150px;
                cursor:pointer;
                margin:10px;
            }
            .images:hover{
                -webkit-transform: scale(1.2);
                -moz-transform: scale(1.2);
                -o-transform: scale(1.2);
                transform: scale(1.2);
                transition: all 0.3s;
                -webkit-transition: all 0.3s;
            }
        </style>
    </header>
    <body>
        <div class="container">            
            <div class="page-header">
               <h1>Upload File Multipli</h1>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="index.php" class="btn btn-info">Indietro</a>
                    <h3>Elenco File</h3>
                    <br/>
                    <?php
                        $conn = mysqli_connect("localhost","root","","dbimmagini");
                        $query = "SELECT * FROM UserFiles";
                        $result = mysqli_query($conn, $query);
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $url = $row["FilePath"]."/".$row["FileName"];
                    ?>
                                <a href="<?php echo $url; ?>"><image src="<?php echo $url; ?>" class="images" /></a>
                    <?php
                            }
                        }
                        else
                        {
                    ?>
                        <p>Non ci sono immagini da visualizzare</p>
                    <?php
                        }
                    ?>                    
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>        
    </body>
</html>
