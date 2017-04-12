<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Final Quiz for Lip building</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
       /*$totalCorrect1 = 0;
        $totalCorrect2 = 0;
         $totalCorrect3 = 0;
             $totalCorrect4 = 0;
              $totalCorrect5 = 0;*/
              
          switch($answer1) {
           case "A":
               $totalCorrect1= 0;
               break;
           case "B":
               $totalCorrect1 = 1;
                 break;
           case "C":
               $totalCorrect1 = 2;
                 break;
           case "D":
               $totalCorrect1 = 3;
                 break;
          };
           switch($answer2) {
           case "A":
               $totalCorrect2 = 0;
                 break;
           case "B":
               $totalCorrect2 = 1;
                 break;
           case "C":
               $totalCorrect2 = 2;
                 break;
           case "D":
               $totalCorrect2 = 3;
                 break;
          };
           switch($answer3) {
           case "A":
               $totalCorrect3 = 0;
                 break;
           case "B":
               $totalCorrect3 = 1;
                 break;
           case "C":
               $totalCorrect3 = 2;
                 break;
           case "D":
               $totalCorrect3 = 3;
                 break;
          };
          
           switch($answer4) {
           case "A":
               $totalCorrect4 = 0;
                 break;
           case "B":
               $totalCorrect4 = 1;
                 break;
           case "C":
               $totalCorrect4 = 2;
                 break;
           case "D":
               $totalCorrect4 = 3;
                 break;
          };
          
           switch($answer5) {
           case "A":
               $totalCorrect5 = 0;
                 break;
           case "B":
               $totalCorrect5 = 1;
                 break;
           case "C":
               $totalCorrect5 = 2;
                 break;
           case "D":
               $totalCorrect5 = 3;
                 break;
          };
            
          
          $totalCorrect = $totalCorrect1+$totalCorrect2+$totalCorrect3+$totalCorrect4+$totalCorrect5;
          
         if ($totalCorrect <=4) {
                  echo "Too much grandma life";
         }
         else if ($totalCorrect <=8) {
                  echo "Just right level of grandma life!";
         }
         else if ($totalCorrect <=12) {
                  echo "Some grandma life, need more!";
         }
         
         else {
            
                  echo "Grandma life needed stat- its a grandma life emergency!";
              
          }
            
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>