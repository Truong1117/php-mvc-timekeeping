<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <style type="text/css">
        @font-face {
            font-family: 'BebasNeueRegular';
            src: url('BebasNeue-webfont.eot');
            src: url('BebasNeue-webfont.eot?#iefix') format('embedded-opentype'),
                url('BebasNeue-webfont.woff') format('woff'),
                url('BebasNeue-webfont.ttf') format('truetype'),
                url('BebasNeue-webfont.svg#BebasNeueRegular') format('svg');
            font-weight: normal;
            font-style: normal;

        }


        .clock {
            width: 800px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #333;
            color: #fff;
            background: #202020;
        }

        #Date {
            font-family: 'BebasNeueRegular', Arial, Helvetica, sans-serif;
            font-size: 20px;
            text-align: center;
            text-shadow: 0 0 5px #00c6ff;
        }

        ul {
            width: 200px;
            margin: 0 auto;
            padding: 0px;
            list-style: none;
            text-align: center;
        }

        ul li {
            display: inline;
            font-size: 1em;
            text-align: center;
            font-family: 'BebasNeueRegular', Arial, Helvetica, sans-serif;
            text-shadow: 0 0 5px #00c6ff;
        }

        #point {
            position: relative;
            -moz-animation: mymove 1s ease infinite;
            -webkit-animation: mymove 1s ease infinite;
            padding-left: 10px;
            padding-right: 10px;
        }

        @-webkit-keyframes mymove {
            0% {
                opacity: 1.0;
                text-shadow: 0 0 20px #00c6ff;
            }

            50% {
                opacity: 0;
                text-shadow: none;
            }

            100% {
                opacity: 1.0;
                text-shadow: 0 0 20px #00c6ff;
            }
        }

        @-moz-keyframes mymove {
            0% {
                opacity: 1.0;
                text-shadow: 0 0 20px #00c6ff;
            }

            50% {
                opacity: 0;
                text-shadow: none;
            }

            100% {
                opacity: 1.0;
                text-shadow: 0 0 20px #00c6ff;
            }
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
        // Create two variable with the names of the months and days in an array
        var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]
        // Create a newDate() object
        var newDate = new Date();
        // Extract the current date from Date object
        newDate.setDate(newDate.getDate());
        // Output the day, date, month and year    
        $('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
        $('#dateval').val(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
        setInterval(function() {
            // Create a newDate() object and extract the seconds of the current time on the visitor's
            var seconds = new Date().getSeconds();
            // Add a leading zero to seconds value
            $("#sec").html((seconds < 10 ? "0" : "") + seconds);
        }, 1000);
        setInterval(function() {
            // Create a newDate() object and extract the minutes of the current time on the visitor's
            var minutes = new Date().getMinutes();
            // Add a leading zero to the minutes value
            $("#min").html((minutes < 10 ? "0" : "") + minutes);
        }, 1000);
        setInterval(function() {
            // Create a newDate() object and extract the hours of the current time on the visitor's
            var hours = new Date().getHours();
            // Add a leading zero to the hours value
            $("#hours").html((hours < 10 ? "0" : "") + hours);
        }, 1000);
        setInterval(function() {
            // Create a newDate() object and extract the hours of the current time on the visitor's
            var hours = new Date().getHours();
            // Add a leading zero to the hours value
            $("#hh").val((hours < 10 ? "0" : "") + hours);
        }, 1000);
        setInterval(function() {
            // Create a newDate() object and extract the minutes of the current time on the visitor's
            var minutes = new Date().getMinutes();
            // Add a leading zero to the minutes value
            $("#mm").val((minutes < 10 ? "0" : "") + minutes);
        }, 1000);
        setInterval(function() {
            // Create a newDate() object and extract the seconds of the current time on the visitor's
            var seconds = new Date().getSeconds();
            // Add a leading zero to seconds value
            $("#ss").val((seconds < 10 ? "0" : "") + seconds);
        }, 1000);
        });
    </script>
    <link rel="canonical" href="http://www.alessioatzeni.com/wp-content/tutorials/jquery/CSS3-digital-clock/index.html" />
</head>

<body>
    <div class="container">
        <div class="clock">
            <div id="Date"></div>
            <ul>
                <li id="hours"> </li>
                <li id="point">:</li>
                <li id="min"> </li>
                <li id="point">:</li>
                <li id="sec"> </li>
            </ul>
        </div>
        <hr />

<?php 
date_default_timezone_set("Asia/Ho_Chi_Minh");
// echo $id_date = date("D/M/Y"); // 26/09/2014 14:27:08
// $arr_date = explode("/",$id_date);
// echo "<br/>";
// print_r($arr_date);
// echo $id_time = date("H:i:s");
// $arr_time = explode(":",$id_time);
// echo "<br/>";
// print_r($arr_time);
?>

        <div>
            <form action="insert_Timekeeping/<?php echo $data["username"]; ?>" method="POST">
                <div class="form-group">
                    <input type="hidden" name="hours" id="hh">
                    <input type="hidden" name="mins" id="mm">
                    <input type="hidden" name="secs" id="ss">
                    <input type="hidden" name="times" value="<?php echo date("H:i:s")?>">
                    <input type="hidden" name="dtoday" value="<?php echo date("Y/m/d") ?>">
                    <button name="timekeeping" class="btn bg-danger">Điểm danh</button>
                    <span class="help-block"><span class="glyphicon glyphicon-question-sign"></span> Press Entr to submit.</span>
                </div>
            </form>
        </div>

    </div>
    <script type="text/javascript">
        var myWindow;

        function openWin() {
            var idnum = $('.myidnum').attr('data-idnum');
            var dtoday = $('.myidnum').attr('data-date');
            myWindow = window.open("display_dtr.php?employeenumber=" + idnum + "&date=" + dtoday, "myWindow", "width=800,height=200");
        }

        function closeWin() {
            myWindow.close();
        }
    </script>
</body>

</html>