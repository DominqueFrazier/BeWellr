<DOCTYPE! HTML>

<html>
 <body>
 <?php
	include 'header.php';
	logged_in_redirect();
  include 'db_connect/quoteGenerator.php';
?>
   <h2>Welcome to BeWell'r</h2>
		<div class="container">
			<div class="bioBox">
				<h4>What is BeWell'r All About?</h4>
				<p>This BeWell’r system has been developed with your health in mind. BeWell’r is designed to assess, educate, and evaluate lifestyles, while providing reinforcing data for health promoting actions in an easy to understand format. These tools align with the National Wellness Institute’s (NWI) mission and core qualities by helping professionals and organizations develop lifestyles that have been shown to support optimal individual and community health and wellness. BeWell’r provides a multidimensional educational lifestyle assessment of positive actions that include the 6 NWI dimensions of wellness, physical, social, emotional, spiritual, intellectual and occupational, plus an additional dimension of wellness - environment.</p>
			</div>
			<div class="wrap">
				<a href="login.php" class="button">Log In</a>
				<a href="guest.php" class="button2">Continue as Guest</a>
			</div>
    </div>

     <div class="bottomContainer">
        <div class="quoteBox">
            <h3 class="quote"><?php echo $quoteText; ?></h3>
            <p class="quoteAuthor"><?php echo $quoteAuthor; ?></p>
         </div>
     </div>
     <div class="imageContainer">

         <a class = "facts" href="#popup1"><img id="food" src="images/food.png"></a>
            <div id="popup1" class="overlay">
	           <div class="popup">
                    <p>An average woman needs to eat about 2000 calories per day to maintain, and 1500 calories to lose one pound of weight per week. An average man needs 2500 calories to maintain, and 2000 to lose one pound of weight per week. <a href="https://authoritynutrition.com/how-many-calories-per-day/" target="_blank">Click Here for more information</a></p><a class="close" href="#showpopup">&times;</a></div></div>

         <a class = "facts" href="#popup2"><img id="fruit" src="images/fruit.png"></a>
         <div id="popup2" class="overlay">
	           <div class="popup">
                    <p>According to the 2005 Dietary Guidelines for Americans, you should consume between five and 13 servings of fruits and vegetables each day. <a href="http://healthyeating.sfgate.com/many-fruits-veggies-should-eat-day-3324.html" target="_blank">Click Here for more information</a></p><a class="close" href="#showpopup">&times;</a></div></div>

         <a class = "facts" href="#popup3"><img id="water-bottle" src="images/water-bottle.png" ></a>
         <div id="popup3" class="overlay">
	           <div class="popup">
                    <p>The commonly recommend amount of water to consume is eight 8-ounce glasses, which equals 64-ounces. <a href="https://authoritynutrition.com/how-much-water-should-you-drink-per-day/" target="_blank">Click Here for more information</a></p><a class="close" href="#showpopup">&times;</a></div></div>

        <a class = "facts" href="#popup4"><img id="weight" src="images/weight.png"></a>
        <div id="popup4" class="overlay">
	           <div class="popup">
                    <p>Body mass index (BMI) is a measure of body fat based on your weight in relation to your height. BMI percentile is the best assessment of body fat. <a href="https://www.nhlbi.nih.gov/health/educational/lose_wt/BMI/bmicalc.htm" target="_blank">Click Here to calculate your BMI</a></p><a class="close" href="#showpopup">&times;</a></div></div>

        <a class = "facts" href="#popup5"><img id="bench" src="images/bench.png"></a>
         <div id="popup5" class="overlay">
	           <div class="popup">
                    <p>Strength training increase your physical work capacity, it also improves your ability to perform activities of daily living. <a href="http://www.active.com/fitness/articles/5-benefits-of-weight-training" target="_blank">Click Here to see a list of benefits of weight training</a></p><a class="close" href="#showpopup">&times;</a></div></div>

         <a class = "facts" href="#popup6"><img id="cardiogram" src="images/cardiogram.png"></a>
          <div id="popup6" class="overlay">
	           <div class="popup">
                    <p>Fun Facts: A normal heart valve is about the size of a half dollar. Also the blue whale has the largest heart, weighing over 1,500 POUNDS! <a href="https://health.clevelandclinic.org/2016/08/22-amazing-facts-about-your-heart-infographic/" target="_blank">To see more amazing facts about your heart, click here</a></p><a class="close" href="#showpopup">&times;</a></div></div>

         <a class = "facts" href="#popup7"><img id="strawberry" src="images/strawberry.png"></a>
         <div id="popup7" class="overlay">
	           <div class="popup">
                    <p>Current research suggests that eating just 8 strawberries a day can improve heart health, lower blood pressure, reduce inflammation, reduce the risk of cancers and even improve cognitive function. <a href="http://www.temeculavalleystrawberryfarms.com/fun-facts-about-strawberries" target="_blank">Click Here to see more fun facts about strawberries</a></p><a class="close" href="#showpopup">&times;</a></div></div>

         <a class = "facts" href="#popup8"><img id="juice" src="images/juice.png"></a>
         <div id="popup8" class="overlay">
	           <div class="popup">
                    <p>One hundred percent juices are filled with the same nutrients found in whole fruit. They may also be fortified with additional nutrients like vitamin C, calcium and vitamin D. <a href="http://juicecentral.org/news/facts-about-juice/" target="_blank">Click Here to see more facts about juice</a></p><a class="close" href="#showpopup">&times;</a></div></div>

     </div>

 </body>
</html>
