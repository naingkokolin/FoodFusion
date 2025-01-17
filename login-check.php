<?
  // session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "foodfusion";

  if (isset($_SESSION['fail_attempts'])) {
    $_SESSION['fail_attempts'] = 0;
  }

  if (isset($_POST["login"])) {
    $email = htmlspecialchars($_POST["loginEmail"]);
    $password = htmlspecialchars($_POST["loginPassword"]);

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    };

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $user = $result->fetch_assoc();

      if (password_verify($password, $user['password'])) {
        $_SESSION['user_name'] = $user['firstName'];
        $_SESSION['user_email'] = $user['email'];

        echo "<script>alert('Login Successful.');</script>";
        $_SESSION['fail_attempts'] = 0;
      } else {
        echo "<script>alert('Login Failed! Please Try Again!');</script>";
        $_SESSION['fail_attempts']++;

        if ($_SESSION['fail_attempts'] >= 3) {
          
        } else if ($_SESSION['fail_attempts'] >= 5) {
          echo "<script>alert('You have been locked out.');</script>";
        }
      }
    }
  }


?>