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

    <div class="container-fluid">

        <div class="user-form">
            <h2 align="center" class="form-title">Fill the form correctly</h2>
            <form action="./cv.php" method="post" class="form-group text-dark">

                <div class="mb-3 form-floating">
                    <input type="text" class="form-control" id="full_name" name="full_name" aria-describedby="full_name"
                        placeholder="Full Name" title="Full Name" required>
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

                <div class="mb-3 form-floating">
                    <input type="text" class="form-control" name="religion" id="religion" aria-describedby="religion"
                        placeholder="Religion" title="Religion" required>
                    <label for="religion" class="form-label">Religion</label>
                </div>

                <select class="form-select mb-2" aria-label=".form-select-sm" name="marital_status">
                    <option selected>Marital Status</option>
                    <option value="Single">Single</option>
                    <option value="Marriaged">Marriaged</option>
                    <option value="Divorced">Divorced</option>
                  </select>

                <div class="mb-3 form-floating">
                    <input type="date" class="form-control" name="date_of_birth" aria-describedby="date_of_birth"
                        title="Date of Birth" placeholder="dd/mm/yyyy" required>
                    <label for="date_of_birth" class="form-label">Date of Birth</label>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="terms" id="terms" title="Terms & Conditions" required>
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