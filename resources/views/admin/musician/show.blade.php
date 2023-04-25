@extends('layouts.admin')
@section('title', $post->name )

@section('content')
    <div class="container">
        <div class="row">
            <h2>{{$post->name}}</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="/admin/musician" role="button" class="btn btn-primary">一覧へ戻る</a>
                <a href="/admin/musician/{{$post->id}}/edit" role="button" class="btn btn-primary">編集</a>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        
                        <tbody>
                            <tr>
                                <td width="10%">名前</td>
                                <td width="20%">{{$post->name}}</td>
                            </tr>
                            <tr>
                                <td width="10%">生年月日</td>
                                <td width="20%">{{$post->birthday}}</td>
                            </tr>
                            <tr>
                                <td width="10%">死亡日</td>
                                <td width="20%">{{$post->deathday}}</td>
                            </tr>
                            <tr>
                                <td width="10%">国籍</td>
                                <td width="20%">{{$post->nationality}}</td>
                            </tr>
                            <tr>
                                <td width="10%">詳細</td>
                                <td width="20%">{{$post->detail}}</td>
                            </tr>
                            <tr>
                                <td width="10%">URL1</td>
                                <td width="20%">
                                     <iframe width="560" height="315" src="{{$post->url1}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">URL2</td>
                                <td width="20%">
                                    <iframe width="560" height="315" src="{{$post->url2}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">URL3</td>
                                <td width="20%">
                                <iframe width="560" height="315" src="{{$post->url3}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                                <td width="10%">URL4</td>
                                <td width="20%">
                                <iframe width="560" height="315" src="{{$post->url4}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>    
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">URL5</td>
                                <td width="20%">
                                    <iframe width="560" height="315" src="{{$post->url4}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection