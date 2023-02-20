<?php
session_start();
include '../../assets/functions.php';
$isLoggedIn = isset($_SESSION['username']);
if (!$isLoggedIn) {
    header('Location: login.php');
}
$username = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM tbl_users WHERE username = '$username'");
$row = mysqli_fetch_assoc($result);
$correctF_2 = $row['correctF_2'];
?>
<!-- form input jawaban -->
<?php
require '../headF.php';
?>
<div class="card text-center">
  <div class="card-header">
  <h1 style="color: black;" weight="bold;">Gambar</h1>
    <h5 style="color: black;">kalau kata guru sih, di setiap gambar pasti ada kata tersembunyi nya, tapi aku gatau deh kata kata nya apaan</h5>
    <a href="https://l.top4top.io/p_2553yibo71.png" target="_blank"><h5>Click here</a></h5>
  </div>
  <div class="card-body">
<form method="post">
					<input type="text" id="f2" name="f2" class="form-control" required="required" placeholder="FLGx-3{flagnya}">
							<center><br>
                            <button type="submit" name="submit" value="Check Flag" class='btn btn-success'>Check Flag</button>
		</center>		
		</form>
  </div>
    </div>
    <?php
    if ($correctF_2 == 1) {
        echo "<script>
        swal('You have answered!!', 'What the fck r u doing bro?!!!', 'error');
        </script>";
    } else {
        if (isset($_POST['submit'])) {
            // baca jawaban dari form input
            $jawaban = $_POST["f2"];
            // cek apakah jawaban yang diberikan user benar atau salah
            if ($jawaban == "FLGx-3{pesan_ajaib}") {
                // jawaban benar, tambahkan 5 poin ke database dan update status jawaban user menjadi 1
                $query = "UPDATE tbl_users SET poin = poin + 10, correctF_2 = 1
                WHERE username = '$username'";
                if ($conn->query($query) === TRUE) {
                    echo "<script>
                    swal('Correct Flag!', 'Point success add', 'success');
                    </script>";
                } else {
                    echo "Error: " . $query . "<br>" . $conn->error;
                }
            } else {
                // jawaban salah, tampilkan pesan "Salah"
                echo "<script>
                swal('Wrong Flag!!', 'Enter a correct Flag!!!', 'error');
                </script>";
            }
        }
    }
    // tutup koneksi ke database
    $conn->close();
    ?>
    <br><br>
    <?php
    include '../../assets/footer.php';
    ?>
