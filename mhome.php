<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pics/logo.png">
    <link rel="stylesheet" href="home.css">
    <title>Health Care System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="https://kit.fontawesome.com/aed89df169.js" crossorigin="anonymous"></script>
    <script>
        function scrollToMisvis() {
  
            const misvis = document.querySelector('.misvis');
        
            if (misvis) {
         
                misvis.scrollIntoView({ behavior: 'smooth' });
            }
        }
        
    </script>
</head>
<body>
    <div class="landing">
        <nav>
            <img src="pics/logo.png">
            <ul>
                <li><a href="mhome.php">Home</a></li>
                <li><a href="#">Doctor</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="patientsign.up">Appointment</a></li>
                <li><a href="patientview">Check Status</a></li>
                <li><a href="contact.php">Contacts</a></li>
            </ul>
            <button class="Btn">
  
                <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
                
                <div class="text">Logout</div>
              </button>
        </nav>
        <h1>Your Health Matters</h1>
    </div>
        
 
    <main>
        <div class="about">

            <div class="info">
                <h4>Health Care System</h4>

                <p>We will always be responsive to the pressing needs of the time. From a community needs point of view, it is through interaction and engagement with the communities we serve that we will be nimble to meet those needs…for it is in giving that we receive.</p>
                <a href="#missionSection" onclick="scrollToMisvis()">WE'RE ON A MISSION</a>
            </div>

        </div>
        <section>
            <div class="box">
                <i class="fa-solid fa-user-doctor" style="color: #ffffff;"></i>
                <div class="content">
                    <p>Providers</p>
                    <h2>Find A Doctor</h2>
                    <a href="#">Find A Doctor</a>
                </div>
            </div>
            <div class="box">
                <i class="fa-regular fa-calendar-days" style="color: #ffffff;"></i>
                <div class="content">
                    <p>Appointment</p>
                    <h2>Schedule Now</h2>
                    <a href="patientsignup.php">Find a Schedule</a>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-stethoscope" style="color: #ffffff;"></i>
                <div class="content">
                    <p>About Us</p>
                    <h2>Health Services</h2>               
                    <a href="services.html">Our Services</a>
                </div>
            </div>
        </section>


        <div class="misvis" id="missionSection">
            <div class="mission">
                <h3>Mission</h3>
                <p>"To deliver excellence in healthcare, aiming to provide high-quality, compassionate, and accessible medical services to all citizens. We promote the endeavor to improve the health of each individual through education, research, and innovation."</p>
            </div>
            <div class="vision">
                <h3>Vission</h3>
                <p>"To be a model of integrity and excellence in the healthcare sector, advocating for equality and the advancement of health for a more meaningful life. We aspire to a healthy society, filled with happiness, and united in the pursuit of the importance of health for all."</p>
            </div>
        </div>
    </main>
    <footer>
        <div class="icons">
            <a href="https://www.facebook.com/Eeeyyyssss/" target="_blank"><i class="fa-brands fa-facebook" style="color: #0081fa;"></i></a>
            <a href="#"><i class="fa-solid fa-envelope" style="color: #0081fa;"></i></a>
            <a href="https://twitter.com/acepadilla_" target="_blank"><i class="fa-brands fa-x-twitter" style="color: #0081fa;"></i></a>
            <a href="https://www.instagram.com/ace_.padilla/?next=%2F" target="_blank"><i class="fa-brands fa-instagram" style="color: #0081fa;"></i></a>
        </div>
        <p>All Rights Reserved ©AcePadilla&RomarkBayan2023</p>
    </footer>
   
        
</body>
</html>