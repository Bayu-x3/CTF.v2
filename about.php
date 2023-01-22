<?php
   session_start();
   require 'assets/functions.php';
   require 'assets/headBoard.php';
   if (!isset($_SESSION['username'])) {
     header('Location: login.php');
   }
   ?>
   <html>      
      <center>
              <div class="col-sm-12" >
    <div class="card">
      <div class="card-body">
        <center>
        <h1 style="color: black;">Capture The Flag x-3</h1>
        <h5 style="color: black;">CTF-x3 Adalah Website Capture The Flag Sederhana, website ini berisi 3 Challenge, yaitu Forensic, Cryptography, dan WebSecurity, di dalam challenge-challenge tersebut terdapat Level-level dan di setiap level nya itu terdapat Point yang bisa kalian dapatkan saat kalian berhasil menyelesaikan atau menjawab benar flag nya, untuk mendapatkan flag nya kalian harus memahami cluenya dan mencari tau apa saja yang di butuhkan untuk mendapatkan flag dari clue tersebut.</h5>
        <br>
        <h5 style="color: black">Jika kalian menemukan flagnya yang tidak ada format ( FLGx-3 ), tambahkan format tersebut, jika tidak maka flag akan di anggap salah, jadi saat memasukan flag nya yang benar adalah FLGx-3{flag yang kalian dapatkan}.</h4>
<table class="table table-striped">
  <thead>
  </thead>
 <h3>Hai</h1>
</center>
</center></td>
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>
        </div>
    </body>
</html>
<?php
    include 'assets/footer.php';
    ?>