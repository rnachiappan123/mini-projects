<html>
    <head>
        <title>Monthly Expenses</title>
        <link rel="icon" type="image/png" href="/favicon.png"/>
    </head>
    <body>
        <center>
            <h1>Monthly Expenses (November 2020)</h1>
            <hr>
            <br>
            <table border="1">
                <tr align="center">
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Description</th>
                </tr>
                <?php
                    $xml = simplexml_load_file("data.xml");
                    $expense = $xml->expense;
                    $total = 0;
                    for ($i = 0; $i < count($expense); $i++) {
                        echo "<tr align=\"center\">";
                        echo "<td>", $i+1, "</td>";
                        echo "<td>", $expense[$i]->exp_name, "</td>";
                        echo "<td>", $expense[$i]->exp_amnt, "</td>";
                        echo "<td>", $expense[$i]->exp_date, "</td>";
                        echo "<td>", $expense[$i]->exp_desc, "</td>";
                        echo "</tr>";
                        $total+=$expense[$i]->exp_amnt;
                    }
                    echo "<tr align=\"center\">";
                    echo "<td colspan=\"2\"><b>TOTAL:</b></td>";
                    echo "<td colspan=\"3\"><b>$total</b></td>";
                    echo "</tr>";
                ?></table>
            <br>
            <button onClick="document.location='index.html'">Go Back</button>
        </center>
    </body>
</html>
