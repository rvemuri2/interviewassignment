@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Your username is: ') }}{{ Auth::user()->name }}<br>
                    {{ __('Your email is: ') }}{{ Auth::user()->email }}<br>
                    {{ __('Your password is: ') }}{{ Auth::user()->password }}<br>
             


                </div>
                    Your answer to the question: "What is your favorite food: " <?php echo $_POST["question1"]; ?><br>
                    Your answer to the question: "What is your favorite book: " <?php echo $_POST["question2"]; ?><br>
                    Your answer to the question: "What do like about coding: " <?php echo $_POST["question3"]; ?><br>
            </div>
            
        </div>
    </div>
</div>
@endsection