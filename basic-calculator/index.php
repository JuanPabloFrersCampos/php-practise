<?php
  include 'header.php';
  include 'calculator.php';
?>

<body>
  <form>
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator">
      <option>Add</option>
      <option>Substract</option>
      <option>Multiply</option>
      <option>Divide</option>
    </select>

    <br>
    <br>

    <button type="submit" name="submit" value="true">Calculate</button>
  </form>

  <p>The answer is: </p>

  <?php
    if (isset($_GET['submit'])){
      $num1 = $_GET['num1'];
      $num2 = $_GET['num2'];
      $operator = $_GET['operator'];
      echo(calculate($num1, $num2, $operator));
    }
  ?>

</body>
</html>