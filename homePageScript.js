
function emailChange(){

    var radYes = document.getElementById('anonymous');
    var radNo = document.getElementById('not_anonymous');

    var date = new Date();

    if(radYes.checked){

        document.getElementById('user_email').style.visibility = "hidden";
        document.getElementById('label_email').style.visibility = "hidden";


    }

    else if(radNo.checked)
    {
        document.getElementById('user_email').style.visibility = "visible";
        document.getElementById('label_email').style.visibility = "visible";
    }



}

function checkTarget() {

    var detSelected = document.getElementById('Target');

    if(detSelected.value == "DET"){

        document.getElementById('product').style.visibility = "visible";

    }

}



