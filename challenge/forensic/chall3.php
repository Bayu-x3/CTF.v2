<?php
  include '../headF.php';
?>
<div class="card text-center">
  <div class="card-header">
    <h1 style="color: black;" weight="bold;">File Locked</h1>
    <h5 style="color: black;">Hallo semua, nama aku adalah Default, aku menjadi salah satu ADMIN di sebuah grub Facebook yang bernama WORDPRESS, ada sebuah postingan yang belum aku acc karena file nya gak bisa di buka, bantu aku untuk membukanya</h5>
    <a href="https://www.mediafire.com/file/ljvbv9v537kd65c/flag.docx/file"><h5>Click here</a></h5>
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
        if ((a.value == "FLGx-3{g4mbar_rilll}") || (a.value == "{g4mbar_rilll}")) {
        document.getElementById('c3').innerHTML = swal('Flag Correct!', 'Congratulation!!!', 'success')
    } else {
        document.getElementById('c3').innerHTML = swal('Flag Incorrect!!', 'Try Again!', 'error')
    }
      }
      </script>
  <br><br>
<?php
	include '../../footer.php';
?>