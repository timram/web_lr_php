@extends('layouts.site_template')

@section('content')
<section>
  huiii
    <div class="my-data-container">
        <div class="my-data text">
            <p>Я студент...</p>
            <div class="data-description">
                Кафедры информационных систем Севастопольского Государственного Университета
            </div>
        </div>
        <div class="my-data picture">
            <img alt="sutdent" src="img/student.jpg">
        </div>
    </div>
    <div class="my-data-container">
        <div class="my-data picture">
            <img alt="music" src="img/music.jpg">
        </div>
        <div class="my-data text">
            <p>...Слушаю музыку</p>
            <div class="data-description">
                Всякую крутяцкую музыку слушаю
            </div>
        </div>
    </div>
    <div class="my-data-container">
        <div class="my-data text">
            <p>И еще много чего делаю...</p>
        </div>
        <div class="my-data picture">
            <img alt="trash" src="img/trash.jpg">
        </div>
    </div>
</section>
@endsection