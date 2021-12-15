<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
<style>
    body {
      font-family: "Lato", sans-serif;
    }

    .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
    </style>
</head>

<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/absen">Absen</a>
        <a href="/pegawai">Pegawai</a>
        <a href="/tugas">Tugas</a>
        <a href="">UAS</a>
        <a href="/ikan">Praktikum</a>
      </div>
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Buka</span>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-1 text-right">
                        <img src="https://zedemy.com/wp-content/uploads/avatars/1650/6130eb0642552-bpfull.jpg" style="width:100px;">
                    </div>
                    <div class="col-md-3 text-right">
                        <h1>5026201070</h1>
                    </div>
                    <div class="col-md text-left">
                        <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Galihindra Nevano Nurvadika</h1>
                    </div>
                </div>
                <div class="col-md-9">
                    <h3>@yield('judulhalaman')</h3>
                    @section('konten')
                    @show
                </div>
            </div>
        </div>
        <div class="row">




        <footer>
            <p style="text-align: center">Hak cipta oleh 5026201070 - Galihindra Nevano Nurvadika</p>
          </footer>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#dtpickerdemo').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                showTodayButton: false,
                locale : 'id',
                "defaultDate": new Date(),
            });
        });
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
 </script>

</body>

</html>
