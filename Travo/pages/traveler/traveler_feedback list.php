<?php
  session_start();
  if(isset($_SESSION['username'])) {
    include '../../db/db_connection.php';
    $temp = $_SESSION['username'];
    $sqlForSession = "SELECT travelerID FROM travelers WHERE email = '$temp'";
    $resultForSession = mysqli_query($con, $sqlForSession);
    if (mysqli_num_rows($resultForSession) === 1) {
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style> <?php include '../../css/traveler/traveler_feedback_list.css'; ?> </style>
    <?php
      $result = require '../../db/traveler/traveler_feedbacklist.php';
    ?>
  </head>
  <body>
    <section class="feedback">
      <?php include '../../repeatable_contents/nav_bar_traveler.php';?>
      <style> <?php include '../../repeatable_contents/nav_bar_traveler.css'; ?>  </style>
      <script type="text/javascript" src="../../repeatable_contents/nav_bar_traveler.js"></script>
      <br>
    <div class="box-feedback">
      <br>
      <table class="feedback_table-feedback">
        <thead class="feedback_thead-feedback">
          <tr>
            <td class="date-feedback">DATE</td>
            <td class="feedback-feedback">FEEDBACK</td>
          </tr>
        </thead>
        <tbody class="feedback_tbody-feedback">
          <?php
            while ($rows = mysqli_fetch_array($result)){
              echo "<tr>
                <td class='date-feedback'>".$rows['date']."</td>
                <td class='feedback-feedback'>".$rows['feedback']."</td>
              </tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
    </section>
    <section id="contact_us-section">
      <?php include '../../repeatable_contents/footer.php';?>
      <style> <?php include '../../repeatable_contents/footer.css'; ?>  </style>
    </section>

  </body>
</html>
<?php
  } else{
    echo '<script type="text/javascript">javascript:history.go(-1)</script>';
    exit();
  }
}else{
  header("location: ../../index.html");
  exit();
}
 ?>
