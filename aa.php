
<!DOCTYPE html>
<html lang="en">

<head>
    <title>HTTPS or HTTP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1 id="title-element"></h1>

    <script>
        var protocol = window.location.protocol;
        var title = document.getElementById("title-element");

        if (protocol == 'https:') {
            title.innerHTML = "You're using HTTPS :)";
        }else if(protocol == "http:"){
            title.innerHTML = "This connection isn't secure :( as it uses HTTP";
        }
    </script>
</body>

</html>
