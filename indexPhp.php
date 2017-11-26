<?php

$selected_radio = $_POST['user_email'];
$target_aud = $_POST['feedback_for'];
$feedback_type = $_POST['feedback_type'];
$add_info = $_POST['additional_info'];



function insertValues(){

    //$sql = "INSERT INTO feedback (target) VALUES '$_POST[feedback_for]'";


    $sql = "INSERT INTO feedback (target) VALUES d";



    query($sql);
}


?>