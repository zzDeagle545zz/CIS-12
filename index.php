<html>
<!-- Assigns the title and Links CSS StyleSheet -->
    <head>
        <meta charset="utf-8">
        <title>LectureWebsite</title>
        <link rel="stylesheet" href="main.css">
    </head>
<!-- Fill the Body with Notes and Functionality -->
    <body>
        <h1>
            Welcome to my in class website!
        </h1>
        <script>
            var pKey="titan545";
            var pWord;
            var uName;
            uName=window.prompt("What is your username?");
            pWord=window.prompt("What is thee password?");
            if(pKey==pWord)
                window.location='localhost:/Lecture';
            else
                 document.write("Nahhhhhhhh");
        </script>
    </body>




</html>