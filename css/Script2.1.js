$(document).ready(function () {
    $("#Nom").on("input", borderChange)
    $("#StDate").on("input", isDate)
    $("#FiDate").on("input", isDate)
    $("#envoyer").click("submit", soumettre)
});


function isDate() {
    var valid = /^[0-3][0-9]\/[01][0-9]\/[12][0-9]{3}$/
    if (valid.test(this.value) == true) {
        $(this).addClass("bg-green-200 border-green-600");
    }
    else {
        $(this).removeClass("bg-green-200 border-green-600").addClass("bg-orange-200 border-red-600");
    }
}
function borderChange(){
    var txt = $(this).val();
    if (txt.length > 1){
        $(this).removeClass("bg.red-200").addClass("bg-green-200");
    } else {
        $(this).removeClass("bg-gray-200").addClass("bg-red-200");
        $(this).removeClass("bg-green-200").addClass("bg-red-200");
    };
};

function soumettre(){
    var nom = $("#Nom").val();
    var statue = $("#grid-Status").val();
    var editor = $("#grid-Editor").val();
    var startDate = $("#StDate").val();
    var finishDate = $("#FiDate").val();
    var score = $("#score").val();
    var commentary = $("#infos").val();
    console.log("Nom : "+ nom);
    console.log("Status : "+ statue);
    console.log("Editor : "+ editor);
    console.log("Start Date: "+ startDate);
    console.log("Finish Date : "+ finishDate);
    console.log("Score : "+ score);
    console.log("Commentary : "+ commentary);
}
