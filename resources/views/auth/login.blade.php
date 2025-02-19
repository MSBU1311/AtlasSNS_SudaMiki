<x-logout-layout>

  <!-- 適切なURLを入力してください -->
  {!! Form::open(['url' => '/posts/index']) !!}

  <p>AtlasSNSへようこそ</p>
  <div class=email>
    {{ Form::label('メールアドレス') }}
  </div>

  <div class=email_form>
    {{ Form::text('email',null,['class' => 'input']) }}
  </div>

  <div class=password>
    {{ Form::label('パスワード') }}
  </div>

  <div class=password_form>
    {{ Form::password('password',['class' => 'input']) }}
  </div>

  <div class=btn>
    {{ Form::submit('ログイン') }}
  </div>

  <p class=register_btn><a href="/register">新規ユーザーの方はこちら</a></p>

  {!! Form::close() !!}

</x-logout-layout>
