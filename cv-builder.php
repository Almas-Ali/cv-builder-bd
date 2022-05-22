<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Builder</title>
    <?php include('linkers.php') ?>
</head>

<body>

    <?php include('navbar.php'); ?>
    <div class="loader-back">
        <div class="loader"></div>
    </div>

    <div class="container-fluid">

        <div class="user-form">
            <h2 align="center" class="form-title">Fill the form correctly</h2>
            <form action="./cv" method="post" class="form-group text-dark" enctype="multipart/form-data">

                <div class="personal">
                    <h4 align="center" class="text-light pt-2 form-title">Personal Informations</h4>

                    <div class="mb-3 form-floating">
                        <input type="text" class="form-control" id="full_name" name="full_name"
                            aria-describedby="full_name" placeholder="Full Name" title="Full Name" required>
                        <label for="full_name" class="form-label">Full Name</label>
                    </div>

                    <div class="mb-3 form-floating">
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="email"
                            placeholder="Email Address" title="Email Address" required>
                        <label for="email" class="form-label">Email address</label>
                        <div class="form-text text-light">We don't collects user informations.</div>
                    </div>

                    <div class="mb-3 form-floating">
                        <input type="phone" class="form-control" name="mobile" if="mobile" aria-describedby="mobile"
                            placeholder="Mobile Number" title="Mobile Number" required>
                        <label for="mobile" class="form-label">Mobile Number</label>
                        <div class="form-text text-light">We don't collects user informations.</div>
                    </div>

                    <div class="mb-3 form-floating">
                        <input type="text" class="form-control" name="fathers_name" id="fathers_name"
                            aria-describedby="fathers_name" placeholder="Father's Name" title="Father's Name" required>
                        <label for="fathers_name" class="form-label">Father's Name</label>
                    </div>

                    <div class="mb-3 form-floating">
                        <input type="text" class="form-control" name="mothers_name" id="mothers_name"
                            aria-describedby="mothers_name" placeholder="Mother's Name" title="Mother's Name" required>
                        <label for="mothers_name" class="form-label">Mother's Name</label>
                    </div>

                    <div class="mb-3 form-floating">
                        <input type="text" class="form-control" name="nationality" id="nationality"
                            aria-describedby="nationality" placeholder="Nationality" title="Nationality" required>
                        <label for="nationality" class="form-label">Nationality</label>
                    </div>

                    <select class="form-select mb-2" aria-label=".form-select-sm" name="religion" required>
                        <option selected>Religion</option>
                        <option value="Islam">Islam</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddhis">Buddhis</option>
                        <option value="Christian">Christian</option>
                    </select>

                    <select class="form-select mb-2" aria-label=".form-select-sm" name="marital_status" required>
                        <option selected>Marital Status</option>
                        <option value="Single">Single</option>
                        <option value="Marriaged">Marriaged</option>
                        <option value="Divorced">Divorced</option>
                    </select>

                    <div class="mb-3 form-floating">
                        <input type="date" class="form-control" name="date_of_birth" aria-describedby="date_of_birth"
                            title="Date of Birth" placeholder="dd-mm-yyyy" required>
                        <label for="date_of_birth" class="form-label">Date of Birth</label>
                    </div>

                    <div class="mb-2 form-floating">
                        <textarea class="form-control" placeholder="Present Address" id="present_adddress"
                            name="present_adddress" style="height: 100px" title="Present Address" required></textarea>
                        <label for="present_adddress">Present Address</label>
                    </div>

                    <div class="mb-2 form-floating">
                        <textarea class="form-control" placeholder="Permanent Address" id="permanent_adddress"
                            style="height: 100px" title="Permanent Address" name="permanent_adddress"
                            required></textarea>
                        <label for="permanent_adddress">Permanent Address</label>
                    </div>

                    <div class="mb-2 form-floating">
                        <textarea class="form-control" placeholder="Mailing Address" id="mailing_adddress"
                            style="height: 100px" title="Mailing Address" name="mailing_adddress" required></textarea>
                        <label for="mailing_adddress">Mailing Address</label>
                    </div>

                    <div class="mb-2 form-floating">
                        <textarea class="form-control" placeholder="Objective of Career" id="objective"
                            style="height: 100px" title="Objective of Career" name="objective" required></textarea>
                        <label for="objective">Objective of Career</label>
                    </div>

                    <div class="mb-2 form-floating">
                        <input class="form-control" type="file" id="photo" name="photo" title="Photo" required>
                        <label for="photo" class="form-label">Photo</label>
                    </div>

                </div>

                <div class="mb-4 education">
                    <h4 align="center" class="text-light pt-3 form-title">Education Qualifications</h4>

                    <div class="ssc">
                        <h4 class="text-light" align="center">SSC Informations</h4>
                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="ssc_year" id="ssc_year"
                                aria-describedby="Passing Year" placeholder="Passing Year" title="Passing Year"
                                required>
                            <label for="ssc_year">Passing Year</label>
                        </div>

                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="ssc_group" id="ssc_group"
                                aria-describedby="Group / Technology" placeholder="Group / Technology"
                                title="Group / Technology" required>
                            <label for="ssc_group">Group / Technology</label>
                        </div>

                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="ssc_board" id="ssc_board"
                                aria-describedby="Board" placeholder="Board" title="Board" required>
                            <label for="ssc_board">Board</label>
                        </div>

                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="ssc_result" id="ssc_result"
                                aria-describedby="Result" placeholder="Result" title="Result" required>
                            <label for="ssc_year">Result</label>
                        </div>
                    </div>

                    <div class="hsc">
                        <h4 class="text-light" align="center">HSC Informations</h4>
                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="hsc_year" id="hsc_year"
                                aria-describedby="Passing Year" placeholder="Passing Year" title="Passing Year">
                            <label for="hsc_year">Passing Year</label>
                        </div>

                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="hsc_group" id="hsc_group"
                                aria-describedby="Group / Technology" placeholder="Group / Technology"
                                title="Group / Technology">
                            <label for="hsc_group">Group / Technology</label>
                        </div>

                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="hsc_board" id="hsc_board"
                                aria-describedby="Board" placeholder="Board" title="Board">
                            <label for="hsc_board">Board</label>
                        </div>

                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="hsc_result" id="hsc_result"
                                aria-describedby="Result" placeholder="Result" title="Result">
                            <label for="hsc_year">Result</label>
                        </div>

                    </div>


                    <div class="diploma">
                        <h4 class="text-light" align="center">Diploma Informations</h4>
                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="diploma_year" id="diploma_year"
                                aria-describedby="Passing Year" placeholder="Passing Year" title="Passing Year">
                            <label for="diploma_year">Passing Year</label>
                        </div>

                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="diploma_group" id="diploma_group"
                                aria-describedby="Group / Technology" placeholder="Group / Technology"
                                title="Group / Technology">
                            <label for="diploma_group">Group / Technology</label>
                        </div>

                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="diploma_board" id="diploma_board"
                                aria-describedby="Board" placeholder="Board" title="Board">
                            <label for="diploma_board">Board</label>
                        </div>

                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="diploma_result" id="diploma_result"
                                aria-describedby="Result" placeholder="Result" title="Result">
                            <label for="diploma_year">Result</label>
                        </div>
                    </div>

                    <div class="bsc">
                        <h4 class="text-light" align="center">BSc Informations</h4>
                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="bsc_year" id="bsc_year"
                                aria-describedby="Passing Year" placeholder="Passing Year" title="Passing Year">
                            <label for="bsc_year">Passing Year</label>
                        </div>

                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="bsc_group" id="bsc_group"
                                aria-describedby="Group / Technology" placeholder="Group / Technology"
                                title="Group / Technology">
                            <label for="bsc_group">Group / Technology</label>
                        </div>

                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="bsc_board" id="bsc_board"
                                aria-describedby="Board" placeholder="Board" title="Board">
                            <label for="bsc_board">Board</label>
                        </div>

                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="bsc_result" id="bsc_result"
                                aria-describedby="Result" placeholder="Result" title="Result">
                            <label for="bsc_year">Result</label>
                        </div>
                    </div>

                    <div class="msc">
                        <h4 class="text-light" align="center">MSc Informations</h4>
                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="msc_year" id="msc_year"
                                aria-describedby="Passing Year" placeholder="Passing Year" title="Passing Year">
                            <label for="msc_year">Passing Year</label>
                        </div>

                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="msc_group" id="msc_group"
                                aria-describedby="Group / Technology" placeholder="Group / Technology"
                                title="Group / Technology">
                            <label for="msc_group">Group / Technology</label>
                        </div>

                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="msc_board" id="msc_board"
                                aria-describedby="Board" placeholder="Board" title="Board">
                            <label for="msc_board">Board</label>
                        </div>

                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" name="msc_result" id="msc_result"
                                aria-describedby="Result" placeholder="Result" title="Result">
                            <label for="msc_year">Result</label>
                        </div>
                    </div>
                </div>

                <div class="experience">
                    <div class="mb-2 form-floating">
                        <textarea class="form-control" placeholder="Experience" id="experience"
                            name="experience" style="height: 100px" title="Experience"></textarea>
                        <label for="experience">Experience</label>
                    </div>
                </div>

                <div class="references">
                    <div class="mb-2 form-floating">
                        <textarea class="form-control" placeholder="References" id="references"
                            name="references" style="height: 100px" title="References"></textarea>
                        <label for="references">References</label>
                    </div>
                </div>


                <div class="mb-1 form-check">
                    <input type="checkbox" class="form-check-input" name="terms" id="terms" title="Terms & Conditions"
                        required>
                    <label class="form-check-label text-light" for="terms" title="Terms & Conditions">Accept Terms &
                        Conditions</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


    <!-- <?php include('footer.php'); ?> -->

</body>

</html>