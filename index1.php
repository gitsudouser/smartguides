<?php

require "vendor/autoload.php";

$whoops = new \Whoops\Run;
$whoops->pushHandler( new \Whoops\Handler\PrettyPageHandler) ;
$whoops->register();

// Импортировать простанства имен Monolog
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger ( 'test_app');
$log->pushHandler( new StreamHandler( 'H:\xampp\htdocs\tst_project\info.log' , Logger::ERROR) ); 

class Tokenizer
{
    private $words = array();
    public function __call($method, $args)
    {
        $this->words[] = $method;
        return $this;
    }
    public function __toString()
    {
        return implode(" ", $this->words);
    }

    public function eco()
    {
        return implode(" ", $this->words);
    }

}

$tok = new Tokenizer();
$tok = $tok->Why()->are()->you()->doing()->this()->to()->me()->Lisa();

echo $tok;





//require("xxx.php");
//$log->debug("this is fine");

/*
$a1 = array('a', 'b', 'c', 'd', 'e', 1, 2, 3);
$a2 = array(
    ['a'=>1,'b'=>2,'c'=>3],
    ['a'=>11,'b'=>22,'c'=>33],
    ['a'=>111,'b'=>222,'c'=>333],
    ['a'=>101,'b'=>202,'c'=>303],
    ['a'=>123,'b'=>123,'c'=>123],
    ['a'=>444,'b'=>404,'c'=>400],
    ['a'=>555,'b'=>505,'c'=>500],
    ['a'=>777,'b'=>707,'c'=>700]
);
*/

//echo similar_text("О сколько мгновений чудных","Много чудных мгновений было");
//echo similar_text("splist array to array of arrays","takes one column of array");

//debug(array_chunk($a1,3)); //splist array to array of arrays
//debug(array_column($a2,'a')); //takes one column of array
//debug(array_combine($a1,$a2)); //combines two arrays to one, first array became keys
//array_count_values - group by
//print_r(array_filter($a1, function ($var){return $var%2==0;}));
//print_r(array_filter($a1, 'filter_func')); //filters array using callback

/*
function filter_func($var)
{
    return $var%2==0;
}*/


/*
foreach(myGenerator(10) as $data)
{
	echo $data;
}

function myGenerator($x)
{
	for($i=0;$i<100;$i++)
		yield $i+$x.PHP_EOL;
}*/
/*
$x=0;
$x_fun = function() use (&$x){$x++;};
echo $x.PHP_EOL;
$x_fun();
echo $x.PHP_EOL;
$x_fun();
echo $x.PHP_EOL;
*/

/*
function enclosePerson ($name){
	return function($doCommand) use ($name) {
		return sprintf('%s, %s ', $name, $doCommand);
	};
};*/
// Прикрепление строки "Clay" к замыканию
//$clay = enclosePerson ('Clay' );
// Вызов замыкания
//echo $clay ('get thе sweet tea!');

// Выведет - - > "Clay, get те sweet tea!" 
//echo "x";
//echo file_get_contents("php://stdin");
//$hinput = fopen("php://stdin", 'r');
/*
while(true)
{
	$data1  = fread($hinput,100);
	$data2 = fread($hinput,100);
	echo $data1 + $data2;
}
echo "y";
*/
function debug($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
