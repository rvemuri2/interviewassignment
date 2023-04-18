@extends('layouts.app')
<style>
.invalid-feedback {
    display:block;
}
</style>
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

                    {{ __('Welcome ') }}{{ Auth::user()->name }}
                </div>

            </div>
            <form method="post" action="{{route('questions.store')}}">
                {{csrf_field()}}
                <label>Question 1: What is your favorite food?</label>
                <input id="question1" type="text" class="form-control @error('name') is-invalid @enderror" name="question1" value="{{ old('question1') }}">
                @if ($errors->has('question1'))
                <small class="form-text invalid feedback">{{$errors->first('question1')}}</small>
                @endif
                <label>Question 2: What is your favorite book?</label>
                <input id="question2" type="text" class="form-control @error('name') is-invalid @enderror" name="question2" value="{{ old('question2') }}">
                @if ($errors->has('question2'))
                <small class="form-text invalid feedback">{{$errors->first('question2')}}</small>
                @endif
                <label>Question 3: What do like about coding?</label>
                <input id="question3" type="text" class="form-control @error('name') is-invalid @enderror" name="question3" value="{{ old('question3') }}">
                @if ($errors->has('question3'))
                <small class="form-text invalid feedback">{{$errors->first('question3')}}</small>
                @endif
                <input type="submit">Submit and see all user info </input>
            </form>
        </div>
    </div>
</div>
@endsection
