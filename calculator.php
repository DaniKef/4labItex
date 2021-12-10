<!DOCTYPE html>
<?php
$result = require __DIR__ . '/calc.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Калькулятор</title>
    <style>
      #Form
      {
          text-align: center;
      }
      #Form > *{
        display: inline-block;
        vertical-align: middle;
      }
      p
      {
          text-align: center;
      }
      body
      {
          background-color: #dbdbdb;
      }
    </style>
  </head>
  <body>
    <table style="font: italic 40px 'Fira Sans', serif; text-align: center; margin: auto;
    color: #EE9090;">
      <tr>
        <td>Лабораторная работа №4</td>
      </tr>
      <tr>
        <td>Гуренко Даниил</td>
      </tr>
      <tr>
        <td>КИУКИ-19-6</td>
      </tr>
      <tr>
        <td>Вариант 5</td>
      </tr>
    </table>
    <p>Калькулятор</p>
      <form action="/4labItex/calculator.php" id="Form">
        <input type="text" name="x1" class="inputClass">
          <div class="">
            <input type="radio" name="count" value="+">+<Br>
            <input type="radio" name="count" value="-">-<Br>
            <input type="radio" name="count" value="/">/<Br>
            <input type="radio" name="count" value="*">*<Br>
          </div>
          <input type="text" name="x2" class="inputClass">
          <input type="submit" value="Вычислить" class="inputClass" style="background-color: #d1d1b4;">
          <br>
          <p>Результат вычислений:</p>
          <br>
          <?= $result ?>
      </form>
  </body>
</html>
