<?php 
    $title = "Exercise 4";
    $md = "page of php ex4";

    include 'header.php'; 
?>
    <h1>Exercise 4: Control flow and loops</h1>

    <h2>Voting Eligibility Check</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        <input type="submit" name="submit" value="Check Eligibility">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = $_POST["name"];
        $age = $_POST["age"];

        // Check if the age is greater than or equal to 18
        if ($age >= 18) {
            echo "$name is eligible for voting.";
        } else {
            echo "$name is not eligible for voting.";
        }
    }
    ?>


    <h2>Switch Case</h2>
    <?php
    // Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not
    $currentMonth = date("F");

    // Display the current month
    echo "Current Month: $currentMonth <br>";

    // Switch case to check if it's August or not
    switch ($currentMonth) {
        case "August":
            echo "It's August, so it's still holiday.";
            break;
        default:
            echo "Not August, this is $currentMonth so I don't have any holidays.";
    }
    ?>

    <h2>For Loop</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Your number (1-9): 
        <input type="number" name="number" min="1" max="9" required><br><br>
        <input type="submit" name="submit" value="Print Multiplication Table">
    </form>

    <?php
    // check if the number is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // get the input number
        $number = $_POST["number"];

        // check if the number is valid (between 1 and 9)
        if ($number >= 1 && $number <= 9) {
            // print the multiplication table
            echo "<h3>Multiplication Table of $number:</h3>";
            echo "<table>";
            for ($i = 1; $i <= 9; $i++) {
                echo "<tr>";
                echo "<td>$number</td>";
                echo "<td>x</td>";
                echo "<td>$i</td>";
                echo "<td>=</td>";
                echo "<td>" . ($number * $i) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            // if the number is not valid
            echo "Please enter a number between 1 and 9.";
        }
    }
    ?>

    <h2>While Loop</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Your number (not less than 1): <input type="number" name="number" min="1" required><br><br>
        <input type="submit" name="submit" value="Print Numbers">
    </form>
    <?php
    //Write a PHP script that will print all the numbers from 1 to n.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $n = $_POST["number"];

        // check if the input number is valid
        if ($n > 0 && is_numeric($n)) {
            
            $i = 1;
            echo "<p>Numbers from 1 to $n:</p>";
            while ($i <= $n) {
                echo "$i ";
                $i++;
            }
        } 
        else {
            // if input is not valid
            echo "Please enter a valid positive number.";
        }
    }

    ?>

    <h2>Foreach Loop</h2>
    <?php
    // Write a PHP script that will print all the elements of an array
 
    $coffeeNames = array("Latte", "Cappuccino", "Espresso", "Mocha");
    foreach ($coffeeNames as $coffee) {
        echo "$coffee ";
    }

    ?>


<?php include 'footer.php'; ?>
