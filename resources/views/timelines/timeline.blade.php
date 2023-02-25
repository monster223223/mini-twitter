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
                {{__('Tweets of followed users')}}
            </div>
            <div class="card-body">
                <div class="uper">
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        <br />
                    @endif
                    <table class="table table-striped">
                        <tbody>
                            @foreach($timelines as $timeline)
                                <tr>
                                    <td class="col-md-11">
                                        {{$timeline->tweet_text}}
                                    </td>
                                        <td class="col-md-1">
                                            {{$timeline->user_email_2}}
                                        </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr />
                    <br />
                    <div class="container">
                        <div class="row justify-content-center">
                            {!! $timelines->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
