<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jquery AJAX load()</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="tugas4/app.js"></script>
</head>
<body class="bg-info">

    <header style="color: white;">
        <div class="container my-3 text-center">
            <h1>TOPIK</h1>
            <h2>JQUERY AJAX Load()</h2>
        </div>
    </header>

    <section>
            <div class="container py-3" id="content1">
                <button class="btn btn-primary" id="video-btn">Click here to display some videos!</button>
            </div>
    </section>
    <section style="color: white;">
        <div class="container py-3" id="content2">
            <button class="btn btn-primary" id="comments-btn">Click here to display some comments!</button>
        </div>
    </section>

    <script>
        $(document).ready(function(){
        $("#video-btn").click(function(){
        $("#content1").load("tugas4/embed-videos.html #embed-videos", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success")
            alert("External content loaded successfully!");
            if(statusTxt == "error")
            alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
        });
        $("#comments-btn").click(function(){
        $("#content2").load("tugas4/embed-videos.html #comments", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success")
            alert("External content loaded successfully!");
            if(statusTxt == "error")
            alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
        });
    });

    </script>


</body>
</html>
