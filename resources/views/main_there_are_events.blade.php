@extends('layout')

@section('main-content')
     <div class="begin">
            <h1>Регистрация семинаров в Омске:</h1>
     </div>
     <div class="about_us">
        <h2>О нас:</h2>
        <p>Наш центр "SpaceRent" - идеальное место для проведения лекций, семинаров и мастер-классов. Мы обеспечиваем современные помещения с необходимым оборудованием для комфортного обучения и работы. Приглашаем лекторов различных областей. Присоединяйтесь к нам для открытия новых знаний и вдохновения!</p>
     </div>
     <div class="ourroom">
  <h2>Наши помещения:</h2>
    <div class="room1">
      <p style="margin-left: 45px; margin-bottom: -5px;">Помещение "Креатив"</p>
      <p style="margin-left: 235px; margin-bottom: -5px;">60кв</p>
      <p style="margin-left: 155px; margin-bottom: -5px;">9 ноутбуков</p>
      <p style="margin-left: 35px; margin-bottom: -5px;">удобная брифинг-зона</p>
      <button style="border: 2px solid black; width: 196px; height: 48px; font-family: 'Inter',sans-serif; font-weight: 800;font-size: 24px;color:white; background-color: black; border-radius: 40px;margin-top: 30px; margin-left: 90px;">19000р</button>
    </div>
    <div class="room2">
      <p style="margin-left: -35px; margin-bottom: -5px;">Помещение "Инновация Лаб"</p>
      <p style="margin-left: 235px; margin-bottom: -5px;">60кв</p>
      <p style="margin-left: 155px; margin-bottom: -5px;">9 ноутбуков</p>
      <p style="margin-left: 35px; margin-bottom: -5px;">удобная брифинг-зона</p>
      <button style="border: 2px solid black; width: 196px; height: 48px; font-family: 'Inter',sans-serif; font-weight: 800;font-size: 24px;color:white; background-color: black; border-radius: 40px;margin-top: 30px; margin-left: 90px;">23000р</button>
    </div>
    <div class="room3">
      <p style="margin-left: 0px; margin-bottom: -5px;">Помещение "Идеи Сфера"</p>
      <p style="margin-left: 235px; margin-bottom: -5px;">60кв</p>
      <p style="margin-left: 155px; margin-bottom: -5px;">9 ноутбуков</p>
      <p style="margin-left: 35px; margin-bottom: -5px;">удобная брифинг-зона</p>
      <button style="border: 2px solid black; width: 196px; height: 48px; font-family: 'Inter',sans-serif; font-weight: 800;font-size: 24px;color:white; background-color: black; border-radius: 40px;margin-top: 30px; margin-left: 90px;">20000р</button>
    </div>
    <div class="room4">
      <p style="margin-left: -25px; margin-bottom: -5px;">Помещение "Гений Комната"</p>
      <p style="margin-left: 235px; margin-bottom: -5px;">60кв</p>
      <p style="margin-left: 155px; margin-bottom: -5px;">9 ноутбуков</p>
      <p style="margin-left: 35px; margin-bottom: -5px;">удобная брифинг-зона</p>
      <button style="border: 2px solid black; width: 196px; height: 48px; font-family: 'Inter',sans-serif; font-weight: 800;font-size: 24px;color:white; background-color: black; border-radius: 40px;margin-top: 30px; margin-left: 90px;">15000р</button>
    </div>
    <div class="room5">
      <p style="margin-left: -70px; margin-bottom: -5px;">Помещение "Креативный Оазис"</p>
      <p style="margin-left: 235px; margin-bottom: -5px;">60кв</p>
      <p style="margin-left: 155px; margin-bottom: -5px;">9 ноутбуков</p>
      <p style="margin-left: 35px; margin-bottom: -5px;">удобная брифинг-зона</p>
      <button style="border: 2px solid black; width: 196px; height: 48px; font-family: 'Inter',sans-serif; font-weight: 800;font-size: 24px;color:white; background-color: black; border-radius: 40px;margin-top: 30px; margin-left: 90px;">10000р</button>
    </div>
    <div class="room6">
      <p style="margin-left: -55px; margin-bottom: -5px;">Помещение "Вдохновение Зал"</p>
      <p style="margin-left: 235px; margin-bottom: -5px;">60кв</p>
      <p style="margin-left: 155px; margin-bottom: -5px;">9 ноутбуков</p>
      <p style="margin-left: 35px; margin-bottom: -5px;">удобная брифинг-зона</p>
      <button style="border: 2px solid black; width: 196px; height: 48px; font-family: 'Inter',sans-serif; font-weight: 800;font-size: 24px;color:white; background-color: black; border-radius: 40px;margin-top: 30px; margin-left: 90px;">17700р</button>
    </div>

</div>
<div class="events_not_empty">
  <h2 class="our_events">Наши мероприятия:</h2>
  @foreach ($events as $event)
    <p>{{ $event->title }}</p>
  @endforeach

</div>
@endsection

@section('title')Главная@endsection

