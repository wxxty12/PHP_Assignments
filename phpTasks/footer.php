        <footer class="row text-center">
        <hr>
        <p>
        <?php
            // Write a PHP script in universal footer to display the last modification time of a file
            // Specify the filename
            $filename = basename('footer.php');

            // Get the last modified time of the file
            $lastModifiedTime = filemtime($filename);

            // Format the last modified time using the date() function
            $formattedLastModifiedTime = date("F d Y H:i:s", $lastModifiedTime);

            // Output the last modified time
            echo "Last modified time of file $filename: $formattedLastModifiedTime";
        ?>
        </p>

        <hr>

            <div class="col-12 col-lg-4">
                <h3>HOURS</h3>
                <p>Mon--Sat 17-23</p>
                <p>Sunday Closed</p>
            </div>
            <div class="col-12 col-lg-4">
                <h3>LOCATION</h3>
                <p>Linnankatu 9</p>
                <p>13100</p>
                <p>Helsinki</p>
            </div>
            <div class="col-12 col-lg-4">
                <h3>CONTACT</h3>
                <p><a href="hello.php">info@midnightsun.fi</a></p>
                <div id="social-media">
                    <a href="https://www.facebook.com" target="_blank"><img src="images/facebook.png"
                            alt="facebook logo" /></a>
                    <a href="https://www.instagram.com/" target="_blank"><img src="images/instagram.png"
                            alt="instagram logo" /></a>
                    <a href="https://www.tiktok.com" target="_blank"><img src="images/tiktok.png"
                            alt="tiktok logo" /></a>
                </div>
            </div>


        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>