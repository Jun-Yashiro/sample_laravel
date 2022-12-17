<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo App</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/main.css">
<!--    <link rel="stylesheet" href="/Sneakers_files/ress.min.css">
    <link rel="stylesheet" href="/Sneakers_files/slick.min.css">-->
    <link rel="stylesheet" href="/Sneakers_files/style.css">
    <link rel="stylesheet" href="/Sneakers_files/tpl.css">

    <script src="/Sneakers_files/main.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/slick/css/slick.css"/>
    <link rel="stylesheet" href="/slick/css/slick-theme.css"/>
    <link rel="stylesheet" href="/slick/css/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/slick/js/slick.min.js"></script>
    <script src="/slick/js/main.js"></script>

</head>
<body>
<header id="header" class="">
    {{--    <div class="wrap">--}}

    <div
        class="site-title">
        {{--        <a-scene>--}}
        {{--            <!-- aframe-orbit-controlsのプロパティを記述 -->--}}
        {{--            <a-entity camera look-controls orbit-controls="target: 0 1.6 -0.5; maxPolarAngle:180; minDistance: 0.5; maxDistance: 200; initialPosition: 0 0 30"></a-entity>--}}

        {{--            <!-- 3Dモデルを読み込んで、位置やスケールなど定義する -->--}}
        {{--            <a-gltf-model id="test" src="/Sneakers_files/scene.gltf" position="0 -1 0" rotation="20 124 7" scale="0.1 0.1 0.1"></a-gltf-model>--}}

        {{--            <!-- 背景色-->--}}
        {{--            <a-sky color="#9EA1E7"></a-sky>--}}

        {{--        </a-scene>--}}
        <a href="https://code-step.com/demo/html/media/index.html"><img src="/Sneakers_files/logo.svg" alt="Sneakers"></a>
    </div>


    <nav id="gNav" class="nav">
        <ul class="clearfix">
            <li><a href="/rent/tokyoapartment/">TOKYO APARTMENTS TOP</a></li>
            <li><a href="/rent/tokyoapartment/search/">SEARCH</a></li>
            <li><a href="/rent/tokyoapartment/service/">SPECIALIZED SERVICE</a></li>
            <li><a href="/home">マイページ</a></li>
        </ul>
    </nav>

    <nav id="navi">
        <ul class="nav-menu">
            <li><a href="https://code-step.com/demo/html/media/#pickup">PICK UP</a></li>
            <li><a href="https://code-step.com/demo/html/media/#feature">FEATURE</a></li>
            <li><a href="https://code-step.com/demo/html/media/#contact">CONTACT</a></li>
            <li><a href="https://code-step.com/demo/html/media/#contact">作成者自己紹介</a></li>
            <li><a href="https://code-step.com/demo/html/media/#contact">使用方法紹介</a></li>
        </ul>
        <ul class="nav-sns">
            <li><a href="https://twitter.com/" target="_blank">Twitter</a></li>
            <li><a href="https://www.facebook.com/" target="_blank">facebook</a></li>
            <li><a href="https://www.instagram.com/" target="_blank">instagram</a></li>
        </ul>
    </nav>

    <div class="toggle_btn">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div id="mask"></div>

    {{--    </div>--}}
</header>
<main id="main_detail">
    <div class="c-content-head">
        <div class="c-content-body">
            <div class="c-mainview">
                <h2>アイデア</h2>


                <ul class="slider">
                    <li><a href="#"><img src="/slick/img/feature1.jpg" alt="###"></a></li>
                    <li><a href="#"><img src="/slick/img/feature2.jpg" alt="###"></a></li>
                    <li><a href="#"><img src="/slick/img/feature1.jpg" alt="###"></a></li>
                    <li><a href="#"><img src="/slick/img/feature3.jpg" alt="###"></a></li>
                    <li><a href="#"><img src="/sliccommon/assets/js/tokyorent_search.jsk/img/feature2.jpg" alt="###"></a></li>
                    <li><a href="#"><img src="/slick/img/feature1.jpg" alt="###"></a></li>
                </ul>


                <div class="aiin-btn">
                    <div class="aiin-reldiv">
                        <div class="aiin-steelframe">
                        </div>
                        <div class="aiin-reldiv2">
                            <div class="aiin-tcell">
                                <div class="aiin-icon">
                                    <div class="aiin-ipos">
                                    @auth
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
                                        @endauth
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
