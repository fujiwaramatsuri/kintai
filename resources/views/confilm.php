@extends('layouts.app')

@section('content')
<style>
    th {
      background-color: #289ADC;
      color: white;
      padding: 5px 40px;
    }
    tr:nth-child(odd) td{
      background-color: #FFFFFF;
    }
    td {
      padding: 25px 40px;
      background-color: #EEEEEE;
      text-align: center;
    }
</style>
@section('title','日付一覧')

@section('content')
<table>
  <tr>
    <th>名前</th>
    <th>勤務開始</th>
    <th>勤務終了</th>
    <th>休憩開始</th>
    <th>休憩終了</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->user}}
    </td>
    <td>
      {{$item->strat-time_time}}
    </td>
    <td>
      {{$item->end_time}}
    </td>
    <td>
      {{$rest->rests_strat}}
    </td>
    <td>
      {{$rest->rests_end}}
    </td>
  </tr>
  @endforeach
</table>
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
