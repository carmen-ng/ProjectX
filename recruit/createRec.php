<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NEW</title>
        <link rel="stylesheet" href="beta.css" type="text/css">
        <link rel="stylesheet" href="animsition.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
    </head>
    <body class="cbp-spmenu-push">
        <div id="fullpage">
            <div class="container animsition-overlay" data-animsition-overlay="true">
                <div class="header">
                    <div class="nav">
                        <div class="navLeft">
                            <li><a href="#"><img class="ham" id="showLeft"src="../images/ham.png" alt=""></a></li>
                            <li><a href="#"><img class="face" src="../images/face.png" alt=""></a></li>
                            <li>
                                <a href="#">
                                    <h1>Asc Name</h1>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h1>Position</h1>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h1>Writing #</h1>
                                </a>
                            </li>
                            <!-- codrop nav -->
                            <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left bounceInDown" id="cbp-spmenu-s1">
                                <h3>Recruitment</h3>
                                <a class="animsition-link" href="createRec.php" class="active">Create a Lead Profile</a>
                                <a class="animsition-link" href="createUser.php">Create an User</a>
                                <a class="animsition-link" href="#">Search Recruit Leads</a>
                                <a class="animsition-link" href="ReviewLeads.html">View Recruit Leads</a>
                                <a class="animsition-link" href="#">Menu Item</a>
                            </nav>
                            <!-- end codrop -->
                            <!-- end .navLeft -->
                        </div>
                        <div class="navRight">
                            <li><a href="../home.html"><img class="navLogo" src="../images/icon-home.png" alt=""></a></li>
                            <li><a href="#"><img class="navLogo" src="../images/icon-cal.png" alt=""></a></li>
                            <li><a href="dashRec.html" class="active"><img class="navLogo" src="../images/icon-rec.png" alt=""></a></li>
                            <li><a href="#"><img class="navLogo" src="../images/icon-hr.png" alt=""></a></li>
                            <li><a href="#"><img class="navLogo" src="../images/icon-leads.png" alt=""></a></li>
                            <li><a href="#"><img class="navLogo" src="../images/icon-sales.png" alt=""></a></li>
                            <li><a href="#"><img class="navLogo" src="../images/icon-accounts-temp.png" alt=""></a></li>
                            <li><a href="#"><img class="navLogo logoLast" src="../images/logo.png" alt=""></a></li>
                            <!-- end .navRight -->
                        </div>
                        <!-- end .nav -->
                        <!-- end -->
                    </div>
                    <!-- end header -->
                </div>
                <div class="body">
                    <div class="section">
                        <!--  <h1 class="main-text">Create a Recruit Profile</h1> -->
                        <form action="confirmation.php" id="rec_form" enctype="multipart/form-data"  method="post">
                            <div class="left slide">
                                <!-- <form class="leftForm"> -->
                                <h2>NAME</h2>
                                <table width="84%">
                                    <td width="12%">
                                        <span class="requiredSign">* First name:</span><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                    </td>
                                    <td width="25%">
                                        <!-- <input type="text" name="firstName" class="fn formName" required></span> -->
                                        <input stype = "margin-left: 40px" type="text" name="firstName" class="fn formName" ></span>
                                    </td>
                                    <td width="2%">
                                        <label class="labelMi">M.I:</label>
                                    </td>
                                    <td width="8%">
                                        <input type="text" name="middleInitial" class="mi formName">
                                    </td>
                                    <td  width="12%">
                                        <span class="requiredSign">* Last name:</span><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                    </td>
                                    <td width="25%">
                                        <!-- <input type="text" name="lastName" class="ln formName" required> -->
                                        <input type="text" name="lastName" class="ln formName" >
                                    </td>
                                </table>
                                <br><br>
                                <h2>LOCATION</h2>
                                <span class="requiredSign">* </span><label>Street Address 1:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                <!-- <input type="text" name="streetAddress" class="s1 formName" required> -->
                                <input type="text" name="streetAddress" class="s1 formName" >
                                <br><br>
                                <label>Street Address 2:</label>
                                <input type="text" name="streetAddress2" class="s2 formName">
                                <br><br>
                                <span class="requiredSign">* </span><label class="labelCity">City:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                <!-- <input type="text" name="city" class="city formName" required> -->
                                <input type="text" name="city" class="city formName" >
                                <br><br>
                                <span class="requiredSign">* </span><label class="labelZip">Zip:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                <!-- <input type="text" name="zip" class="zip formName" required> -->
                                <input type="text" name="zip" class="zip formName" >
                                <br><br>
                                <span class="requiredSign">* </span><label class="labelState">State:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                <!-- <select name="recState" class="state" required> -->
                                <select name="recState" class="state" >
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District Of Columbia</option>
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
                                <br><br>
                                <h2>CONTACT INFORMATION</h2>
                                <span class="requiredSign">* </span><label class="labelPhoneOne">Primary Phone Number:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                <!-- <input type="text" name="phone" class="phone1 formName" required> -->
                                <input type="text" name="phone" class="phone1 formName" >
                                <br><br>
                                <label class="labelPhone2">Secondary Phone Number:</label>
                                <input type="text" name="phone2" class="phone2 formName">
                                <br><br>
                                <span class="requiredSign">* </span><label class="email">Primary E-mail:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                <!-- <input type="text" name="email" class="email1 formName" required> -->
                                <input type="text" name="email" class="email1 formName" >
                                <br><br>
                                <label class="email2">Secondary E-mail:</label>
                                <input type="text" name="email2" class="email2 formName">
                                <br><br>
                                <!--</form> -->
                            </div>
                            <div class="middle slide">
                                <!--<form class="middleForm">-->
                                <h2>LANGUAGE</h2>
                                <table width="85%">
                                    <td width="27%">
                                        <span class="requiredSign"  style=" margin-left: 2%;">* </span><label class="labelLang1">Primary Spoken Language:</label><span class="requiredFieldMessage" style="display: none; margin-left: 25%;">Required Field</span>
                                    </td>
                                    <td width="38%">
                                        <!-- <input type="text" name="lang" class="lang1 formName" required> -->
                                        <input type="text" name="lang" class="lang1 formName" >
                                    </td>
                                    <td width="">
                                    <td>
                                </table>
                                <br>
                                <table width="85%">
                                    <td width="27%">
                                        <label class="labelLang2">Secondary Spoken Language:</label>
                                    </td>
                                    <td width="38%">
                                        <input type="text" name="lang2" class="lang2 formName">
                                    </td>
                                    <td width="10%">
                                        <label class="labelLang2">Proficiency:</label>
                                    </td>
                                    <td width="25%">
                                        <select name="proficiency2" class="proficiency2">
                                            <option value="elementary">Elementary</option>
                                            <option value="limited">Limited</option>
                                            <option value="professional">Professional</option>
                                            <option value="fluent">Fluent</option>
                                        </select>
                                    </td>
                                </table>
                                <br>
                                <table width="85%">
                                    <td width="27%">
                                        <label class="labelLang3">Tertiary Spoken Language:</label>
                                    </td>
                                    <td width="38%">
                                        <input type="text" name="lang3" class="lang3 formName">
                                    </td>
                                    <td width="10%">
                                        <label class="labelLang2">Proficiency:</label>
                                    </td>
                                    <td width="25%">
                                        <select name="proficiency3" class="proficiency3">
                                            <option value="elementary">Elementary</option>
                                            <option value="limited">Limited</option>
                                            <option value="professional">Professional</option>
                                            <option value="fluent">Fluent</option>
                                        </select>
                                    </td>
                                </table>
                                <br><br>
                                <br><br>
                                <h2>HIGH SCHOOL DIPLOMA OR GED</h2>
                                <br><br>
                                <script type="text/javascript">
                                function yesnoCheck() {
                                    if (document.getElementById('ged').checked) {
                                        document.getElementById('ifHichSchool').style.display = 'none';
                                    }
                                    else document.getElementById('ifHichSchool').style.display = 'block';
                                }
                                </script>
                                <table width="85%">
                                    <tr>
                                        <td width="70%">
                                            <span class="requiredSign">* </span><label>HIGH SCHOOL DIPLOMA OR GED:</label><span class="requiredFieldError" style="display: none;">Required Field</span>
                                        </td>
                                        <td width="50%">
                                            <label>GED</label><input type="radio" onclick="javascript:yesnoCheck();" name="diploma" value="GED" id="ged"> 
                                            <label>High School</label><input type="radio" onclick="javascript:yesnoCheck();" name="diploma" value="high school" id="highSchool"><br>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <table width="84%" >
                                    <td>
                                        <div id="ifHichSchool" style="display:none">
                                            <label>School Name: </label><input type='text' id='highschool' name='highschool'><br>
                                            <label>Graduate Year: <label><input type='text'   id='gradYear' name='gradYear'>
                                        </div>
                                    </td>
                                </table>
                                <br><br><br>
                                <h2>HIGHER EDUCATION</h2>
                                <!--<input type="hidden" name="higherEd" value="0">
                                    <input type="checkbox" name="higherEd" value="1">
                                    <label class="higherEd">Yes</label>
                                    <input type="hidden" name="higherEd" value="0">
                                    <input type="checkbox" name="higherEd" value="1">
                                    <label class="higherEd">No</label><br><br>-->
                                <label class="higherEd">College/University:</label>
                                <input type="text" name="university" class="gradForm formName"><br><br>
                                <label class="higherEd">Degree:</label>
                                <input type="text" name="degree" class="gradForm formName"><br><br>
                                <label class="higherEd">Graduation Year:</label>
                                <input type="text" name="HEgradYear" class="gradForm formName">
                                <!-- end middle form -->
                            </div>
                            <div class="right slide">
                                <h2>MOST RECENT WORK EXPERIENCE</h2>
                                <span class="requiredSign">* </span><label class="expText">Company Name:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                <!-- <input type="text" name="company" class=" coForm formName" required> -->
                                <input type="text" name="company" class=" coForm formName" >
                                <br><br>
                                <span class="requiredSign">* </span><label class="expText coTitle">Title:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                <input type="text" name="title" class="coForm formName" required>
                                <br><br>
                                <span class="requiredSign">* </span><label class="expText datesWorked">Dates Worked:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                <div class="datesWorkedToFrom">
                                    <!-- <input type="date" class="workedFrom" name="startDate" required> -->
                                    <input type="date" class="workedFrom" name="startDate" >
                                    <!-- <p class="datesWorkedP">-</p> -->
                                    <!-- <input type="date" class="workedTo" name="endDate" required> -->
                                    <input type="date" class="workedTo" name="endDate" >
                                </div>
                                <br><br><br>
                                <h2>2ND MOST RECENT WORK EXPERIENCE</h2>
                                <label class="expText">Company Name:</label>
                                <input type="text" name="company2" class="coForm formName">
                                <br><br>
                                <label class="expText coTitle">Title:</label>
                                <input type="text" name="title2" class="coForm formName">
                                <br><br>
                                <label class="expText datesWorked">Dates Worked:</label>
                                <div class="datesWorkedToFrom">
                                    <input type="date" class="workedFrom" name="startDate2">
                                    <!-- <p class="datesWorkedP">-</p> -->
                                    <input type="date" class="workedTo" name="endDate2">
                                </div>
                                <br><br><br>
                                <h2>LICENSES & STATE OF RESIDENCY</h2>
                                <input type="checkbox" class="licenseBox" name="PC" id="PC" value="0" onclick="setClickPC();">
                                <label class="licenseText">P&C</label>
                                <select name="PCState" id="PCState" class="stateLicense" disabled>
                                    <option value=""></option>
                                    <option value="AL">AL</option>
                                    <option value="AK">AK</option>
                                    <option value="AZ">AZ</option>
                                    <option value="AR">AR</option>
                                    <option value="CA">CA</option>
                                    <option value="CO">CO</option>
                                    <option value="CT">CT</option>
                                    <option value="DE">DE</option>
                                    <option value="FL">FL</option>
                                    <option value="GA">GA</option>
                                    <option value="HI">HI</option>
                                    <option value="ID">ID</option>
                                    <option value="IL">IL</option>
                                    <option value="IN">IN</option>
                                    <option value="IA">IA</option>
                                    <option value="KS">KS</option>
                                    <option value="KY">KY</option>
                                    <option value="LA">LA</option>
                                    <option value="ME">ME</option>
                                    <option value="MD">MD</option>
                                    <option value="MA">MA</option>
                                    <option value="MI">MI</option>
                                    <option value="MN">MN</option>
                                    <option value="MS">MS</option>
                                    <option value="MO">MO</option>
                                    <option value="MT">MT</option>
                                    <option value="NE">NE</option>
                                    <option value="NV">NV</option>
                                    <option value="NH">NH</option>
                                    <option value="NJ">NJ</option>
                                    <option value="NM">NM</option>
                                    <option value="NY">NY</option>
                                    <option value="NC">NC</option>
                                    <option value="ND">ND</option>
                                    <option value="OH">OH</option>
                                    <option value="OK">OK</option>
                                    <option value="OR">OR</option>
                                    <option value="PA">OA</option>
                                    <option value="RI">RI</option>
                                    <option value="SC">SC</option>
                                    <option value="SD">SD</option>
                                    <option value="TN">TN</option>
                                    <option value="TX">TX</option>
                                    <option value="UT">TY</option>
                                    <option value="VT">VT</option>
                                    <option value="VA">VA</option>
                                    <option value="WA">WA</option>
                                    <option value="WV">WV</option>
                                    <option value="WI">WI</option>
                                    <option value="WY">WY</option>
                                </select>
                                <br>
                                <!--<input type="hidden" class="licenseBox" name="series12" value="0"> -->
                                <input type="checkbox" class="licenseBox" name="series12" id="series12" value="0" onclick="setClickSeries();">
                                <label class="licenseText">Series 12</label>
                                <select name="series12State" id="series12State" class="stateLicense" disabled>
                                    <option value=""></option>
                                    <option value="AL">AL</option>
                                    <option value="AK">AK</option>
                                    <option value="AZ">AZ</option>
                                    <option value="AR">AR</option>
                                    <option value="CA">CA</option>
                                    <option value="CO">CO</option>
                                    <option value="CT">CT</option>
                                    <option value="DE">DE</option>
                                    <option value="FL">FL</option>
                                    <option value="GA">GA</option>
                                    <option value="HI">HI</option>
                                    <option value="ID">ID</option>
                                    <option value="IL">IL</option>
                                    <option value="IN">IN</option>
                                    <option value="IA">IA</option>
                                    <option value="KS">KS</option>
                                    <option value="KY">KY</option>
                                    <option value="LA">LA</option>
                                    <option value="ME">ME</option>
                                    <option value="MD">MD</option>
                                    <option value="MA">MA</option>
                                    <option value="MI">MI</option>
                                    <option value="MN">MN</option>
                                    <option value="MS">MS</option>
                                    <option value="MO">MO</option>
                                    <option value="MT">MT</option>
                                    <option value="NE">NE</option>
                                    <option value="NV">NV</option>
                                    <option value="NH">NH</option>
                                    <option value="NJ">NJ</option>
                                    <option value="NM">NM</option>
                                    <option value="NY">NY</option>
                                    <option value="NC">NC</option>
                                    <option value="ND">ND</option>
                                    <option value="OH">OH</option>
                                    <option value="OK">OK</option>
                                    <option value="OR">OR</option>
                                    <option value="PA">OA</option>
                                    <option value="RI">RI</option>
                                    <option value="SC">SC</option>
                                    <option value="SD">SD</option>
                                    <option value="TN">TN</option>
                                    <option value="TX">TX</option>
                                    <option value="UT">TY</option>
                                    <option value="VT">VT</option>
                                    <option value="VA">VA</option>
                                    <option value="WA">WA</option>
                                    <option value="WV">WV</option>
                                    <option value="WI">WI</option>
                                    <option value="WY">WY</option>
                                </select>
                                <br>
                                <!-- <input type="hidden" class="licenseBox" name="health" value="0"> -->
                                <input type="checkbox" class="licenseBox" name="health" id="health" value="0" onclick="setClickHealth();">
                                <label class="licenseText">Health</label>
                                <select name="healthState" id="healthState" class="stateLicense" disabled>
                                    <option value=""></option>
                                    <option value="AL">AL</option>
                                    <option value="AK">AK</option>
                                    <option value="AZ">AZ</option>
                                    <option value="AR">AR</option>
                                    <option value="CA">CA</option>
                                    <option value="CO">CO</option>
                                    <option value="CT">CT</option>
                                    <option value="DE">DE</option>
                                    <option value="FL">FL</option>
                                    <option value="GA">GA</option>
                                    <option value="HI">HI</option>
                                    <option value="ID">ID</option>
                                    <option value="IL">IL</option>
                                    <option value="IN">IN</option>
                                    <option value="IA">IA</option>
                                    <option value="KS">KS</option>
                                    <option value="KY">KY</option>
                                    <option value="LA">LA</option>
                                    <option value="ME">ME</option>
                                    <option value="MD">MD</option>
                                    <option value="MA">MA</option>
                                    <option value="MI">MI</option>
                                    <option value="MN">MN</option>
                                    <option value="MS">MS</option>
                                    <option value="MO">MO</option>
                                    <option value="MT">MT</option>
                                    <option value="NE">NE</option>
                                    <option value="NV">NV</option>
                                    <option value="NH">NH</option>
                                    <option value="NJ">NJ</option>
                                    <option value="NM">NM</option>
                                    <option value="NY">NY</option>
                                    <option value="NC">NC</option>
                                    <option value="ND">ND</option>
                                    <option value="OH">OH</option>
                                    <option value="OK">OK</option>
                                    <option value="OR">OR</option>
                                    <option value="PA">OA</option>
                                    <option value="RI">RI</option>
                                    <option value="SC">SC</option>
                                    <option value="SD">SD</option>
                                    <option value="TN">TN</option>
                                    <option value="TX">TX</option>
                                    <option value="UT">TY</option>
                                    <option value="VT">VT</option>
                                    <option value="VA">VA</option>
                                    <option value="WA">WA</option>
                                    <option value="WV">WV</option>
                                    <option value="WI">WI</option>
                                    <option value="WY">WY</option>
                                </select>
                                <br>
                                <!--<input type="hidden" class="licenseBox" name="life" value="0"> -->
                                <input type="checkbox" class="licenseBox" name="life" id="life" value="0" onclick="setClickLife();">
                                <label class="licenseText">Life</label>
                                <select name="lifeState" id="lifeState" class="stateLicense" disabled>
                                    <option value=""></option>
                                    <option value="AL">AL</option>
                                    <option value="AK">AK</option>
                                    <option value="AZ">AZ</option>
                                    <option value="AR">AR</option>
                                    <option value="CA">CA</option>
                                    <option value="CO">CO</option>
                                    <option value="CT">CT</option>
                                    <option value="DE">DE</option>
                                    <option value="FL">FL</option>
                                    <option value="GA">GA</option>
                                    <option value="HI">HI</option>
                                    <option value="ID">ID</option>
                                    <option value="IL">IL</option>
                                    <option value="IN">IN</option>
                                    <option value="IA">IA</option>
                                    <option value="KS">KS</option>
                                    <option value="KY">KY</option>
                                    <option value="LA">LA</option>
                                    <option value="ME">ME</option>
                                    <option value="MD">MD</option>
                                    <option value="MA">MA</option>
                                    <option value="MI">MI</option>
                                    <option value="MN">MN</option>
                                    <option value="MS">MS</option>
                                    <option value="MO">MO</option>
                                    <option value="MT">MT</option>
                                    <option value="NE">NE</option>
                                    <option value="NV">NV</option>
                                    <option value="NH">NH</option>
                                    <option value="NJ">NJ</option>
                                    <option value="NM">NM</option>
                                    <option value="NY">NY</option>
                                    <option value="NC">NC</option>
                                    <option value="ND">ND</option>
                                    <option value="OH">OH</option>
                                    <option value="OK">OK</option>
                                    <option value="OR">OR</option>
                                    <option value="PA">OA</option>
                                    <option value="RI">RI</option>
                                    <option value="SC">SC</option>
                                    <option value="SD">SD</option>
                                    <option value="TN">TN</option>
                                    <option value="TX">TX</option>
                                    <option value="UT">TY</option>
                                    <option value="VT">VT</option>
                                    <option value="VA">VA</option>
                                    <option value="WA">WA</option>
                                    <option value="WV">WV</option>
                                    <option value="WI">WI</option>
                                    <option value="WY">WY</option>
                                </select>
                                <br>
                                <!--<input type="hidden" class="licenseBox" name="accident" value="0"> -->
                                <input type="checkbox" class="licenseBox" name="accident" id="accident" value="0" onclick="setClickAccident();">
                                <label class="licenseText">Accident</label>
                                <select name="accidentState" id="accidentState" class="stateLicense" disabled>
                                    <option value=""></option>
                                    <option value="AL">AL</option>
                                    <option value="AK">AK</option>
                                    <option value="AZ">AZ</option>
                                    <option value="AR">AR</option>
                                    <option value="CA">CA</option>
                                    <option value="CO">CO</option>
                                    <option value="CT">CT</option>
                                    <option value="DE">DE</option>
                                    <option value="FL">FL</option>
                                    <option value="GA">GA</option>
                                    <option value="HI">HI</option>
                                    <option value="ID">ID</option>
                                    <option value="IL">IL</option>
                                    <option value="IN">IN</option>
                                    <option value="IA">IA</option>
                                    <option value="KS">KS</option>
                                    <option value="KY">KY</option>
                                    <option value="LA">LA</option>
                                    <option value="ME">ME</option>
                                    <option value="MD">MD</option>
                                    <option value="MA">MA</option>
                                    <option value="MI">MI</option>
                                    <option value="MN">MN</option>
                                    <option value="MS">MS</option>
                                    <option value="MO">MO</option>
                                    <option value="MT">MT</option>
                                    <option value="NE">NE</option>
                                    <option value="NV">NV</option>
                                    <option value="NH">NH</option>
                                    <option value="NJ">NJ</option>
                                    <option value="NM">NM</option>
                                    <option value="NY">NY</option>
                                    <option value="NC">NC</option>
                                    <option value="ND">ND</option>
                                    <option value="OH">OH</option>
                                    <option value="OK">OK</option>
                                    <option value="OR">OR</option>
                                    <option value="PA">OA</option>
                                    <option value="RI">RI</option>
                                    <option value="SC">SC</option>
                                    <option value="SD">SD</option>
                                    <option value="TN">TN</option>
                                    <option value="TX">TX</option>
                                    <option value="UT">TY</option>
                                    <option value="VT">VT</option>
                                    <option value="VA">VA</option>
                                    <option value="WA">WA</option>
                                    <option value="WV">WV</option>
                                    <option value="WI">WI</option>
                                    <option value="WY">WY</option>
                                </select>
                                <br>
                                <br><br><br>
                            </div>
                            <div class="rightright slide">
                                <h2>DOCUMENTS</H2>
                                <span class="requiredSign">* </span><label class="resume">Resume:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                <!-- <input type="file" name="resume" class="resumeBtn" accept="file_extension" required> -->
                                <input type="file" name="resume" class="resumeBtn" accept="file_extension" >
                                <br><br>
                                <label class="coverLetter">Cover Letter:</label>
                                <input type="file" name="coverLetter" class="cvBtn" accept="file_extension">
                                <br><br><br>
                                <h2>SOURCE</h2>
                                <span class="requiredSign">* </span><label class="leadSource">Source of Lead:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                <!-- <input type="text" class="lead" name="sourceOfLead" required> -->
                                <input type="text" class="lead" name="sourceOfLead" >
                                <br><br><br>
                                <script type="text/javascript">
                                function yesnoCheck2() {
                                    if (document.getElementById('none').checked) {
                                        document.getElementById('ifYesNominator').style.display = 'none';
                                    }
                                    else document.getElementById('ifYesNominator').style.display = 'block';
                                }
                                </script>
                                <table width="85%">
                                    <tr>
                                        <td width="70%">
                                            <span class="requiredSign">* </span><label>Nominator:</label><span class="requiredFieldError" style="display: none;">Required Field</span>
                                        </td>
                                        <td width="50%">
                                            <span class = "requiredSign">No</span><input type="radio" onclick="javascript:yesnoCheck2();" name="nominator" value="none" id="none"> 
                                            <span class = "requiredSign">Yes</span><input type="radio" onclick="javascript:yesnoCheck2();" name="nominator" value="yes" id="yes"><br>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <table width="84%" >
                                    <td>
                                        <div id="ifYesNominator" style="display:none">
                                            If Yes:<br>
                                            First Name: <input type='text' id='nomfirstName' name='nomfirstName'><br>
                                            Last Name:<input type='text'   id='nomlastName' name='nomlastName'>
                                            Writing#:<input type='text'   id='writingNo' name='writingNo'>
                                        </div>
                                    </td>
                                </table>
                                <br><br>
                                <h2>APPLIED FOR</h2>
                                <span class="requiredSign">* </span><label>Assigned District:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                <!-- <input type="text" class="assDist" name="district" required> -->
                                <input type="text" class="assDist" name="district" >
                                <br><br><br>
                                <label class="lblProcess">Position:</label>
                                <select name="position" class="positionApplied">
                                    <option value="no">Choose One</option>
                                    <option value="districtManager">District Manager</option>
                                    <option value="brokerConsultant">Broker Consultant</option>
                                    <option value="internBusDev">Intern - Business Development</option>
                                    <option value="internHR">Intern - Human Resources</option>
                                    <option value="internWeb">Intern - Web Development</option>
                                    <option value="internGraphic">Intern - Graphic Design</option>
                                    <option value="internPRMarket">Intern - PR & Marketing</option>
                                    <option value="internSales">Intern - Sales</option>
                                </select>
                                <br><br>
                            </div>
                            <div class="page4 slide">
                                <h2>PROCESS LEVEL</h2>
                                <span class="requiredSign">* </span><label class="lblProcess">Process Level: </label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                <select name="process" id="process" class="processLevel" onchange="changeProc();">
                                    <option value="1stInterview">1st Interview</option>
                                    <option value="2ndInterview">2nd Interview</option>
                                    <option value="disqualified">Disqualified</option>
                                </select>
                                <br><br>
                                <div id="reason_disqualified" hidden>
                                    <label>If Disqualified, State Reason:</label>
                                    <input type="text" class="disqualifyReason formName" name="disqualifyReason" id="disqualifyReason" placeholder="Reason for Disqualification" ><br><br><BR>
                                </div>
                                <div id="interview_one">
                                    <h2>1ST INTERVIEW</h2>
                                    <label>Interviewer Name:</label>
                                    <input type="text" class="interviewerName formName" name="interviewerName1" placeholder="">
                                    <br><br>
                                    <label class="lblInterviewTime">Interview Date/Time:</label>
                                    <div class="interviewDateTime">
                                        <input type="date" class="interviewDate" name="interviewDate1">
                                        <input type="time" class="interviewTime" name="interviewTime1">
                                    </div>
                                    <br><br>
                                    <label class="lblInterviewGrade">Interview Grade:</label>
                                    <select class="interviewGrade" name="grade1">
                                        <option value="">Choose One</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                    <br><br><br>
                                </div>
                                <div id="interview_two" hidden>
                                    <h2>2ND INTERVIEW</h2>
                                    <label>Interviewer Name:</label>
                                    <input type="text" class="interviewerName formName" name="interviewerName2" placeholder="">
                                    <br><br>
                                    <label class="lblInterviewTime">Interview Date/Time:</label>
                                    <div class="interviewDateTime">
                                        <input type="date" class="interviewDate" name="interviewDate2">
                                        <input type="time" class="interviewTime" name="interviewTime2">
                                    </div>
                                    <br><br>
                                    <label class="lblInterviewGrade">Interview Grade:</label>
                                    <select class="interviewGrade" name="grade2">
                                        <option value="">Choose One</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                    <br><br>
                                </div>
                                <div class="submit">
                                    <input type="submit" id="submitBtn" name="submit" value="Review and Submit">
                                </div>
                            </div>
                            <!--<div class="submitBtn">
                                <input type="submit" name="submit" value="Submit">
                                </div>-->
                            <!-- end section -->
                            <!--<form action="#" class="submitBtn">-->
                            <!--<input type="submit" name="submit" value="Submit">-->
                            <!-- end submit button -->
                        </form>
                        <!--</form> -->
                    </div>
                    <!-- end body -->
                </div>
                <!-- end container -->
            </div>
            <!-- end fullpage -->
        </div>
        <script src="js/animsition.js"></script>
        <script src="js/gu-trans.js"></script>
        <script src="js/classie.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#fullpage').fullpage({
                    sectionsColor: ['#f2f2f2', '#4BBFC3', '#7BAABE', 'whitesmoke', '#000'],
                });
                changeProc();
            });
        </script>
        <script>
            var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
                showLeftPush = document.getElementById( 'showLeftPush' ),
                body = document.body;
            showLeft.onclick = function() {
                classie.toggle( this, 'active' );
                classie.toggle( menuLeft, 'cbp-spmenu-open' );
                disableOther( 'showLeft' );
            };
            function disableOther( button ) {
                if( button !== 'showLeft' ) {
                    classie.toggle( showLeft, 'disabled' );
                }
            }
            
            none.onclick = function() {
                document.getElementById('none').checked = true;
                check2();   
            }
            yes.onclick = function() {
                document.getElementById('yes').checked = true;
                check2();
            }
            
            function check2() {
                var none = document.getElementById('none');
                var yes = document.getElementById('yes');
            
                if (none.checked) {
                    document.getElementById('nomfirstName').disabled = true;
                    document.getElementById('nomlastName').disabled = true;
                    document.getElementById('writingNo').disabled = true;
                    document.getElementById('nomfirstName').value = "Empty";
                    document.getElementById('nomlastName').value = "Empty";
                    document.getElementById('writingNo').value = "Empty";
                } 
                else{
                    document.getElementById('nomfirstName').disabled = false;
                    document.getElementById('nomlastName').disabled = false;
                    document.getElementById('writingNo').disabled = false;                  
                }
                    
        </script>
        // <script type="text/javascript">
        //     $("#submitBtn").on('click', function(e){
        //         var ref = $("form").find("[required]");
        //         var missing = false;
        //         $(ref).each(function(){
        //             if ( $(this).val() == '')
        //             {   
        //                 missing = true;
        //                 $(this).focus();
        //                 e.preventDefault();
        //             }
        //         });
        //         if (missing){
        //                 alert( "Please, fill all the required fields.");
        //                 var reqMsgs = document.getElementsByClassName('requiredFieldMessage');
        //                 for (var i = reqMsgs.length - 1; i >= 0; i--) {
        //                     reqMsgs[i].style.display = "inline";
        //                     reqMsgs[i].style.color = "#ffffff";
        //                     reqMsgs[i].style.fontSize = "50%";
        //                     reqMsgs[i].style.marginLeft = "-6%";
        //                 };
        //             }
        //     })
        // </script>
        <script type="text/javascript">
            diploma.onclick = function() {
                check();    
            }
            ged.onclick = function() {
                document.getElementById('diploma').checked = false;
                check();
            }
            
            function check() {
                var check = document.getElementById('diploma');
            
                if (check.checked) {
                    document.getElementById('highschool').disabled = false;
                    document.getElementById('gradYear').disabled = false;
                    document.getElementById('ged').checked = false;
                } else {
                    document.getElementById('highschool').disabled = true;
                    document.getElementById('highschool').value = "";
                    document.getElementById('gradYear').disabled = true;
                    document.getElementById('gradYear').value = "";
                }
            }
            
            body.onclick = function() { changeProc(); }
            // checking Process Levels: 1st, 2nd, disqualified
            function changeProc() {
                var process = document.getElementById('process');
                var level = process.options[process.selectedIndex].value;
                
                if (level == 'disqualified') { 
                    document.getElementById('reason_disqualified').hidden = false;
                    document.getElementById('interview_one').hidden = true;
                    document.getElementById('interview_two').hidden = true;
                    
                } else if (level == '1stInterview') {
                    document.getElementById('reason_disqualified').hidden = true;
                    document.getElementById('disqualifyReason').value = "";
                    document.getElementById('interview_one').hidden = false;
                    document.getElementById('interview_two').hidden = true;
                } else {
                    document.getElementById('reason_disqualified').hidden = true;
                    document.getElementById('disqualifyReason').value = "";
                    document.getElementById('interview_one').hidden = false;
                    document.getElementById('interview_two').hidden = false;
                }
            } 
            // License and State residency checkbox and select list  
            function setClickPC() {
                var check = document.getElementById('PC');

                if (check.checked) {
                    document.getElementById('PCState').disabled = false;
                } else {
                    document.getElementById('PCState').disabled = true;
                    document.getElementById('PCState').value = "";
                }
            }
            // License and State residency checkbox and select list  
            function setClickSeries() {
                var check = document.getElementById('series12');

                if (check.checked) {
                    document.getElementById('series12State').disabled = false;
                } else {
                    document.getElementById('series12State').disabled = true;
                    document.getElementById('series12State').value = "";
                }
            }
            // License and State residency checkbox and select list  
            function setClickHealth() {
                var check = document.getElementById('health');

                if (check.checked) {
                    document.getElementById('healthState').disabled = false;
                } else {
                    document.getElementById('healthState').disabled = true;
                    document.getElementById('healthState').value = "";
                }
            }
            // License and State residency checkbox and select list  
            function setClickLife() {
                var check = document.getElementById('life');

                if (check.checked) {
                    document.getElementById('lifeState').disabled = false;
                } else {
                    document.getElementById('lifeState').disabled = true;
                    document.getElementById('lifeState').value = "";
                }
            }
            // License and State residency checkbox and select list  
            function setClickAccident() {
                var check = document.getElementById('accident');

                if (check.checked) {
                    document.getElementById('accidentState').disabled = false;
                } else {
                    document.getElementById('accidentState').disabled = true;
                    document.getElementById('accidentState').value = "";
                }
            }
            
        </script>
    </body>
</html>