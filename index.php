<?php
//header('Location: register.php');
include 'dbc.php';
$sql = "SELECT COUNT(Name) FROM user_info;";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);
$target = 2500;
$raised = $row['COUNT(Name)'];
//$raised = 450;
$percentage = ($raised/$target)*100;

include 'header.php';
?>
<!-- partial:index.partial.html -->
<section class="hero-header" id="home">
<div class="title">
    <h3>BDCMUJ - 2019</h3>
    <h1>Donate Blood Be a Hero</h1>
    <h3>Karke Dekho Accha Lagta Hai</h3><br>
    <a href="register.php" class="btn btn-outline-danger">Register Now</a>
  </div>
<!-- partial -->
</section>


<section class="about-area121">
    <div id="vidcont"> 	
    <!-- <div class="home-theme_content1 inline-photo show-on-scroll" id = "entry"> -->
        <div class="home-theme_content inline-photo show-on-scroll" id="her">
            <h1 class="home-theme_2">Be A Hero<h1>
            <p class="home-theme_para1">
                If one thing we’ve learnt, it is that superheroes are not born only out of mutations, science projects gone wrong, sheer superhuman genius, neither do they have to travel light years from other planets, nor are they confined to the pages of comic books. 
                Heroes walk among us, and heroes are within us. 
                
                We believe in the superpower that one action holds to turn a situations upside down, to be a boon, and to save a life. 
                
                Exhibiting this notion annually during the Blood Donation Camp, we encourage all to take a moment to realise and bring out the heroes in them and donate! 
            </p>
        </div>
        <div class="videobackground">
                <video id="vid" data-keepplaying autoplay loop muted width="100vw" preload="auto">
                        <source src="vid/videobg.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                </video>
        </div>
    </div>
</section>
<!-- causes_area_start -->
    <!--<div class="causes_area">-->
    <!--    <div class="container">-->
    <!--        <div class="row align-items-center">-->
    <!--            <div class="col-xl-6 col-md-6">-->
    <!--                <div class="causes_info">-->
    <!--                    <div class="section_title">-->
    <!--                        <span>BDC 2019 Target</span>-->
    <!--                        <h3>-->
    <!--                            Help Us Reach The Target-->
    <!--                        </h3>-->
    <!--                    </div>-->
    <!--                    <div class="target_rais_area d-flex">-->
    <!--                        <div class="single_raise">-->
    <!--                            <span>target : </span>-->
    <!--                            <h4><?php echo $target.' Units'?></h4>-->
    <!--                        </div>-->
                        <!--    <div class="single_raise">-->
                        <!--        <span>Registered Users :</span>-->
                        <!--        <h4><?php echo $raised?></h4>-->
                        <!--    </div>-->
                        <!--    <div class="doante_btn">-->
                        <!--        <a href="#" class="boxed_btn3">Register Now</a>-->
                        <!--    </div>-->
                        <!--</div>-->
    <!--                </div>-->
    <!--            </div>-->
                <!--<div class="col-xl-6 col-md-6">-->
                <!--    <div class="causes_thumb">-->
                <!--        <img class="img-fluid" src="img/banner2.jpg" alt="">-->
                <!--        <div class="custom_progress_bar">-->
                <!--            <div class="progress">-->
                <!--                <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="60"-->
                <!--                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percentage.'%'?>">-->
                <!--                    <div class="value_progress">-->
                <!--                        <span><?php echo $percentage?>%</span>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- causes_area_end -->

    <!-- about_area_start -->
    <div class="about_area gray-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_thumb">
                        <img src="img/image1.jpg" alt="">
                        <!--<div class="served_over">
                            <span>Served Over</span>
                            <h3>356728</h3>
                            <p>people around 50+ countries</p>
                        </div>-->
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="about_right">
                        <div class="section_title">
                            <span>About Us</span>
                            <h3>
                                Blood Donation Camp <br>
                                Manipal University Jaipur
                            </h3>
                        </div>
                        <p style="text-align: justify;">Our university houses a diversity of clubs and the Rotaract Green Club is the foremost established community of the likeminded with dynamic people, tireless to shape reforms and changes in today’s world. 
                            Rotaract is an international body started in the year 1968, evolving into a network of 10,904 clubs, 2,50,792 members across 184 countries. One of these bodies is our club active in the Manipal University, Jaipur. Among the exposure in the fields of quality academics, culture, and off book education, we are also provided with an environment to grow as individuals; individuals who are aware of the drastic changes in the global society and are willing to actually take a course of action that aids even at the slightest. 
                            With the coordination among many committees and working bodies we try and pull off whatever endeavours we undertake independently, and in collaboration with various NGOs and other clubs and government schemes.
                            The crux of our working and functioning is a start with an idea, welcoming of all, ending on a successful note of action.</p>
                        <!--<a href="about.php" class="boxed_btn3">Learn More</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- help_area_start -->
<div class="help_area">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-xl-4">
                    <div class="help_info">
                        <div class="section_title">
                            <span>Be a Hero</span>
                            <h3>
                                Gallery
                            </h3>
                        </div>
                        <p>The Blood Donation Camp is an event one of its kind, on this scale. It is, perhaps, the largest annual blood donation camp with the highest number of donors throughout the zonal Rotary clubs.</p>
                        
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="help_slider_active owl-carousel">
                        <div class="single_help_wrap">
                            <div class="thumb">
                                <img src="img/help/1.JPG" alt="">
                            </div>
                        </div>
                        <div class="single_help_wrap">
                            <div class="thumb">
                                <img src="img/help/2.JPG" alt="">
                            </div>
                        </div>
                        <div class="single_help_wrap">
                            <div class="thumb">
                                <img src="img/help/3.JPG" alt="">
                            </div>
                        </div>
                        <div class="single_help_wrap">
                            <div class="thumb">
                                <img src="img/help/4.JPG" alt="">
                            </div>
                        </div>
                        <div class="single_help_wrap">
                            <div class="thumb">
                                <img src="img/help/5.JPG" alt="">
                            </div>
                        </div>
                        <div class="single_help_wrap">
                            <div class="thumb">
                                <img src="img/help/6.JPG" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- help_area_end -->


    <!-- Why Donate -->
    <section class='Why_Donate'>
    <div class="about_area gray-bg" id="about">
        <div class="container">
        <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-60">
                        <span>Save a Life</span>
                        <h3>Why Should You Donate?</h3>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_thumb">
                        <img src="img/image1.png" alt="">
                        <!--<div class="served_over">
                            <span>Served Over</span>
                            <h3>356728</h3>
                            <p>people around 50+ countries</p>
                        </div>-->
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 pd-25">
                    <div class="about_right">
                        <!--<div class="section_title">
                            <span>Why Should You Donate?</span>
                            <h3>
                            Blood donation is a community responsibility.
Donating blood is truly the “gift of life” that a healthy individual can a give to a person in need, in case of sickness or injury.
                            </h3>
                        </div>-->
                        <ul>
                        <li class="dot"><b>Safe blood saves lives:</b> Blood donations are essential for trauma patients and people under a variety of situations including surgeries, transplants, chronic illnesses, blood disorders and cancer.  </li><br>
                        <li class="dot"><b>Inspires employees and organizations to support causes they care about do this to bring more
                            resources.</b></li><br>
                        <li class="dot"><b>It is only an hour of your time:</b> The entire donation process takes approximately one hour, with about 10 minutes of that time being the actual blood donation.</li><br>
                        <li class="dot"><b>Blood is needed every two seconds.</b></li><br>
                        <li class="dot"><b>About one in seven people entering a hospital requires blood.</b></li><br>
                        <li class="dot"><b>Reduces Iron levels.</b></li><br>
                        <li class="dot"><b>Identifies adverse health effects:</b> Each person who donates blood completes a simple physical examination and short blood test before donating. As a result, one could identify unknown health concerns as a part of the process.</li><br>
                        <li class="dot"><b>White Dot:</b> Got into trouble? No worries! Redeem your black dot by donating blood and get it removed.</li><br>
                        <li class="dot"><b>Donor Card:</b> On successfully donating blood, you receive a donor card. In the possible event of an urgent need of blood in the future, this card will come in handy.</li><br>
                        <li class="dot"><b>Coupons:</b> Discount coupons for various outlets on campus are provided to the donors.</li><br>
                        <li class="dot"><b>Gift:</b> A token of thanks for your bravery, effort and contribution.</li><br>  
                      </ul>

                        <a href="register.php" class="boxed_btn3">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Why Donnate End -->

    <!-- Who Can Donate -->
    <div class="servce_area" id="who">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-60">
                        <span>Be a Hero</span>
                        <h3>
                            Who Can Donate?
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_serve text-center">
                        <div class="serve_icon">
                          <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <h3>Age</h3>
                        <p>You are aged between 18 and 65.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_serve text-center">
                        <div class="serve_icon">
                          <i class="fa fa-balance-scale" aria-hidden="true"></i>
                        </div>
                        <h3>Weight</h3>
                        <p>You weigh at least 50 kgs. </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_serve text-center">
                        <div class="serve_icon">
                          <i class="fa fa-heartbeat" aria-hidden="true"></i>
                        </div>
                        <h3>Health</h3>
                        <p>You must be in good health at the time you donate. </p>
                    </div>
                </div>
            </div><br><br>
            <div class="row">
                <div class="offset-xl-2 col-xl-4 col-md-4">
                    <div class="single_serve text-center">
                        <div class="serve_icon">
                          <i class="fa fa-gavel" aria-hidden="true"></i>
                        </div>
                        <h3>Behaviour</h3>
                        <p>You must not give blood: <br> If you engaged in any at risk sexual activity in the past 12 months.<br> Individuals with behaviours below will be deferred permanently:  <br>1. Have ever had a positive test for HIV <br>2. Have ever injected recreational drugs. </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_serve text-center">
                        <div class="serve_icon">
                          <i class="fa fa-female" aria-hidden="true"></i>
                        </div>
                        <h3>Pregnancy and Breastfeading</h3>
                        <p>Following pregnancy, the deferral period should last as many months as the duration of the pregnancy. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Who Can Donate -->

<!-- Do's And Don'ts -->
<div class="help_area gray-bg" id="dd">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-60">
                        <span>Be a Hero</span>
                        <h3>
                            Do's And Don'ts
                        </h3>
                    </div>
                </div>
                <div class="col-xl-5 pd-25">
                    <div class="help_info">
                        <div class="section_title">
                            <span>Do's</span>
                        </div>
                        <ul>
                        <li class="check">Eat iron-rich foods starting a week or two before you donate. These include red meat, eggs whole grains, and dark green vegetables like spinach. Get additional vitamin C to help iron absorption.</li><br>
                        <li class="check">Eat a healthy, low-fat meal four or more hours before you donate.</li><br>
                        <li class="check">Take plenty of fluids, not only on the day of your donation, but also on the day before and the day after. This will keep you from getting dehydrated.</li><br>
                        <li class="check">Be healthy on the donation date. If you suffer any flu or cold symptoms, reschedule.</li><br>
                        <li class="check">Be sure to rest and have a snack right after your donation. These are usually provided at the donation centre to help ensure you don’t become lightheaded or faint afterwards.</li><br>
                        <li class="check">Rest for the remainder of the day so your body can recuperate.</li><br>
                        </ul>
                    </div>
                </div>
                <div class="offset-xl-2 col-xl-5 pd-25">
                    <div class="help_info">
                        <div class="section_title">
                            <span>Don'ts</span>
                        </div>
                        <ul>
                        <li class="ban">Don't rush through the cookies and juice provided after your donation. Gulping them down or skipping them altogether may result in fainting or injury.</li><br>
                        <li class="ban">Don't donate blood if you are feeling ill, or not in perfect health.</li><br>
                        <li class="ban">Don't donate on an empty stomach. Don’t eat right before donation either, as this can lead to an upset stomach.</li><br>
                        <li class="ban">Don't consume caffeine before donation. Caffeinated drinks can act as diuretics, causing the body to get rid of water. You need to be well-hydrated before donating.</li><br>
                        <li class="ban">Don't smoke right before or after your donation. The nicotine could make you too light-headed.  Wait an hour or more after donating. Better yet, don’t smoke at all!</li><br>
                        <li class="ban">Don't exercise any time in the 24 hours after your donation.</li><br>
                        <li class="ban">Don't donate if you have an infection for which you are currently taking antibiotics.</li><br>
                        <li class="ban">Don't donate if you are at high risk for hepatitis or HIV.</li><br>
                        <li class="ban">Don't donate if you’re under 17 or weigh less than 110 pounds/50kgs.</li><br>
                        <li class="ban">Don't consider driving yourself home after donation. You could faint or fall asleep while driving despite the juice and cookies. Consider having a friend do the driving—one who doesn’t donate on the same day.</li><br>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<!-- Do's And Don'ts End -->



<!-- FAQ -->
<section class="faq" id="faq">
<div class="container">
	<div class="row">
		<div class="col-xs-6 col-lg-12">
                <div class="section_title text-center mb-60">
                    <span>Frequently Asked Questions</span>
                    <h3>FAQs</h3>
                </div>
			<div class="accordion" id="accordionExample">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h2 class="clearfix mb-0">
							<a class="btn btn-link faq-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-chevron-circle-down"></i> What do I get in return for my blood donation?</a>									
						</h2>
					</div>
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">Blood is donated voluntarily, freely and without payment or reward of any kind.
While blood is donated as an act of goodwill towards a fellow human being and nothing should be expected in return for giving this gift of life, here at BDC MUJ, you also receive benefits such as discount coupons, white dots, donor card, attendance etc.
In addition to this, what you get in return is a physical and emotional sense of well-being and the knowledge that you have helped to save someone's life. We all hope that someone will do the same for us if we need a blood transfusion.</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h2 class="mb-0">
							<a class="btn btn-link faq-btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-chevron-circle-down"></i> Is there anything special I need to do before donating?</a>
						</h2>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">Eat at your regular meals and drink plenty of fluids before you donate blood. Have a snack at least four hours before you donate, but do not eat too much right before the donation.
After donating blood, have some tea, coffee or a soft drink to help replace the blood volume (approximately 450 ml) which has been reduced as a result of your donation. Refreshments are provided after the donation.
Avoid taking aspirin or aspirin-like anti-inflammatory medication in the 72 hours prior to your donation, because aspirin inhibits the function of blood platelets. If you have taken aspirin within this period, your blood platelet component cannot be transfused to a patient.</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<h2 class="mb-0">
							<a class="btn btn-link faq-btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-chevron-circle-down"></i> Does the needle hurt the entire time?</a>                     
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">No. There may be a little sting when the needle is inserted, but there should be no pain whatsoever during the rest of the donation.</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFour">
						<h2 class="mb-0">
							<a class="btn btn-link faq-btn collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><i class="fa fa-chevron-circle-down"></i> How long does a blood donation take?</a>                               
						</h2>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						<div class="card-body">The entire process takes about one hour and 15 minutes; the actual donation of a pint of whole blood unit takes eight to ten minutes. However, the time varies slightly with each person, depending on several factors including the donor’s health history and attendance at the blood drive.</div>
					</div>
                </div>
                <div class="card">
					<div class="card-header" id="headingFive">
						<h2 class="mb-0">
							<a class="btn btn-link faq-btn collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><i class="fa fa-chevron-circle-down"></i> How long will it take to replenish the pint of blood I donate?</a>                     
						</h2>
					</div>
					<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
						<div class="card-body">The plasma from your donation is replaced within about 24 hours. Red cells need about four to six weeks for complete replacement. That is why at least eight weeks are required between whole blood donations.</div>
					</div>
                </div>
                <div class="card">
					<div class="card-header" id="headingSix">
						<h2 class="mb-0">
							<a class="btn btn-link faq-btn collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><i class="fa fa-chevron-circle-down"></i> Can I donate during my menstrual period?</a>                     
						</h2>
					</div>
					<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
						<div class="card-body">Yes, if you are feeling well. Menstruating does not affect your ability to donate. If your fluid levels aren't low, (i.e. you are dehydrated, as it can reduce your blood volume), there is no problem. Enjoy a relaxing time on the donation bed and a guilt-free snack afterwards!</div>
					</div>
                </div>
                <div class="card">
					<div class="card-header" id="headingSeven">
						<h2 class="mb-0">
							<a class="btn btn-link faq-btn collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><i class="fa fa-chevron-circle-down"></i> How soon after donating can I participate in a sport?</a>                     
						</h2>
					</div>
					<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
						<div class="card-body">After donation, it's best to have a snack and drink plenty of fluids over the next four hours. You can then resume routine sporting or training activity. It is advisable not to donate blood three to four weeks before participating in a major sporting event such as a marathon, or a competitive rugby or football match, where you intend to push yourself to the limits of your capacity.
In the unlikely event that you do feel faint, light-headed or unwell during any sporting activities, you should immediately stop and rest. Many active sports people are regular blood donors.
</div>
					</div>
                </div>
                <div class="card">
					<div class="card-header" id="headingEight">
						<h2 class="mb-0">
							<a class="btn btn-link faq-btn collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"><i class="fa fa-chevron-circle-down"></i> What is a “unit” of blood?</a>                     
						</h2>
					</div>
					<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
						<div class="card-body">A unit is about 450 ml of donated blood. The average adult has between four and five litres of blood in his or her body and can easily spare one unit.</div>
					</div>
                </div>
                <div class="card">
					<div class="card-header" id="headingNine">
						<h2 class="mb-0">
							<a class="btn btn-link faq-btn collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine"><i class="fa fa-chevron-circle-down"></i> Is it possible to get HIV/AIDS from donating blood?</a>                     
						</h2>
					</div>
					<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
						<div class="card-body">No. You cannot get AIDS or any other infectious disease by giving blood. The materials used for your blood donation, including the needle, blood collection bag, tubes and finger prick needle are new, sterile and disposable. These are used only once for your blood donation and then destroyed after use.</div>
					</div>
                </div>
                <div class="card">
					<div class="card-header" id="headingTen">
						<h2 class="mb-0">
							<a class="btn btn-link faq-btn collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen"><i class="fa fa-chevron-circle-down"></i> Why do you ask such personal questions during the donor selection process?</a>                     
						</h2>
					</div>
					<div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
						<div class="card-body">A major component of the screening process is designed to identify people who are at a greater risk of transmitting blood-borne infections. In order to safeguard the blood supply, it is imperative that these people do not give blood. All donor selection measures must meet stringent regulatory requirements. While the process is slightly lengthy and may seem a bit intrusive, it is necessary to safeguard the blood supply.</div>
					</div>
                </div>
                <div class="card">
					<div class="card-header" id="headingEleven">
						<h2 class="mb-0">
							<a class="btn btn-link faq-btn collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven"><i class="fa fa-chevron-circle-down"></i> I have a question which is not answered here.</a>                     
						</h2>
					</div>
					<div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
						<div class="card-body">Contact- Kabir Kakkar: +91 9811120224</div>
					</div>
                </div>
			</div>
		</div>
	</div>
</div>
</section>    
<!-- FAQ END-->

<?php
include 'footer.php';
?>