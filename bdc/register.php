<?php
include 'header.php';
include 'dbc.php';
include 'functions.php';
$valid =1;
if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset ($_POST['bloodgroup']) && isset($_POST['year']))
        {
			$name = $_POST['name'];
			$name = ucwords($name);
            $email = strtolower($_POST['email']);
			$phone =$_POST['tel'];
            $rno = $_POST['rno'];
            $bloodgroup = $_POST['bloodgroup'];
            $year = $_POST['year'];
            $sql = "INSERT INTO user_info VALUES('$name', '$email', '$rno','$phone','$bloodgroup','$year');";
            $query = mysqli_query($conn ,$sql);
            if($query)
            {
                //sendmail($email, $name);
                success();
            }
            else
            {
                error();
                echo mysqli_error($conn);
            }

        }
        else
        {
            $valid =0;
        }
    }
?>
    <!-- slider_area_start -->
    <div class="banner">
    </div>
<section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-10">
                    <h2 class="contact-title">Register Here</h2>
                </div>
                <div class="offset-lg-2 col-lg-8">
                    <form action="" method="POST" class="form-contact contact_form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" required pattern="^([- \w\d\u00c0-\u024f]+)$">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select name="bloodgroup" class="form-control" required>
                                    <option disabled selected>Blood Group</option>  
                                    <option class="form-control" value="A+">A+</option>
                                    <option class="form-control" value="B+">B+</option>
                                    <option class="form-control" value="O+">O+</option>
                                    <option class="form-control" value="AB+">AB+</option>
                                    <option class="form-control" value="AB-">AB-</option>
                                    </select>
                                    <?php if($valid == 0)
						            {
							            echo "<p style='color:red; font-weight:700; font-size:12px;' class='p-t-10'>Please Select Blood Group</p>";
						            }?>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select name="year" class="form-control" required>
                                    <option disabled selected>Year</option>    
                                    <option class="form-control" value="1st Year">1st Year</option>
                                    <option class="form-control" value="2nd Year">2nd Year</option>
                                    <option class="form-control" value="3rd Year">3rd Year</option>
                                    <option class="form-control" value="4th Year">4th Year</option>
                                    </select>
                                    <?php if($valid == 99)
						            {
							            echo "<p style='color:red; font-weight:700; font-size:12px;' class='p-t-10'>Please Select Year</p>";
						            }?>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" required pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input onkeypress='validate(event)' class="form-control" name="rno" id="rno" type="tel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Registraion Number'" placeholder="Enter Registraion Number" required pattern="[0-9]{9}" title="Please Enter Valid Registration Number">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input onkeypress='validate(event)' class="form-control" name="tel" id="tel" type="tel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone Number'" placeholder="Enter Phone Number" required pattern="[0-9]{10}" title="Please Enter Valid Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="button boxed-btn">
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>
<!-- ================ contact section end ================= -->
<?php
include 'footer.php';
?>