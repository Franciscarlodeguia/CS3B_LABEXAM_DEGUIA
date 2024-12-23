<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            font-family: sans-serif;
        }
        .products{
            margin-bottom: 50px;
            display: flex;
        }
        .fruitsAndVegetables{
            padding-right: 50px;
            border-right: 2px solid black;
        }
        .desserts{
            padding-right: 50px;
            margin-left: 50px;
            border-right: 2px solid black;
        }
        .hygieneProducts{
            margin-left: 50px;
        }
        p{
            margin-bottom: -5px;
        }
    </style>
</head>
<body>
    <div class="products">
        <?php
            // Declare the arrays
            $fruitsAndVegetables = [];
            $desserts = [];
            $hygieneProducts = [];

            // Append arrays
            array_push($fruitsAndVegetables, "Cucumber", "Broccoli", "Eggplant");
            array_push($desserts, "Cheesecake", "Ice cream", "Cookies");
            array_push($hygieneProducts, "Toothbrush", "Toothpaste", "soap");
        ?>
            <div class="fruitsAndVegetables">
                <?php
                    // Print arrays
                    echo "<h2>Fruits and Vegetables:</h2>";
                    foreach ($fruitsAndVegetables as $list) {
                        echo "<p>$list</p><hr>";
                    }
                ?> 
            </div>

            <div class="desserts">
                <?php
                    echo "<h2>Desserts:</h2>";
                    foreach ($desserts as $list) {
                        echo "<p>$list</p><hr>";
                    }
            ?>
            </div>

            <div class="hygieneProducts">
                <?php
                    echo "<h2>Hygiene Products:</h2>";
                    foreach ($hygieneProducts as $list) {
                        echo "<p>$list</p><hr>";
                    }
                ?>
            </div>
    </div>
    <?php
        // Merge all arrays
        $groceryCart = array_merge($fruitsAndVegetables, $desserts, $hygieneProducts);

        // count items
        $gCartLength = count($groceryCart);

        // Print all items
        echo "<h3>The Grocery List:</h3>";
        foreach ($groceryCart as $Products) {
            echo "<p>$Products</p>";
        }
           
        // print the total number products
        echo "<hr><h3>The Total number of items in the List is $gCartLength.</h3>";
    ?>
</body>
</html>