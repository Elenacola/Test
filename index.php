<!DOCTYPE html>
<html lang="it">
    <header>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Upload</title>        
        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    </header>
    <body>
        <div class="container">            
            <div class="page-header">
                <h1>Upload File Multipli</h1>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm" action="upload.php">
                        <div class="form-group">
                            <label for="exampleInputFile">Seleziona il file da caricare:</label>
                            <input type="file" id="exampleInputFile" name="files[]" multiple="multiple">
                            <p class="help-block"><span class="label label-info">NB:</span> Solo immagini (.jpg, .jpeg, .png, .gif) inferiori a 100KB.</p>
                        </div>            
                        <button type="submit" class="btn btn-primary" name="btnSubmit" >Inizia Upload</button>
                        <a href="view.php" class="btn btn-info">Visualizza file caricati</a>
                    </form>
                    <br/>
                    <label for="Progressbar">Avanzamento:</label>
                    <div class="progress" id="Progressbar">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%" id="divProgressBar">
                            <span class="sr-only">45% Completato</span>
                        </div>                        
                    </div>
                    <div id="status">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap e jQuery.Form -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
        
        <script type="text/javascript">
            $(function(){                            
                var divProgressBar=$("#divProgressBar");
                var status=$("#status");                
                $("#uploadForm").ajaxForm({                    
                    dataType:"json",                    
                    beforeSend:function(){
                        divProgressBar.css({});
                        divProgressBar.width(0);
                    },                    
                    uploadProgress:function(event, position, total, percentComplete){
                        var pVel=percentComplete+"%";
                        divProgressBar.width(pVel);
                    },                    
                    complete:function(data){
                        status.html(data.responseText);
                    }
                });
            });
        </script>
    </body>
</html>
