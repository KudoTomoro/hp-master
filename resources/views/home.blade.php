@extends('layouts.app')

@section('title', '株式会社テックテク - techtec, Inc.')

@section('content')
<div class='l-main'>
    <section>
        <h1 class='l-main__title'>We are the</br>Decentralized </br>Future.</h1>
        <div class='l-main__eyecatch'>
            <div class='l-main_eyecatch_slider'>
                <img class="l-main__eyecatch_img" alt="techtecのアイキャッチ オフィス画像"
                    src="{{ asset('images/img_top_eyecatch_01.jpg') }}" />
                <img class="l-main__eyecatch_img" alt="techtecのアイキャッチ オフィス画像"
                    src="{{ asset('images/img_top_eyecatch_02.jpg') }}" />
                <img class="l-main__eyecatch_img" alt="techtecのアイキャッチ"
                    src="{{ asset('images/img_top_eyecatch_03.jpg') }}" />
            </div>
        </div>
    </section>
</div>
<div class='l-mission'>
    <section>
        <div class='l-body__title'>
            <h2 class='l-body__heading l-body__heading_arrange'>
                MISSION
                <span class='l-body__subhead l-body__subhead_arrange'>
                    企業理念
                </span>
            </h2>
        </div>
        <h3 class='l-mission__title'>個人の成長をサポートし、誰もが自由に生きていける世界を作る。</h3>
        <p class='l-mission__desc'>我々は、誰もが自由に生きていける世界を作るべく、あらゆる選択肢を生み出し、提供し続けていきます。</p>
        <div class='l-mission__button c-line__button'>
            <a class="c-line__button__text" href="/recruit">私たちについて</a>
        </div>
    </section>
</div>
<div class='l-service'>
    <section>
        <div class='l-body__title l-body__title_bg'>
            <h2 class='l-body__heading l-body__heading_bg'>SERVICE</h2>
            <p class='l-body__subhead l-body__subhead_bg'>できること</p>
        </div>
        <div class='l-service__content l-body__content'>
            <div class='l-service__content__body'>
                <div class='l-service__content__image'>
                    <img alt="メディアサポート事業"
                        src="{{ asset('images/ic_service_media_sm.png') }}" />
                </div>
                <h3 class='l-service__content__title'>メディアサポート事業</h3>
                <p class='l-service__content__explain'>メディアの立ち上げからグロースまで幅広くサポートします。</p>
                <div class='l-service__content__button c-line__button'>
                    <a class="c-line__button__text" href="/service/media_consulting">詳しく見る</a>
                </div>
            </div>
            <div class='l-service__content__body'>
                <div class='l-service__content__image'>
                    <img alt="人材育成事業"
                        src="{{ asset('images/ic_service_pr_sm.png') }}" />
                </div>
                <h3 class='l-service__content__title'>人材育成事業</h3>
                <p class='l-service__content__explain'>ブロックチェーン人材の育成、英語・中国語などの次世代人材の育成をサポートします。</p>
                <div class='l-service__content__button c-line__button'>
                    <a class="c-line__button__text" href="/service/human_resource_development">詳しく見る</a>
                </div>
            </div>
            <div class='l-service__content__body'>
                <div class='l-service__content__image'>
                    <img alt="翻訳・採用事業"
                        src="{{ asset('images/ic_service_trans_sm.png') }}" />
                </div>
                <h3 class='l-service__content__title'>翻訳・採用事業</h3>
                <p class='l-service__content__explain'>仮想通貨・ブロックチェーンに限らず事業のグローバル対応をサポートします。</p>
                <div class='l-service__content__button c-line__button'>
                    <a class="c-line__button__text" href="/service/translation">詳しく見る</a>
                </div>
            </div>
        </div>
    </section>
</div>
<div class='l-product'>
    <section class='inner'>
        <div class='l-body__title'>
            <h2 class='l-body__heading'>PRODUCT</h2>
            <p class='l-body__subhead'>創っているもの</p>
        </div>
        <div class='l-product__content l-body__content'>
            <div class='l-product__content__cell l-product__content__pol__cell'>
                <a href='https://pol.techtec.world' target='_blank'>
                    <div class='l-product__content__pol__logo'>
                        <img alt="PoL(ポル) “学習するほどトークンがもらえる”全く新しい形の総合学習プラットフォーム"
                            src="{{ asset('images/logo_pol.png') }}" />
                    </div>
                    <div class='l-product__content__text l-product__content__pol__text'>
                        <h3 class='l-product__content__title'>PoL</h3>
                        <p class='l-product__content__subtitle'>(ポル)</p>
                        <p class='l-product__content__desc'>“学習するほどトークンがもらえる”<br />全く新しい形の総合学習プラットフォーム</p>
                        <div class='l-product__content__button p-product__content__link'>
                            <a class="c-line__button__text" target="_blank"
                                href="https://pol.techtec.world">サービスサイトへ</a>
                        </div>
                        <!-- <div class='c-line__button c-line__button_blank  p-product__content__link'>
                            <a class="c-line__button__text" target="_blank"
                                href="https://pol.techtec.world">サービスサイトへ</a>
                        </div> -->
                    </div>
                    <div class='l-product__content__pol__image'>
                        <img alt="PoL(ポル)のデバイス"
                            src="{{ asset('images/img_pol_device.png') }}" />
                    </div>
                    <div class='l-product__content__bg l-product__content__pol__bg'>
                        <img alt="PoL(ポル)の背景"
                            src="{{ asset('images/bg_pol.png') }}" />
                    </div>
                </a>
            </div>

            <!-- <div class='l-product__content__cell l-product__content__tech__cell'>
                <a href='https://www.techtec.site/' target='_blank'>
                    <div class='l-product__content__text l-product__content__tech__text'>
                        <h3 class='l-product__content__title l-product__content__tech__title'>techtec</h3>
                        <p class='l-product__content__subtitle l-product__content__tech__subtitle'>(テックテク)</p>
                        <p class='l-product__content__desc l-product__content__tech__desc'>
                            仮想通貨・ブロックチェーンに特化した<br />記事発注サービス</p>
                        <div
                            class='l-product__content__button l-product__content__tech__button p-product__content__link p-product__content__link__white'>
                            <a class="c-line__button__text" target="_blank"
                                href="https://www.techtec.site/">サービスサイトへ</a>
                        </div>
                    </div>
                    <div class='l-product__content__tech__image'>
                        <img alt="techtec(テックテク)のデバイス"
                            src="{{ asset('images/img_techtec_device.png') }}" />
                    </div>
                    <div class='l-product__content__bg'>
                        <img alt="techtec(テックテク)の背景"
                            src="{{ asset('images/bg_techtec.png') }}" />
                    </div>
                </a>
            </div> -->
            <div class='l-product__content__cell l-product__content__english__cell'>
                <a href='https://hi-blockchain.world/' target='_blank'>
                    <div class='l-product__content__english__image'>
                        <img alt="Hi-Blockchain(ハイブロックチェーン)のデバイス"
                            src="{{ asset('images/product_english.png') }}" />
                    </div>
                    <div class='l-product__content__text l-product__content__english__text'>
                        <h3 class='l-product__content__title'>PoL 英語コース</h3>
                        <!-- <p class='l-product__content__subtitle'>(ハイ ブロックチェーン)</p> -->
                        <p class='l-product__content__desc l-product__content__english__desc'>ブロックチェーンに特化したwebメディア</p>
                        <div class='l-product__content__button l-product__content__english__button p-product__content__link'>
                            <a class="c-line__button__text" target="_blank"
                                href="https://hi-blockchain.world/">サービスサイトへ</a>
                        </div>
                    </div>
                </a>
            </div>

            <div class='l-product__content__cell l-product__content__writer__cell'>
                <a href='https://hi-blockchain.world/' target='_blank'>
                    <div class='l-product__content__writer__image'>
                        <img alt="Hi-Blockchain(ハイブロックチェーン)のデバイス"
                            src="{{ asset('images/product_writer.png') }}" />
                    </div>
                    <div class='l-product__content__text l-product__content__writer__text'>
                        <h3 class='l-product__content__title'>PoL ライターコース</h3>
                        <!-- <p class='l-product__content__subtitle'>(ハイ ブロックチェーン)</p> -->
                        <p class='l-product__content__desc l-product__content__writer__desc'>ブロックチェーンに特化したwebメディア</p>
                        <div class='l-product__content__button l-product__content__writer__button p-product__content__link'>
                            <a class="c-line__button__text" target="_blank"
                                href="https://hi-blockchain.world/">サービスサイトへ</a>
                        </div>
                    </div>
                </a>
            </div>



            <div class='l-product__content__cell l-product__content__hb__cell'>
                <a href='https://hi-blockchain.world/' target='_blank'>
                    <div class='l-product__content__hb__image'>
                        <img alt="Hi-Blockchain(ハイブロックチェーン)のデバイス"
                            src="{{ asset('images/img_hb.png') }}" />
                    </div>
                    <div class='l-product__content__text l-product__content__hb__text'>
                        <h3 class='l-product__content__title'>Hi Blockchain</h3>
                        <p class='l-product__content__subtitle'>(ハイ ブロックチェーン)</p>
                        <p class='l-product__content__desc l-product__content__hb__desc'>ブロックチェーンに特化したwebメディア</p>
                        <div class='l-product__content__button l-product__content__hb__button p-product__content__link'>
                            <a class="c-line__button__text" target="_blank"
                                href="https://hi-blockchain.world/">サービスサイトへ</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>


    </section>
</div>


<div class='l-community'>
    <section class='inner'>
        <div class='l-body__title l-body__title_arrange'>
            <h2 class='l-body__heading l-body__heading_arrange'>
                COMMUNITY
                <span class='l-body__subhead l-body__subhead_arrange'>
                    欠かせないもの
                </span>
            </h2>
        </div>
        <div class='l-community__content l-body__content'>
            <p class='l-community__content__desc'>
                Decentralizedな世界では、コミュニティの力が必要不可欠です。<br />techtecは、既存事業へのブロックチェーン活用を研究するコミュニティ「techain(テックチェーン)」を運営しています。
            </p>
            <div class='l-community__content__pics'>
                <div class='l-community__content__cell'>
                    <img alt="ミートアップの様子" class="l-community__content__image"
                        src="{{ asset('images/img_cm_01.png') }}" />
                    <div class='l-community__content__label'>ミートアップの様子</div>
                </div>
                <div class='l-community__content__cell'>
                    <img alt="海外でミートアップ" class="l-community__content__image"
                        src="{{ asset('images/img_cm_02.png') }}" />
                    <div class='l-community__content__label'>海外でミートアップ</div>
                </div>
                <div class='l-community__content__cell'>
                    <img alt="海外プロジェクトを招待" class="l-community__content__image"
                        src="{{ asset('images/img_cm_03.png') }}" />
                    <div class='l-community__content__label'>海外プロジェクトを招待</div>
                </div>
                <div class='l-community__content__cell'>
                    <img alt="オフィスのイベントスペース" class="l-community__content__image"
                        src="{{ asset('images/img_cm_04.png') }}" />
                    <div class='l-community__content__label'>オフィスのイベントスペース</div>
                </div>
            </div>
            <div class='l-community__content__button c-line__button c-line__button_blank'>
                <a class="c-line__button__text" target="_blank" href="https://techtec.connpass.com/">コミュニティに参加する</a>
            </div>
        </div>
    </section>
</div>

<div class='l-partner'>
    <section class='inner'>
        <div class='l-body__title l-body__title_arrange'>
            <h2 class='l-body__heading l-body__heading_arrange'>
                PARTNER
                <span class='l-body__subhead l-body__subhead_arrange'>
                    パートナー
                </span>
            </h2>
        </div>
        <div class='l-partner__content l-body__content'>
            <p class='l-partner__content__desc'>
                techtecチームはグローバルを前提に事業を展開しています。世界の優秀なパートナーたちと切磋琢磨する環境に身を置くことで、圧倒的な成長機会を創り出します。
            </p>

        </div>
        <div class='l-partner__icon l-body__content'>
          <img alt="brave" class="l-exposure__content_img"
          src="{{ asset('images/partner_brave.png') }}" />
          <img alt="maker" class="l-exposure__content_img"
          src="{{ asset('images/partner_maker.png') }}" />
          <img alt="primas" class="l-exposure__content_img"
          src="{{ asset('images/partner_primas.png') }}" />
        </div>

        <!-- @media screen and (max-width: 768px) -->
        <!-- <div class='l-partner__icon_middle l-body__content'> -->
          <ul class='l-partner__icon_middle l-body__content'>
            <li><div class='l-partner__icon__box'><img alt="brave" class="l-partner__icon_middle_img"
            src="{{ asset('images/partner_brave.png') }}" /></div></li>
            <li><div class='l-partner__icon__box'><img alt="maker" class="l-partner__icon_middle_img"
            src="{{ asset('images/partner_maker.png') }}" /></div></li>
            <li><div class='l-partner__icon__box'><img alt="primas" class="l-partner__icon_middle_img"
            src="{{ asset('images/partner_primas.png') }}" /></div></li>
            <li><div class='l-partner__icon__box'><p class='l-partner__content__desc_text'>techtecは常に新しいパートナーをお待ちしております。</p>
              <div class='l-partner__button c-line__button'>
                  <a class="l-partner__button_text c-line__button__text" href="/contact">お問い合わせ</a>
              </div>
            </div></li>
          </ul>


        <!-- </div> -->
    </section>
</div>





<div class='l-exposure'>
    <section>
        <div class='l-body__title l-body__title_bg'>
            <h2 class='l-body__heading l-body__heading_bg'>EXPOSURE</h2>
            <p class='l-body__subhead l-body__subhead_bg'>メディア露出</p>
        </div>
        <div class='l-exposure__content l-body__content'>
            <img alt="AMP" class="l-exposure__content_img"
            src="{{ asset('images/media_amp.png') }}" />
            <img alt="cnet" class="l-exposure__content_img"
                src="{{ asset('images/media_cnet.png') }}" />
            <img alt="ascii" class="l-exposure__content_img"
                src="{{ asset('images/media_ascii.png') }}" />
            <img alt="REUTERS" class="l-exposure__content_img"
                src="{{ asset('images/img_exposure_03.png') }}" />
            <img alt="bridge" class="l-exposure__content_img"
                src="{{ asset('images/media_bridge.png') }}" />
            <img alt="mynavi" class="l-exposure__content_img"
                src="{{ asset('images/media_mynavi.png') }}" />
            <img alt="edtechzine" class="l-exposure__content_img"
                src="{{ asset('images/media_edtechzine.png') }}" />
            <img alt="money-gendai" class="l-exposure__content_img"
                src="{{ asset('images/media_money-gendai.png') }}" />
            <img alt="edtechmedia" class="l-exposure__content_img"
                src="{{ asset('images/media_edtechmedia.png') }}" />
            <img alt="gendai" class="l-exposure__content_img"
                src="{{ asset('images/media_gendai.png') }}" />
            <img alt="coinchoice" class="l-exposure__content_img"
                src="{{ asset('images/media_coinchoice.png') }}" />
            <img alt="bitdays" class="l-exposure__content_img"
                src="{{ asset('images/media_bitdays.png') }}" />
            <img alt="jwave" class="l-exposure__content_img"
                src="{{ asset('images/media_j-wave.png') }}" />
        </div>
    </section>
</div>


<div class='l-exposureMiddle'>
    <section>
        <div class='l-body__title l-body__title_bg'>
            <h2 class='l-body__heading l-body__heading_bg'>EXPOSURE</h2>
            <p class='l-body__subhead l-body__subhead_bg'>メディア露出</p>
        </div>

        <ul class='l-exposureMiddle_media l-body__content'>
          <li><div class="l-exposureMiddle_media_box"><img alt="AMP" class="l-exposureMiddle_media_box_img"
          src="{{ asset('images/media_amp.png') }}" /></div></li>
          <li><div class="l-exposureMiddle_media_box"><img alt="cnet" class="l-exposureMiddle_media_box_img"
          src="{{ asset('images/media_cnet.png') }}" /></div></li>
          <li><div class="l-exposureMiddle_media_box"><img alt="ascii" class="l-exposureMiddle_media_box_img"
          src="{{ asset('images/media_ascii.png') }}" /></div></li>
          <li><div class="l-exposureMiddle_media_box"><img alt="REUTERS" class="l-exposureMiddle_media_box_img"
          src="{{ asset('images/img_exposure_03.png') }}" /></div></li>
          <li><div class="l-exposureMiddle_media_box"><img alt="bridge" class="l-exposureMiddle_media_box_img"
          src="{{ asset('images/media_bridge.png') }}" /></div></li>
          <li><div class="l-exposureMiddle_media_box"><img alt="mynavi" class="l-exposureMiddle_media_box_img"
          src="{{ asset('images/media_mynavi.png') }}" /></div></li>
          <li><div class="l-exposureMiddle_media_box"><img alt="edtechzine" class="l-exposureMiddle_media_box_img"
          src="{{ asset('images/media_edtechzine.png') }}" /></div></li>
          <li><div class="l-exposureMiddle_media_box"><img alt="money-gendai" class="l-exposureMiddle_media_box_img"
          src="{{ asset('images/media_money-gendai.png') }}" /></div></li>
          <li><div class="l-exposureMiddle_media_box"><img alt="edtechmedia" class="l-exposureMiddle_media_box_img"
          src="{{ asset('images/media_edtechmedia.png') }}" /></div></li>
          <li><div class="l-exposureMiddle_media_box"><img alt="gendai" class="l-exposureMiddle_media_box_img"
          src="{{ asset('images/media_gendai.png') }}" /></div></li>
          <li><div class="l-exposureMiddle_media_box"><img alt="coinchoice" class="l-exposureMiddle_media_box_img"
          src="{{ asset('images/media_coinchoice.png') }}" /></div></li>
          <li><div class="l-exposureMiddle_media_box"><img alt="bitdays" class="l-exposureMiddle_media_box_img"
          src="{{ asset('images/media_bitdays.png') }}" /></div></li>
          <li><div class="l-exposureMiddle_media_box"><img alt="jwave" class="l-exposureMiddle_media_box_img"
          src="{{ asset('images/media_j-wave.png') }}" /></div></li>
        </ul>

    </section>
</div>


<div class='l-recruit'>
    <h2 class='l-recruit__title'>私たちと一緒に働きませんか？</h2>
    <p class='l-recruit__desc'>
        techtecは常に新しい仲間を募集しています。<br />「メンバーの圧倒的な成長」「プロダクトドリブン」「フラットな組織」<br />上記に少しでも共感してもらえる人は、<br />ぜひ一度オフィスに遊びに来てください！<br /><br />共に、"Decentralizedな未来"を創りませんか？
    </p>
    <div class='l-recruit__button c-line__button c-line__button_white'>
        <a class="c-line__button__text c-line__button_white__text" href="/recruit">採用情報</a>
    </div>
</div>
<div class='l-contact'>
    <section class='inner'>
        <div class='l-body__title'>
            <h2 class='l-body__heading'>CONTACT</h2>
            <p class='l-body__subhead'>一緒にできること</p>
        </div>
        <div class='l-contact__content'>
            株式会社techtecに関するお問い合わせや採用、</br>その他パートナーシップや取材に関するご相談は以下よりお願いいたします。
            <div class='l-contact__button c-line__button'>
                <a class="c-line__button__text" href="/contact">お問い合わせ</a>
            </div>
        </div>
    </section>
</div>
@endsection
