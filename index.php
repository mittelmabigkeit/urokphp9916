<meta charset="Utf-8">
<?php
//
//ПЕРВОЕ ЗАДАНИЕ
//
$a=5;  //создаём переменную и задаём ей значение
if ($a>10)  //задаём условия сравнения
{
	echo "Переменная больше, чем сравниваемое число"; //выводит текст, если результат истинный
}
else // если результат оказался ложным, то...
{
	echo "Переменная меньше, чем сравниваемое число"; //выводит текст, если результат ложный
}
//
//ВТОРОЕ ЗАДАНИЕ
//
echo "</br>";
$logik="true"; //создаём переменную и задаём ей значение
if (is_string($logik)) //задаём условие, которое проверяет, имеет ли переменная тип строкового литерала
{
	echo "yes"; //выводит текст, если результат истинный
}
else //если результат оказался ложным, то...
{
	echo "no"; //выводит текст, если результат ложный
}
echo "</br>";
$number=7.8; //создаём переменную и задаём ей значение
if (is_double($number)) //задаём условие, которое проверяет, имеет ли переменная тип вещественного числа
{
	echo "yes"; //выводит текст, если результат истинный
}
else  //если результат оказался ложным, то...
{
	echo "no"; //выводит текст если результат ложный
}
//
//ТРЕТЬЕ ЗАДАНИЕ
//
echo "</br>";
$MyArray=array(      //создём массив переменной
         "текст1",   //забиваем ячейки массива
         "текст2",   //забиваем ячейки массива
         "текст3",   //забиваем ячейки массива
	);
	echo "<pre>"; //для красоты отображения
print_r($MyArray); //вывод массива на экран
	echo "</pre>";
//
//-----------------------------------------------------------------------------------------------------------------
//
//
//ПЕРВОЕ ЗАДАНИЕ
//
echo "</br>";
$a=10;
$b="10";
if ($a==$b)
{
	echo "они равны";
}
else
{
	echo "они не равны";
}
echo "</br>";
if ($a===$b)
{
	echo "они равны";
}
else
{
	echo "они не равны";
}
//
//ВТОРОЕ ЗАДАНИЕ
//
echo "</br>";
echo "\x7F\x0E\x15\x2A\xA4";
//
//ТРЕТЬЕ ЗАДАНИЕ
//
echo "</br>";
$a="";
$b=0;
if ($a==$b)
{
	echo "они равны";
}
else
{
	echo "они не равны";
}
echo "</br>";
if ($a===$b)
{
	echo "они равны";
}
else
{
	echo "они не равны";
}

?>