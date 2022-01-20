<?php
/*comment
    */
//comment
#comment
phpinfo();
echo "<h2 style='text-align: center; color: pink;'>Hello World</h2>";
$number = 100;
echo 'Value of variable = $number';
echo "<br />";
echo "Value of variable = $number";
$text1 = '\x61\x62\x63\x64\$\144\143\142\141';
$text2 = "\x61\x62\x63\x64\$\144\143\142\141";
echo "<br />";
echo '$text1';
echo "<br />";
echo $text2;
echo "<br /><br />";


//heredoc
$inscription = <<<ID1
    Here start inscription with 'apostrophes' and "quote" $number
ID1;
echo $inscription;

echo "<br />";
//nowdoc
$inscription = <<<'ID2'
    Here start inscription with 'apostrophes' and "quote" $number
ID2;
echo $inscription;
echo "<br /><br />";


//VARIABLES (dont have to specify type)
$variable = 100;
echo $variable;
echo "<br />";
$variable = 1.5;
echo $variable;
echo "<br />";
$variable = "Inscription example";
echo $variable;
echo "<br />";

//getttype() - return type of variable
echo gettype($variable);
$variable = 256;
echo "<br />";
echo gettype($variable);
echo "<br />";
echo is_integer($variable);
echo "<br /> <br />";

//CONSTANTS
define('PI', 3.14159);
echo PI;
echo "<br />";
const constant = "This is constant";
echo constant; // without dolar sign
echo "<br /> <br />";

//Magic constants
echo PHP_VERSION;
echo "<br />";
echo PHP_OS;
echo "<br />";


//STRING adding using dot
$str1 = "Houston";
$str2 = " Rockets";
echo $str1 . $str2;
echo "<br /><br />";


//ERROR CONTROL
echo "Open without @";
$my_file = file('file');
echo "Open with @";
$my_file = @file('file');
print_r(error_get_last());
echo "<br />";


//TYPE CONTROL - instanceof
class class1
{
};
class class2
{
};
$obj1 = new class1;
$obj2 = new class2;
if ($obj1 instanceof class1) {
    echo 'Object $obj1 is not instance of class class1 <br />';
}
if (!($obj2 instanceof class1)) {
    echo 'Object $obj2 is not instance of class class1 <br />';
}

//TYPE CONVERTIONS
//(int) (float) (string) (array) (object)
$number1 = 1.5;
$number2 = (int)$number1;
echo "$number1 <br />";
echo "$number2 <br />";
$number2 = intval($number1);
echo "$number2 <br /><br />";


//foreach
$tab = array(
    1 => '1',
    2 => '2',
    3 => '3',
    4 => '4'
);
foreach ($tab as $v)
    echo "$v <br />";
    
foreach ($tab as $a => $v)
    echo "$tab[$a] = $v <br />";
echo "<br />";


//FUNCTIONS
function addingNumbers($number1, $number2)
{
    return $number1 + $number2;
}
echo addingNumbers(3, 4);
echo "<br />";

//GLOBAL VARIABLES AND FUNCTIONS
// First example - not working
$a = 15;
function f1()
{
    echo "First example - not working";
    echo "Value of a = $a <br />";
}
//Second example - working
function f2()
{
    global $a;
    echo "Second example - correct <br />";
    echo "Value fo a = $a <br />";
}
f1();
f2();
echo "<br />";

//REFERENCE
echo "Without reference <br />";
function add1($number)
{
    $number += 1;
}
$number = 0;
add1($number);
echo "Value of number without using reference: $number <br />";
function add2(&$number, $x = 1)
{
    $number += $x;
}
add2($number);
echo "Value of number after using reference: $number <br />";
add2($number, 4);
echo "$number <br />";

//func_num_args
function howManyArgs()
{
    echo "Number of arguments = ".func_num_args()."<br />";
}
howManyArgs(1);
howManyArgs(1, 2);
howManyArgs('i', 1, 0.5);

//func_get_arg
function addStrings()
{
    $number = func_num_args();
    $word = "";
    for ($i = 0; $i < $number; $i++)
        $word .= (string)func_get_arg($i);
    echo "$word <br />";
}
addStrings("Study", "PHP", 1);
echo "<br /><br />";


//ARRAYS
//One dimensional - vector
$tab = array(1, 2, 3, 4);
for ($i = 0; $i < sizeof($tab); $i++)
    echo "$tab[$i] ";
echo "<br /><br />";

//associative arrays
$a_tab = array(
    "key1" => "key1",
    "key2" => "key2",
    "key3" => "key3"
);
//no sexy
for ($i = 1; $i < sizeof($a_tab) + 1; $i++){
    $x = $a_tab["key$i"];
    echo "a_tab[$i] = $x <br />";
}
//sexy
foreach ($a_tab as $key => $v)
    echo "a_tab[$key] = $v <br />";
echo "<br /><br />";

//Two dimensional arrays
$tab_2d = array(
    array(1, 2, 3),
    array(4, 5, 6)
);
for ($i = 0; $i < 2; $i++)
    for ($j = 0; $j < 3; $j++){
        $x = $tab_2d[$i][$j];
        echo "tab_2d[$i][$j] = $x <br />";
    }
echo "<br /><br />";

//Associative two dimensional array
$tablica = array(
    array(
        "Autor" => "Autor1",
        "Tytuł" => "Tytuł1",
        "Numer" => "Numer1"
    ),
    array(
        "Autor" => "Autor2",
        "Tytuł" => "Tytuł2",
        "Numer" => "Numer2"
    ),
    array(
        "Autor" => "Autor3",
        "Tytuł" => "Tytuł3",
        "Numer" => "Numer3"
    ) 
);

//sort()
$sort_tab = array(17, 4, 5, 13, 2, 5, 15, 9);
 echo "Array before sorting: ";
 for ($i = 0; $i < sizeof($sort_tab); $i++)
    echo "$sort_tab[$i] ";
echo "<br />";
sort($sort_tab);
echo "Array after sorting: ";
for ($i = 0; $i < sizeof($sort_tab); $i++)
    echo "$sort_tab[$i] ";
echo "<br /><br />";

//usort(array, 'sort_function')
//Sorting function - number witch value is less than 10 goes first XD
function lessThan($number1, $number2){
    if ($number1 < 10 && $number2 < 10)
        return 0;
    else if ($number1 > 10 && $number2 < 10) 
        return -1;
    else return 1;
}
usort($sort_tab, 'lessThan');
for ($i = 0; $i < sizeof($sort_tab); $i++)
    echo "$sort_tab[$i] ";
echo "<br /><br />";

//Asociative arrays are sorted with ksort() witch sorted array by keys and asort() by values. Opposite sort is made with arsort() and krsort().

//implode
$arr = array('a', 'b', 'c');
echo implode('-', $arr);
echo "<br />";

//explode
$str = 'one, two, three';
$arr = explode(',', $str);
foreach ($arr as $key => $v)
    echo "arr[$key] = $v <br />";
$arr = explode(',', $str, -1);
foreach ($arr as $key => $v)
    echo "arr[$key] = $v <br />";
echo "<br />";
//array_reverse($original_array) function give reversed copy of original array

//reset(), next(), prev(), end()
$arr = array (1,2,3,4,5,6);
foreach ($arr as $v)
    echo "$v ";
echo "<br />";
$v = next($arr);
$v = next($arr);
echo "After use function next() two times, value of the pointer is $v <br />";
$v = end($arr);
echo "After use function end() value of the pointer is $v <br />";
$v = prev($arr);
echo "After use function prev() value of the pointer is $v <br />";
$v = reset($arr);
echo "After use function reset() value of the pointer is $v <br />";
echo "<br />";

//array_pop(), array_shift(), array_push(), array_unshift()
$v = array_pop($arr);
echo "After use function array_pop() value of the pointer is $v and array looks like this: ";
foreach ($arr as $v)
    echo "$v ";
echo "<br />";
$v = array_shift($arr);
echo "After use function array_shift() value of the pointer is $v and array looks like this: ";
foreach ($arr as $v)
    echo "$v ";
echo "<br />";
array_push($arr, 6);
echo "After use function array_push() array looks like this: ";
foreach ($arr as $v)
    echo "$v ";
echo "<br />";
array_unshift($arr, 1);
echo "After use function unshift() array looks like this: ";
foreach ($arr as $v)
    echo "$v ";
echo "<br /><br />";

//For size of array: count() or sizeof()
//array_count_values() for how many times each value occur in array
$arr = array (1, 2, 1, 1, 2, 3, 3, 1);
foreach ($arr as $v)
    echo "$v ";
echo "<br />";
$how_many = array_count_values($arr);
foreach ($how_many as $key => $v)
    echo "how_many[$key] = $v <br />";
echo "<br / >";


//OBJECT ORIENTED PROGRAMMING
//Auto adding class definition with spl_autload_register() function 
//include "class.php";
function adding_class($class_name){
    require "$class_name.php";
}
spl_autoload_register('adding_class');
$plane = new Plane(1000, 250);
$plane->cut_fuel(30);
echo "<br />";
$plane->weight = 2;
$plane->fuel = 100;
echo "Fuel: $plane->fuel, Weight: $plane->weight";
echo "<br />";

//Inheirtance with extends
//Example class child_class extends base_class
//Overriding
$boat = new Boat(200, 500);
$boat->cut_fuel(50);
echo "<br />";
$boat->cut_fuel_plane(33);
echo "<br />";

//trim() 
$str = " ...First Example... ";
echo "String before usage of trim(): -$str- <br />";
echo "String after usage of trim(): -".trim($str)."-";
echo "<br />";


//READ< WRITE DIRECTORIES
//opendir(), readdir(), closedir()
echo "<ul>";
    $dir = "./";
    if(!($fd = opendir($dir))){
        exit ("Can't open file");  
    }
    else{
        while(($file = readdir($fd)) !== false){
            echo "<li>$file</li>";
        }
        closedir($fd);
    }
echo "</ul>";

//scandir()
echo "<ul>";
    $files = scandir("$dir");
    foreach($files as $v){
        echo "<li>$v</li>";
    }
echo "</ul>";

//Creating and deleting directory mkdir(), rmdir()
//file_exists()
if(file_exists("./Plane.php")){
    echo "File exist";
}
//filesize()
echo "<br />";
echo "File size: ".filesize("./Plane.php");

//is_dir(), is_file()
//Removing directory content - function
function del_dir($dir){
    if(!($fd = opendir($dir)))
        return false;
    while (($file = readdir($fd)) !== false){
        if($file == "." || $file == "..") continue;
        if(is_dir($dir.DIRECTORY_SEPARATOR.$file)){
            del_dir($dir.DIRECTORY_SEPARATOR.$file);
            rmdir($dir.DIRECTORY_SEPARATOR.$file);
        }
        else if(i_file($dir.DIRECTORY_SEPARATOR.$file)){
            unlink($dir.DIRECTORY_SEPARATOR.$file);
        }
    }
    closedir($fd);
}
echo "<br />";


//READ, WRITE FILES
//fopen(), fclose(), fgets(), feof(), fgetss() - without HTML tags
//Read line of text from file
if(!($file = fopen('../test.txt','r'))){
    echo "Can't open file";
}
else{
    while(!feof($file)){
       echo nl2br(fgets($file));
    }
    fclose($file);
}
echo "<br /><br />";

//Read sign by sign
if(!($file = fopen('../test.txt','r'))){
    echo "Can't open file";
}
else{
    while(($str = fgetc($file)) != false){
       if($str == "\n") $str = "<br />";
       echo $str;
    }
    fclose($file);
}
echo "<br /><br />";

//Read specified number of bytes
if(!($file = fopen('../test.txt','r'))){
    echo "Can't open file";
}
else{
    while(!feof($file)){
      echo fread($file, 1);
    }
    fclose($file);
}

//Read full file
echo "<br />";
if(!($file = fopen('../test.txt','r'))){
    echo "Can't open file";
}
else{
    while(!feof($file)){
      echo fread($file, filesize('../test.txt'));
    }
    fclose($file);
}

//fpassthru()
echo "<br />";
if(!($file = fopen('../test.txt','r'))){
    echo "Can't open file";
}
else{
    fpassthru($file);
    fclose($file);
}

//readfile()
echo "<br />";
readfile('../test.txt');

//file_get_contents()
echo "<br />";
echo file_get_contents('../test.txt');

//Write data
echo "<br />";
$str = "Fifth option";
if(!($file = fopen('../test1.txt', 'wb'))){
    echo "Can't open file";
}
else{
    if(fwrite($file, $str) === false){
        echo "Can't save data";
    }
    else{
        echo "Data has been correct save";
    }
    fclose($file);
}

//file_put_contents
echo "<br />";
$str = "Next number";
file_put_contents('../test1.txt', $str, FILE_APPEND);
?>