---
layout: main
title: Nauka programowania w ciekawy sposób
---
<!-- Slider newsletter -->
<section class="slider-bg mb-0 mb-xl-5 mt-0 mt-xl-3 d-none" id="home">
    <div class="container pb-0 pb-xl-5 pt-0 pt-xl-5">
        <div class="row">
            <div class="col-md-6 order-md-1 space-md-up">
                <div class="video-wrap reveal fadeIn mt-4 mt-md-0">
                    <a href="https://www.youtube.com/watch?v=11ZRpXj54rU" class="video-play">
                        <img src="images/video-img.jpg" class="img-fluid" alt="#">
                        <i class="fa fa-play video-icon" aria-hidden="true"></i>
                        <div class="video-wrap-overlay"></div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 order-md-2">
                <div class="slider-title">
                    <br class="mt-5 text-muted reveal fadeInUp d-none d-md-block d-lg-none" data-wow-delay="1.2s"/>
                    <br class="mt-5 text-muted reveal fadeInUp d-none d-md-block d-lg-none" data-wow-delay="1.2s"/>
                    <br class="mt-5 text-muted reveal fadeInUp d-none d-md-block d-lg-none" data-wow-delay="1.2s"/>
                    <h1 class="h2 reveal fadeInUp text-sm-left text-center">Wreszcie trafiłeś <br
                            class="d-none d-lg-block d-xl-none"/><br class="d-block d-sm-none"/> na <br
                            class="d-none d-xl-block"/>Fajny Materiał</h1>
                    <p class="reveal fadeInUp" data-wow-delay="0.3s">
                        Chcesz poznać programowanie od wiele ciekawszej strony niż czarne okno terminala, czy
                        szara teoria programowania? Możesz uczyć się na Fajnych
                        Materiałach, zobacz <br class="d-none d-md-block d-xl-none"/> <a href="#features" style="color: #11aff1">jakie aplikacje </a>umiałbyś
                        wtedy zrobić 😎
                    </p>
                    <form action="phpOLD/subscribe.php" method="post" id="subscribeform">
                        <div class="input-group">
                            <input type="email" name="email"
                                   class="form-control" id="subscribe_email_input"
                                   placeholder="Twój email">
                            <span class="input-group-btn theme-form-btn">
                                <button class="btn" type="submit" id="js-subscribe-btn">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>SUBSKRYBUJ
                                </button>
                            </span>
                        </div>
                        <div id="js-subscribe-result" class="text-center"
                             data-success-msg="Almost finished. Please check your email and verify."
                             data-error-msg="Oops. Something went wrong."></div>
                    </form>
                </div>
                <p class="reveal fadeInUp opct opacity-90 text-sm-left text-center mt-md-1 mt-sm-1 d-none" data-wow-delay="3.2s">
                    Jeśli chcesz darmowego e-booka
                    <br class="d-xl-none d-lg-block d-md-block d-sm-block"/>
                    <a href="darmowy-ebook-swiat-jest-programistyczny.html" style="color: #d4d6da">"Świat jest
                        programistyczny",</a>
                    <a href="darmowy-ebook-swiat-jest-programistyczny.html" style="color: #11aff1"> kliknij
                        tutaj</a>
                    <!-- todo jeśli input uzupełniony to przenosi do landing z uzupełnionymi -->
                </p>
            </div>
        </div>
    </div>
</section>
<!--//End Header -->
<!--===================== Featured 1 =====================-->
<section class="space light-bg" id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-7 featured3-block">
                <div class="featured3-wrap">
                    <h2 class="reveal fadeInUp" data-wow-delay="0.3s">Naucz się Githuba</h2>
                </div>
            </div>
            <div class="col-md-5 order-1 featured3-block">
                <div class="featured3-wrap">
                    <h3 class="reveal fadeInUp mt-md-3" data-wow-delay="0.6s">Nie wymyślasz koła na nowo?</h3>
                    <p class="reveal fadeInUp" data-wow-delay="0.9s">Wszystko czego Ci potrzeba zostało już wymyślone,<br/>
                        wystarczy wiedzieć gdzie szukać, jak szukać, oraz... czego Ci potrzeba :)
                    </p>
                    <div class="featured-list mt-5">
                        <i class="pe-primary pe-7s-share reveal fadeInUp"
                           data-wow-delay="1.2s" aria-hidden="true"></i>
                        <div class="featured-list-title reveal fadeInUp" data-wow-delay="1.2s">
                            <h4>System kontroli wersji</h4>
                            <p>Kopie bezpieczeństwa na repozytorium</p>
                        </div>
                        <hr class="reveal fadeIn d-none d-xl-block" data-wow-delay="1.5s">
                        <i class="pe-primary pe-7s-note2 reveal fadeInUp d-none d-xl-inline-block" data-wow-delay="1.5s" aria-hidden="true"></i>
                        <div class="featured-list-title reveal fadeInUp d-none d-xl-inline-block" data-wow-delay="1.5s">
                            <h4>Organizacja zadań i pracy</h4>
                            <p>Jedno miejsce ze spisem rzeczy do zrobienia</p>
                        </div>
                        <hr class="reveal fadeIn" data-wow-delay="1.8s">
                        <i class="pe-primary pe-7s-plugin reveal fadeInUp" data-wow-delay="1.8s" aria-hidden="true"></i>
                        <div class="featured-list-title reveal fadeInUp" data-wow-delay="1.8s">
                            <h4>Wykorzystywanie gotowego kodu</h4>
                            <p>Dzielenie się kodem dla dobra ogółu</p>
                        </div>
                        <hr class="reveal fadeIn" data-wow-delay="1.8s">
                        <i class="pe-primary pe-7s-users reveal fadeInUp" data-wow-delay="1.8s" aria-hidden="true"></i>
                        <div class="featured-list-title reveal fadeInUp" data-wow-delay="1.8s">
                            <h4>Praca w zespole programistów</h4>
                            <p>Wysyłanie swoich rozwiązań zadań</p>
                        </div>
                        <hr class="reveal fadeIn" data-wow-delay="1.8s">
                        <i class="pe-primary pe-7s-shuffle reveal fadeInUp" data-wow-delay="1.8s" aria-hidden="true"></i>
                        <div class="featured-list-title reveal fadeInUp" data-wow-delay="1.8s">
                            <h4>Rozwiązania błędów i konfliktów</h4>
                            <p>Napsułeś w gicie? Spokojnie, naprawimy </p>
                        </div>
                    </div>
                    <div class=" d-block d-lg-none" style="text-align:center;padding-top: 21px;">
                        <a href="kurs-github-i-git-flow-praktyczne-wykorzystanie.html" class="btn btn-primary">Dowiedz się więcej <span class="pe-7s-angle-right-circle ml-3" style="font-size: large"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 order-0 featured3-block">
                <div class="video-wrap reveal fadeIn">
                    <a href="https://www.youtube.com/watch?v=11ZRpXj54rU" class="video-play">
                        <img src="images/video-img.jpg" class="img-fluid" alt="#">
                        <i class="fa fa-play video-icon" aria-hidden="true"></i>
                        <div class="video-wrap-overlay"></div>
                    </a>
                </div>
                <div class="pricing-wrap pricing-wrap-popular pricing-wrap-feature reveal fadeIn" data-wow-delay="0.3s">
                    <div class="reveal fadeIn" data-wow-delay="1.2s">
                        <h3>Github i Git</h3>
                        <p class="text-muted">Dla początkujących</p>
                        <p class="price"><span>PLN</span>67</p>
                        <ul>
                            <li>Pokażę skąd brać <strong>gotowy kod</strong></li>
                            <li>Zrobimy <strong>YouTube Music "bez reklam"</strong></li>
                            <li>Zobaczysz jak pracuje się w <strong>społeczności</strong></li>
                        </ul>
                        <a href="kurs-github-i-git-flow-praktyczne-wykorzystanie.html" class="btn btn-primary">Darmowe odcinki<span class="pe-7s-angle-right-circle ml-3" style="font-size: large"></span></a>
                        <div class="most-popular">
                            <p>PREMIERA</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--//End Featured 1 -->
<!--===================== Featured 2 =====================-->
<section class="space" style="display:none">
    <div class="container">
        <div class="row">
            <div class="col-md-5 order-2 featured3-block">
                <div class="featured3-wrap">
                    <i class="pe-primary pe-7s-diamond reveal fadeInUp"
                       aria-hidden="true"></i>
                    <h2 class="reveal fadeInUp" data-wow-delay="0.3s">Style that you’ll adore</h2>
                    <h3 class="reveal fadeInUp" data-wow-delay="0.6s">what you can ask more?</h3>
                    <p class="reveal fadeInUp" data-wow-delay="0.9s">You can create custom iOS and macOS apps for your
                        business using Swift, our open source programming language. Apps that have the power to
                        transform workflows.
                    </p>
                    <div class="featured-list mt-5">
                        <i class="pe-primary pe-7s-rocket reveal fadeInUp"
                           data-wow-delay="1.2s" aria-hidden="true"></i>
                        <div class="featured-list-title reveal fadeInUp" data-wow-delay="1.2s">
                            <h4>Fully functional template</h4>
                            <p>Apps that have the power to transform workflows.</p>
                        </div>
                        <hr class="reveal fadeIn" data-wow-delay="1.5s">
                        <i class="pe-primary pe-7s-medal reveal fadeInUp" data-wow-delay="1.5s" aria-hidden="true"></i>
                        <div class="featured-list-title reveal fadeInUp" data-wow-delay="1.5s">
                            <h4>Award winning design</h4>
                            <p>You can create custom iOS and macOS apps</p>
                        </div>
                        <hr class="reveal fadeIn" data-wow-delay="1.8s">
                        <i class="pe-primary pe-7s-edit reveal fadeInUp" data-wow-delay="1.8s" aria-hidden="true"></i>
                        <div class="featured-list-title reveal fadeInUp" data-wow-delay="1.8s">
                            <h4>Easy to customize</h4>
                            <p>Swift, our open source programming language.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 order-1 featured3-block">
                <div class="video-wrap reveal fadeIn">
                    <a href="https://www.youtube.com/watch?v=11ZRpXj54rU"
                       class="video-play">
                        <img src="images/video-img.jpg" class="img-fluid" alt="#">
                        <i class="fa fa-play video-icon" aria-hidden="true"></i>
                        <div class="video-wrap-overlay"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//End Featured 2 -->
<!--===================== Featured 3 =====================-->
<section class="space light-bg" style="display:none">
    <div class="container">
        <div class="row">
            <div class="col-md-5 featured3-block">
                <div class="featured3-wrap">
                    <i class="pe-primary pe-7s-diamond reveal fadeInUp"
                       aria-hidden="true"></i>
                    <h2 class="reveal fadeInUp" data-wow-delay="0.3s">Style that you’ll adore</h2>
                    <h3 class="reveal fadeInUp" data-wow-delay="0.6s">what you can ask more?</h3>
                    <p class="reveal fadeInUp" data-wow-delay="0.9s">You can create custom iOS and macOS apps for your
                        business using Swift, our open source programming language. Apps that have the power to
                        transform workflows.
                    </p>
                    <div class="featured-list mt-5">
                        <i class="pe-primary pe-7s-rocket reveal fadeInUp"
                           data-wow-delay="1.2s" aria-hidden="true"></i>
                        <div class="featured-list-title reveal fadeInUp" data-wow-delay="1.2s">
                            <h4>Fully functional template</h4>
                            <p>Apps that have the power to transform workflows.</p>
                        </div>
                        <hr class="reveal fadeIn" data-wow-delay="1.5s">
                        <i class="pe-primary pe-7s-medal reveal fadeInUp" data-wow-delay="1.5s" aria-hidden="true"></i>
                        <div class="featured-list-title reveal fadeInUp" data-wow-delay="1.5s">
                            <h4>Award winning design</h4>
                            <p>You can create custom iOS and macOS apps</p>
                        </div>
                        <hr class="reveal fadeIn" data-wow-delay="1.8s">
                        <i class="pe-primary pe-7s-edit reveal fadeInUp" data-wow-delay="1.8s" aria-hidden="true"></i>
                        <div class="featured-list-title reveal fadeInUp" data-wow-delay="1.8s">
                            <h4>Easy to customize</h4>
                            <p>Swift, our open source programming language.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 featured3-block">
                <div class="video-wrap reveal fadeIn">
                    <a href="https://www.youtube.com/watch?v=11ZRpXj54rU"
                       class="video-play">
                        <img src="images/video-img.jpg" class="img-fluid" alt="#">
                        <i class="fa fa-play video-icon" aria-hidden="true"></i>
                        <div class="video-wrap-overlay"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//End Featured 3 -->
<!--===================== Clients =====================-->
<div class="clients" style="display:none">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="client-slide owl-carousel reveal fadeIn">
                    <!--todo wstawić loga aplikacji czy patronów?-->
                    <div><img src="images/client1.png" alt="#"></div>
                    <div><img src="images/client2.png" alt="#"></div>
                    <div><img src="images/client3.png" alt="#"></div>
                    <div><img src="images/client4.png" alt="#"></div>
                    <div><img src="images/client5.png" alt="#"></div>
                    <div><img src="images/client6.png" alt="#"></div>
                    <div><img src="images/client1.png" alt="#"></div>
                    <div><img src="images/client2.png" alt="#"></div>
                    <div><img src="images/client3.png" alt="#"></div>
                    <div><img src="images/client4.png" alt="#"></div>
                    <div><img src="images/client5.png" alt="#"></div>
                    <div><img src="images/client6.png" alt="#"></div>
                    <!--                    todo wstawić aplikacje i odnośnik do "WSZYTSKIE"-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--//End Clients -->
<!--===================== Learning  =====================-->
<section class=" space">
    <div class="container">
        <div class="row justify-content-center center-block">
            <div class="col-md-8">
                <div class="title-block">
                    <h2 class="reveal fadeInUp">Próbowałeś uczyć się programowania?</h2>
                    <p class="reveal fadeInUp" data-wow-delay="0.3s">
                        Kto powiedział, że zanim będziesz mógł robić fajne rzeczy, trzeba przebrnąć przez nudę, okno
                        terminala i skomplikowaną teorię?
                    </p>
                </div>
            </div>
        </div>
        <div class="row featured-wrap">
            <div class="col-md-4 featured-item reveal fadeIn" data-wow-delay="0.3s">
                <i class="pe pe-7s-gleam"
                   aria-hidden="true"></i>
                <h4 class="mb-3 mt-3">Energiczne zajęcia</h4>
                <p class="pb-4">Nie daj się nabrać, że programowanie jest nudne. Poczuj energię i zaangażowanie w
                    ciekawych tematach.
                </p>
            </div>
            <div class="col-md-4 featured-item reveal fadeIn">
                <i class="pe pe-7s-graph1" aria-hidden="true"></i>
                <h4 class="mb-3 mt-3">Precyzja i skuteczność</h4>
                <p class="pb-4">Praktyka pokazuje, że z 80% tematów prawie nigdy nie skorzystasz. <br class="d-none d-lg-block d-xl-none"/>Ja pokażę Ci jak być
                    ninją w najważniejszych 20%!
                </p>
            </div>
            <div class="col-md-4 featured-item reveal fadeIn" data-wow-delay="0.6s">
                <i class="pe pe-7s-smile" aria-hidden="true"></i>
                <h4 class="mb-3 mt-3">Zabawa i sympatia</h4>
                <p class="pb-4">Jeśli jesteś też na tyle wytrzymały, <br class="d-none d-lg-block d-xl-none"/> by przetrwać falę <br class="d-none d-lg-block d-xl-none"/>
                    prześmiesznych dowcipków... <br/>to
                    dodatkowy plus ;)
                </p>
            </div>
        </div>
    </div>
</section>
<!--//End Features -->
<!--===================== Programming  =====================-->
<section class="space d-none">
    <div class="container">
        <div class="row justify-content-center center-block">
            <div class="col-md-8">
                <div class="title-block">
                    <h2 class="reveal fadeInUp">A może potrzebujesz aplikacji?</h2>
                    <p class="reveal fadeInUp" data-wow-delay="0.3s">
                        Mam wieloletnie doświadczenie programistyczne, mogę pomóc dobrze poznać
                        szanse i problemy, przygotować i nadzorować infrastrukturę oraz stworzyć kompletne rozwiązanie
                        informatyczne, aplikację, program... <br/>Ceny MVP od 6 tys. zł, 1 tys. zł za MD.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 detailed-icon-wrap">
                <div class="detailed-block reveal fadeInLeft">
                    <span class="pe-primary pe-7s-server"></span>
                    <h4>Obsługa dużej <br class="d-none d-lg-block d-xl-none"/>ilości danych</h4>
                    <p class="text-muted">Mogę przetwarzać znaczne ilości danych, również o użytkownikach,
                        na serwerze, lub/i urządzeniu.
                    </p>
                </div>
                <div class="detailed-block reveal fadeInLeft" data-wow-delay="0.3s">
                     <span
                             class="pe-primary pe-7s-science"></span>
                    <div class="detailed-title">
                        <h4>Proste oraz skomplikowane</h4>
                        <p class="text-muted">Realizacje zarówno w zakresie "minimalnym" do wybadania rynku/rozpoczęcia
                            świadczenia usług, jak i "pod klucz" gotowe do wdrożenia.
                        </p>
                    </div>
                </div>
                <div class="detailed-block reveal fadeInLeft" data-wow-delay="0.6s">
                     <span
                             class="pe-primary pe-7s-photo"></span>
                    <div class="detailed-title">
                        <h4>Profesjonalny design</h4>
                        <p class="text-muted">Rozwiązania interfejsu znane i rozumiane przez użytkowników - intuicyjne i
                            sprawdzone. Estetyczne.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 detaled-wrap-flex">
                <div class="deatiled-phone-wrap reveal fadeIn">
                    <img src="images/detailed-screen.png" class="phone"
                         alt="#">
                    <div class="screen">
                        <div class="screen-slider owl-carousel owl-theme">
                            <div class="item"><img src="images/screen1.jpg" alt="#"></div>
                            <div class="item"><img src="images/screen2.jpg" alt="#"></div>
                            <div class="item"><img src="images/screen3.jpg" alt="#"></div>
                            <div class="item"><img src="images/screen4.jpg" alt="#"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 detailed-icon-wrap">
                <div class="detailed-block2 reveal fadeInRight">
                     <span
                             class="pe-primary pe-7s-rocket detailed-icon2"></span>
                    <h4>Szybkość działania</h4>
                    <p class="text-muted">Możliwość wykonania w technologiach natywnych, o bardzo wysokiej wydajności,
                        jak i w ekonomicznych hybrydowych technologiach.
                    </p>
                </div>
                <div class="detailed-block2 reveal fadeInRight">
                     <span class="pe-primary pe-7s-medal detailed-icon2"
                           data-wow-delay="0.3s"></span>
                    <h4>Pomoc od początku</h4>
                    <p class="text-muted">Oferuję wsparcie przy wdrożeniu aplikacji i doradztwo/zaplecze dla małych i
                        średnich aplikacji. Wspieram Start Up'y.
                    </p>
                </div>
                <div class="detailed-block2 reveal fadeInRight">
                     <span class="pe-primary pe-7s-edit detailed-icon2"
                           data-wow-delay="0.6s"></span>
                    <h4>Elastyczny <br class="d-none d-lg-block d-xl-none"/>kod źródłowy</h4>
                    <p class="text-muted">Korzystne cenowo oferty rozwijania i modyfikacji na stworzonych u mnie
                        aplikacji.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//End Detailed Slider -->
