<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

  <title>CSD460 Moffat Bay Lodge Landing Page</title>
</head>

<script>


</script>


<body>

  <?php
  session_start();
  include "register.php";
  ?>


  <nav>
    <!--logo-->
    <!--top navigation bar-->
    <div class="navigation">

      <a href="./index.php">Home</a>
      <a href="./about.php">About</a>
      <a href="./contact.php">Contact Us</a>
      <a href="./attractions.php">Attractions</a>
      <a href="./reservations.php">Reservations</a>
      <a href="./registration_page.php" class="active">Registration</a>
      <?php
            if (isset($_SESSION['Email'])) {

                ?>
                <div id="logout"><a href="Logout.php" id="logoutlink">Logout</a></div>
                <?php
            } else {
                ?>
                <div class="navitemlogin"><a href="Login_Page.php">Login</a></div>
                <?php
            }
            ?>


            <!-- <div class="navitemlogin"><a href="./login.html" class="active">Login</a></div> -->
            <div class="username">
            <?php
            if (isset($_SESSION['Email'])) {

            echo "Hello, " . $_SESSION['Email']."!"; 
            
            
            }
            ?>
            </div>

    </div>
  </nav>



<!--
  <div class="container">

  </div> container-->
  <div class="bannerimg">
    <p>Moffat Bay Lodge</p>
  </div>

  <div class="bodyinformation">
    <h2 id="registrationheader">Create Your Account Now</h2>

    <?php
    if (isset($_SESSION['status'])) {

      ?>
      <div class="successstatus" role="alert">
        <?php echo $_SESSION['status']; ?>
      </div>
      <?php

      unset($_SESSION['status']);
    }
    ?>





    <form action="register.php" method="post">
      <div class="container">

        <fieldset class="griditem1 fieldset">
          <legend class="legend">Name</legend>
          <div class="mb-3 flexitems">
            <label for="fname" class="form-label flex">First Name</label>
            <input type="text" class="registrationinput" name="fname" required>
          </div>
          <div class="mb-3 flexitems">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="registrationinput" name="lname" required>
          </div>
        </fieldset>
        <fieldset class="griditem2 fieldset">
          <legend class="legend">Phone Number</legend>
          <div class="mb-3 flexitems">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="registrationinput" name="phone" required>
          </div>
        </fieldset>
        <fieldset class="griditem4 fieldset">
          <legend class="legend">Email</legend>
          <div class="mb-3 flexitems">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="registrationinput" placeholder="name@example.com" name="email" required>
            <div id="passwordHelpBlock" class="form-text">
              Your email will be your username.
            </div>
          </div>
        </fieldset>
        <fieldset class="griditem3 addressflex fieldset">
          <div class="legend">
            <legend>Address</legend>
          </div>

          <div class="addresscontainer">
            <div class="streetgrouping">
              <div class="mb-3 item">
                <label for="address1" class="form-label">Street Address 1</label>
                <input type="text" class="registrationinput" name="address1" required>
              </div>
              <div class="mb-3 item">
                <label for="address2" class="form-label">Street Address 2</label>
                <input type="text" class="registrationinput" name="address2">
              </div>
            </div>
            <div class="citygrouping">
              <div class="mb-3 item smaller">
                <label for="city" class="form-label">City</label>
                <input type="text" class="registrationinput" name="city" required>
              </div>

              <div class="mb-3 item flexstate smaller">
                <label for="state" class="form-label">State</label>
                <!-- <input type="text" class="registrationinput" name="state">  -->
                <select class="dropdown" aria-label="Select a State" name="state" required>
                  <option selected>State</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
              </div>

              <div class="mb-3 item flexiteitemms flexzip smaller">
                <label for="zip" class="form-label">Zip</label>
                <input type="text" class="registrationinput" name="zip" required>
              </div>
              <div class="mb-3 item flexzip smaller country">
                <label for="zip" class="form-label">Country</label>

                <select class="dropdown" aria-label="Select a Country" name="country" required>
                  <option selected>Country</option>
                  <option value='Aruba'>Aruba</option>
                  <option value='Afghanistan'>Afghanistan</option>
                  <option value='Angola'>Angola</option>
                  <option value='Anguilla'>Anguilla</option>
                  <option value='Albania'>Albania</option>
                  <option value='Andorra'>Andorra</option>
                  <option value='Netherlands Antilles'>Netherlands Antilles</option>
                  <option value='United Arab Emirates'>United Arab Emirates</option>
                  <option value='Argentina'>Argentina</option>
                  <option value='Armenia'>Armenia</option>
                  <option value='American Samoa'>American Samoa</option>
                  <option value='Antarctica'>Antarctica</option>
                  <option value='French Southern territories'>French Southern territories</option>
                  <option value='Antigua and Barbuda'>Antigua and Barbuda</option>
                  <option value='Australia'>Australia</option>
                  <option value='Austria'>Austria</option>
                  <option value='Azerbaijan'>Azerbaijan</option>
                  <option value='Burundi'>Burundi</option>
                  <option value='Belgium'>Belgium</option>
                  <option value='Benin'>Benin</option>
                  <option value='Burkina Faso'>Burkina Faso</option>
                  <option value='Bangladesh'>Bangladesh</option>
                  <option value='Bulgaria'>Bulgaria</option>
                  <option value='Bahrain'>Bahrain</option>
                  <option value='Bahamas'>Bahamas</option>
                  <option value='Bosnia and Herzegovina'>Bosnia and Herzegovina</option>
                  <option value='Belarus'>Belarus</option>
                  <option value='Belize'>Belize</option>
                  <option value='Bermuda'>Bermuda</option>
                  <option value='Bolivia'>Bolivia</option>
                  <option value='Brazil'>Brazil</option>
                  <option value='Barbados'>Barbados</option>
                  <option value='Brunei'>Brunei</option>
                  <option value='Bhutan'>Bhutan</option>
                  <option value='Bouvet Island'>Bouvet Island</option>
                  <option value='Botswana'>Botswana</option>
                  <option value='Central African Republic'>Central African Republic</option>
                  <option value='Canada'>Canada</option>
                  <option value='Cocos (Keeling) Islands'>Cocos (Keeling) Islands</option>
                  <option value='Switzerland'>Switzerland</option>
                  <option value='Chile'>Chile</option>
                  <option value='China'>China</option>
                  <option value='Ivory Coast'>Ivory Coast</option>
                  <option value='Cameroon'>Cameroon</option>
                  <option value='Congo, The Democratic Republic of the'>Congo, The Democratic Republic of the</option>
                  <option value='Congo'>Congo</option>
                  <option value='Cook Islands'>Cook Islands</option>
                  <option value='Colombia'>Colombia</option>
                  <option value='Comoros'>Comoros</option>
                  <option value='Cape Verde'>Cape Verde</option>
                  <option value='Costa Rica'>Costa Rica</option>
                  <option value='Cuba'>Cuba</option>
                  <option value='Christmas Island'>Christmas Island</option>
                  <option value='Cayman Islands'>Cayman Islands</option>
                  <option value='Cyprus'>Cyprus</option>
                  <option value='Czech Republic'>Czech Republic</option>
                  <option value='Germany'>Germany</option>
                  <option value='Djibouti'>Djibouti</option>
                  <option value='Dominica'>Dominica</option>
                  <option value='Denmark'>Denmark</option>
                  <option value='Dominican Republic'>Dominican Republic</option>
                  <option value='Algeria'>Algeria</option>
                  <option value='Ecuador'>Ecuador</option>
                  <option value='Egypt'>Egypt</option>
                  <option value='Eritrea'>Eritrea</option>
                  <option value='Western Sahara'>Western Sahara</option>
                  <option value='Spain'>Spain</option>
                  <option value='Estonia'>Estonia</option>
                  <option value='Ethiopia'>Ethiopia</option>
                  <option value='Finland'>Finland</option>
                  <option value='Fiji Islands'>Fiji Islands</option>
                  <option value='Falkland Islands'>Falkland Islands</option>
                  <option value='France'>France</option>
                  <option value='Faroe Islands'>Faroe Islands</option>
                  <option value='Micronesia, Federated States of'>Micronesia, Federated States of</option>
                  <option value='Gabon'>Gabon</option>
                  <option value='United Kingdom'>United Kingdom</option>
                  <option value='Georgia'>Georgia</option>
                  <option value='Ghana'>Ghana</option>
                  <option value='Gibraltar'>Gibraltar</option>
                  <option value='Guinea'>Guinea</option>
                  <option value='Guadeloupe'>Guadeloupe</option>
                  <option value='Gambia'>Gambia</option>
                  <option value='Guinea-Bissau'>Guinea-Bissau</option>
                  <option value='Equatorial Guinea'>Equatorial Guinea</option>
                  <option value='Greece'>Greece</option>
                  <option value='Grenada'>Grenada</option>
                  <option value='Greenland'>Greenland</option>
                  <option value='Guatemala'>Guatemala</option>
                  <option value='French Guiana'>French Guiana</option>
                  <option value='Guam'>Guam</option>
                  <option value='Guyana'>Guyana</option>
                  <option value='Hong Kong'>Hong Kong</option>
                  <option value='Heard Island and McDonald Islands'>Heard Island and McDonald Islands</option>
                  <option value='Honduras'>Honduras</option>
                  <option value='Croatia'>Croatia</option>
                  <option value='Haiti'>Haiti</option>
                  <option value='Hungary'>Hungary</option>
                  <option value='Indonesia'>Indonesia</option>
                  <option value='India'>India</option>
                  <option value='British Indian Ocean Territory'>British Indian Ocean Territory</option>
                  <option value='Ireland'>Ireland</option>
                  <option value='Iran'>Iran</option>
                  <option value='Iraq'>Iraq</option>
                  <option value='Iceland'>Iceland</option>
                  <option value='Israel'>Israel</option>
                  <option value='Italy'>Italy</option>
                  <option value='Jamaica'>Jamaica</option>
                  <option value='Jordan'>Jordan</option>
                  <option value='Japan'>Japan</option>
                  <option value='Kazakhstan'>Kazakhstan</option>
                  <option value='Kenya'>Kenya</option>
                  <option value='Kyrgyzstan'>Kyrgyzstan</option>
                  <option value='Cambodia'>Cambodia</option>
                  <option value='Kiribati'>Kiribati</option>
                  <option value='Saint Kitts and Nevis'>Saint Kitts and Nevis</option>
                  <option value='South Korea'>South Korea</option>
                  <option value='Kuwait'>Kuwait</option>
                  <option value='Laos'>Laos</option>
                  <option value='Lebanon'>Lebanon</option>
                  <option value='Liberia'>Liberia</option>
                  <option value='Libyan Arab Jamahiriya'>Libyan Arab Jamahiriya</option>
                  <option value='Saint Lucia'>Saint Lucia</option>
                  <option value='Liechtenstein'>Liechtenstein</option>
                  <option value='Sri Lanka'>Sri Lanka</option>
                  <option value='Lesotho'>Lesotho</option>
                  <option value='Lithuania'>Lithuania</option>
                  <option value='Luxembourg'>Luxembourg</option>
                  <option value='Latvia'>Latvia</option>
                  <option value='Macao'>Macao</option>
                  <option value='Morocco'>Morocco</option>
                  <option value='Monaco'>Monaco</option>
                  <option value='Moldova'>Moldova</option>
                  <option value='Madagascar'>Madagascar</option>
                  <option value='Maldives'>Maldives</option>
                  <option value='Mexico'>Mexico</option>
                  <option value='Marshall Islands'>Marshall Islands</option>
                  <option value='Macedonia'>Macedonia</option>
                  <option value='Mali'>Mali</option>
                  <option value='Malta'>Malta</option>
                  <option value='Myanmar'>Myanmar</option>
                  <option value='Mongolia'>Mongolia</option>
                  <option value='Northern Mariana Islands'>Northern Mariana Islands</option>
                  <option value='Mozambique'>Mozambique</option>
                  <option value='Mauritania'>Mauritania</option>
                  <option value='Montserrat'>Montserrat</option>
                  <option value='Martinique'>Martinique</option>
                  <option value='Mauritius'>Mauritius</option>
                  <option value='Malawi'>Malawi</option>
                  <option value='Malaysia'>Malaysia</option>
                  <option value='Mayotte'>Mayotte</option>
                  <option value='Namibia'>Namibia</option>
                  <option value='New Caledonia'>New Caledonia</option>
                  <option value='Niger'>Niger</option>
                  <option value='Norfolk Island'>Norfolk Island</option>
                  <option value='Nigeria'>Nigeria</option>
                  <option value='Nicaragua'>Nicaragua</option>
                  <option value='Niue'>Niue</option>
                  <option value='Netherlands'>Netherlands</option>
                  <option value='Norway'>Norway</option>
                  <option value='Nepal'>Nepal</option>
                  <option value='Nauru'>Nauru</option>
                  <option value='New Zealand'>New Zealand</option>
                  <option value='Oman'>Oman</option>
                  <option value='Pakistan'>Pakistan</option>
                  <option value='Panama'>Panama</option>
                  <option value='Pitcairn'>Pitcairn</option>
                  <option value='Peru'>Peru</option>
                  <option value='Philippines'>Philippines</option>
                  <option value='Palau'>Palau</option>
                  <option value='Papua New Guinea'>Papua New Guinea</option>
                  <option value='Poland'>Poland</option>
                  <option value='Puerto Rico'>Puerto Rico</option>
                  <option value='North Korea'>North Korea</option>
                  <option value='Portugal'>Portugal</option>
                  <option value='Paraguay'>Paraguay</option>
                  <option value='Palestine'>Palestine</option>
                  <option value='French Polynesia'>French Polynesia</option>
                  <option value='Qatar'>Qatar</option>
                  <option value='Reunion'>Reunion</option>
                  <option value='Romania'>Romania</option>
                  <option value='Russian Federation'>Russian Federation</option>
                  <option value='Rwanda'>Rwanda</option>
                  <option value='Saudi Arabia'>Saudi Arabia</option>
                  <option value='Sudan'>Sudan</option>
                  <option value='Senegal'>Senegal</option>
                  <option value='Singapore'>Singapore</option>
                  <option value='South Georgia and the South Sandwich Islands'>South Georgia and the South Sandwich
                    Islands</option>
                  <option value='Saint Helena'>Saint Helena</option>
                  <option value='Svalbard and Jan Mayen'>Svalbard and Jan Mayen</option>
                  <option value='Solomon Islands'>Solomon Islands</option>
                  <option value='Sierra Leone'>Sierra Leone</option>
                  <option value='El Salvador'>El Salvador</option>
                  <option value='San Marino'>San Marino</option>
                  <option value='Somalia'>Somalia</option>
                  <option value='Saint Pierre and Miquelon'>Saint Pierre and Miquelon</option>
                  <option value='Sao Tome and Principe'>Sao Tome and Principe</option>
                  <option value='Suriname'>Suriname</option>
                  <option value='Slovakia'>Slovakia</option>
                  <option value='Slovenia'>Slovenia</option>
                  <option value='Sweden'>Sweden</option>
                  <option value='Swaziland'>Swaziland</option>
                  <option value='Seychelles'>Seychelles</option>
                  <option value='Syria'>Syria</option>
                  <option value='Turks and Caicos Islands'>Turks and Caicos Islands</option>
                  <option value='Chad'>Chad</option>
                  <option value='Togo'>Togo</option>
                  <option value='Thailand'>Thailand</option>
                  <option value='Tajikistan'>Tajikistan</option>
                  <option value='Tokelau'>Tokelau</option>
                  <option value='Turkmenistan'>Turkmenistan</option>
                  <option value='East Timor'>East Timor</option>
                  <option value='Tonga'>Tonga</option>
                  <option value='Trinidad and Tobago'>Trinidad and Tobago</option>
                  <option value='Tunisia'>Tunisia</option>
                  <option value='Turkey'>Turkey</option>
                  <option value='Tuvalu'>Tuvalu</option>
                  <option value='Taiwan'>Taiwan</option>
                  <option value='Tanzania'>Tanzania</option>
                  <option value='Uganda'>Uganda</option>
                  <option value='Ukraine'>Ukraine</option>
                  <option value='United States Minor Outlying Islands'>United States Minor Outlying Islands</option>
                  <option value='Uruguay'>Uruguay</option>
                  <option value='United States'>United States</option>
                  <option value='Uzbekistan'>Uzbekistan</option>
                  <option value='Holy See (Vatican City State)'>Holy See (Vatican City State)</option>
                  <option value='Saint Vincent and the Grenadines'>Saint Vincent and the Grenadines</option>
                  <option value='Venezuela'>Venezuela</option>
                  <option value='Virgin Islands, British'>Virgin Islands, British</option>
                  <option value='Virgin Islands, U.S.'>Virgin Islands, U.S.</option>
                  <option value='Vietnam'>Vietnam</option>
                  <option value='Vanuatu'>Vanuatu</option>
                  <option value='Wallis and Futuna'>Wallis and Futuna</option>
                  <option value='Samoa'>Samoa</option>
                  <option value='Yemen'>Yemen</option>
                  <option value='Yugoslavia'>Yugoslavia</option>
                  <option value='South Africa'>South Africa</option>
                  <option value='Zambia'>Zambia</option>
                  <option value='Zimbabwe'>Zimbabwe</option>
                </select>
              </div>
            </div>

          </div>

        </fieldset>

        <fieldset class="griditem5 fieldset">
          <legend class="legend">Password</legend>
          <div class="mb-3">
            <label for="inputPassword5" class="form-label">Password</label>
            <input type="password" id="psw" class="registrationinput" aria-describedby="passwordHelpBlock" name="pass"
              pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" required>

            <div id="passwordHelpBlock" class="form-text">
              Your password must be at least 8 characters long and contain an uppercase and
              lowercase
              letter.
            </div>
          </div>
        </fieldset>



        <div class="griditem6">
          <input class="btn btn-primary" type="submit" value="Register" id="register" name="formSubmit">
        </div>

      </div>





    </form>

  </div>


</body>
<div class="footer">
    <p>This website was created as a class assignment
        <br>
        CSD460 Capstone in Software Development Project - Group B
        <br>
        Bellevue University</p>

</div>
</body>

</html>
