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
$correctC_2 = $row['correctC_2'];
?>
<!-- form input jawaban -->
<?php
require '../headC.php';
?>
<div class="card text-center">
    <div class="card-header">
    <h1 style="color: black;" weight="bold;">BASEcamp Icikiwir</h1>
    <h5 style="color: black;">Di dalam tongkrongan ini terdiri dari 64 orang, dan 3 nya adalah anak remaja</h5>
    <a href="https://pastebin.com/raw/Q7imfxfw" target="_blank"><h5>Click here</a></h5>
    </div>
    <div class="card-body">
        <form method="post">
            <input type="text" id="c2" name="c2" class="form-control" required="required" placeholder="FLGx-3{flagnya}" required>
            <center>
                <br>
                <button type="submit" name="submit" value="Check Flag" class='btn btn-success'>Check Flag</button>
            </center>
        </form>
    </div>
    <?php
    if ($correctC_2 == 1) {
        echo "<script>
        swal('You have answered!!', 'What the fck r u doing bro?!!!', 'error');
        </script>";
    } else {
        if (isset($_POST['submit'])) {
            // baca jawaban dari form input
            $jawaban = $_POST["c2"];
            // cek apakah jawaban yang diberikan user benar atau salah
            if ($jawaban == "FLGx-3{L0rdh4sb33n}") {
                // jawaban benar, tambahkan 5 poin ke database dan update status jawaban user menjadi 1
                $query = "UPDATE tbl_users SET poin = poin + 10, correctC_2 = 1
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
    $conn->close();
    ?>
    <br><br>
    <?php
    include '../../assets/footer.php';
    ?>
