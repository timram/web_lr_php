@extends('layouts.site_template')

@section('content')
<header>
    <h1 class="title">Авторизироваться:</h1>
</header>
<div class="my-data-container">
    <div class="authorization-form-wrapper">
        <form class="account-form" method="POST" action="{{ route('login') }}">
            @csrf
            @include(
                'includes.forms.items-set', [ 'items' => [
                    [
                        'name' => 'email',
                        'type' => 'email',
                        'label' => 'Email',
                        'placeholder' => 'example@mail.com',
                        'required' => true
                    ],
                    [
                        'name' => 'password',
                        'type' => 'password',
                        'label' => 'Пароль',
                        'required' => true
                    ]
                ]]
            )
            <div class="input-container">
                <input type="submit" value="Войти">
                <a href="{{ route('register') }}">Зарегистрироваться</a>
            </div>
        </form>
    </div>
</div>
@endsection