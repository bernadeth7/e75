<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="stack.js"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="container col-sm-6">
        <div class="row ">
            <h1 class="display-7 p-3 mb-1 text-center text-bg-dark">PHP Basics</h1>
        </div>
        <div class="row text-bg-success">
            <!-- 1. Display -->
            <?php
                echo "Hello Kodebrewers in PHP Track";
            ?>
            <!-- Working with Variables -->
            <h1>Variables</h1>
            <p>
                <?php
                    $name ="John";//string type
                    $age = 33;
                    echo "My name is ". $name.". I am ". $age ." years old!";
                    var_dump($name);
                    echo "My name is $name";
                ?>
            </p>
            <p><?=$age?></p>
            <!-- 4. Strings -->
            <h1>Strings</h1>
            <?php
                    define("Country","Philippines");
                    echo "Flight destination ". Country;
                ?>
            <!-- 5. Integers and  float  -->
            <h1>Data types integers</h1>
            <?php
                $x=7;
                var_dump($x);
                echo "<br/>";
                $y=5;
                $sum=$x+$y+2;
                var_dump($sum);
                echo "<br/>";
                $hex=0x1A;
                var_dump($hex);
                echo "<br/>";
                $w=0123;
                var_dump($w);
                echo "<br/>";
                $b=3.7;
                var_dump($b);
                echo "<br/>";
            ?>
            <!-- 6. booleans -->
            <h1>Booleans</h1>
            <?php
                $boolvar1=(5<6);
                $boolvar2=(3>6);
                $boolvar3 =$boolvar1||$boolvar2;
                var_dump($boolvar1);
                echo "<br/>";
                var_dump($boolvar2);
                echo "<br/>";
                var_dump($boolvar3);
                echo "<br/>";
            ?>
            <!-- 7. Arrays -->
            <h1>Arrays</h1>
            <?php
                //Index array
                $carmakes=array("Audi","BMW","Mercedes");
                print_r($carmakes);
                echo "<br/>";
                echo $carmakes[1];
                echo "<br/>";
                // var_dump($carmakes);

                //Associative Array
                $shoppingbasket1=array("a"=>"bread","b"=>"milk","c"=>"eggs");
                $shoppingbasket2=array("b"=>"milk","a"=>"bread","c"=>"eggs");
                $shoppingbasket3=array("d"=>"yogurt","e"=>"orange","f"=>"apple");
                $shoppingbasket=$shoppingbasket1+$shoppingbasket3;
                print_r($shoppingbasket);
                echo "<br/>";
                var_dump($shoppingbasket1==$shoppingbasket2);
                echo "<br/>";
                var_dump($shoppingbasket1===$shoppingbasket2);
                echo "<br/>";
                var_dump($shoppingbasket1!=$shoppingbasket3);
            ?>
            <!-- 8. Objects -->
            <h1>Objects</h1>
            <?php
                class car{
                    public $make="Ford";
                    private $status="off";
                    function turn_on(){
                        $this->status ="on";
                    }
                    function getStatus(){
                        return $this->status;
                    }
                }
                $mycar= new car;
                var_dump($mycar);
                echo "<br/>". $mycar->make;
                $mycar->turn_on();
                echo "<br/>". $mycar->getStatus();
                var_dump($mycar);
            ?>
            <!-- 9. File Resources-->
            <h1>File Resources</h1>
            <?php
                $myfile = fopen("sometext.txt", "r");
                var_dump($myfile);
                echo "<br/>";
                echo fread($myfile,filesize("sometext.txt"));
            ?>
            <!-- 10. String Functions -->
            <h1>String Functions</h1>
            <?php
                $message = "Welcome to page! Have a good time exploring page!";
                echo "length of message:". strlen($message);
                echo "<br/> Word content:". str_word_count($message);
                echo str_replace("page","kodebrewers",$message,$num_replaced);
                echo "<br/> ".$num_replaced;
                echo "<br/> Can you read thiis from right? <br/> ". strrev($message);
            ?>
        </div>


    </div>
</body>

</html>