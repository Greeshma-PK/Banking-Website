<html>
<title>E-bank</title>
<style>
* {
    box-sizing: border-box;
}
.section-padding {
    padding: 60px 0;
}
body {
    color: #fff;
    font-family: 'Ubuntu', sans-serif;
    font-size: 16px;
    font-weight: 300;
    line-height: 30px;
    background-image:url('a6.jpg');
   
    overflow-x: hidden;
}

/*
* ----------------------------------------------------------------------------------------
* 06.START ABOUT DETAILS DESIGN
* ----------------------------------------------------------------------------------------
*/
.about-details{}
.single_about_details{}
@media only screen and (max-width:768px) { 
.single_about_details{padding-bottom: 60px;}
}
.single_about_details h3{
color: #fff;
font-size: 45px;
line-height: 50px;
margin: 0;
font-weight: 500;
}
.single_about_details span{
background: #00bcd4 none repeat scroll 0 0;
display: block;
height: 3px;
margin: 20px 0;
width: 70px;
border-radius: 3px; 
}
.mb20{font-weight: 500;
margin-bottom: 20px;}
.single_about_details p{}
.single_about_details_img{text-align: center;}
.single_about_details_img img{display: inline-block;}
/*
* ----------------------------------------------------------------------------------------
* 06.END ABOUT DETAILS DESIGN
* ----------------------------------------------------------------------------------------
*/
</style>
<body>
<?php include('navbar.php'); ?>
  <div class="container text-center " style="width: 50%; border: 3px solid black; margin-top: 30px ;">

<section class="about-details section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-6" data-aos="fade-right">
            <div class="single_about_details">
              <h3>About Us</h3>
              <span></span>
              <p class="mb20"><b>Make money work for positive, social, environmental and cultural change.</b></p>
              <p>Our Bank is in business to help create a society that protects and promotes the quality of life of all its members, and that has human dignity at its core. we have enabled individuals, organisations and businesses to use their money in ways that benefit people and the environment.</p>
              <p class="mb20"><b>A clear compass and solid foundation for values-based banking </b></p>
              <p class="mb20"><i>Transparency </i></p> 
             <p> We believe that people who entrust us with money need to know what we are doing with their money. That's why we show them that on Know where your money goes.</p>           
             <p class="mb20"><i>Excellence </i></p> 
             <p>As a bank, we want the quality of our products and services to be among the best in the banking sector.</p>
            </div>
          </div><!-- END COL-->
          <div class="col-md-5 col-md-offset-1 col-xs-12">
            <div class="single_about_details_img">
              <img class="img-responsive" src="http://ekramit.net/tf/kaniz/assets/img/desktop2.png" alt="">
            </div>
          </div><!-- END COL-->
        </div><!-- END ROW-->
      </div><!-- END CONTAINER-->
    </section>
</body>
</html>
