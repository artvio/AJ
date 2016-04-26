<?php
    session_start();
 if((isset($_SESSION['zalogowany'])) &&($_SESSION['zalogowany']==true))
 {
     header('Location: gra.php');
     exit();
 }
    
?>


<!DOCTYPE HTML>
<html>
      <title>GRA</title>
    <head>
        <meta charset="utf-8"/>
        
    </head>
            <body>
                 <?php
                $t = array('Programiści nie tylko piszą kod. Oni też czasem, wbrew temu, co czasem wydaje się masom, odzywają się. I mówią o swojej pracy. Często naprawdę błyskotliwe rzeczy.',
                    'Są dwa sposoby na tworzenie projektu oprogramowania. Jednym jest stworzenie go tak prostym, żeby nie było w nim żadnych oczywistych braków. Drugim stworzenie go tak skomplikowanym, żeby nie było w nim żadnych oczywistych braków',
                    'Czasem też wystarczy po prostu niczego nie robić. To chyba najpopularniejsza strategia', 
                    'Problem z programistami jest taki, że nigdy nie da się powiedzieć, co robią, zanim nie jest za późno' ,
                    'A potem tylko siedzą i zacierają złowrogo ręce…',
                    'Większość współczesnego oprogramowania jest jak piramidy – z milionami elementów jeden na drugim, bez strukturalnej jedności, zbudowane przy użyciu brutalnej siły i tysięcy niewolników', 
                    'Tyle tylko,  że wtedy przynajmniej ci niewolnicy pracowali na świeżym powietrzu.'
                    );
                
                echo $t[rand(0,count($t)-1)];
                echo "<p>";
                
                ?>
              
                <form action="zaloguj.php" method="POST"> 
                    Login: <br /> <input type="text" name="login"/> <br /> 
                    Hasło: <br /> <input type="password" name="haslo"/> <br /> <br /> 
                    <input type="submit" /> 
                    
                </form> 
                
                    <?php
                    if (isset($_SESSION['blad']))
                    
                    echo $_SESSION['blad'];
                    ?>
            </body>         
</html>
