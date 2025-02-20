<?php
/**
 * Template Name: Webzemi,LLC
 */

$result = "";
$url = "https://shoesfor.me/thank-you/";
if(isset($_POST['submit'])){
  require 'phpmailer/PHPMailerAutoload.php';
  $mail = new PHPMailer(true);

  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPDebug = 2;
  $mail->Port = 25;
  $mail->SMTPauth = true;
  $mail->SMTPSecure = 'ssl';
  // $mail->SMTPSecure = 'tls';
  $mail->Username = 'alex.sanchez.webdev@gmail.com';
  $mail->Password = '********';

  $mail->setFrom($_POST['form_email']);
  $mail->addAddress('info@webzemi.com');
  $mail->addReplyTo($_POST['form_email']);

  $mail->isHTML(true);
  $mail->Subject = 'New Email from potential client! (Webzemi.com)';
  $mail->Body = '<h2 align=center>New email from '.$_POST['form_name'].' with '.$_POST['companyName'].'</h2><br />
                 <p>'.$_POST['form_message'].'</p>';

  if (!$mail->send()) {
    // Display the alert box
	echo '<script>alert("Somthing went wrong. Please try again.")</script>';
  } else {
    // Display the alert box
	echo '<script>alert("Thank you! You should be hearing from us soon.")</script>';
  wp_redirect( $url );
  exit;
  }
}
?>
<?php get_header(); ?>

<!--    ***Divider***     -->
<div class="divider divider-1">
  <h2 class="heading-sub bold"><span class="capital">Unique</span> Brand Identities</h2>
</div>
<!--

  *Section 1: Work

-->
<section id="work" class="work">
  <div class="section-content">

    <h1 class="heading heading-lrg bold">Recent Projects</h1>
    <h2 class="heading heading-small thin">Our experience in <span class="highlight bold">brand design</span>,
      <span class="highlight bold">website development</span>, and <span class="highlight bold">digital marketing</span>
      leads to captivating designs which are effective at capturing attention and
      sending a clear message.
    </h2>

    <div class="recent-work">

      <div class="item">
        <div class=" image" style="background-image: url('https://ik.imagekit.io/webzemi/surreal_RUHQLzbuB-.png?updatedAt=1632676438633')">
          <a href="https://surrealeyewear.com/"></a>
          <div class="text">
            <p>Visit Site</p>
          </div>
        </div>
        <h2 class="heading heading-small">Surreal Eyewear</h2>
      </div>

      <div class="item">
        <div class="image" style="background-image: url('https://ik.imagekit.io/webzemi/salt_RFnAehXI4PU.png?updatedAt=1632676451561')">
          <a href="https://saltrestaurantnj.com/"></a>
          <div class="text">
            <p>Visit Site</p>
          </div>
        </div>
        <h2 class="heading heading-small">Salt Seafood & Oyster Bar</h2>
      </div>

      <div class="item">
        <div class="image" style="background-image: url('https://ik.imagekit.io/webzemi/plantiful_m00voeEuo.png?updatedAt=1632676445291')">
          <a href="http://www.plantifulblends.com/"></a>
          <div class="text">
            <p>Visit Site</p>
          </div>
        </div>
        <h2 class="heading heading-small">Plantiful Blends</h2>
      </div>

      <div class="item">
        <div class="image" style="background-image: url('https://ik.imagekit.io/webzemi/sushi-room_PsurjtjWS.png?updatedAt=1632676450735')">
          <a href="http://sushiroomnb.com/"></a>
          <div class="text">
            <p>Visit Site</p>
          </div>
        </div>
        <h2 class="heading heading-small">Sushi Room | Japanese Cuisine</h2>
      </div>
    </div>
  </div>
</section>
<!--

  *Section 2: services

-->
<section id="capabilities" class="capabilities">

  <div class="section-content">
    <!--   Capabilities section heading   -->
    <h1 class="heading heading-lrg bold">Capabilities</h1>
    <h2 class="heading heading-small thin">We help you reach new heights of <span class="highlight bold">visibility</span>.
      A multi-service digital agency approach to <span class="highlight bold">growing</span> your business online.</h2>
    <!--   End Capabilities section heading   -->
    <!--   Capabilities container   -->
    <div class="container">
      <!--   Capabilities   -->
      <div class="item">
        <h2 class="heading heading-sub bold">Web Development</h2>
        <p class="text">We use innovative technology to create a beautiful, engaging and resposive
          site based on any design you choose.</p>
      </div>

      <div class="item">
        <h2 class="heading heading-sub bold highlight">E-Commerce</h2>
        <p class="text">Your online store desrves a professional and secure wensite that reflects
          your personality and charm. Let us help you build it.</p>
      </div>

      <div class="item">
        <h2 class="heading heading-sub bold">Web Design</h2>
        <p class="text">No clear picture of what your site should look like? Let us help you design
          a perfect website that fits your brand's unique aesthetic.</p>
      </div>

      <div class="item">
        <h2 class="heading heading-sub bold highlight">SEO</h2>
        <p class="text ">A beautiful website deserves to be seen. We can help enhance your search engine
          visibility with our SEO services.</p>
      </div>

      <div class="item">
        <h2 class="heading heading-sub bold">Content Creation</h2>
        <p class="text">Your brand is your story. We can help you tell that story through blog posts,
          video scripts, social media posts, and more.</p>
      </div>

      <div class="item">
        <h2 class="heading heading-sub bold highlight">Maintenance</h2>
        <p class="text">Let us worry about the attention, updates and maintenance that your website
          requires. We save you time so you can get back to business.</p>
      </div>
      <!--   Capabilities   -->
    </div>
    <!--   End Capabilities Container   -->
  </div>
</section>
<!--    ***Divider***     -->
<div class="divider divider-2">
  <h2 class="heading-sub bold"><span class="capital">Contact</span> Us</h2>
</div>
<!--

  *Section 4: Contact Us

-->
<iframe name="votar" style="display:none;"></iframe>
<section class="reach-out" id="reach-out">

  <div class="section-content">
    <!--   Contact us heading   -->
    <div class="reach-out-heading">
      <h1 class="heading heading-lrg bold">Getting in touch is <span class="highlight">simple!</span></h1>
      <h2 class="heading heading-sub thin">We’re accepting new projects and would love to hear about yours. Got a question? Send us a message.</h2>
    </div>
    <!--   End Contact us heading   -->
    <!--   Contact us Form   -->
    <form class="form" id="form" action="index.php" method="post">
      <!--   Green required label    -->
      <p class="required text thin">* required fields</p>
      <!--   Name input + label    -->
      <fieldset class="form-group">
        <input id="name" type="text" name="form_name" placeholder="YOUR NAME" class="text thin">
        <span class="text form-label">YOUR NAME</span>
        <span class="required">*</span>
      </fieldset>
      <!--   Company Name input + label    -->
      <fieldset class="form-group">
        <input id="companyName" type="text" name="companyName" placeholder="COMPANY NAME" class="text thin">
        <span class="text form-label">COMPANY NAME</span>
      </fieldset>
      <!--   Email address input + label    -->
      <fieldset class="form-group">
        <input id="emailAddress" type="text" name="form_email"  placeholder="EMAIL ADDRESS" class="text thin">
        <span class="text form-label">EMAIL ADDRESS</span>
        <span class="required">*</span>
      </fieldset>
      <!--   Text Area input + label    -->
      <fieldset class="form-group">
        <textarea  type="text" id="describeProject" name="form_message" rows="5" cols="80" style="resize: none;" placeholder="DESCRIBE YOUR PROJECT" class="text thin"></textarea>
        <span class="text form-label">DESCRIBE YOUR PROJECT</span>
        <span class="required">*</span>
      </fieldset>
      <!--   Form Submit Button    -->
      <fieldset class="form-group">
        <button type="submit" name="submit" class="button" data-submit="...Sending">SUBMIT</button>
      </fieldset>
    </form>
  </div>
</section>
