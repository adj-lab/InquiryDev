@extends('layouts.app')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection
@section('content')

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="inquiry-form__content">
      <div class="inquiry-form__heading">
        <h2>Confirm</h2>
      </div>
      <form class="form" action="/thanks" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
            <span>{{ $contact['first_name'] }}</span>
            <span>{{ $contact['last_name'] }}</span>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
            <span>{{ $contact['gender'] }}</span>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
            <span>{{ $contact['email'] }}</span>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
            <span>{{ $contact['tel_first'] }}</span><span> - </span>
            <span>{{ $contact['tel_second'] }}</span><span> - </span>
            <span>{{ $contact['tel_third'] }}</span>            
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
            <span>{{ $contact['address'] }}</span>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
            <span>{{ $contact['building'] }}</span>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
            <span>{{ $contact['inquiry_type'] }}</span>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span>{{ $contact['detail'] }}</span>
          </div>
        </div>
        <div class="form__button">
          <!--送信ボタン-->
          <button class="form__button-submit" type="submit">送信</button>
          <!--修正ボタン-->
          <button class="form__button-submit" type="submit" name="back">修正</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>

