<?php 
    $title = "Exercise 3";
    $md = "page of php ex3";

    include 'header.php'; 
?>

        <h1>Exercise 3: Variable, Strings & Operators</h1>
        <h2>Create a file (ex3.php)</h2>

        <div class="container">
            <h2 class="mt-5">Form Creation and Bootstrap Styling</h2>
            <form method="post" action="process.php" class="mt-4">
                <div class="mb-3">
                    <label for="firstname" class="form-label">Firstname:</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Lastname:</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="dob" class="form-label">DOB:</label>
                    <input type="date" class="form-control" id="dob" name="dob">
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Select Color:</label>
                    <input type="color" class="form-control form-control-color" id="color" name="color" value="#B49646">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <hr>
        <div class="container">
            <h2 class="mt-5">HTML Table</h2>
            <?php
            $g1 = 5;
            $g2 = 4;
            $g3 = 5;
            ?>

            <table class="table w-50 text-center"> 
                <thead>
                    <tr><th>S.n.</th> <th>Name</th> <th>Grade</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John</td>
                        <td><?php echo $g1 ?></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alice</td>
                        <td><?php echo $g2 ?></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Bob</td>
                        <td><?php echo $g3 ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <h2>String Variables</h2>
        <?php 
            //Join the strings and print the length of the string
            $str1 = "Hello";
            $str2 = "World";
            //join the strings
            $joined_String = $str1 . $str2;

            // Print the joined string and length of it
            echo "The joined string is: " . $joined_String . "<br>";

            echo "Length of the joined string is: " . strlen($joined_String);


        ?>

        <h2>Number Addition</h2>
            <?php
                //Use variables to store these numbers and an echo statement
                $number1 = 298;
                $number2 = 234;
                $number3 = 46;

                $sum = $number1 + $number2 + $number3;
                echo "Sum of the numbers is: $sum";

            ?>

        <h2>Browser Detection</h2>

        <?php
            echo "Browser: " . $_SERVER['HTTP_USER_AGENT'] . ".";
        ?>

        <h2>File Modification Time</h2>


<?php include 'footer.php'; ?>