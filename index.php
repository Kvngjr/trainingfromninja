<?php 

    // Strings 

    // define('NAME', 'Michael');
    // $name = 'Michael';
    //$age = 20;

    // $name = 'Trybe';
    // $string1 = 'My email is ';
    // $string2 = 'michxsael@gmail.com';

    // echo  $string1.$string2;

    // $name = 'Well';

    // echo "She just told me \"she loves me\" "; 

    // echo $name[0];
    
    // echo str_replace('e', 'a', $name);

    // Numbers

    // $cicle_num = 30;
    // $pi = 3.144;

    // *, +, -, /, **

    // echo $pi * $cicle_num**3;

    // Order of operation (B I D M A S)
   
    // echo ++$cicle_num;

    // Arrays
    //Types of array 
    //-Indexed, associative array and multi-dimesional
    
    // Indexed
    //$welcomeDear = ['Michael', 'Tommy', 'Esther'];

    // echo $welcomeDear[0];

    //$welcomeHome = array('Martin', 'Edet');

    // echo $welcomeHome[1];


    //$age = [20, 40, 50, 60];
    // print_r($age);

    // overwrite
    //$age[1] = 35;
    // print_r($age);

    //Add new value
    // $age[] = 70;
    // print_r($age); or

    //array_push($age, 70);
    // print_r($age);

    // array count
    // echo count($age);

    // merge array
    // $welcome = array_merge($welcomeDear, $welcomeHome);
    // print_r($welcome);

    // Assocative arrays (Key & values pairs)
    // $level400 = ['Michael' => 'Python', 'David' => 'Html&css', 'Shubomi' => 'Javascript'];
    // echo $level400['Michael'];
    //  print_r($level400);

    // $Flevel400 = ['Peace' => 'Html&js', 'Gift' => 'UI/UX', 'Winner' => 'Html,css&js' ];
    // print_r($Flevel400);

    // Adding a value to a array
    // $Flevel400['Elizabeth'] = 'Product designer';
    // print_r($Flevel400);

    //  Overwrite 
    // $Flevel400['Gift'] = 'Product designer';
    // print_r($Flevel400);

    // Merge array
    // $all400 = array_merge($level400, $Flevel400);
    // print_r($all400);   

    // Multi dimesional Array
    //$story =[
    //    ['title' => 'Michael first love','author' => 'Michael','content' => 'lorem','likes' => 50],
    //    ['title' => 'Michael grocries','author' => 'Tommy','content' => 'wel','likes' => 30],
    //    ['title' => 'Chest','author' => 'Edet','content' => 'bog','likes' => 10]
    //];
    // print_r($story[1][1])
    //echo $story [1]['content'];
    //echo count($story);
    //$story[] = ['title' => 'Gift By ME','author' => 'Nifemi','content' => 'drum','likes' => 50];
    //print_r($story);

    //Array pop
    //$remove = array_pop($story);
    //print_r($remove);

    //Loops
    //$level400s = ['David', 'Shubomi', 'Michael', 'Peace', 'Winner', 'Gift', 'Dominion' ];
    
    // For loop
    //for($i = 0; $i < count($level400s); $i++){
    //    echo $level400s[$i] . '<br />';
    //}

    // Foreach
    //foreach($level400s as $level400){
    //    echo $level400 . '<br />';
    //}

    // $stories =[
    //     ['title' => 'Michael first love','author' => 'Michael','content' => 'lorem','likes' => 50],
    //     ['title' => 'Michael grocries','author' => 'Tommy','content' => 'wel','likes' => 30],
    //     ['title' => 'Chest','author' => 'Edet','content' => 'bog','likes' => 10]
    // ];

    //foreach($stories as $story){
    //    echo $story['title'] . '-' .$story['author'] . '-' .$story['content']. '-' . $story['likes'] ;
    //    echo '<br />';
    //}

    // While Loop
    //$i = 0;

    // while($i < count($stories)){
    //    echo $stories[$i]['title'];
    //    echo '<br />';
    //    $i++;
    // }

    // Booleans & Comparions (True & False)
    //echo TRUE;
    
    //Comparsion in numbers
    //echo 5 < 10;
    //echo 5 > 10;
    //echo 5 == 10;
    //echo 5 != 10;
    //echo 5 <= 5;

    // Strings
    // echo 'shawn' < 'Yoshi';
    

    // Loose vs strict equal comparison
    //echo 'Shawn' == 'shawn';
    //echo 'Pat' === 'pat';

    //Conditional Statements
    
    // $Price = 20;

    // if ($Price < 10) {
    //     echo 'the condition is met';
    // } else if ($Price < 30) {
    //     echo 'Condition met';
    // } else {
    //     echo 'Condition not met';
    // }
        
    // $products = [
	// 	['name' => 'shiny star', 'price' => 20],
	// 	['name' => 'green shell', 'price' => 10],
	// 	['name' => 'red shell', 'price' => 15],
	// 	['name' => 'gold coin', 'price' => 5],
	// 	['name' => 'lightning bolt', 'price' => 40],
	// 	['name' => 'banana skin', 'price' => 2]
	// ];

    // foreach ($products as $product) {
        // AND (&&)
        // if ($product['price'] < 15 && $product['price'] > 2 ) {

        //     echo $product['name'] . '<br />' ;

        // }

        // OR (||)
        // if ($product['price'] > 20 || $product['price'] < 10 ) {

        //     echo $product['name'] . '<br />' ;

        // }


    //}

    // Continue & Break
    // $products = [
	// 	['name' => 'shiny star', 'price' => 20],
	// 	['name' => 'green shell', 'price' => 10],
	// 	['name' => 'red shell', 'price' => 15],
	// 	['name' => 'gold coin', 'price' => 5],
	// 	['name' => 'lightning bolt', 'price' => 40],
	// 	['name' => 'banana skin', 'price' => 2]
	// ];

    // foreach ($products as $product) {

    //     if ($product['name'] === 'lightning bolt') {
    //         break;
    //     }

    //     if ($product['price'] > 15) {
    //         continue;
    //     }

    //     echo $product['name'] . '<br />';

    // }

    //Function Declaration
    //sayHello(parameter($local variablename))
    // function sayHello($name) {
    //     echo "Good morning $name";
    // }

    //Function initialization
    //sayHello(argument(calling in the parameter))
    // sayHello('Michael');

    //Creating a complex function
    //function formatProduct($Product) {
        // echo "{$Product['price']} pounds is the amount to buy the {$Product['name']} item <br/>";
        // Function to return a value back = return
        //return "{$Product['price']} pounds is the amount to buy the {$Product['name']} item <br/>";
    //}

    //$formatted = formatProduct(['name'=>'Gold fish','price'=>30]);
    //echo $formatted;

    // Variable Scope
    // Local Variable

    // function myfunc() {
    //     $price_tag = 20;
    //     echo $price_tag;
    // }

    // myfunc();
    
    
    // Global variable
    //$name = 'mario';

    // function sayHello(){
    //     global $name;
    //     $name = 'mick';
    //     echo "Hello $name";
    // }

    // sayHello();
    // echo $name;

    // function sayMorning(&$name){
    //     $name = 'Daro';
    //     echo "Morning $name" ;
    // }

    // sayMorning($name);
    // echo $name;

    // INCLUDE & REQUIRE
    //include ('white.php');
    //echo 'Welcome';
    








?>

<?php
    echo 'Hello world'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP file</title>
</head>
<body>
    <!-- <?php include 'content.php'; ?> -->
    <!-- Looping through Html -->
    <!-- <h1>Title</h1> -->
    <!-- <ul> -->
        <!-- <?php foreach($stories as $story){ ?>

            <h3><?php echo $story['title']; ?></h3>
            <p>likes are <?php echo $story['likes']; ?></p>

        <?php }?> -->
    <!-- </ul> -->
    <!-- <div> -->

        <!-- <ul> -->
            <!-- <?php foreach($products as $product) { ?>

                <?php if ($product['price'] > 15) { ?>
                    <li><?php echo $product['name']; ?></li>
                <?php }?>   

            <?php } ?> -->
        <!-- </ul> -->

    </div>
</body>
</html>