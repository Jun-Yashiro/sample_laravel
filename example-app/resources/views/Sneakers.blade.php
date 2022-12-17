@inject('UserModel', 'App\Models\User')
@inject('IdeaModel', 'App\Models\Idea')

    <!DOCTYPE html>
<!-- saved from url=(0038)https://code-step.com/demo/html/media/ -->
<html lang="ja">




<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Sneakers</title>
    <meta name="description" content="テキストテキストテキストテキストテキストテキストテキストテキス">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://code-step.com/demo/html/media/img/favicon.ico">
{{--    <link rel="stylesheet" href="/Sneakers_files/ress.min.css">--}}
{{--    <link rel="stylesheet" href="/Sneakers_files/slick.min.css">--}}
    <link rel="stylesheet" href="/Sneakers_files/style.css">
    <link rel="stylesheet" href="/Sneakers_files/tpl.css">

    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
{{--    <link rel="stylesheet" href="css/style.css">--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
{{--    <script src="js/main.js"></script>--}}

{{--    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>--}}
{{--    <script src="/Sneakers_files/jquery.min.js"></script>--}}
    <script src="/Sneakers_files/main.js"></script>
{{--    <!-- A-FrameをCDNから読み込む -->--}}
{{--    <script src="https://aframe.io/releases/1.0.3/aframe.min.js"></script>--}}
{{--    <!-- aframe-orbit-controlsをCDNから読み込む -->--}}
{{--    <script src="https://unpkg.com/aframe-orbit-controls@1.2.0/dist/aframe-orbit-controls.min.js"></script>--}}

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

<main id="main">
    <div id="video">
        {{--        <video id="bg-video" src="video/video.mp4" loop="" autoplay="" muted="" playsinline=""></video>--}}
        <img src="/Sneakers_files/road-6881040_1920.jpg">
    </div>
    <section id="pickup">
    <h2 class="sec-title">PICK UP</h2>
    <ul class="slider-3" id="js-slider-3">
        <li>
            <div class="slide-img">
                <img src="/Sneakers_files/pickup8.jpg" alt="">
            </div>
        </li>
        <li>
            <div class="slide-img">
                <img src="/Sneakers_files/pickup9.jpg" alt="">
            </div>
        </li>

        <li>
            <div class="slide-img">
                <img src="/Sneakers_files/pickup1.jpg" alt="">
            </div>
        </li>
        <li>
            <div class="slide-img">
                <img src="/Sneakers_files/pickup2.jpg" alt="">
            </div>
        </li>
        <li>
            <div class="slide-img">
                <img src="/Sneakers_files/pickup3.jpg" alt="">
            </div>
        </li>
        <li>
            <div class="slide-img">
                <img src="/Sneakers_files/pickup4.jpg" alt="">
            </div>
        </li>
        <li>
            <div class="slide-img">
                <img src="/Sneakers_files/pickup5.jpg" alt="">
            </div>
        </li>
        <li>
            <div class="slide-img">
                <img src="/Sneakers_files/pickup6.jpg" alt="">
            </div>
        </li>
        <li>
            <div class="slide-img">
                <img src="/Sneakers_files/pickup7.jpg" alt="">
            </div>
        </li>

    </ul>
    <div class="dots-3"></div>
    </section>
{{--    <section id="pickup">--}}
{{--        <h2 class="sec-title">PICK UP</h2>--}}


{{--        <ul class="slick-area slick-initialized slick-slider">--}}
{{--            <div class="slick-list draggable" style="padding: 0px 50px;">--}}
{{--                <div class="slick-track" style="opacity: 1; width: 9640px; transform: translate3d(-964px, 0px, 0px);">--}}
{{--                    <div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup8.jpg" alt="ピックアップ８　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup9.jpg" alt="ピックアップ９　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide slick-current slick-active slick-center" data-slick-index="0" aria-hidden="false" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup1.jpg" alt="ピックアップ１　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup2.jpg" alt="ピックアップ２　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup3.jpg" alt="ピックアップ３　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup4.jpg" alt="ピックアップ４　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup5.jpg" alt="ピックアップ５　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup6.jpg" alt="ピックアップ６　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup7.jpg" alt="ピックアップ７　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup8.jpg" alt="ピックアップ８　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup9.jpg" alt="ピックアップ９　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup1.jpg" alt="ピックアップ１　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup2.jpg" alt="ピックアップ２　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup3.jpg" alt="ピックアップ３　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup4.jpg" alt="ピックアップ４　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup5.jpg" alt="ピックアップ５　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide slick-cloned" data-slick-index="14" id="" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup6.jpg" alt="ピックアップ６　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide slick-cloned" data-slick-index="15" id="" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup7.jpg" alt="ピックアップ７　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide slick-cloned slick-center" data-slick-index="16" id="" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup8.jpg" alt="ピックアップ８　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="slick-slide slick-cloned" data-slick-index="17" id="" aria-hidden="true" tabindex="-1" style="width: 482px;">--}}
{{--                        <div>--}}
{{--                            <li style="width: 100%; display: inline-block;"><img src="/Sneakers_files/pickup9.jpg" alt="ピックアップ９　テキストテキスト"></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </ul>--}}
{{--    </section>--}}

    <section id="feature">
        <h2 class="sec-title">FEATURE</h2>

        <div class="open-btn1"></div>
        <div id="search-wrap">

            <form role="search" method="get" id="searchform" method="GET" action="{{ url('Sneakers/Index') }}">
                <input type="text" value="" name="university" id="search-text" placeholder="大学名">
                {!! Form::select('job',
                                         config('sneaker.jobs'),
                                         null, ['placeholder' => 'お仕事']) !!}
                {!! Form::select('category',
                                        config('sneaker.categories'),
                                        null, ['placeholder' => 'カテゴリー']) !!}
                {!! Form::select('file_type',
                                        config('sneaker.file_type'),
                                        null, ['placeholder' => 'ファイルタイプ']) !!}

                <input type="hidden" name="scroll_top" value="" class="st">
                {{--                <select name="category">--}}
                {{--                    <option value="">カテゴリーを選択してください</option>--}}
                {{--                    <option value="公務員">図面</option>--}}
                {{--                    <option value="公務員">線画パース</option>--}}
                {{--                    <option value="公務員">レンダリングパース</option>--}}
                {{--                    <option value="公務員">スケッチ風パース</option>--}}
                {{--                    <option value="公務員">フォトショ合成</option>--}}
                {{--                    <option value="公務員">イラレボード</option>--}}
                {{--                    <option value="公務員">ダイアグラム</option>--}}
                {{--                    <option value="公務員">3dモデリング</option>--}}
                {{--                    <option value="その他">その他</option>--}}
                {{--                </select>--}}
                {{--                <select name="file_type">--}}
                {{--                    <!--                    //https://helpx.adobe.com/jp/acrobat/kb/supported-file-formats-acrobat-reader.html-->--}}
                {{--                    <option value="">ファイルタイプを選択してください</option>--}}
                {{--                    <option value="公務員">.psd</option>--}}
                {{--                    <option value="公務員">.ai</option>--}}
                {{--                    <option value="公務員">.indd</option>--}}
                {{--                    <option value="公務員">.dwg</option>--}}
                {{--                    <option value="公務員">.dxf</option>--}}
                {{--                    <option value="その他">その他</option>--}}
                {{--                </select>--}}
                <input type="submit" id="searchsubmit" value="">
            </form>

            <!--/search-wrap-->
        </div>
        <div class="grid">

            @foreach($ideas as $idea)
                <a href={{ route('webSiteView.detail', ['id' => $idea->id]) }}>
                    <div class="item">
                        <img class="fadein" src="{{ Storage::url($idea->idea_picture_1)}}" alt="" style="opacity: 1; transform: translateY(0px);">
                        <div class="item-content css-ctar">
                            <p class="item-cat">{{ $idea->idea_name }}</p>
                            <p class="item-cat">職業：{!!config('sneaker.jobs')[$idea->work]!!}</p>
                            <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            <p class="item-date">XXXX.XX.XX</p>
                            <div class="aiin-btn">
                                <div class="aiin-reldiv">
                                    <div class="aiin-steelframe">
                                    </div>
                                    <div class="aiin-reldiv2">
                                        <div class="aiin-tcell">
                                            <div class="aiin-icon">

                                                <!-- もし$niceがあれば＝ユーザーが「いいね」をしていたら -->
                                                @if($idea->good_count==0)
                                                    <div class="aiin-ipos">
                                                        <div class="aiin-vmstd aiin-vmstd-off">
                                                        </div>
                                                    </div>
                                                    <!-- 「いいね」取消用ボタンを表示 -->

                                                    <!-- 「いいね」の数を表示 -->
                                                    <div class="badge" style="margin-top: -11px; margin-left: 25px;">いいね{{ $idea->good_count }}</div>
                                                @else
                                                    <div class="aiin-ipos">
                                                        <div class="aiin-vmstd aiin-vmstd-on">
                                                        </div>
                                                    </div>
                                                    <!-- まだユーザーが「いいね」をしていなければ、「いいね」ボタンを表示 -->

                                                    <!-- 「いいね」の数を表示 -->
                                                    <div class="badge" style="margin-top: -11px; margin-left: 25px;">いいね{{ $idea->good_count }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="aiin-tcell2">
				<span class="aiin-vcnt">
				</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </a>
            @endforeach

            <div class="item">
                <img class="fadein" src="/Sneakers_files/feature1.jpg" alt="" style="opacity: 1; transform: translateY(0px);">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>

            <div class="item">
                <img class="fadein" src="/Sneakers_files/feature2.jpg" alt="" style="opacity: 1; transform: translateY(0px);">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>

            <div class="item">
                <img class="fadein" src="/Sneakers_files/feature3.jpg" alt="" style="opacity: 1; transform: translateY(0px);">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>

            <div class="item">
                <img class="fadein" src="/Sneakers_files/feature4.jpg" alt="" style="opacity: 1; transform: translateY(0px);">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>

            <div class="item">
                <img class="fadein" src="/Sneakers_files/feature5.jpg" alt="" style="opacity: 1; transform: translateY(0px);">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>

            <div class="item">
                <img class="fadein" src="/Sneakers_files/feature6.jpg" alt="" style="opacity: 1; transform: translateY(0px);">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>

            <div class="item">
                <img class="fadein" src="/Sneakers_files/feature7.jpg" alt="" style="opacity: 1; transform: translateY(0px);">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>

            <div class="item">
                <img class="fadein" src="/Sneakers_files/feature8.jpg" alt="" style="opacity: 1; transform: translateY(0px);">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>

            <div class="item">
                <img class="fadein" src="/Sneakers_files/feature9.jpg" alt="" style="opacity: 1; transform: translateY(0px);">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2 class="sec-title">CONTACT</h2>
        <div class="content">
            <div class="contact-info">
                <p>テキストテキストテキスト</p>
                <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
                <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
            </div>

            <div class="contact-form">
                @if(session('message'))
                    <div class="bg-blue-300 w-1/2 mx-auto p-2 mb-4 text-white">
                        {{ session('message' )}}
                    </div>
                @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <dl>
                        <dt><label for="name">Name:</label></dt>
                        <dd><input type="text" id="name" name="name"></dd>
                        <dt><label for="email">Mail:</label></dt>
                        <dd><input type="email" id="email" name="email"></dd>
                        <dt><label for="message">Message:</label></dt>
                        <dd><textarea id="message" name="message"></textarea></dd>
                    </dl>
                    <div class="button"><input type="submit" value="SEND"></div>
                </form>
            </div>
        </div>
    </section>
</main>

<footer id="footer">
    <p>© Sneakers</p>
</footer>
<script>
    $('form').submit(function () {
        var scroll_top = $(window).scrollTop();  //送信時の位置情報を取得
        $('input.st', this).prop('value', scroll_top);  //隠しフィールドに位置情報を設定
    });

    window.onload = function () {
        //ロード時に隠しフィールドから取得した値で位置をスクロール
        $(window).scrollTop(<?php echo @$_REQUEST['scroll_top']; ?>);
    }


</script>

</body>
</html>
