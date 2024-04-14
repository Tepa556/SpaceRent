@extends('layout')

@section('title')Аккаунт@endsection
@section('main-content')
   @if(auth()->check())
    @php
         $avatar = \App\Models\Avatar::where('user_id', auth()->id())->first();
    @endphp
    <div class="my_data">
      <img src="{{asset($avatar['user_avatar'])}}" alt="avatar" class="avatar_account">
      <h1 class="user_name_account">{{ auth()->user()->name }}</h1>
      <img src="{{ asset('image/change_icon_account.png') }}" alt="изменить" class="change_icon_account" data-bs-toggle="modal" data-bs-target="#changeForm">

       <div class="rolle_account">
            <p>{{auth()->user()->role}}</p>
      </div>
      <h1 class="data">Мои данные:</h1>
      <div class="tel_data">
            <h3>Телофен:</h3>
            <p>{{auth()->user()->tel}}</p>
      </div>
      <div class="mail_data">
            <h3>Почта:</h3>
            <p>{{auth()->user()->email}}</p>
      </div>
      <div class="exit">
        <button data-bs-toggle="modal" data-bs-target="#exitForm">Выйти</button>
      </div>
    </div>
    <h1 class="my_evets_title">На что я записан:</h1>
    <div class="my_events">
        @if($reservation->user_id == auth()->user()->id)
            <h1>{{ $reservation->event_id }}</h1>
        @else 
             <h1>У вас нету записей</h1>
             <button>Записаться</button>
        @endif
    </div>
    <!-- Модальные окно -->
    <!-- Форма изменений -->
    <div class="modal fade" id="changeForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Изменить данные</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.update', ['id' => auth()->id()]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="name" class="form-label">Имя:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Телефон:</label>
                        <input type="text" class="form-control" id="phone" name="tel" value="{{ auth()->user()->tel }}">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Пароль:</label>
                        <input type="text" class="form-control" id="pass" name="pass" value="{{ auth()->user()->password }}">
                    </div>
                    <div class="mb-3">
                        <label for="avatar" class="form-label">Аватар:</label>
                        <input type="file" class="form-control" id="avatar" name="avatar">
                    </div>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Форма выхода -->
<div class="modal fade" id="exitForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Вы хотите выйти?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Да</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Нет</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Открыть модальное окно при клике на иконку
    document.addEventListener('DOMContentLoaded', function() {
        var myModal = new bootstrap.Modal(document.getElementById('changeForm'));
        var icon = document.querySelector('.change_icon_account');
        icon.addEventListener('click', function() {
            myModal.show();
        });
    });

    // Закрыть модальное окно при нажатии на кнопку "Закрыть"
    document.addEventListener('DOMContentLoaded', function() {
        var closeButton = document.querySelector('.btn-close');
        closeButton.addEventListener('click', function() {
            var myModal = new bootstrap.Modal(document.getElementById('changeForm'));
            myModal.hide();
        });
    });
</script>

   @endif

@endsection

@section('title')Главная@endsection

