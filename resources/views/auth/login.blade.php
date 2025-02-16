<x-logout-layout>

  <!-- 適切なURLを入力してください -->
  {!! Form::open(['url' => '〇〇']) !!}
<div id=loginContainer>
  <p class=welcome>AtlasSNSへようこそ</p>
  <div class=login_form>
    <div class=email_form>
     {{ Form::label('email') }}
     {{ Form::text('email',null,['class' => 'input']) }}
    </div>
    <div class=password_form>
      {{ Form::label('password') }}
      {{ Form::password('password',['class' => 'input']) }}
    </div>
    <div class=login_btn>
       {{ Form::submit('ログイン') }}
    </div>
  </div>
  <p><a href="register">新規ユーザーの方はこちら</a></p>

  {!! Form::close() !!}
</div>
</x-logout-layout>
