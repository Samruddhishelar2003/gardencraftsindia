<?php
include('header.php');
include('connection.php');
?>
<div class="contact-area bg-1 mt-83 sm-mt-40">
		<div class="container">
		

                    

		<section class="contact-wrap sec-space-bottom">
                <div class="container rel-div pt-50">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="contact-map">  <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60536.872379323926!2d73.84692862928003!3d18.503827041928183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1766e373d99%3A0x91ce8d21b109ea82!2sMg%20road%20camp%20Pune!5e0!3m2!1sen!2sin!4v1692268012486!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div> </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-details">
                                <h3 class="fsz-25"><span class="light-font"></span> <strong>GARDEN CRAFTS</strong>  </h3> 
<!--                                <h6 class="sub-title-1 pb-15">SHUDDH MILK STORE</h6>-->

<!--
                                <h5 class="clr-txt fsz-12 pt-15">Shuddh Milk STORE</h5>
                                <p>Mr.Shuddha Milk and More 10 A, Molacha Odha Satara.</p>
-->

<ul >
                                    <!-- <li><strong style="color: black">Call:  </strong> <i>+91 </i> </li> -->
									<strong>Office Address :</strong> B110, clover center, molendina road, camp, Pune-411001</br>
									<strong>Associate Partner's Address :</strong> Green life nursery, Atharva Residency near Oriental health, Near Utsav hall, vanaj Kinara Chowk, Kothrud Pune 411038
                                    <li><strong style="color: black">Email: </strong> <i> <a href="mailto:gardencraftsindia@gmail.com">gardencraftsindia@gmail.com</a> </i> </li>
                                    <li><strong style="color: black">Call: </strong> <i> <a href='tel:9657716464'>9657716464</a> </i> </li>
                                    <li><strong style="color: black">Instagram: </strong> <i> <a href='https://instagram.com/_garden_crafts_?igshid=MzRIODBiNWFIZA=='>_garden_crafts_</a> </i> </li>
                                    <li><strong style="color: black">Facebook: </strong> <i> <a href='https://www.facebook.com/profile.php?id=100094701447226'>Garden_Crafts_</a> </i> </li>
                                    <!-- <li> <strong>Skype: </strong> <i> <a href='#'> Montero.Property </a> </i> </li> -->
                                    
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="divider-full-1"></div>

                    <div class="pt-50 col-md-8 col-md-offset-2">
                        <h3 class="fsz-25 text-center"><span class="light-font">Contact </span> <strong>GardenCrafts</strong>  </h3> 
<!--                        <h6 class="sub-title-1 text-center">SHUDDH MILK STORE</h6>-->

                        <div class="contact-form light-bg" style="padding:30px;border-radius:20px;">
                     <form class="contact-form row" action="" id="contact-form1" method="post" >
                                <div class="form-group col-sm-4">
                                    <input class="form-control" placeholder="Name" name="name" id="Name" required="" type="text">
                                </div>
                                <div class="form-group col-sm-4">
                                    <input class="form-control" placeholder="Email" name="email" id="Email" required="" type="email">
                                </div>
                                <div class="form-group col-sm-4">
                                    <input class="form-control" placeholder="Phone" name="phone" id="Phone" type="text">
                                </div>
                                <div class="form-group col-sm-12">
                                    <textarea class="form-control"  placeholder="Message" name="message" id="message" cols="12" rows="4"></textarea>
                                </div>
                                <div class="form-group col-sm-12 text-center pt-15">                                               
                                    <input type="Submit" name="submit">                                            
                                </div>
                            </form>
                        </div>
                    </div>

                </div>                
            </section>
              
	
		</div>
	</div>
		<?php 
		include('footer.php')
	    ?>

		<?php
		if($_POST['submit'])
		{
			$name= $_POST['name'];
			$email= $_POST['email'];
			$phone= $_POST['phone'];
			$message= $_POST['message'];
	    $query ="INSERT INTO contact VALUES ('$name','$email','$phone','$message')";
		$data = mysqli_query($conn,$query);
		if($data)
		{
			//echo"Data insterted Succesfully";
		}
		{
			//echo"Data not inserted successfully";
		}
	    }