<?php include('calc.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('includes/head.php');
    ?>
    <style>
        body {
            background-color: #aaa;
            padding: 5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        table {
            margin: 2rem;
            padding: 2rem;
            background-color: #fff;
            border-radius: 30px;
        }
        td {
            padding: .8rem 2rem;
            text-align: center;
        }
    </style>

</head>

<body>
    <form action="" method="POST">
        <input type="number" name="num" placeholder="Number 1">
        <select value="" name="operator">
            <option value="+" id="">+</option>
            <option value="-" id="">-</option>
            <option value="*" id="">*</option>
            <option value="/" id="">/</option>
            <option value="%" id="">%</option>
        </select>
        <input type="number" name="num2" placeholder="Number 2">
        <input type="submit" name="btn" value="Calc">
    </form>
    <table cellspacing="0">
        <?php
        if(isset($_POST['btn'])) {
        $names = array(
            "$sum",
            "$sub",
            "$mul",
            "$div",
            "$mod",
        );
        echo "<tr>";
        for ($i = 0; $i < 5; $i++) {
            switch ($operator) {
                case $operators[$i]:
                    echo "<td>$names[$i]</td>";
                    break;
                default:
                    echo "";
                    break;
            }
        }
        echo "</tr>";
    }
        ?>
    </table>
</body>

</html>