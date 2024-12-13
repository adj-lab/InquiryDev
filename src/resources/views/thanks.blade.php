@extends('layouts.app')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
@endsection
@section('content')

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" >
        お問い合わせありがとうございました
      </a>
    </div>
  </header>

  <main>
    <div class="inquiry-form__content">
      <div class="inquiry-form__heading">
        <h2></h2>
      </div>
      <form class="form" action="/thanks" method="post">
        @csrf
        <!--Homeボタン-->
        <div class="form__button_push">
          <span><button class="form__button-submit" type="submit">HOME</button></span>
        </div>
      </form>
    </div>
  </main>
</body>

</html>