@extends('layout')

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

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">
                        まずはアイデアを作成しましょう
                    </div>
                    <div class="panel-body">
                        <div class="text-center">
                            <a href="/ideas/{{ Auth::user()->id }}/list" class="btn btn-primary">
                                アイデア一覧ページへ
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
</div>
@endsection
