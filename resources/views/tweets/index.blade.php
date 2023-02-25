@extends('layouts.app')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header">
                {{__('My Tweets')}}
            </div>
            <div class="card-body">
                <div class="uper">
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div><br />
                    @endif
                    <table class="table table-striped">
                        <tbody>
                            @foreach($tweets as $tweet)
                                <tr>
                                    <td class="col-md-11">{{$tweet->tweet_text}}</td>
                                    <td class="col-md-1">
                                        <form action="{{ route('tweets.destroy', $tweet->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">{{__('Delete')}}</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                <hr /><br />
                <div class="container">
                    <div class="row justify-content-center">
                        {!! $tweets->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
