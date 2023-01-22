<?php
  include '../headF.php';
?>
<div class="card text-center">
  <div class="card-header">
    <h1 style="color: black;" weight="bold;">Gambar</h1>
    <h5 style="color: black;">kalau kata guru sih, di setiap gambar pasti ada kata tersembunyi nya, tapi aku gatau deh kata kata nya apaan</h5>
    <a href="https://l.top4top.io/p_2553yibo71.png"><h5>Click here</a></h5>
  </div>
  <div class="card-body">
<form method="post">
					<input type="text" id="chall3" class="form-control" required="required" placeholder="FLGx-3{flagnya}">
							<center><br>
                            <input type="button" value="Check Flag" onclick="c3()" class='btn btn-success'><span id="c3"></span></strong></p>
		</center>		
		</form>
  </div>
  <script type="text/javascript">
      function c3() {
        var a = document.getElementById("chall3");
        if ((a.value == "FLGx-3{pesan_ajaib}") || (a.value == "{pesan_ajaib}")) {
        document.getElementById('c3').innerHTML = swal('Flag Correct!', 'Go to next level', 'success')
    } else {
        document.getElementById('c3').innerHTML = swal('Flag Incorrect!!', 'Try Again!', 'error')
    }
      }
      </script>
  <br><br>
<?php
	include '../../footer.php';
?>