<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Oberfläche ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<!DOCtype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>
            PHP Taschenrechner
        </title>
        <style type="text/css">
        </style>
    </head>
    
    <body>
        <h1>
            PHP-Taschenrecher
        </h1>
        <h5>
            Bitte beachten Sie, dass dieser Taschenrechner <br>
            zunächst nur 2 Werte miteinander berechnen kann.
        </h5>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Eingabe ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->     
<?php

$Eingabe = "";

if (isset($_GET['key'])) {
    if ($_GET['key'] != "Berechne") {
        $Eingabe = $_GET['Eingabe'] . $_GET['key'];
         
          
    }  #~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Unterteilung in [Zahl, Operator, Zahl] ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    else {
        if ($_GET['Eingabe'] == "") {
        echo "Sie müssen eine Rechung eingeben um zu rechnen";
        }
        else { #~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 
         
    } #end foreach~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Rechenlogik ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            #print_r($zahlen) . "<br>";
      $summe = "";
    $value_1 = $numbersSorted[0];
   $operator = $numbersSorted[1];
    $value_2 = $numbersSorted[2];
        
        switch($operator){                                     
                   case "+":
                       $summe = $value_1 + $value_2;
                       $Eingabe = $summe;
                   break;
                   case "-":
                       $summe = $value_1 - $value_2;
                       $Eingabe = $summe;
                   break;
                   case "*":
                       $summe = $value_1 * $value_2;
                       $Eingabe = $summe;
                   break;
                   case "/":
                       if ($value_2 == 0) {
                           $Eingabe = "ERROR_Division_by_0"; }
                       else {
                           $summe = $value_1 / $value_2;
                           $Eingabe = $summe;
                       }
                   break;
                   default:
                       echo "please define a calculation" ."<br/>";    
      
        }    
  } #end else    
} #end isset
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Rechenverlauf ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        if (isset($numbersSorted)) {
            echo "<br>";
            print_r($numbersSorted);
            if ($value_2 == 0) {
            }
            else {
                echo $value_1 . "<br>" . $operator . "    " . $value_2 . "<br>" . "__________" . "<br>" . "Summe = " . $summe . "<br>" . "=========";
            }
        } else { #~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            
         echo "<br>" . "<br>" . "Bitte geben Sie Ihre Rechnung ein" . "<br>" . "<br>";
        }
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Oberfläche ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        ?>
        <form method="get">
            <input type = "text"
                   name = "Eingabe"
                   value = <?php echo $Eingabe?> > 
            <input type="submit" name="key" value="Berechne">
            
            <!-- -->
            <br>
        </form>
        
    </body>
</html>
