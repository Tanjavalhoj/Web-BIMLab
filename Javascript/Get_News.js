/**
 * Created by Tanja on 05/05/2017.
 */

$(document).ready(function () {
    getNewsActive();
});

function getNewsActive() {
    $.get("Php/ActiveNews.php", function (data){
        var result = JSON.parse(data);

        var article = result[0];
        $("#titelhead").append(news.title);
        $("#paragraph").append(news.paragraph);
        $("#image").append(news.image);
    });
}

function checkLength(){
    var textbox = document.getElementById("paragraph");
    if(textbox.value.length > 3500){
        alert("News are maybe to beg for the screen")
    }
}