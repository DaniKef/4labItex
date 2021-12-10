<?php
if(!is_numeric($_GET['x1']) || !is_numeric ($_GET['x2']) || empty($_GET['count']))
{
  return 'Ввести корректно!';
}
elseif ($_GET['x2'] == 0 && $_GET['count'] =='/') {
    return 'На ноль делить нельзя!';
}
$x1 = $_GET['x1'];
$x2 = $_GET['x2'];
switch ($_GET['count']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '/':
        $result = $x1 / $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    default:
        return 'Error!';
}
return $result;
