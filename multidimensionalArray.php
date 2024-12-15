<?php
$blogs = [
    ['mario party', '30', 'lorem'],
    ['james party', '31', 'lorem'],
    ['Ano party', '32', 'lorem'],
    ['Zun party', '33', 'lorem'],
];

print_r($blogs) . "<br>";
print_r($blogs[1][1]);

$a = [
    ['title'=> 'mario party', 'author' => 'mario', 'content'=> 'lorem'],
    ['title'=> 'meni party', 'author' => 'mandi', 'content'=> 'lorem'],
    ['title'=> 'juli party', 'author' => 'ango', 'content'=> 'lorem']
];
echo "<br>";
echo $a[1]['author'];
echo "<br>";
echo count($a);

$a[] = ['title'=> 'Ama', 'author' => 'Zaadi', 'content' => 'lorem'];
?>