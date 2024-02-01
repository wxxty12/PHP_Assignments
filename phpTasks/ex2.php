
<?php 
    $title = "Exercise 2";
    $md = "page of php ex2";

    include 'header.php'; 
?>

        <div class="container">
            <div class="content">
                <h2>Exercise 2: Create universal header, footer, or sidebar</h2>
                <div class="row">
                    <div class="col-sm-3">
<?php include 'sidebar.php'?>
                    </div>
                    <div class="col-sm-9">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Vel quis ex ipsa. Explicabo nihil tempore exercitationem officiis!
                        Iure pariatur, sint, vitae asperiores reprehenderit modi 
                        ad corrupti excepturi, perferendis repellat veniam.</p>
                    </div>
                    
                </div>
            </div>
        </div>

<?php include 'footer.php'; ?>