<?php
session_start();
include "connections.php";




/*if($_GET["logout"]==1)
{
 session_destroy();   
    
}*/

?>
<!Doctype html>

<html>
    <head>
    
        <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
        
        <link href="css/menu.css" type="text/css" rel="stylesheet" />   
        <link href="css/some.css" type="text/css" rel="stylesheet" /> 
        <link href="css/style.css" type="text/css" rel="stylesheet" />
        <link href="css/fonts.css" type="text/css" rel="stylesheet" />  
        <link href="css/footer.css" type="text/css" rel="stylesheet" /> 
        <link href="css/iconmoon.css" type="text/css" rel="stylesheet" />   
        <link href="css/Section3Style.css" type="text/css" rel="stylesheet" />
        <link href="css/Section4Style.css" type="text/css" rel="stylesheet"/>
        <script type="text/javascript" src="javascript/jquery.js" ></script>
        <script type="text/javascript" src="javascript/home.js" ></script>
        <script type="text/javascript" src="javascript/menu.js" ></script>
        <script type="text/javascript" src="javascript/Section4Java.js"></script>
        
        <script src="http://malsup.github.com/jquery.cycle2.js"></script>
     
    </head>
    
   
    
    
    
<body>
    <?php //echo $st; ?>

    <!-- modal begin -->

    <div class="modal-overlay">

        <div class="modal">
            <span class="modal-close"><span class="icon-cross"></span></span>
            <h2>Sign in</h2>

            <div id="studentmodal">
                <div class="modal-errors"><?php $error = ""; echo $error; ?></div>

                <form method="post" action="">
                    Id:<br /><input type="number" name="Id" value="<?php echo $username; ?>" style="padding-bottom:5px;"><br />
                    password: <br /><input type="password" name="password"><br />
                    <input id="login" type="submit" value="Submit" name="login">
                </form>
            </div>


            <div id="staffmodal">
                <div class="modal-errors"><?php $error = ""; echo $error; ?></div>

                <form method="post" action="">
                    Id staff:<br /><input type="text" name="Idstaff" value="<?php echo $username; ?>" style="padding-bottom:5px;"><br />
                    password: <br /><input type="password" name="passwordstaff"><br />
                    <input id="loginstaff" type="submit" value="Submit" name="loginstaff">
                </form>
            </div>

            <div id="adminmodal">
                <div class="modal-errors"><?php $error = ""; echo $error; ?></div>

                <form method="post" action="">
                    Id Admin:<br /><input type="text" name="Idadmin" value="<?php echo $username; ?>" style="padding-bottom:5px;"><br />
                    password: <br /><input type="password" name="passwordadmin"><br />
                    <input id="login" type="submit" value="Submit" name="loginadmin">
                </form>
            </div>
        </div>
    </div>
</body>

        
        
        
        <!--End of modal --> 
<!--- Menuuuuuuuuuuu    ------------>
            
            <div id="menu-bar">
                
                <h3>
                    <img src="images/MSC%20Logo.png" />
                    
                    
                    <span id="menu-button">Menu<span class="icon-menu"></span></span>&nbsp;
                
                
                
                </h3>
                
            
        <div id="respmenu">
          <uL>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            
            <li><a href="">Admissions</a></li>
            <li><a href="">Schools</a></li>
        
            <li><a href="">On Campus</a></li>
              
            <li><a href="">MSC News</a></li>
            
            <li><a href="">Events</a></li>
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
        
        <span id="backtotop" ><img class="BackToTop" ></span>
        
         <div id="menu">
                <div id="firstmen">
                <ul>
                    <li ><a class="hvr-overline-from-center menu-adminlogin" href = "">Admin</a></li>
                    
                    <li ><a class="hvr-overline-from-center menu-stafflogin" href = "">Staff</a></li>
                    
                    <li ><a class="hvr-overline-from-center menu-studnetlogin" href = "">Students</a></li>
                    <li ><a class="hvr-overline-from-center" href = ""> Alumini</a></li>
                    <li ><a class="hvr-overline-from-center" href = "">Parent</a></li>
                    <li><a   class="hvr-overline-from-center" href = "home.php?logout=1">Visitors</a></li>
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
             
        </div>
        
             
             <div class="clear"></div>
             
            <div id="menuheight"></div>
             
             <div class="secondmen2" >
              <ul style="background-color:#F3F3F1; color: #A51C51">
             
                 <li><a href = "" class="hvr-underline-from-center"> MSC News </a></li>
                <li><a href = "" class="hvr-underline-from-center"> Events </a></li>
               <li style="width:20%;"></li>
             
                 <li ><a href = "" class="hvr-underline-from-center"> MSC Campaign </a></li>
                <li ><a href = "contact.php" class="hvr-underline-from-center"> Contact Us </a> </li>
             </ul>
             
             
             </div>
            
        
        <!---  END of Menuuuuuuuuuuu    ------------>
            
    <div class="cycle-slideshow"
    data-cycle-fx="scrollHorz"
    data-cycle-prev="#prev"
    data-cycle-next="#next"
    >
        
    <img src="images/slideshow/slide-1.jpg">
    <img src="images/slideshow/slide-2.jpg">
    <img src="images/slideshow/slide-3.jpg">
        
         <span class="cycle-pager"></span>
</div>
        
    <span class="cycle-prev" ><a href=# id="prev">&#9001;</a></span>
        <span class="cycle-next" ><a href=# id="next">&#9002;</a> </span>
       
        
        
        
        <!-- Ramy code section 2 -->
        
        <div class="section2_ab " style="height:100%;">
            
            <h2 style="padding-top:40px; font-family:'Montserrat Light'; padding-bottom:0;">WELCOME TO MSC SCHOOL OF INFORMATION TECHNOLOGY AND COMPUTER SCIENCES WEBSITE.</h2>
            <h3 class="center" style="font-family:'Montserrat UltraLight'; padding-bottom:10px; padding-top:0px;">" Where best programs are written "</h3>
                
                <div class="column1" style="font-family:'Montserrat Light';">
               
                        <div class="description">
                             <img src="images/section2/s2_a.png"/>
                   
                            <h3>Thriving Research Culture</h3>
                    
                            <p>The College of Information and Computer Sciences at Marinduque State College boasts a thriving research culture, with faculty and students actively engaged in cutting-edge research projects. Their contributions span various domains, including artificial intelligence, cybersecurity, data science, and more, fostering an environment of innovation and knowledge creation.</p>
                         
                                                   
                            <img src="images/section2/s2_b.png"/>
                    <h3>State-of-the-Art Facilities</h3>
                    <p>The college is equipped with state-of-the-art facilities, including a modern computer lab that provides students with hands-on experience using the latest hardware and software technologies. These facilities enable students to gain practical skills and stay up-to-date with the advancements in the rapidly evolving field of information and computer sciences.</p>
                            
                        </div>
     
                                      

                    
                </div>
                
            
                <div class="column2" style="font-family:'Montserrat Light';">
                
                        <div class="description">
                             <img src="images/section2/s2_d.png"/>
                                                <h3>Strong Industry Partnerships</h3>
                    <p>The college has forged strong partnerships with leading technology companies, fostering collaborations that benefit both students and the industry. These partnerships facilitate internship opportunities, guest lectures from industry experts, and real-world projects that enhance students' employability and expose them to industry best practices.</p>

                         
                                                   
                            <img src="images/section2/s2_e.png"/>
                    <h3>Holistic Learning Approach</h3>
                    <p>The College of Information and Computer Sciences adopts a holistic learning approach, combining theoretical knowledge with practical application. Students are encouraged to participate in hackathons, competitions, and research conferences to develop critical thinking, problem-solving, and teamwork skills. This comprehensive approach prepares graduates to excel in their careers and make meaningful contributions to the field of information and computer sciences.</p>
                            
                        </div>     
                                      

                    
                </div>
                
            </div>
       
        
        <!-- end of code section2 -->
        
        
        <section class="section-4">
        
            <div class="section-4-col"> 
                <h3>Explore all the</h3>
            
                <h2>COURSES</h2>
            </div>
            <div class="section-4-col"> 
                <div id="section-4-next" onclick="Section4Slide();"><span class="icon-circle-right"> </span></div>
            </div>
        
            <div class="section-4-container"> 
            
                <div class="section-4-unit">
                    <img src="images/section4/course-1.jpg" class="section-4-img">
                    <h4>CEng</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                    <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/course-2.jpg" class="section-4-img">
                    <h4>CIT</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                    <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/course-3.jpg" class="section-4-img">
                    <h4>CEd</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                    <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/course-4.jpg" class="section-4-img">
                    <h4>CASS</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                     <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/course-5.jpg" class="section-4-img">
                    <h4>CBA</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                     <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/course-6.jpg" class="section-4-img">
                    <h4>CGov</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                     <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/course-7.jpg" class="section-4-img">
                    <h4>CAg</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                    <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/course-8.jpg" class="section-4-img">
                    <h4>COFAS</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                    <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/course-9.jpg" class="section-4-img">
                    <h4>CAHS</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                     <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/course-10.jpg" class="section-4-img">
                    <h4>CES</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                     <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
            </div>
            
        </section>
        
        <section class="alt-Section" id="alt-section">
    
            <h3>Our fellow</h3>
            
            <h2>TEACHERS</h2>
            
            <div class="contanier">
                
                 <div id="thumb-1" class="thumb-unit">
                     
                     <div class="thumb-overlay">
                
                        <strong> Teacher 1 </strong>
                         <p> With a wealth of experience in computer science, Professor 1 is a seasoned educator who is passionate about cultivating the next generation of tech professionals. His dynamic teaching style and expertise in software engineering inspire students to think critically and explore innovative solutions to complex problems. </p>
                         
                    </div>
                    
                 </div>
                
                <div id="thumb-2" class="thumb-unit" >
                     
                     <div class="thumb-overlay">
                
                        <strong> Teacher 2 </strong>
                        <p> Teacher 2 is a renowned expert in artificial intelligence and machine learning. His research contributions have earned him recognition in the field, and he brings his expertise into the classroom, captivating students with the latest advancements in AI. Driven by a desire to make AI accessible to all, he encourages students to apply these technologies in a wide range of domains. </p>

                    </div>
                    
                 </div>
                
                <div href="" id="thumb-3" class="thumb-unit" >
                     
                     <div class="thumb-overlay">
                
                         <strong> Teacher 3 </strong>
                        <p> With a specialization in cybersecurity, Professor 3 is dedicated to equipping students with the skills and knowledge needed to defend against cyber threats. His practical approach to teaching ensures that students understand the intricacies of network security and are well-prepared for the challenges of the rapidly evolving digital landscape. </p>

                    </div>
                    
                 </div>
                
                <div href="" id="thumb-4" class="thumb-unit" >
                     
                     <div class="thumb-overlay">
                
                         <strong> Teacher 4 </strong>
                        <p> Teacher 4 is a respected authority in data science and analytics. His research focuses on extracting valuable insights from large datasets and using data-driven approaches to make informed decisions. With his expertise, he empowers students to harness the power of data and apply it to various industries, preparing them for data-driven careers. </p>

                    </div>
                    
                 </div>
                
                <div href="" id="thumb-5" class="thumb-unit" >
                     
                     <div class="thumb-overlay">
                
                        <strong> Teacher 5 </strong>
                     <p> Professor 5 specializes in human-computer interaction, designing user-friendly interfaces that enhance user experiences. Her classes emphasize the importance of user-centered design and usability testing. Through her guidance, students develop the skills to create intuitive and engaging digital products that meet user needs effectively. </p>

                    </div>
                    
                 </div>
                
                <div href="" id="thumb-6" class="thumb-unit" >
                     
                     <div class="thumb-overlay">
                
                        <strong> Teacher 6 </strong>
                       <p> Teacher 6 is a dedicated researcher in the field of software engineering. Her passion lies in developing robust and scalable software systems. With her guidance, students gain a comprehensive understanding of software development methodologies and best practices, preparing them for successful careers as software engineers. </p>

                    </div>
                    
                 </div>
                <div href="" id="thumb-7" class="thumb-unit" >
                     
                     <div class="thumb-overlay">
                
                        <strong> Teacher 7 </strong>
                       <p> Professor 7 is an expert in database management systems. Her in-depth knowledge of data modeling and database administration helps students understand the intricacies of organizing and accessing large amounts of data. She emphasizes the importance of data integrity and security, equipping students with essential skills for managing information effectively. </p>
                    
                    </div>
                    
                 </div>
                
                <div href="" id="thumb-8" class="thumb-unit" >
                     
                     <div class="thumb-overlay">
                
                        <strong> Teacher 8 </strong>
                        <p> Teacher 8 is a trailblazer in the field of computer networks and communication systems. Her research focuses on network protocols and optimization techniques. Through her teachings, students gain a deep understanding of network architectures, routing protocols, and network security, enabling them to design and manage robust network infrastructures. </p>
                    </div>
                    
                 </div>

            </div>
            
        </section>
        
        
    <!--- end of section 3&4 -->
        
        
        <!-- footter   -->
        
        
                
          <div class="parallax"> 
     
              <h2> CICS is committed to give what their stakeholders deserve through quality education and public service with their mantra:</h2>
              <h2>”WORK IN SILENCE AND LET OUR SUCCESS MAKE OUR NOISE.”</h2>
                
       
          </div>
                     <div class="footer">
        
      
       
                <div class="footer_1a">
       
                    <h4> About Us</h4>  
                
                    <p>
         
                        <span class="firstcharacter">T</span>he College of Information and Computing Sciences (CICS) is one of the premiere schools in the province for IT education and services. It aims to produce competitive IT professionals and IT-enabled individuals who will encourage real innovation for advancements in the digital era of the province and the country.

                    </p> 
           
                </div>       
           
                <div class="footer_1b">
                        
                                    
                    <h4> News and Updates </h4>    

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
                    <h4>Follow us</h4>          
               

                
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