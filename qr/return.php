<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Key</title>

    <link rel="stylesheet" href="css/bootstrap.min.css?v=9999">
    <link rel="stylesheet" href="css/font-awesome.min.css?v=9999">
    <link rel="stylesheet" href="css/aos.css?v=9999">
    <link rel="stylesheet" href="css/iframe.css?v=9999" />
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-gymso-style.css?v=9999">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt&display=swap">
</head>
<body>
     <!-- MENU BAR -->
     <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.php">Computer Lab</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">หน้าหลัก</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">เกี่ยวกับ</a>
                    </li>

                    <li class="nav-item">
                        <a href="booking_search.php" class="nav-link smoothScroll">ค้นหาตารางเรียน</a>
                    </li>

                    <li class="nav-item">
                        <a href="#search_sec" class="nav-link smoothScroll">ตารางเรียน</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">ติดต่อ</a>
                    </li>
                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="booking_room.php" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </div>

        </div>
    </nav>
</body>
</html>
<br><br><br><br><br><br>

        <script src="ht.js"></script>
        <style>
        .result{
            background-color: green;
            color:#fff;
            padding:20px;
        }
        .row{
            display:flex;
        }
        </style>
        <div class ="container" style="text-align center">
<center><h2>คืนกุญแจห้อง</h2></center>
        <div class="row">
        <div class="col">
            <div style="width:500px;" id="reader"></div>
        </div>
        <audio id="myAudio1">
            <source src="success.mp3" type="audio/ogg">
        </audio>
        <audio id="myAudio2">
            <source src="failes.mp3" type="audio/ogg">
        </audio>

        <script>
        var x = document.getElementById("myAudio1");
        var x2 = document.getElementById("myAudio2");      
        function showHint(str) {
            if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
            } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "gethint.php?q=" + str, true);
            xmlhttp.send();
            }
        }

        function playAudio() { 
            x.play(); 
        } 
        </script>

        <div class="col" style="padding:30px;">
            <h4>SCAN RESULT</h4>
            <div>Employee name</div>
            <form action="">
            <input type="text" name="start" class="input" id="result" onkeyup="showHint(this.value)" placeholder="result here" readonly="" />
            </form>
            <p>Status: <span id="txtHint"></span></p>
        </div>
        </div>

        <script type="text/javascript">
        function onScanSuccess(qrCodeMessage) {
            let qr = qrCodeMessage.substring(1, 4);
            document.getElementById("result").value = qr;
            showHint(qr);
        playAudio();

        }
        function onScanError(errorMessage) {
        //handle scan error
        }
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess, onScanError);

        </script>

<br><br><br><br><br><br>
<footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="ml-auto col-lg-4 col-md-5">
                    <p class="copyright-text">Copyright &copy; 2020 Gymso Fitness Co.

                        <br>Design: <a href="https://www.tooplate.com">Tooplate</a>
                    </p>
                </div>

                <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                    <p class="mr-4">
                        <i class="fa fa-envelope-o mr-1"></i>
                        <a href="#">hello@company.co</a>
                    </p>

                    <p><i class="fa fa-phone mr-1"></i> 010-020-0840</p>
                </div>

            </div>
        </div>
    </footer>
    </div>
</body>
</html>