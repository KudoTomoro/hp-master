@extends('layouts.app')

@section('content')
<section class='e-body'>
    <section class='inner'>
        <h2 class='e-body__title'>Is this Orphanblock...?</h2>
        <p class='e-body__desc'>該当するページが存在しません</p>
        <div class='e-body__image'>
            <img src="{{ asset('images/img_error.png') }}"
                alt="Img error" />
        </div>
    </section>
</section>
@endsection
