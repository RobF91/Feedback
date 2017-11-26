
function emailChange(){

    var radYes = document.getElementById('not_anonymous');
    var radNo = document.getElementById('anonymous');

    var date = new Date();

    if(radYes.checked){

        document.getElementById('user_email').style.visibility = "hidden";

    }

    else if(radNo.checked)
    {
        document.getElementById('user_email').innerHTML.style.visibility = "visible";
    }



}

function checkTarget() {

    var detSelected = document.getElementById('Target');

    if(detSelected.value == "DET"){

        document.getElementById('product').style.visibility = "visible";

    }

}


