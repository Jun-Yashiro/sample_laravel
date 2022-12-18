<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo App</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/main.css">
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
    <div class="c-content-head">
        <div class="c-content-body">
            <div class="c-mainview">
                <h2>アイデア</h2>
                <a href="{{ route('ideas.editShow', [ 'idea_id' => $idea->id]) }}" >
                    編集
                </a>
                <div class="aiin-btn">
                    <div class="aiin-reldiv">
                        <div class="aiin-steelframe">
                        </div>
                        <div class="aiin-reldiv2">
                            <div class="aiin-tcell">
                                <div class="aiin-icon">
                                    <div class="aiin-ipos">
                                        <!-- もし$niceがあれば＝ユーザーが「いいね」をしていたら -->
                                        @if($nice)
                                            <div class="aiin-vmstd aiin-vmstd-off">
                                                <!-- 「いいね」取消用ボタンを表示 -->
                                                <a href="{{ route('unnice', $idea->id) }}" class="btn btn-success btn-sm">
                                                    いいね
                                                    <!-- 「いいね」の数を表示 -->
                                                    <span class="badge">{{ $count }}</span>
                                                </a>
                                            </div>
                                        @else
                                            <div class="aiin-vmstd aiin-vmstd-on">
                                                <!-- まだユーザーが「いいね」をしていなければ、「いいね」ボタンを表示 -->
                                                <a href="{{ route('nice', $idea->id) }}" class="btn btn-secondary btn-sm">
                                                    いいね
                                                    <!-- 「いいね」の数を表示 -->
                                                    <span class="badge">{{ $count }}</span>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="aiin-tcell2">
				<span class="aiin-vcnt">
				</span>
                            </div>
                        </div>
                    </div>
                </div>
                <table>
                    <tr>
                        <th>id</th>
                        <td>{{ $idea->id }}</td>
                    </tr>
                    <tr>
                        <th>アイデア名</th>
                        <td>{{ $idea->idea_name }}</td>
                    </tr>
                    <tr>
                        <th>アイデア画像1</th>
                        <td>
                            <img src="{{ Storage::url($idea->idea_picture_1)}}" width="100px">
                        </td>
                    </tr>
                    <tr>
                        <th>アイデア画像2</th>
                        <td>
                            <img src="{{ Storage::url($idea->idea_picture_2)}}" width="100px">
                        </td>
                    </tr>
                    <tr>
                        <th>アイデア画像3</th>
                        <td>
                            <img src="{{ Storage::url($idea->idea_picture_3)}}" width="100px">
                        </td>
                    </tr>
                    <tr>
                        <th>アイデアリンク先URL</th>
                        <td>
                            <a href="{{ $idea->idea_url }}">
                                {{ $idea->idea_url }}
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>カテゴリ</th>
                        <td>{{ config('idea.is_categories.'. $idea->category) }}</td>
                    </tr>
                    <tr>
                        <th>ファイルタイプ</th>
                        <td>{{ config('idea.file_type.'. $idea->file_type) }}</td>
                    </tr>
                    <tr>
                        <th>アイデア説明</th>
                        <td>{{ $idea->explain }}</td>
                    </tr>

                    <tr>
                        <th>作成日</th>
                        <td>{{ $idea->created_at }}</td>
                    </tr>

                    <tr>
                        <th>更新日</th>
                        <td>{{ $idea->updated_at }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>
</body>
</html>
