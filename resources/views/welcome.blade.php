@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        <div class="row">
            <aside class="col-md-4">
            </aside>
            <div class="col-xs-8">
                @if (count($tasklists) > 0)
<!-- ログイン後 /tasklists/index.blade.phpをみる。 -->
@include('tasklists.index', ['tasklists' => $tasklists])
                @endif
            </div>
        </div>
    @else
<!-- <p class="text-center">/welcome.blade.php ログイン前</p> -->
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the tasklists</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection