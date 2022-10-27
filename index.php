<?php include "my_formas.php";
?>
<style>
.calc{
	width:250px;
	margin: 10px 10px 0 0;
	padding:0;
	background-color:lightgrey;
}
.but{
	width:50px;
	height:30px;
	margin:2px;
	padding:0;
	font-size:16px;
}
.pole{
	font-size: 18px;
    margin:10px;
	width:230px;
	height:30px;
}
.tablo{
	margin: 8px;	
	padding-bottom: 10px;
}
</style>
<div class="calc">
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	<input class="pole" type="text" name="num" onfocus="blur();" value="<?php 
	if((isset($_POST['num']))&&(!isset($_POST['reset']))&&(!isset($_POST['enter']))){
		echo $_POST['num'];		
	}elseif(!isset($_POST['reset'])&&(isset($_POST['enter']))){
		$_POST['num'] = "";
		$_POST = null;
		echo result();
	}elseif(isset($_POST['del'])){
		$_POST['num'] = 0;
	}
	?>"><br>
	<div class="tablo">
	<button class="but" name="a">1</button>
	<button class="but" name="b">2</button>
	<button class="but" name="c">3</button>
	<button class="but" name="d">4</button><br>
	<button class="but" name="i">5</button>
	<button class="but" name="f">6</button>
	<button class="but" name="g">7</button>
	<button class="but" name="q">8</button><br>
	<button class="but" name="x">9</button>
	<button class="but" name="z">0</button>
	<button class="but" name="+">+</button>
	<button class="but" name="-">-</button><br>
	<button class="but" name="*">*</button>
	<button class="but" name="/">/</button>	
	<button class="but" name="point">.</button>
	<button class="but" name="pow"><sub>X</sub><sup>x</sup></button>	
	<button class="but" name="sqrt">&#8730;</button>
	<button class="but" name="del">&#9003;</button>	
	<button class="but" name="reset">Reset</button>
	<input class="but" type="submit" name="enter" value="Count"><br> 
	</div>	
</form>
</div>