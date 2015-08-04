<?php
/*array()*/
$a = array('cat', 'dog', 'pig', 'monkey');
print_r($a);
echo $a[0];
echo "<br/>";
$b = array('pet' => 'cat', 'pet1' => 'dog', 'pet2' => 'pig');
print_r($b);
echo $b['pet'];
echo "<br/>";

/*array_combine()*/
$d = array('pet', 'dog', 'pig', 'monkey');
$c = array_combine($a, $d);//$a提供键名，$d提供值
print_r($c);
echo "<br/>";

/*range()*/
$number = range(0, 10, 2);//从0到10，步长为2，共6个元素
print_r($number);
echo "<br/>";

/*compact()*/
$class = '11';
$name = 'wangkai';
$age = '23';
$com = compact('class', 'name', 'age');//构成以变量名为键，以变量值为值的数组
print_r($com);
echo "<br/>";

/*array_fill()*/
$fill = array_fill(2, 5, 'dog');//从下标2开始，填5个元素，每个元素的值为dog
print_r($fill);
echo $fill[2];
echo "<br/>";

/*array_chunk()*/
$chun = array_chunk($number, 3);//拆分数组，每段中含有3个元素，各段共同组成一个二维数组
print_r($chun);
echo "<br/>";
echo $chun[1][2];
echo "<br/>";

/*array_merge()*/
$a1=array("a"=>"Horse","b"=>"Dog");
$a2=array("c"=>"Cow","d"=>"Cat");
print_r(array_merge($a1,$a2));//合并数组，若键值重复，将被最后的值覆盖
echo "<br/>";

/*array_slice()*/
print_r(array_slice($number,3,10));//从3开始，提取10个元素,超过了下标范围，则到数组最末为止
echo "<br/>";

/*arry_diff()*/
$a1=array(0=>"Cat",1=>"Dog",2=>"Horse",3=>"apple");//只输出$a1与$a2的不同之处,即$a1独有的元素
$a2=array(0=>"Horse",1=>"Dog",2=>"Bird");
print_r(array_diff($a1,$a2));
echo "<br/>";

/*array_intersect()*/
print_r(array_intersect($a1, $a2));//输出$a1和$a2的相同之处
echo "<br/>";

echo end($number);
echo rand(1,100);
?>
