@extends('layouts.layout')

@section('title', 'UnitConverter')

@section('myjs')
<script src="{{ asset('/js/admin.js') }}"></script>
@endsection

@section('content')
  <div class="container">
    <div class="wrapper">
      <h1 id="header">電卓</h1>
      <div id="calc">
        <div>
          <input readonly id="result" type="text" value="0">
          <P id="unit" type="text" class="display"></P>
        </div>
        <div>
          <button></button>
          <button></button>
          <button onclick="Backspace()" class="BS_button">BS</button>
          <button onclick="Clear()" class="C_button">C</button>
        </div>
        <div>
          <button onclick="num_click(this.innerHTML)">7</button>
          <button onclick="num_click(this.innerHTML)">8</button>
          <button onclick="num_click(this.innerHTML)">9</button>
          <button onclick="ope_click(this.innerHTML)">÷</button>
        </div>
        <div>
          <button onclick="num_click(this.innerHTML)">4</button>
          <button onclick="num_click(this.innerHTML)">5</button>
          <button onclick="num_click(this.innerHTML)">6</button>
          <button onclick="ope_click(this.innerHTML)">×</button>
        </div>
        <div>
          <button onclick="num_click(this.innerHTML)">1</button>
          <button onclick="num_click(this.innerHTML)">2</button>
          <button onclick="num_click(this.innerHTML)">3</button>
          <button onclick="ope_click(this.innerHTML)">-</button>
        </div>
        <div>
          <button onclick="num_click(this.innerHTML)">0</button>
          <button onclick="num_click(this.innerHTML)">.</button>
          <button onclick="equal_click()">=</button>
          <button onclick="ope_click(this.innerHTML)">+</button>
        </div>
        <div>
          <button onclick="convert_click(0)" class="conv_unit">ﾒｰﾄﾙ<span>→ｲﾝﾁ</span></button>
          <button onclick="convert_click(1)" class="conv_unit">ﾒｰﾄﾙ<span>→ﾌｨｰﾄ</span></button>
          <button onclick="convert_click(2)" class="conv_unit">ﾒｰﾄﾙ<span>→ﾔｰﾄﾞ</span></button>
          <button onclick="convert_click(3)" class="conv_unit2">ｷﾛﾒｰﾄﾙ<span>→ﾏｲﾙ</span></button>
        </div>
        <div>
          <button onclick="convert_click(4)" class="conv_unit">ｲﾝﾁ<span>→ﾒｰﾄﾙ</span></button>
          <button onclick="convert_click(5)" class="conv_unit">ﾌｨｰﾄ<span>→ﾒｰﾄﾙ</span></button>
          <button onclick="convert_click(6)" class="conv_unit">ﾔｰﾄﾞ<span>→ﾒｰﾄﾙ</span></button>
          <button onclick="convert_click(7)" class="conv_unit2">ﾏｲﾙ<span>→ｷﾛﾒｰﾄﾙ</span></button>
        </div>
      </div>
    </div>
  </div>
@endsection
