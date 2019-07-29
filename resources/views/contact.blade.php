@extends('layouts.app')

@section('title', 'CONTACT - 株式会社techtec')

@section('content')
<div class='c-body'>
    <div class='c-contact'>
        <section>
            <div class='c-body__title c-contact__title'>
                <h2 class='c-body__heading'>CONTACT</h2>
                <span class='c-body__subhead'>一緒にできること</span>
            </div>
            <p class='c-contact__text'>株式会社techtecに関するお問い合わせや採用、</br>その他パートナーシップや取材に関するご相談は以下よりお願いいたします。</p>
            <div class='c-contact__form'>
                <contact-form-component></contact-form-component>
            </div>
        </section>
    </div>
</div>
@endsection
