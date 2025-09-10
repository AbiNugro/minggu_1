<?php include("class_lib.php"); ?>

<?php
    $stefan = new person();
    $jimmy = new person();

    $stefan->set_name("Stefan Mischook");
    $jimmy->set_name("Nick Waddles");

    echo "Stefan's full name: ".$stefan->get_name() . "<br/>";
    echo "Nick's full name: ".$jimmy->get_name() . "<br/>";

    // directly acessing properties in a class is a no-no
    echo "Stefan's full name: ".$stefan->name . "<br/>";

?>
