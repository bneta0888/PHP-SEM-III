<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Tasks Results</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                color: #333;
                margin: 20px;
            }

            .task {
                background-color: #e9ecef;
                border: 1px solid #ccc;
                padding: 15px;
                margin-bottom: 10px;
                border-radius: 5px;
            }

            h2 {
                text-transform: capitalize;
            }

            input {
                background: white;
                border: 2px solid black;
                border-radius: 10px;
                padding: 5px;
                transition: 0.5s;
            }
        </style>
    </head>

    <body>
        <div class="task">
            <h1>PHP Tasks Results</h1>

            <form action="classwork-Q1.php" method="post">
                <label for="number"></label>
                <input name="number" type="number" placeholder="enter the number">
                <label for="submit"></label>
                <input name="submit" type="submit" value="submit">
            </form>
            <h2>Check if a Number is Even or Odd</h2>
            <p><?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $i = htmlspecialchars($_POST['number']);
                echo ($i % 2 == 0) ? "$i is Even" : "$i is Odd";
            }


            ?></p>
        </div>
        <div class="task">
            <h2>switch case print day result</h2>
            <?php

            $dayNumber = 3;

            switch ($dayNumber) {
                case 1:
                    echo "Monday";
                    break;
                case 2:
                    echo "Tuesday";
                    break;
                case 3:
                    echo "Wednesday";
                    break;
                case 4:
                    echo "Thursday";
                    break;
                case 5:
                    echo "Friday";
                    break;
                case 6:
                    echo "Saturday";
                    break;
                case 7:
                    echo "Sunday";
                    break;
                default:
                    echo "Invalid input! Please enter a number between 1 and 7.";
            }
            ?>
        </div>


        <div class="task">
            <h2>Check for Leap Year</h2>
            <p><?php
            $year = 2024;
            echo ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) ? "$year is a Leap Year" : "$year is not a Leap Year";
            ?></p>
        </div>

        <div class="task">
            <h2>Check if a Number is Positive or Negative</h2>
            <p><?php
            $num = -5;
            echo ($num >= 0) ? "$num is Positive" : "$num is Negative";
            ?></p>
        </div>

        <div class="task">
            <h2>Calculate Electric Bill</h2>
            <p><?php
            $units = 150;
            $rate = 0.5;
            $bill = $units * $rate;
            echo "Electric Bill for $units units is $" . number_format($bill, 2);
            ?></p>
        </div>

        <div class="task">
            <h2>foreach task result</h2>
            <?php

            $items = array(3, 5, 10, 20, 30);
            $sum = 0;
            foreach ($items as $item) {
                $sum += $item;
                echo ("$item" . " ");
            }
            echo nl2br($sum);
            ?>

        </div>
        <div class="task">
            <h2>print odd and even from 1 to 50</h2>
            <?php
            for ($i = 1; $i <= 50; $i++) {
                if ($i % 2 == 0) {
                    echo " the number " . $i . " is even " . "<br>";
                } else {
                    echo "the number " . $i . " is odd" . "<br>";
                }
            }
            ?>
        </div>
        <div class="task">
            <h2>Plindrom or not</h2>
            <?php
            $number = 121;
            $originalNumber = $number;
            $reversedNumber = 0;

            while ($number > 0) {
                $remainder = $number % 10;
                $reversedNumber = ($reversedNumber * 10) + $remainder;
                $number = (int) ($number / 10);
            }

            if ($originalNumber == $reversedNumber) {
                echo "$originalNumber is a Palindrome.";
            } else {
                echo "$originalNumber is not a Palindrome.";
            }
            ?>

        </div>
        <div class="task">
            <h1>Armstrong</h1>
            <?php
            $number = 153;
            $sum = 0;

            while ($number > 0) {
                $digit = $number % 10;
                $sum += $digit * $digit * $digit;
                $number = (int) ($number / 10);
            }

            if ($originalNumber == $sum) {
                echo "$originalNumber is an Armstrong Number.";
            } else {
                echo "$originalNumber is not an Armstrong Number.";
            }
            ?>

        </div>

        <div class='task'>
            <h1>reverse string</h1>
            <?php
            $number = 12345;
            $reversedNumber = 0;

            while ($number > 0) {
                $remainder = $number % 10;
                $reversedNumber = ($reversedNumber * 10) + $remainder;
                $number = (int) ($number / 10);
            }

            echo "Reversed Number: $reversedNumber";
            ?>
        </div>



        <div class='task'>
            <h1> wap to sum all elements in an array using foreach. Given array = [10,18,15,6,24]</h1>


            <?php

            $arr = array(10, 18, 15, 6, 24);
            $sum = 0;
            foreach ($arr as $i) {
                $sum += $i;
            }
            echo $sum;

            ?>
        </div>


        <div class='task'>
            <h1>find the largest & smallest number in an array [8,12,13,20,60,55]</h1>

            <?php

            $num = array(8, 12, 13, 20, 60, 55);

            $largest = max($num);
            $smallest = min($num);

            echo "the largest is :" . $largest . "<br>";
            echo "the smallest is : " . $smallest


                ?>

            <div class="task">
                <h1>find the biggest $ smallesst number in an array(8,12,13,20,60,55)</h1>
                <?php
                $arr = array(8, 12, 13, 20, 60, 55);
                $min = $arr[0];
                $max = $arr[0];

                foreach ($arr as $i) {  
                    if ($i < $min) {
                        $min = $i;
                    }
                    if ($i > $max) {
                        $max = $i;
                    }
                }

                echo "The smallest number in the array is " . $min . "<br>";
                echo "The largest number in the array is " . $max;
                ?>
            </div>


            <div class="task">
                <h1>WAP without using sort() and rsort() function to sort the array in ascending and descending order
                </h1>
                <?php
                echo "<h1>" . "ASCENDING ORDER" . "<h1/>";
                $arr = array(8, 12, 13, 20, 60, 55);
                $temp;
                for ($i = 0; $i < sizeof($arr); $i++) {
                    for ($j = $i + 1; $j < sizeof($arr); $j++) {
                        if ($arr[$i] < $arr[$j]) {
                            $temp = $arr[$i];
                            $arr[$i] = $arr[$j];
                            $arr[$j] = $temp;
                        }
                    }
                }
                for ($z = 0; $z < sizeof($arr); $z++) {
                    echo $arr[$z] . "<br>";
                }
                echo "<h1>" . "DESCENDING ORDER" . "<h1/>";

                for ($i = 0; $i < sizeof($arr); $i++) {
                    for ($j = $i + 1; $j < sizeof($arr); $j++) {
                        if ($arr[$i] > $arr[$j]) {
                            $temp = $arr[$i];
                            $arr[$i] = $arr[$j];
                            $arr[$j] = $temp;
                        }
                    }
                }
                for ($z = 0; $z < sizeof($arr); $z++) {
                    echo $arr[$z] . '<br>';
                }
                ?>


            </div>



            <div class="task">
                <h1>searching strings</h1>

                <?php

                //SEARCHING
                $college_list = ['seabird', 'medhavi', 'abcd'];
                $tofind = 'medhavi';
                $isfound = false;
                foreach ($college_list as $college) {
                    if ($college === $tofind) {
                        $isfound = true;

                        break;
                    }
                }
                if ($isfound) {
                    echo "the string was found";
                } else {
                    echo "the string was not found";
                }
                ?>
            </div>


            <div class="task">
                <h1>FIND PRIME</h1>
                <?php
                //Number divisible by itself, sirle lekhako
                
                $checkNumber = 36;
                $primeNumber = true;

                for ($i = 2; $i <= sqrt($checkNumber); $i++) {
                    if (($checkNumber % $i) == 0) {
                        $isprime = false;
                        break;
                    }
                    if ($isPrime) {
                        echo "prime";
                    } else {
                        echo "NoPrime";
                    }
                }
                ?>
            </div>


            <div class="task">
            <h1> prime or not</h1>
            <?php

            //sujal le gareko
            $n=3;
            $a;
            $c=0;
            $r;
            for($a=1;$a<=$n;$a++){
                $r=$n%$a;
                if($r==0){
                    $c++;
                }
            }
            if($c==2)
                printf("prime");
                else
                printf("not prime");
            
            ?>
        </div>

    </body>

    </html>

</body>

</html>