@extends('layouts.layout')

@section('title', 'UnitConverter')

@section('content')
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">

<title>度量換算付き電卓</title>
<script type="text/javascript" language="JavaScript">
<!--

function WinSize(){
	window.focus();
//	resizeTo(400,360);
//このScriptを単独で使用する時は上の二行を外して下さい。
}

var op = "";
var opflag=false;
var tmp=0;

function num(myNum){
	if(opflag==true){
		document.myForm.text1.value="0";
	}
	if(document.myForm.text1.value == "0"){
		document.myForm.text1.value=myNum;
	}	else{
		document.myForm.text1.value +=myNum;
	}
	opflag=false;
}

function calc(myOp){
	if(opflag==true){
		op=myOp;
	}	else{
			if(op != ""){
				document.myForm.text1.value=eval(tmp+op+document.myForm.text1.value);
			}
		tmp=document.myForm.text1.value;
		op=myOp;
	}
	opflag=true;
}

function cl(){
	document.myForm.text1.value="0";
	tmp=0;
	op=0;
	opflag=false;
}

function chenge(myCh){
	document.myForm.text2.value=eval(document.myForm.text1.value+myCh);
}

//-->
</script>
</head>
<body onLoad="WinSize();">
<div align=center>
<form name="myForm">
<table border=1 width=320>
<tr>
	<td colspan="2" align="center">
度量換算機付き電卓 ver0.1
	</td>
</tr>
<tr>
	<td valign="top">
<input type="text" name="text1" value="0" size="20">
<table>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td><input type="button" value="AC" onClick="cl()"></td>
</tr>
<tr>
	<td><input type="button" value=" 7 " onClick="num('7')"></td>
	<td><input type="button" value=" 8 " onClick="num('8')"></td>
	<td><input type="button" value=" 9 " onClick="num('9')"></td>
	<td><input type="button" value=" / " onClick="calc('/')"></td>
</tr>
<tr>
	<td><input type="button" value=" 4 " onClick="num('4')"></td>
	<td><input type="button" value=" 5 " onClick="num('5')"></td>
	<td><input type="button" value=" 6 " onClick="num('6')"></td>
	<td><input type="button" value=" * " onClick="calc('*')"></td>
</tr>
<tr>
	<td><input type="button" value=" 1 " onClick="num('1')"></td>
	<td><input type="button" value=" 2 " onClick="num('2')"></td>
	<td><input type="button" value=" 3 " onClick="num('3')"></td>
	<td><input type="button" value=" - " onClick="calc('-')"></td>
</tr>
<tr>
	<td><input type="button" value=" 0 " onClick="num('0')"></td>
	<td><input type="button" value=" . " onClick="num('.')"></td>
	<td><input type="button" value=" = " onClick="calc('=')"></td>
	<td><input type="button" value=" + " onClick="calc('+')"></td>
</tr>
</table>
	</td>
	<td valign=top align=center>
	<input type="text" name="text2" value="0" size="20">
	<table align=center>
	<tr>
		<td align=center>
	<input type="button" value="inch &gt; mm" onClick="chenge('*25.4')"><br>
	<input type="button" value="feet &gt; mm" onClick="chenge('*304.8')"><br>
	<input type="button" value="yard &gt; m" onClick="chenge('*0.9144')"><br>
	<input type="button" value="mile &gt; km" onClick="chenge('*1.6093')"><br>
	<input type="button" value="lb &gt; kg" onClick="chenge('*0.45356')"><br>
	<input type="button" value="oz &gt; g " onClick="chenge('*28.35')"><br>
		</td>
		<td align=center>
	<input type="button" value="mm &gt; inch" onClick="chenge('/25.4')"><br>
	<input type="button" value="mm &gt; feet" onClick="chenge('/304.8')"><br>
	<input type="button" value="m &gt; yard" onClick="chenge('/0.9144')"><br>
	<input type="button" value="km &gt; mile" onClick="chenge('/1.6093')"><br>
	<input type="button" value="kg &gt; lb" onClick="chenge('/0.45356')"><br>
	<input type="button" value="g &gt; oz" onClick="chenge('/28.35')"><br>
		</td>
	</tr>
	</table>
	</td>
</tr>
<tr>
	<td colspan=2>
	左の電卓で計算した値を、右のボタンで単位換算します。<br>
<br>
このJavaScriptはソフトバンクパブリッシング(株)発行の「JavaScriptハンドブック 基礎編」に記載されていた電卓のScriptを基に単位換算機能を付けました。
	</td>
</tr>
</table>
</form>
</div>
</body>
</html>
