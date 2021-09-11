<?php
  session_start();
  if(isset($_SESSION['username'])) {
 ?>
<html>
<head>
    <style> <?php include '../../css/traveler/traveler_plantrip.css'; ?> </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <section class="uppersection">
        <?php include '../../repeatable_contents/nav_bar_traveler.php';?>
        <style> <?php include '../../repeatable_contents/nav_bar_traveler.css'; ?>  </style>
        <br>
        <div class="content" id="content">
            <div class="container" >
                <div class="details">
                    <form>
                        <label for="location">PICKUP LOCATION       :</label>
                        <input type="text" id="location" name="location">
                        <img id="img" src="../../images/icons/placeholder.png"><br/>
                        <!-- destination  1 -->
                        <div id="destinations">
                            <table class="tableday">
                                <tr><td class="tdata"><label for="destination1">DESTINATION 1</label></td></tr>
                                <tr>
                                    <td class="tdata">
                                        <select name="destination1" id="des1">
                                        <option selected>Destination 1</option>
                                        <option value="district1">District 1</option>
                                        <option value="district2">District 2</option>
                                        <option value="district3">District 3</option>
                                        <option value="district4">District 4</option>
                                        <option value="district5">District 5</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr><td class="tdata"><button id="selecthotelbtn_first" class="selecthotelbtn"> FIRST NIGHT HOTEL</button></td></tr>
                                <tr><td class="tdata"><label for="destination1">DESTINATION 1</label></td></tr>
                                <tr>
                                    <td class="tdata">
                                        <div id="sights">
                                        <input type="checkbox" id="sight1" name="sight1" value="sight1"><label for="sight1">SIGHT 1</label><br/>
                                        <input type="checkbox" id="sight2" name="sight2" value="sight2"><label for="sight2">SIGHT 2</label><br/>
                                        <input type="checkbox" id="sight3" name="sight3" value="sight3"><label for="sight3">SIGHT 3</label><br/>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- destination 2 -->
                        <div id="destinations">
                            <table class="tableday">
                                <tr><td class="tdata"><label for="destination2">DESTINATION 2</label></td></tr>
                                <tr>
                                    <td class="tdata">
                                        <select name="destination2" id="des2">
                                        <option selected>Destination 2</option>
                                        <option value="district1">District 1</option>
                                        <option value="district2">District 2</option>
                                        <option value="district3">District 3</option>
                                        <option value="district4">District 4</option>
                                        <option value="district5">District 5</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr><td class="tdata"><button id="selecthotelbtn_second" class="selecthotelbtn">SECOND NIGHT HOTEL</button></td></tr>
                                <tr><td class="tdata"><label for="destination2">DESTINATION 2</label></td></tr>
                                <tr>
                                    <td class="tdata">
                                        <div id="sights">
                                        <input type="checkbox" id="sight1" name="sight1" value="sight1"><label for="sight1">SIGHT 1</label><br/>
                                        <input type="checkbox" id="sight2" name="sight2" value="sight2"><label for="sight2">SIGHT 2</label><br/>
                                        <input type="checkbox" id="sight3" name="sight3" value="sight3"><label for="sight3">SIGHT 3</label><br/>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- destination 3 -->
                        <div id="destinations">
                            <table class="tableday">
                                <tr><td class="tdata"><label for="destination3">DESTINATION 3</label></td></tr>
                                <tr>
                                    <td class="tdata">
                                        <select name="destination3" id="des3">
                                        <option selected>Destination 3</option>
                                        <option value="district1">District 1</option>
                                        <option value="district2">District 2</option>
                                        <option value="district3">District 3</option>
                                        <option value="district4">District 4</option>
                                        <option value="district5">District 5</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr><td class="tdata"><button id="selecthotelbtn_third" class="selecthotelbtn">THIRD NIGHT HOTEL</button></td></tr>
                                <tr><td class="tdata"><label for="destination1">DESTINATION 3</label></td></tr>
                                <tr>
                                    <td class="tdata">
                                        <div id="sights">
                                        <input type="checkbox" id="sight1" name="sight1" value="sight1"><label for="sight1">SIGHT 1</label><br/>
                                        <input type="checkbox" id="sight2" name="sight2" value="sight2"><label for="sight2">SIGHT 2</label><br/>
                                        <input type="checkbox" id="sight3" name="sight3" value="sight3"><label for="sight3">SIGHT 3</label><br/>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <label for="mails">OTHER PERSON'S E-MAILS:</label><input type="email" id="mails" name="mails"><img id="img" src="../../images/icons/plus.png"><br/>
                    </div>
                        <div class="buttons">
                            <button id="nextbtn">NEXT</button>
                        </div>
                    </form>

            </div>
        </div>

        <div id="hotel_names_popup">
          <table>
              <tr>
                  <td><a onclick="plusSlides(-1)"><div class="prev"></div></a></td>
                  <td class="hotels">
                      <div class="slide hotels1">
                          <div class="cols1">
                              <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 1000-</button></div>
                              <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 1000-</button></div>
                          </div>
                          <div class="cols2">
                              <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 1000-</button></div>
                              <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 1000-</button></div>
                          </div>
                      </div>

                      <div class="slide hotels2">
                          <div class="cols1">
                              <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> -5000</button></div>
                              <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> -5000</button></div>
                          </div>
                          <div class="cols2">
                              <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> -5000</button></div>
                              <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> -5000</button></div>
                          </div>
                      </div>

                      <div class="slide hotels3">
                          <div class="cols1">
                              <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 1000-50</button></div>
                              <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 1000-50</button></div>
                          </div>
                          <div class="cols2">
                              <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 1000-50</button></div>
                              <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 1000-50</button></div>
                          </div>
                      </div>

                      <div class="slide hotels4">
                          <div class="cols1">
                              <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 00-5000</button></div>
                              <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 00-5000</button></div>
                          </div>
                          <div class="cols2">
                              <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 00-5000</button></div>
                              <div><button onclick="window.location.href='#hotel1';" id="selecthotelbtn"> Hotel Name <br/> 00-5000</button></div>
                          </div>
                      </div>
                  </td>
                  <td><a onclick="plusSlides(1)"><div class="next"></div></a></td>
              </tr>
              <tr class="cancel"><td colspan="3"><button id="cancelbtn">CANCEL</button></td></tr>
          </table>
        </div>



    </section>

    <section id="contact_us-section">
      <?php include '../../repeatable_contents/footer.php';?>
      <style> <?php include '../../repeatable_contents/footer.css'; ?>  </style>
    </section>
    <script type="text/javascript" src="../../script/traveler/traveler_plantrip.js">

    </script>
</body>
</html>
<?php
}else{
  header("location: ../../index.html");
  exit();
}
 ?>
