<?php
  session_start();
  if(isset($_SESSION['username'])) {
 ?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/hotel/hotel_bookings.css">
    <style> <?php include '../../css/hotel/hotel_bookings.css'; ?> </style>

</head>
<body>
<section class="sign_up-traveler">
      <?php include '../../repeatable_contents/nav_bar_hotel.php';?>
      <style>
      <?php include '../../repeatable_contents/nav_bar_hotel.css'; ?>
      </style>
<center>
        <form>
            <div class="rectangle2">
                <table>
                    <td><label class = "label" for="dateselect">DATE :</label></td>
                    <div class="calender"></div>
                    <td><input type="date" id="dateselect" name="dateselect" placeholder="yy/mm/dd"></td>
                 </table>
             </div>
        </form>
         </br></br>

    <div class="rectangle">
            <table class="b" rules= "none">
                <tr class = "tr.no-bottom-border td">
                    <th class ="b">CHECK-IN</th>
                    <th class ="b">CHECK-OUT</th>
                    <th class ="b">SINGLE ROOMS</th>
                    <th class ="b">DOUBLE ROOMS</th>
                    <th class ="b">FAMILY ROOMS</th>
                    <th class ="b">MASSIVE ROOMS</th>
                    <th class ="b">PRICE</th> </br>
                    <th class ="b">CUSTOMER DETAILS</th> </br>
                  </tr>
                 <tr>
                    <td class ="b"> </td>
                    <td class ="b"> </td>
                    <td class ="b"> </td>
                    <td class ="b"> </td>
                    <td class ="b"  > </td>
                    <td class ="b"  > </td>
                    <td class ="b"  >
                       <div class="price" placeholder="Rs. XXXX"></div>
                    </td>
                    <td class ="b"  >
                       <button class="morebtn">More</button>
                    </td>
                   </tr>
                   <tr>
                    <td class ="b"> </td>
                    <td class ="b"> </td>
                    <td class ="b"> </td>
                    <td class ="b"> </td>
                    <td class ="b"  > </td>
                    <td class ="b"  > </td>
                    <td class ="b"  >
                       <div class="price" placeholder="Rs. XXXX"></div>
                    </td>
                    <td class ="b"  >
                       <button class="morebtn">More</button>
                    </td>
                    </tr>
                    <tr>
                    <td class ="b"> </td>
                    <td class ="b"> </td>
                    <td class ="b"> </td>
                    <td class ="b"> </td>
                    <td class ="b"  > </td>
                    <td class ="b"  > </td>
                    <td class ="b"  >
                       <div class="price" placeholder="Rs. XXXX"></div>
                    </td>
                    <td class ="b"  >
                        <button class="morebtn">More</button>
                    </td>
                    </tr>
                    <tr>
                    <td class ="b"> </td>
                    <td class ="b"> </td>
                    <td class ="b"> </td>
                    <td class ="b"> </td>
                    <td class ="b"  > </td>
                    <td class ="b"  > </td>
                    <td class ="b"  >
                        <div class="price" placeholder="Rs. XXXX"></div>
                    </td>
                    <td class ="b"  >
                        <button class="morebtn">More</button>
                    </td>
                </tr>
                </br>
            </table> </div> </br>

    </section>
<section id="contact_us-section">
      <?php include '../../repeatable_contents/footer.php';?>
      <style> <?php include '../../repeatable_contents/footer.css'; ?>  </style>
      </section>

    </body>
</html>
<?php
}else{
  header("location: ../../index.html");
  exit();
}
 ?>
