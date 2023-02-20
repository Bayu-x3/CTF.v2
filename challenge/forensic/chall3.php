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
$correctF_3 = $row['correctF_3'];
?>
<!-- form input jawaban -->
<?php
require '../headF.php';
?>
<div class="card text-center">
  <div class="card-header">
  <h1 style="color: black;" weight="bold;">ROTi</h1>
    <h5 style="color: black;">Hari ini kedua orangtuaku memberikanku ROTi ulang tahun karena aku berulang tahun yang ke 13 tahun</h5>
    <a href="https://pastebin.com/raw/kC0fvBCT" target="_blank"><h5>Click here</a></h5>
  </div>
  <div class="card-body">
<form method="post">
					<input type="text" id="f3" name="f3" class="form-control" required="required" placeholder="FLGx-3{flagnya}">
							<center><br>
                            <button type="submit" name="submit" value="Check Flag" class='btn btn-success'>Check Flag</button>
		</center>		
		</form>
  </div>
    </div>
    <?php
    if ($correctF_3 == 1) {
        echo "<script>
        swal('You have answered!!', 'What the fck r u doing bro?!!!', 'error');
        </script>";
    } else {
        if (isset($_POST['submit'])) {
            // baca jawaban dari form input
            $jawaban = $_POST["f3"];
            // cek apakah jawaban yang diberikan user benar atau salah
            if ($jawaban == "FLGx-3{roti_ulang}") {
                // jawaban benar, tambahkan 5 poin ke database dan update status jawaban user menjadi 1
                $query = "UPDATE tbl_users SET poin = poin + 17, correctF_3 = 1
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
