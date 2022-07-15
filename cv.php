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
    <link rel="shortcut icon" href="./static/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="./static/css/bootstrap.css">
    <script src="./static/js/bootstrap.js"></script>

    <link rel="stylesheet" href="./static/css/cv.css">
    <script src="./static/js/cv.js" defer></script>
</head>

<body>

    <div class="loader-back">
        <div class="loader"></div>
    </div>


    <?php

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
        <div class="contact-title" align="center">
            <p align="center" class="cv-title">RESUME OF</p>
            <img src="<?php echo $destination; ?>" alt="Photo" class="photo">
            <h1 class="full_name-title">
                <?php echo $_POST['full_name']; ?>
            </h1>
            <p>Mailing address :
                <?php echo $_POST['mailing_adddress']; ?>
            </p>
            <p>Email:
                <?php echo $_POST['email']; ?>
            </p>
            <p>Mobile:
                <?php echo $_POST['mobile']; ?>
            </p>
        </div>
        <div class="personal">
            <hr>
            <h4 class="sub-title">Personal Details</h4>
            <hr>
            <table class="personal-table">
                <tr>
                    <td>Father's Name</td>
                    <td>:</td>
                    <td>
                        <?php echo $_POST['fathers_name']; ?>
                    </td>
                </tr>

                <tr>
                    <td>Mother's Name</td>
                    <td>:</td>
                    <td>
                        <?php echo $_POST['mothers_name']; ?>
                    </td>
                </tr>

                <tr>
                    <td>Date of Birth</td>
                    <td>:</td>
                    <td>
                        <?php echo $_POST['date_of_birth']; ?>
                    </td>
                </tr>

                <tr>
                    <td>Nationality</td>
                    <td>:</td>
                    <td>
                        <?php echo $_POST['nationality']; ?>
                    </td>
                </tr>

                <tr>
                    <td>Religion</td>
                    <td>:</td>
                    <td>
                        <?php echo $_POST['religion']; ?>
                    </td>
                </tr>

                <tr>
                    <td>Marital Status</td>
                    <td>:</td>
                    <td>
                        <?php echo $_POST['marital_status']; ?>
                    </td>
                </tr>

                <tr>
                    <td>Present Adddress</td>
                    <td>:</td>
                    <td>
                        <?php echo $_POST['present_adddress']; ?>
                    </td>
                </tr>

                <tr>
                    <td>Permanent Adddress &MediumSpace;</td>
                    <td>: &MediumSpace;</td>
                    <td>
                        <?php echo $_POST['permanent_adddress']; ?>
                    </td>
                </tr>

                <tr>
                    <td>Mailing Adddress</td>
                    <td>:</td>
                    <td>
                        <?php echo $_POST['mailing_adddress']; ?>
                    </td>
                </tr>

            </table>
        </div>

        <div class="career">
            <hr>
            <h4 class="sub-title">Objective of Career</h4>
            <hr>
            <p>
                <?php echo $_POST['objective']; ?>
            </p>
        </div>

        <div class="education_qualifications">
            <hr>
            <h4 class="sub-title">Education Qualifications</h4>
            <hr>
            <table>
                <thead>

                    <tr>
                        <th>Name of Exam</th>
                        <th>Year of passing</th>
                        <th>Group / Technology</th>
                        <th>Board</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>

                    <?php if (!empty($_POST['ssc_year'])){ ?>

                    <tr>
                        <td>SSC</td>
                        <td>
                            <?php echo $_POST['ssc_year']; ?>
                        </td>
                        <td>
                            <?php echo $_POST['ssc_group']; ?>
                        </td>
                        <td>
                            <?php echo $_POST['ssc_board']; ?>
                        </td>
                        <td>
                            <?php echo $_POST['ssc_result']; ?>
                        </td>
                    </tr>
                    <?php } ?>


                    <?php if (!empty($_POST['hsc_year'])){ ?>

                    <tr>
                        <td>HSC</td>
                        <td>
                            <?php echo $_POST['hsc_year']; ?>
                        </td>
                        <td>
                            <?php echo $_POST['hsc_group']; ?>
                        </td>
                        <td>
                            <?php echo $_POST['hsc_board']; ?>
                        </td>
                        <td>
                            <?php echo $_POST['hsc_result']; ?>
                        </td>
                    </tr>
                    <?php } ?>

                    <?php if (!empty($_POST['diploma_year'])){ ?>

                    <tr>
                        <td>Diploma</td>
                        <td>
                            <?php echo $_POST['diploma_year']; ?>
                        </td>
                        <td>
                            <?php echo $_POST['diploma_group']; ?>
                        </td>
                        <td>
                            <?php echo $_POST['diploma_board']; ?>
                        </td>
                        <td>
                            <?php echo $_POST['diploma_result']; ?>
                        </td>
                    </tr>
                    <?php } ?>

                    <?php if (!empty($_POST['bsc_year'])){ ?>

                    <tr>
                        <td>BSc</td>
                        <td>
                            <?php echo $_POST['bsc_year']; ?>
                        </td>
                        <td>
                            <?php echo $_POST['bsc_group']; ?>
                        </td>
                        <td>
                            <?php echo $_POST['bsc_board']; ?>
                        </td>
                        <td>
                            <?php echo $_POST['bsc_result']; ?>
                        </td>
                    </tr>
                    <?php } ?>

                    <?php if (!empty($_POST['msc_year'])){ ?>

                    <tr>
                        <td>MSc</td>
                        <td>
                            <?php echo $_POST['msc_year']; ?>
                        </td>
                        <td>
                            <?php echo $_POST['msc_group']; ?>
                        </td>
                        <td>
                            <?php echo $_POST['msc_board']; ?>
                        </td>
                        <td>
                            <?php echo $_POST['msc_result']; ?>
                        </td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

        <?php if (!empty($_POST['experience'])){ ?>
        <div class="experience">
            <hr>
            <h4 class="sub-title">Experience</h4>
            <hr>
            <p>
            <pre><?php echo $_POST['experience']; ?></pre>
            </p>
        </div>
        <?php } ?>

        <?php if (!empty($_POST['references'])){ ?>
        <div class="references">
            <hr>
            <h4 class="sub-title">References</h4>
            <hr>
            <p>
            <pre><?php echo $_POST['references']; ?></pre>
            </p>
        </div>
        <?php } ?>

        <button id="print" class="btn btn-primary m-5">Print</button>
    </div>


    <?php
        // Saving all details in a txt file.
        $txt_file = "data/" . uniqid() . "-" . time() . ".txt"; // 5dab1961e93a7-1571494241
        $file = fopen($txt_file, "w") or die("Enable to open file!" . $txt_file);

        $txt = "" .
"Full Name: " .          $_POST['full_name']     . "\n" .
"Email : " .             $_POST['email']          . "\n" .
"Mobile : " .            $_POST['mobile']        . "\n" .
"Father's Name : ".      $_POST['fathers_name'] . "\n" .
"Mother's Name : ".      $_POST['mothers_name'] . "\n" .
"Nationality : " .       $_POST['nationality'] . "\n" .
"Religion : " .          $_POST['religion'] . "\n" .
"marital_status : " .    $_POST['marital_status'] . "\n" .
"date_of_birth : ".      $_POST['date_of_birth'] . "\n" .
"present_adddress : " .  $_POST['present_adddress'] . "\n" .
"permanent_adddress : ". $_POST['permanent_adddress'] . "\n" .
"mailing_adddress: " .   $_POST['mailing_adddress'] . "\n" .
"objective : " .         $_POST['objective'] . "\n" .
"photo : ".              $_FILES['photo']['name'] . "  " . $destination . "\n" .

"ssc_year : " .          $_POST['ssc_year'] . "\n" .
"ssc_group : " .         $_POST['ssc_group'] . "\n" .
"ssc_board : " .         $_POST['ssc_board'] . "\n" .
"ssc_result : " .        $_POST['ssc_result'] . "\n" .

"hsc_year : " .          $_POST['hsc_year'] . "\n" .
"hsc_group : " .         $_POST['hsc_group'] . "\n" .
"hsc_board : " .         $_POST['hsc_board'] . "\n" .
"hsc_result : " .        $_POST['hsc_result'] . "\n" .

"diploma_year : " .      $_POST['diploma_year'] . "\n" .
"diploma_group : " .     $_POST['diploma_group'] . "\n" .
"diploma_board : " .     $_POST['diploma_board'] . "\n" .
"diploma_result : " .    $_POST['diploma_result'] . "\n" .

"bsc_year : " .          $_POST['bsc_year'] . "\n" .
"bsc_group : " .         $_POST['bsc_group'] . "\n" .
"bsc_board : " .         $_POST['bsc_board'] . "\n" .
"bsc_result : " .        $_POST['bsc_result'] . "\n" .

"msc_year : " .          $_POST['msc_year'] . "\n" .
"msc_group : " .         $_POST['msc_group'] . "\n" .
"msc_board : " .         $_POST['msc_board'] . "\n" .
"msc_result : " .        $_POST['msc_result'] . "\n" .

"experience : " .        $_POST['experience'] . "\n" .
"references : " .        $_POST['references'] . "\n" .

"terms : ".              $_POST['terms'] . "\n" 
;
        fwrite($file, $txt);

        fclose($file);


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