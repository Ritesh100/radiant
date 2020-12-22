<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datepicker.css">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <div class="inner-layer">
        <div class="container">
            <div class="row no-margin">
                <div class="col-sm-7">
                    <div class="content">
                        <h1>Radiant Skin Care and Hair Transplant Center </h1>
                        <p> Book Your appointment from here by filling the given boxes. Our tean will contact you as
                            soon as possible</p>
                        <h2>For Help Call : 9815959413, 015902245, 984998999</h2>
                        <a href="index.html" class="btn btn-primary ">Home</a>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Appointemnt</h2>
                        </div>
                        <form action="data.php" method="post">
                            <input type="text" name="name" placeholder="Full Name ">
                            <input type="text" name="email" placeholder="Email">
                            <input type="text" name="address" placeholder="Address">
                            <input type="date" name="date" placeholder="Booking Date">
                            <textarea name="message" id="" cols="30" rows="10"
                                placeholder="Write your problems here."></textarea>
                            <button type="submit" name="submit"> Book Appointment</button>


                        </form>







                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>

<script>
$(document).ready(function() {
    $("#dat").datepicker();
})
</script>

</body>

</html>