<?php
$result = "";

if (isset($_POST['calculate'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if ($operator == "add") {
        $result = $num1 + $num2;
    } elseif ($operator == "sub") {
        $result = $num1 - $num2;
    } elseif ($operator == "mul") {
        $result = $num1 * $num2;
    } elseif ($operator == "div") {
        $result = ($num2 == 0) ? "Cannot divide by zero" : $num1 / $num2;
    } elseif ($operator == "mod") {
        $result = ($num2 == 0) ? "Cannot modulo by zero" : $num1 % $num2;
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="caclulator.css">
  </head>
  <body>
    
    <div class="calulator-form">
        <h2>Simple Calculator</h2>
    <form method="post" action="index.php">
        
        <!-- Number 1 -->
        <label class="form-lable">Enter Number 1</label><br>
        <input type="number" name="num1"required>
        <br><br>

        <!-- Number 2 -->
        <label class="form-lable">Enter Number 2</label><br>
        <input type="number" name="num2" required>
        <br><br>

        <!-- Operator -->
        <label class="form-lable">Select Operation</label><br>
        <select name="operator" required>
            <option value="">--Select--</option>
            <option value="add">Addition (+)</option>
            <option value="sub">Subtraction (-)</option>
            <option value="mul">Multiplication (*)</option>
            <option value="div">Division (/)</option>
            <option value="mod">Division (%)</option>
        </select>
        <br><br>

        <!-- Submit -->
        <div class="btn">
    <button type="submit" name="calculate">Calculate</button>
</div>


        <br><br>

        <!-- Output -->
        <label class="form-lable">Result</label><br>
        <input type="text" name="result" value="<?php echo $result; ?>" readonly>

    </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
