@extends('layouts.app')

@section('title', 'COMPANY - 株式会社techtec')

@section('content')
    <div class='c-company'>
        <section>
            <div class='c-body__title'>
                <h2 class='c-body__heading'>COMPANY</h2>
                <p class='c-body__subhead'>会社情報</p>
            </div>
            <div class='c-company__info'>
                <table class='c-company__table'>
                    <tr>
                        <td class='c-company__item'>会社名</td>
                        <td class='c-company__content'>株式会社techtec (techtec, Inc.)</td>
                    </tr>
                    <tr>
                        <td class='c-company__item'>代表取締役</td>
                        <td class='c-company__content'>田上智裕 (Tomohiro Tagami)</td>
                    </tr>
                    <tr>
                        <td class='c-company__item'>資本金</td>
                        <td class='c-company__content'>17,994,600円(資本準備金含む)</td>
                    </tr>
                    <tr>
                        <td class='c-company__item'>設立</td>
                        <td class='c-company__content'>2018年1月</td>
                    </tr>
                    <tr>
                        <td class='c-company__item'>顧問弁護士</td>
                        <td class='c-company__content'>AZX Professionals Group</td>
                    </tr>
                    <tr>
                        <td class='c-company__item'>顧問税理士</td>
                        <td class='c-company__content'>NEXPERT ADVISORY GROUP</td>
                    </tr>
                    <tr>
                        <td class='c-company__item'>取引先金融機関</td>
                        <td class='c-company__content'>三井住友銀行</td>
                    </tr>
                    <tr>
                        <td class='c-company__item'>
                            取引先
                            <span>(※一部抜粋、順不同)</span>
                        </td>
                        <td class='c-company__content'>株式会社リクルート </br>株式会社The Nodist </br>株式会社Aerial Partners</td>
                    </tr>
                </table>
                <div class='c-office__info'>
                    <div class='l-body__title l-body__title_arrange'>
                        <h2 class='l-body__heading l-body__heading_arrange'>
                            OFFICE
                            <span class='l-body__subhead l-body__subhead_arrange'>
                                オフィス
                            </span>
                        </h2>
                    </div>
                    <div class='c-office__text'>
                        〒102-0083</br>東京都千代田区麹町1-4-4 ZENITAKA ANNEX 2F
                        <a href='https://goo.gl/maps/b5pfjfLidko' target='[:_blank]'>Google mapで見る</a>
                        </br>半蔵門線「半蔵門駅」徒歩3分 | 有楽町線「麹町駅」徒歩10分
                    </div>
                    <div class='c-office__image'>
                        <img alt="techtecオフィス画像1"
                            src="{{ asset('images/img_office_01.png') }}" />
                        <img alt="techtecオフィス画像2"
                            src="{{ asset('images/img_office_02.png') }}" />
                        <img alt="techtecオフィス画像3"
                            src="{{ asset('images/img_office_03.png') }}" />
                        <img alt="techtecオフィス画像4"
                            src="{{ asset('images/img_office_04.png') }}" />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class='i-partner'>
        <div class='l-body__title'>
            <h2 class='l-body__heading'>PARTNER</h2>
            <span class='l-body__subhead'>パートナー</span>
        </div>
        <div class='i-partner__logo'>
            <img alt="PRIMAS"
                src="{{ asset('images/img_logo_partner_01.png') }}" />
            <img alt="withB"
                src="{{ asset('images/img_logo_partner_02.png') }}" />
            <img alt="LIFULL HUB"
                src="{{ asset('images/img_logo_partner_03.png') }}" />
        </div>
        <div class='i-partner__content'>
            <h3 class='i-partner__content__title'>メディアサポート事業 | プロジェクトPR事業 | 翻訳事業</h3>
            <p class='i-partner__content__desc'>
                techtecでは、上記の事業で協業できるパートナーを随時募集しています。<br />ミートアップの共催やクライアントの紹介など、パートナーシップの形は様々です。<br />まずは下記よりお気軽にお問い合わせください。
            </p>
            <div class='i-partner__content__button c-line__button'>
                <a class="c-line__button__text" href="/contact">お問い合わせ</a>
            </div>
        </div>
    </div>
@endsection
