@extends('layouts.app')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card upper">
                <div class="card-header">
                    {{__('New Tweet')}}
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    <form method="post" action="{{ route('tweets.store') }}">
                        <div class="form-group">
                            @csrf
                            <label for="name">{{__('Tweet Text')}}:</label>
                            <textarea  rows = "5" cols = "50" class="form-control" name="tweet_text"></textarea>
                            <textarea  style="display: none;" class="form-control" name="user_email" disabled>{{Auth::user()->email}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">{{__('Tweet')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
