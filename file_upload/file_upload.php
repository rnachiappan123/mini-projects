<?php
    $target_dir = "uploads/";
    for($i = 0; $i < count($_FILES["file_select"]["name"]); $i++) {
        $target_file = $target_dir.basename($_FILES["file_select"]["name"][$i]);
        // Check if file already exists
        if(file_exists($target_file)) {
            $string = "File(s) already exists.";
            break;
        }
        else if(move_uploaded_file($_FILES["file_select"]["tmp_name"][$i], $target_file))
            $string = "File(s) has been uploaded.";
        else {
            $string = "An error occurred.";
            break;
        }
    }
?>
<html>
    <head>
        <title>File Upload</title>
        <link rel="icon" type="image/png" href="/favicon.png"/>
    </head>
    <body>
        <center>
            <h1>Upload File(s)</h1>
            <hr>
            <h2><?php echo $string ?></h2>
            <button onClick="document.location='index.html'">Go Back</button>
        </center>
    </body>
</html>
