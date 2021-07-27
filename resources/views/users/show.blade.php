@extends('app')

@section('title', $user->name)

@section('content')
  @include('nav')
  <div class="container">
    <!-- ユーザー情報 -->
    @include('users.user')

    <!-- タブ -->
    @include('users.tabs', ['hasArticles' => true, 'hasLikes' => false])

    <!-- 記事一覧 -->
    @foreach($articles as $article)
      @include('articles.card')
    @endforeach
  </div>
@endsection
