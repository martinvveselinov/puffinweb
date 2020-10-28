<?php
    session_start();
    if(!isset($_SESSION['uname']) || $_SESSION['role'] != 0){
        header("Location: ../../index.php");
    }
    else{
        include "../../renders/header.html";
    }
?>
    <?php
            echo "<h2>Здравей, " . $_SESSION['uname'] . "!</h2>";
        ?>
<p>Това е системата за качване на реферати по WWW Технологии. <br>
Тук можеш да ревюираш рефератите на колеги, както и да качиш и получиш ревю за своя.</p>
            </div>
        </div>
    </body>
</html>