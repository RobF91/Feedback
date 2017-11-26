
function emailChange(){

    var radYes = document.getElementById('anonymous');
    var radNo = document.getElementById('not_anonymous');

    var date = new Date();

    if(radYes.checked){

        document.getElementById('user_email').style.visibility = "hidden";
        alert("no");


    }

    else if(radNo.checked)
    {
        document.getElementById('user_email').style.visibility = "visible";
        alert("yes");
    }



}

function checkTarget() {

    var detSelected = document.getElementById('Target');

    if(detSelected.value == "DET"){

        document.getElementById('product').style.visibility = "visible";

    }

}



