homepage.php
<?php 

include('includes/header.php');
include('includes/navbar.php');
?>
<link rel="stylesheet" href="assets/css/homepage.css">   

<!--------------- HOME PAGE --------------->

<section class="homepage" id="Home" style="background-image: url('assets/images/Aquaflowbg.png'); background-size: cover;">

    <div class="quote" style="position: absolute; top: 120px; right: 150px;">
        <div class="d-sm-flex align-items-center justify-content-between" style="margin-top: 10px;">
        <div>
            <h1 class="aquaflow-text" style="font-family: 'Suez One', sans-serif; font-weight: bold; color: #013D67; font-size: 80px; letter-spacing: 5px;">Hydrate Daily!</h1>
            <h5 class="aquaflow-text" style="font-family:  sans-serif; font-weight: bold; color: #2B7AB8; font-size: 21px; text-align: right; margin-right: 10px; margin-top: 20px;">Where every drop counts, we hydrate the world</h5>
            <h5 class="aquaflow-text" style="font-family:  sans-serif; font-weight: bold; color: #013D67; font-size: 21px; text-align: right; margin-right: 10px;">From source to glass, our commitment flows.</h5>

        </div>

        </div>
    </div>

    <div class="water_drop" style="position: absolute; top: 120px; left: 230px; background-color: rgba(175, 214, 229, 0); box-shadow: inset 17px 30px 26px 0px rgba(25, 25, 112, 0.7), inset 1px 4px 32px 4px rgba(65, 105, 225, 0.7), 15px 20px 25px 1px #c9d8e0;">
    <h2 class="order"><a href="order.php" class="ordernow-btn" style="color: white; text-decoration: none; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Order Now</a></h2>
</div>


</section>


<!--------------- SERVICES --------------->
<section class="Services pt-lg-1 text-center text-sm-start" id="Services" style="background-color: #AAD7F6;">
  <h1 class="services" style="margin-top: 70px; margin-left: 55px; margin-bottom: 40px;">Services</h1>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-5">
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/Quality.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Quality</h5>
                        <p class="card-text">Improved ordering experience with required supplier certification checks that provide you with high-quality water that complies with government regulations.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/paymenttt.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Payment</h5>
                        <p class="card-text">There's no need to worry about COD or waiting for deliveries anymore. Through the app, GCash, Maya, and Grab the three most popular online payment methods are accepted.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="assets/images/Hassle free.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hassle free</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------- ABOUT US --------------->
<section class="pt-lg-3" id="AboutUs" >
      <h1 class="About">About Us</h1>
      <div class="aboutus">
        <div class="drop" style="--clr:#013D67;">
            <div class="content">
                <h2>Description</h2>
                <p>Provides users with easy access to information about water quality,
                distribution, and conservation efforts in their area. 
                </p>
            </div>
        </div>
        <div class="drop" style="--clr:#013D67;">
            <div class="content">
                <h2>Mission</h2>
                <p>Promote sustainable water management practices and raise awareness
                about the importance of clean water access for communities worldwide 
                </p>
            </div>
        </div>
        <div class="drop" style="--clr:#013D67;">
            <div class="content">
                <h2>Vision</h2>
                <p>Create a world where every individual has access to clean and safe drinking water, contributing to healthier communities and a sustainable future</p>
            </div>
        </div>
        <div class="drop" style="--clr:#013D67;">
            <div class="content">
                <h2>Commitment</h2>
                <p>we are dedicated to ensuring access to clean water for all, fostering sustainable practices, and promoting water conservation globally.</p>
            </div>
        </div>
    </div>  
</section>
<!--------------- CONTACT --------------->
<section class="contacts p-5 p-lg-0 pt-lg-5 text-center text-sm-start"  id="contacts">
    <footer class="p-5">
      <div class="first-container" >
        <div class="d-sm-flex align-items-center justify-content-between" id="contact-container-box">
          <div class="row">
            <span class="contact-title d-flex justify-content-center">CONTACT</span>
              <div class="col-md-3 col-lg-6 text-left pl-lg-5" id="contact-items-container">
                <h4 class="contact-text" id="contact-header">Drop Me a Message</h4>
                <p class="contact-text lead my-4" id="paragraph-text">
                  Message us for more inquiries. Contact us below! We are happy to help and respond to your concern.
                </p>
                <ul class="contact-ul">
                  <li>
                    <a href="tel: 09814377193" target="_blank" class="contact-link">
                      <div class="svg-container bg-transparent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                          <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                        </svg>
                      </div>
                    </a>
                    <p class="contact-text" id="contact-info-text">++639 814377193</p>
                  </li>
                  <li>
                    <a href="..." target="_blank" class="contact-link">
                    <div class="svg-container bg-transparent">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                      </svg>
                    </div>
                    </a>
                    <p class="contact-text" id="contact-info-text">AquaflowStation@gmail.com</p>
                  </li>
                </ul>
            </div>
                <div class="form-container">
                  <form>
                    <div class="input-box">
                      <input type="text" placeholder="Name" id="username" name="username" required>
                    </div>
                    <div class="input-box">
                      <input type="email" placeholder="Email" id="email" name="useremail" required>
                    </div>
                    <div class="input-box">
                      <input type="text" placeholder="Subject" id="subject" name="usersubject" required>
                    </div>
                    <div class="input-box">
                      <textarea placeholder="Message" id="message" name="usermessage" required></textarea>
                    </div>
                      <input type="submit" value="Send" id="loginbtn">
                  </form>
                </div>
              </div>
          </div>
      </div>
      <hr>
      <div class="d-flex justify-content-between align-items-center" id="footer-container">
            <div class="footer-logo">
                <p>Aquaflow</p>
            </div>
            <div class="icon-container">
                <div class="footer-svg-container">
                    <a href="..." target="_blank" class="footer-svg-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                        </svg>
                    </a>
                </div>
                <div class="footer-svg-container">
                    <a href="..." target="_blank" class="footer-svg-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                        </svg>
                    </a>
                </div>
                <div class="footer-svg-container">
                    <a href="..." target="_blank" class="footer-svg-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                        <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--------------- COPYRIGHT --------------->
<div class="copyright">
      <p>Copyright ©Aquaflow by <i class="fa-solid fa-dragon"></i> Aquaflow Water Station</p>
</div>
<!--------------- BOOTSTRAP JS --------------->
<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/passwordCheck.js"></script>
<!--------------- ALERTIFY JS --------------->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
    <?php
        if(isset($_SESSION['message'])){ // CHECK IF SESSION MESSAGE VARIABLE IS SET
    ?>
    alertify.alert('AquaFlow', '<?= $_SESSION['message']?>').set('modal', true).set('movable', false); // DISPLAY MESSAGE MODAL
    <?php
        unset($_SESSION['message']); // UNSET THE SESSION MESSAGE VARIABLE
        }
    ?>
</script>
<!--------------- FOOTER --------------->
<?php include('includes/footer.php');?>