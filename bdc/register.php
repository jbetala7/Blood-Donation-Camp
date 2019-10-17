<?php
include 'header.php';
include 'dbc.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset ($_POST['email']))
        {
			$name = $_POST['name'];
			$name = ucwords($name);
            $email = strtolower($_POST['email']);
			$phone =$_POST['tel'];
			$rno = $_POST['rno'];
            $sql = "INSERT INTO user_info VALUES('$name', '$email', '$rno','$phone');";
            $query = mysqli_query($conn ,$sql);
            if($query)
            {
				//sendmail($email, $name);
            }
            else
            {
                echo mysqli_error($conn);
            }

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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="rno" id="rno" type="tel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Registraion Number'" placeholder="Enter Registraion Number">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="tel" id="tel" type="tel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone Number'" placeholder="Enter Phone Number">
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