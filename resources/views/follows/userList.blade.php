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
                    {{__('List of Users')}}
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
                        @foreach($users as $user)
                            <tr>
                                <td class="col-md-11">{{$user->email}}</td>
                                <td class="col-md-1">
                                    <form action="{{ route('follows.store',['$follow->user_email_1','$follow->user_email_2'])}}" method="post">
                                        @csrf
                                        <input  id="user_email_2" type="hidden" name="user_email_2" value="{{$user->email}}" style="display: none;" />
                                        <button class="btn btn-success" type="submit">{{__('Follow')}}</button>
                                    </form>
                                </td>
                                <td class="col-md-1">
                                    <form action="{{ route('follows.destroy', $user->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input  id="user_email_2" type="hidden" name="user_email_2" value="{{$user->email}}" style="display: none;" />
                                        <button class="btn btn-danger" type="submit">{{__('UnFollow')}}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr /><br />
                <div class="container">
                    <div class="row justify-content-center">
                        {!! $users->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
