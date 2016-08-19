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
                        <form action="" id="rec_form" enctype="multipart/form-data"  method="post">
                            <div class="left slide">
                                <!-- <form class="leftForm"> -->
                                <h2>PERSONAL INFORMATION</h2>
                                        <div width="12%">
                                            <span class="requiredSign">* </span><label>First Name:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                            <input type="text" name="firstName" class="createUserInputField" >
                                        </div>
                                        <div  width="12%" style="margin-top: 2%;">
                                            <span class="requiredSign">* Last name:</span><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                            <!-- <input type="text" name="lastName" class="ln formName" required> -->
                                            <input type="text" name="lastName" class="createUserInputField" >
                                        </div>
                                        <div  width="12%" style="margin-top: 4.5%;">
                                            <span class="requiredSign">* Position:</span><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                            <!-- <input type="text" name="lastName" class="ln formName" required> -->
                                            <input type="text" name="position" class="createUserInputField" >
                                        </div>
                                        <div  width="12%" style="margin-top: 4.5%;">
                                            <span class="requiredSign">* Gender:</span><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                            <!-- <input type="text" name="lastName" class="ln formName" required> -->
                                            <input style="margin-left: 31.6%;" type="radio" onclick="javascript:yesnoCheck();" name="gender" value="Male" id="male">Male</input>
                                            <input style="margin-left: 10px;" type="radio" onclick="javascript:yesnoCheck();" name="gender" value="Female" id="ged">Female</input>
                                        </div>
                                <br><br>
                                <h2>USER INFORMATION</h2>
                                <div  width="12%" style="margin-top: 2%;">
                                    <span class="requiredSign">* </span><label>Username:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                    <!-- <input type="text" name="streetAddress" class="s1 formName" required> -->
                                    <input type="text" name="username" class="createUserInputField" >
                                </div>
                                <div  width="12%" style="margin-top: 2%;">
                                    <span class="requiredSign">* </span><label >Password:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                    <!-- <input type="text" name="city" class="city formName" required> -->
                                    <input type="password" name="password" style="background-color: #c1ebed;" class="createUserInputField" >
                                </div>
                                <div  width="12%" style="margin-top: 2%;">
                                    <span class="requiredSign">* </span><label >Access Level:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                    <!-- <select name="recState" class="state" required> -->
                                    <select id="userAL" name="userAccessLevel" style="margin-left:1.6%;" class="accessLevel" onChange="changedAL();">
                                        <option value="5">Intern</option>
                                        <option value="4">Limited District</option>
                                        <option value="3">District</option>
                                        <option value="2">Regional</option>
                                        <option value="1">Full Access</option>
                                    </select>
                                </div>
                                <div  width="12%" style="margin-top: 2%; display:none;" id="districtDiv" >
                                    <label style="margin-left:1.2%">District:</label><span class="requiredFieldMessage" style="display: none;">Required Field</span>
                                    <!-- <select name="recState" class="state" required> -->
                                    <select id="districtDropDown" name="userAccessLevel" style="margin-left:1.6%;" class="districtList" >
                                        <option value="1">#1</option>
                                        <option value="2">#2</option>
                                        <option value="3">#3</option>
                                    </select>
                                </div>
                                <div class="submit" style="margin-top: 6%;">
                                    <input type="submit" id="submitBtn" name="submit" value="Create User">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
            
                    
        </script>
        <script type="text/javascript">
            function changedAL(){
                if(document.getElementById("userAL").value == 3){
                    document.getElementById("districtDiv").style['display'] = "block";
                }
                else {
                    document.getElementById("districtDiv").style['display'] = "none";
                }
            }
        </script>
    </body>
</html>