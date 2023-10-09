<!DOCTYPE html>
<html>
<head>
    <title>Nikhil Chaudhari</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/javascript" href="script.js">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/5a640b4ad7.js" crossorigin="anonymous"></script>
    <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/web-design-and-development-44/53/81-512.png">
    <style>
body {
    margin: 0px;
    font-family: sans-serif;
    font-size: 30px;
}

body::-webkit-scrollbar {
    display: none;
}



/* Body Header */

#body-header {
    height: 65vh;
    opacity: 0.8;
    background-image: url("https://hd.wallpaperswide.com/thumbs/laptop-t2.png");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    padding-top: 1.2rem;
}



/* Horizontal Lists */

.bars{
    color: white;
    margin: 0;
    margin-right: 5%;
    display: none;
}

.bars i {
    font-size: 2rem;
}

.dropdown-list{
    margin: 0;
    display: none;
    background-color: #828470;
    box-shadow: 0px 4px 8px 1px #535547;
}

.dropdown-list ul{
    margin: 0.2rem 0.2rem;
    text-align: left;
    padding: 0px 0.8rem;
}

.dropdown-menu:hover .dropdown-list{
    display: block;
    position: absolute;
    right: 3%;
}

.dropdown-list li{
    margin: 0.4rem 0px;
}

.no-list-style{
    list-style: none;
}

.no-list-style li {
    font-weight: 100;
    font-size: 0.9rem;
}

.no-list-style li a{
    list-style: none;
    color: white;
    text-decoration: none;
}

.horizontal-list {
    padding-left: 0px;
    margin: 0px;
}

.horizontal-list li {
    display: inline-block;
    margin: 0px 8px 8px 0px;
}


.nav-menu li a {
    transition: color 0.5s, border-bottom 4s;
}

.nav-menu li a:hover {
    color: lightgrey;
    border-bottom: 1px solid black;
}


/* Name and Social Icons*/

#name-social-container {
    margin-top: 20vh;
}

#my-name {
    font-size: 4rem;
    letter-spacing: 0.1rem;
    color: white;
    font-weight: 700;
    margin-bottom: 0.5rem;
    font-family: cursive;
}

.social-icons li a i {
    padding: 10px;
    font-size: 1.5rem;
    border-radius: 50%;
}

.social-icons li a i:hover {
    box-shadow: 0px 0px 6px 4px rgba(230, 196, 196, 0.3);
}



/*Section Classes*/

section {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-bottom: 20px;
}

section:nth-child(2n) {
    background-color: #9e9b9b29;
}

section:nth-child(2n + 1) {
    background-color: white;
}

.section-heading {
    width: auto;
    padding: 20px 10px 10px;
    font-weight: 400;
}

.section-heading span {
    font-size: 40px;
    color: #2857a4;
    display: inline-block;
    padding-top: 10px;
    margin-right: 0.5rem;
}



/*About Section*/

#about {
    height: auto;
    width: 100%;
    position: relative;
    margin-bottom: 30px;
}

#my-image {
    height: 12rem;
    width: 12rem;
    margin: auto;
    margin-top: -17vh;

}

#my-image img {
    height: 100%;
    width: 100%;
    border-radius: 50%;
    border: 3px solid white;
    box-shadow: 1px 1px 10px 2px lightgrey;
    background-color: rgb(231, 84, 84);
}

#about-para {
    padding: 10px;
    width: 70%;
    text-align: justify;
    color: grey;
    line-height: 28px;
    font-size: 1.1rem;
    margin: auto;
}



/*Skills Section*/

.skills-display {
    width: 75%;
    padding: 10px;
    margin-bottom: 30px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
}

.skill-progress {
    width: 11rem;
    height: 2.2rem;
    background-color: lightgrey;
    border-radius: 1rem;
    box-shadow: 1px 1px 2px 1px #b9b9b9 inset;
    margin: 25px;
    overflow: hidden;
}

.skill-progress > div {
    border-radius: 20px 0px 0px 20px;
    box-shadow: 1px 1px 5px 2px #989882;
}

.skill-name span {
    color: white;
    font-size: 1rem;
    margin-left: 10px;
    vertical-align: middle;
}



/* Work Experience */

.timeline {
    position: relative;
    width: 75%;
}

.timeline-box {
    padding: 5px;
    width: 40%;
    min-height: 150px;
    position: relative;
    left: 5%;
    text-align: right;
}

.timeline-box::after {
    content: '';
    position: absolute;
    width: 15px;
    height: 15px;
    background-color: lightgrey;
    top: 25%;
    border-radius: 50%;
    z-index: 1;
}

.timeline-box:nth-child(2n) {
    left: 53%;
}

.timeline-box:nth-child(2n+1)::after {
    right: -11.8%;
}

.timeline-box:nth-child(2n)::after {
    left: -9%;
}

.timeline-container {
    padding: 8px;
}

.timeline-logo {
    position: absolute;
    width: 50px;
    overflow: hidden;
}

.timeline-logo > img {
    width: 100%;
}

#timeline-divider {
    position: absolute;
    width: 0;
    top: 9%;
    left: 50%;
    border: 1px dashed #0096fa6b;
    height: 65%;
    color: #433E3F;
}

#timeline-divider .timeline-traveller {
    position: sticky;
    top: 135px;
    z-index: 2;
}

#timeline-divider i {
    transform: rotate(90deg);
    margin-top: -35px;
    display: block;
    color: #2857a4;
}

.experience-designation {
    font-size: 1.4rem;
}

.experience-company-name {
    margin: 5px 0 0;
    color: #eb822d;
    font-weight: 400;
    font-size: 1.2rem;
}

.experience-duration {
    color: #9e9b9b;
    font-weight: 100;
    color: grey;
    font-size: 1rem;
}

.experience-description {
    font-size: 14px;
    padding: 2px;
    color: grey;
    line-height: 20px;
}






/* Portfolio Section */

#portfolio-container {
    box-sizing: border-box;
    display: flex;
    flex-wrap: wrap;
    padding: 0 50px;
    margin-bottom: 20px;
    justify-content: space-around;
    font-family: cursive;
}

.portfolio-image-container {
    max-width: 300px;
    overflow: hidden;
    margin: 30px;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
}

.portfolio-image-container img {
    width: 100%;
    height: 100%;
}
.portfolio-image-container p{
    font-size: large;

}

.portfolio-details {
    transition: all 0.5s ease-in-out;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    color: transparent;
    text-align: center;
    padding: 10px;
}

.portfolio-image-container:hover {
    box-shadow: 0 0 20px #74ADC8;
}

.portfolio-image-container:hover .portfolio-details {
    background-color: #80808078;
    color: white;
}

/* Challenges  */

#challenges-container {
    box-sizing: border-box;
    display: flex;
    flex-wrap: wrap;
    padding: 0 50px;
    margin-bottom: 20px;
    justify-content: space-around;
    font-family: cursive;
}

.challenges-image-container {
    max-width: 1000px;
    overflow: hidden;
    margin: 30px;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
}

.challenges-image-container img {
    width: 600px;
    height: 150%;
}
.challenges-image-container p{
    font-size: large;

}

.challenges-details {
    transition: all 0.5s ease-in-out;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    color: transparent;
    text-align: center;
    padding: 10px;
}

.challenges-image-container:hover {
    box-shadow: 0 0 20px #74ADC8;
}

.challenges-image-container:hover .challenges-details {
    background-color: #80808078;
    color: white;
}


/* Achievements */

#achievementss-container {
    box-sizing: border-box;
    display: flex;
    flex-wrap: wrap;
    padding: 0 50px;
    margin-bottom: 20px;
    justify-content: space-around;
    font-family: cursive;
}

.achievements-image-container {
    max-width: 1000px;
    overflow: hidden;
    margin: 30px;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
}

.achievements-image-container img {
    width: 600px;
    height: 150%;
    align: right;
}
.achievements-image-container p{
    font-size: large;

}

.achievements-details {
    transition: all 0.5s ease-in-out;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    color: transparent;
    text-align: center;
    padding: 10px;
}

.achievements-image-container:hover {
    box-shadow: 0 0 20px #74ADC8;
}

.achievements-image-container:hover .achivements-details {
    background-color: #80808078;
    color: white;
}




/* Contact Form */

#contact {
    background-color: #0abcf9;
    background-image: linear-gradient(50deg, #2857a4 0%, #403066 74%);
    color: white;
    padding-bottom: 40px;
}

#contact h1,
#contact h1 span {
    color: white;
}

#contact-form {
    margin-left: 20%;
}

#contact-container {
    display: flex;
}

#my-details-container {
    width: 35%;
    margin-left: 6%;
}

#my-details-container h3 {
    color: white;
    font-weight: 550;
    font-size: 1.2rem;
}

#contact-form-container {
    width: 50%;
}

#my-details-container p {
    color: #d9dcdd;
    font-size: 0.9rem;
}

.my-details-info-container {
    margin-bottom: 20px;
    color: #d9dcdd;
    font-size: 1rem;
}

.my-details-info-container span {
    margin-left: 0.4rem;
}

.my-details-info-container i {
    color: white;
}

.my-details-icon {
    width: 1rem;
    height: 1rem;
    vertical-align: bottom;
    margin-right: 0.5rem;
}


#contact-form input,
textarea {
    max-width: 90%;
    margin: 15px;
    padding: 4px 10px;
    border: 0px solid transparent;
    border-bottom: 2px solid white;
    color: #d9dcdd;
    background: transparent;
    width: 90%;
    line-height: 1.6;
    font-size: 1.05rem;
}

#contact-form button[type="submit"] {
    background: transparent;
    font-size: 0.95rem;
    border: 2px solid white;
    margin-top: 5%;
    margin-left: 35%;
    border-radius: 2px;
    color: white;
    font-family: sans-serif;
    font-weight: 700;
    letter-spacing: 0.046875em;
    line-height: 1;
    padding: 0.8em 0.8em 0.78em;
    text-transform: uppercase;
}

#contact-form button:hover {
    background: white;
    color: #13386fe0;
}

#contact .social-icons li a i {
    font-size: 1.2rem;
    margin: 40px 10px 10px;
    padding: 10px 14px 20px 10px;

}

input:focus,
select:focus,
textarea:focus,
button:focus {
    outline: none;
}

/* Common Text Align Classes */

.text-right{
    text-align: right;
}

.text-center {
    text-align: center;
}

.text-justify {
    text-align: justify;
}

/* Common Margin Classes */

.m0 {
    margin: 0;
}

.mb75px {
    margin-bottom: 75px;
}

.mb50px {
    margin-bottom: 50px;
}



/*common color classes */

.text-highlight {
    color: #2857a4;
    font-weight: 600;

}


/* setting background-color */

.m-blue {
    color: #2857a4;
}

.mb-blue {
    background-color: #2857a4;
}

.mb-orange {
    background-color: #ec4d1c;
}

.mb-teal {
    background-color: #0b8176;
}

.mb-light-purple {
    background-color: #93738c;
}



/*Percentage Classes */

.eighty-five-percent {
    height: inherit;
    width: 85%;
}

.eighty-percent {
    height: inherit;
    width: 80%;
}

.fifty-percent {
    height: inherit;
    width: 50%;
}


@media only screen and (max-width: 572px) {

    .timeline-box {
        width: 100%;
        left: 10% !important;
    }

    .bars {
        display: block;
    }


    .nav-menu {
        display: none;
    }
}



@media only screen and (max-width: 768px) {


    .timeline-box {
        width: 90%;
        left: 10% !important;
    }

    .timeline-box::after {
        left: -9.3% !important;
    }

    #timeline-divider {
        top: 10%;
        left: 2%;
    }

    #contact-form {
        margin-left: 0%;
    }

    #contact-container {
        flex-wrap: wrap;
    }

    #my-details-container {
        width: 80%;
        margin: 10%;
    }

    #contact-form-container {
        width: 80%;
        margin: 10%;
    }

}


    </Style>
</head>
<body>

    <header id="body-header">
        <nav>

            <div class = "dropdown-menu text-right">
                <div class="bars">
                    <i class="fas fa-bars"></i>
                </div>
                <div class ="dropdown-list nav-menu">
                    <ul class = "no-list-style">
                        <li class="nav-menu">
                            <a href="#" value="home"> Home </a>
                        </li>
                        <li class="nav-menu">
                            <a href="#about" value="about"> About </a>
                        </li>
                        <li class="nav-menu">
                            <a href="#skills" value="skills"> Skills </a>
                        </li>
                        <li class="nav-menu">
                            <a href="#experience" value="experience">Experience</a>
                        </li>
                        <li class="nav-menu">
                            <a href="#education" value="education">Education</a>
                        </li>
                        <li class="nav-menu">
                            <a href="#portfolio" value="portfolio">Portfolio</a>
                        </li>
                        <li class="nav-menu">
                            <a href="#gallery" value="gallery">Challenges</a>
                        </li>
                        <li class="nav-menu">
                            <a href="#gallery" value="gallery">Acievements</a>
                        </li>
                        <li class="nav-menu">
                            <a href="#gallery" value="gallery">Gallery</a>
                        </li>
                        <li class="nav-menu">
                            <a href="#contact" value="contact">Contact</a>
                        </li>
                    </ul>
                    </div>

             </div>

            <ul class="no-list-style horizontal-list text-center nav-menu">
                <li>
                    <a href="#"> Home </a>
                </li>
                <li>
                    <a href="#about"> About </a>
                </li>
                <li>
                    <a href="#skills"> Skills </a>
                </li>
                <li>
                    <a href="#experience">Experience</a>
                </li>
                <li>
                    <a href="#education">Education</a>
                </li>
                <li>
                    <a href="#portfolio">Portfolio</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>

        </nav>

        <div id="name-social-container">
            <div class="text-center">
                <h1 id="my-name">Nikhil Chaudhari</h1>
            </div>
            <div>
                <ul class="no-list-style horizontal-list text-center social-icons">
                    <li>
                        <a href="https://www.linkedin.com/in/nikhil-chaudhari-510771192">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/nikhil-3112">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </header>
    <main>

        <section id="about">
            <!-- <div id="my-image">
                <img src="C:\xampp\htdocs\imnikhil\resources\views\id.png.png">
            </div> -->

            <div id="about-para">

                <p>
                    Motivated Internship Student working toward <span class="text-highlight">Engineering</span> degree. Hardworking and resourceful
                    individual commended for first-rate collaboration, organizational and time management abilities. Committed to developing career path and expanding work experience. Strong knowledge of
                    <span class="text-highlight">C,C++,Java,HTML,CSS,Javascript.</span>
                </p>

            </div>

        </section>



        <section id="skills">
            <h1 class="section-heading mb75px ">
                <span>
                    <i class="fas fa-chalkboard-teacher"></i>
                </span>
                <span> SKILLS </span>
            </h1>

            <div class="skills-display">

                <div class="skill-progress">
                    <div class="fifty-percent mb-blue">
                        <div class="skill-name">
                            <span> C++ </span>
                        </div>
                    </div>
                </div>
                <div class="skill-progress">
                    <div class="eighty-five-percent mb-orange">
                        <div class="skill-name">
                            <span> HTML </span>
                        </div>
                    </div>
                </div>
                <div class="skill-progress">
                    <div class="eighty-percent mb-light-purple">
                        <div class="skill-name">
                            <span> CSS </span>
                        </div>
                    </div>
                </div>
                <div class="skill-progress">
                    <div class="fifty-percent mb-teal">
                        <div class="skill-name">
                            <span> Javascript </span>
                        </div>
                    </div>
                </div>
                <div class="skill-progress">
                    <div class="fifty-percent mb-blue">
                        <div class="skill-name">
                            <span> NodeJs </span>
                        </div>
                    </div>
                </div>
                <div class="skill-progress">
                    <div class="eighty-percent mb-light-purple">
                        <div class="skill-name">
                            <span> ReactJs </span>
                        </div>
                    </div>
                </div>
                <div class="skill-progress">
                    <div class="fifty-percent mb-blue">
                        <div class="skill-name">
                            <span> Java </span>
                        </div>
                    </div>

            </div>

        </section>

        <section id="experience">

            <h1 class="section-heading mb75px">
                <span>
                    <i class="fas fa-briefcase"></i>
                </span>
                <span> Projects And Work Experience </span>
            </h1>

            <div class="timeline">

                <div class="timeline-box ">
                    <div class="timeline-container">
                        <div class="timeline-logo">
                            <!-- <img src="https://ninjasfiles.s3.amazonaws.com/asset_0000000000000030_1550710829_ninjasicon.png"> -->
                            <i class="fa-solid fa-diagram-project"></i>
                        </div>
                        <h3 class="experience-designation  m0 m-blue"> Graduation Project</h3>
                        <h4 class="experience-company-name"> Personality Prediction using AI </h4>
                        <h5 class="experience-duration m0"> Jun 2021 - Apr 2022 </h5>

                        <p class="experience-description text-justify"> The project is based on identifying the personality of an individual using machine learning algorithms and big 5 models. The personality of a human plays a major role in his personal and professional life. Nowadays, many organizations have also started shortlisting candidates based on their personality as this increases the efficiency of the work because the person is working on what he is good at than what the candidate is forced to do.
                        </p>
                    </div>
                </div>

                <div class="timeline-box right ">
                    <div class="timeline-container">
                        <div class="timeline-logo">
                            <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.verzeo.com%2F&psig=AOvVaw3CxO7n85szm1h9tS0aL-N6&ust=1696863553504000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCPDo-73b5oEDFQAAAAAdAAAAABAE.png">
                        </div>
                        <h3 class="experience-designation  m0 m-blue"> Intern </h3>
                        <h4 class="experience-company-name"> Verzeo.ltd </h4>
                        <h5 class="experience-duration m0"> Apr 2021 - Jun 2021 </h5>
                        <p class="experience-description text-justify">Machine Learning with Python </p>
                    </div>
                </div>

                <div class="timeline-box left ">
                    <div class="timeline-container">
                        <div class="timeline-logo">
                            <img src="https://ninjasfiles.s3.amazonaws.com/asset_0000000000000030_1550710829_ninjasicon.png">
                        </div>
                        <h3 class="experience-designation m0 m-blue"> Internship Student </h3>
                        <h4 class="experience-company-name"> Coding Ninjas </h4>
                        <h5 class="experience-duration m0"> Feb 2022 - Present </h5>

                        <p class="experience-description text-justify"> Internship Student doing course in Full Stack Web Development learning DSA,Frontend And Backend Technologoies </p>
                    </div>
                </div>

                <div class="timeline-box left ">
                    <div class="timeline-container">
                        <div class="timeline-logo">
                            <img src="https://ww2.freelogovectors.net/wp-content/uploads/2023/09/byjus_logo-freelogovectors.net_.png?lossy=1&resize=640%2C480&ssl=1.png">
                        </div>
                        <h3 class="experience-designation m0 m-blue"> BDA </h3>
                        <h4 class="experience-company-name"> Byju's - The Learning App </h4>
                        <h5 class="experience-duration m0"> Jan 2023 - Present </h5>

                        <p class="experience-description text-justify">•    Excellent verbal and written communication skills to effectively present and pitch products or services to potential clients, as well as to collaborate with internal teams and stakeholders.
•	Proficiency in identifying and prospecting potential leads through various channels, such as cold calling, email campaigns, social media, and networking events.
•	Experience in developing and executing strategic business plans to drive revenue growth, expand market share, and penetrate new markets.
•	Ability to deliver compelling and persuasive presentations to clients, showcasing the value proposition of products or services and addressing client concerns effectively.
•	Strong collaboration skills to work effectively with cross-functional teams, including marketing, operations, and product development, to ensure seamless execution of business strategies.
•	Proficiency in analysing sales data, market trends, and customer feedback to identify areas for improvement, optimize sales strategies, and drive business performance.
 </p>
                    </div>
                </div>

                <div id="timeline-divider">
                    <div class="timeline-traveller">
                        <div>
                            <i class="fas fa-plane"></i>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <section id="education">

            <h1 class="section-heading mb75px">
                <span>
                    <i class="fas fa-graduation-cap"></i>
                </span>
                <span> Education </span>
            </h1>

            <div class="timeline">

                <div class="timeline-box left ">
                    <div class="timeline-container">
                        <div class="timeline-logo">
                            <!-- <img src="https://ninjasfiles.s3.amazonaws.com/asset_0000000000000032_1550746413_iiitd_logo.png"> -->
                            <i class="fa-solid fa-school"></i>
                        </div>
                        <h3 class="experience-designation  m0 m-blue"> SSC </h3>
                        <h4 class="experience-company-name "> SBV PCMC</h4>
                        <h5 class="experience-duration m0"> Jun 2014 - Mar 2016 </h5>

                        <p class="experience-description"> GPA:91.60% </p>
                    </div>
                </div>

                <div class="timeline-box right ">
                    <div class="timeline-container">
                        <div class="timeline-logo">
                            <!-- <img src="https://ninjasfiles.s3.amazonaws.com/asset_0000000000000032_1550746413_iiitd_logo.png"> -->
                            <i class="fa-solid fa-building-columns"></i>
                        </div>
                        <h3 class="experience-designation  m0 m-blue"> HSC </h3>
                        <h4 class="experience-company-name "> SBV PCMC </h4>
                        <h5 class="experience-duration m0"> Jun 2016 - Mar 2018 </h5>
                        <p class="experience-description "> PCMB GPA:80.77% </p>
                    </div>
                </div>

                <div class="timeline-box left ">
                    <div class="timeline-container">
                        <div class="timeline-logo">
                            <!-- <img src="https://ninjasfiles.s3.amazonaws.com/asset_0000000000000032_1550746413_iiitd_logo.png"> -->
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h3 class="experience-designation  m0 m-blue"> Bachelor's Of Engineering </h3>
                        <h4 class="experience-company-name "> PVG's COET,Pune </h4>
                        <h5 class="experience-duration m0"> Aug 2018 - Jun 2022 </h5>

                        <p class="experience-description "> Information Technology GPA:68% </p>
                    </div>
                </div>

                <div id="timeline-divider">
                    <div class="timeline-traveller">
                        <div>
                            <i class="fas fa-car-side"></i>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <section id="portfolio">
            <h1 class="section-heading mb75px">
                <span>
                    <i class="fas fa-th-list"></i>
                </span>
                <span> Portfolio </span>
            </h1>

            <div id="portfolio-container">

                <div class="portfolio-image-container">
                    <img src="https://ninjasfiles.s3.amazonaws.com/asset_0000000000000025_1550237330_codezen_2.png">
                    <div class="portfolio-details">
                        <p>
                            Personality Prediction using Artificial Intelligance:
                            <i>The project is based on identifying the personality of an individual using machine learning algorithms and big 5 models.</i>
                        </p>
                    </div>

                </div>
                <div class="portfolio-image-container">
                    <img src="https://ninjasfiles.s3.amazonaws.com/asset_0000000000000025_1550237330_codezen_2.png">
                    <div class="portfolio-details">
                        <p>
                           To Do List:
                           <i>Frontend project using HTML,CSS, Javascript</i>
                        </p>
                    </div>

                </div>
                <!-- <div class="portfolio-image-container">
                    <img src="https://ninjasfiles.s3.amazonaws.com/asset_0000000000000025_1550237330_codezen_2.png">
                    <div class="portfolio-details">
                        <p>
                            Write here basic details about the project.
                        </p>
                    </div>

                </div>
                <div class="portfolio-image-container">
                    <img src="https://ninjasfiles.s3.amazonaws.com/asset_0000000000000024_1550237299_codezen.png">
                    <div class="portfolio-details">
                        <p>
                            Write here basic details about the project.
                        </p>
                    </div>

                </div>
                <div class="portfolio-image-container">
                    <img src="https://ninjasfiles.s3.amazonaws.com/asset_0000000000000024_1550237299_codezen.png">
                    <div class="portfolio-details">
                        <p>
                            Write here basic details about the project.
                        </p>
                    </div>

                </div>
                <div class="portfolio-image-container">
                    <img src="https://ninjasfiles.s3.amazonaws.com/asset_0000000000000024_1550237299_codezen.png">
                    <div class="portfolio-details">
                        <p>
                            Write here basic details about the project.
                        </p>
                    </div>

                </div> -->

            </div>
        </section>

        <section id="challenges">
            <h1 class="section-heading mb75px">
                <span>
                    <i class="fas fa-th-list"></i>
                </span>
                <span> Challenges </span>
            </h1>


                <div class="challenges-image-container" Align="right">
                    <img src="https://www.pullrequest.com/blog/using-code-challenges-for-interviews/images/technical-interview-code-challenges.jpg">

                </div>

        </section>


        <section id="achievements">
            <h1 class="section-heading mb75px">
                <span>
                    <i class="fas fa-th-list"></i>
                </span>
                <span> Achievements </span>
            </h1>


                <div class="achievements-image-container" Align="right">
                    <img src="https://www.callcentrehelper.com/images/stories/2021/03/mountain-top-celebration-760.jpg">

                </div>

        </section>

        <section id="contact">
            <h1 class="section-heading mb50px">
                <span>
                    <i class="far fa-address-card"></i>
                </span>
                <span> Contact </span>
            </h1>
            <div id="contact-container">

                <div id="contact-form-container">
                    <form id="contact-form">
                        <input id="input-name" name="name" type="text" placeholder="Your Name">
                        <input id="input-email" name="input-email" type="text" required placeholder="Your Email">
                        <textarea id="input-message" name="input-message" rows="2" cols=40 placeholder="Message"></textarea>
                        <button class="sub-btn" type="submit">SEND MESSAGE</button>
                    </form>
                </div>
                <div id="my-details-container">

                    <h3> Get In touch </h3>


                    <h3> My Address </h3>
                    <div class="my-details-info-container">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Pune, India</span>
                    </div>
                    <div class="my-details-info-container">
                        <i class="fas fa-mobile-alt"></i>
                        <span>7387156597</span>
                    </div>
                    <div class="my-details-info-container">
                        <i class="far fa-envelope"></i>
                        <span>nikhil.l.c31@gmail.com</span>
                    </div>
                </div>
            </div>

            <div class="text-center social-icons">

                <ul class="no-list-style horizontal-list">

                    <li>
                        <a href="https://www.linkedin.com/in/nikhil-chaudhari-510771192">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/nikhil-3112">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#" target="_blank">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>


                </ul>
            </div>
        </section>

    </main>
<script>
var click = document.getElementByClassName("nav-menu");
var currenPosition = 0;
var targetPosition = 0;




var scrollInterval =
   navmenu.addEventListener(click,function(){
       var value = this.getAttribute("value")

       if(value=="home")
           targetPosition = 50;
       else if(value=="about")
           targetPositon = 100;
        else if(value=="skills")
           targetPositon = 100
        else if(value=="experience")
           targetPositon = 100;
        else if(value=="education")
           targetPositon = 100;
        else if(value=="portfolio")
           targetPositon = 100;
        else if(value=="contact")
           targetPositon = 100;

       if(currentPosition>=targetPosition){
            clearInterval(scrollInterval);
            return;
        }

        window.scrollBy(0,targetPosition);


   })
</Script>
</body>
</html>
