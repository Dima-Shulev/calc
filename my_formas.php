<?php
$a = "1";
$b = "2";
$c = "3";
$d = "4";
$i = "5";
$f = "6";
$g = "7";
$q = "8";
$x = "9";
$z = "0";
$plus = "+";
$minus = "-";
$umn = "*";
$del = "/";
$point = ".";
$pow = "x";
if(isset($_POST['a'])){ $_POST['num'] .= $a;
}elseif(isset($_POST['b'])){ $_POST['num'] .= $b;
}elseif(isset($_POST['c'])){ $_POST['num'] .= $c;
}elseif(isset($_POST['d'])){ $_POST['num'] .= $d;
}elseif(isset($_POST['i'])){ $_POST['num'] .= $i;
}elseif(isset($_POST['f'])){ $_POST['num'] .= $f;
}elseif(isset($_POST['g'])){ $_POST['num'] .= $g;
}elseif(isset($_POST['q'])){ $_POST['num'] .= $q;
}elseif(isset($_POST['x'])){ $_POST['num'] .= $x;
}elseif(isset($_POST['z'])){ $_POST['num'] .= $z;
}elseif(isset($_POST['point'])){ $_POST['num'] .= $point;
}elseif(isset($_POST['del'])){ $_POST['num'] = substr($_POST['num'],0,-1);
}elseif(isset($_POST['+'])){ $_POST['num'] .= $plus;
}elseif(isset($_POST['-'])){ $_POST['num'] .= $minus;
}elseif(isset($_POST['*'])){ $_POST['num'] .= $umn;
}elseif(isset($_POST['/'])){ $_POST['num'] .= $del;
}elseif(isset($_POST['sqrt'])){ $_POST['num'] = sqrt($_POST['num']);
}elseif(isset($_POST['pow'])){ $_POST['num'] .= $pow;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){  
   if((isset($_POST['num']))&&(isset($_POST['enter']))){
      $result = trim(htmlspecialchars(strip_tags($_POST['num'])));      
      if(strstr($result,'-',true)){
         $one = strstr($result,'-',true); 
         $two = '-';
         $three = substr($result,strpos($result,'-'));
         $three = substr($three,1);
      }elseif(strstr($result,'+',true)){
         $one = strstr($result,'+',true);
         $two = "+";
         $three = substr($result,strpos($result,'+'));
         $three = substr($three,1);
      }elseif(strstr($result,'/',true)){
         $one = strstr($result,'/',true);
         $two = "/";
         $three = substr($result,strpos($result,'/'));
         $three = substr($three,1);
      }elseif(strstr($result,'*',true)){
         $one = strstr($result,'*',true);
         $two = "*";
         $three = substr($result,strpos($result,'*'));
         $three = substr($three,1);
      }elseif(strstr($result,'x',true)){
         $one = strstr($result,'x',true);
         $two = "x";
         $three = substr($result,strpos($result,'x'));
         $three = substr($three,1); 
      }       
   }
}
function result(){
   global $one;
   global $two;
   global $three;
   switch($two){
      case "+":
         $result = $one + $three;break;
      case "-":
         $result = $one - $three;break;
      case "/":
         $result = $one / $three;break;
      case "*":
         $result = $one * $three;break;   
      case "x":
         $result = pow($one,$three);break;     
   }
   return $result;
}   
?>