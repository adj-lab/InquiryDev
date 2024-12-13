@extends('layouts.app')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
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
        <h2>Contact</h2>
      </div>
      <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="first_name" placeholder="例：山田" />
              <div class="form__error">
                <!--バリデーション実行結果-->
                @error('first_name')
                {{ $message }}
                @enderror
            </div>
              <input type="text" name="last_name" placeholder="例：太郎" />
              <div class="form__error">
                <!--バリデーション実行結果-->
                @error('last_name')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
</div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
                    <input type="radio" name="gender" value="male" checked />男性
                    <input type="radio" name="gender" value="female" />女性
                    <input type="radio" name="gender" value="other" />その他
            </div>
            <div class="form__error">
                <!--バリデーション実行結果-->
                @error('gender')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" />
            </div>
            <div class="form__error">
                <!--バリデーション実行結果-->
                @error('email')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
                <input type="tel" name="tel_first" placeholder="080" />
                <span>-</span>
            </div>
            <div class="form__error">
            <!--バリデーション実行結果-->
                @error('tel_first')
                {{ $message }}
                @enderror
              </div>

            <div class="form__input--text">
                <input type="tel" name="tel_second" placeholder="1234" />
                <span>-</span>
            </div>
              <div class="form__error">
              <!--バリデーション実行結果-->
                @error('tel_second')
                {{ $message }}
                @enderror
              </div>
            <div class="form__input--text">
                <input type="tel" name="tel_third" placeholder="5678" />
              </div>
              <div class="form__error">
              <!--バリデーション実行結果-->
                @error('tel_third')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="address" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" />
            </div>
            <div class="form__error">
              <!--バリデーション実行結果-->
                @error('address')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="building" name="building" placeholder="例：千駄ヶ谷マンション101" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--select">
                <select name="inquiry_type" vale="" />
                <!--別途、入力値をDBから取得できるよう更新する -->
                <option value="1">選択してください</option>
                </select>
            </div>
            <div class="form__error">
                <!--バリデーション実行結果-->
                @error('inquiry_type')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="資料をいただきたいです"></textarea>
            </div>
          <div class="form__error">
          <!--バリデーション実行結果-->
                @error('detail')
                {{ $message }}
                @enderror
              </div>
          </div>
            </div>
            <div class="form__button">
              <button class="form__button-submit" type="submit" >確認画面</button>
            </div>
      </form>
    </div>
  </main>
</body>

</html>
