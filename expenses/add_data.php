<?php
    $xml = simplexml_load_file("data.xml");
    $expense = $xml->addChild("expense");
    $expense->addChild("exp_name", htmlspecialchars($_GET["exp_name"]));
    $expense->addChild("exp_amnt", $_GET["exp_amnt"]);
    $expense->addChild("exp_date", $_GET["exp_date"]);
    $expense->addChild("exp_desc", htmlspecialchars($_GET["exp_desc"]));
    $dom = new DOMDocument();
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());
    if($dom->save("data.xml"))
        $string = "Data added successfully";
    else
        $string = "An error occurred";
?>
<html>
    <head>
        <title>Monthly Expenses</title>
        <link rel="icon" type="image/png" href="/favicon.png"/>
    </head>
    <body>
        <center>
            <h1>Monthly Expenses (November 2020)</h1>
            <hr>
            <h2><?php echo $string ?></h2>
            <button onClick="document.location='index.html'">Go Back</button>
            <button onClick="document.location='view_data.php'">View All</button>
        </center>
    </body>
</html>
