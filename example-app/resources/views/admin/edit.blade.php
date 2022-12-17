@extends('layout')
{{--//aaa--}}
{{--//bbb--}}
@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">アイデアを編集する</div>
                    <div class="panel-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $message)
                                    <p>{{ $message }}</p>
                                @endforeach
                            </div>
                        @endif
                        <form
                            action="{{ route('ideas.edit', ['idea_id' => $idea->id]) }}"
                            method="POST" enctype="multipart/form-data"
                        >
                            @csrf
                            <div class="form-group">
                                <label for="idea_name">アイデア名</label>
                                <input type="text" class="form-control" name="idea_name" id="idea_name"
                                       value="{{ old('idea_name') ?? $idea->idea_name }}" />
                            </div>
                            <div class="form-group">
                                <label for="idea_url">グーグルドライブのURL</label>
                                <input type="text" class="form-control" name="idea_url" id="idea_url"
                                       value="{{ old('idea_url') ?? $idea->idea_url }}" />
                            </div>
                            <div class="form-group">
                                <img src="{{ Storage::url($idea->idea_picture_1)}}" width="100px">

                                <label for="idea_picture_1">画像1枚目</label>
                                <input type="file" class="form-control" name="idea_picture_1" id="idea_picture_1"
                                       value="{{ old('idea_picture_1') ?? $idea->idea_picture_1 }}" />
                            </div>
                            <div class="form-group">
                                <img src="{{ Storage::url($idea->idea_picture_2)}}" width="100px">

                                <label for="idea_picture_2">画像2枚目</label>
                                <input type="file" class="form-control" name="idea_picture_2" id="idea_picture_2"
                                       value="{{ old('idea_picture_2') ?? $idea->idea_picture_2 }}" />
                            </div>
                            <div class="form-group">
                                <img src="{{ Storage::url($idea->idea_picture_3)}}" width="100px">

                                <label for="idea_picture_3">画像3枚目</label>
                                <input type="file" class="form-control" name="idea_picture_3" id="idea_picture_3"
                                       value="{{ old('idea_picture_3') ?? $idea->idea_picture_3 }}" />
                            </div>
                            <div class="form-group">
                                <label for="category">カテゴリ</label>
                                <input type="text" class="form-control" name="category" id="category"
                                       value="{{ old('category') ?? $idea->category }}" />
                            </div>
                            <div class="form-group">
                                <label for="file_type">ファイルタイプ</label>
                                <input type="text" class="form-control" name="file_type" id="file_type"
                                       value="{{ old('file_type') ?? $idea->file_type }}" />
                            </div>
                            <div class="form-group">
                                <label for="explain">説明</label>
                                <input type="text" class="form-control" name="explain" id="explain"
                                       value="{{ old('explain') ?? $idea->explain }}" />
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="status">状態</label>--}}
{{--                                <select name="status" id="status" class="form-control">--}}
{{--                                    @foreach(\App\Task::STATUS as $key => $val)--}}
{{--                                        <option--}}
{{--                                            value="{{ $key }}"--}}
{{--                                            {{ $key == old('status', $task->status) ? 'selected' : '' }}--}}
{{--                                        >--}}
{{--                                            {{ $val['label'] }}--}}
{{--                                        </option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="due_date">期限</label>--}}
{{--                                <input type="text" class="form-control" name="due_date" id="due_date"--}}
{{--                                       value="{{ old('due_date') ?? $task->formatted_due_date }}" />--}}
{{--                            </div>--}}
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">送信</button>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
    <script>
        flatpickr(document.getElementById('due_date'), {
            locale: 'ja',
            dateFormat: "Y/m/d",
            minDate: new Date()
        });
    </script>
@endsection
