<?php 

if ( !empty($_POST) ){ 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $_POST['full_name']; ?> - CV
    </title>

    <!-- <?php include('linkers.php'); ?> -->
    <link rel="stylesheet" href="./static/css/cv.css">

</head>

<body>




    <?php

    echo $_POST['full_name'] . "<br>";
    echo $_POST['email'] . "<br>";
    echo $_POST['mobile'] . "<br>";
    echo $_POST['fathers_name'] . "<br>";
    echo $_POST['mothers_name'] . "<br>";
    echo $_POST['nationality'] . "<br>";
    echo $_POST['religion'] . "<br>";
    echo $_POST['marital_status'] . "<br>";
    echo $_POST['date_of_birth'] . "<br>";
    echo $_POST['present_adddress'] . "<br>";
    echo $_POST['permanent_adddress'] . "<br>";
    echo $_POST['mailing_adddress'] . "<br>";
    echo $_POST['objective'] . "<br>";
    echo $_FILES['photo']['name'] . "<br>";
    echo $_POST['terms'] . "<br>";

    if(isset($_FILES['photo'])){
        /* create new name file */
        $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
        $extension  = pathinfo( $_FILES["photo"]["name"], PATHINFO_EXTENSION ); // jpg
        $basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg

        $source       = $_FILES["photo"]["tmp_name"];
        $destination  = "./images/{$basename}";

        /* move the file */
        move_uploaded_file( $source, $destination );

        // echo "Stored in: {$destination}";
     }
    ?>


    <div class="container-fluid">
        <h1 align="center">Curriculum Vitae</h1>
        <img src="<?php echo $destination; ?>" alt="">
    </div>


    <?php
        // Saving all details in a txt file.
        $txt_file = "data/" . uniqid() . "-" . time() . ".txt"; // 5dab1961e93a7-1571494241
        $file = fopen($txt_file, "w") or die("Enable to open file!" . $txt_file);

        $txt = "This is a sample txt.";
        fwrite($txt_file, $txt);

        fclose($txt_file);



    ?>

</body>

</html>



<?php
     

} else {

?>

<div align="center">
    <h1>404 Not Found!</h1>
    <a href="./">Home</a>
</div>

<?php
}
?>

