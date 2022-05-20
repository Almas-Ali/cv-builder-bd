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

    <link rel="stylesheet" href="./static/css/bootstrap.css">
    <script src="./static/js/bootstrap.js"></script>

    <link rel="stylesheet" href="./static/css/cv.css">
    <script src="./static/js/cv.js" defer></script>
</head>

<body>


    <!-- 

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
    ?> -->


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
        <hr>
        <div class="personal">
            <h4 class="sub-title">Personal Details</h4>
            <hr>
            <table>
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



        <button id="print" class="btn btn-primary mt-5 ml-3">Print</button>
    </div>

    <!-- 
    <?php
        // Saving all details in a txt file.
        $txt_file = "data/" . uniqid() . "-" . time() . ".txt"; // 5dab1961e93a7-1571494241
        $file = fopen($txt_file, "w") or die("Enable to open file!" . $txt_file);

        $txt = "This is a sample txt.";
        fwrite($txt_file, $txt);

        fclose($txt_file);


    ?> -->

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