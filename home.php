<!DOCTYPE html>
<?php
    include 'inc/core.php';
    include 'lay/header.php';
?>
<title>
    RISE 2020
</title>
<div class="q-popup-wrap">
    <div class="q-popup-back" onclick="popUpClose()">
    </div>
    <div class="q-popup-wrap-wrap">
        <div class="q-popup">
            <i class="far fa-times q-popup-close" onclick="popUpClose()"></i>
            <div class="q-popup-title">
                <span class="q-heading">
                    
                </span>
                <br>
                <div class="q-popup-subtitle">

                </div>
            </div>
            <br>
            <div class="q-popup-content">

            </div>
        </div>
    </div>
    
</div>
<div class="q-landing" id="home">
    <div class="q-landing-cont">
        <span class="q-landing-sub">
            Navrachana School Sama proudly presents the second season of
        </span>
        <br>
        <br>
        <img src="med/Asset_2n.png" width="300px">
        <br>
        <span class="q-landing-sub">
            6th February 2021
        </span>
    </div>
    <div class="q-main-cont">
        <div class="q-white-boi">
        
        </div>
    </div>
</div>
<div class="q-white-cont">
    <center>
        <div class="q-heading" style="width: 100%;">
            Gear Up!
        </div>
        We are waiting for you to RISE up!
    </center>
    <br><br>
    <div class="q-align">
        <div>
            <img src="med/RISE Website L.png" width="100%">
            
        </div>
        
    </div> 
    <br>
    <br>
    <br>
    <br>
    <center>
        <div style="display:inline-block;margin:10px;">
            <div class="q-heading" style="width: 100%;">
                Brochure
            </div>
            <a class="q-brochure-button" href="brochure_.pdf">
                View Brochure
            </a>
        </div>
        <div style="display:inline-block;margin:10px;">
            <div class="q-heading" style="width: 100%;">
                Checklist
            </div>
            <a class="q-brochure-button" href="med/checklist.jpg">
                View Checklist
            </a>
        </div>
        <div style="display:inline-block;margin:10px;">
            <div class="q-heading" style="width: 100%;">
                Submissions 
            </div>
            <a class="q-brochure-button" href="https://wakelet.com/@RISE_2020">
                View Submissions
            </a>
        </div>
    </center>
    <br>
    <br>
    <br>
    <br>
    <div class="q-align">
        <div class="q-align-p p1" style="margin:35px;">
            <img src="med/Asset_12x.png" width="100%" >
        </div>
        <div class="q-align-p p2">
            <div class="q-heading">
                RISE 2020
            </div>
            The world is full of thoughts flying past us and millions of words being said. The important question to ask is -
            <br>
            <b>
                “Are we listening?”
            </b>
            <br><br>
            Many voices that can help the earth attain a sustainable future go unheard, simply because their words get lost in the frenzy of trivial talk. For such voices, <b>RISE IS BACK!</b>
            <br>
            Do you want to step up and take action for a better, more sustainable society?<br>
            <b>
                Then RISE to Infinity and Beyond!
            </b>
        </div>
    </div>    
    <br>
    <br>
    <br>
    <br>

    <div class="q-align">
        <div>
            <center>
            <div class="q-heading">
                RISE 2020 Goes International
            </div>
            
            <div class="q-flags">
                <span class="flag-icon flag-icon-in"></span>
            </div>
            <div class="q-flags">
                <span class="flag-icon flag-icon-ro"></span>
            </div>
            <div class="q-flags">
                <span class="flag-icon flag-icon-ae"></span>
            </div>
            <div class="q-flags">
                <span class="flag-icon flag-icon-us"></span>
            </div>
            <div class="q-flags">
                <span class="flag-icon flag-icon-mx"></span>
            </div>
            <div class="q-flags">
                <span class="flag-icon flag-icon-my"></span>
            </div>
            <div class="q-flags">
                <span class="flag-icon flag-icon-kw"></span>
            </div>
            </center>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="q-carousel-wrap">
        <center>
            <div class="q-heading">
                Moments from RISE 2019
            </div>
        </center>
        <div class="q-carousel-slider">
            <?php
            $dir = "med/pics/*";
            $images = glob( $dir );
            $x = 0;
            foreach( $images as $image ){
                
            ?>
            <div class="q-carousel-slide <?php if($x == 0){echo 'sel';}?>" style="background: url('<?php echo $image;?>');background-position:center;background-size: cover;">

            </div>
            <?php
            $x++;
            }
            ?>
            
        </div>
    </div>
    <br>
    <br>
    <center>
        <div class="q-carousel-button" onclick="changeSlide(currentSlide-1);slideLock=true;">
            <i class="fal fa-chevron-left"></i>
        </div>
        <div class="q-carousel-button" onclick="changeSlide(currentSlide+1);slideLock=true;">
            <i class="fal fa-chevron-right"></i>
        </div>
    </center>
    <!--<div class="q-register-poke">
        <a href="register">

        </a>
    </div>-->    
    <div class="q-event-cont" id="events">
        <div class="q-heading" style='color:white;padding-top:50vh;text-align: center;'>
            Categories
        </div>
        <div class="q-event-flex-wrap">
            <a class="q-event-flex" onclick="popUp(0)">
                <div class="q-event-flex-in">
                    <i class="fal fa-trees"></i>
                </div>
                <div class="q-event-flex-info">
                    <b>Recreating Eden</b>
                    <br>
                    <small>
                        Env. Conservation
                    </small>
                </div>
            </a>
            <a class="q-event-flex" onclick="popUp(1)">
                <div class="q-event-flex-in">
                    <i class="fal fa-users"></i>
                </div>
                <div class="q-event-flex-info">
                    <b>Finding Arcadia</b>
                    <br>
                    <small>
                        Social Upliftment
                    </small>
                </div>
            </a>
            <a class="q-event-flex" onclick="popUp(2)">
                <div class="q-event-flex-in">
                    <i class="fal fa-atom"></i>
                </div>
                <div class="q-event-flex-info">
                    <b>Building Scientia</b>
                    <br>
                    <small>
                        Scientific Innovations
                    </small>
                </div>
            </a>
            <a class="q-event-flex" onclick="popUp(3)">
                <div class="q-event-flex-in">
                    <i class="fal fa-head-side-brain"></i>
                </div>
                <div class="q-event-flex-info">
                    <b>Achieving Nirvana</b>
                    <br>
                    <small>
                        Mental Health
                    </small>
                </div>
            </a>
            <a class="q-event-flex" onclick="popUp(4)">
                <div class="q-event-flex-in">
                    <i class="fal fa-cube"></i>
                </div>
                <div class="q-event-flex-info">
                    <b>Crafting Aether</b>
                    <br>
                    <small>
                        Gaming for a Cause
                    </small>
                </div>
            </a>
        </div>
        <div class="q-event-bottom">
            
        </div>
    </div>
    <center>
        <br>
        <br>
        <br>
        <div class="q-letter">
            <div class="q-user-circle two" style="background: url('med/pp2.jpeg');background-position: top;background-size: cover;top: -80px; left: -80px;">
    
            </div>
            <div class="q-letter-cont">
                <br>
                <br>
                <br>
                <div class="q-heading">
                    From the Principal's Desk
                </div>
                Greetings to one and all!
                <br>
                <br>
                It is my privilege and pleasure on behalf of Navrachana School, Sama to welcome you to this second edition of Navrachana’s very own Design Thinking Competition, RISE 2020. <br><br>
                RISE 2020 is a student-led event that has at its heart the idea of promoting sustainable development and design thinking. It aims to provide a platform to young and talented student leaders to identify and solve problems around them that they feel most passionate about, in their own unique manner. <br><br>
                After the stupendous success of the first season of the competition at the city level, we have decided  to open RISE up for wider participation because we believe that this is an excellent platform for students to learn from one another and join forces for creating a movement for sustainable development, which is the need of the hour.<br><br>
                I am sure that RISE 2020 will challenge your creativity, create excitement and inspire you to think out of the box to find simple solutions for problems you strongly feel about.  So, prepare yourself to be challenged, excited and inspired.<br><br>
                Looking forward to see the best in you at this event!<br><br>
                Warm Regards<br>
                Suprabha Menon<br>
                Principal<br>
                Navrachana School, Sama<br>
                Vadodara


            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="q-letter">
            <div class="q-user-circle" style="background: url('med/pp.jpg');background-position: top;background-size: cover;top: -80px; right: -80px;">
    
            </div>
            <div class="q-letter-cont">
                <div class="q-heading">
                    From the Vice Principal's Desk
                </div>
                Welcome to the buzzing hub of RISE 2020!
                <br>
                <Br>
                This is the second season of RISE, and we take great pleasure to have you step onward with us on this beautiful journey! Design Thinking is a mindset and a process that empowers young minds with the ability to think critically and creatively. One may even define design thinking as the belief that all problems, even the intractable ones such as poverty, disease, and inequality, are solvable.<br><br>
                Navrachana School, Sama, has indigenized this process to create the RISE Platform, that hinges on the belief that we as students and teachers can surely make a difference, as it gives us an intentional process to design relevant solutions to common or complex problems and make a positive impact.<br><br>
                This year we have added a new dimension to it by adding Minecraft! It may have stemmed from the concepts of  ‘Gaming for a Cause’, or ‘Tech for Good’, or we may have a new nomenclature, but the bottom-line remains that leveraging technology to find solutions is definitely the way forward! Come join us in this crusade where Technology is optimized as an enabler of social impact initiatives while building communities of young people whose collective passion and commitment have the potential for real social change.<br><br>
                Come! Let Us Find the Hero Within Us! <br><Br>
                Event Convener<br>
                Kashmira Jaiswal<br>
                Vice Principal <br>
                Navrachana School, Sama<br>
                Vadodara<br>

            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="q-heading">
            Mentors From Around The World
        </div>
        <br>
        <br>
        <div class="mentor-circle" onclick="popUp(5)">
            <div class="mentor-circle-img" style="background: url('med/mentors/DreyMartone.jpg');background-size: cover;background-position: center;">

            </div>
            <div class="mentor-circle-name">
                Dr. Drey Martone
            </div>
        </div>
        <div class="mentor-circle" onclick="popUp(6)">
            <div class="mentor-circle-img" style="background: url('med/mentors/mohana.png');background-size: cover;background-position: center;">
            
            </div>
            <div class="mentor-circle-name">
                Mr. Mohana Ram Murugiah
            </div>
        </div>
        <div class="mentor-circle" onclick="popUp(7)">
            <div class="mentor-circle-img" style="background: url('med/mentors/Sandra_ji_2.jpeg');background-size: cover;background-position: center;">
            
            </div>
            <div class="mentor-circle-name">
                Dr. Sandra Jara
            </div>
        </div>
        <div class="mentor-circle" onclick="popUp(8)">
            <div class="mentor-circle-img" style="background: url('med/mentors/Kevin_3.jpg');background-size: cover;background-position: center;">
            
            </div>
            <div class="mentor-circle-name">
                Mr. Kevin Fullbrook
            </div>
        </div>
        <div class="mentor-circle" onclick="popUp(9)">
            <div class="mentor-circle-img" style="background: url('med/mentors/wolf_jaipur.jpeg');background-size: cover;background-position: center;">
            
            </div>
            <div class="mentor-circle-name">
                Surya Singh and Ritu Singh
            </div>
        </div>
        <br>
        <div class="mentor-circle" onclick="popUp(10)">
            <div class="mentor-circle-img" style="background: url('med/mentors/rukshedasyeda.jpg');background-size: cover;background-position: top;">
            
            </div>
            <div class="mentor-circle-name">
                Dr. Syeda Ruksheda
            </div>
        </div>
        <div class="mentor-circle" onclick="popUp(11)">
            <div class="mentor-circle-img" style="background: url('med/mentors/JGG.jpg');background-size: cover;background-position: top;">
            
            </div>
            <div class="mentor-circle-name">
                Dr. Jitendra G. Gavali
            </div>
        </div>
        <div class="mentor-circle" onclick="popUp(12)">
            <div class="mentor-circle-img" style="background: url('med/mentors/Juin_ji.jpeg');background-size: cover;background-position: top;">
            
            </div>
            <div class="mentor-circle-name">
                Dr. Juin Dutta
            </div>
        </div>
        <div class="mentor-circle" onclick="popUp(13)">
            <div class="mentor-circle-img" style="background: url('med/mentors/Swati_G.jpeg');background-size: cover;background-position: top;">
            
            </div>
            <div class="mentor-circle-name">
                Ms. Swati Ganguly
            </div>
        </div>
        <div class="mentor-circle" onclick="popUp(14)">
            <div class="mentor-circle-img" style="background: url('med/mentors/Photo.jpg');background-size: cover;background-position: center;">
           
            </div>
            <div class="mentor-circle-name">
                Mr. Jagdeesh Rao Puppala
            </div>
        </div>
    </center>
    <div class="q-contact" id="contact">
        
        <div class="q-padding">
            <div class="q-heading">
                Get in touch
            </div>
            For any queries and/or requests please contact us on our email address <b>rise2020@navrachana.edu.in</b>, or call us on either of the following numbers.
            <br>
            <br>
            <b>+91 9510 6431 41</b>
            <br>
            Khwahish Agarwal
            <br>
            <br>
            <b>+91 8000 5017 45</b>
            <br>
            Devansh Agrawal
            <br>
            <br>
            <i> For Submissions </i>
            <br>
            <b>+91 6353 8730 52</b>
            <br>
            Mannan Anand
            <br>
            <br>
            <br>
        </div>
        
    </div>
    <div class="q-footer">
        Website Developed By <a href="https://shivank.writeroo.in">Shivank Kacker</a>
    </div>
</div>
<script>
    $(window).scroll(function() {
        if($(this).scrollTop() > $(this).height()){
            $('header').addClass('transform');
        }else{
            $('header').removeClass('transform');
        }
    })
    eventDetails = [];
    eventDetails[0] = ["Recreating Eden","Environmental Conservation and Sustainability","What we stand on is what we stand for. We have but one planet to care for and it is dying fast.<br>Keeping in view our growing responsibility towards Earth, this domain invites ideas and initiatives aimed at battling climate change, as well as improving and preserving the fast depleting environment."];
    eventDetails[1] = ["Finding Arcadia","Social Upliftment and Community Betterment","We cannot change any society unless we see ourselves as belonging to it and take action for changing it.<br>Carrying this view of a societal obligation forward, this category will include initiatives aimed at identifying as well as working towards changing mentalities, freeing societies of stereotypes, and striving to uplift the weaker and under privileged sections of our societies. This domain helps you to work for the community, to bring an arcadia into sight."];
    eventDetails[2] = ["Building Scientia","Scientific Innovations to Simplify Daily Functioning","&#8220;Innovation is seeing what everybody has seen and thinking what nobody has thought.&#8221; - Albert Szent-Gyorgyi<br>Our current situation has taught us that technology if used properly, can help us overcome any kind of challenge. Making sure innovation remains an integral part of design thinking, this domain will include initiatives and inventions aimed at making day to day life easier through creative and practical technological ideas and innovations."];
    eventDetails[3] = ["Achieving Nirvana","Mental Health and Emotional Well Being","In a world plagued by stress, anxiety, and depression, mental health awareness has quickly gained the center stage in mainstream consciousness. Taking it further ahead, this domain includes initiatives aimed at spreading awareness regarding mental health, campaigns that address various issues related to it and initiatives for the emotional well-being of an individual."];
    eventDetails[4] = ["Crafting Aether","Gaming for a Cause","This new domain stems out of the urging need to visualize a world that is healthy and sustainable where the flora and fauna live in perfect harmony with elements of nature. Here is your chance to create your own aether and perhaps create your own ‘TRON’ legacy."];

    eventDetails[5] = ["Dr. Drey Martone","Albany, Newyork","Dr. Drey Martone started her career in management consulting. Right from her time as a 4th grade teacher to completing her doctorate, she has gained experience in applying that problem-solving approach to the field of education and analyzing the students’ needs and assessment results, combined with her district’s standards and curriculum. <br> She has great experience in item writing, standard setting, and in approaches to validity and reliability. <Br> Currently, at The College of Saint Rose, she teaches at both the undergraduate and graduate level. Her areas of expertise are in methods of teaching, math and science education for elementary education, assessment, and research. Throughout her teaching, she models pedagogies students can apply in their own work. <br><br>She believes that it is important to use assessment to inform instruction and this belief infuses in her teaching."];
    eventDetails[6] = ["Mr. Mohana Ram Murugiah","Ipoh, Malaysia","Mohana Ram Murugiah is a reader in English Language, teaching at the Methodist Girls’ High School Ipoh, Malaysia. <br> There he teaches students of grade 11 and 12 and has been doing so for about 16 years as a teacher, teacher trainer/educator, debater, story – reader,  materials writer and researcher. <br> He is particularly interested in the description and teaching of creative writing and creative art in language teaching. Conferences, workshops and projects have taken him to a number of different countries, including United States of America, Singapore, Indonesia and Thailand. <Br> <br> He has also received several prestigious awards locally and internationally such as the Top English language teacher award in 2015 during the International Conference on English Language Teaching in 2015 and the Basil Wijaya Suriya Silver Award in 2017 during the MELTA conference."];
    eventDetails[7] = ["Dr. Sandra Jara","Mexico","Dr. Sandra Jara is a Mexican educator and head of Department in High School 19 of the Universidad de Guadalajara. <br>Sandra has promoted STEAM through different contests such as Olympics, fairs, summers, and tournaments, using Active methodologies (PBL) and encouraging teamwork, environmental care and cultural exchange. Many of her students have achieved several awards from regional to international events. Sandra and one of her students obtained a patent in 2017. <br><br> She participated in the International Leadership in Education Program (ILEP) in 2015. Ever since, she has promoted internationalization and English as a second language by creating new programs. In fact, she is currently developing an International Virtual Exchange (IVE) project titled Activa tu Speaking with Dr. Jorge Rodriguez from Clemson University. <br>Dr. Jara is part of the academic team that design and actualize high school programs in the Universidad de Guadalajara. Besides, she has developed courses for coaching teachers in Chemistry and Education. She is also Academic Adviser at this institution.  Additionally, she is the coauthor of some textbooks.  <Br>“The collaboration among different cultures is essential to build global minds”"];
    eventDetails[8] = ["Mr. Kevin Fullbrook","Hawally, Kuwait","Kevin Fullbrook is the Deputy Director at Al-Bayan Bilingual School, Kuwait. Having started his career as a Math and Physical Education teacher in a remote Australian school, he then taught at a range of schools across the country before serving in leadership positions in the Middle East, China, and Australia. <br><br> Having participated in the Think Tank on Global Education at the Harvard Graduate School of Education in 2016, Kevin then went on to be named one of 'The Educator' magazines Rising Stars of Education under 40 years old. <br><br> Kevin is passionate about creativity and innovation in education and speaks at conferences and workshops around the world on design-thinking, innovation, and community engagement.  He is the country lead ambassador for HundrED.org out of Finland, and an alliance member of LearnLife, Spain. <br><br> He has a Bachelor of Applied Science, Bachelor of Education, an MBA, and is a Fellow of the Royal Society of Arts and the Chartered College of Teachers."];
    eventDetails[9] = ["Mr. Surya Singh & Ms. Ritu Singh","Jaipur, India","Wolf is a Jaipur based practice engaged in the pursuit of art and aesthetics. Led by Ritu and Surya Singh, their work constantly addresses environmental issues using their medium and muse: scrap, discards and waste materials. It is a true amalgamation of art and conscience wherein the environment always gets centerstage. <Br><Br> Wolf is a movement created through objects, spaces, and installations based on the belief of slowing down, creating a better quality of life, and a better sense of community but never without fun, playfulness, and whimsy!<br><br> Their expertise in the process of design thinking has led them to creatively help make a sustainable environment around."];
    eventDetails[10] = ["Dr Syeda Ruksheda","Mumbai, India","Dr Syeda Ruksheda is an eminent Psychiatrist and Psychotherapist with a thriving private practice in Lokhandwala, Mumbai, spanning over 20 years, specialising in adolescents, young adults, women and families.<br>She is a celebrated speaker on Mental Health, with two Tedx talks to her credit.<br><br>She serves as Co-Chair of women's mental health specialty section of Indian Psychiatric Society and Executive Council member of the Indian Association of Private Psychiatry.<br><br>A monthly support group for young adults - YAMI, a mental health social initiative - MARG are amongst her passion projects. <br><br>We know her as a humorous individual owing to her love of raiding her sister's closet for hijabs, her love for fashion and food but unwillingness to cook and her preference for news coming from trendy memes."];
    eventDetails[11] = ["Dr. Jitendra G. Gavali","Vadodara, India","Dr Jitendra Gavali is the Director of the Community Science Centre of Vadodara, the Coordinator of the Vadodara Dist. National Children Science Congress, Secretary of the National Bioshield Society, and an important advisor to Mission Million Trees.<br><br>He was selected by the United State’s Department of State for the International Visitor’s Leadership Program as one of the two expert guest scientists from India to visit four states across US under the ‘Environmental Protection and Biodiversity Conservation’ program.<br><br>An author of two brilliant books, 'Trees of Gujarat' and 'Preservation Plots in Gujarat State', 7 research papers and 16 published articles, Dr. Gavali has shared his expertise as a lecturer, researcher and principal scientist for many betterment projects."];
    eventDetails[12] = ["Dr. Juin Dutta","Vadodara, India","Dr. Juin Dutta is the Founder and President of the Srotoshwini Trust which was set up in 2010 with the aim of working with underprivileged women and children.<br>Dr. Dutta left her job at Navrachana International to engage full-time in her trust work.<br><br>On May 9, 2013 she founded the informal mobile school Pathshala which was initially located in the half constructed Navrachana Sports Complex. It then toured around different sidewalks over the city and 2 years later was sponsored by the Vadodara Police with a classroom space and funds.<br><br>In 2014 she took up the initiative to set up a hostel for the children in her school whose residents grew in number from 8 to 80 in five years. Now the Pathshala Hostel stands tall with room for 100 students and 7 full time working hostel mothers."];
    eventDetails[13] = ["Ms. Swati Ganguly","Delhi, India","Ms. Swati Ganguly, the city coordinator of Delhi for Vidyarthi Vigyan Manthan, is the Founder Director of Juana Technologies Pvt Ltd, an Organization with its operations in Delhi and Goa driving 21st Century Learning Skills and Technology Solutions in Education.<br><br>With 25 years of rich teaching experience in Academics, she has been in the forefront of educational technologies by becoming a “Microsoft Innovative Educator Trainer” and a “Google certified Trainer”.<br><br>Her work for the Education Transformation Framework advocating innovative learning technologies has helped her bag the “Women Entrepreneur of the Year 2019” award by All India Council for Robotics and Automation (AICRA).<br><br>With a Post-Graduation in the Comprehensive Management of Children with Learning Disorders, from the Spastic Society of Karnataka, Bangalore, she has also been a Special Educator since 2008. She also holds a diploma in Counselling Skills, from Banjara Academy and is a Certified Auditor from National Accreditation Board for Education and Training (NABET)."];
    eventDetails[14] = ["Mr. Jagdeesh Rao Puppala","Anand, India","A practitioner from the very beginning, Sir’s 35 year professional engagement has been on interrelated issues of poverty and environmental degradation and on ‘systems thinking’ at the interface of ecology, society and economy.<br><br>Mr. Jagdeesh has been the Chief Executive of Foundation for Ecological Security (FES) since its inception in 2001 till July 2020. As the ‘Anchor and Curator’ at FES,  he has now  taken on the responsibilities of influencing policy, advancing knowledge generation and exchange and constituency building for the Promise of Commons initiative that aims to improve the governance and management of 30 million acres of village commons (community forests and pastures) in India.<br><br>Mr. Puppala has been conferred the prestigious ‘Skoll Award for Social Entrepreneurship’ in 2015. He is also a Rainer Arnhold (Mulago) Conservation Fellow (2017) and Senior Ashoka Fellow (2020). His areas of interest include Commons, decentralized governance, biodiversity informatics, systems thinking and history of science and law.<br><br>He is also a Navrachana alumni."];
    function popUp(x){
        
        $('.q-popup-wrap').fadeToggle(400);
        $('.q-popup').toggleClass('animate');
        var title = eventDetails[x][0];
        var subtitle = eventDetails[x][1];
        var content = eventDetails[x][2];
        $('.q-popup-title .q-heading').html(title);
        $('.q-popup-title .q-popup-subtitle').html(subtitle);
        $('.q-popup-content').html(content);
    }
    function popUpClose(){
        $('.q-popup-wrap').fadeToggle(400);
        $('.q-popup').toggleClass('animate');
    }

    function randomnum(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
        var i;
        var size = 1;
        for(i=0;i < 20 ;i++){
            var shapes = ['triangle','square','circle'];
            var colors = ['#22f0a1','#f5db14','#1866f5','#f51870']
            var shape = shapes[randomnum(0,2)];
            var color = colors[randomnum(0,3)];
            var size = randomnum(25, 30);
            var posx = randomnum(1, document.body.clientWidth);
            var posy = randomnum(1, document.body.clientHeight);
            var rotation = randomnum(0,90);
            var size = size + 'px';
            var outp = '<i class="far fa-'+shape+' q-sprite" style="color:'+color+'; top:'+posy+'px; left:'+posx+'px;transform:rotate('+rotation+'deg);font-size:'+size+'px;"></i>';
            $('.q-white-cont').append(outp);
        }
    totalSlides = $( '.q-carousel-slide' ).length;
    currentSlide = 0;
    slideLock = false;
    setInterval(() => {
        if(slideLock == false){
            if(currentSlide+1 < totalSlides && currentSlide+1 > 0){
            changeSlide(currentSlide+1);
            }else{
                if(currentSlide+2 > totalSlides){
                    changeSlide(0);
                }else if(currentSlide+2 < 0){
                    changeSlide(totalSlides);
                }
            }
        }
    }, 5000);
    
    function changeSlide(x){
        if(x <= totalSlides && x >= 0){
            var cWidth = $( '.q-carousel-slide').css('width').replace('px','');
            $( '.q-carousel-slide').removeClass('sel');
            $('.q-carousel-slider').css('left','calc((50vw - ('+(cWidth / 2)+'px + 20px)) - (('+(cWidth)+'px + 40px)*'+x+'))');
            $( '.q-carousel-slide' ).each(function( index ) {
                if(index == x){
                    $(this).addClass('sel');
                }
            });
            currentSlide = x;
        }
        
    }
</script>
