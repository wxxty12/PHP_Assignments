<?php
    $title = "Infomation";
    $md = "page of data process";

    include 'header.php'; 
    //what to do with the form data

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $dob = $_POST["dob"];
?>
    <h3><?php echo "Hello ". $firstname ." ". $lastname . ", You are welcome to my site."; ?></h3>
<?php
    include 'footer.php';
?>