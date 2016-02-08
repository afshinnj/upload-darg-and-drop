<!DOCTYPE html>

<html>
    <head>
        <title>upload</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+pro:400,600">-->
        <link rel="stylesheet" href="css/global.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="upload-console">
                <h2 class="upload-console-header">Upload</h2>
                <div class="upload-console-body">
                    <h3>Select files from your computer</h3>      
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="files[]" id ="standard-upload-files" multiple>
                        <input type="submit" value="Upload files" id="standard-upload">
                    </form>
                    
                    <h3>or drag and drop files below</h3>
                    <div class="upload-console-drop" id="drop-zone">
                            Just drag and drop files here
                    </div>
                    
                    <div class="bar">
                        <div class="bar-fill" id="bar-fill">
                            <div class="bar-fill-text" id="bar-fill-text"></div>
                        </div> 
                    </div>
                    <!-- class="hidden" -->
                    <div id="uploads-finished" class="hidden">
                        <h3>Processed files</h3>
                        <!--<div class="upload-console-upload">
                            <span>Success</span>
                        </div>-->
                    </div>
                    
                </div>
            </div>
        </div>
        
        <script src="js/global.js"></script>
        <script src="js/upload.js"></script>
    </body>
</html>
