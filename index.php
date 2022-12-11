<?php
$result = 0;
$operation = filter_input(INPUT_GET, 'operation');
$num1 = filter_input(INPUT_GET, 'num1');
$num2 = filter_input(INPUT_GET, 'num2');

//mathematic operations
if ($operation == "add") {
    $result = $num1 + $num2;
    echo json_encode(["result" => $result]);
}
if ($operation == "sub") {
    $result = $num1 - $num2;
    echo json_encode(["result" => $result]);
}
if ($operation == "divi") {
    $result = $num1 / $num2;
    echo json_encode(["result" => $result]);
}
if ($operation == "multi") {
    $result = $num1 * $num2;
    echo json_encode(["result" => $result]);
}
if ($operation == "sqrt") {
    $result = sqrt($num1);
    echo json_encode(["result" => $result]);   
}
if ($operation == "pow") {
    $result = pow($num1, 2);
    echo json_encode(["result" => $result]);
}

//error
if ($num1 != is_numeric($num1) || $num2 != is_numeric($num2)) {
    echo json_encode(["error" => "Not a number"]);
}
?>