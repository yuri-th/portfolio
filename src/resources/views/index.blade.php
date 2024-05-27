<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta property='og:type' content='website'>
    <meta property='og:title' content='Mituki Yuki ポートフォリオ'>
    <meta property='og:url' content='URLが入る'>
    <meta property='og:description' content='Mituki Yukiのポートフォリオサイトです。'>
    <meta property="og:image" content="img/ogp.png">
    <meta name="description" content="Mituki Yukiのポートフォリオサイトです" />
    <title>Mituki Yuki ポートフォリオ</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="https://kit.fontawesome.com/dbdf1c424a.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel=”canonical” href=”URLが入る” />
</head>

<body>
    <div class="wrapper">

        <!-- header -->
        <header class="header ">
            <div class="container">
                <h1 class="header-logo">
                    <a href=".">Mituki Yuki</a>
                </h1>
                <nav class="gnav">
                    <ul class="gnav-list">
                        <li class="gnav-item"><a href="#works">WORKS</a></li>
                        <li class="gnav-item"><a href="#skill">SKILL</a></li>
                        <li class="gnav-item"><a href="#about">ABOUT</a></li>
                        <li class="gnav-item"><a href="#contact">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- /header -->

        <main class="content">

            <!-- mv -->
            <div class="mv">
                <div class="mv-container">
                    <p class="mv-title">Mituki Yuki</p>
                    <p class="mv-subtitle">PORTFOLIO</p>
                    <p class="mv-text">
                        ユーザーとお客様が心から満足できる<br class="sp-only">アプリ、サイトをお作りいたします。<br>
                    </p>
                </div>
            </div>
            <!-- /mv -->

            <!-- works -->
            <section class="works section" id="works">
                <div class="container">
                    <h2 class="title">WORKS</h2>
                    <div class="works-list">
                        <a class="works-item" href="works-template.html">
                            <div class="works-img"><img src="img/works-sample-thumb.jpg" alt="" /></div>
                            <p class="works-name">作品名が入る</p>
                            <p class="works-info">Design / Coding(Responsive)</p>
                        </a>
                        <a class="works-item" href="works-template.html">
                            <div class="works-img"><img src="img/works-dummy-thumb.jpg" alt="" /></div>
                            <p class="works-name">作品名が入る</p>
                            <p class="works-info">Design / Coding(Responsive) / WordPress</p>
                        </a>
                        <a class="works-item" href="works-template.html">
                            <div class="works-img"><img src="img/works-dummy-thumb.jpg" alt="" /></div>
                            <p class="works-name">作品名が入る</p>
                            <p class="works-info">Design</p>
                        </a>
                        <a class="works-item" href="works-template.html">
                            <div class="works-img"><img src="img/works-dummy-thumb.jpg" alt="" /></div>
                            <p class="works-name">作品名が入る</p>
                            <p class="works-info">Banner Design</p>
                        </a>
                        <a class="works-item" href="works-template.html">
                            <div class="works-img"><img src="img/works-dummy-thumb.jpg" alt="" /></div>
                            <p class="works-name">作品名が入る</p>
                            <p class="works-info">Banner Design</p>
                        </a>
                    </div>
                </div>
            </section>
            <!-- /works -->

            <!-- skill -->
            <section class="skill section" id="skill">
                <div class="container">
                    <h2 class="title">SKILL</h2>
                    <div class="skill-list">
                        <div class="language-list">
                            <h2>Language</h2>
                            <table class="language-table">
                                <tr>
                                    <th><i class="fab fa-php"></i></th>
                                    <td>PHP</td>
                                    <th><i class="fab fa-html5"></i></th>
                                    <td>HTML</td>
                                    <th><i class="fab fa-css3-alt"></i></th>
                                    <td>CSS</td>
                                    <th><i class="fab fa-js-square"></i></th>
                                    <td>Java Script</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /skill -->

            <!-- about -->
            <section class="about section" id="about">
                <div class="container">
                    <h2 class="title">ABOUT</h2>
                    <div class="profile">
                        <p class="profile-img">
                            <img src="{{asset('images/mitukiphoto.jpg') }}" alt="myphoto">
                        </p>
                        <div class="profile-body">
                            <p>
                                初めまして。佑木美月です。私は2012年に個人事業をスタートし、2014年に法人化し、10年以上、インターネットを主に活用して、集客やコンテンツの作成を行ってきました。
                                そして2021年に3冊目の本を出版するのに伴い、命式作成アプリを開発しました。これが私が初めて開発したアプリとなりました。その後、プログラミングの面白さにはまってしまい、本格的に学ぶために２つのスクールに通い、WEB制作やアプリの開発を学びました。
                            </p>
                            <p>
                                個人、法人、業種を問わず、ITは自分の行っているビジネスの可能性を拡大してくれます。そして単に作るだけでなく、今まで私が行ってきたビジネスコンサルティングも組み合わせ、お客様とユーザーの双方が、満足できるかたちをご提案させていただきます。
                            </p>
                            <p>
                                こんなものを作りたいんだけど・・・というようなちょっとした質問でも随時無料カウンセリングで受付しています（何回でもOKです！）ので、お気軽にお問い合わせください。
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /about -->

            <!-- contact -->
            <section class="contact section" id="contact">
                <div class="container">
                    <h2 class="title">CONTACT</h2>
                    <p class="lead">
                        お問い合わせは、<br class="sp-only">メールで受付しております。
                    </p>
                    <div class="contact-list">
                        <span class="contact-item"><a href="mailto:info@mituki-y.com">お問い合わせ</a></span>
                    </div>
                </div>
            </section>
            <!-- /contact -->
            <div class="page-top" id="js-page-top">
                <span class="material-icons-outlined">expand_less</span>
            </div>
        </main>

        <!-- footer -->
        <footer class="footer">
            <div class="copyright">&copy;Mituki Yuki</div>
        </footer>
        <!-- /footer -->

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type='text/javascript' src="js/script.js"></script>
</body>

</html>