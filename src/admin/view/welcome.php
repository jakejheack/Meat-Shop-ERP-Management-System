<?php include 'common/session.php'; ?>

<!doctype html>
<html lang="en">

<head>
   <?php include 'common/title.php'; ?> 
   <!-- Bootstrap Css -->
   <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
   <!-- Icons Css -->
   <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
   <!-- App Css-->
   <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
   <!-- Sweet Alert -->
   <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
   <style>
    body {
  font-family: "Lato", sans-serif;
}

.background {
  background: url("../uploads/welcome/pattern.jpg");    
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  min-height: 100vh;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  filter: brightness(1.2);

}
.background:before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0));
}
.background h1 {
  font-size: 4rem;
  font-weight: 700;
  color:#000;

}

.custom-input, .btn-custom {
  border: 0;
  background: transparent;
  border-bottom: 4px solid white;
  border-radius: 0;
  margin-bottom: 0;
}

.custom-input:focus {
  border-color: white;
  background: transparent;
  color: white;
}

.btn-custom {
  color: white;
  cursor: pointer;
}

.display-5 {
  font-size: 1.5rem;
}

#greeting {
  margin-top: 1rem;
  font-size: 2rem;
}

@media (min-width: 576px) {
  .background h1 {
    font-size: 5.5rem;
  }

  .display-5 {
    font-size: 2.5rem;
  }

  #greeting {
    margin-top: 1rem;
    font-size: 1rem;
  }
}
@media (min-width: 992px) {
  .background h1 {
    font-size: 6rem;
  }

  #greeting {
    font-size: 2rem;
  }
}
@media (min-width: 1200px) {
  .background h1 {
    font-size: 7.5rem;
  }

  #greeting {
    font-size: 2.5rem;
  }
}
   </style>
</head>

<?php include 'common/body.php'; ?>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include 'common/sidebar.php'; ?>



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="background">
               <div class="container">
                  <div class="row flex-column justify-content-center align-items-center text-center">
                     <div class="col-sm-12 col-md-10 col-lg-8">
                        <h1 id="time">12:00 AM</h1>
                        <h3 id="day" class="display-5" style="color: black;">Monday, January 01</h3>
                        <h2 id="greeting" style="color: black;">Good Morning, User.</h2>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <?php include 'common/theme.php'; ?>

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- Time -->
    <script src="assets/js/time.js"></script>
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <!-- Session timeout js -->
    <script src="assets/libs/@curiosityx/bootstrap-session-timeout/index.js"></script>
    <!-- Session timeout js -->
    <script src="assets/js/pages/session-timeout.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script>
        // Document ready function
        $(function() {

    // Time function to get the date/time
    function time() {

        // Create new date var and init other vars
        var date = new Date(),
            hours = date.getHours(), // Get the hours
            minutes = date.getMinutes().toString(), // Get minutes, convert to string
            ante, // Will be used for AM and PM later
            greeting, // Set the appropriate greeting for the time of day
            dd = date.getDate().toString(), // Get the current day
            userName = "<?php echo ucwords($_SESSION['accfname']); ?>"; // Can be used to insert a unique name

        /* Set the AM or PM according to the time, it is important to note that up
        to this point in the code this is a 24 clock */
        if (hours < 12) {
            ante = "AM";
            greeting = "Morning";
        } else if (hours === 12 && hours >= 3) {
            ante = "PM";
            greeting = "Afternoon"
        } else {
            ante = "PM";
            greeting = "Evening";
        }

        /* Since it is a 24 hour clock, 0 represents 12am, if that is the case
        then convert that to 12 */
        if (hours === 0) {
            hours = 12;
            
            /* For any other case where hours is not equal to twelve, let's use modulus
            to get the corresponding time equivilant */
        } else if (hours !== 12) {
            hours = hours % 12;
        }

        // Minutes can be in single digits, hence let's add a 0 when the length is less than two
        if (minutes.length < 2) {
            minutes = "0" + minutes;
        }

        // Let's do the same thing above here for the day
        if (dd.length < 2) {
            dd = "0" + dd;
        }

        // Months
        Date.prototype.monthNames = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
        ];

        // Days
        Date.prototype.weekNames = [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
        ];
        
        // Return the month name according to its number value
        Date.prototype.getMonthName = function() {
            return this.monthNames[this.getMonth()];
        };
        
        // Return the day's name according to its number value
        Date.prototype.getWeekName = function() {
            return this.weekNames[this.getDay()];
        };

        // Display the following in html
        $("#time").html(hours + ":" + minutes + " " + ante);
        $("#day").html(date.getWeekName() + ", " + date.getMonthName() + " " + dd);
        $("#greeting").html("Good " + greeting + ", " + userName + ".");
        
        // The interval is necessary for proper time syncing
        setInterval(time, 1000);
    }
    time();
});
</script>
</body>
</html>
