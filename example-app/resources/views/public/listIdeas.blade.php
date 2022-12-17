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
        <a class="my-navbar-brand" href="/webSiteView/list">Idea App</a>
        <a class="my-navbar-brand" href="/">ログイン</a>
    </nav>
</header>
<main>
    <div class="container">
        <div class="row">
            <div class="col col-md-4">
                <nav class="panel panel-default">
                    <div class="panel-heading">アイデア</div>
                    <div class="list-group">
                        @foreach($ideas as $idea)
                            <a href={{ route('webSiteView.detail', ['id' => $idea->id]) }} class="list-group-item">
                                {{ $idea->idea_name }}
                            </a>
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
