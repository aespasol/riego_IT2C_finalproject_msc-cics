<?php
$name = $email = $comment =$subject=$telephone= "";
$nameErr = $emailErr=$subjErr="";
$F=0;
if (isset($_POST['submit'])) 
{
           if(empty($_POST['name']))
           {
                $nameErr="Please enter your name";
           }

           else
            {
                   $name= test_input($_POST["name"]);
                   $selectBox .= "Name :  ".$name."\n"."\n";
                   $F++;
            }

           if(empty($_POST['email']))
           {
                $emailErr="Please enter your email";
           }

           else
            {
                   $email = test_input($_POST["email"]);
                   $selectBox .= "Email :  ".$email."\n"."\n";
                   $F++;
            }
           if(empty($_POST['subject']))
           {
                $subjErr="Please enter your subject";
           }
    
            else
            {
                   $subject = test_input($_POST["subject"]);
                   $selectBox .= "Subject :  ".$subject."\n"."\n";
                   $F++;
            }

           if($F==3)
           {
                 
               $telephone = test_input($_POST["telephone"]);
               $selectBox .= "Telephone :  ".$telephone."\n"."\n";  
               
               $comment = test_input($_POST["comment"]);
               $selectBox .= "Message :  ".$comment."\n"."\n";      
                 
               mail("sucpresident.msc@gmail.com",$subject,$selectBox,"");    
               unset($_POST); 
               
               $name ="";
               $email="";
               $comment="";
               $F=0;
               
               unset($_POST);
           }

}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/contact.css"> 
     <link href="css/menu.css" type="text/css" rel="stylesheet" />
 <link href="css/fonts.css" type="text/css" rel="stylesheet" />  
<link href="css/footer.css" type="text/css" rel="stylesheet" /> 
 <link href="css/iconmoon.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="javascript/jquery.js" ></script>
<script type="text/javascript" src="javascript/menu.js" ></script>
<title> Contact Us </title>
</head>

<body>

        <!--End of modal --> 
<!--- Menuuuuuuuuuuu    ------------>
            
            <div id="menu-bar"> 
                <h3>
                    <img src="images/MSC%20Logo.png" />
                    
                    
                    <span id="menu-button">Menu<span class="icon-menu"></span></span>&nbsp;
                
                
                
                </h3>
            </div>
                
            
        <div id="respmenu">
          <uL>
            <li><a href="">About</a></li>
            
            <li><a href="">Admissions & Aid </a></li>
            <li><a href="">Schools</a></li>
        
            <li><a href="">On Campus</a></li>
              
            <li><a href="">MSC News</a></li>
            
            <li><a href="">Events </a></li>
            <li><a href="">MSC Campaign</a></li>
        
            <li><a href="contact.php">Contact Us</a></li>  
            
            <li class="topmenu-bar"><a href="" class="menu-adminlogin">Admin</a></li>
              
            <li class="topmenu-bar"><a href="" class="menu-stafflogin">Staff</a></li>
            
            <li class="topmenu-bar"><a href="" class="menu-studnetlogin">Students</a></li>
            <li class="topmenu-bar"><a href="">Alumini</a></li>
        
            <li class="topmenu-bar"><a href="">Parents</a></li>  
            
            <li class="topmenu-bar"><a href="">Visitors</a></li>   
              
          </uL>
        </div>
        
    </div>
        
        <span id="backtotop" ><h1><span class="icon-circle-up"></span></h1></span>
         <div id="menu">
                <div id="firstmen">
                <ul>
                    <li ><a class="hvr-overline-from-center menu-adminlogin" href = ""> Admin </a></li>
                    
                    <li ><a class="hvr-overline-from-center menu-stafflogin" href = ""> Staff </a></li>
                    
                    <li ><a class="hvr-overline-from-center menu-studnetlogin" href = ""> Students </a></li>
                    <li ><a class="hvr-overline-from-center" href = ""> Alumini</a></li>
                    <li ><a class="hvr-overline-from-center" href = "">Parents</a></li>
                    <li><a   class="hvr-overline-from-center" href = ""> Visitors </a></li>
                </ul>
                </div>
             
             <div class="clear"></div>
             
             
             
             <div class="secondmen1">
             
             <ul style="background-color:#FFFFFF; color: #A51C51">
             
                 <li ><a href = "" class="hvr-underline-from-center" >About<span class="invmenu"> MSC </span> </a>
                 
                    <ul>
                    
                        <li><a href="#"> Interactive </a></li>
                        <li><a href="#"> Engaging </a></li>
                        <li><a href="#"> Accessible </a></li>
                        <li><a href="#"> Informative </a></li>
                        
                    </ul>
                                  
                 
                 </li>
                 <li ><a href = "" class="hvr-underline-from-center"> Admissions <span class="invmenu"> & Aid</span> </a>
                 
                        <ul>
                    
                        <li><a href="#"> Admission Exam </a></li>
                        <li><a href="#"> Enrollment Period </a></li>
                        <li><a href="#"> Campus Map </a></li>
                        
                    </ul>                 

                 
                 
                 
                 </li>
           
               <li style="width:20%;"></li>
                 
                 <li ><a href = "" class="hvr-underline-from-center"> Schools </a></li>
                <li ><a href = "" class="hvr-underline-from-center"> On Campus </a></li>
             </ul>
                 
            </div>
             

             <a  style="padding:0px; margin:0px;"href="home.php"><div id="midmenu">
                 
                 <h1 >
                     <a href="home.php"  style="color:white;"><span style="font-family: 'Merriweather-Bold'; font-size:0.5em;">College of Information and Computer Sciences</a>
                 </h1> 
                 <h2 style="color:white;padding:0; margin-top=-10px ; display:none;">CICS</h2>
                 
                <!-- <img src="images/MSC%20Logo.png"  style="padding-top:10px;"width= "100px"/> -->
             
             
             </div></a>
                 
                <!-- <img src="images/MSC%20Logo.png"  style="padding-top:10px;"width= "100px"/> -->
             
             
             </div></a>
             
        </div>
        
             
             <div class="clear"></div>
             
            <div id="menuheight"></div>
             
             <div class="secondmen2" >
              <ul style="background-color:#F3F3F1; color: #A51C51">
             
                 <li><a href = "" class="hvr-underline-from-center"> MSC News </a></li>
                <li><a href = "" class="hvr-underline-from-center"> Events </a></li>
               <li style="width:20%;"></li>
             
                 <li ><a href = "" class="hvr-underline-from-center"> MSC Campaign </a></li>
                <li ><a href = "contact.php" class="hvr-underline-from-center"> Contact </a> </li>
             </ul>
             
             
             </div>
            
        
        <!---  END of Menuuuuuuuuuuu    ------------>
    
    
    
    

<h2 class="title">Contact Form</h2>
<div class="cont_body">


    
    <div class="contact_p1">
    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
    <div class="name_fm">
        <p class="error"><?php echo $nameErr; ?></p>
        <p> Name:*</p> <input type="text" name="name" value="<?php echo $name; ?>">
        <br>  
    </div>
    
    <div class="email_fm">
        <p class="error"><?php echo $emailErr; ?></p>
        <p>E-mail: *</p><input type="email" name="email" value="<?php echo $email; ?>">
        <br> 
    </div>
    
    <div class="subject_fm">
        <p class="error"><?php echo $subjErr; ?></p>
        <p>Subject: *</p><input type="text" name="subject" value="<?php echo $subject; ?>">
        <br> 
    </div>
    
    <div class="telp_fm">

        <p>Telephone: </p><input type="number" name="telephone" value="<?php echo $telephone; ?>">
        <br> 
    </div>
    
    <div class="comment_fm">
        <p><span class="comm">Message:</span></p> <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
        <br>    
    </div>

   <input type="submit" name="submit" value="Submit">
</form>

</div>

<div class="contact_p2">
    
<h2> Address</h2>
<p>Panfilo M. Manguera, Sr. Road, Tanza, Boac, Marinduque - Philippines</p>

<h2> Telephone</h2>
<p>(042) 332-2028/2728</p>

<h2> Email</h2>
<p>president@mscmarinduque.edu.ph<br />
sucpresident.msc@gmail.com</p>

</div>
<div class="contact_p3">

</div>
    </div>
    
    
      
        <!-- footter   -->
        
        
                
                     <div class="footer">
        
      
       
                <div class="footer_1a">
       
                    <h4> About Us</h4>  
                
                    <p>
         
                        <span class="firstcharacter">T</span>he School of Information and Computing Sciences (SICS) is one of the premiere schools in the province for IT education and services. It aims to produce competitive IT professionals and IT-enabled individuals who will encourage real innovation for advancements in the digital era of the province and the country.
        
                    </p> 
           
                </div>       
           
                <div class="footer_1b">
                        
                                    
                    <h4> News </h4>    

                    <p>
              
                        The college strengthened industry collaborations, forging partnerships with leading technology companies to offer internship opportunities and career development programs for students. With its commitment to academic excellence and a forward-thinking approach, the College of Information and Computer Sciences at Marinduque State College continues to shape the future of technology education in the region.
           
                   
                    </p>

        
                </div>
             
       
                         
           
                
                <div class="footer_2a">     

                    <h4>Get in touch</h4>  
              
               
                    <p>               
                       <img src="images/footer/location.png"/> Panfilo M. Manguera, Sr. Road, Tanza, Boac, Marinduque - Philippines                  
                    </p>   
            
                    <p>    
                        <img src="images/footer/phone.png"/>
                        (042) 332-2028/2728                      
                    </p>
      
              
                    <p>    
                        <img src="images/footer/mail.png"/>
                    president@mscmarinduque.edu.ph      
                    </p>
           
                </div>  
                
                <div class="footer_2b">     
                    <h4>Follow Us</h4>          
               

                
                    <p>               
                        <img src="images/footer/facebook.png" />
                        <img src="images/footer/linkedin.png"/>
                        <img src="images/footer/youtube.png"/>
                        <img src="images/footer/rss.png"/>
                        
                    </p>   
                    
                                   
                    <div class="footer_2d">
                    
                    <img src="images/MSC%20Logo.png"/>
                
                </div>   
           
                
                </div> 
               
            
                
                
                <div class="footer_2c"> 
                    <p>Powered by CCJ Team</p>
                    
                </div>
                
                

       
       
        </div>
        
        
        
        <!-- end footter   -->
    
    
    
    
</body>
</html>