<?php //documenation for PHP: php.net

  echo "foo\n"; //semicolons are required in ?
  //echo is similar to system.out.print in Java.
  echo 'bar\n'; //single quotes do not interpret in the same way s double quotes

  $name = 'Phil';

  echo "\n";
  echo "My name is {name}\n";
  echo "My name is " . $name . "\n"; //in PHP a period represents a concatanation. VERY DIFFERNT than other languages



  class Animal //PHP uses classes in a very similar way to Java
  {
    public $type = 'Pig';
  }

  $wilbur = new Animal();
  echo $wiblur->type;
      //PHP by default does not show the error to the user. Not what we want in development


if (true) {  //Same as in Java
  //This
} else {
  //That
}

for ($i = 0; $i<10; $i++) {   //similar to the idea of an IF function in Excel
  //stuff
}



//The following are all equivalent:
$id = 0;
if (isset($GET['id'])) {   //isset is looking to see if this vaiable is set to something.
  $id = $GET['id'];       //if it is, it will get that value
}

$id = isset($_GET['id']) ? $_GET['id'] : 0;

$id = $_GET['id'] ?? 0; //this means the same as above. If no value, it we set to zero



//important functionality of PHP: associative array
$arr1 = [
  'first' => 'Kathryn',
  'last' => 'McCaffrey'
];

echo '[0:]' . $arr1[0]; //Won't work!
echo '[first]:' . $arr1['first']; //Will work

$arr2 = [ 'one', 'two', 'three'];


foreach($arr2 as $key=>$val) {
  eacho $key .':'.$val;
}
