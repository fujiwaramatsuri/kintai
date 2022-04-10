@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
                <div class="card-body-home">
<!-- 勤務開始 -->
                <form action="/start" method="POST" class="home-btn A">
                    @csrf
                    <input type="submit" 
                        value="勤務開始" id="user_id" onclick="
                            getElementById('buttonA').disabled = true;
                            getElementById('buttonB').disabled = false;
                            getElementById('buttonC').disabled = true;
                            getElementById('buttonD').disabled = false;">
                    </form>
                    <input type="submit" class="home-btn D"
                        value="勤務終了"id="buttonD" disabled onclick="
                            getElementById('buttonA').disabled = false;
                            getElementById('buttonB').disabled = true;
                            getElementById('buttonC').disabled = true;
                            getElementById('buttonD').disabled = true;">
                    <input type="submit" class="home-btn B"
                        value="休憩開始"id="buttonB" disabled onclick="
                            getElementById('buttonB').disabled = true;
                            getElementById('buttonC').disabled = false;">
                    <input type="submit" class="home-btn C"
                        value="休憩終了"id="buttonC" disabled onclick="
                            getElementById('buttonB').disabled = false;
                            getElementById('buttonC').disabled = true;">
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
