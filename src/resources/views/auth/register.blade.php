@extends('layouts.app_admin')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<link rel="stylesheet" href="{{ asset('css/app_admin.css') }}">
@endsection

@section('content')
<div class="register-form__content">
    <div class="register-form__heading">
        <h2 class="register">Register</h2>
    </div>
    <form class="form" action="/register" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-inner">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="name" placeholder="例：山田 太郎" value="{{ old('name') }}" />
                    </div>
                    <div class="form__error">
<<<<<<< HEAD
                        <p>
                            @error('name')
                            {{ $message }}
                            @enderror
                        </p>
=======
                        @error('name')
                        <p>{{ $message }}</p>
                        @enderror
>>>>>>> 422c3cbb5c92c0be3dba1cb76f7f8ac03347b880
                    </div>
                </div>
            </div>
            <div class="form__group-inner">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="email" placeholder="例：test@example.com" value="{{ old('email') }}" />
                    </div>
                    <div class="form__error">
<<<<<<< HEAD
                        <p>
                            @error('email')
                            {{ $message }}
                            @enderror
                        </p>
=======
                        @error('email')
                        <p>{{ $message }}</p>
                        @enderror
>>>>>>> 422c3cbb5c92c0be3dba1cb76f7f8ac03347b880
                    </div>
                </div>
            </div>
            <div class="form__group-inner">
                <div class="form__group-title">
                    <span class="form__label--item">パスワード</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="password" name="password" placeholder="例：coachtech1106" />
                    </div>
                    <div class="form__error">
<<<<<<< HEAD
                        <p>
                            @error('password')
                            {{ $message }}
                            @enderror
                        </p>
=======
                        @error('password')
                        <p>{{ $message }}</p>
                        @enderror
>>>>>>> 422c3cbb5c92c0be3dba1cb76f7f8ac03347b880
                    </div>
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">登録</button>
        </div>
    </form>
</div>
@endsection