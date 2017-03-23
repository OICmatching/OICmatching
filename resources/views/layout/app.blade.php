<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width,initial-scale=1">  
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="{{{asset('/assets/css/common.css')}}}" media="screen" title="no title" charset="utf-8">-->          
    <script src="http://cdn.ckeditor.com/4.5.6/full-all/ckeditor.js"></script>
    <link rel="stylesheet" href="{{{asset('/css/app.css')}}}" media="screen" title="no title" charset="utf-8">
    @yield('head')
  </head>
  <body>
    @include('components.header')
    <main>      
      @yield('content')      
    </main>
    <footer id="footer">
      <div class="footer-content">
        <div class="link-group">
          <div class="link-group-heading">イベント</div>
          <ul class="link-items">
            <li><a href="{{ route('event-entry') }}">イベント登録</a></li>
            <li><a href="{{ route('event-search') }}">イベント検索</a></li>
            <li><a href="{{ route('user-event-control') }}">イベント管理</a></li>
          </ul>
        </div>
        <div class="link-group">
          <div class="link-group-heading">ユーザー</div>
          <ul class="link-items">
            <li><a href="{{ route('user-mypage-recommend') }}">マイページ</a></li>
            <li><a href="{{ route('user-setting-profile') }}">プロフィール設定</a></li>
            <li><a href="{{ route('user-setting-tag') }}">お気に入りタグ設定</a></li>
            <li><a href="{{ route('user-setting-notice') }}">メール通知設定</a></li>
            <li><a href="{{ route('logout') }}">ログアウト</a></li>
          </ul>
        </div>
        <div class="link-group">
          <div class="link-group-heading">OICリンク</div>
          <ul class="link-items">
            <li><a href="http://oic.ac.jp/">公式ホームページ</a></li>          
          </ul>
        </div>
      </div>
      <div class="footer-bottom"></div>
    </footer>
    <script src="/js/bundle.js" charset="utf-8"></script>
    
  </body>
</html>
