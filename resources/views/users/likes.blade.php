@extends('app')

@section('title', $user->name . 'のいいねした記事')

@section('content')
  @include('nav')
  <div class="container">
    <!-- ユーザー情報 -->
    @include('users.user')

    <!-- タブ -->
    @include('users.tabs', ['hasArticles' => false, 'hasLikes' => true])

    <!-- 記事一覧 -->
    @foreach($articles as $article)
      @include('articles.card')
    @endforeach
  </div>
@endsection
