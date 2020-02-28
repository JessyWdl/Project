<?php
endSession();

function endSession(){
    session_start ();

    session_unset ();

    session_destroy ();

    header ('location: /projetPhP/index.php');
}

?>