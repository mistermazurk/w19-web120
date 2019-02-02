<?php include 'includes/header.php';?>   
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/desktop.jpg" class="desktop" alt="" />
 <img src="images/phone.jpg" class="phone" alt="" />
 <p>My name is Lee Mazurk.</p>
 <p>I went to Marjory Stoneman Douglas Highschool In Parkland, FL and the University of Washington in Seattle, WA. My hobbies include (but are not limited to): reading books, playing video games, following professional and collegiate sports and watching movies. I've always been facinated by computers and now I'm finally learning about them in-depth. So far in my studies I have gravitated towards web development.</p>
 <p></p>
 <p></p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
    <h3>Contact Form PlaceHolder</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">USA</option>
      <option value="canada">Canada</option>
      <option value="usa">Japan</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Tell me something good.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
 <img src="images/tablet.jpg" class="tablet" alt="" />
 <p>Lorem Ipsum place holder text goes here for now</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</aside>
<!-- END RIGHT COL -->
<?php include 'includes/footer.php';?>
