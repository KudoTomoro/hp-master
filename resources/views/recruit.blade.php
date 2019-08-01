@extends('layouts.app')

@section('title', '人材育成事業 - 株式会社techtec')

@section('content')
<div class='i-recruit'>
    <section>
        <div class='c-body__title c-body__title recruit_title'>
            <h2 class='c-body__heading c-body__heading_bg'>VISION</h2>
            <p class='c-body__subhead c-body__subhead_bg'>目指す世界</p>
        </div>
        <div class='i-recruit__vision'>
            <h3 class='i-recruit__vision__title'>好きな事を、好きな時に、好きな場所で、好きな人と、好きなやり方で。</h3>
            <p class='i-recruit__vision__text'>
                全てを自分の意思のままに、自由に決めることができる世界を作れたら、どれ程の笑顔を見ることができるだろうか、どんなに幸せだろうか。そんな理想の世界を作りたい、きっと作れる、我々はそう信じています。
            </p>
        </div>
        <div class='i-recruit__value'>
            <div class='l-body__title i-recruit__value_title recruit__title_large'>
                <h2 class='l-body__heading l-body__heading_bg i-recruit__heading'>
                    VALUE
                    <span class='l-body__subhead l-body__subhead_bg i-recruit__subhead'>
                        価値観・行動指針
                    </span>
                </h2>
            </div>

            <!-- max-width:768px -->
            <div class='l-body__title i-recruit__value_title recruit_title_middle'>
                <h2 class='l-body__heading l-body__heading i-recruit__heading'>
                    VALUE
                    <span class='l-body__subhead l-body__subhead i-recruit__subhead'>
                        価値観・行動指針
                    </span>
                </h2>
            </div>
            <!-- ここまで -->

            <section>
              <div class='i-recruit__value__composes'>
                <div class='i-recruit__value__composes_list'>
                  <h3 class='i-recruit__value__composes_list_title'>"Challenge Growth"</h3>
                  <p class='i-recruit__value__composes_list_text'>どんなときも限界に挑み続けよう。貪欲に、大胆に、成長を第一に。</p>
                  <span class='i-recruit__value__composes_list_bg'>"CHALLENGE GROWTH”</span>
                </div>
                <div class='i-recruit__value__composes_list'>
                  <h3 class='i-recruit__value__composes_list_title'>"Think Simple"</h3>
                  <p class='i-recruit__value__composes_list_text'>何事もシンプルに考えよう。重要なことはただ一つ、選択と集中。</p>
                  <span class='i-recruit__value__composes_list_bg'>"THINK SIMPLE”</span>
                </div>
                <div class='i-recruit__value__composes_list'>
                  <h3 class='i-recruit__value__composes_list_title'>"Be Yourself"</h3>
                  <p class='i-recruit__value__composes_list_text'>自分自身を、まわりを、そして世界を明るくしよう。笑顔と素直がキーワード。</p>
                  <span class='i-recruit__value__composes_list_bg'>"BE YOURSELF”</span>
                </div>
                <div class="blank"></div>
              </div>
            </section>

        </div>

        <div class='i-recruit__technologystack'>
          <div class='l-body__title i-recruit_title'>
              <h2 class='l-body__heading i-recruit__heading'>TECHNOLOGY STACK</h2>
              <p class='l-body__subhead i-recruit__subhead'>テクノロジースタック</p>
          </div>

          <div class='i-recruit__technologystack__content'>

            <div class="i-recruit__technologystack__category development">
              <p class="i-recruit__technologystack__category_title">開発</p>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="sass"
                src="{{ asset('images/technologystack/sass.png') }}" />
                <p class="i-recruit__technologystack__item__name">Sass</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="vue"
                src="{{ asset('images/technologystack/vue.png') }}" />
                <p class="i-recruit__technologystack__item__name">Vue.js</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="laravel"
                src="{{ asset('images/technologystack/laravel.png') }}" />
                <p class="i-recruit__technologystack__item__name">Laravel</p>
              </div>
            </div>

            <div class="i-recruit__technologystack__category support">
              <p class="i-recruit__technologystack__category_title">開発支援</p>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="bulma"
                src="{{ asset('images/technologystack/bulma.png') }}" />
                <p class="i-recruit__technologystack__item__name">Bulma</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="gitbub"
                src="{{ asset('images/technologystack/github.png') }}" />
                <p class="i-recruit__technologystack__item__name">GitHub</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="laravel forge"
                src="{{ asset('images/technologystack/laravel forge.png') }}" />
                <p class="i-recruit__technologystack__item__name lf_pc">Laravel Forge</p>
                <p class="i-recruit__technologystack__item__name lf_sp">Laravel<br>Forge</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="circleci"
                src="{{ asset('images/technologystack/circleci.png') }}" />
                <p class="i-recruit__technologystack__item__name">Circleci</p>
              </div>

            </div>
            <div class="i-recruit__technologystack__category infra">
              <p class="i-recruit__technologystack__category_title">インフラ</p>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="redis"
                src="{{ asset('images/technologystack/redis.png') }}" />
                <p class="i-recruit__technologystack__item__name">Redis</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="mysql"
                src="{{ asset('images/technologystack/mysql.png') }}" />
                <p class="i-recruit__technologystack__item__name">My SQL</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="nginx"
                src="{{ asset('images/technologystack/nginx.png') }}" />
                <p class="i-recruit__technologystack__item__name">Nginx</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="route53"
                src="{{ asset('images/technologystack/amazon-route53.png') }}" />
                <p class="i-recruit__technologystack__item__name">Route53</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="ec2"
                src="{{ asset('images/technologystack/amazon-ec2.png') }}" />
                <p class="i-recruit__technologystack__item__name">EC2</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="rds"
                src="{{ asset('images/technologystack/amazon-rds.png') }}" />
                <p class="i-recruit__technologystack__item__name">RDS</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="ses"
                src="{{ asset('images/technologystack/amazon-ses.png') }}" />
                <p class="i-recruit__technologystack__item__name">SES</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="s3"
                src="{{ asset('images/technologystack/amazon-s3.png') }}" />
                <p class="i-recruit__technologystack__item__name">S3</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="cloudwatch"
                src="{{ asset('images/technologystack/amazon-cloudwatch.png') }}" />
                <p class="i-recruit__technologystack__item__name cloudwatch_pc">Cloud Watch</p>
                <p class="i-recruit__technologystack__item__name cloudwatch_sp">Cloud<br>Watch</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="lambda"
                src="{{ asset('images/technologystack/amazon-lambda.png') }}" />
                <p class="i-recruit__technologystack__item__name">Lambda</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="elb"
                src="{{ asset('images/technologystack/amazon-elb.png') }}" />
                <p class="i-recruit__technologystack__item__name">ELB</p>
              </div>
            </div>

            <div class="i-recruit__technologystack__category business_design">
              <p class="i-recruit__technologystack__category_title">ビジネス・デザイン</p>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="google drive"
                src="{{ asset('images/technologystack/google drive.png') }}" />
                <p class="i-recruit__technologystack__item__name gd_pc">Google Drive</p>
                <p class="i-recruit__technologystack__item__name gd_sp">Google<br>Drive</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="slack"
                src="{{ asset('images/technologystack/slakc.png') }}" />
                <p class="i-recruit__technologystack__item__name">Slack</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="trello"
                src="{{ asset('images/technologystack/trello.png') }}" />
                <p class="i-recruit__technologystack__item__name">Trello</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="cacoo"
                src="{{ asset('images/technologystack/cacoo.png') }}" />
                <p class="i-recruit__technologystack__item__name">Cacoo</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="sketch"
                src="{{ asset('images/technologystack/sketch.png') }}" />
                <p class="i-recruit__technologystack__item__name">Sketch</p>
              </div>
              <div class="i-recruit__technologystack__item">
                <img class="i-recruit__technologystack__item__logo" alt="zeplin"
                src="{{ asset('images/technologystack/zeplin.png') }}" />
                <p class="i-recruit__technologystack__item__name">Zeplin</p>
              </div>
            </div>




          </div>
        </div>


        <div class='i-recruit__team'>
            <div class='l-body__title i-recruit_title'>
                <h2 class='l-body__heading i-recruit__heading'>TEAM</h2>
                <p class='l-body__subhead i-recruit__subhead'>チームメンバー</p>
            </div>
            <div class='i-recruit__team__content'>
                <div class='i-recruit__team__list' data-id='1'>
                    <img class="i-recruit__team__thumb" alt="Tomohiro Tagami | CEO / Product Manager"
                        src="{{ asset('images/member_tomohiro_tagami.jpg') }}" />
                    <h3 class='i-recruit__team__name'>Tomohiro Tagami</h3>
                    <p class='i-recruit__team__role'>CEO / Product Manager</p>
                </div>
                <div class='i-recruit__team__list' data-id='2'>
                    <img class="i-recruit__team__thumb" alt="Ryosuke Hashimoto | Engineer"
                        src="{{ asset('images/member_ryosuke_hashimoto.png') }}" />
                    <h3 class='i-recruit__team__name'>Ryosuke Hashimoto</h3>
                    <p class='i-recruit__team__role'>Engineer</p>
                </div>
                <div class='i-recruit__team__list' data-id='3'>
                    <img class="i-recruit__team__thumb" alt="Ayaka Ei | Engineer"
                        src="{{ asset('images/member_ayaka_ei.png') }}" />
                    <h3 class='i-recruit__team__name'>Ayaka Ei</h3>
                    <p class='i-recruit__team__role'>Engineer</p>
                </div>
                <div class='i-recruit__team__list' data-id='4'>
                    <img class="i-recruit__team__thumb" alt="Ryo Suzuki | Engineer"
                        src="{{ asset('images/member_ryo_suzuki.png') }}" />
                    <h3 class='i-recruit__team__name'>Ryo Suzuki</h3>
                    <p class='i-recruit__team__role'>Engineer</p>
                </div>
                <div class='i-recruit__team__list' data-id='5'>
                    <img class="i-recruit__team__thumb" alt="Masa Cho | Global Alliance Director"
                        src="{{ asset('images/member_masa_cho.png') }}" />
                    <h3 class='i-recruit__team__name'>Masa Cho</h3>
                    <p class='i-recruit__team__role'>Global Alliance Director</p>
                </div>
                <div class='i-recruit__team__list' data-id='6'>
                    <img class="i-recruit__team__thumb" alt="Maya Sause | English Conversation Specialist"
                        src="{{ asset('images/member_maya_sause.png') }}" />
                    <h3 class='i-recruit__team__name'>Maya Sause</h3>
                    <p class='i-recruit__team__role'>English Conversation <br/>Specialist</p>
                </div>
                <div class='i-recruit__team__list' data-id='7'>
                    <img class="i-recruit__team__thumb" alt="Shinji Yamasaki | Engineer"
                        src="{{ asset('images/member_shinji_yamasaki.png') }}" />
                    <h3 class='i-recruit__team__name'>Shinji Yamasaki</h3>
                    <p class='i-recruit__team__role'>Engineer</p>
                </div>
                <div class='i-recruit__team__list' data-id='8'>
                    <img class="i-recruit__team__thumb" alt="Yumi Fujisawa | Global Alliance Manager"
                        src="{{ asset('images/member_yumi_fujisawa.png') }}" />
                    <h3 class='i-recruit__team__name'>Yumi Fujisawa</h3>
                    <p class='i-recruit__team__role'>Global Alliance Manager</p>
                </div>
            </div>
        </div>
        <div class='i-recruit__message'>
            <div class='l-body__title i-recruit_title'>
                <h2 class='l-body__heading i-recruit__heading'>MESSAGE</h2>
                <p class='l-body__subhead i-recruit__subhead'>共にできること</p>
            </div>
            <div class='i-recruit__message__content'>

              <div class="i-recruit__message_img">
                <img alt="CEO 田上智裕" class="i-recruit__message_img_picture"
                src="{{ asset('images/team_tagami.jpg') }}" />
                <p class='i-recruit__message__name'>代表取締役 田上智裕</p>
              </div>

              <div class='i-recruit__message__content__text'>
                <h3 class='i-recruit__message__heading'>個人の時代はさらに加速する</h3>
                <p class='i-recruit__message__desc'>
                  「副業推奨」「フリーランス」「リモートワーク」...</br>今後ますます、個人を中心とした社会は加速していきます。</br></br>techtecには、「年功序列」「定時出勤、定時退社」...</br>こういった従来の固定観念に囚われた働き方に違和感を感じたメンバーが集まり、次世代の社会に最適なプロダクトの開発を進めています。</br></br>また、理想とする社会を実現すべく、ブロックチェーンを駆使した教育・人材事業に注力しています。</br>ブロックチェーンには「非中央集権」というテーマが存在し、それは従来の型にはまったあらゆるものを刷新し、より個人を重視した社会を作り上げるためのテクノロジーです。</br></br>人工知能やブロックチェーンなどのテクノロジーがリードする次世代社会においては、日本のような階層型組織や時間に縛られたワークスタイルは全く機能しなくなります。</br></br>techtecでは、「個人の成長をサポートし、誰もが自由に生きていける世界を作る。」というミッションの元、あらゆる人材が個人として活躍できる社会の実現を目指します。
                </p>
                <!-- <p class='i-recruit__message__name'>代表取締役 田上智裕</p> -->
              </div>
            </div>
        </div>
        <div class='i-recruit__position'>
            <div class='l-body__title i-recruit_title'>
                <h2 class='l-body__heading l-body__heading_arrange i-recruit__heading'>
                    RECRUIT
                    <span class='l-body__subhead l-body__subhead_arrange i-recruit__subhead'>
                        採用情報
                    </span>
                </h2>
            </div>
            <div class='i-recruit__position__content inner'>
                <div class='i-recruit__position__list'>
                    <h3 class='i-recruit__position__list__title'>エンジニアリング</h3>
                    <ul>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10347">webエンジニア</a>
                        </li>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10356">ブロックチェーンエンジニア</a>
                        </li>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10357">VPoE（CTO候補）</a>
                        </li>
                    </ul>
                </div>
                <div class='i-recruit__position__list'>
                    <h3 class='i-recruit__position__list__title'>プロダクト</h3>
                    <ul>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10359">UI/UXデザイナー</a>
                        </li>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10360">グロースハッカー（マーケター）</a>
                        </li>

                    </ul>
                </div>
                <div class='i-recruit__position__list'>
                    <h3 class='i-recruit__position__list__title'>コミュニティ</h3>
                    <ul>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10362">コミュニティマネージャー</a>
                        </li>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10363">イベントスタッフ</a>
                        </li>
                    </ul>
                </div>
                <div class='i-recruit__position__list'>
                    <h3 class='i-recruit__position__list__title'>経営企画</h3>
                    <ul>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10368">プロダクト広報</a>
                        </li>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10369">バックオフィス</a>
                        </li>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10384">セールスマネージャー</a>
                        </li>
                    </ul>
                </div>
                <div class='i-recruit__position__list'>
                    <h3 class='i-recruit__position__list__title'>グローバル</h3>
                    <ul>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10385">グローバル（英語）</a>
                        </li>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10386">グローバル（中国）</a>
                        </li>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/10372">語学学習コンサルタント</a>
                        </li>
                    </ul>
                </div>
                <div class='i-recruit__position__list'>
                    <h3 class='i-recruit__position__list__title'>コンテンツ</h3>
                    <ul>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/12715">ブロックチェーンリサーチャー</a>
                        </li>
                        <li class='i-recruit__position__list__item'>
                            <a class="i-recruit__position__list__link" target="_blank"
                                href="https://open.talentio.com/1/c/techtec/requisitions/detail/12716">ブロックチェーンライター</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
<div class='i-recruit__team__modal' data-id='1'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Tomohiro Tagami | CEO / Product Manager"
                src="{{ asset('images/tomohiro_tagami.jpg') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>CEO / Product Manager</p>
            <h3 class='i-recruit__team__modal_name'>Tomohiro Tagami</h3>
            <ul class='i-recruit__team__modal_sns'>
                <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://twitter.com/tomohiro_tagami' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="Tomohiro Tagami | Twitter"
                            src="{{ asset('images/ic_twitter.svg') }}" />
                    </a>
                </li>
                <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://www.linkedin.com/in/tomohiro-tagami/' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="Tomohiro Tagami | LinkedIn"
                            src="{{ asset('images/ic_linkedin.svg') }}" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            チームラボでアプリ開発を経験後、リクルートホールディングスでブロックチェーンのR&DやSUUMOのマーケティングを担当。未だ可視化されていない価値を正しく評価するために、techtecを創業。ブロックチェーンの未来を確信し、事業を推進する。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='2'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Ryosuke Hashimoto | Engineer"
                src="{{ asset('images/ryosuke_hashimoto.jpg') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Engineer</p>
            <h3 class='i-recruit__team__modal_name'>Ryosuke Hashimoto</h3>
            <ul class='i-recruit__team__modal_sns'>
                <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://twitter.com/pylori_Twi' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="Ryosuke Hashimoto | Twitter"
                            src="{{ asset('images/ic_twitter.svg') }}" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            C言語による組込系開発企業で、太陽光発電システムの電力モニタや産業用ロボットのFA、IP電話システムの開発を経験。変化と刺激を求めWebエンジニアへ転身後、モダンな技術の積極採用やメンバーの成長を重視する文化に惹かれ、techtecにジョイン。AWSを使用したインフラ設計からLaravelによるサーバサイド、Vue.jsによるフロントエンドまで幅広くこなす。Ethereumを使用したDApps開発にも着手。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='3'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Ayaka Ei | Engineer"
                src="{{ asset('images/ayaka_ei.jpg') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Engineer</p>
            <h3 class='i-recruit__team__modal_name'>Ayaka Ei</h3>
            <ul class='i-recruit__team__modal_sns'>
                <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://twitter.com/Eeedotweb' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="Ayaka Ei | Twitter"
                            src="{{ asset('images/ic_twitter.svg') }}" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            化学系の大学を卒業後、Web制作やマーケティング、サーバサイド開発まで幅広く業務を経験。Webの経験を積むにつれて、時間と場所に縛られない生き方に憧れを抱くようになりフリーランスとなる。PoLの開発着手に伴い、田上に誘われたことがきっかけでtechtecにジョイン。Hi
            Blockchainの開発全般も担当。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='4'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Ryo Suzuki | Engineer"
                src="{{ asset('images/ryo_suzuki.jpg') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Engineer</p>
            <h3 class='i-recruit__team__modal_name'>Ryo Suzuki</h3>
            <ul class='i-recruit__team__modal_sns'>
                <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://twitter.com/siosu_pu' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="Ryo Suzuki | Twitter"
                            src="{{ asset('images/ic_twitter.svg') }}" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            ”大学へ進学するよりも社会人になった方が実力が付く。”エンジニアとしての経験を積むために、高校卒業と同時に即エンジニアとして活躍。クローラ開発からインフラ・アーキテクチャ設計まで幅広くこなすサーバサイドエンジニア。最近は、サーバレスやコンテナ設計などに強い関心を持つ。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='5'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Masa Cho | Global Alliance Director"
                src="{{ asset('images/masa_cho.jpg') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Global Alliance Director</p>
            <h3 class='i-recruit__team__modal_name'>Masa Cho</h3>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            英・中・日の言葉をネイティブレベルで使いこなすトリリンガル。日本の大学でMBAの取得を目指す傍ら、techtecのグローバル担当としてジョイン。Blockchain
            Englishのネイティブスピーカーも務める。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='6'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Maya Sause | English Conversation Specialist"
                src="{{ asset('images/maya_sause.jpg') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>English Conversation Specialist</p>
            <h3 class='i-recruit__team__modal_name'>Maya Sause</h3>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            アメリカ出身の英会話スペシャリスト。フリーランスで数十名の日本人生徒に英語を教える 傍ら、Blockchain Englishのネイティブスピーカーも務める。田上も”Maya English”の生徒の一人。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='7'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Shinji Yamasaki | Engineer"
                src="{{ asset('images/shinji_yamasaki.jpg') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Engineer</p>
            <h3 class='i-recruit__team__modal_name'>Shinji Yamasaki</h3>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            サーバサイドからフロントエンドまでマルチにこなす万能型エンジニア。UXや機能性を意識した設計・企画提案に長け、techtecでは主にフロントエンドに従事している。
        </p>
    </div>
</div>
<div class='i-recruit__team__modal' data-id='8'>
    <div class='i-recruit__team__modal_close'>
        <img class="i-recruit__team__modal_close_img"
            src="{{ asset('images/ic_close_modal.png') }}"
            alt="Ic close modal" />
    </div>
    <div class='i-recruit__team__modal_info'>
        <div class='i-recruit__team__modal_thumb'>
            <img class="i-recruit__team__modal_thumb_img" alt="Yumi Fujisawa | Global Alliance Manager"
                src="{{ asset('images/yumi_fujisawa.jpg') }}" />
        </div>
        <div class='i-recruit__team__modal_text'>
            <p class='i-recruit__team__modal_role'>Global Alliance Manager</p>
            <h3 class='i-recruit__team__modal_name'>Yumi Fujisawa</h3>
            <ul class='i-recruit__team__modal_sns'>
                <li class='i-recruit__team__modal_sns_item'>
                    <a href='https://www.linkedin.com/in/yumi-fujisawa/' target='_blank'>
                        <img class="i-recruit__team__modal_sns_img" alt="Yumi Fujisawa | LinkedIn"
                            src="{{ asset('images/ic_linkedin.svg') }}" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class='i-recruit__team__modal_content'>
        <p>
            経営コンサルを手掛ける会社でベンチャー秘書を経験後、カンボジアに渡りマーケティングやコミュニティマネジメントに従事。グローバル志向とブロックチェーンの未来に惹かれ、
            ヨーロッパへ拠点を移すタイミングでtechtecへジョイン。techtecのグローバルアライアンスを強化すべく、ベルリンを拠点に稼働中。
        </p>
    </div>
</div>
@endsection
