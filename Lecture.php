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
            //Comment
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
        
         <h1>
            Chapter Two of PHP Lecture
        </h1>
            <p>
                Form html tag is used to post to the page 
                has Get function and post function.
                Super Global Varibles
                $_GET
                $_POST
                $_REQUEST
                $_SERVER
            </p>
            <form action ="script.php" method="post">
            </form>
        
            <p>
                Arrays-
                $ARRAY[]= (Syntax)
                string array syntax "IL is {$states['IL']} GOOD
                $Array[Does not need size] Dynamically allocated 
                Can use Char index but will overwrite the 0 pos and so forth.
                $states=Array('CA'=>'California') Pos 0 also could set pos to whatever with
                1=>\n
                Foreach Loop
                foreach($array as $value)
                foreach($array as key => $value)
                $array= Range(1,31) Example
                Can combine Arrays with a multidem Arrays.
                $Array =array('pos'=>$array2, etc)
                Foreach use $value and $key as temp variables.
                Multpile While conditions 
                While():
                do stuff.
                Sorting asort() asending. ksort() key sort. krsort() reverse key sort.
            </p>
        <h1>
            Lecture Two of JAVASCRRIPT 9/7/2016
        </h1>
            <p>
                JavaScript + can be used with strings for combining them.
                Variables dont need a data type and is choosen on the fly.
                window object is treated like the default object.
                backslash can be used as an escape method. "\"
                
            </p>
        <h1>
            Chapter Four of PHP Lecture
        </h1>
            <p>
                Intro to SQL-nsming Database Element are simlar to varibles
                and case sensitive.
                Varchar dynamically allocated memory.
                Column Properties
                Not null wont allow null fields.
                Auto Increment-Self Explanatory.
                Unique Wont allow values to repeat.
                Indexes and Keys
                Keys are about normalization.
                Primary Key that manages the tables. Used by the Admin.
                Is something about the table that brings it up.
                Foregin Key creates a connection from one table to another.
                Primary Keys Key in every table and must be unique and not negative
                MySQL
                
                
                
                
        
            </p>
        
        <h1>
            Lecture Two of JAVASCRRIPT 9/7/2016
        </h1>
        <p>
            
        </p>
        
        
    </body>




</html>
