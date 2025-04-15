<?php include 'common/session.php' ?>
<?php if($_SESSION['calendar'] == on){?>
<!doctype html>
<html lang="en">

<head>
   <?php include 'common/title.php' ?> 
   <!-- Bootstrap Css -->
   <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
   <!-- Icons Css -->
   <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
   <!-- App Css-->
   <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
   <!-- Sweet Alert -->
   <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
   <!-- Calendar -->
   <link href="assets/libs/@fullcalendar/core/main.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/@fullcalendar/daygrid/main.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/@fullcalendar/bootstrap/main.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/@fullcalendar/timegrid/main.min.css" rel="stylesheet" type="text/css" />
</head>

<?php include 'common/body.php' ?>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include 'common/header.php' ?>
        <?php include 'common/sidebar.php' ?>



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                   <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <div class="page-title-left">
                                    <h4 class="mb-2">&ensp;Calendar</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Calendar</li>
                                        </ol>
                                    </div>
                                    
                                <?php if($_SESSION['addbut'] == on){?>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li><a href="hr_calendar_form" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-calendar-clock mr-2"></i>  Add Event </a></li>&ensp;
                                        </ol>
                                    </div>
                                <?php } ?>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->    

                        <div class="row">
                            <div class="col-12">
                                <div class="row"> 
                                    <div id="external-events" class="m-t-20">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div style="text-transform: capitalize;" id="calendar"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col -->

                                </div>
                            </div>
                        </div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


           <?php include 'common/footer.php' ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <?php include 'common/theme.php' ?>

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
    <!-- Sweet alert init js-->
    <script src="assets/js/pages/sweet-alerts.init.js"></script>

    <!-- plugin js -->
    <script src="assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/libs/jquery-ui-dist/jquery-ui.min.js"></script>
    <script src="assets/libs/@fullcalendar/core/main.min.js"></script>
    <script src="assets/libs/@fullcalendar/bootstrap/main.min.js"></script>
    <script src="assets/libs/@fullcalendar/daygrid/main.min.js"></script>
    <script src="assets/libs/@fullcalendar/timegrid/main.min.js"></script>
    <script src="assets/libs/@fullcalendar/interaction/main.min.js"></script>

    <!-- Calendar init -->
    <script>
        !function($) {
            "use strict";

            var CalendarPage = function() {};

            CalendarPage.prototype.init = function() {



                var addEvent=$("#event-modal");
                var modalTitle = $("#modal-title");
                var formEvent = $("#form-event");
                var selectedEvent = null;
                var newEventData = null;
                var forms = document.getElementsByClassName('needs-validation');
                var selectedEvent = null;
                var newEventData = null;
                var eventObject = null;
                /* initialize the calendar */

                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                var Draggable = FullCalendarInteraction.Draggable;
                var externalEventContainerEl = document.getElementById('external-events');
            // init dragable
            new Draggable(externalEventContainerEl, {
                itemSelector: '.external-event',
                eventData: function (eventEl) {
                    return {
                        title: eventEl.innerText,
                        className: $(eventEl).data('class')
                    };
                }
            });
            var defaultEvents = [
            <?php
            $res = $MySQLiconn->query("SELECT * FROM calendar");
            while($row=$res->fetch_array()){                                       
                ?>
                {
                    title: '<?php echo $row['calendarTitle']; ?>',
                    start: '<?php echo $row['calendarSdate']; ?>',
                    end: '<?php echo $row['calendarEdate']; ?>',
                    className: '<?php echo $row['calendarColor']; ?>'
                },
                
                <?php
            } 
            ?>

            {
            }];

            var draggableEl = document.getElementById('external-events');
            var calendarEl = document.getElementById('calendar');

            function addNewEvent(info) {
                addEvent.modal('false');
                formEvent.removeClass("was-validated");
                formEvent[0].reset();

                $("#event-title").val();
                $("#event-start").val();
                $("#event-end").val();
                $('#event-category').val();
                modalTitle.text('Add Event');
                newEventData = info;
            }
            

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid'],
                editable: false,
                droppable: true,
                selectable: true,
                defaultView: 'dayGridMonth',
                themeSystem: 'bootstrap',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                eventClick: function(info) {
                    addEvent.modal('show');
                    formEvent[0].reset();
                    selectedEvent = info.event;
                    $("#event-title").val(selectedEvent.title);
                    $("#event-start").val(selectedEvent.start);
                    $("#event-end").val(selectedEvent.end);
                    $('#event-category').val(selectedEvent.classNames[0]);
                    newEventData = null;
                    modalTitle.text('Event');
                    newEventData = null;
                },
                dateClick: function(info) {
                    addNewEvent(info);
                },
                events : defaultEvents
            });
            calendar.render();
            
            /*Add new event*/
            // Form to add new event

            $(formEvent).on('submit', function(ev) {
                ev.preventDefault();
                var inputs = $('#form-event :input');
                var updatedTitle = $("#event-title").val();
                var updatedCategory =  $('#event-category').val();
                
                // validation
                if (forms[0].checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    forms[0].classList.add('was-validated');
                } else {
                    if(selectedEvent){
                        selectedEvent.setProp("title", updatedTitle);
                        selectedEvent.setProp("classNames", [updatedCategory]);
                    } else {
                        var newEvent = {
                            title: updatedTitle,
                            start: newEventData.date,
                            allDay: newEventData.allDay,
                            className: updatedCategory
                        }
                        calendar.addEvent(newEvent);
                    }
                    addEvent.modal('hide');
                }
            });

            $("#btn-delete-event").on('click', function(e) {
                if (selectedEvent) {
                    selectedEvent.remove();
                    selectedEvent = null;
                    addEvent.modal('hide');
                }
            });

            $("#btn-new-event").on('click', function(e) {
                addNewEvent({date: new Date(), allDay: true});
            });

        },
        //init
        $.CalendarPage = new CalendarPage, $.CalendarPage.Constructor = CalendarPage
    }(window.jQuery),

    //initializing 
    function($) {
        "use strict";
        $.CalendarPage.init()
    }(window.jQuery);
</script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['calendar'] != on)
{
    header('location:error404');
    exit;
}
?>