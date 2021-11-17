<?php
session_start();
// Page was not reloaded via a button press
if (!isset($_POST['playerChoice'])) {
  $_SESSION['winPoint'] = 0;
  $_SESSION['drawPoint'] = 0;
  $_SESSION['losePoint'] = 0;
  // Reset counter
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rock, Paper and Scissor</title>
  <link rel="icon" href="https://img.icons8.com/external-wanicon-lineal-color-wanicon/64/000000/external-game-free-time-wanicon-lineal-color-wanicon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-info">
  <div class="container">
    <div class="card shadow" id="bg">
      <div class="card-body text-center">
        <!-- title section start -->
        <h1 class="card-title">Rock, Paper and Scissor Game</h1>
        <h2 class="card-subtitle my-2 text-muted">
          Let's Play Rock Paper Scissor
        </h2>
        <h3 class="card-subtitle mt-5">Choose for Rock, Paper or Scissor:</h3>

        <!-- audio section start -->
        <audio id="win-audio">
          <source src="sound-effects/win.wav" type="audio/wav">
          Your browser does not support the audio element.
        </audio>
        <audio id="draw-audio">
          <source src="sound-effects/draw.wav" type="audio/wav">
          Your browser does not support the audio element.
        </audio>
        <audio id="lose-audio">
          <source src="sound-effects/lose.wav" type="audio/wav">
          Your browser does not support the audio element.
        </audio>


        <!-- game form section start -->
        <div class="
              d-flex
              flex-md-row flex-column
              justify-content-center
            ">
          <form method="post">
              @csrf
            <button class="btn btn-primary m-2 px-4 py-2" name="playerChoice" value="Rock" title="Rock" type="submit">
              <i class="fas fa-hand-rock"></i>
            </button>
            <button class="btn btn-success m-2 px-4 py-2" name="playerChoice" value="Paper" title="Paper" type="submit">
              <i class="fas fa-hand-paper"></i>
            </button>
            <button class="btn btn-danger m-2 px-4 py-2" name="playerChoice" value="Scissor" title="Scissor" type="submit">
              <i class="fas fa-hand-scissors"></i>
            </button>
          </form>
        </div>



        <?php
        if (empty($_POST['playerChoice'])) {
          $playerChoice = null;
        } else {
          $playerChoice = $_POST['playerChoice'];
        }
        // echo $playerChoice;
        $computerNum = mt_rand(1, 3);
        if ($computerNum == 1) {
          $computerChoice = "Rock";
        } else if ($computerNum == 2) {
          $computerChoice = "Paper";
        } else {
          $computerChoice = "Scissor";
        }
        // echo $computerChoice;
        if ($computerChoice == $playerChoice) {
          $result = "Draw!";
        } else if ($playerChoice == "Rock" && $computerChoice == "Paper") {
          $result = "Computer Win!, You Lose!";
        } else if ($playerChoice == "Paper" && $computerChoice == "Scissor") {
          $result = "Computer Win!, You Lose!";
        } else if ($playerChoice == "Scissor" && $computerChoice == "Rock") {
          $result = "Computer Win!, You Lose!";
        } else if ($playerChoice == null) {
          $result = "";
        } else {
          $result = "You Win!";
        }
        // echo $result;

        if ($result == "You Win!") {
          $audio = "<script>
          $(\"#win-audio\")[0].play();
          </script>";
          $_SESSION['winPoint']++;
        } else if ($result == "Draw!") {
          $audio = "<script>
          $(\"#draw-audio\")[0].play();
          </script>";
          $_SESSION['drawPoint']++;
        } else if ($result == "Computer Win!, You Lose!") {
          $audio = "<script>
          $(\"#lose-audio\")[0].play();
          </script>";
          $_SESSION['losePoint']++;
        } else {
          $audio = null;
        }
        echo $audio;

        if (isset($playerChoice)) {
          echo "<h3 class=\"text-center\" id=\"playerChoice\">You choose $playerChoice</h3>
          <h3 class=\"text-center\" id=\"computerChoice\">Computer choose $computerChoice</h3>
          <h1 class=\"text-center display-4\" id=\"result\"> $result</h1>
          <a href=\"index.php\" class=\"btn btn-info mt-5\"><i class=\"fas fa-redo-alt\"></i> Restart</a>";
        } else {
          echo null;
        }
        ?>

        <h5 class="text-center mt-5">
          <span class="mx-2 p-1 border"> Win = <?php echo $_SESSION['winPoint']; ?> </span>
          <span class="mx-2 p-1 border"> Draw = <?php echo $_SESSION['drawPoint']; ?> </span>
          <span class="mx-2 p-1 border"> Lose = <?php echo $_SESSION['losePoint']; ?> </span>
        </h5>


      </div>
    </div>
  </div>

  <!-- footer section start -->
  <footer class="footer bottom d-sm-block d-none">
    <div class="container-fluid">
      <div class="row d-flex flex-row justify-content-center">
        <div class="card text-center">
          <div class="card-body">
            <h1 class="footer-title">
              Made with 💗 by
              <a href="https://github.com/MrWaradana">
                <i class="fab fa-github" aria-hidden="true"></i> MrWaradana</a>
            </h1>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>
