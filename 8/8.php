<html>
    <head>
        <style>
            table,th,td{
                text-align: center;
                border: 1px solid black;
                background-color: Gray;
                width: 35%;
            }
            table{
                margin: auto;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <table>
                <h2>Simple Calculator</h2>
                <tr>
                <td>First Number</td>
                <td><input type="text" name="num1"/></td>
                <td rowspan="2"><input type="submit" name="submit" value="calculate"/></td>
                </tr>
                <tr>
                    <td>Second Number</td>
                    <td><input type="text" name="num2"/></td>
                </tr>
        </form>
        <?php
        if(isset($_POST['submit'])){
            $num_1 = $_POST['num1'];
            $num_2 = $_POST['num2'];
            if(is_numeric($num_1) and is_numeric($num_2))
            {
                echo "<tr><td> Addition :</td><td><p>".($num_1+$num_2)."</p></td>";
                echo "<tr><td> Subtraction :</td><td><p> ".($num_1-$num_2)."</p></td>";
                echo "<tr><td> Multiplication :</td><td><p>".($num_1*$num_2)."</p></td>"; 
                echo "<tr><td>Division :</td><td><p> ".($num_1/$num_2)."</p></td>";
                echo "</table>";
            }
            else{
                echo "<script> alert('Enter valid number') </script>" ;
            }
        }
        ?>
    </body>
</html>