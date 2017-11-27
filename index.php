<html xmlns:display="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">

<link rel="stylesheet" type="text/css" href="style.css" />

<body>
<?php
require 'connect.php';

//Ip address
$ip=$_SERVER['REMOTE_ADDR'];
//echo "IP address= $ip"

Connection();

?>

<script src="homePageScript.js">

    emailChange();
    checkTarget();
    btnClickPop();
    clickDestroy();

</script>


<form action="POST">

    <div id="Page_Background" style="">
        <div id="header">

            <div id="site_logo" class="DellEMC_logo" style="width: 250px; height: 60px; float:left; margin-right: 35px; display:inline;">
                <img src="Dell_EMC_logo.png" style="width: 250px; height: 60px;">
            </div>

            <div style="width: 100px; height:10px; display: inline;">
                <text style="font-size:40px; color:#0099e6; margin-left:7%;">
                    Remote Proactive Feedback Portal
                </text>
            </div>


        </div>

    <br>

    <div id="main_content" style="width:100%; height:40%;">

        <div id="Customer_Drop_Down">

            <h3 style="background: #0000ff; color:white; height:21px; text-align:center; border-top-left-radius:25px; border-top-right-radius:25px;">Feedback Form</h3>

            <form id="feedback_form" action="submit.php" method="post">

                <br><br>

                <label style="margin-left:5%;">Target Audience</label>
                <select onchange="checkTarget()" id="Target" name="for" required="">
                    <option value="">Please Choose</option>
                    <option value="Management">Management</option>
                    <option value="DET">DET</option>
                </select>

                <br><br>

                <label style="margin-left:5%;">Feedback Type</label>
                <select id="type" name="type_feedback">
                    <option value="">Please Choose</option>
                    <option value="Processes+Procedures">Processes/Procedure</option>
                    <option value="Quality">Quality</option>
                    <option value="General_Suggestions">General Suggestions</option>
                </select>


                <label style="margin-left:5%;" display: hidden>Product</label>
                <select display: hidden id="product" name="type_feedback">
                    <option value="">Please Choose</option>
                    <option value="Processes+Procedures">Processes/Procedure</option>
                    <option value="Quality">Quality</option>
                    <option value="General_Suggestions">General Suggestions</option>
                </select>

        </div>

        <div id="additional_info_textarea">

            <br><br>

            <label style="margin-left:5%;">Additional Information</label><br>
            <textarea maxlength="1500" id="additional_info" name="add_info" cols="40" rows="5" placeholder="Please enter your feedback up to 1500 characters long." style="margin-left:25%; width:70%; height:30%; resize: none;" required
                      style="color:#BBB;" onkeydown="if (event.keyCode == 13) document.getElementById('Submit_Request').click()"></textarea>

        </div>

        <div id="email_info">

            <br> <br>
            <label style="margin-left:5%;">Anonymous Feedback?</label>
            <input type="radio" class="anon_feedback" id="anonymous" name="anon" value="yes" onclick="emailChange()">Yes
            <input type="radio" class="anon_feedback" id="not_anonymous" name="anon" value="no" onclick="emailChange()">No

            <br><br>
            <div id="modalConfirm" class="modal">

                <div class="modal-content" id="confirmPop">
                    <span class="close" id="spanPopUp" onclick="clickDestroy()">&times;</span>
                    <p style="align-content: center">Your feedback has been submitted.</p>
                    <p style="align-content: center">We thank you for your input.</p>
                </div>

            </div>

            <label style="margin-left:5%;"  id="label_email" display: none>Your Email</label>
            <input type="email" id="user_email" name="email" style="width:50%; margin-left:0%;" type="hidden" onkeydown="if (event.keyCode == 13)
                                    document.getElementById('Submit_Request').click()">

            <br><br>
        </div>

        <div id="button_section">

            <button  type="submit" id="Submit_Request" style="height:; width:; margin-left:45%; text-align:center;" onclick="btnClickPop()">
                Submit
            </button>

            <button type="reset" id="Reset_Button" onclick="this.form.reset(); " style=" margin-right:5%; float:right;">
                Reset Form
            </button>


            <input id="load" value="<?= $ip ?>" type="hidden">


            <br><br>

            <h3 style="background: #0000ff; height:21px; text-align:center; border-bottom-left-radius:25px; border-bottom-right-radius:25px;"></h3>


</form>

</div>
        <br>
        <div style="text-align:center;">
            Copyright © Robert Field
        </div>
    </div>

</div>

</form>

</body>

</html>



