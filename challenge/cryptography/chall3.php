<?php
  include '../headC.php';
?>
<div class="card text-center">
  <div class="card-header">
    <h1 style="color: black;">Anak Pramuka</h1>
    <h5 style="color: black;">Nama aku adalah Sandi, aku sedang mengikuti lomba pramuka</h5>
    <a href="https://pastebin.com/raw/j1Uc7Nxu"><h5>Click Here</a></h5>
  </div>
  <div class="card-body">
<form method="post">
					<input type="text" id="chall4" class="form-control" required="required" placeholder="FLGx-3{flagnya}">
							<center><br>
                            <input type="button" value="Check Flag" onclick="c4()" class='btn btn-success'><span id="c4"></span></strong></p>
		</center>		
		</form>
  </div>
  <script type="text/javascript">
      function c4() {
        var a = document.getElementById("chall4");
        if ((a.value == "FLGx-3{m0rs3C0d3#}") || (a.value == "FLGX-3M0RS3C0D3")) {
        document.getElementById('c4').innerHTML = swal('Flag Correct!', 'Congratulation!!!', 'success')
    } else {
        document.getElementById('c4').innerHTML = swal('Flag Incorrect!!', 'Try Again!', 'error')
    }
      }
      </script>
  <br><br>
<?php
	include '../../footer.php';
?>