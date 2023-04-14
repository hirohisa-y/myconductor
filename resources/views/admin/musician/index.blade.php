@extends('layouts.admin')
@section('title', '登録済み指揮者の一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>指揮者一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('admin.musician.add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $musician)
                                <tr>
                                    <th>{{ $musician->id }}</th>
                                    <td><a href="/admin/musician/{{ $musician->id }}">{{ $musician->name }}</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection