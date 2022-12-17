<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
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
            <div class="col col-md-offset-3 col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">アイデアを追加する</div>
                    <div class="panel-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $message)
                                    <p>{{ $message }}</p>
                                @endforeach
                            </div>
                        @endif
                        <form action="/ideas/{{ Auth::user()->id }}/create" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="idea_name">アイデア名</label>
                                <input type="text" class="form-control" name="idea_name" id="idea_name" value="{{ old('idea_name') }}" />
                            </div>
                            <div class="form-group">
                                <label for="idea_url">グーグルドライブのURL</label>
                                <input type="text" class="form-control" name="idea_url" id="idea_url" value="{{ old('idea_url') }}" />
                            </div>
                            <div class="form-group">
                                <label for="idea_picture_1">画像1枚目</label>
                                <input id="idea_picture_1" type="file" name="idea_picture_1">
                            </div>
                            <div class="form-group">
                                <label for="idea_picture_2">画像2枚目</label>
                                <input id="idea_picture_2" type="file" name="idea_picture_2">
                            </div>
                            <div class="form-group">
                                <label for="idea_picture_3">画像3枚目</label>
                                <input id="idea_picture_3" type="file" name="idea_picture_3">
                            </div>
                            <div class="form-group">
                                <label for="category">カテゴリ</label>
                                <select class="form-control" id="category" name="category">
                                    @foreach (Config::get('idea.is_categories') as $key => $val)
                                        <option value="{{ $key }}">{{ $val }}</option>
                                    @endforeach
                                </select>
{{--                                <input type="text" class="form-control" name="category" id="category" value="{{ old('category') }}" />--}}
                            </div>
                            <div class="form-group">
                                <label for="file_type">ファイルタイプ</label>
                                <select class="form-control" id="file_type" name="file_type">
                                    @foreach (Config::get('idea.file_type') as $key => $val)
                                        <option value="{{ $key }}">{{ $val }}</option>
                                    @endforeach
                                </select>
{{--                                <input type="text" class="form-control" name="file_type" id="file_type" value="{{ old('file_type') }}" />--}}
                            </div>
                            <div class="form-group">
                                <label for="explain">説明</label>
                                <input type="text" class="form-control" name="explain" id="explain" value="{{ old('explain') }}" />
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">送信</button>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</main>

<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
<script>
    flatpickr(document.getElementById('due_date'), {
        locale: 'ja',
        dateFormat: "Y/m/d",
        minDate: new Date()
    });
</script>
</body>
</html>
