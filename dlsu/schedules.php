<?php
session_start();
ob_start();
include 'include/db.php';
//

 ?>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>De La Salle University</title>

        <meta name="description" content="De La Salle University (DLSU) is a leading university in the Philippines, renowned for its academic excellence, groundbreaking research, and empowering community engagement.">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/fullcalendar/fullcalendar.min.css">

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
        <link rel="stylesheet" id="css-main" href="assets/css/custom.css">

        <!-- END Stylesheets -->
    </head>
    <body onload="loadevent()">


        <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed main-content-narrow">
            <!-- Side Overlay-->
            <?php include('sideright.php') ?>
            <!-- END Side Overlay -->

            <!-- Sidebar -->

            <nav id="sidebar">
                <!-- Sidebar Content -->
                <?php include ('sidebar.php')?>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <?php include('header.php') ?>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="be_pages_generic_search.html" method="post">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->

                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">

                    <div class="block">
                        <div class="block-content">
                            <div class="row items-push">
                                <div class="col-xl-9">
                                    <!-- Calendar Container -->
                                    <div class="js-calendar"></div>
                                </div>
                                <div class="col-xl-3 d-none d-xl-block">
                                    <!-- Add Event Form -->
                                    <!-- <form class="js-form-add-event mb-30" action="be_comp_calendar.html" method="post"> -->
                                        <div class="input-group">
                                            <input type="text" class="js-add-event form-control" id="eventname" placeholder="Add Event..">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-secondary" onclick="saveevent()">
                                                    <i class="fa fa-plus-circle"></i>
                                                </button>
                                            </div>
                                        </div>
                                    <!-- </form> -->
                                    <!-- END Add Event Form -->

                                    <!-- Event List -->
                                    <ul class="js-events list list-events" id="x">
                                       <!--  <li class="bg-info-light">Project Mars</li>
                                        <li class="bg-success-light">Cinema</li>
                                        <li class="bg-danger-light">Project X</li>
                                        <li class="bg-warning-light">Skype Meeting</li>
                                        <li class="bg-info-light">Codename PX</li>
                                        <li class="bg-success-light">Weekend Adventure</li>
                                        <li class="bg-warning-light">Meeting</li>
                                        <li class="bg-success-light">Walk the dog</li>
                                        <li class="bg-info-light">AI schedule</li> -->
                                    </ul>
                                    <div class="text-center">
                                        <em class="font-size-xs text-muted"><i class="fa fa-arrows"></i> Drag and drop events on the calendar</em>
                                    </div>
                                    <!-- END Event List -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Calendar -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-sm clearfix">
                    
                    <div class="float-left">
                        <a class="font-w600" href="https://itbs.com.ph" target="_blank">ITBS Corp.</a> &copy; <span class="js-year-copy"></span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <script src="assets/js/codebase.core.min.js"></script>

        <script src="assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/js/plugins/moment/moment.min.js"></script>
        <script src="assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>

        <!-- Page JS Code -->
        <!-- <script src="assets/js/pages/be_comp_calendar.min.js"></script> -->
    </body>
</html>


<!-- <script type="text/javascript" src="jquery.js"></script> -->

<script type="text/javascript">
   
 /*!
 * Codebase - v3.3.0
 * @author pixelcave - https://pixelcave.com
 * Copyright (c) 2020
 */

var id;
 function getid(eventid)
 {
 id=eventid;
 loadevent();
 }



 function saveevent()
{

var eventname = $('#eventname').val();

     $.ajax({
             type: "POST",
             url: "include/all_query.php",
             data: {
                 "saveevent" :'1',
                 "eventname" :eventname
             }, 
             success: function(data)
             {
               $('#eventname').val('');
                loadevent();
             }
         }); 
}

function loadevent()
{
     $.ajax({
             type: "POST",
             url: "include/all_query.php",
             data: {
                 "loadevent" :'1',
             }, 
             success: function(data)
             {
              $("#x").html(data);
             }
         });

     eventCalendar()
}


function  eventCalendar()
{
! function (e) {
    var t = {};

    function n(r) {
        if (t[r]) return t[r].exports;
        var a = t[r] = {
            i: r,
            l: !1,
            exports: {}
        };
        return e[r].call(a.exports, a, a.exports, n), a.l = !0, a.exports
    }
    n.m = e, n.c = t, n.d = function (e, t, r) {
        n.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: r
        })
    }, n.r = function (e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, n.t = function (e, t) {
        if (1 & t && (e = n(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var r = Object.create(null);
        if (n.r(r), Object.defineProperty(r, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var a in e) n.d(r, a, function (t) {
                return e[t]
            }.bind(null, a));
        return r
    }, n.n = function (e) {
        var t = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return n.d(t, "a", t), t
    }, n.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, n.p = "", n(n.s = 2)
}([, , function (e, t, n) {
    e.exports = n(3)
}, function (e, t) {
    function n(e, t) {
        for (var n = 0; n < t.length; n++) {
            var r = t[n];
            r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
        }


    }
    var r = function () {
        function e() {
            ! function (e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, e)
        }
        var t, r, a;
        return t = e, a = [{
            key: "addEvent",
            value: function () {
                var e = this,
                    t = jQuery(".js-add-event"),
                    n = "";
                jQuery(".js-form-add-event").on("submit", (function (r) {
                    return (n = t.prop("value")) && (jQuery(".js-events").prepend("<li>" + jQuery("<div />").text(n).html() + "</li>"), t.prop("value", ""), e.initEvents()), !1
                }))
            }
        }, {
            key: "initEvents",
            value: function () {
                jQuery(".js-events").find("li").each((function (e, t) {
                    var n = jQuery(t),
                        r = {
                            title: jQuery.trim(n.text()),
                            color: n.css("background-color")

                        };
                    n.data("eventObject", r), n.draggable({
                        zIndex: 999,
                        revert: !0,
                        revertDuration: 0
                    })
                }))


            }
        }, {
            key: "initCalendar",
            value: function () {
                var e = new Date(),
                    t = e.getDate(),
                    n = e.getMonth(),
                    r = e.getFullYear();
                    
                jQuery(".js-calendar").fullCalendar({
                    firstDay: 1,
                    editable: !0,
                    droppable: !0,
                    header: {
                        left: "title",
                        right: "prev,next today month,agendaWeek,agendaDay,listWeek"
                    },
                    drop: function (e, t, n, r) {
                        var a = jQuery(n.helper),
                            i = a.data("eventObject"),
                            l = jQuery.extend({}, i);
                        l.start = e, jQuery(".js-calendar").fullCalendar("renderEvent", l, !0), a.remove()
                        
                       
                   var eventDate=e.format('Y-MM-DD');

                        $.ajax({
             type: "POST",
             url: "include/all_query.php",
             data: {
                 "updateeventsatatus" :'1',
                 "eventid" :id,
                 "eventDate" :eventDate
             }, 
             success: function(data)
             {
                loadevent();
             }
         });


                    },
                    events: <?php

$slect="SELECT * FROM `tblevent` WHERE status =0  ORDER BY eventid DESC";
 $runslect=mysqli_query($conn, $slect);
echo '[';

 while ($row = mysqli_fetch_assoc($runslect))
 {

     $eventday = $row['eventdate'];

    $eventday =explode('-', $eventday);


echo '{title: "'.$row['eventname'].'",
start: new Date(r, n,'.$eventday[2].'),allDay: !0,},';
 }
echo ']';

                        ?>
      

                })

            }
        }, {
            key: "init",
            value: function () {
                this.addEvent(), this.initEvents(), this.initCalendar()
            }
        }], (r = null) && n(t.prototype, r), a && n(t, a), e
    }();
    jQuery((function () {
        r.init()
    }))
}]);

}

</script>