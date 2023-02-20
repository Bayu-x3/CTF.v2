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
$correctC_1 = $row['correctC_1'];
?>
<!-- form input jawaban -->
<?php
require '../headC.php';
?>
<div class="card text-center">
    <div class="card-header">
        <h1 style="color: black;">Caesar Cipher</h1>
        <h5 style="color: black;">Kami menemukan sebuah pesan yang terlihat seperti bahasa Inggris, tapi ternyata tidak bisa dibaca. Apakah kamu bisa membantu kami menemukan apa yang tertera di dalam pesan tersebut?</h5>
        <a href="https://pastebin.com/raw/GvErhcRn" target="_blank"><h5>Click here</h5></a>
    </div>
    <div class="card-body">
        <form method="post">
            <input type="text" id="c1" name="c1" class="form-control" required="required" placeholder="FLGx-3{flagnya}" required>
            <center>
                <br>
                <button type="submit" name="submit" value="Check Flag" class='btn btn-success'>Check Flag</button>
            </center>
        </form>
    </div>
    <?php
    if ($correctC_1 == 1) {
        echo "<script>
        swal('You have answered!!', 'What the fck r u doing bro?!!!', 'error');
        </script>";
    } else {
        if (isset($_POST['submit'])) {
            // baca jawaban dari form input
            $jawaban = $_POST["c1"];
            // cek apakah jawaban yang diberikan user benar atau salah
            if ($jawaban == "FLGx-3{cheesaren}") {
                // jawaban benar, tambahkan 5 poin ke database dan update status jawaban user menjadi 1
                $query = "UPDATE tbl_users SET poin = poin + 5, correctC_1 = 1
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
