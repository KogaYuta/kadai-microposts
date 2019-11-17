@extends('layouts.app')

@section('content')
<!--$user, $micropostがコントローラーから渡される-->
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card', ['user' => $user])
        </aside>
        <div class="col-sm-8">
            @include('users.navtabs', ['user' => $user])
            @include('microposts.microposts', ['user'=>$user, 'microposts' => $microposts])
        </div>
    </div>
@endsection