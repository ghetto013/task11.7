<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>11.7 Практика 11.7</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<?php 
$a0 = 0;
$a1 = 1;
$b0 = 0;
$b1 = 1;
?>
<body>
    <h1>Таблицы истинности и сравнения</h1>
    <table>
        <caption>Задание 1</caption>
        <colgroup>
            <col span="2">
        </colgroup>
        <thead>
            <tr>
                <th><strong>A</strong></th>
                <th><strong>B</strong></th>
                <th><strong>!A</strong></th>
                <th><strong>A || B</strong></th>
                <th><strong>A &amp;&amp; B</strong></th>
                <th><strong>A xor B</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0</td>
                <td>0</td>
                <td>
                    <?= (!$a0)?'true':'false' ?>
                </td>
                <td>
                    <?= ($a0 || $b0)?'true':'false' ?>
                </td>
                <td>
                    <?= ($a0 && $b0)?'true':'false' ?>
                </td>
                <td>
                    <?= ($a0 xor $b0)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td>0</td>
                <td>1</td>
                <td>
                    <?= (!$a0)?'true':'false' ?>
                </td>
                <td>
                    <?= ($a0 || $b1)?'true':'false' ?>
                </td>
                <td>
                    <?= ($a0 && $b1)?'true':'false' ?>
                </td>
                <td>
                    <?= ($a0 xor $b1)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>0</td>
                <td>
                    <?= (!$a1)?'true':'false' ?>
                </td>
                <td>
                    <?= ($a1 || $b0)?'true':'false' ?>
                </td>
                <td>
                    <?= ($a1 && $b0)?'true':'false' ?>
                </td>
                <td>
                    <?= ($a1 xor $b0)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>
                    <?= (!$a1)?'true':'false' ?>
                </td>
                <td>
                    <?= ($a1 || $b1)?'true':'false' ?>
                </td>
                <td>
                    <?= ($a1 && $b1)?'true':'false' ?>
                </td>
                <td>
                    <?= ($a1 xor $b1)?'true':'false' ?>
                </td>
            </tr>
        </tbody>
    </table>

    <?php 
$true = TRUE;
$false = FALSE;
$num_one = 1;
$num_zero = 0;
$num_minus_one = -1;
$str_one = '1';
$null = NULL;
$str_php = 'php';
?>
    <table>
        <caption>Задание 2.1</caption>
        <colgroup>
            <col span="1">
        </colgroup>
        <thead>
            <tr>
                <th></th>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"php"</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>true</strong></td>
                <td>
                    <?= ($true == $true)?'true':'false' ?>
                </td>
                <td>
                    <?= ($true == $false)?'true':'false' ?>
                </td>
                <td>
                    <?= ($true == $num_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($true == $num_zero)?'true':'false' ?>
                </td>
                <td>
                    <?= ($true == $num_minus_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($true == $str_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($true == $null)?'true':'false' ?>
                </td>
                <td>
                    <?= ($true == $str_php)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td><strong>false</strong></td>
                <td>
                    <?= ($false == $true)?'true':'false' ?>
                </td>
                <td>
                    <?= ($false == $false)?'true':'false' ?>
                </td>
                <td>
                    <?= ($false == $num_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($false == $num_zero)?'true':'false' ?>
                </td>
                <td>
                    <?= ($false == $num_minus_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($false == $str_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($false == $null)?'true':'false' ?>
                </td>
                <td>
                    <?= ($false == $str_php)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td><strong>1</strong></td>
                <td>
                    <?= ($num_one == $true)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_one == $false)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_one == $num_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_one == $num_zero)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_one == $num_minus_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_one == $str_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_one == $null)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_one == $str_php)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td><strong>0</strong></td>
                <td>
                    <?= ($num_zero == $true)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_zero == $false)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_zero == $num_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_zero == $num_zero)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_zero == $num_minus_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_zero == $str_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_zero == $null)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_zero == $str_php)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td><strong>-1</strong></td>
                <td>
                    <?= ($num_minus_one == $true)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_minus_one == $false)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_minus_one == $num_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_minus_one == $num_zero)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_minus_one == $num_minus_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_minus_one == $str_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_minus_one == $null)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_minus_one == $str_php)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td><strong>"1"</strong></td>
                <td>
                    <?= ($str_one == $true)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_one == $false)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_one == $num_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_one == $num_zero)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_one == $num_minus_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_one == $str_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_one == $null)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_one == $str_php)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td><strong>null</strong></td>
                <td>
                    <?= ($null == $true)?'true':'false' ?>
                </td>
                <td>
                    <?= ($null == $false)?'true':'false' ?>
                </td>
                <td>
                    <?= ($null == $num_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($null == $num_zero)?'true':'false' ?>
                </td>
                <td>
                    <?= ($null == $num_minus_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($null == $str_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($null == $null)?'true':'false' ?>
                </td>
                <td>
                    <?= ($null == $str_php)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td><strong>"php"</strong></td>
                <td>
                    <?= ($str_php == $true)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_php == $false)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_php == $num_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_php == $num_zero)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_php == $num_minus_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_php == $str_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_php == $null)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_php == $str_php)?'true':'false' ?>
                </td>
            </tr>
        </tbody>
    </table>

    <table>
        <caption>Задание 2.2</caption>
        <colgroup>
            <col span="1">
        </colgroup>
        <thead>
            <tr>
                <th></th>
                <th>true</th>
                <th>false</th>
                <th>1</th>
                <th>0</th>
                <th>-1</th>
                <th>"1"</th>
                <th>null</th>
                <th>"php"</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>true</strong></td>
                <td>
                    <?= ($true === $true)?'true':'false' ?>
                </td>
                <td>
                    <?= ($true === $false)?'true':'false' ?>
                </td>
                <td>
                    <?= ($true === $num_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($true === $num_zero)?'true':'false' ?>
                </td>
                <td>
                    <?= ($true === $num_minus_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($true === $str_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($true === $null)?'true':'false' ?>
                </td>
                <td>
                    <?= ($true === $str_php)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td><strong>false</strong></td>
                <td>
                    <?= ($false === $true)?'true':'false' ?>
                </td>
                <td>
                    <?= ($false === $false)?'true':'false' ?>
                </td>
                <td>
                    <?= ($false === $num_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($false === $num_zero)?'true':'false' ?>
                </td>
                <td>
                    <?= ($false === $num_minus_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($false === $str_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($false === $null)?'true':'false' ?>
                </td>
                <td>
                    <?= ($false === $str_php)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td><strong>1</strong></td>
                <td>
                    <?= ($num_one === $true)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_one === $false)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_one === $num_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_one === $num_zero)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_one === $num_minus_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_one === $str_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_one === $null)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_one === $str_php)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td><strong>0</strong></td>
                <td>
                    <?= ($num_zero === $true)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_zero === $false)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_zero === $num_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_zero === $num_zero)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_zero === $num_minus_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_zero === $str_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_zero === $null)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_zero === $str_php)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td><strong>-1</strong></td>
                <td>
                    <?= ($num_minus_one === $true)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_minus_one === $false)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_minus_one === $num_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_minus_one === $num_zero)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_minus_one === $num_minus_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_minus_one === $str_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_minus_one === $null)?'true':'false' ?>
                </td>
                <td>
                    <?= ($num_minus_one === $str_php)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td><strong>"1"</strong></td>
                <td>
                    <?= ($str_one === $true)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_one === $false)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_one === $num_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_one === $num_zero)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_one === $num_minus_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_one === $str_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_one === $null)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_one === $str_php)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td><strong>null</strong></td>
                <td>
                    <?= ($null === $true)?'true':'false' ?>
                </td>
                <td>
                    <?= ($null === $false)?'true':'false' ?>
                </td>
                <td>
                    <?= ($null === $num_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($null === $num_zero)?'true':'false' ?>
                </td>
                <td>
                    <?= ($null === $num_minus_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($null === $str_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($null === $null)?'true':'false' ?>
                </td>
                <td>
                    <?= ($null === $str_php)?'true':'false' ?>
                </td>
            </tr>
            <tr>
                <td><strong>"php"</strong></td>
                <td>
                    <?= ($str_php === $true)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_php === $false)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_php === $num_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_php === $num_zero)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_php === $num_minus_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_php === $str_one)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_php === $null)?'true':'false' ?>
                </td>
                <td>
                    <?= ($str_php === $str_php)?'true':'false' ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>