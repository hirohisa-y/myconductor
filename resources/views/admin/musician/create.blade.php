{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '指揮者の新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>指揮者新規作成</h2>
                <form action="{{ route('admin.musician.create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">演奏家の名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">生年月日</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="birthday" value="{{ old('birthday') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">死亡日</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="deathday" value="{{ old('deathday') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">国籍</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nationality" value="{{ old('nationality') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">詳細</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="detail" rows="20">{{ old('detail') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                       <label class="col-md-2">URL1</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="url1" value="{{ old('url1') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label class="col-md-2">URL2</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="url2" value="{{ old('url2') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label class="col-md-2">URL3</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="url3" value="{{ old('url3') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label class="col-md-2">URL4</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="url4" value="{{ old('url4') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                       <label class="col-md-2">URL5</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="url5" value="{{ old('url5') }}">
                        </div>
                    </div>
                    @csrf
                    <input style="margin-left: 500px;" type="submit" class="btn btn-primary" value="登録">
                </form>
            </div>
        </div>
    </div>
@endsection