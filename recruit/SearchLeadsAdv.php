<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>SearchAdv</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="se.css">
    <script type="text/javascript">var hide_awf_Form = true;</script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $('table.revTable tr td#bcard').click(function(){
            //alert($(this).closest('tr').find('td:first').text());
            var varid = $(this).closest('tr').find('td:first').text();
            //alert(varid); 
           showUser(varid);
            //document.getElementById('lightbox1').style.display='inline';
            });
        });
        function showUser(varid)
        {
            //alert(varid); 
            if (varid == "") 
            {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } 
            else 
            { 
                if (window.XMLHttpRequest) 
                {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } 
                else 
                {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
                    {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET","getuser.php?q="+varid,true);
                xmlhttp.send();
            }
        }
 
    </script>

</head>
<body class="cbp-spmenu-push">
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="nav-left">
                    <li><a href="#"><img class="ham" id="showLeft"src="images/ham.png" alt=""></a></li>
                    <li><a href="#"><img class="face" src="images/face.png" alt=""></a></li>
                    <li><a href="#"><h1>Asc Name</h1></a></li>
                    <li><a href="#"><h1>Position</h1></a></li>
                    <li><a href="#"><h1>Writing #</h1></a></li>
                    <!-- codrop nav -->
                    
                    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                        <h3>Recruitment</h3>
                        <a href="createRec.php">Create a Lead Profile</a>
                        <a href="#">Search Recruit Leads</a>
                        <a href="ReviewLeads.php" class="active">View Recruit Leads</a>
                        <a href="#">Menu Item</a>
                    </nav>
                    <!-- end codrop -->
                    <!-- end .nav-left -->
                </div>
                <div class="nav-right">
                    <li><a href="../home.php"><img class="nav-logo" src="../images/icon-home.png" alt=""></a></li>
                    <li><a href="#"><img class="nav-logo" src="../images/icon-cal.png" alt=""></a></li>
                    <li><a href="dashRec.php" class="active"><img class="nav-logo" src="../images/icon-rec.png" alt=""></a></li>
                    <li><a href="#"><img class="nav-logo" src="../images/icon-hr.png" alt=""></a></li>
                    <li><a href="#"><img class="nav-logo" src="../images/icon-leads.png" alt=""></a></li>
                    <li><a href="#"><img class="nav-logo" src="../images/icon-sales.png" alt=""></a></li>
                    <li><a href="#"><img class="nav-logo" src="../images/icon-accounts-temp.png" alt=""></a></li>
                    <li><a href="#"><img class="logo-last nav-logo " src="../images/logo.png" alt=""></a></li>
                    <!-- end .nav-right -->
                </div>
                <!-- end .nav -->
            </div>
        <!-- end header -->
        </div>

        <div class="body revBody">
            <!--begin buttons-->
            <header>
            <h1>More Results : <?php echo $_POST[searchOption] ?></h1>
            </header>

        

            <!--end buttons>
        <!-- end container -->

            <?php
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            //$dbname = "rec";
            $dbname = "recruiter2";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            } 
            $fromvar = 'rec r';
            echo "<br>";
            /*
            echo $_POST['streetAddress'];
            echo "hi";
            echo $_POST['firstName'];
            echo $_POST['recState'];

            echo $_POST['phone'];
            echo $_POST['lang'];
            echo $_POST['lang2'];
            echo $_POST['proficiency2'];
            echo $_POST['proficiency3'];
            
            echo $_POST['ged'];
            
            echo $_POST['diploma'];
            echo $_POST['highschool'];
            echo $_POST['gradYear'];
            echo $_POST['university'];
            echo $_POST['degree'];
            echo $_POST['gradYear'];
            echo $_POST['title'];
            echo $_POST['PCState'];
            echo $_POST['series12'];

            echo $_POST['series12'];
            echo $_POST['series12State'];
            echo $_POST['licenseBox'];
            echo $_POST['healthState'];
            echo $_POST['life'];
            echo $_POST['lifeState'];
            echo $_POST['accident'];
            echo $_POST['accidentState'];
            echo $_POST['sourceOfLead'];
            echo $_POST['noNominator'];
            echo $_POST['abc'];
            echo $_POST['yesNominator'];
            echo $_POST['district'];
            echo $_POST['position'];
            echo $_POST['process'];
            echo $_POST['disqualifyReason'];
            echo $_POST['interviewerName1'];
            echo $_POST['interviewDate1'];
            echo $_POST['interviewTime1'];
            echo $_POST['grade1'];
            echo $_POST['interviewDate2'];
            echo $_POST['grade2'];
            */

            $selectvar = $_POST['streetAddress']; 

            $wherevar = " ";
            if(!empty($_POST[firstName1]))
            {
                $wherevar = "r.firstName LIKE '%{$_POST[firstName1]}%'";
                //  $fromvar = $fromvar1;   
            }

            if(!empty($_POST[middleInitial]))
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }

                $wherevar = $wherevar . " r.middleInitial LIKE '%{$_POST[middleInitial]}%'";
                //  $fromvar = $fromvar1;
         
            }

            if(!empty($_POST[lastName1]))
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }
                $wherevar = $wherevar . " r.lastName LIKE '%{$_POST[lastName1]}%'";
                //  $fromvar = $fromvar1;   
            }

            if(!empty($_POST[streetAddress1]))
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }
                $wherevar = $wherevar . " r.streetAddress LIKE '%{$_POST[streetAddress1]}%'";
                //  $fromvar = $fromvar1;   
            }

            if(!empty($_POST[streetAddress2]))
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }
                $wherevar = $wherevar . " r.streetAddress2 LIKE '%{$_POST[streetAddress2]}%'";
                //  $fromvar = $fromvar1;   
            }

            if(!empty($_POST[city]))
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }
                $wherevar = $wherevar . " r.city LIKE '%{$_POST[city]}%'";
                //  $fromvar = $fromvar1;   
            }

            if(!empty($_POST[zip]))
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }
                $wherevar = $wherevar . " r.zip LIKE '%{$_POST[zip]}%'";
                //  $fromvar = $fromvar1;   
            }

            if(isset($_POST[recState]))
            {
                if($_POST[recState] != 'None') 
                {
                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }
                    $wherevar = $wherevar . " r.state LIKE '%{$_POST[recState]}%'";
                    //  $fromvar = $fromvar1;   

                }   
            }

            if(!empty($_POST[phone]))
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }
                $wherevar = $wherevar . " r.phone LIKE '%{$_POST[phone]}%'";
                //  $fromvar = $fromvar1;   
            }

            if(!empty($_POST[phone2]))
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }
                $wherevar = $wherevar . " r.secondPhone LIKE '%{$_POST[phone2]}%'";
                //    $fromvar = $fromvar1; 
            }

            if(!empty($_POST[email]))
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }
                $wherevar = $wherevar . " r.email LIKE '%{$_POST[email]}%'";
                //    $fromvar = $fromvar1; 
            }

            if(!empty($_POST[email2]))
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }
                $wherevar = $wherevar . " r.secondEmail LIKE '%{$_POST[email2]}%'";
                //    $fromvar = $fromvar1; 
            }

            if(!empty($_POST[lang]))
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }
                $wherevar = $wherevar . " r.firstLang LIKE '%{$_POST[lang]}%'";
                //    $fromvar = $fromvar1; 
            }


            if ($_POST[ged] == 1)
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }
                $wherevar = $wherevar . " r.ged =  '$_POST[ged]'";
                //$fromvar = $fromvar1;

            }

            /*if(!empty($_POST[sourceOfLead]))
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }
                $wherevar = $wherevar . " r.sourceOfLead LIKE '%{$_POST[sourceOfLead]}%'";
                //  $fromvar = $fromvar1;   
            }

            */

            if(!empty($_POST[process]))
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }
                $wherevar = $wherevar . " r.process = '{$_POST[process]}'";
                //  $fromvar = $fromvar1;   
            }

            
            if(!empty($_POST[lang2]))
            {
                
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }

                $wherevar = $wherevar . " la.languageName LIKE '%{$_POST[lang2]}%'
                                           and priority = 2";

                
                if(isset($_POST[proficiency2]))
                {
                    if($_POST[proficiency2] != 'None') 
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }

                        $wherevar = $wherevar . " rla.proficiency LIKE '%{$_POST[proficiency2]}%'";

                    }   
                }

                $fromvar = $fromvar . 
                           " inner join reclanguage rla
                            on r.recID = rla.recID
                            inner join language la
                            on rla.langID = la.languageID" ;

            }


            if(!empty($_POST[lang3]))
            {
                
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }

                $wherevar = $wherevar . " la.languageName LIKE '%{$_POST[lang3]}%'
                                           and priority = 3";

                
                if(isset($_POST[proficiency3]))
                {
                    if($_POST[proficiency3] != 'None') 
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }

                        $wherevar = $wherevar . " rla.proficiency LIKE '%{$_POST[proficiency3]}%'";

                    }   
                }

                $fromvar = $fromvar . 
                           " inner join reclanguage rla
                            on r.recID = rla.recID
                            inner join language la
                            on rla.langID = la.languageID" ;

            }


            if ($_POST[diploma] == 1)
            {
                
                if(!empty($_POST[highschool]))
                {
                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }
                    $wherevar = $wherevar . " hs.hsName LIKE '%{$_POST[highschool]}%'";
            
                }   
                
                if (!empty($_POST[hsgradYear]))
                {
                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }
                    $wherevar = $wherevar . " rhs.gradYear LIKE '%{$_POST[hsgradYear]}%'";

                }

                $fromvar = $fromvar . 
                    " inner join recHighschool rhs
                    on r.recID = rhs.recID
                    inner join highschool hs
                    on rhs.hsID = hs.hsID" ;
            }


            if((!empty($_POST[university])) || (!empty($_POST[degree])) || (!empty($_POST[hegradYear])))
            {
                
                
                if(!empty($_POST[university]))
                {
                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }
                    $wherevar = $wherevar . " rhe.university LIKE '%{$_POST[university]}%'";
                }

                if(!empty($_POST[degree]))
                {
                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }
                    $wherevar = $wherevar . " he.degree LIKE '%{$_POST[degree]}%'";
                }

                if(!empty($_POST[hegradYear]))
                {
                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }
                    $wherevar = $wherevar . " rhe.gradYear LIKE '%{$_POST[hegradYear]}%'";
                }

                $fromvar = $fromvar . 
                           " inner join recHE rhe
                            on r.recID = rhe.recID
                            inner join higherEducation he
                            on he.heID = rhe.heID" ;

            }

            $flag_exp1 = 0;

            if((!empty($_POST[company])) || (!empty($_POST[title])) || (!empty($_POST[startDate])) || (!empty($_POST[endDate])))
            {
                 
                if ($wherevar != " ")
                {
                    if ($flag_exp1 == 1)
                        $wherevar = $wherevar . " or ( " ;
                    else 
                        $wherevar = $wherevar . " and (( " ;
                }
                else
                    $wherevar = $wherevar . " (( " ;
               
                
                if(!empty($_POST[company]))
                {
                    if ($wherevar != " ")
                    {
                        if ($flag_exp1 == 1)
                            $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " rex.company LIKE '%{$_POST[company]}%'
                                              and rex.priority = 1 ";

                    $flag_exp1 = 1;
                }

                if(!empty($_POST[title]))
                {
                    if ($wherevar != " ")
                    {
                        if ($flag_exp1 == 1)
                            $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " we.title LIKE '%{$_POST[title]}%'
                                              and rex.priority = 1 ";

                    $flag_exp1 = 1;
                }

                if(!empty($_POST[startDate]))
                {
                    if ($wherevar != " ")
                    {
                        if ($flag_exp1 == 1)
                            $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " rex.startDate LIKE '%{$_POST[startDate]}%'
                                              and rex.priority = 1 ";

                    $flag_exp1 = 1;
                }


                if(!empty($_POST[endDate]))
                {
                    if ($wherevar != " ")
                    {
                        if ($flag_exp1 == 1)
                            $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " rex.endDate LIKE '%{$_POST[endDate]}%'
                                               and rex.priority = 1  ";

                    $flag_exp1 = 1;
                }

                $wherevar = $wherevar . ") " ;

                $fromvar = $fromvar . 
                            " inner join recExperience rex
                            on r.recID = rex.recID
                            inner join workExperience we
                            on we.experienceID = rex.experienceID" ;

            }

            $flag_exp2 = 0;

            if((!empty($_POST[company2])) || (!empty($_POST[title2])) || (!empty($_POST[startDate2])) || (!empty($_POST[endDate2])))
            {
                
                if ($wherevar != " ")
                {
                    if ($flag_exp1 == 1)
                        $wherevar = $wherevar . " or ( " ;
                    else 
                        $wherevar = $wherevar . " and ( " ;
                }
                else
                    $wherevar = $wherevar . " ( " ;

                
                if(!empty($_POST[company2]))
                {
                
                    if ($wherevar != " ")
                    {
                        if ($flag_exp2 == 1)
                            $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " rex.company LIKE '%{$_POST[company2]}%'
                                              and rex.priority = 2 ";
                    $flag_exp2 = 1;
                }

                if(!empty($_POST[title2]))
                {
                    if ($wherevar != " ")
                    {
                        if ($flag_exp2 == 1)
                            $wherevar = $wherevar . " and " ;
                    }
                    $wherevar = $wherevar . " we.title LIKE '%{$_POST[title2]}%'
                                              and rex.priority = 2 ";
                    $flag_exp2 = 1;

                }

                if(!empty($_POST[startDate2]))
                {
                    if ($wherevar != " ")
                    {
                        if ($flag_exp2 == 1)
                            $wherevar = $wherevar . " and " ;
                    }
                    $wherevar = $wherevar . " rex.startDate LIKE '%{$_POST[startDate2]}%'
                                              and rex.priority = 2 ";
                    $flag_exp2 = 1;

                }


                if(!empty($_POST[endDate2]))
                {
                    if ($wherevar != " ")
                    {
                        if ($flag_exp2 == 1)
                            $wherevar = $wherevar . " and " ;
                    }
                    $wherevar = $wherevar . " rex.endDate LIKE '%{$_POST[endDate2]}%'
                                               and rex.priority = 2  ";
                    $flag_exp2 = 1;

                }

                $wherevar = $wherevar . ") " ;

                $fromvar = $fromvar . 
                            " inner join recExperience rex
                            on r.recID = rex.recID
                            inner join workExperience we
                            on we.experienceID = rex.experienceID" ;



            }

            if ($flag_exp2 == 0 && $flag_exp1 == 1)
            {
                $wherevar = $wherevar . ")" ;   
            }

            //echo $_POST[PC];
            $flag_license = 0;

            if((isset($_POST[PC])) || (isset($_POST[series12])) || (isset($_POST[health]))
                || (isset($_POST[life])) || (isset($_POST[accident])))
            {
                //echo "set";
                
                if(isset($_POST[PC]))
                {
                    if ($wherevar != " ")
                    {
                        if ($flag_license == 1)
                            $wherevar = $wherevar . " or " ;
                        else 
                            $wherevar = $wherevar . " and (" ;
                    }
                    else
                        $wherevar = $wherevar . " (" ;


                    $wherevar = $wherevar . "( li.licenseName LIKE '%{$_POST[PC]}%'";
                    
                    if($_POST[PCState] != 'None') 
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }

                        $wherevar = $wherevar . " rli.state LIKE '%{$_POST[PCState]}%'";
                    }  

                    $wherevar = $wherevar . " )" ;

                    $flag_license = 1;

                }

                if(isset($_POST[series12]))
                {
                    
                    if ($wherevar != " ")
                    {
                        if ($flag_license == 1)
                            $wherevar = $wherevar . " or " ;
                        else 
                            $wherevar = $wherevar . " and (" ;
                    }
                    else
                        $wherevar = $wherevar . " (" ;

                    $wherevar = $wherevar . "( li.licenseName LIKE '%{$_POST[series12]}%'";
                    
                    if($_POST[series12State] != 'None') 
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }

                        $wherevar = $wherevar . " rli.state LIKE '%{$_POST[series12State]}%'";
                    } 

                    $wherevar = $wherevar . " )" ; 

                    $flag_license = 1;

                }

                if(isset($_POST[health]))
                {
                    
                    if ($wherevar != " ")
                    {
                        if ($flag_license == 1)
                            $wherevar = $wherevar . " or " ;
                        else 
                            $wherevar = $wherevar . " and (" ;    
                    }
                    else
                        $wherevar = $wherevar . " (" ;

                    $wherevar = $wherevar . "( li.licenseName LIKE '%{$_POST[health]}%'";
                    
                    if($_POST[healthState] != 'None') 
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }

                        $wherevar = $wherevar . " rli.state LIKE '%{$_POST[healthState]}%'";
                    }  

                    $wherevar = $wherevar . " )" ;

                    $flag_license = 1;

                }

                if(isset($_POST[life]))
                {
                    
                    if ($wherevar != " ")
                    {
                        if ($flag_license == 1)
                            $wherevar = $wherevar . " or " ;
                        else 
                            $wherevar = $wherevar . " and (" ;
                    }
                    else
                        $wherevar = $wherevar . " (" ;

                    $wherevar = $wherevar . "( li.licenseName LIKE '%{$_POST[life]}%'";
                    
                    if($_POST[lifeState] != 'None') 
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }

                        $wherevar = $wherevar . " rli.state LIKE '%{$_POST[lifeState]}%'";
                    }  

                    $wherevar = $wherevar . " )" ;

                    $flag_license = 1;

                }

                if(isset($_POST[accident]))
                {
                    
                    if ($wherevar != " ")
                    {
                        if ($flag_license == 1)
                            $wherevar = $wherevar . " or " ;
                        else 
                            $wherevar = $wherevar . " and (" ;
                    }
                    else
                        $wherevar = $wherevar . " (" ;

                    $wherevar = $wherevar . "( li.licenseName LIKE '%{$_POST[accident]}%'";
                    
                    if($_POST[accidentState] != 'None') 
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }

                        $wherevar = $wherevar . " rli.state LIKE '%{$_POST[accidentState]}%'";
                    }  

                    $wherevar = $wherevar . " )" ;

                    $flag_license = 1;

                }

                $wherevar = $wherevar . ") " ;
                    

                $fromvar = $fromvar . 
                    " inner join recLicense rli
                    on r.recID = rli.recID
                    inner join license li
                    on li.licenseID = rli.licenseID" ; 

                
            }
            
            //echo "no";
            //echo $_POST[noNominator];

            //echo $_POST[yesNominator];


            if(!empty($_POST[sourceOfLead]))
            {

                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }

                $wherevar = $wherevar . " r.sourceOfLeadID =
                            (select sl.sourceOfLeadID
                             from sourceOfLead sl
                             where sl.sourceOfLead LIKE '%{$_POST[sourceOfLead]}%')";


            }

            /*

            if(($_POST[noNominator]) == 1 || ($_POST[abc]) == 1  || ($_POST[yesNominator]) == 0)
            {
                if(($_POST[noNominator]) == 1 && ($_POST[abc]) == 0 && ($_POST[yesNominator]) == 0)
                {

                    echo "yes";

                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " r.noNominator = 1 ";

                    $fromvar =  $fromvar . 
                                " inner join nominator no
                                on r.nominatorID = no.nominatorID
                                " ;


                }
                else if(($_POST[noNominator]) == 1 && ($_POST[abc]) == 1 && ($_POST[yesNominator]) == 0)
                {

                    echo "yes";

                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " r.noNominator = 1 and no.abc = 0";

                    $fromvar =  $fromvar . 
                                " inner join nominator no
                                on r.nominatorID = no.nominatorID
                                " ;


                }
                else if(($_POST[yesNominator]) == 1 && ($_POST[noNominator]) == 0)
                {

                    echo "yes";

                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " r.noNominator = 0 ";

                    if(!empty($_POST[nomfirstName]))
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }
                        $wherevar = $wherevar . " no.firstName LIKE '%{$_POST[nomfirstName]}%'";
                
                    } 

                    if(!empty($_POST[nomlastName]))
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }
                        $wherevar = $wherevar . " no.lastName LIKE '%{$_POST[nomlastName]}%'";
                
                    } 

                    if(!empty($_POST[nomwritingNo]))
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }
                        $wherevar = $wherevar . " no.writingNo LIKE '%{$_POST[nomwritingNo]}%'";
                
                    } 

                    
                    if(($_POST[abc]) == 1)
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }

                        $wherevar = $wherevar . " no.abc = 1 ";

                        $flag_abc = 1;
                    }
                          
                    $fromvar =  $fromvar . 
                                " inner join nominator no
                                on r.nominatorID = no.nominatorID
                                " ;

                }

                else if(($_POST[abc]) == 1 && ($_POST[yesNominator]) == 0 && ($_POST[noNominator]) == 0)
                {
                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " r.noNominator = 1 and no.abc = 0 ";

             
                    $fromvar =  $fromvar . 
                                " inner join nominator no
                                on r.nominatorID = no.nominatorID
                                " ;

                }
                else if(($_POST[abc]) == 1 && ($_POST[yesNominator]) == 1 && ($_POST[noNominator]) == 1)
                {
                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " r.noNominator = 1 and no.abc = 0 ";

             
                    $fromvar =  $fromvar . 
                                " inner join nominator no
                                on r.nominatorID = no.nominatorID
                                " ;

                }

            }  
            */
            //echo $_POST['yesNominator'];
        
            if(($_POST[noNominator]) == 1 || ($_POST[yesNominator]) == 1)
            {
                if(($_POST[noNominator]) == 1 && ($_POST[yesNominator]) == 0)
                {

                    // echo "yes";

                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " r.noNominator = 1 ";



                }
                
                else if(($_POST[yesNominator]) == 1 && ($_POST[noNominator]) == 0)
                {

                    // echo "yes";

                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " r.noNominator = 0 ";

                    if(!empty($_POST[nomfirstName]))
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }
                        $wherevar = $wherevar . " no.firstName LIKE '%{$_POST[nomfirstName]}%'";
                
                    } 

                    if(!empty($_POST[nomlastName]))
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }
                        $wherevar = $wherevar . " no.lastName LIKE '%{$_POST[nomlastName]}%'";
                
                    } 

                    if(!empty($_POST[nomwritingNo]))
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }
                        $wherevar = $wherevar . " no.writingNo LIKE '%{$_POST[nomwritingNo]}%'";
                
                    } 
                          
                    $fromvar =  $fromvar . 
                                " inner join nominator no
                                on r.nominatorID = no.nominatorID
                                " ;

                }

                else if(($_POST[yesNominator]) == 0 && ($_POST[noNominator]) == 0)
                {
                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " (r.noNominator = 1 or r.noNominator = 0)";

                    /*
                    $fromvar =  $fromvar . 
                                " inner join nominator no
                                on r.nominatorID = no.nominatorID
                                " ;

                    */

                }
                else if(($_POST[yesNominator]) == 1 && ($_POST[noNominator]) == 1)
                {
                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " (r.noNominator = 1 or r.noNominator = 0)";

                    /*
                    $fromvar =  $fromvar . 
                                " inner join nominator no
                                on r.nominatorID = no.nominatorID
                                " ;
                    */

                }

            }  

            /*

            if(($_POST[noNominator]) == 1 || ($_POST[yesNominator]) == 1)
            {
                if(($_POST[noNominator]) == 1 && ($_POST[yesNominator]) == 0)
                {

                    echo "no";

                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " r.nominatorID is NULL ";



                }
                
                else if(($_POST[yesNominator]) == 1 && ($_POST[noNominator]) == 0)
                {

                    echo "yes";

                    if ($wherevar != " ")
                    {
                        $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " r.nominatorID is NOT NULL ";

                    if(!empty($_POST[nomfirstName]))
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }
                        $wherevar = $wherevar . " no.firstName LIKE '%{$_POST[nomfirstName]}%'";
                
                    } 

                    if(!empty($_POST[nomlastName]))
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }
                        $wherevar = $wherevar . " no.lastName LIKE '%{$_POST[nomlastName]}%'";
                
                    } 

                    if(!empty($_POST[nomwritingNo]))
                    {
                        if ($wherevar != " ")
                        {
                            $wherevar = $wherevar . " and " ;
                        }
                        $wherevar = $wherevar . " no.writingNo LIKE '%{$_POST[nomwritingNo]}%'";
                
                    } 
                          
                    $fromvar =  $fromvar . 
                                " inner join nominator no
                                on r.nominatorID = no.nominatorID
                                " ;

                }

                
            }

            */


            if(!empty($_POST[district]))
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }
                $wherevar = $wherevar . " di.districtName LIKE '%{$_POST[district]}%'";

                $fromvar =  $fromvar . 
                            " inner join district di
                            on r.districtID = di.districtID
                            " ;
                
            } 

            
            if($_POST[position] != 'None') 
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }

                $wherevar = $wherevar . " po.positionName LIKE '%{$_POST[position]}%'";

                $fromvar = $fromvar . 
                            " inner join recPositions rpo
                            on r.recID = rpo.recID
                            inner join positions po
                            on po.positionID = rpo.positionID" ;

            }

            /*
            if($_POST[process] != 'None') 
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }

                $wherevar = $wherevar . " r.processLevelID =
                            (select pr.ProcessLevelID
                             from ProcessLevel pr
                             where pr.LevelName LIKE '%{$_POST[process]}%')";

                //$wherevar = $wherevar . " pl.LevelName LIKE '%{$_POST[process]}%'";

                
                //$fromvar = $fromvar . 
                //           " inner join ProcessLevel pl
                //           on pl.ProcessLevelID = r.processLevelID" ;

                

            }  

            */



            if(!empty($_POST[disqualifyReason])) 
            {
                if ($wherevar != " ")
                {
                    $wherevar = $wherevar . " and " ;
                }

                $wherevar = $wherevar . " r.whyDisqualifyID =
                            (select wd.whyDisqualifyID
                             from whyDisqualify wd
                             where wd.explanation LIKE '%{$_POST[disqualifyReason]}%')
                             and r.disqualified = 1  ";

                //$wherevar = $wherevar . " pl.LevelName LIKE '%{$_POST[process]}%'";

                /*
                $fromvar = $fromvar . 
                           " inner join ProcessLevel pl
                           on pl.ProcessLevelID = r.processLevelID" ;

                */

            }  

            $flag_exp1 = 0;

            if((!empty($_POST[interviewerName1])) || (!empty($_POST[interviewDate1])) || (!empty($_POST[interviewTime1])) || $_POST[grade1] != 'None')
            {
                 
                if ($wherevar != " ")
                {
                    if ($flag_exp1 == 1)
                        $wherevar = $wherevar . " or ( " ;
                    else 
                        $wherevar = $wherevar . " and (( " ;
                }
                else
                    $wherevar = $wherevar . " (( " ;
               
                
                if(!empty($_POST[interviewerName1]))
                {
                    if ($wherevar != " ")
                    {
                        if ($flag_exp1 == 1)
                            $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " ri.interviewerName LIKE '%{$_POST[interviewerName1]}%'
                                              and ri.interviewNo = 1 ";

                    $flag_exp1 = 1;
                }

                if(!empty($_POST[interviewDate1]))
                {
                    if ($wherevar != " ")
                    {
                        if ($flag_exp1 == 1)
                            $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " ri.interviewDate LIKE '%{$_POST[interviewDate1]}%'
                                              and ri.interviewNo = 1 ";

                    $flag_exp1 = 1;
                }

                if(!empty($_POST[interviewTime1]))
                {
                    if ($wherevar != " ")
                    {
                        if ($flag_exp1 == 1)
                            $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " ri.interviewTime LIKE '%{$_POST[interviewTime1]}%'
                                              and ri.interviewNo = 1 ";

                    $flag_exp1 = 1;
                }


                if($_POST[grade1] != 'None')
                {
                    if ($wherevar != " ")
                    {
                        if ($flag_exp1 == 1)
                            $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " ri.grade LIKE '%{$_POST[grade1]}%'
                                               and ri.interviewNo = 1  ";

                    $flag_exp1 = 1;
                }

                $wherevar = $wherevar . ") " ;

                $fromvar =  $fromvar . 
                            " inner join recInterview ri
                            on r.recID = ri.recID
                            " ;

            }

            $flag_exp2 = 0;

            if((!empty($_POST[interviewerName2])) || (!empty($_POST[interviewDate2])) || (!empty($_POST[interviewTime2])) || $_POST[grade2] != 'None')
            {
                
                if ($wherevar != " ")
                {
                    if ($flag_exp1 == 1)
                        $wherevar = $wherevar . " or ( " ;
                    else 
                        $wherevar = $wherevar . " and ( " ;
                }
                else
                    $wherevar = $wherevar . " ( " ;

                
                if(!empty($_POST[interviewerName2]))
                {
                
                    if ($wherevar != " ")
                    {
                        if ($flag_exp2 == 1)
                            $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " ri.interviewerName LIKE '%{$_POST[interviewerName2]}%'
                                              and ri.interviewNo = 2 ";
                    $flag_exp2 = 1;
                }

                if(!empty($_POST[interviewDate2]))
                {
                    if ($wherevar != " ")
                    {
                        if ($flag_exp2 == 1)
                            $wherevar = $wherevar . " and " ;
                    }
                    $wherevar = $wherevar . " ri.interviewDate LIKE '%{$_POST[interviewDate2]}%'
                                              and ri.interviewNo = 2 ";
                    $flag_exp2 = 1;

                }

                if(!empty($_POST[interviewTime2]))
                {
                    if ($wherevar != " ")
                    {
                        if ($flag_exp2 == 1)
                            $wherevar = $wherevar . " and " ;
                    }
                    $wherevar = $wherevar . " ri.interviewTime LIKE '%{$_POST[interviewTime2]}%'
                                              and ri.interviewNo = 2 ";
                    $flag_exp2 = 1;

                }

                if($_POST[grade2] != 'None')
                {
                    if ($wherevar != " ")
                    {
                        if ($flag_exp2 == 1)
                            $wherevar = $wherevar . " and " ;
                    }

                    $wherevar = $wherevar . " ri.grade LIKE '%{$_POST[grade2]}%'
                                               and ri.interviewNo = 2  ";

                    $flag_exp1 = 1;
                }

                $wherevar = $wherevar . ") " ;
                
                if($flag_exp1 != 1) 
                {
                    $fromvar =  $fromvar . 
                                " inner join recInterview ri
                                on r.recID = ri.recID
                                " ;
                }


            }

            if ($flag_exp2 == 0 && $flag_exp1 == 1)
            {
                $wherevar = $wherevar . ")" ;   
            }


                
            /*
            if(isset($_POST[searchOption]))
            {
                //echo "hi";
                $selectvar = $_POST[searchOption];
                switch ($selectvar)
                {
                    case 'firstName' :
                        //echo "FirstName selected";
                        $wherevar = "firstName LIKE '%{$_POST[search]}%'";
                        $fromvar = $fromvar1;
        
                        break;
                    case 'lastName' :
                        //echo "lastName selected";
                        $wherevar = "lastName LIKE '%{$_POST[search]}%'";
                        $fromvar = $fromvar1;
                        break;
                    case 'city' :
                        //echo "city selected";
                        $wherevar = "city LIKE '%{$_POST[search]}%'";
                        $fromvar = $fromvar1;
                        break;
                    case 'zip' :
                        //echo "zip selected";
                        $wherevar = "zip LIKE '%{$_POST[search]}%'";
                        $fromvar = $fromvar1;
                        break;
                    case 'license' :
                        //echo "license selected";
                        $wherevar = "rl.licenseID LIKE '%{$_POST[search]}%'";
                        $fromvar = "rec r
                                    inner join 
                                    recLicense rl
                                    on r.recID = rl.recID
                                    inner join license l
                                    on rl.licenseID = l.licenseID" ;
                        break;
                    case 'email' :
                        //echo "email selected";
                        $wherevar = "email LIKE '%{$_POST[search]}%'";
                        $fromvar = $fromvar1;
                        break;
                    case 'contact' :
                        //echo "contact selected";
                        $wherevar = "phone LIKE '%{$_POST[search]}%'";
                        $fromvar = $fromvar1;
                        break;
                    default:
                        echo "None"; 
                }
            }

            */

            if ($wherevar != " ")
            {
                $sql = "SELECT Distinct r.recID, r.firstName, r.lastName, r.streetAddress, 
                        r.city, r.state, r.zip, r.phone, r.email, r.resume, r.firstLang, r.ged,
                        r.process, r.districtID, r.sourceOfLeadID, r.nominatorID
                        FROM " . $fromvar .
                        " where " . $wherevar;
            }
            else
            {
                $sql = "SELECT Distinct r.recID, r.firstName, r.lastName, r.streetAddress, 
                        r.city, r.state, r.zip, r.phone, r.email, r.resume, r.firstLang, r.ged,
                        r.process, r.districtID, r.sourceOfLeadID, r.nominatorID
                        FROM " . $fromvar ;
                        
            }

            // echo $sql;
            $result = $conn->query($sql);
            if ($result->num_rows > 0) 
            {
            ?>

            <!--table begins-->
            <table border="1" style="width:100%" class="revTable">
                <!--begin header of table-->  
                <tr>
                    <th style="display:none">Id</th>
                    <th>First Name</th>
                    <th>Last Name</th> 
                    <th>City</th>
                    <th>Zip</th>
                    <th>Primary Email</th>
                    <th>Primary Phone</th>
                    <th>Status</th>
                    <th>More Results</th>    
                </tr>
                <!--end header-->

                <?php
    
                // output data of each row
                
                while($row = $result->fetch_assoc()) 
                {
                    /*
                    $sqlproclevel = "SELECT LevelName
                    FROM ProcessLevel 
                    WHERE ProcessLevelID  = " . $row["processLevelID"]; 
                    $resultproclevel = $conn->query($sqlproclevel);    
                    if ($resultproclevel->num_rows > 0)  
                        $rowproc = $resultproclevel->fetch_assoc();
                    else
                        $rowproc["LevelName"] = "No Interview";  
                    */   
                ?>

                <!--begin first row-->
                    <tr>
                        <td style="display:none"><?php echo $row["recID"] ?></td>
                        <td><?php echo $row["firstName"] ?></td>
                        <td><?php echo $row["lastName"] ?></td>
                        <td><?php echo $row["city"] ?></td>
                        <td><?php echo $row["zip"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo $row["phone"] ?></td>
                        <!--<td><?php echo $rowproc["LevelName"] ?></td> -->
                        <td><?php echo $row["process"] ?></td>
                        <td id= "bcard">
                            <a href="#profile">
                            <!-- onclick="document.getElementById('lightbox1').style.display='inline';"> -->
                            <img src="../images/icon-profile-small-teal.png">
                            </button>
                        </td>
                    </tr>
                    <!--end first row-->
                   
                    <!--begin second row
                    <tr>
                        <td>Jane</td>
                        <td>Doe</td>
                        <td>Chino</td>
                        <td>91710</td>
                        <td>janedoe@gmail.com</td>
                        <td>(555)555-5555</td>
                        <td>2nd Interview</td>
                        <td>
                            <a href="#profile" onclick="document.getElementById('lightbox2').style.display='inline';">
                            <img src="../images/icon-profile-small-teal.png">
                            </button>
                        </td>
                    </tr>
                    <!--end second row-->
                <?php
                }
                ?>
            </table>

            <?php
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            
            } 
            else 
            {
                echo "0 results";
            }
            $conn->close();
            ?>

        </div>

        <div id="txtHint"><b>Person info will be listed here...</b></div>

        <!-- LIGHTBOX1 CODE BEGIN 
            <div id="lightbox1" class="lightbox" style="display:none"
                  onclick="document.getElementById('lightbox1').style.display='none';">
               <table class="lightbox_table">
               <tr>
               <td class="lightbox_table_cell" align="center">
                  <div id="lightbox_content" style=
                        "width:60%; 
                        background-color:#008080; 
                        border:5px solid #008080; 
                        margin:auto;">
                     <p>
                        <!--Begin table within lightbox-->

                
                     <!--
                     <h1> 
                     <?php 
                      //echo $row["firstName"] . $row["lastName"] ?> </h1>
                        
                    <table border="1" align="center" class="litTable">
                     <tr>
                        <td>Position:</td>
                        <td>Intern</td>
                     </tr>
                     <tr>
                        <td>Email:</td>
                        <td>
                        <?php 
                        //echo $row["email"] ?></td>
                     </tr>
                     <tr>
                        <td>Phone Number:</td>
                        <td><?php 
                        //echo $row["phone"] ?></td>
                     </tr>
                    </table> 
                    
                     
                  </div>
               </td>
               </tr>
               </table>
            </div>
        <!-- LIGHTBOX1 CODE END -->

        <!-- LIGHTBOX1 CODE BEGIN -->
            <!--
            <div id="lightbox2" class="lightbox" style="display:none"
                  onclick="document.getElementById('lightbox2').style.display='none';">
               <table class="lightbox_table">
               <tr>
               <td class="lightbox_table_cell" align="center">
                  <div id="lightbox_content" style=
                        "width:60%; 
                        background-color:#008080; 
                        border:5px solid #008080; 
                        margin:auto;">
                     <p>
                        
                        <!--Begin table within lightbox-->
                     <!--<h1> Jackie Cortes </h1>
                     <section>
                        <p>• Position: </p>
                        <span>Contact Information</span>
                        <p>• Email:</p>
                        <p>• Phone Number: (626) 512</p>
                        <p>• Address: jacortes@cpp.edu</p>
                     </section>
                     <section>
                        
                     </section>
                     
                     </p>
                     
                  </div>
               </td>
               </tr>
               </table>
            </div>
        <!-- LIGHTBOX1 CODE END -->


    </div>

    <script src="js/classie.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script>
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body;
        showLeft.onclick = function () {
            classie.toggle(this, 'active');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
            disableOther('showLeft');
        };
        function disableOther(button) {
            if (button !== 'showLeft') {
                classie.toggle(showLeft, 'disabled');
            }
        }
        </script>
</body>
</html>