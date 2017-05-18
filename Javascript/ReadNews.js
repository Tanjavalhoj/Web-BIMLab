/**
 * Created by Tanja on 05/05/2017.
 */

$(document).ready(function () {
    getNews();
});


function deleteNews(id) {
    if(confirm("Do yo want to delete this news?")) {
        $.post("php/delete.php", {id: id}).done(function(data) {
            alert("Deleted news with id: " + id + " complete");
        });
    }
    location.reload();
}

function getNews() {
    $.get("Php/Read.php", function (data){
        result = JSON.parse(data);
        $("#news").clear;
        for(i = 0; i < result.length; i++){
            news = result[i];
            $("#news").append(
                '<tr>' +
                '<td>' + news.id + '</td>' +
                '<td>' + news.title + '</td>' +

                '<td>' +
                '   <a href="ShowActiveNews.php?id=' + news.id+ '&title='+ news.title+'&paragraph='+news.paragraph+'&image='+news.image+'">' +
                '       <button class="btn btn-success">Update</button>' +
                '</a></td>' +
                '<td><button class="btn btn-danger" onclick="deleteNews(' + news.id + ')">Delete</button></td>' +
                '<td><a href="php/ChangeActiveNews.php?id='+news.id+'"><button class="btn btn-primary">Activate News</button></a></td>' +
                '</tr>'
            )
        }
    });

    // Update primary articles
    $.get("Php/ActiveNews.php", function (data){
        result = JSON.parse(data);
        $("#news").clear;
        for(i = 0; i < result.length; i++){
            news = result[i];
            $("#NewsActive").append(
                '<tr>' +
                '<td>' + news.id + '</td>' +
                '<td>' + news.title + '</td>' +

                '<td>' +
                '   <a href="ShowActiveNews.php?id=' + news.id+ '&title='+ news.title+'&paragraph='+news.paragraph+'&image='+news.image+'">' +
                '       <button class="btn btn-success">Update</button>' +
                '</a></td>' +
                '<td><button class="btn btn-danger" onclick="deleteNews(' + news.id + ')">Delete</button></td>' +
                '</tr>'
            )
        }
    });




}