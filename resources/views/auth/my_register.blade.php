@extends('layouts.site_template')

@section('content')
<header>
    <h1 class="title">Регистрация</h1>
</header>
<div class="my-data-container">
    <div class="authorization-form-wrapper">
        <form class="account-form" method="POST" action="{{ route('register') }}">
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
                        'name' => 'name',
                        'type' => 'text',
                        'label' => 'ФИО',
                        'placeholder' => 'Иванов Иван',
                        'required' => true
                    ],
                    [
                        'name' => 'password',
                        'type' => 'password',
                        'label' => 'Пароль',
                        'required' => true
                    ],
                    [
                        'name' => 'password_confirmation',
                        'type' => 'password',
                        'label' => 'Повторите пароль',
                        'required' => true
                    ]
                ]]
            )
            <div class="input-container">
                <input type="submit" value="Зарегистрироваться">
            </div>
        </form>
    </div>
</div>
@endsection
