<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="../mystyle.css">
    <title>Steaks</title>
  </head>
<body>

  <h1>The Different Cuts of Steak</h1>
  <img src="../images/cuts.jpg" alt="Steak Cuts" width="420" height="300">
  <p>Choosing your cut of this delicious piece of meat will definitely affect the taste and texture of your steak. Here, you will find the three most common cut that are well known in the meathead community.</p>

  <h2>1) Strip Steak (aka NY Strip)</h2>
  <img src="../images/nystrip.jpeg" alt="Strip Steak" width="420" height="300">
  <p>This cut has the beefiest taste out of the three listed. It has a nice generous amount of fat at the edge of this steak which gives its prized taste. The tenderness level on this steak is not quite as tender as a ribeye or a filet, but it sure is not as tough as a cheaper counterpart.</p>

  <h2>2) Ribeye Steak</h2>
  <img src="../images/ribeye.jpeg" alt="Ribeye Steak" width="420" height="300">
  <p>The ribeye steak has the right  amount of flavor and tenderness. It is the most balanced steak out of these three stakes as it has an amount of fat that is mostly blend in with the meat, which gives its tender light beefy flavor.</p>

  <h2>3) Filet Mignon</h2>
  <img src="../images/filetmignon.jpeg" alt="Filet Mignon" width="420" height="300">
  <p>This steak will be, and will always be, the most expensive part of the beef. It is considered the creme de la creme of the entire beef as it is the most tender steak available. Flavorwise, it is not quite there as compared to the striploin and the ribeye as it has little to no fat. </p>

  <h1>A Guide to Doneness</h1>
  <img src="../images/doneness.jpg" alt="Steak Cuts" width="420" height="300">
  <p>This steak parameter will great influence on your tasting experience as it is the part that literally comes in your mouth first before going to your belly.</p>

  <h2>1) Rare (120°F)</h2>
  <p>Anything before this doneness is not deemed safe to eat according to the USDA and the Canadian Foods Association as the bacteria still thrives under 120F. This doneness level is made for people that wants the purest form of meat eating available as it is safe to eat and less cooked. You will definitely not have to chew a lot and it will be extremely juicy. The inside of the steak should be of a bright red.</p>

  <h2>2) Medium Rare (130°F)</h2>
  <p>This doneness is considered the best amongst the steak eaters community as it have the right amount of chewness and juicyness. The color of the meat should be at a dark pink.</p>

  <h2>3) Medium (140°F)</h2>
  <p>This doneness is mostly chosen by consummers who does not really know which doneness to take as it is the mid ground of rare and well done. It will not be as juicy as a rare steak nor it will not be as chewy as a well done steak. The center should be a nice pinkish color.</p>

  <h2>4) Medium Well (150°F)</h2>
  <p>This doneness is the last step before the well done and should be the maximum doneness that you should choose. It still have a bit of juices left, but the chewyness of a well done steak is begining to appear. </p>

  <h2>5) Well Done (160°F)</h2>
  <p>This doneness is mostly selected by eaters who are scared of blood or bacterias as there is no more traces of red and it is completely cooked. The texture is dry with a lot of chew to it. The color should be of a dark brown. </p>

  <h3>Tell me more about yourself!</h3>

  <form name="subs" action="thankyou.php" method="POST" onsubmit="return validate();">
    <label for="name">First Name: </label><input type="text" name="first" id="first"> <br> <br>
    <label for="name">Last Name: </label><input type="text" name="last" id="last"> <br> <br>
    <label for="name">Favorite Cut: </label><input type="text" name="cut" id="cut"> <br> <br>
    <label for="name">Favorite Doneness: </label> <input type="text" name="doneness" id="doneness"> <br> <br>
    <input class="button" type="submit" value="Google Search"> <!--checks function to verify for empty form-->
  </form>

</body>
</html>
<script src="../scripts.js"></script>