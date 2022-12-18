<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo App</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header>
    <nav class="my-navbar">
        <a class="my-navbar-brand" href="/home">Idea App <span>管理側</span></a>
        <div class="my-navbar-control">
            <a class="my-navbar-item" href="/Sneakers">公開側へ</a>
            ｜
            @if(Auth::check())
                <span class="my-navbar-item">ようこそ, {{ Auth::user()->user_later_name }}{{ Auth::user()->user_first_name }}さん</span>
                ｜
                <a href="#" id="logout" class="my-navbar-item">ログアウト</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a class="my-navbar-item" href="{{ route('login') }}">ログイン</a>
                ｜
                <a class="my-navbar-item" href="{{ route('register') }}">会員登録</a>
            @endif
        </div>
    </nav>
</header>
<main>
    <div class="container">
        <div class="row">
            <div class="col col-md-4">
                <nav class="panel panel-default">
                    <div class="panel-heading">アイデア</div>
                    <div class="panel-body">
                        <a href="/ideas/{{ Auth::user()->id }}/create" class="btn btn-default btn-block">
                            アイデアを追加する
                        </a>
                    </div>
                    <div class="list-group">
                        @foreach($userIdeas as $userIdea)
                            <a href="/ideas/{{ $userIdea->id }}/detail" class="list-group-item">
                                {{ $userIdea->idea_name }}
                            </a>
                            <form action="{{ route('ideas.delete', ['userId' => Auth::user()->id, 'idea_id' => $userIdea->id] ) }}"  method="POST">
                                @csrf
                                <button type="submit">削除</button>
                            </form>

                        @endforeach
                    </div>
                </nav>
            </div>
            <div class="column col-md-8">
                <!-- ここにタスクが表示される -->
            </div>
        </div>
    </div>
</main>
</body>
</html>
