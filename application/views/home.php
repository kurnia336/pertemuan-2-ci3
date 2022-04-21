<?php $this->load->view("_partials/header.php") ?>

<?php $this->load->view("_partials/sidebar.php") ?>

<div class="content-wrapper">
<?php $this->load->view("_partials/breadcrumb.php") ?>
<section class="content">
      <div class="container-fluid">
        <style>
        .clock {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            color: #fff;
            /* font-size: 60px; */
            font-family: Orbitron;
            letter-spacing: 7px;
        }
        </style>
        <div class="card-primary">
                <div class="card-header">
                    <h3 class="card-title">Home</h3> 
                    <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
                </div>
                <div class="card-body">
                    <p><?php
                            date_default_timezone_set('Asia/Jakarta');
                            $time=date('Hi'); 
                            
                            if (($time >= "0600") && ($time <= "1200")) {
                            echo "<h1>Selamat Pagi</h1> <p class='lead'> dan semoga hari ini menjadi hari yang lebih baik lagi!</p>";
                            } 
                            
                            elseif (($time >= "1201") && ($time <= "1600")) {
                            echo "<h1>Selamat Siang,</h1> <p class='lead'>semoga Anda masih bersemangat dalam bekerja</p>";
                            }
                            
                            elseif (($time >= "1601") && ($time <= "2100")) {
                            echo "<h1>Selamat Sore,</h1> <p class='lead'>waktunya untuk mengakhiri pekerjaan hari ini</p>";
                            }
                            
                            elseif (($time >= "2101") && ($time <= "2400")) {
                            echo "<h1>Selamat Malam,</h1> <p class='lead'>jangan lupa untuk beristirahat</p>";
                            }
                            else{
                            echo "<p class='lead'>Mengapa anda tidak tidur?  Apakah Anda seorang devoloper/programming?<br></p>";
                            }
                            ?>
                    </p>
                </div>
                <div class="card-footer">
            </div>
        </div>
        <script>
        function showTime(){
            var date = new Date();
            var h = date.getHours(); // 0 - 23
            var m = date.getMinutes(); // 0 - 59
            var s = date.getSeconds(); // 0 - 59
            var session = "AM";
            
            if(h == 0){
                h = 12;
            }
            
            if(h > 12){
                h = h - 12;
                session = "PM";
            }
            
            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;
            
            var time = h + ":" + m + ":" + s + " " + session;
            document.getElementById("MyClockDisplay").innerText = time;
            document.getElementById("MyClockDisplay").textContent = time;
            
            setTimeout(showTime, 1000);
            
        }

        showTime();
        </script>
        
      </div><!--/. container-fluid -->
    </section>
</div>

<?php $this->load->view("_partials/footer.php") ?>