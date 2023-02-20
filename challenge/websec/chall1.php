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
$correctW_1 = $row['correctF_1'];
?>
<!-- form input jawaban -->
<?php
require '../headW.php';
?>
<div class="card text-center">
  <div class="card-header">
    <h1 style="color: black;">Cookie</h1>
    <h5 style="color: black;">Hari ini aku menambahkan cookie, cookie nya isinya pisang, cookie cookie siapa yang mau cookie pisang, lagi promo loh cookies pisang nya</h5>
  </div>
  <div class="card-body">
<form method="post">
					<input type="text" id="w1" name="w1" class="form-control" required="required" placeholder="FLGx-3{flagnya}">
							<center><br>
                            <button type="submit" name="submit" value="Check Flag" class='btn btn-success'>Check Flag</button>
		</center>		
		</form>
    </div>
    <?php
    if ($correctW_1 == 1) {
        echo "<script>
        swal('You have answered!!', 'What the fck r u doing bro?!!!', 'error');
        </script>";
    } else {
        if (isset($_POST['submit'])) {
            // baca jawaban dari form input
            $jawaban = $_POST["w1"];
            // cek apakah jawaban yang diberikan user benar atau salah
            if ($jawaban == "FLGx-3{cookies_banana}") {
                // jawaban benar, tambahkan 5 poin ke database dan update status jawaban user menjadi 1
                $query = "UPDATE tbl_users SET poin = poin + 7, correctF_1 = 1
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
