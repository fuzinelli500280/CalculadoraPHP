<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];
    $result = 0;
    switch ($operation) {
        case "addition":
            $result = $num1 + $num2;
            break;
        case "subtraction":
            $result = $num1 - $num2;
            break;
        case "multiplication":
            $result = $num1 * $num2;
            break;
        case "division":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Divisão por zero não é permitida.";
            }
            break;
        default:
            $result = "Operação Inválida.";
            break;
    }
    echo "<h2>Resultado:</h2>";
    echo "<p>O resultado da operação é: $result</p>";
} else {
    echo "Erro ao processar o formulário.";
}
?>
