<?php
/**
 * Created by IntelliJ IDEA.
 * User: fieldr6
 * Date: 16/11/2017
 */



$id_query = "SELECT * FROM feedback WHERE id";



?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Suggestions</title>
    <link type="text/css" href="/javascript/jquery-tablesorter/themes/blue/style.css" rel="style.css" />
    <style>

        table tr td.owned { background-color: #dfffc6}
        table tr td.geo { background-color: #ffdbc6}
        table tr td.accept { background-color: #8eff85}
        table tr td.reject { background-color: #feb5b9}
        table tr td.cancelled { background-color: #d8d7d7}

    </style>
    <script language="javascript" type="text/javascript" src="/javascript/jquery/jquery.js"></script>
    <script language="javascript" type="text/javascript" src="/javascript/jquery-metadata/jquery.metadata.js"></script>
    <script language="javascript" type="text/javascript" src="/javascript/jquery-tablesorter/jquery.tablesorter.js"></script>
    <script language="javascript" type="text/javascript">
        $(document).ready(function()
            {
                $("#myTable").tablesorter();

                $('#addNewIssue').click(function()
                {
                    $("#addIssueDialog").toggle();
                });

            }
        );
    </script>
    <meta http-equiv="refresh" content="1800">
</head>
<body>
<div id="header">
    <p>
        <img src="Dell_EMC_logo.png" height="55px" width="85px"/>
        <span class="title">Feedback Suggestions</span>
    </p>
    <hr />
    <form> <button type="button" onclick="location='closed.pl'">Closed Issues</button>  <button type="button" onclick="location='presubmission.pl'">Pre-submission Review</button> </form>
    <hr />
</div>
<div>
    <table id="myTable" class="tablesorter">
        <thead>
        <tr>
            <th>ID</th>
            <th>Date Submitted</th>
            <th>Submitter</th>
            <th>Target</th>
            <th>Reason</th>
            <th>Thumbs up</th>
        </tr>
        </thead>
        <tbody>



        </tbody>
    </table>
</div>
</body>
</html>

