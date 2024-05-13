<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator UI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="cal-box">
            <div class="input">
                <div class="cal-left">
                    <h1>PHP</h1>
                    <h1>CALCULATOR</h1>
                </div>
                <div class="cal-right">
                    <form action="" method="post">
                        <input type="text" name="num1" placeholder="Enter Number"><br>
                        <input type="text" name="num2" placeholder="Enter Number"><br>
                        <select name="mathselect" id="mathselect">
                            <option value="add">ADD + </option>
                            <option value="sub">SUB - </option>
                            <option value="mult">MULT *</option>
                            <option value="div">DIV /</option>
                        </select>
                        <br>
                        <button type="submit">Submit</button>    
                    </form>
                </div>
            </div>
            <div class="output">
                <p>
                    <?php
                     if(isset($_POST["num1"])){
                        $num1 = $_POST["num1"];
                        $num2 = $_POST["num2"];

                        // echo $num1;
                        // echo $num2;
    
                        $opretion = $_POST["mathselect"];
                        // echo $opretion;
    
                        switch ($opretion) {
                            case "add":
                                $sum = $num1 + $num2;   
                                echo "The Sum is ".$sum;
                                break;

                            case "sub":
                                    $sub = $num1 - $num2;   
                                    echo "The subraction is ".$sub;
                                    break;

                                    case "mult":
                                        $mul = $num1 * $num2;   
                                        echo "The Multiplication is ".$mul;
                                        break;

                                        case "div":
                                            $dev = $num1 / $num2;   
                                            echo "The Divition is ".$dev;
                                            break;
                            default:
                               echo "Pleace Enter and submite";
                                break;
                        }
    
       
                       }
                   
                //    echo "Manish Matre";

                    ?>
                </p>
            </div>
        </div>
      
    </div>
    
</body>
</html>