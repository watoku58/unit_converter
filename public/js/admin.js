// 表示させるデータ
var result = "";
// =で計算したかどうか
var is_calc = false;

// 初期表示、HTML読み込み後、id”result”と変数のresultを紐づけ
window.onload = function () {
  result = document.getElementById('result');
};

// Cボタンクリック時のイベント、変数を初期化
function Clear(){
  result.value = "0";
  is_calc = false;

  let element = document.getElementById('unit');
  element.innerHTML = "";
}

function Backspace(){
  result.value = result.value.slice(0, -1);
}

// 数字ボタンクリック時のイベント
function num_click(val){
  // 1度”＝”で計算済みの場合、数字ボタンを押したらresultを初期化
  if(is_calc)  result.value = "0";
  is_calc = false;
  let element = document.getElementById('unit');
  element.innerHTML = "";

  // 初期化後、”0″が入力された場合、resultに”0″を設定
  if(result.value =="0" && val == "0"){
    result.value = "0";
  }
  // 初期化後、”.”が入力された場合、resultに”0.”を設定
  else if(result.value == "0" && val == "."){
    result.value = "0.";
  }
  // 初期化後、上記以外の数字が入力された場合、resultに入力値を設定
  else if(result.value == "0"){
    result.value = val;
  }
  // それ以外は直接resultに入力値を追加
  else{
    result.value += val;
  }
}

// 演算子ボタンクリック時のイベント
function ope_click(val){
  // 1度”＝”で計算済みの場合、演算子ボタンを押したら計算を初期化
  if(is_calc)  is_calc = false;
  let element = document.getElementById('unit');
  element.innerHTML = "";

  // 直前のボタンが演算子の場合、演算子を切り替え
  if(is_ope_last()){
    result.value = result.value.slice(0, -1) + val;
  }
  // 計算式に入力した演算子を付け加え
  else {
    result.value += val;
  }
}

// ＝ボタンクリック時のイベント
function equal_click(){
  // 計算式の最後が演算子の場合、演算子を取り除く
  if(is_ope_last())  result.value = result.value.slice(0, -1);

  // 変数tempに計算式の計算結果を設定
  var temp = new Function("return " + result.value.replaceAll("×", "*").replaceAll("÷", "/"))();
  // 計算結果がInfinity（無限大）かNaN（数字出ない）場合、resultにErrorを設定
  if(temp == Infinity || Number.isNaN(temp)){
    result.value = "Error";
  }
  // tempの値をresultに設定し、計算済み（is_calc）フラグをtrueに
  else{
    result.value = temp;
    is_calc = true;
  }
}

// 計算式の最後が演算子か判定する
function is_ope_last(){
  return ["+","-","×","÷"].includes(result.value.toString().slice(-1));
}

function convert_click(unit){
  // 押したボタンの番号に応じて配列を取り出す
  var suji = [
    {unit:39.37, tani:"インチ"},
    {unit:3.2808, tani:"フィート"},
    {unit:1.0936, tani:"ヤード"},
    {unit:0.62137, tani:"マイル"},
    {unit:0.0254, tani:"メートル"},
    {unit:0.3048, tani:"メートル"},
    {unit:0.9144, tani:"メートル"},
    {unit:1.609344, tani:"キロメートル"},
  ];
  //console.log(suji[unit].unit);
  //console.log(suji[unit].tani);
  // 計算式の最後が演算子の場合、演算子を取り除く
  if(is_ope_last())  result.value = result.value.slice(0, -1);
  //console.log(unit);

  // 先に表示上の計算を実行
  //console.log("前");
  var temp = eval(result.value.replaceAll("×", "*").replaceAll("÷", "/"));
  // 計算結果から換算を実行
  //console.log(temp);
  var conv = temp*suji[unit].unit;
  //console.log("後");
  // 計算結果がInfinity（無限大）かNaN（数字出ない）場合、resultにErrorを設定
  if(conv == Infinity || Number.isNaN(conv)){
    result.value = "Error";
  }
  // convの値をresultに設定し、計算済み（is_calc）フラグをtrueに
  else{
    result.value = conv;
    //result.insertAdjacentHTML("afterend", suji[unit].tani);
    let element = document.getElementById('unit');
    element.innerHTML = suji[unit].tani;
    is_calc = true;
  }
}
