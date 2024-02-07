<?php 
    $title = "Exercise 7";
    $md = "page of php ex7";
    // include 'db.php'; 
    include 'header.php'; 
?>

<h2>CRUD Tasks</h2>
<!-- <form name="form1" method="post" action="process_1.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
            <div class="col">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
            </div>
            <div class="col">
                <label for="groupid">Group ID:</label>
                <select class="form-control" id="groupid" name="groupid">
                    <option value="BBCAP19">BBCAP19</option>
                    <option value="BBCAP20">BBCAP20</option>
                    <option value="BBCAP21">BBCAP21</option>
                    <option value="BBCAP22">BBCAP22</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form> -->
<div class="container ">
    <a href="crud/create.php" class="btn btn-primary">Add new record</a>
    <a href="crud/update.php" class="btn btn-primary">Read records</a>
</div>
<div class="container ">
    <img src="layout/images/ex7_create.jpg" alt="create records in studentsinfo table" width="80%">
</div>

<?php include 'footer.php'; ?>