<!DOCTYPE html>
<html lang="en">
 <head>
 <title>Web Applications and Technologies</title>
 <link type="text/css" rel="stylesheet" href="main.css" />
 </head>
 <body>
 <header>
 <h1>Hemanta Bikram Singh C7227265</h1> 
 </header>
 
 <section id="container">
 <h1>Fundamentals of PHP</h1>
 <?php
    echo "<h3>Selection</h3>";

    date_default_timezone_set('Asia/Kathmandu');

    $day = date('l'); //that is a lower case L
    echo 'it\'s '.$day;
    echo "<br/><br/>";

    $date = date('F jS, Y');
    echo "Date:  $date";
    echo "<br/><br/>";

    if($day == "Wednesday"){
        echo "It's midweek";
    }
    else{
        echo "It's not midweek";
    }
    echo "<br/><br/>";

    
    $hour = date('G');
    if($hour<12){
        echo "Good Morning";
    }
    elseif($hour>=12 && $hour <=18){
        echo "Good Afternoon";
    }
    else{
        echo "Good Night";
    }
    echo "<br/><br/>";


    $password = 'password';
    $length = strLen($password);

    if($length>4 && $length <10){
        echo "Password is valid";
    }
    else{
        echo "Password is invalid";
    }
    echo "<br/><br/>";


    if($password == 'password' || $password == 'username'){
        echo "Password valid";
    }
    else{
        echo "Password invalid";
    }
    echo "<br/><br/>";


    //ticket company

    $price = 25;
    $age = 15;
    $membership = TRUE;


    if($age<12){
        $discount =  50;
    }
    elseif($age<18 || $age>65){
        $discount =  25;
    }
    else{
        $discount = 0;
    }
    $finalprice = $price - (($discount/100)*$price);

    if($membership == TRUE){
        $finalprice = $finalprice - ($finalprice * 0.1);
    }

    

    echo "Initial Ticket Price: £$price";
    echo "<br/>";
    echo "Age: $age";
    echo "<br/>";
    echo "Membership: ";
    if($membership==TRUE){
        echo "Yes";
    }
    else{
        echo "No";
    }
    echo "<br/>";
    echo "Final Ticket Price: £". round($finalprice,2);
    echo "<br/><br/>";



    echo "<h3>Arrays</h3>";
    echo "<h4>Simple Array</h4>";

    $products = array("t-shirt", "cap", "mug");
    print_r($products);
    echo "<br/>";

    $products[0] = "shirt";
    print_r($products);
    echo "<br/>";

    $products[] = "skirt";
    print_r($products);
    echo "<br/>";

    echo "Items in my products array<br/>";
    echo "The item at index [2] is: $products[2]<br/>";
    echo "The item at index [3] is: $products[3]<br/>";

    echo "<h4>Associative Array</h4>";
    $customer = array('CustID' => 12, 'CustName'=>'Sarah', 'CustAge'=>23, 'CustGender'=>'F');
    print_r($customer);
    echo "<br/>";

    $customer['CustAge'] = 19;
    $customer['CustEmail'] = "sarah@gmail.com";
    print_r($customer);
    echo "<br/>";
    echo "Items in my customer array<br/>";
    echo "The item at index [CustName] is: ". $customer['CustName'];
    echo "<br/>";
    echo "The item at index [CustEmail] is: " .$customer['CustEmail'];


    echo "<h4>Multi-Dimensional Arrays</h4>";

    $stock = array(
                'id1' => array(
                    'description' => 't-shirt',
                    'price' => 9.99,
                    'stock' => 100,
                    'color' => array('blue','green','red'),
                ),
                'id2' => array(
                    'description' => 'cap',
                    'price' => 4.99,
                    'stock' => 50,
                    'color' => array('blue','black','grey'),
                ),
                'id3' => array(
                    'description' => 'mug',
                    'price' => 6099,
                    'stock' => 30,
                    'color' => array('yellow','green','pink'),
                )
    );






    echo "This is my order";
    echo "<br/>";
    echo $stock['id1']['color'][1]." ".$stock['id1']['description']; 
    echo "<br/>";
    echo "Price: £". $stock['id1']['price'];
    echo "<br/>";
    echo $stock['id2']['color'][2]. " ". $stock['id2']['description'];
    echo "<br/>";
    echo "Price: £". $stock['id2']['price'];


    


    echo "<h3>Loops</h3>";
    echo "<h4>While Loop</h4>";

    $counter = 1;

    while($counter<6){
        echo 'Count: '.$counter.'<br />';
        $counter++; 
    }
    echo "<br/><br/>";

    
    $shirtPrice = 9.99;
    $counter = 1;

    echo "<table border=1>";
    echo "<tr>
            <th>Quantity</th>
            <th>Price</th>
          </tr>";

    while($counter<=10){
        $total=$counter*$shirtPrice;
        echo "<tr>
            <td>$counter</td>
            <td>£$total</td>
        
            </tr>";
        $counter++;
    }
    echo "</table>";
    echo "<br/><br/>"; 




    echo "<h4>For Loop</h4>";
    $names = array('hemanta', 'saurav', 'abit', 'ayush', 'gautam');
    for($i=0; $i<5; $i++){
        echo $names[$i] .'<br />';
    }
    echo "<br/><br/>"; 




    echo "<h4>Foreach Loop</h4>";
    $names = array('hemanta' => '77227265', 'saurav' => '77228787', 'abit' => '7689098', 'ayush' => '77658947', 'gautam' => '87993850');

    foreach($names as $name =>$id){
        echo "Name: $name: $id<br/>";
    }
    echo "<br/><br/>"; 


    $city=array('Peter'=>'LEEDS','Kat'=>'bradford','Laura'=>'wakeFIeld');
    print_r($city);
    foreach($city as $name => $ct){
        $ct = strtolower($ct);
        $ct = ucfirst($ct);
        $city["$name"] = $ct; 
    }
    echo "<br/>";
    print_r($city);





?>
 </section>
 <footer> 
 <!--<small> <a href="../watIndex.html">Home</a></small>  -->
 </footer>
 </body>
</html>
