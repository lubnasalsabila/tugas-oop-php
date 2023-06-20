<?php
    require 'function.php';
$students = query("SELECT * FROM data");

    if (isset($_POST["submit"])){

        if( tambahData($_POST)>0){
        echo "data berhasil dimasukan";
        }else{
        echo "data gagal dimasukkan";
        }
}

$donatur = new progres();
$tnom = new progres();
$tdon = new progres();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>  
    <style>
        *{
            font-family: 'Be Vietnam Pro', sans-serif;
        }
        .navbar{
             width: 100%;
             margin: auto;
             padding: 5px 0;
             display: flex;
             justify-content: space-between;
        }
        .logo{
            float: left;
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 113%;
            padding-top: 30px;
        }

        .navbar ul li {
            list-style: none;
            display: inline-block;
            margin: 0 15px;
            position: relative;
            font-size: 20px;
        }
        .navbar ul li a{
            color: black;
            text-decoration: none;
        }
        .navbar ul li::after {
            content: '' ;
            height: 3px;
            width: 0px;
            background: #1F3984;
            position: absolute;
            left: 0;
            bottom: -10px;
            transition: 0.5s;
        }
        .navbar ul li:hover::after{
            width: 100%;
        }
        .content1 {
            padding-top: 170px;
            margin: 0px 35px;
        }
        .content1 p{
            font-size: 30px;
            color: #919191;
        }
        .content1 img{
            float: right;
            margin-left: 200px;
        }
        /* button {
            /* padding: 10px 20px; 
            border-radius: 7px;
            background-color: #1F3984;
            color: #ffff;
          }  */
        h1 {
            font-size: 58px;
            font-weight: 600;
        }
        h5 {
            color: #919191;
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 138%;
        }
        .text1{
            display: flex;
        }
        span{
            color: #1F3984;
        }
        .card1{
            margin-top: 9%;
            margin: 9% 35px;
        }
        h2{
            font-size: 40px;
        }
        .fot-card{
            background-color: #1F3984;
            padding:25px 25px 6px 25px; 
            border-radius: 0px 0px 5px 5px;
            font-size: 24px;
            font-weight: 500;
            line-height: 30px;
        }
        .fot-card span{
            color: #FFF500;
        } 
        .content3{
            margin: 20% 35px; 
        }
        h4{
            color: #919191;
            font-size: 30px;
        }
        .content3 h3{
            font-size: 37px;
        }
        .card3-1{
            display: flex;
            margin-bottom: 35px;
            border-style: solid;
            border-color: transparent;
        }
        .card3-2{
            display: flex;
            margin-bottom: 35px;
            border-style: solid;
            border-color: transparent;
        }
        .big{
            font-size: 35px;
        }
        .little{
            font-size: 20px
        }
        .content2 h1{
            font-size: 40px;
            font-weight: 700;
        }
        .letak{
            margin: 15px 15px;
        }
        .content3 img{
            float: right;
            width: 450px;
            height: 780px;
            border-radius: 15px;
            padding:0px 30px 0px 30px ;
        }
        .content4 h5{
            font-size: 37px;
            font-weight: 700;
            line-height: 47px;
            letter-spacing: 0em;
            text-align: left;
        }
        .content4 p{
            font-weight: 500;
            font-size: 23.39px;
            line-height: 160%;
            color: #919191;
        }
        .gal img{
            border-radius: 15px;
        }
        .gal, .card{
            border-radius: 15px;
        }
        .card5{
            /* height: 50px; */
            width: 1270px;
            left: -0.00019073486328125px;
            top: 0px;
            border-radius: 19.79px;
            margin-bottom: 250px;
        }
        table {
        border-collapse: collapse;
        color: #232323;
        }
        table, th, td {
        border-style: dotted solid;
        /* margin-right: auto;
        margin-left: auto; */
        padding: 15px 75px;
        position: relative;
        border: 1px solid #868B8E;
        }
    </style>
</head>
<body>
    <!-- header -->
<div class="navbar">
    <label class="logo">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="smk.jpg" alt="Logo" width="50px" height="50px" class="d-inline-block align-text-top">
            </a>SMK WIKRAMA <br>BOGOR
    </div>
    </nav> 
    </label> 
    <ul>
    <!-- <section class="home" id="Home"> buat masuk kehalaman yang di pencet -->
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="#carawkf"> Cara Wakaf</a></li>
        <li><a href="#datawkf">Data Wakaf</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#">Web Wikrama</a></li>
    </ul>
   </div>

    <!-- konten pertama  -->
<div class="beranda" id="beranda">
    <div class="content1">
    <img src="masjid1.png" height="450px">
        <div class="text1">
            <div class="text">
            <p>Masjid Besar SMK Wikrama Bogor</p><br>
            <h1>Mari <span>Tingkatkan<br>Keimanan</span> Masyarakat<br>SMK Wikrama Bogor.</h1><br><br>
            </div>
        </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Donatur Masjid Wikrama</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
    <!-- form -->
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                        <label for="nama_donatur" class="form-label">Masukan Nama Donatur</label>
                        <input type="string" class="form-control" id="nama" name="nama">
                        </div>
                            <div class="mb-3">
                                <label for="id_donatur" class="form-label">Masukan ID Donatur</label>
                                <input type="number" class="form-control" id="id_donatur" name="id_donatur">
                            </div>
                            <div class="option">
                                <div class="mb-3 form-check">
                                    <select name="paket" id="paket">
                                        <option selected disabled>pilih paket</option>
                                        <option value="paket 1">paket 1</option>
                                        <option value="paket 2">paket 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="option">
                                <div class="mb-3 form-check">
                                    <select name="kategori" id="kategori">
                                        <option selected disabled>pilih kategori</option>
                                        <option value="emas">emas</option>
                                        <option value="uang">uang</option>
                                    </select>
                                </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="jumlah_barang" class="form-label">Jumlah Nominal</label>
                                    <input type="number" class="form-control" id="jumlah_barang" name="nominal">
                                </div>
                                
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <script>
                
                // const myModal = document.getElementById('myModal')
                // const myInput = document.getElementById('myInput')
                
                // myModal.addEventListener('shown.bs.modal', () => {
                    //   myInput.focus()
                    // })
                </script> -->
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop"style="background: #1F3984; margin-left: ; margin-top: -2%;">Beri Bantuan shodaqoh</button>
                        </div>
                    <!-- <button type="button">Beri Bantuan Shadaqah</button> -->
                </div>
            </div>
        </div>
        <!-- konten kedua  -->
        <br>
    <div class="content2">
        <!-- persentese -->
    <div class="card1">
        <!-- <div class="col-sm-4 py-5 mx-auto"> -->
        <div class="card">
            <div class="card-body">
                <div class="letak">
                    <div class="d-flex justify-content-around">
                        <div class="cadd1">
                        <h5 style="color: gray;">Total Target Dana</h5><br>
                        <h1 class="display-5 fw-bold"><?php
                                                        $target = $donatur->target();
                                                        echo "Rp." .  number_format($target); ?></h1></div>
                          <!-- number_format untuk menformat angka, misalkan juta bakal kepisah sendiri 0 nya -->
                    <div class="d-flex" style="margin:0px 7px;  ">
                <div class="cadd2">
                    <!-- <div class="col-sm-4 py-5 mx-auto"> -->
                        <h5 style="color: gray;">Total Dana Terkumpul</h5>
                        <h1 class="display-5 fw-bold"> <?php
                                                        $tnom = $donatur->totalNominal();
                                                          echo "Rp." . number_format($tnom['nom']); ?> </h1>                                   
                    </div>
                </div>
                <div class="cadd3">
                    <!-- <div class="col-sm-4 py-5 mx-auto"> -->
                        <h5 style="color: gray;">Total Donatur</h5>
                        <h1 class="display-5 fw-bold"><?php
                                                        $tdon = $donatur->totalDonatur();
                                                        echo number_format($tdon); ?> Orang</h1>
                    </div>
                </div>
                </div>
                <hr style="margin: 15px;">
                <div class="row">
                    <div class="col-8">
                        <div class="d-flex">
                            <div class="p-2 flex-grow-1">
                                <div class="progress" role="progressbar" aria-label="Terpenuhi" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="height: 35px " >
                                    <div class="progress-bar" style="width: <?php echo $donatur->persentase(); ?>%; background-color: #1F3984;"></div>
                                </div>
                            </div>
                                <div class="p-2">
                                    <b>
                                        <span style="font-size: x-large; color:darkblue;">
                                            <?php echo number_format($donatur->persentase()); ?>%
                                        </span>
                                        <span style="font-size: larger; color:darkblue;">Terpenuhi</span>
                                    </b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="progress2">
            <div class="fot-card">
            <td class="align-middle">
                <div class="p-2 rounded-bottom " style="background-color: #1F3984;">
                <marquee behavior="scroll" direction="left">
                    <b>
                      <?php
                        foreach ($students as $student) {
                          echo '<span style="font-size: x-large; color: white;">' . $student['nama'] . " - </span>";
                          echo '<span style="font-size: x-large; color: #FFF500;">' . $student['kategori'] . " : ";
                          echo "Rp." . $student['nominal'] . "</span>" . '<span style="display: inline-block; font-size: 30px; color: #bbb9b9; margin-left: 5px; margin-right: 5px;">  • </span>';
                        }
                      ?>
                    </b>
                  </marquee>
              </div>

            </div>
                </div>
                    </div>
                    </div>
        <!-- buat banner tapi belom jadi -->
    <center>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="max-width: 900px; max-height: 500px; border-radius: 15px;">
            <div class="carousel-item active">
            <img src="9.jpg" class="d-block w-100" style="max-width: 900px;">
            </div>
            <div class="carousel-item">
            <img src="10.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
            <img src="11.jpg" class="d-block w-100">
            </div>
        </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
    </center>
        <!-- konten ketiga -->
    <div class="content3">
        <h1><span>Manfaat</span> Wakaf, Infaq<br>Shodaqoh.</h1><br>
        <h4>Berikut Adalah Beberapa Keutamaan Wakaq, Infaq<br>Shodaqoh Yang Akan Anda Dapatkan.</h4><br><br>
        <img src="2.jpeg" alt="">
        <div class="card3-1">
        <div class="jarcard" style="margin-right: 45px;">
        <div class="card" style="width: 20rem; height: 23rem;  box-shadow: 0.974474px 7.7958px 58.4685px rgba(0, 0, 0, 0.1); border:none;">
            <div class="card-body" style="position: absolute; ">
                <!-- <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-1-circle" viewBox="0 0 16 16">
                        <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"/>
                    </svg>
                </div> -->
                <div class="icon1" style="color: #1F3984;">
                <svg width="50" height="43" viewBox="0 0 50 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.468445 14.4172C0.468445 26.2642 10.2605 32.5773 17.4285 38.2279C19.9579 40.2219 22.3941 42.0993 24.8303 42.0993C27.2665 42.0993 29.7027 40.2219 32.2321 38.2279C39.4001 32.5773 49.1922 26.2642 49.1922 14.4172C49.1922 2.57016 35.7928 -5.83152 24.8303 5.55806C13.8679 -5.83152 0.468445 2.57016 0.468445 14.4172Z" fill="#1F3984"/>
                    </svg>
                    </div>  
                <br>
                <h3 class="card-subtitle mb-2 text-body-secondary"style="font-weight: 700; font-size: 37.03px; line-height: 47px; ">Menjadikan hati<br>lebih tenang</h3>
                <p class="card-text" style="font-size: 23.3874px; color: #919191;">Kami memberikan harga yang terbaik dibandingkan dengan Kompetitor kami</p>
            </div>
        </div>
        </div>
        <div class="card" style="width: 20rem; height: 23rem; box-shadow: 0.974474px 7.7958px 58.4685px rgba(0, 0, 0, 0.1); border:none;">
            <div class="card-body">
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.0956 3.84584C18.5023 4.35143 18.2057 4.60424 17.8889 4.81658C17.1626 5.30334 16.347 5.64117 15.4893 5.8105C15.1151 5.88438 14.7266 5.91538 13.9496 5.97739C11.9973 6.13318 11.0211 6.21108 10.2067 6.49874C8.32305 7.16407 6.84141 8.6457 6.17608 10.5294C5.88843 11.3438 5.81053 12.3199 5.65473 14.2722C5.59272 15.0493 5.56172 15.4378 5.48785 15.812C5.31851 16.6697 4.98068 17.4853 4.49392 18.2115C4.28158 18.5283 4.02878 18.825 3.52318 19.4183C2.25287 20.9089 1.61768 21.6543 1.24521 22.4335C0.383727 24.2359 0.383727 26.3313 1.24521 28.1337C1.61768 28.913 2.25285 29.6583 3.52318 31.149C4.02872 31.7422 4.28159 32.0389 4.49392 32.3557C4.98068 33.0819 5.31851 33.8975 5.48785 34.7553C5.56172 35.1294 5.59272 35.518 5.65473 36.295C5.81053 38.2473 5.88843 39.2235 6.17608 40.0379C6.84141 41.9215 8.32305 43.4032 10.2067 44.0685C11.0211 44.3561 11.9973 44.434 13.9496 44.5898C14.7266 44.6519 15.1151 44.6829 15.4893 44.7567C16.347 44.9261 17.1626 45.2639 17.8889 45.7507C18.2057 45.963 18.5023 46.2158 19.0956 46.7214C20.5863 47.9917 21.3316 48.6269 22.1109 48.9994C23.9133 49.8609 26.0086 49.8609 27.811 48.9994C28.5903 48.6269 29.3356 47.9917 30.8263 46.7214C31.4196 46.2158 31.7162 45.963 32.0331 45.7507C32.7593 45.2639 33.5749 44.9261 34.4326 44.7567C34.8068 44.6829 35.1953 44.6519 35.9723 44.5898C37.9246 44.434 38.9008 44.3561 39.7152 44.0685C41.5989 43.4032 43.0805 41.9215 43.7458 40.0379C44.0335 39.2235 44.1114 38.2473 44.2672 36.295C44.3292 35.518 44.3602 35.1294 44.4341 34.7553C44.6034 33.8975 44.9412 33.082 45.428 32.3557C45.6403 32.0389 45.8931 31.7423 46.3987 31.149C47.6691 29.6583 48.3042 28.913 48.6767 28.1337C49.5382 26.3313 49.5382 24.2359 48.6767 22.4335C48.3042 21.6543 47.6691 20.9089 46.3987 19.4183C45.8931 18.825 45.6403 18.5283 45.428 18.2115C44.9412 17.4853 44.6034 16.6697 44.4341 15.812C44.3602 15.4378 44.3292 15.0493 44.2672 14.2722C44.1114 12.3199 44.0335 11.3438 43.7458 10.5294C43.0805 8.6457 41.5989 7.16407 39.7152 6.49874C38.9008 6.21108 37.9246 6.13318 35.9723 5.97739C35.1953 5.91538 34.8068 5.88438 34.4326 5.8105C33.5749 5.64117 32.7593 5.30334 32.0331 4.81658C31.7162 4.60423 31.4196 4.35144 30.8263 3.84584C29.3356 2.5755 28.5903 1.94034 27.811 1.56787C26.0086 0.706381 23.9133 0.706381 22.1109 1.56787C21.3316 1.94033 20.5863 2.57552 19.0956 3.84584ZM35.6156 20.0778C36.3899 19.3035 36.3899 18.0481 35.6156 17.2738C34.8413 16.4995 33.5859 16.4995 32.8116 17.2738L20.9955 29.0899L17.1103 25.2047C16.336 24.4304 15.0806 24.4304 14.3063 25.2047C13.532 25.979 13.532 27.2344 14.3063 28.0087L19.5935 33.2959C20.3678 34.0702 21.6232 34.0702 22.3975 33.2959L35.6156 20.0778Z" fill="#1F3984"/>
                </svg>
                <br><br>
                <h3 class="card-subtitle mb-2 text-body-secondary"style="font-weight: 700; font-size: 37.03px; line-height: 47px; ">Terbukanya<br>pintu rezeki</h3>
                <p class="card-text"style="font-size: 23.3874px; color: #919191;">Allah SWT akan membuka pintu rezeki dari arah yang tidak dikira sebelumnya.</p>
            </div>
        </div>
        </div>
        <div class="card3-2">
        <div class="jarcard1" style="margin-right: 45px;">
        <div class="card" style="width: 20rem; height: 23rem; box-shadow: 0.974474px 7.7958px 58.4685px rgba(0, 0, 0, 0.1); border:none;">
            <div class="card-body">
            <svg width="45" height="50" viewBox="0 0 45 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.8243 8.08745C0.904602 9.3978 0.904602 13.2928 0.904602 21.0827V24.9189C0.904602 38.6543 11.2315 45.3199 17.7108 48.1502C19.4684 48.918 20.3472 49.3018 22.8303 49.3018C25.3134 49.3018 26.1922 48.918 27.9498 48.1502C34.4291 45.3199 44.756 38.6543 44.756 24.9189V21.0827C44.756 13.2928 44.756 9.3978 43.8363 8.08745C42.9166 6.7771 39.2543 5.52348 31.9297 3.01624L30.5342 2.53857C26.716 1.23161 24.807 0.578125 22.8303 0.578125C20.8536 0.578125 18.9445 1.2316 15.1264 2.53856L13.7309 3.01624C6.4063 5.52348 2.744 6.7771 1.8243 8.08745ZM30.2837 21.2845C30.9558 20.5318 30.8904 19.3768 30.1376 18.7047C29.3849 18.0326 28.2299 18.098 27.5578 18.8507L20.2201 27.069L18.1027 24.6976C17.4307 23.9448 16.2756 23.8795 15.5229 24.5515C14.7702 25.2236 14.7048 26.3786 15.3769 27.1314L18.8571 31.0293C19.2038 31.4175 19.6996 31.6395 20.2201 31.6395C20.7406 31.6395 21.2364 31.4175 21.583 31.0293L30.2837 21.2845Z" fill="#1F3984"/>
                </svg>
                <br><br>
                <h3 class="card-subtitle mb-2 text-body-secondary"style="font-size: 31.1832px; font-weight: 700; line-height: 39px; ">Menjauhkan dari<br>bahaya</h3>
                <p class="card-text"style="font-size: 23.3874px; color: #919191;">Rasulullah SAW pernah bersabda: “Bersegeralah untuk bersedekah, karena musibah dan bencana tidak bisa mendahului sedekah."</p>
            </div>
        </div>
        </div>
        <div class="card" style="width: 20rem; height: 23rem; box-shadow: 0.974474px 7.7958px 58.4685px rgba(0, 0, 0, 0.1); border:none;">
            <div class="card-body">
            <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.8832 2.31431C14.7962 -0.000605762 18.0724 -0.000600874 18.9854 2.31431L21.8147 9.48804C22.0934 10.1948 22.6529 10.7542 23.3596 11.033L30.5333 13.8623C32.8483 14.7752 32.8482 18.0514 30.5333 18.9644L23.3596 21.7937C22.6529 22.0724 22.0934 22.6319 21.8147 23.3386L18.9854 30.5124C18.0724 32.8273 14.7962 32.8273 13.8832 30.5124L11.054 23.3386C10.7752 22.6319 10.2158 22.0724 9.50901 21.7937L2.33528 18.9644C0.0203713 18.0514 0.0203761 14.7752 2.33529 13.8623L9.50901 11.033C10.2158 10.7542 10.7752 10.1948 11.054 9.48803L13.8832 2.31431Z" fill="#1F3984"/>
                </svg>
                <svg style="margin-top:12%; margin-right:2px;"width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.95804 1.33034C10.4598 0.0581791 12.2602 0.0581798 12.7619 1.33034L14.9562 6.89386C15.1093 7.28226 15.4168 7.58971 15.8052 7.74289L21.3687 9.93711C22.6409 10.4388 22.6409 12.2393 21.3687 12.741L15.8052 14.9352C15.4168 15.0884 15.1093 15.3959 14.9562 15.7843L12.7619 21.3478C12.2602 22.6199 10.4598 22.6199 9.95804 21.3478L7.76382 15.7843C7.61064 15.3959 7.30319 15.0884 6.91479 14.9352L1.35128 12.741C0.0791104 12.2393 0.079111 10.4388 1.35128 9.93711L6.91479 7.74289C7.30319 7.58971 7.61064 7.28226 7.76382 6.89386L9.95804 1.33034Z" fill="#1F3984"/>
                </svg>
                <br><br>
                <h3 class="card-subtitle mb-2 text-body-secondary"style="font-size: 31.1832px; font-weight: 700; line-height: 39px; ">Pahala yang tak<br>terputus</h3>
                <p class="card-text"style="font-size: 23.3874px; color: #919191;">Ini akan menolong kita di akhirat nantinya, juga dapat menyelamatkannya dari api neraka.</p>
            </div>
        </div>
        </div>
    </div>
<div class="carawakaf" id="carawkf">
    <div class="content4" style="margin-left: 35px;">
        <h1><span>Cara Melakukan</span> Wakaf, Infaq <br> Shodaqoh.</h1><br>
        <h4>Berikut Adalah Cara Melakukan Wakaf, Infaq Shodaqoh Untuk<br>Membantu pembangunan Masjid Besar SMK Bogor</h4><br><br>
        <div class="row" style="margin: 0px 50px">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card" style="width: 550px; box-shadow: 0.974474px 7.7958px 58.4685px rgba(0, 0, 0, 0.1); border:none;" >
            <div class="card-body">
                <span><h1 style="font-size: 32px">01</h1></span>
                <h5 class="card-title">Isi Form Data Diri</h5>
                <p class="card-text">Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan teliti.<br></p>
            </div>
            </div>
        </div>
        <div class="col-sm-6"  >
            <div class="card" style="width: 550px; box-shadow: 0.974474px 7.7958px 58.4685px rgba(0, 0, 0, 0.1);border:none;" >
            <div class="card-body" >
            <span><h1 style="font-size: 32px">02</h1></span>
                <h5 class="card-title">Isikan Nominal Shodaqoh</h5>
                <p class="card-text">Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.</p>
            </div>
            </div>
        </div>
        </div>
        <br><br>
        <div class="row"style="margin: 0px 50px">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card" style="width: 550px; box-shadow: 0.974474px 7.7958px 58.4685px rgba(0, 0, 0, 0.1); border:none;" >
            <div class="card-body">
                <span><h1 style="font-size: 32px">03</h1></span>
                <h5 class="card-title">Upload Bukti Pembayaran</h5>
                <p class="card-text">Pilih motode pembayaran dan upload bukti pembayaranya.</p>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" style="width: 550px; box-shadow: 0.974474px 7.7958px 58.4685px rgba(0, 0, 0, 0.1); border:none;" >
            <div class="card-body">
            <span><h1 style="font-size: 32px">06</h1></span>
                <h5 class="card-title">Verifikasi Pembayaran</h5>
                <p class="card-text">Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.</p>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="datawakaf" id="datawkf">
    <div class="content5" style="margin: 200px  0px 0px 35px;" >
        <h1><span>Data Donatur</span> Wakaf, Infaq<br> Shodaqoh.</h1><br>
        <h4>Berikut Adalah Data Donatur Wakaf, Infaq Shodaqoh Untuk<br> Masjid Besar SMK Wikrama Bogor</h4><br><br>
        <!-- bawah ini data dari database yang udah di input di button Beri bantuan shadaqoh -->
        <center>
        <table border="1">
        <thead>
            <tr>
                <th style="padding:0px 95px;">Nama</th>
                <th>Donatur_ID</th>
                <th>Paket</th>
                <th>Kategori</th>
                <th>Nominal / Barang</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student){?>
                <tr>
                    <td><?php echo $student["nama"] ?></td>
                    <td><?php echo $student["id_donatur"] ?></td>
                    <td><?php echo $student["paket"] ?></td>
                    <td><?php echo $student["kategori"] ?></td>
                    <td><?php echo $student["nominal"] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </center>
    </div>
</div>
<div class="gallery" id="gallery">
    <div class="gal" style="margin: 150px  0px 0px 35px;">
        <h1><span>Gallery</span> Masjid Besar SMK<br> Wikrama Bogor.</h1><br>
        <h4>Berikut Adalah Gallery Masjid SMK Wikrama Bogor.</h4><br><br>
        <div class="card5">
        <div class="row row-cols-1 row-cols-md-3 g-5">
            <div class="col">
                <div class="card">
                    <img src="3.jpeg">
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="4.jpeg">
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="5.jpeg">
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="6.jpeg">
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="7.jpeg">
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="8.jpeg">
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
    <!-- bagian footer -->
    <div class="overflow-hidden" style="background-color: #001E42;">
        <div class="row mx-5 py-5">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-12 mb-3">
                        <a class="navbar-brand d-flex align-items-center">
                            <img src="smk.jpg" class="img-fluid me-2" width="50" height="50" style="border-radius: 100%;" alt="">
                            <h6 class="fw-bolder text-white">SMK WIKRAMA <br> BOGOR</h6>
                        </a>
                    </div>
                    <div class="col-12 text-white">
                        <h6>Alamat</h6>
                        <p>
                            Jl. Raya Wangun<br>
                            Kelurahan Sindangsari<br>
                            Bogor Timur 16720</p>
                            <hr style="width:205px;">
                        <p class="mb-4">
                            Telepon <br>
                            0251-8242411 / <br>
                            082221718035 (Whatsapp)
                            <hr style="width:205px;">
                        </p>
                        <div>
                            <a><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.38226 0.450195C1.95468 0.450195 0 2.40487 0 4.83244V20.0679C0 22.4955 1.95468 24.4502 4.38226 24.4502H12.6398V15.0677H10.1588V11.6897H12.6398V8.80369C12.6398 6.53629 14.1057 4.45444 17.4825 4.45444C18.8497 4.45444 19.8608 4.5857 19.8608 4.5857L19.7813 7.7402C19.7813 7.7402 18.7501 7.73046 17.625 7.73046C16.4073 7.73046 16.212 8.29153 16.212 9.22297V11.6897H19.878L19.7183 15.0677H16.212V24.4502H19.6177C22.0453 24.4502 24 22.4955 24 20.0679V4.83247C24 2.4049 22.0453 0.450219 19.6177 0.450219H4.38223L4.38226 0.450195Z" fill="white"/></svg></a>
                            <a><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 7.98145C19.4167 8.24186 18.7865 8.41895 18.1094 8.5127C18.8177 8.09603 19.3021 7.48665 19.5625 6.68457C18.8854 7.0804 18.1875 7.34603 17.4688 7.48145C16.8333 6.79395 16.0365 6.4502 15.0781 6.4502C14.1719 6.4502 13.3984 6.77051 12.7578 7.41113C12.1172 8.05176 11.7969 8.8252 11.7969 9.73145C11.7969 10.0335 11.8229 10.2835 11.875 10.4814C10.5312 10.4085 9.27083 10.07 8.09375 9.46582C6.91667 8.86165 5.91667 8.05436 5.09375 7.04395C4.79167 7.56478 4.64062 8.11686 4.64062 8.7002C4.64062 9.8877 5.11458 10.7992 6.0625 11.4346C5.57292 11.4242 5.05208 11.2887 4.5 11.0283V11.0596C4.5 11.8408 4.76042 12.5361 5.28125 13.1455C5.80208 13.7549 6.44271 14.1325 7.20312 14.2783C6.90104 14.3617 6.63542 14.4033 6.40625 14.4033C6.27083 14.4033 6.06771 14.3825 5.79688 14.3408C6.01562 14.9971 6.40365 15.5387 6.96094 15.9658C7.51823 16.3929 8.15104 16.6117 8.85938 16.6221C7.65104 17.5596 6.29167 18.0283 4.78125 18.0283C4.51042 18.0283 4.25 18.0127 4 17.9814C5.54167 18.9606 7.21875 19.4502 9.03125 19.4502C10.1979 19.4502 11.2917 19.2653 12.3125 18.8955C13.3333 18.5257 14.2083 18.0309 14.9375 17.4111C15.6667 16.7913 16.2943 16.0778 16.8203 15.2705C17.3464 14.4632 17.737 13.6195 17.9922 12.7393C18.2474 11.859 18.375 10.9814 18.375 10.1064C18.375 9.91895 18.3698 9.77832 18.3594 9.68457C19.0156 9.21582 19.5625 8.64811 20 7.98145ZM24 4.9502V19.9502C24 21.1898 23.5599 22.2497 22.6797 23.1299C21.7995 24.0101 20.7396 24.4502 19.5 24.4502H4.5C3.26042 24.4502 2.20052 24.0101 1.32031 23.1299C0.440104 22.2497 0 21.1898 0 19.9502V4.9502C0 3.71061 0.440104 2.65072 1.32031 1.77051C2.20052 0.890299 3.26042 0.450195 4.5 0.450195H19.5C20.7396 0.450195 21.7995 0.890299 22.6797 1.77051C23.5599 2.65072 24 3.71061 24 4.9502Z" fill="white"/></svg></a>
                            <a><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5 9.5927C11.9113 9.59291 11.336 9.76068 10.8466 10.0748C10.3573 10.3889 9.97593 10.8353 9.75081 11.3574C9.52569 11.8796 9.46691 12.4541 9.58188 13.0083C9.69686 13.5626 9.98044 14.0716 10.3968 14.4711C10.8131 14.8707 11.3435 15.1427 11.9208 15.2529C12.4982 15.363 13.0966 15.3064 13.6405 15.0901C14.1843 14.8738 14.6491 14.5075 14.9761 14.0376C15.3031 13.5677 15.4777 13.0153 15.4777 12.4502C15.4771 11.6923 15.1631 10.9657 14.6048 10.4299C14.0465 9.89409 13.2894 9.59298 12.5 9.5927ZM19.4593 7.39627C19.3077 7.02761 19.0789 6.69278 18.787 6.41254C18.4951 6.1323 18.1463 5.91263 17.7623 5.76716C16.5904 5.32305 13.8002 5.4227 12.5 5.4227C11.1998 5.4227 8.41239 5.3193 7.23717 5.76716C6.85315 5.91263 6.50436 6.1323 6.21245 6.41254C5.92053 6.69278 5.69171 7.02761 5.54018 7.39627C5.07812 8.52127 5.18136 11.2025 5.18136 12.4497C5.18136 13.6968 5.07812 16.3748 5.54241 17.5036C5.69394 17.8722 5.92276 18.2071 6.21468 18.4873C6.5066 18.7676 6.85538 18.9872 7.2394 19.1327C8.41127 19.5768 11.2015 19.4772 12.5022 19.4772C13.803 19.4772 16.5893 19.5806 17.7645 19.1327C18.1485 18.9872 18.4973 18.7676 18.7892 18.4873C19.0811 18.2071 19.31 17.8722 19.4615 17.5036C19.9275 16.3786 19.8203 13.6973 19.8203 12.4502C19.8203 11.2031 19.9275 8.52555 19.4615 7.3968L19.4593 7.39627ZM12.5 16.8431C11.595 16.8431 10.7103 16.5854 9.95777 16.1027C9.20527 15.62 8.61876 14.934 8.27243 14.1313C7.92609 13.3286 7.83547 12.4453 8.01203 11.5932C8.18859 10.7411 8.6244 9.95833 9.26435 9.34398C9.9043 8.72962 10.7197 8.31124 11.6073 8.14175C12.4949 7.97225 13.415 8.05924 14.2511 8.39172C15.0873 8.72421 15.8019 9.28725 16.3047 10.0097C16.8075 10.7321 17.0759 11.5814 17.0759 12.4502C17.0766 13.0273 16.9588 13.5988 16.7291 14.1321C16.4994 14.6654 16.1623 15.1499 15.7373 15.558C15.3122 15.966 14.8075 16.2896 14.252 16.5101C13.6965 16.7306 13.1011 16.8438 12.5 16.8431ZM17.2645 8.89841C17.0532 8.89852 16.8467 8.83847 16.671 8.72587C16.4952 8.61326 16.3583 8.45316 16.2773 8.26581C16.1964 8.07846 16.1752 7.87228 16.2163 7.67334C16.2575 7.47441 16.3592 7.29166 16.5085 7.1482C16.6579 7.00475 16.8482 6.90704 17.0554 6.86744C17.2626 6.82783 17.4774 6.8481 17.6726 6.92569C17.8678 7.00329 18.0346 7.13471 18.152 7.30334C18.2694 7.47197 18.332 7.67023 18.332 7.87305C18.3326 8.00774 18.3055 8.14121 18.2522 8.26581C18.199 8.39041 18.1206 8.50369 18.0216 8.59916C17.9227 8.69462 17.805 8.77038 17.6755 8.8221C17.5459 8.87382 17.407 8.90048 17.2667 8.90055L17.2645 8.89841ZM22.3214 0.450195H2.67857C1.96817 0.450195 1.28686 0.721113 0.784535 1.20335C0.282206 1.68559 0 2.33964 0 3.02162L0 21.8788C0 22.5608 0.282206 23.2148 0.784535 23.697C1.28686 24.1793 1.96817 24.4502 2.67857 24.4502H22.3214C23.0318 24.4502 23.7131 24.1793 24.2155 23.697C24.7178 23.2148 25 22.5608 25 21.8788V3.02162C25 2.33964 24.7178 1.68559 24.2155 1.20335C23.7131 0.721113 23.0318 0.450195 22.3214 0.450195ZM21.3661 15.9859C21.2941 17.3589 20.9676 18.5756 19.9235 19.5752C18.8795 20.5748 17.6133 20.8947 16.1847 20.96C14.7109 21.0398 10.2924 21.0398 8.81864 20.96C7.38839 20.8909 6.12556 20.577 5.0798 19.5752C4.03404 18.5734 3.70536 17.3563 3.63728 15.9859C3.55413 14.5706 3.55413 10.3282 3.63728 8.91448C3.70926 7.54145 4.03181 6.32484 5.0798 5.3252C6.12779 4.32555 7.39397 4.00948 8.81864 3.94412C10.2924 3.8643 14.7109 3.8643 16.1847 3.94412C17.615 4.01323 18.8817 4.32716 19.9235 5.32895C20.9654 6.33073 21.298 7.54787 21.3661 8.92091C21.4492 10.3309 21.4492 14.5695 21.3661 15.9859Z" fill="white"/></svg></a>
                            <a><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.3594 18.8096V16.3564C14.3594 15.8356 14.2083 15.5752 13.9062 15.5752C13.7292 15.5752 13.5573 15.6585 13.3906 15.8252V19.3252C13.5573 19.4919 13.7292 19.5752 13.9062 19.5752C14.2083 19.5752 14.3594 19.32 14.3594 18.8096ZM17.2344 16.9033H18.2656V16.3721C18.2656 15.8408 18.0938 15.5752 17.75 15.5752C17.4062 15.5752 17.2344 15.8408 17.2344 16.3721V16.9033ZM8.3125 12.7471V13.8408H7.0625V20.4502H5.90625V13.8408H4.6875V12.7471H8.3125ZM11.4531 14.7158V20.4502H10.4062V19.8252C10 20.2939 9.60417 20.5283 9.21875 20.5283C8.875 20.5283 8.65625 20.3825 8.5625 20.0908C8.5 19.9137 8.46875 19.6325 8.46875 19.2471V14.7158H9.5V18.9346C9.5 19.1846 9.50521 19.32 9.51562 19.3408C9.52604 19.4971 9.60417 19.5752 9.75 19.5752C9.95833 19.5752 10.1771 19.4137 10.4062 19.0908V14.7158H11.4531ZM15.3906 16.4502V18.7314C15.3906 19.2731 15.3542 19.6533 15.2812 19.8721C15.1562 20.3096 14.8802 20.5283 14.4531 20.5283C14.0885 20.5283 13.7344 20.3148 13.3906 19.8877V20.4502H12.3438V12.7471H13.3906V15.2627C13.724 14.846 14.0781 14.6377 14.4531 14.6377C14.8802 14.6377 15.1562 14.8564 15.2812 15.2939C15.3542 15.5127 15.3906 15.8981 15.3906 16.4502ZM19.3125 18.4658V18.6064C19.3125 18.9085 19.3021 19.1325 19.2812 19.2783C19.25 19.5075 19.1719 19.7158 19.0469 19.9033C18.7656 20.32 18.349 20.5283 17.7969 20.5283C17.2552 20.5283 16.8333 20.3304 16.5312 19.9346C16.3125 19.6533 16.2031 19.2054 16.2031 18.5908V16.5752C16.2031 15.9606 16.3073 15.5127 16.5156 15.2314C16.8177 14.8356 17.2344 14.6377 17.7656 14.6377C18.2969 14.6377 18.7031 14.8356 18.9844 15.2314C19.2031 15.5335 19.3125 15.9814 19.3125 16.5752V17.7627H17.2344V18.7783C17.2344 19.3096 17.4115 19.5752 17.7656 19.5752C18.0156 19.5752 18.1719 19.4398 18.2344 19.1689C18.2344 19.1585 18.237 19.1221 18.2422 19.0596C18.2474 18.9971 18.25 18.9111 18.25 18.8018V18.4658H19.3125ZM12.2656 5.59082V8.02832C12.2656 8.55957 12.099 8.8252 11.7656 8.8252C11.4323 8.8252 11.2656 8.55957 11.2656 8.02832V5.59082C11.2656 5.04915 11.4323 4.77832 11.7656 4.77832C12.099 4.77832 12.2656 5.04915 12.2656 5.59082ZM20.5938 16.7314C20.5938 14.8877 20.4948 13.5335 20.2969 12.6689C20.1927 12.2106 19.9688 11.8278 19.625 11.5205C19.2812 11.2132 18.8854 11.0335 18.4375 10.9814C17.0208 10.8252 14.875 10.7471 12 10.7471C9.13542 10.7471 6.99479 10.8252 5.57812 10.9814C5.11979 11.0335 4.72135 11.2132 4.38281 11.5205C4.04427 11.8278 3.82292 12.2106 3.71875 12.6689C3.51042 13.5752 3.40625 14.9294 3.40625 16.7314C3.40625 18.5648 3.51042 19.9189 3.71875 20.7939C3.82292 21.2419 4.04427 21.6221 4.38281 21.9346C4.72135 22.2471 5.11458 22.4294 5.5625 22.4814C6.98958 22.6377 9.13542 22.7158 12 22.7158C14.8646 22.7158 17.0104 22.6377 18.4375 22.4814C18.8854 22.4294 19.2786 22.2471 19.6172 21.9346C19.9557 21.6221 20.1771 21.2419 20.2812 20.7939C20.4896 19.9189 20.5938 18.5648 20.5938 16.7314ZM8.79688 6.55957L10.2031 1.93457H9.03125L8.23438 4.98145L7.40625 1.93457H6.1875C6.26042 2.17415 6.38021 2.53353 6.54688 3.0127L6.92188 4.09082C7.28646 5.16374 7.52604 5.98665 7.64062 6.55957V9.7002H8.79688V6.55957ZM13.3125 7.8252V5.79395C13.3125 5.18978 13.2031 4.73665 12.9844 4.43457C12.6823 4.03874 12.276 3.84082 11.7656 3.84082C11.2344 3.84082 10.8281 4.03874 10.5469 4.43457C10.3281 4.73665 10.2188 5.18978 10.2188 5.79395V7.8252C10.2188 8.42936 10.3281 8.88249 10.5469 9.18457C10.8281 9.5804 11.2344 9.77832 11.7656 9.77832C12.276 9.77832 12.6823 9.5804 12.9844 9.18457C13.2031 8.90332 13.3125 8.4502 13.3125 7.8252ZM16.1406 9.7002H17.1875V3.91895H16.1406V8.34082C15.9115 8.66374 15.6927 8.8252 15.4844 8.8252C15.3281 8.8252 15.2448 8.74186 15.2344 8.5752C15.224 8.55436 15.2188 8.41895 15.2188 8.16895V3.91895H14.1719V8.49707C14.1719 8.88249 14.2031 9.16895 14.2656 9.35645C14.3802 9.6377 14.6042 9.77832 14.9375 9.77832C15.3125 9.77832 15.7135 9.54395 16.1406 9.0752V9.7002ZM24 4.9502V19.9502C24 21.1898 23.5599 22.2497 22.6797 23.1299C21.7995 24.0101 20.7396 24.4502 19.5 24.4502H4.5C3.26042 24.4502 2.20052 24.0101 1.32031 23.1299C0.440104 22.2497 0 21.1898 0 19.9502V4.9502C0 3.71061 0.440104 2.65072 1.32031 1.77051C2.20052 0.890299 3.26042 0.450195 4.5 0.450195H19.5C20.7396 0.450195 21.7995 0.890299 22.6797 1.77051C23.5599 2.65072 24 3.71061 24 4.9502Z" fill="white"/></svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 text-white">
                <h6 class="fw-bolder">Tentang Wikrama</h6>
                <ul class="px-4 py-1">
                    <li class="py-1">Sejarah</li>
                    <li class="py-1">Peraturan Sekolah</li>
                    <li class="py-1">Rencana Strategi & Prestasi</li>
                    <li class="py-1">Yayasan</li>
                    <li class="py-1">Struktur Organisasi</li>
                    <li class="py-1">Cabang</li>
                    <li class="py-1">Penghargaan</li>
                    <li class="py-1">Kerjasama</li>
                </ul>
            </div>
            <div class="col-md-4 mt-3 text-white" style="margin-top: 65px;">
                <h5 style="color:white;">Kirim Pesan</h5>
                <form action="mailto:sitilubnasalsabilamuslimah@smkwikama.sch.id" method="post" enctyype="text/plain">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="nama" placeholder="nama" style="width: 300px;">
                        </div><br>

                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="email" style="margin-top: -15px; width: 300px;">
                        </div><br>

                        <div class="mb-3">
                            <input type="pesan" class="form-control" id="pesan" placeholder="ketik pesan" style="width: 300px; height: 120px; margin-top: -15px;">
                        </div><br>

                        <button type="submit" class="btn btn-primary" style="margin-top: -15px; margin-left: 58%; border-radius: 10px; background-color:yellow; color:black;">Submit</button>
                </form>
            </div>
    </div>
    </div>
    <!-- End Contact -->

    <!-- Start Footer -->
    <div class="text-center p-3 fw-bolder">
        Copyright © 2023 - SMK Wikrama Bogor. All Right Reserved.
    </div>
    <!-- End Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>