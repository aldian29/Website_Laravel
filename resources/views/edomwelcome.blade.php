<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <title>Welcome</title>
    <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
    <style>
        body{
            background-color: black;
            font-family: sans-serif;
            
        }
        #logotrpl{
            width: 675px;
            right: 75px;
            position: relative;
        }
        #logotrpl2{
            width: 70%;
            position: relative;
            left: 360px;
            bottom: 130px;
        }
        #welcome{
            font-size: 30pt;
            color: #FE9327;
            font-weight: bold;
            border-left: 4px white solid;
            height: 100px;
        }
        #btnwelcome{
            background-color: #FE9327;
            padding-left:30px;
            font-size: 16pt;
            padding-right: 30px;
            font-weight: bold; 
            margin-left:80px;
            margin-top: 50px; 
        }
        #sign{
            color: #FE9327; 
            margin-left:40px;
        }

        .hovericon{
            border: 1px ;
        }
        .hovericon:hover{
            background-color: darkgrey;
            box-shadow: 5px 5px #FE9327;
            -webkit-animation-delay:5px 5px #FE9327;
            -moz-animation-delay:5px 5px #0000ff;
        }
    </style>
</head>
<body>
    <main class="container">
        <div class="row">
                <img src="folderpoto/bw_bg_logo_trpl.png" id="logotrpl">
            <div class="col-md-5 ">
                <img src="folderpoto/logo_trpl.png" id="logotrpl2">
                <h2 id="welcome">Selamat Datang <br>Di edom quesioner trpl</h2>
                <p style="color: white; margin-left:5px;">(Pengisian quesioner dosen trpl)</p><br>
                <a href="/login1">
                    <button type="button" class="btn btn-outline-warning btn-fw" 
                    style="padding-left:50px;padding-right:50px; margin-left:70px;">Next</button>
                </a><br><br>
                <a href="#" id="sign">don't have account?,sign in</a>
                <a href="https://www.youtube.com/@trplpei1864"  style="position: relative; top:50px; left:400px;"><img src="folderpoto/ic_yt.png" class="hovericon" ></a>
                <a href="https://linktr.ee/trplpei" style="position: relative; bottom:80px; left:345px;"><img src="folderpoto/ic_internet.png"class="hovericon" style="width: 45px;"></a>
                <a href="https://www.instagram.com/trpl.pei/" style="position: relative; bottom:200px; left:290px;"><img src="folderpoto/ic_ig.png" class="hovericon"style="width: 60px;"></a>
            </div>
        </div>
    </main>
    <script src="../../vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <!-- endinject -->
</body>
</html>