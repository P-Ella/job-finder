<?php
ob_start();
session_start();
// if session variable is not found
if(isset($_SESSION['user_name'])) {
    //redirect user to SignIn page
    header('Location: SignIn.php');
}

require_once('inc/top.php');
require_once('inc/backend.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!--font-->
    <title>Responsive job portal websites</title>
</head>
<body>

    <header class="header">
        <section class="flex" >
              <div id="menu-btn" class="fas fa-bars-staggered"></div>
          <a href="index.html" class="logo" ><i class="fas fa-bars-staggered" ></i> Jobhunt</a> <br/><br>

            <nav class="navbar">
                 <a href="index.html">Home</a>
                 <a href="About.html">About us</a>
                 <a href="Job.html"> All Job</a>
                 <a href="Contact.html">Contact</a>
                 <a href="SignIn.html">SignIn</a>
                <a href="#" class="btn" style="margin-top: 0;">post job</a>
         </nav>

        </section>
    </header>

    <!--header sectio ends-->

    <!-- home section starts -->
    <div class="home-container">
        <section class="home">

            <form action="" method="post">
                <h3>Find your next job easily</h3>
                <p>Job title <span>*</span></p>
                <input type="text" name="title" placeholder="keyword, caterogry or company"
                required maxlength="20" class="input">
                <p>Job Location</p>
                <input type="text" name="Location" placeholder="locality, city, state or"
                 required maxlength="50" class="input">
                 <input type="submit" value="search job" name="search job" class="btn">
            </form>
        </section>
    </div>
    <!-- home section ends -->

    <!--category section starts-->

    <section class="category">
        <h1 class="heading">Job categories</h1>

        <div class="box-container">
            <a href="#" class="box">
                <i class="fas fa-code"></i>
                <div>
                    <h3>Development</h3>
                    <span>20 jobs</span>
                </div>
            </a>

            <a href="#" class="box">
                <i class="fas fa-code"></i>
                <div>
                    <h3>Designer</h3>
                    <span>500 jobs</span>
                </div>
            </a>

            <a href="#" class="box">
                <i class="fas fa-code"></i>
                <div>
                    <h3>Teacher</h3>
                    <span>1500 jobs</span>
                </div>
            </a>

            <a href="#" class="box">
                <i class="fas fa-code"></i>
                <div>
                    <h3>Service</h3>
                    <span>31 jobs</span>
                </div>
            </a>

            <a href="#" class="box">
                <i class="fas fa-code"></i>
                <div>
                    <h3>Engineer</h3>
                    <span>200 jobs</span>
                </div>
            </a>

            <a href="#" class="box">
                <i class="fas fa-code"></i>
                <div>
                    <h3>Finance</h3>
                    <span>80 jobs</span>
                </div>
            </a>

            <a href="#" class="box">
                <i class="fas fa-code"></i>
                <div>
                    <h3>Marketing</h3>
                    <span>20 jobs</span>
                </div>
            </a>

            <a href="#" class="box">
                <i class="fas fa-code"></i>
                <div>
                    <h3>Nurses</h3>
                    <span>100 jobs</span>
                </div>
            </a>
        </div>
    </section>
    <!--category section ends-->

    <!--job section starts-->

    <section class="jobs-container">
        <h1 class="heading">Latest Jobs</h1>

        <div class="box-container">

            <div class="box">
                <div class="company">
                    <img src="Image/fubiper.png" alt="">
                    <div>
                        <h3>IT infosys Co.</h3>
                        <span> 2 days ago</span>
                    </div>
                </div>
                <h3 class="job-title">Senior web developer</h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i> </p>
                <span>Yaoundé, Cameroon</span>
                <div class="tags">
                    <p><i class="fas fa-franc-cfa-sign"></i><span>10.000franc - 25.000francfa </span> </p>
                    <p><i class="fas fa-briefcase"></i> <span>part-time</span> </p>
                    <p><i class="fas fa-clock"></i> <span>day shift</span> </p>
                </div>
                <div class="flex-btn">
                    <a href="view_job.html" class="btn">view details</a>
                    <button type="submit" class="fas fa-heart" name="save"></button>
                </div>
            </div>

            <div class="box">
                <div class="company">
                    <img src="Image/fubiper.png" alt="">
                    <div>
                        <h3>Mass idea.</h3>
                        <span> 2 days ago</span>
                    </div>
                </div>
                <h3 class="job-title">PHP developer</h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i> </p>
                <span>Douala, cameroon</span>
                <div class="tags">
                    <p><i class="fas fa-franc-cfa-sign"></i><span>15.000franc cfa - 30.000franc cfa</span> </p>
                    <p><i class="fas fa-briefcase"></i> <span>part-time</span> </p>
                    <p><i class="fas fa-clock"></i> <span>day shift</span> </p>
                </div>
                <div class="flex-btn">
                    <a href="view_job.html" class="btn">view details</a>
                    <button type="submit" class="fas fa-heart" name="save"></button>
                </div>
            </div>

            <div class="box">
                <div class="company">
                    <img src="Image/fubiper.png" alt="">
                    <div>
                        <h3>IT Statics.</h3>
                        <span> 2 days ago</span>
                    </div>
                </div>
                <h3 class="job-title">Junior asistant</h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i> </p>
                <span>Buea, Camerron</span>
                <div class="tags">
                    <p><i class="fas fa-franc-cfa-sign"></i><span>15.000fran cfa - 25.000franc cfa</span> </p>
                    <p><i class="fas fa-briefcase"></i> <span>part-time</span> </p>
                    <p><i class="fas fa-clock"></i> <span>day shift</span> </p>
                </div>
                <div class="flex-btn">
                    <a href="view_job.html" class="btn">view details</a>
                    <button type="submit" class="fas fa-heart" name="save"></button>
                </div>
            </div>



            <div class="box">
                <div class="company">
                    <img src="Image/fubiper.png" alt="">
                    <div>
                        <h3>IT infosys</h3>
                        <span> 2 days ago</span>
                    </div>
                </div>
                <h3 class="job-title">Javascript developer</h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i> </p>
                <span>Edea, Cameroon</span>
                <div class="tags">
                    <p><i class="fas fa-franc-cfa-sign"></i><span>20.000franc cfa - 30.000franc cfa</span> </p>
                    <p><i class="fas fa-briefcase"></i> <span>part-time</span> </p>
                    <p><i class="fas fa-clock"></i> <span>day shift</span> </p>
                </div>
                <div class="flex-btn">
                    <a href="view_job.html" class="btn">view details</a>
                    <button type="submit" class="fas fa-heart" name="save"></button>
                </div>
            </div>

            <div class="box">
                <div class="company">
                    <img src="Image/fubiper.png" alt="">
                    <div>
                        <h3>All Media ltd</h3>
                        <span> 2 days ago</span>
                    </div>
                </div>
                <h3 class="job-title">Qualified Developer</h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i> </p>
                <span>Adamawa, Cameroon</span>
                <div class="tags">
                    <p><i class="fas fa-franc-cfa-sign"></i><span>15.000franc cfa - 20.000franc cfa</span> </p>
                    <p><i class="fas fa-briefcase"></i> <span>part-time</span> </p>
                    <p><i class="fas fa-clock"></i> <span>day shift</span> </p>
                </div>
                <div class="flex-btn">
                    <a href="view_job.html" class="btn">view details</a>
                    <button type="submit" class="fas fa-heart" name="save"></button>
                </div>
            </div>

            <div class="box">
                <div class="company">
                    <img src="Image/fubiper.png" alt="">
                    <div>
                        <h3>Software solutions</h3>
                        <span> 2 days ago</span>
                    </div>
                </div>
                <h3 class="job-title">Javascript Developer</h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i> </p>
                <span>Yaoundé, Cameroon</span>
                <div class="tags">
                    <p><i class="fas fa-franc-cfa-sign"></i><span>10.000franc cfa - 25.000franc cfa</span> </p>
                    <p><i class="fas fa-briefcase"></i> <span>part-time</span> </p>
                    <p><i class="fas fa-clock"></i> <span>day shift</span> </p>
                </div>
                <div class="flex-btn">
                    <a href="view_job.html" class="btn">view details</a>
                    <button type="submit" class="fas fa-heart" name="save"></button>
                </div>
            </div>

            <div class="box">
                <div class="company">
                    <img src="Image/fubiper.png" alt="">
                    <div>
                        <h3>IT World</h3>
                        <span> 2 days ago</span>
                    </div>
                </div>
                <h3 class="job-title">Senior web developer</h3>
                <p class="location"><i class="fas fa-map-marker-alt"></i> </p>
                <span>Kribi, Cameroon</span>
                <div class="tags">
                    <p><i class="fas fa-franc-cfa-sign"></i><span>10,000frs - 25,000frs</span> </p>
                    <p><i class="fas fa-briefcase"></i> <span>part-time</span> </p>
                    <p><i class="fas fa-clock"></i> <span>day shift</span> </p>
                </div>
                <div class="flex-btn">
                    <a href="view_job.html" class="btn">view details</a>
                    <button type="submit" class="fas fa-heart" name="save"></button>
                </div>
            </div>

        </div>

        <div style="text-align: center; margin-top: 2rem;">
            <a href="Job.html" class="btn">View all</a>
        </div>
    </section>
    <!--job section ends-->


    <!--search-->
    

    <!--filter box-->
    <div class="filter-box">
        <div class="filter-dropdown">
            <select class="filter-select" id="job-level" name="job-level">
                <option>JOB Level</option>
                <option>Entry</option>
                <option>Mid Senior</option>
                <option>Director</option>
            </select>
            <select class="filter-select" id="job-function" name="job-function">
                <option>JOB Function</option>
                <option>IT</option>
                <option>Management</option>
                <option>Education</option>
            </select>
            <select class="filter-select" id="employemnt" name="employemnt">
                <option>Employment Type</option>
                <option>Intership</option>
                <option>Part Time</option>
                <option>Full Time</option>
            </select>
            <select class="filter-select" id="Location" name="Location">
                <option>Locations</option>
                <option>Remote</option>
                <option>US</option>
                <option>UK</option>
            </select>
            <select class="filter-select" id="Education" name="education">
                <option>Education</option>
                <option>High School</option>
                <option>Bachlor degree</option>
                <option>master's degree</option>
            </select>
        </div>
        <div class="filter-chosen">
            <div class="chosen-card">
                Remote <i class="fas fa-times-circle"></i>
            </div>
            <div class="chosen-card">
                Full Time <i class="fas fa-times-circle"></i>
            </div>
            <div class="chosen-card">
                Financial Tech <i class="fas fa-times-circle"></i>
            </div>
            <div class="chosen-card">
                Entry Level <i class="fas fa-times-circle"></i>
            </div>
        </div>
    </div>

    <!--footer section starts-->

    <footer class="footer">

        <section class="grid">

            <div class="box">
                <h3>Quick links</h3>
                <a href="index.html"><i class="fas fa-angle-right"></i>Home </a>
                <a href="About.html"><i class="fas fa-angle-right"></i>about</a>
                <a href="Job.html"><i class="fas fa-angle-right"></i>all jobs</a>
                <a href="Contact.html"><i class="fas fa-angle-right"></i>contact us</a>
                <a href="#"><i class="fas fa-angle-right"></i>filter search</a>
            </div>

            <div class="box">
                <h3>Extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>account</a>
                <a href="Login.html"><i class="fas fa-angle-right"></i>login</a>
                <a href="register.html"><i class="fas fa-angle-right"></i>register</a>
                <a href="#"><i class="fas fa-angle-right"></i>post job</a>
                <a href="#"><i class="fas fa-angle-right"></i>dashboard</a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook"></i>Faceboook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
                <a href="#"><i class="fab fa-youtube"></i>Youtube</a>
            </div>
        </section>

        <div class="credit">&copy; copyright @2024 by <span>mrs. P-ella </span>| all rigths reserved</div>
    </footer>

    <!--footer setio ends-->

</body>
</html>