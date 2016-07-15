<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="se.css">
  <script type="text/javascript">var hide_awf_Form = true;</script>
<style>

</style>
</head>
<body>

<?php

            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "recruiter2";


            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            } 



            $q = intval($_GET['q']);



            //$sql="SELECT * FROM user WHERE id = '".$q."'";

            /*$sql = "SELECT r.recID, firstName, lastName, streetAddress, city, r.state, zip, phone, email, resume, firstLang, ged,
                r.processLevelID, r.districtID, sourceOfLead, r.nominatorID
                FROM rec r 
                where  r.recID = ".$q ; */

             $sql = "SELECT r.recID ,r.firstName,r.lastName,r.streetAddress, r.city, r.zip,r.state,r.phone,r.email,r.firstLang,r.sourceOfLeadID,
                    r.nominatorID,r.noNominator,r.districtID,r.process,r.whyDisqualifyID,r.disqualified,r.ged
                     from rec r 
                     where  r.recID = ".$q ;
            //echo $sql;

            $result = $conn->query($sql);

            if ($result->num_rows > 0) 
            {
                echo "hi";

                ?>
                
                <div id="lightbox1" class="lightbox" style="display:inline"
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
                                        

                                        <table border="1" align="center" class="litTable">
                                                <!--<tr>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    <th>City</th>
                                                    <th>Phone</th>
                                                    <th>GED</th>
                                                </tr>  -->

                                        <?php

                                        while($row = $result->fetch_assoc()) 
                                        {
                                            echo "<h1>" .$row['firstName'] . " " . $row['lastName'] . "</h1>";

                                            echo "<tr> 
                                                    <td><h1> Location </h1> </td>
                                                  </tr>";
                                            echo "<tr>
                                                    <td>Street Address :</td>
                                                    <td>" .$row['streetAddress'] . "</td>
                                                  </tr>";    
                                            echo "<tr>
                                                    <td>City :</td>
                                                    <td>" .$row['city'] . "</td>
                                                  </tr>";
                                            echo "<tr>
                                                    <td>Zip:</td>
                                                    <td>" .$row['zip'] . "</td>
                                                  </tr>";
                                            echo "<tr>
                                                    <td>State :</td>
                                                    <td>" .$row['state'] . "</td>
                                                  </tr>";

                                            
                                            echo "<tr> 
                                                    <td><h1> Contact Information: </h1> </td>
                                                  </tr>";
                                            echo "<tr>
                                                    <td>Primary Phone no :</td>
                                                    <td>" .$row['phone'] . "</td>
                                                  </tr>";
                                            echo "<tr>
                                                    <td>Primary Email :</td>
                                                    <td>" .$row['email'] . "</td>
                                                  </tr>";

                                           
                                            echo "<tr> 
                                                    <td><h1> Language Spoken: </h1> </td>
                                                  </tr>";


                                            echo "<tr>
                                                    <td>Primary Spoken Language :</td>
                                                    <td>" .$row['firstLang'] . "</td>
                                                  </tr>";


                                                                                       
                                            $sqltemp = "SELECT la.languageName, rla.proficiency,rla.priority
                                                        from reclanguage rla
                                                        inner join rec.language la
                                                        on rla.langID = la.languageID
                                                        where rla.recID = " .$q;

                                            //echo $sqltemp;
                                            
                                            
                                            $resulttemp = $conn->query($sqltemp);

                                            if ($resulttemp->num_rows > 0)
                                            { 
                                                while($rowtemp = $resulttemp->fetch_assoc()) 
                                                {
            
                                                    //echo "hi lang";
                                                    
                                                    if ($rowtemp['priority'] == 2)
                                                        $langspoken = "Secondary Language :";
                                                    else if ($rowtemp['priority'] == 3)
                                                        $langspoken = "Tertiary Language :";

                                                      
                
                                                    echo "<tr>
                                                          <td>" .$langspoken . "</td> 
                                                          <td>" .$rowtemp[languageName] . "</td>
                                                          <td>   Profiency :</td>
                                                          <td>" .$rowtemp['proficiency'] . "</td>
                                                    </tr>";

                                                    
                                                }
                                            }
                                          
                                            
                                            

                                            echo "<tr> 
                                                    <td><h1> High School Diploma or GED </h1> </td>
                                                  </tr>";
                                            
                                            echo "<tr>";
                                                if ($row['ged'] == 1)
                                                {
                                                ?>
                                                    <td><input type="checkbox" name="ged1" value="ged1" checked>GED</td>
                                                <?php
                                                }
                                                else if ($row['ged'] == 0)
                                                {
                                                ?>
                                                    <td><input type="checkbox" name="ged1" value="ged1">GED</td>
                                                </tr>

                                            
                                            <?php
                                                }
                                            

                                            $sqltemp = "SELECT hs.hsName, rhs.gradYear
                                                        from recHighschool rhs
                                                        inner join highschool hs
                                                        on rhs.hsID = hs.hsID
                                                        where rhs.recID = " . $q;
                                            
                                            //echo $sqltemp;

                                            $resulttemp = $conn->query($sqltemp);

                                            //echo $resulttemp;
                                            if ($resulttemp->num_rows > 0)
                                            {     
                                                $rowtemp = $resulttemp->fetch_assoc();
                                                
                                                echo "<tr>"
                                                ?>
                                                    <td><input type="checkbox" name="hiscl" value="hiscl" checked>High School</td>
                                                <?php
                                                echo "<td> School : " . $rowtemp['hsName'] . "</td>";
                                                echo "<td> Year Graduated : " . $rowtemp['gradYear'] . "</td>
                                                
                                                </tr>";

                                            }
                                            else
                                            {
                                                echo "<tr>"
                                                ?>
                                                    <td><input type="checkbox" name="hiscl" value="hiscl">High School</td>
                                                <?php
                                                echo "<td> School : No High School</td>";
                                                echo "<td> Year Graduated :  Not Applicable</td>
                                                
                                                </tr>";    
                                            }

                                            


                                            $sqltemp = "SELECT rhe.university ,rhe.gradYear, he.degree
                                                        from recHE rhe
                                                        inner join higherEducation he
                                                        on rhe.heID = he.heID
                                                        where rhe.recID =  " . $q .
                                                        " order by rhe.gradYear DESC" ;

                                            //echo $sqltemp;
                                            
                                            
                                            $resulttemp = $conn->query($sqltemp);

                                            if ($resulttemp->num_rows > 0)
                                            { 
                                                echo "<tr> 
                                                        <td><h1> Higher Education : </h1> </td>
                                                    </tr>";
                                                while($rowtemp = $resulttemp->fetch_assoc()) 
                                                {
                        
                                                    //echo "hi lang";
                                                    


                                                    echo "<tr>
                                                        <td>Degree :</td>
                                                        <td>" .$rowtemp['degree'] . "</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Graduation Year :</td>
                                                        <td>" .$rowtemp['gradYear'] . "</td>
                                                    </tr>

                                                    <tr>
                                                        <td>College/University :</td>
                                                        <td>" .$rowtemp['university'] . "</td>
                                                    </tr>";
                                                    
                                                   
                                                    
                                                }
                                            }


                                            $sqltemp = "SELECT rex.company, wex.title, rex.priority, rex.startDate, rex.endDate
                                                        from recExperience rex
                                                        inner join workExperience wex
                                                        on rex.experienceID = wex.experienceID
                                                        where rex.recID = " . $q .
                                                        " order by rex.startDate DESC" ;

                                            //echo $sqltemp;
                                            
                                            
                                            $resulttemp = $conn->query($sqltemp);

                                            if ($resulttemp->num_rows > 0)
                                            { 
                                                
                                                while($rowtemp = $resulttemp->fetch_assoc()) 
                                                {
                        
                                                    //echo "hi lang";
                                                 
                                                    if ($rowtemp['priority'] == 1)
                                                        $workex = "Most Recent Work Experience";
                                                    else if ($rowtemp['priority'] == 2)
                                                        $workex = "2nd Most Recent Work Experience";
                                                    else if ($rowtemp['priority'] == 3)
                                                        $workex = "3rd Most Recent Work Experience";
                                                    else if ($rowtemp['priority'] == 4)
                                                        $workex = "4th Most Recent Work Experience";
                                                    else if ($rowtemp['priority'] == 5)
                                                        $workex = "5th Most Recent Work Experience";
                                                    else if ($rowtemp['priority'] == 6)
                                                        $workex = "6th Most Recent Work Experience";
                                                    else if ($rowtemp['priority'] == 7)
                                                        $workex = "7th Most Recent Work Experience";
                                                    else if ($rowtemp['priority'] == 8)
                                                        $workex = "8th Most Recent Work Experience";

                                                     
                                                    echo "<tr> 
                                                        <td><h1>" .$workex . " </h1> </td>
                                                    </tr>"; 
                
                                                    echo "<tr>
                                                          <td>Company Name :</td> 
                                                          <td>" .$rowtemp['company'] . "</td>
                                                          <td>Title :</td>
                                                          <td>" .$rowtemp['title'] . "</td>
                                                    </tr>";   

                                                    echo "<tr>
                                                          <td>Start Date :</td> 
                                                          <td>" .$rowtemp['startDate'] . "</td>
                                                          <td>End Date :</td>
                                                          <td>" .$rowtemp['endDate'] . "</td>
                                                    </tr>"; 
                                                   
                                                    
                                                }
                                            }


                                            $sqltemp = "SELECT li.licenseName, rli.state
                                                        from recLicense rli
                                                        inner join license li
                                                        on rli.licenseID = li.licenseID
                                                        where rli.recID =  " . $q ;

                                            //echo $sqltemp;
                                            
                                            
                                            $resulttemp = $conn->query($sqltemp);

                                            if ($resulttemp->num_rows > 0)
                                            { 
                                                echo "<tr> 
                                                        <td><h1> Licenses & State of Residency : </h1> </td>
                                                    </tr>";
                                                while($rowtemp = $resulttemp->fetch_assoc()) 
                                                {
                        
                                                    //echo "hi lang";
                                                    

                                                    echo "<tr>
                                                        <td>" .$rowtemp['licenseName'] . "</td>
                                                        <td>" .$rowtemp['state'] . "</td>
                                                    </tr>";
                                                    
                                   
                                                }
                                            }



                                            $sqltemp = "SELECT sl.sourceOfLead
                                                        from sourceOfLead sl
                                                        where sl.sourceOfLeadID =  " . $row[sourceOfLeadID];

                                            //echo $sqltemp;
                                            
                                            
                                            $resulttemp = $conn->query($sqltemp);

                                            if ($resulttemp->num_rows > 0)
                                            { 
                         

                                                echo "<tr><td><h1> Source </h1> </td></tr>";
                                                

                                                while($rowtemp = $resulttemp->fetch_assoc()) 
                                                {
                        
                                                    //echo "hi lang";
                                                    
                                                    echo "<tr>
                                                        <td> Source of Lead : </td><td>" .$rowtemp['sourceOfLead'] . "</td>
                                                    </tr>";
                                                    
                                   
                                                }
                                            }

                                            
                                            if ($row['noNominator'] == 0)
                                            {
                                                $sqltemp = "SELECT no.nominatorID,no.firstName,no.lastName,no.writingNo,no.abc
                                                            from nominator no 
                                                            where  no.nominatorID = " . $row[nominatorID];


                                                $resulttemp = $conn->query($sqltemp);

                                                if ($resulttemp->num_rows > 0)
                                                { 
                                                    
                                                    //echo "hi nom1";
                                                    
                                                    while($rowtemp = $resulttemp->fetch_assoc()) 
                                                    {
                        
                                           
                                                        echo "<tr><td>Nominator : </td>";

                                                        
                                                        if ($rowtemp['abc'] == 1)
                                                        {
                                                            
                                                            ?><td><input type="checkbox" name="abc1" value="abc1" checked> ABC </td>
                                                            
                                                            <?php
                                                        }
                                                        echo "</tr>"; 
                                                        
                                                        

                                                        echo "<tr>
                                                            <td>First Name : </td><td> " .$rowtemp['firstName'] . "</td>
                                                            <td>Last Name : </td><td> " .$rowtemp['lastName'] . "</td>
                                                        </tr>";

                                                        echo "<tr>
                                                            <td> Writing # </td>
                                                            <td>" .$rowtemp['writingNo'] . "</td>
                                                        </tr>";

                                                        
                                                    
                                   
                                                    }
                                                    

                                                } 
                                                
                                            }

                                            /*

                                            if ($row['nominatorID'] is NOT NULL)
                                            {
                                                $sqltemp = "SELECT no.nominatorID,no.firstName,no.lastName,no.writingNo,no.abc
                                                            from nominator no 
                                                            where  no.nominatorID = " . $row[nominatorID];


                                                $resulttemp = $conn->query($sqltemp);

                                                if ($resulttemp->num_rows > 0)
                                                { 
                                                    
                                                    //echo "hi nom1";
                                                    
                                                    while($rowtemp = $resulttemp->fetch_assoc()) 
                                                    {
                        
                                           
                                                        echo "<tr><td>Nominator : </td>";

                                                        
                                                        if ($rowtemp['abc'] == 1)
                                                        {
                                                            
                                                            ?><td><input type="checkbox" name="abc1" value="abc1" checked> ABC </td>
                                                            
                                                            <?php
                                                        }
                                                        echo "</tr>"; 
                                                        
                                                        

                                                        echo "<tr>
                                                            <td>First Name : </td><td> " .$rowtemp['firstName'] . "</td>
                                                            <td>Last Name : </td><td> " .$rowtemp['lastName'] . "</td>
                                                        </tr>";

                                                        echo "<tr>
                                                            <td> Writing # </td>
                                                            <td>" .$rowtemp['writingNo'] . "</td>
                                                        </tr>";

                                                        
                                                    
                                   
                                                    }
                                                    

                                                } 
                                                
                                            }

                                            */


                                            $sqltemp = "SELECT districtName
                                            from district
                                            where district.districtID = " . $row[districtID];
                                            
                                            //echo $sqltemp;

                                            $resulttemp = $conn->query($sqltemp);

                                            //echo $resulttemp;
                                            if ($resulttemp->num_rows > 0)
                                            {     
                                                $rowtemp = $resulttemp->fetch_assoc();
                                                
                                                echo "<tr>
                                                <td> Assigned District : </td><td>" .$rowtemp['districtName'] . "</td>
                                                </tr>";   
                                            }



                                            $sqltemp = "SELECT p.positionName
                                                        from recPositions rp
                                                        inner join positions p
                                                        on rp.positionID = p.positionID
                                                        where rp.recID =  " . $q .
                                                        " order by rp.priority";

                                            //echo $sqltemp;
                                            
                                            
                                            $resulttemp = $conn->query($sqltemp);

                                            if ($resulttemp->num_rows > 0)
                                            { 
                                                
                                                while($rowtemp = $resulttemp->fetch_assoc()) 
                                                {
                        
                                                    //echo "hi lang";
                                                    

                                                    echo "<tr>
                                                        <td> Position :  </td>
                                                        <td>" .$rowtemp['positionName'] . "</td>
                                                    </tr>";
                                                    
                                   
                                                }
                                            }

                                            /*
                                            $sqltemp = "SELECT p.LevelName
                                                        from ProcessLevel p
                                                        where p.ProcessLevelID = " . $row[processLevelID];
                                            
                                            //echo $sqltemp;

                                            $resulttemp = $conn->query($sqltemp);

                                            //echo $resulttemp;
                                            if ($resulttemp->num_rows > 0)
                                            {     
                                                $rowtemp = $resulttemp->fetch_assoc();
                                                
                                                echo "<tr>
                                                <td> Process Level : </td><td>" .$rowtemp['LevelName'] . "</td>
                                                </tr>";   
                                            }

                                            */

                                            echo "<tr>
                                                <td> Process Level : </td><td>" .$row['process'] . "</td>
                                                </tr>";  


                                            if ($row['disqualified'] == 1)
                                            {
                                                
                                                $sqltemp = "SELECT wd.explanation
                                                            from whyDisqualify wd
                                                            where wd.whyDisqualifyID =  " . $row[whyDisqualifyID] ;


                                                echo "<tr>"
                                                ?>
                                                <td> Disqualified </td><td><input type="checkbox" name="disqual" value="disqual" checked></td>
                                                </tr>

                                                <?php

                                                echo "<tr><td>Reason(s) for disqualification : </td>";


                                                $resulttemp = $conn->query($sqltemp);

                                                if ($resulttemp->num_rows > 0)
                                                { 
                                                    
                                                    //echo "hi nom1";
                                                    
                                                    while($rowtemp = $resulttemp->fetch_assoc()) 
                                                    {
                        
                                                        echo "
                                                            <td>".$rowtemp['explanation'] . "</td>
                                                        </tr>";

                                                                                          
                                                    }
                                                    

                                                } 
                                                
                                            }


                                            $sqltemp = "SELECT ri.interviewerName,ri.interviewDate,ri.interviewNo,ri.grade
                                                        from recInterview ri
                                                        where recID =  " . $q;
                                            
                                           
                                            $resulttemp = $conn->query($sqltemp);

                                            $rowtemp = $resulttemp->fetch_assoc();
                                                
                                            echo "<tr>
                                                <td> Interview Number : </td>

                                                <td>" .$rowtemp['interviewNo'] . "</td>
                                                </tr>"; 
                                            echo "<tr>
                                                <td> Interviewer Name : </td>

                                                <td>" .$rowtemp['interviewerName'] . "</td>
                                                </tr>";   

                                            echo "<tr>
                                                <td> Interview Date : </td>

                                                <td>" .$rowtemp['interviewDate'] . "</td>
                                                </tr>"; 

                                            echo "<tr>
                                                <td> Interview Grade : </td>

                                                <td>" .$rowtemp['grade'] . "</td>
                                                </tr>"; 
                                            
  
                                            
                                        }

                                        echo "</table>
                                    </p>
                                </div>

                            </td>
                        </tr>
                    </table>
                </div>";


            }
                                            
            mysqli_close($con);
?>
</body>
</html>