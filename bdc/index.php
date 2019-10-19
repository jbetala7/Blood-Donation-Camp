<?php
//include 'dbc.php';
//$sql = "SELECT COUNT(Name) FROM user_info;";
//$result = mysqli_query($conn , $sql);
//$row = mysqli_fetch_assoc($result);
$target = 1000;
//$raised = $row['COUNT(Name)'];
$raised = 450;
$percentage = ($raised/$target)*100;

include 'header.php';
?>
<!-- slider_area_start -->
<div class="slider_area slider_bg_1 d-flex align-items-center" id="home">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="single_slider">
                    <div class="slider_text">
                        <h3>Be a hero<br>
                            Donate Blood</h3>
                        <p>At Charity United we believe that all children in the world have the right to be <br>
                                cared for and the right to be protected </p>
                        <a href="register.php" class="boxed-btn2">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- slider_area_end -->

    <!-- causes_area_start -->
    <div class="causes_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="causes_info">
                        <div class="section_title">
                            <span>BDC 2019 Target</span>
                            <h3>
                                Help Us Reach The Target
                            </h3>
                        </div>
                        <div class="target_rais_area d-flex">
                            <div class="single_raise">
                                <span>target :</span>
                                <h4><?php echo $target.' Units'?></h4>
                            </div>
                            <div class="single_raise">
                                <span>raised :</span>
                                <h4><?php echo $raised.' Units'?></h4>
                            </div>
                            <div class="doante_btn">
                                <a href="#" class="boxed_btn3">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="causes_thumb">
                        <img class="img-fluid" src="img/banner2.jpg" alt="">
                        <div class="custom_progress_bar">
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percentage.'%'?>">
                                    <div class="value_progress">
                                        <span><?php echo $percentage?>%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- causes_area_end -->

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
                        <li class="dot"> <b>About one in seven people entering a hospital requires blood.</b></li><br>
                        <li class="dot"><b>Reduces Iron levels.</b></li><br>
                        <li class="dot"><b>Identifies adverse health effects:</b> Each person who donates blood completes a simple physical examination and short blood test before donating. As a result, one could identify unknown health concerns as a part of the process.</li><br>
                        </ul>

                        <a href="register.php" class="boxed_btn3">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Why Donnate End -->


    <!-- servce_area_start -->
    <div class="servce_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-60">
                        <span>We Work For</span>
                        <h3>
                            Additional Benefits
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_serve text-center">
                        <div class="serve_icon">
                            <i class="flaticon-meat"></i>
                        </div>
                        <h3>White Dot</h3>
                        <p>Inspires employees and organizations to support causes they care about. We do this to bring
                            more resources to the nonprofits that are </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_serve text-center">
                        <div class="serve_icon">
                            <i class="flaticon-open-magazine"></i>
                        </div>
                        <h3>Donor Card</h3>
                        <p>Inspires employees and organizations to support causes they care about. We do this to bring
                            more resources to the nonprofits that are </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_serve text-center">
                        <div class="serve_icon">
                            <i class="flaticon-open-magazine"></i>
                        </div>
                        <h3>Coupons</h3>
                        <p>Inspires employees and organizations to support causes they care about. We do this to bring
                            more resources to the nonprofits that are </p>
                    </div>
                </div>
            </div><br><br>
            <div class="row">
                <div class="offset-xl-2 col-xl-4 col-md-4">
                    <div class="single_serve text-center">
                        <div class="serve_icon">
                            <i class="flaticon-meat"></i>
                        </div>
                        <h3>Attendence</h3>
                        <p>Inspires employees and organizations to support causes they care about. We do this to bring
                            more resources to the nonprofits that are </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_serve text-center">
                        <div class="serve_icon">
                            <i class="flaticon-medicine"></i>
                        </div>
                        <h3>Gifts</h3>
                        <p>Inspires employees and organizations to support causes they care about. We do this to bring
                            more resources to the nonprofits that are </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- servce_area_end -->
    
    <!-- Who Can Donate -->
    
    <!-- Who Can Donate End -->
    
    <!-- Donated Blood -->
    
    <!-- Donated Blood End -->

    <!-- Do's And Don'ts -->
    <div class="help_area gray-bg" id="dd">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-60">
                        <span>We Work For</span>
                        <h3>
                            Do's And Don'ts
                        </h3>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="help_info">
                        <div class="section_title">
                            <span>Do's</span>
                        </div>
                        <ul>
                        <li class="check">Eat iron-rich foods starting a week or two before you donate. These include red meat, eggs whole grains, and dark green vegetables like spinach. Get additional vitamin C to help iron absorption.</li><br>
                        <li class="check">Eat a healthy, low-fat meal four or more hours before you donate.</li><br>
                        <li class="check">Take plenty of fluids, not only on the day of your donation, but also on the day before and the day after. This will keep you from getting dehydrated.</li><br>
                        </ul>
                    </div>
                </div>
                <div class="offset-xl-2 col-xl-5">
                    <div class="help_info">
                        <div class="section_title">
                            <span>Don'ts</span>
                        </div>
                        <ul>
                        <li class="ban">Inspires employees and organizations to support causes they care about do this to bring more
                            resources.</li><br>
                        <li class="ban">Inspires employees and organizations to support causes they care about do this to bring more
                            resources.</li><br>
                        <li class="ban">Inspires employees and organizations to support causes they care about do this to bring more
                            resources.</li><br>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Do's And Don'ts End -->

    <!-- volunteers_area_satrt 
    <div class="volunteers_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-60">
                        <span>We Work For</span>
                        <h3>
                            We Serve For Peoples
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="single_volunteer">
                        <div class="thumb">
                            <img src="img/volunteers/1.png" alt="">
                            <div class="social_links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="author_name text-center">
                            <h3>Macau Wilium</h3>
                            <span>Volunteer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="single_volunteer">
                        <div class="thumb">
                            <img src="img/volunteers/2.png" alt="">
                            <div class="social_links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="author_name text-center">
                            <h3>Anila Miller</h3>
                            <span>Volunteer & Donner</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="single_volunteer">
                        <div class="thumb">
                            <img src="img/volunteers/3.png" alt="">
                            <div class="social_links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="author_name text-center">
                            <h3>Rona Dana</h3>
                            <span>Volunteer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="single_volunteer">
                        <div class="thumb">
                            <img src="img/volunteers/4.png" alt="">
                            <div class="social_links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="author_name text-center">
                            <h3>Ledo Jonson</h3>
                            <span>Volunteer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- volunteers_area_end -->

<!-- FAQ -->
<section class="faq" id="faq">
<div class="container">
	<div class="row">
		<div class="col-lg-12">
                <div class="section_title text-center mb-60">
                    <span>Frequently Asked Questions</span>
                    <h3>FAQs</h3>
                </div>
			<div class="accordion" id="accordionExample">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h2 class="clearfix mb-0">
							<a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-chevron-circle-down"></i> What do I get in return for my blood donation?</a>									
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
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-chevron-circle-down"></i> Is there anything special I need to do before donating?</a>
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
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-chevron-circle-down"></i> Does Bootstrap Framework Provide Cross-browser Support?</a>                     
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum id metus ac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet sagittis. In tincidunt orci sit amet elementum vestibulum.</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFour">
						<h2 class="mb-0">
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><i class="fa fa-chevron-circle-down"></i> Can I Use Bootstrap for Mobile App Development?</a>                               
						</h2>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						<div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>    
<!-- FAQ End-->
<!-- Footer -->
<?php
include 'footer.php';
?>
<!-- Footer End -->