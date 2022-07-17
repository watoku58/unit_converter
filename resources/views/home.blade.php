@extends('layouts.layout')

@section('title', 'UnitConverter')

@section('content')
    <div class="container">
      <script src="{{ asset('/js/calculator.js') }}"></script>
      <div class="form-group row">
          <label class="col-md-1">長さ</label>
          <div class="col-md-2">
              <input type="text" id="input_text" class="form-control" name="value" value="{{ old('value') }}">
          </div>
          <div class="col-md-2">
              <select type="text" class="form-control" name="unit">
                  @foreach(config('unit') as $unit_id => $unit_name)
                      <option value="{{ $unit_name }}">{{ $unit_name }}</option>
                  @endforeach
              </select>
          </div>
          <div class="col-md-2">
              <input type="submit" id="button" class="btn btn-primary" value="計算">
          </div>
      </div>
    </div>
    <div class="container">
        <div class="col-md-5">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="20%">単位系</th>
                            <th width="20%">単位名</th>
                            <th width="40%">換算値</th>
                            <th width="20%">単位</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>ヤード・ポンド法</th>
                            <td>インチ</td>
                            <td></td>
                            <td>in</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
      </div>

    {{--電卓部分--}}
    <div class="container">
      <div class="wrapper">
        <script src="{{ asset('/js/admin.js') }}"></script>
        <h1 id="header">電卓</h1>
        <div id="calc">
          <div>
            <input readonly id="result" type="text" value="0">
            <button onclick="c_click()">C</button>
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
        </div>
      </div>
    </div>
@endsection
