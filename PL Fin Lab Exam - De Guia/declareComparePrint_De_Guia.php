<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: sans-serif;
            height: 100vh;
        }
        .mainBox{
            border: 2px solid black;
            padding: 50px 20px 50px 20px;
        }
        .printResult{
            margin-top: 50px;
        }
        span{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="mainBox">
        <?php
            // For Student One and Student 2
            $fName1 = "Francis Carlo";
            $mName1 = "S.";
            $lName1 = "De Guia";
            $age1 = 21;
            $teamName1 = "Red Janggo";

            $fName2 = "";
            $mName2 = "";
            $lName2 = "";
            $age2 = 21;
            $teamName2 = "";

            echo "<p>The Name of Student 1 is <span>$fName1 $mName1 $lName1</span>. He is <span>$age1</span> Years Old and belongs to <span>$teamName1</span>.</p>";
            echo "<p>The Name of Student 1 is <span>$fName2 $mName2 $lName2</span>. He is <span>$age2</span> Years Old and belongs to <span>$teamName2</span>.</p>";

        ?>

        <div class="printResult">
            <?php
                // Perform an arithmetic expressions on students age
                $add = $age1 + $age2;
                $sub = $age1 - $age2;
                $mul = $age1 * $age2;
                $div = $age1 / $age2;
                $mod = $age1 % $age2;

                echo "<p>Student 1 Age + Student 2 Age = <span>$add</span></p>";
                echo "<p>Student 1 Age - Student 2 Age = <span>$sub</span></p>";
                echo "<p>Student 1 Age * Student 2 Age = <span>$mul</span></p>";
                echo "<p>Student 1 Age / Student 2 Age = <span>$div</span></p>";
                echo "<p>Student 1 Age % Student 2 Age = <span>$mod</span></p>";
            ?>
        </div>
    
    </div>
</body>
</html>