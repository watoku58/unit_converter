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
          <button onclick="c_click()">C</button>
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
          <button onclick="convert_click('*39.37')">m→in</button>
          <button onclick="convert_click('*3.2808')">m→ft</button>
          <button onclick="convert_click('*1.0936')">m→yd</button>
          <button onclick="convert_click('*0.62137')">km→mi</button>
        </div>
        <div>
          <button onclick="convert_click('*0.0254')">in→m</button>
          <button onclick="convert_click('*0.3048')">ft→m</button>
          <button onclick="convert_click('*0.9144')">yd→m</button>
          <button onclick="convert_click('*1.609344')">mi→km</button>
        </div>
      </div>
    </div>
  </div>
@endsection
