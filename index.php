<!DOCTYPE html>
<!--
    CIS-12
    Christopher Garcia
    Lecture Website
    Updated on:8:30 8/31/16
-->


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
            Chapter One of PHP Lecture
        </h1>
            <p>
                The PHP tag is <?php     ?> and comments in the the php tag are
                hidden to viewers. The following is printed by PHP!
                <?php 
                //Can you see me?
                    echo 'Hello World' 
                ?> 
            </p>
            <p>
                Strings can be appended with the dot (.) Operator. 'Chris'.'Penis Guy'.
                Same fucntionality as C++ with the += operators. Math is the same.
                Number_Format(var,floatpoint) function like IOManip.
                Constants defined as define('NAME',value).
                Escape operator '\' could print syntax. 't' is tab.
            </p>
        <h2>
            Chapter One of Java Scrpit Lecture
        </h2>
            <p>
                In order to use JavaScript you need to use the "<script></script>" tags.
                The document.write() method prints to the screen. 
            </p>
        <h3> Lets use JavaScript! </h3>
            <script>
                document.open();
                document.write("<h2>This is html printed with JS</h2>");
            </script>
            <p>
                window.prompt("string") function to accept input from the user.
                JS can respond to input from the user.
                Lets try it. Ask a question
            </p>
            <script>
                var name;
                document.write(window.prompt('How are you?'));
            </script>
        
        
        
    
    </body>




</html>
