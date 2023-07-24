<html>
    <head>
        <title>Video Downloader</title>
        <link rel="icon" type="image/png" href="/favicon.png"/>
    </head>
    <body>
        <center>
            <h1>Video Downloader</h1>
            <hr>
            <br>
            <h2><?php
                $url = $_GET["video_url"];
                $start_time = $_GET["start_hour"]*3600+$_GET["start_min"]*60+$_GET["start_sec"];
                $end_time = $_GET["end_hour"]*3600+$_GET["end_min"]*60+$_GET["end_sec"];
                $file_name = $_GET["file_name"];
                if($start_time < 0 || $end_time < 0 || $start_time > $end_time)
                    echo "Enter valid input times";
                else if(file_exists("Downloads/$file_name"))
                    echo "File already exists";
                else {
                    if(!shell_exec("./ffmpeg_script.sh $url $start_time $end_time \"$file_name\""))
			echo "File downloaded successfully";
                    else
                        echo "An error occurred";
                }
            ?></h2>
        </center>
    </body>
</html>
