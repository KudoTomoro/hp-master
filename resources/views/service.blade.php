@extends('layouts.app')

@section('title', 'SERVICE - 株式会社techtec')

@section('content')
<div class='i-service'>
    <section>
        <div class='c-body__title'>
            <h2 class='c-body__heading'>SERVICE</h2>
            <p class='c-body__subhead'>できること</p>
        </div>
        <div class='i-service__content'>
            <div class='i-service__content__cell'>
                <div class='i-service__content__image'>
                    <img alt="メディアサポート事業"
                        src="{{ asset('images/ic_service_media_sm.png') }}" />
                </div>
                <h3 class='i-service__content__title'>メディアサポート事業</h3>
                <p class='i-service__content__explain'>メディアの立ち上げからグロースまで</br>幅広くサポートします。</p>
                <p class='i-service__content__item'>- 仮想通貨・ブロックチェーン業界の著名人の紹介<br />- 社内ライターの研修<br />- 業界分析レポートの作成<br />-
                    海外速報の共有<br />- 記事広告の斡旋</p>
                <div class='i-service__content__button c-line__button'>
                    <a class="c-line__button__text" href="/service/media_consulting">詳しく見る</a>
                </div>
            </div>
            <div class='i-service__content__cell'>
                <div class='i-service__content__image'>
                    <img alt="人材育成事業"
                        src="{{ asset('images/ic_service_pr_sm.png') }}" />
                </div>
                <h3 class='i-service__content__title'>人材育成事業</h3>
                <p class='i-service__content__explain'>ブロックチェーン人材の育成、英語・中国語などの次世代人材の育成をサポートします。</p>
                <p class='i-service__content__item'>- ブロックチェーン人材の育成<br />- 英語・中国語研修<br />- 海外リサーチツアー<br />- 規制についてレクチャー
                </p>
                <div class='i-service__content__button c-line__button'>
                    <a class="c-line__button__text" href="/service/human_resource_development">詳しく見る</a>
                </div>
            </div>
            <div class='i-service__content__cell'>
                <div class='i-service__content__image'>
                    <img alt="翻訳・採用事業"
                        src="{{ asset('images/ic_service_trans_sm.png') }}" />
                </div>
                <h3 class='i-service__content__title'>翻訳・採用事業</h3>
                <p class='i-service__content__explain'>仮想通貨・ブロックチェーンに限らず</br>事業のグローバル対応をサポートします。</p>
                <p class='i-service__content__item'>- ホームページの多言語対応<br />- オウンドメディアの多言語対応<br />- イベントなどへの通訳派遣<br />-
                    ビジネス英会話研修<br />- 外国人採用</p>
                <div class='i-service__content__button c-line__button'>
                    <a class="c-line__button__text" href="/service/translation">詳しく見る</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
