<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>PHP Primer - Index</title>
</head>
<body>
    <h1>Hello World -Padma</h1>
    <form action="index.php" method="get">
        Name:<input type="text" name="user_name" placeholder="Fill your Name">
        PasWord:<input type="password" name="pass_word" placeholder="Enter your password">
        <input type="submit">
    </form>
    <?php
        echo $_GET["user_name"];
        echo '<br>';
        echo 'pissune';
        echo '<br/>';
        $numbers = array(1,3,5,7,9,11,13,15,17,19,21);
        echo "$numbers[3]";
        echo '$numbers[3]';
        for($i=0;$i<sizeof($numbers);$i++)
            echo "$i : $numbers[$i]<br/>";
        echo '<hr/>';

        $size=count($numbers);
        echo "<p>Sri Lanka: $size</p>";
        echo '<hr/>';

        $phrase1="student who are come late";
        $phrase2="in class, stand with Rock";
        $name="trevoir williams";
        echo $phrase1. ", named Tiffany. ".$phrase2.'<br/>';
        echo 'The position of W letter : '.strpos($name,'w').'<br/>';
        echo '<hr/>';

        //String transformation
        echo 'Uppercase first letter: '.ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: '.ucwords($name).'<br/>';
        echo 'Upper case: '.strtoupper($name).'<br/>';
        echo 'Lower case: '.strtolower("THIS WAS ALL UPPER CASE").'<br/>';
        echo 'Repeat String: '.str_repeat('Padme ',10).'<br/>';
        echo 'Repeat String: '.strtoupper(str_repeat('Padme_  ',5)).'<br/>';
        echo '<hr/>';
        echo -10023/100;
        echo '<hr/>';

        $phrase="Padma Gnanapriya be or not to be";
        echo "<p> $phrase </p>";
        echo str_replace("napriya","paala",$phrase);
        $age=30.0223;
        echo "<p> $age </p>";
        $isMale=true;
        echo "<p> $isMale </p>";  // not print any thing
        echo "<hr>";    
        
        echo 'Without Trim : '."A"." B C D "."E".'<br/>';
        echo 'Trim space with both sides : '."A".trim(" B C D ")."E".'<br/>';
        echo 'Trim space to the left : '."A".ltrim(" B C D ")."E".'<br/>';
        echo 'Trim space to the right : '."A".rtrim(" B C D ")."E".'<br/>';
        echo '<hr>';

        $date=getdate();
        echo 'Today is '.$date['mday'].' th day of '.$date['mon'].' th month in '.$date['year'].'<br/>';
        echo time().'<br>';
        print date("m/d/y G.i:s<br>",time()).'<br/>';
        print "Today is ";
        print date("j of F Y, \a\\t g.i a",time());
    ?>

</body>
</html>