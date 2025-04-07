<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MHI Home Page</title>
        <link rel="stylesheet" href="css/vendor/swiper-bundle.min.css" />
        <link rel="stylesheet" href="css/vendor/fancybox.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <!-- [header start] -->
        <header id="header" class="py-6">
            <div class="container relative">
                <div class="flex items-center justify-between">
                    <a href="/" aria-label="MHI Home">
                        <img
                            class="w-[180px] md:w-[220px] xl:w-auto"
                            src="img/logo.svg"
                            alt="MHI Logo"
                        />
                    </a>
                    <nav
                        id="main-nav"
                        class="absolute hidden z-50 p-10 lg:p-0 lg:static inset-x-0 top-[57px] bg-dark-blue lg:bg-transparent lg:flex flex-col lg:flex-row lg:items-center gap-4 lg:gap-8 xl:gap-12"
                    >
                        <a
                            href="/"
                            class="nav-link text-white lg:text-dark-blue text-lg font-medium hover:text-primary duration-300"
                            >Harukaze Pro</a
                        >
                        <a
                            href="/"
                            class="nav-link text-white lg:text-dark-blue text-lg font-medium hover:text-primary duration-300"
                            >Funcții</a
                        >
                        <a
                            href="/"
                            class="nav-link text-white lg:text-dark-blue text-lg font-medium hover:text-primary duration-300"
                            >Caracteristici</a
                        >
                        <a
                            href="/"
                            class="nav-link text-white lg:text-dark-blue text-lg font-medium hover:text-primary duration-300"
                            >Cumpără</a
                        >
                        <a
                            href="/"
                            class="nav-link text-white lg:text-dark-blue text-lg font-medium hover:text-primary duration-300"
                            >Alte produse</a
                        >
                        <a
                            href="/"
                            class="nav-link text-white lg:text-dark-blue text-lg font-medium hover:text-primary duration-300"
                            >Despre</a
                        >
                    </nav>
                    <button
                        id="hamburger"
                        class="w-5 h-4 flex flex-col justify-between lg:hidden group"
                    >
                        <span class="h-[2px] w-full bg-primary"></span>
                        <span
                            class="h-[2px] w-full bg-primary translate-x-1 group-hover:translate-x-0 transition-transform duration-300"
                        ></span>
                        <span class="h-[2px] w-full bg-primary"></span>
                    </button>
                </div>
            </div>
        </header>
        <!-- [header end] -->

        <!-- [hero start] -->
        <section>
            <div
                class="container h-[clamp(40.625rem,38.8158rem+7.2368vw,47.5rem)] relative"
            >
                <!-- [hero slider info start] -->
                <div
                    class="absolute bottom-[9rem] md:top-[4rem] md:left-[4rem] lg:top-[13rem] lg:left-[13.12rem] left-1/2 -translate-x-1/2 md:-translate-x-0 z-10"
                    id="hero-info"
                >
                    <div
                        class="w-[307px] rounded-[10px] p-[15px] md:p-[30px] bg-white hidden"
                        data-info="0"
                    >
                        <img
                            class="hidden md:block"
                            src="img/icon-5.png"
                            alt="icon-5"
                        />
                        <h6
                            class="text-xl text-dark-blue uppercase md:pt-[10px] pb-[2px]"
                        >
                            Filtru Anti-Alergeni
                        </h6>
                        <p class="text-dark-blue">
                            Neutralizează polenul, virusurile sau bacteriile
                            colectate pe suprafața filtrului anti-alergenic.
                        </p>
                    </div>
                    <div
                        class="w-[307px] rounded-[10px] p-[15px] md:p-[30px] bg-white hidden"
                        data-info="1"
                    >
                        <img
                            class="hidden md:block"
                            src="img/icon-5.png"
                            alt="icon-5"
                        />
                        <h6 class="text-xl uppercase md:pt-[10px] pb-[2px]">
                            Filtru Anti-Alergeni 2
                        </h6>
                        <p class="text-dark-blue">
                            Neutralizează polenul, virusurile sau bacteriile
                            colectate pe suprafața filtrului anti-alergenic.
                        </p>
                    </div>
                    <div
                        class="w-[307px] rounded-[10px] p-[15px] md:p-[30px] bg-white hidden"
                        data-info="2"
                    >
                        <img
                            class="hidden md:block"
                            src="img/icon-5.png"
                            alt="icon-5"
                        />
                        <h6 class="text-xl uppercase md:pt-[10px] pb-[2px]">
                            Filtru Anti-Alergeni 3
                        </h6>
                        <p class="text-dark-blue">
                            Neutralizează polenul, virusurile sau bacteriile
                            colectate pe suprafața filtrului anti-alergenic.
                        </p>
                    </div>
                    <div
                        class="w-[307px] rounded-[10px] p-[15px] md:p-[30px] bg-white hidden"
                        data-info="3"
                    >
                        <img
                            class="hidden md:block"
                            src="img/icon-5.png"
                            alt="icon-5"
                        />
                        <h6 class="text-xl uppercase md:pt-[10px] pb-[2px]">
                            Filtru Anti-Alergeni 4
                        </h6>
                        <p class="text-dark-blue">
                            Neutralizează polenul, virusurile sau bacteriile
                            colectate pe suprafața filtrului anti-alergenic.
                        </p>
                    </div>
                </div>
                <!-- [hero slider info end] -->

                <div
                    class="swiper h-full rounded-[10px] overflow-hidden"
                    id="hero-slider"
                >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class="bg-cover bg-center md:bg-left xl:bg-center bg-no-repeat flex items-center h-full"
                                style="background-image: url(./img/hero.png)"
                            ></div>
                        </div>
                        <div class="swiper-slide h-full">
                            <div
                                class="bg-cover bg-center md:bg-left xl:bg-center bg-no-repeat flex items-center h-full"
                                style="background-image: url(./img/hero.png)"
                            ></div>
                        </div>
                        <div class="swiper-slide h-full">
                            <div
                                class="bg-cover bg-center md:bg-left xl:bg-center bg-no-repeat flex items-center h-full"
                                style="background-image: url(./img/hero.png)"
                            ></div>
                        </div>
                        <div class="swiper-slide h-full">
                            <div
                                class="bg-cover bg-center md:bg-left xl:bg-center bg-no-repeat flex items-center h-full"
                                style="background-image: url(./img/hero.png)"
                            ></div>
                        </div>
                    </div>
                </div>
                <!-- [hero items start] -->
                <div
                    class="absolute bottom-[28px] md:bottom-10 left-1/2 -translate-x-1/2 lg:ml-[6rem] z-20 flex gap-[clamp(1.5625rem,0.3947rem+4.6711vw,6rem)]"
                    id="hero-button"
                >
                    <button
                        id="slide-1"
                        class="h-[clamp(4.375rem,4.0461rem+1.3158vw,5.625rem)] w-[clamp(4.375rem,4.0461rem+1.3158vw,5.625rem)] rounded-[10px] bg-white grid place-items-center hover:bg-primary group transition-colors duration-300 -translate-y-[25px] md:-translate-y-[30px]"
                        data-slide="0"
                    >
                        <img
                            class="group-hover:invert transition-colors duration-300 w-[54%]"
                            src="img/icon-1.png"
                            alt="icon-1"
                        />
                    </button>
                    <button
                        id="slide-2"
                        class="h-[clamp(4.375rem,4.0461rem+1.3158vw,5.625rem)] w-[clamp(4.375rem,4.0461rem+1.3158vw,5.625rem)] rounded-[10px] bg-white grid place-items-center hover:bg-primary group transition-colors duration-300"
                        data-slide="1"
                    >
                        <img
                            class="group-hover:invert transition-colors duration-300 w-[54%]"
                            src="img/icon-2.png"
                            alt="icon-2"
                        />
                    </button>
                    <button
                        id="slide-3"
                        class="h-[clamp(4.375rem,4.0461rem+1.3158vw,5.625rem)] w-[clamp(4.375rem,4.0461rem+1.3158vw,5.625rem)] rounded-[10px] bg-white grid place-items-center hover:bg-primary group transition-colors duration-300 -translate-y-[25px] md:-translate-y-[35px]"
                        data-slide="2"
                    >
                        <img
                            class="group-hover:invert transition-colors duration-300 w-[54%]"
                            src="img/icon-3.png"
                            alt="icon-3"
                        />
                    </button>
                    <button
                        id="slide-4"
                        class="h-[clamp(4.375rem,4.0461rem+1.3158vw,5.625rem)] w-[clamp(4.375rem,4.0461rem+1.3158vw,5.625rem)] rounded-[10px] bg-white lg:grid place-items-center hover:bg-primary group transition-colors duration-300 -translate-y-[125px] hidden"
                        data-slide="3"
                    >
                        <img
                            class="group-hover:invert transition-colors duration-300 w-[54%]"
                            src="img/icon-4.png"
                            alt="icon-4"
                        />
                    </button>
                </div>
                <!-- [hero items end] -->
                <img
                    class="absolute bottom-[61px] md:bottom-[75px] left-1/2 -translate-x-1/2 z-10"
                    src="img/hero-curve.svg"
                    alt="hero-curve"
                />
            </div>
            <img
                class="mx-auto mt-6 w-[clamp(15.625rem,10.2467rem+21.5132vw,36.0625rem)]"
                src="img/partners.png"
                alt=" partners"
            />
        </section>
        <!-- [hero end] -->

        <!-- [available variants start] -->
        <section class="pt-[100px] py-[clamp(5rem,4.3421rem+2.6316vw,7.5rem)]">
            <div class="container">
                <div class="flex md:flex-row flex-col pb-8">
                    <div class="md:pr-[4rem] lg:pr-[13.87rem]">
                        <h2
                            class="font-normal text-[clamp(1.5rem,1.3684rem+0.5263vw,2rem)] text-dark-blue"
                        >
                            Harukaze Pro
                        </h2>
                        <h2
                            class="text-[clamp(1.5rem,1.3684rem+0.5263vw,2rem)] font-bold uppercase text-dark-blue"
                        >
                            Un aer smart, pentru standarde înalte
                        </h2>
                        <p class="py-4 text-dark-blue">
                            De la design, la eficiența compresorului și nivelul
                            redus de zgomot, până la funcțiile avansate pentru
                            detectarea prezenței umane, Harukaze Pro este vârful
                            de lance al sistemelor de aer condiționat marca
                            Mitsubishi Heavy Industry.
                        </p>
                        <p class="text-dark-blue">
                            Conceput pentru interioare de design, modelul
                            Harukaze Pro este slim, minimalist, gândit special
                            pentru piața europeană și premiat la una dintre cele
                            mai prestigioase competiții pentru design.
                        </p>
                    </div>
                    <div class="shrink-0 hidden md:block">
                        <a class="primary-btn" href="#">
                            cumpără harukaze pro

                            <div
                                class="h-9 w-9 grid place-items-center rounded-full bg-primary"
                            >
                                <img
                                    class="-translate-y-[2px]"
                                    src="img/arrow-1.svg"
                                    alt="arrow"
                                />
                            </div>
                        </a>
                    </div>
                </div>
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-24 sm:gap-y-14"
                >
                    <div
                        class="pt-[clamp(1.25rem,1.0197rem+0.9211vw,2.125rem)] px-[clamp(1rem,0.7368rem+1.0526vw,2rem)] border-[1px] border-light-gray bg-white rounded-[10px] h-[96px] md:h-[136px]"
                    >
                        <h2
                            class="text-base md:text-lg uppercase font-bold text-dark-blue"
                        >
                            Pure White
                        </h2>
                        <img
                            class="translate-y-[clamp(1rem,0.8026rem+0.7895vw,1.75rem)] xs:w-[258.19px] md:w-fit mx-auto"
                            src="img/product-1.png"
                            alt="product-1"
                        />
                    </div>
                    <div
                        class="pt-[clamp(1.25rem,1.0197rem+0.9211vw,2.125rem)] px-[clamp(1rem,0.7368rem+1.0526vw,2rem)] border-[1px] border-titanium bg-titanium rounded-[10px] h-[96px] md:h-[136px]"
                    >
                        <h2
                            class="text-base md:text-lg uppercase font-bold text-white"
                        >
                            Titanium
                        </h2>
                        <img
                            class="translate-y-[clamp(1rem,0.8026rem+0.7895vw,1.75rem)] sm:w-[258.19px] md:w-fit mx-auto"
                            src="img/product-2.png"
                            alt="product-1"
                        />
                    </div>
                    <div
                        class="pt-[clamp(1.25rem,1.0197rem+0.9211vw,2.125rem)] px-[clamp(1rem,0.7368rem+1.0526vw,2rem)] border-[1px] border-dark-blue bg-dark-blue rounded-[10px] h-[96px] md:h-[136px]"
                    >
                        <h2
                            class="text-base md:text-lg uppercase font-bold text-white"
                        >
                            Contrast
                        </h2>
                        <img
                            class="translate-y-[clamp(1rem,0.8026rem+0.7895vw,1.75rem)] sm:w-[258.19px] md:w-fit mx-auto"
                            src="img/product-3.png"
                            alt="product-1"
                        />
                    </div>
                </div>
                <div
                    class="text-center pt-[100px] flex justify-center md:hidden"
                >
                    <a class="primary-btn" href="#">
                        cumpără harukaze pro

                        <div
                            class="h-9 w-9 grid place-items-center rounded-full bg-primary"
                        >
                            <img
                                class="-translate-y-[2px]"
                                src="img/arrow-1.svg"
                                alt="arrow"
                            />
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- [available variants end] -->

        <!-- [advanced features start] -->
        <section class="py-[clamp(5rem,4.3421rem+2.6316vw,7.5rem)]">
            <div class="container">
                <div class="flex md:flex-row flex-col justify-between pb-6">
                    <h2
                        class="font-normal text-[clamp(1.5rem,1.3684rem+0.5263vw,2rem)]"
                    >
                        Funcții avansate. Confort. Tehnologie
                    </h2>
                    <a class="primary-btn hidden md:flex" href="#">
                        cumpără harukaze pro

                        <div
                            class="h-9 w-9 grid place-items-center rounded-full bg-primary"
                        >
                            <img
                                class="-translate-y-[2px]"
                                src="img/arrow-1.svg"
                                alt="arrow"
                            />
                        </div>
                    </a>
                </div>
                <div
                    class="grid grid-cols-1 md:grid-cols-[200px_1fr_200px] lg:grid-cols-[345px_1fr_345px] gap-5"
                >
                    <ul>
                        <li class="border-b border-b-[#F3F3F3]">
                            <button
                                data-tab="tab1"
                                class="tab-btn tab tab-active group"
                            >
                                Senzor uman
                                <img src="img/arrow-2.svg" alt="arrow-2" />
                            </button>
                        </li>
                        <li class="border-b border-b-[#F3F3F3]">
                            <button data-tab="tab2" class="tab-btn tab group">
                                Voice control / Control de la distanță
                                <img src="img/arrow-2.svg" alt="arrow-2" />
                            </button>
                        </li>
                        <li class="border-b border-b-[#F3F3F3]">
                            <button data-tab="tab3" class="tab-btn tab group">
                                Funcție Antialergeni și Funcție Autocurățare
                                <img src="img/arrow-2.svg" alt="arrow-2" />
                            </button>
                        </li>
                        <li class="border-b border-b-[#F3F3F3]">
                            <button data-tab="tab4" class="tab-btn tab group">
                                Funcție Confort Timers
                                <img src="img/arrow-2.svg" alt="arrow-2" />
                            </button>
                        </li>
                        <li class="border-b border-b-[#F3F3F3]">
                            <button data-tab="tab5" class="tab-btn tab group">
                                Funcția de distribuție 3D a aerului
                                <img src="img/arrow-2.svg" alt="arrow-2" />
                            </button>
                        </li>
                        <li class="border-b border-b-[#F3F3F3]">
                            <button data-tab="tab6" class="tab-btn tab group">
                                Confort maxim în orice sezon
                                <img src="img/arrow-2.svg" alt="arrow-2" />
                            </button>
                        </li>
                        <li class="border-b border-b-[#F3F3F3]">
                            <button data-tab="tab7" class="tab-btn tab group">
                                Construcție premium și durabilitate ridicată
                                <img src="img/arrow-2.svg" alt="arrow-2" />
                            </button>
                        </li>
                        <li class="border-b border-b-[#F3F3F3]">
                            <button data-tab="tab8" class="tab-btn tab group">
                                Tehnologie de vârf și fiabilitate pe termen lung
                                <img src="img/arrow-2.svg" alt="arrow-2" />
                            </button>
                        </li>
                    </ul>
                    <div>
                        <div
                            id="tab1"
                            class="tab-content bg-light-grey-alt h-full p-5 lg:p-10 rounded-[10px]"
                        >
                            <div class="h-[450px] overflow-y-auto">
                                <div class="pr-10">
                                    <h6
                                        class="text-lg font-black text-dark-blue pb-[18px]"
                                    >
                                        Funcția Eco
                                    </h6>
                                    <div class="space-y-6">
                                        <p class="text-dark-blue">
                                            Controlul automat al economisirii
                                            energiei se realizează prin
                                            detectarea activității umane.
                                        </p>
                                        <p class="text-dark-blue">
                                            Activitatea umană este detectată de
                                            un senzor de mișcare instalat în
                                            unitate.
                                        </p>
                                        <p class="text-dark-blue">
                                            Aparatul de aer condiționat își
                                            ajustează capacitatea de
                                            răcire/încălzire în funcție de
                                            cererea redusă/ridicată.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            încălzire: Aparatul de aer
                                            condiționat intră în modul de
                                            economisire a energiei atunci când
                                            este detectată o activitate intensă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            răcire: Aparatul de aer condiționat
                                            intră în modul de economisire a
                                            energiei atunci când este detectată
                                            o activitate redusă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Când senzorul detectează că nu este
                                            nimeni în încăpere, unitatea va
                                            reduce automat consumul de energie
                                            la un nivel moderat după aproximativ
                                            15 minute și va reveni la
                                            funcționarea normală odată ce
                                            oamenii revin în cameră.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            încălzire: Aparatul de aer
                                            condiționat intră în modul de
                                            economisire a energiei atunci când
                                            este detectată o activitate intensă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            răcire: Aparatul de aer condiționat
                                            intră în modul de economisire a
                                            energiei atunci când este detectată
                                            o activitate redusă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Când senzorul detectează că nu este
                                            nimeni în încăpere, unitatea va
                                            reduce automat consumul de energie
                                            la un nivel moderat după aproximativ
                                            15 minute și va reveni la
                                            funcționarea normală odată ce
                                            oamenii revin în cameră.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            id="tab2"
                            class="tab-content bg-light-grey-alt h-full p-5 lg:p-10 rounded-[10px] hidden"
                        >
                            <div class="h-[450px] overflow-y-auto">
                                <div class="pr-10">
                                    <h6
                                        class="text-lg font-black text-dark-blue pb-[18px]"
                                    >
                                        Funcția Eco 2
                                    </h6>
                                    <div class="space-y-6">
                                        <p class="text-dark-blue">
                                            Controlul automat al economisirii
                                            energiei se realizează prin
                                            detectarea activității umane.
                                        </p>
                                        <p class="text-dark-blue">
                                            Activitatea umană este detectată de
                                            un senzor de mișcare instalat în
                                            unitate.
                                        </p>
                                        <p class="text-dark-blue">
                                            Aparatul de aer condiționat își
                                            ajustează capacitatea de
                                            răcire/încălzire în funcție de
                                            cererea redusă/ridicată.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            încălzire: Aparatul de aer
                                            condiționat intră în modul de
                                            economisire a energiei atunci când
                                            este detectată o activitate intensă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            răcire: Aparatul de aer condiționat
                                            intră în modul de economisire a
                                            energiei atunci când este detectată
                                            o activitate redusă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Când senzorul detectează că nu este
                                            nimeni în încăpere, unitatea va
                                            reduce automat consumul de energie
                                            la un nivel moderat după aproximativ
                                            15 minute și va reveni la
                                            funcționarea normală odată ce
                                            oamenii revin în cameră.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            încălzire: Aparatul de aer
                                            condiționat intră în modul de
                                            economisire a energiei atunci când
                                            este detectată o activitate intensă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            răcire: Aparatul de aer condiționat
                                            intră în modul de economisire a
                                            energiei atunci când este detectată
                                            o activitate redusă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Când senzorul detectează că nu este
                                            nimeni în încăpere, unitatea va
                                            reduce automat consumul de energie
                                            la un nivel moderat după aproximativ
                                            15 minute și va reveni la
                                            funcționarea normală odată ce
                                            oamenii revin în cameră.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            id="tab3"
                            class="tab-content bg-light-grey-alt h-full p-5 lg:p-10 rounded-[10px] hidden"
                        >
                            <div class="h-[450px] overflow-y-auto">
                                <div class="pr-10">
                                    <h6
                                        class="text-lg font-black text-dark-blue pb-[18px]"
                                    >
                                        Funcția Eco 3
                                    </h6>
                                    <div class="space-y-6">
                                        <p class="text-dark-blue">
                                            Controlul automat al economisirii
                                            energiei se realizează prin
                                            detectarea activității umane.
                                        </p>
                                        <p class="text-dark-blue">
                                            Activitatea umană este detectată de
                                            un senzor de mișcare instalat în
                                            unitate.
                                        </p>
                                        <p class="text-dark-blue">
                                            Aparatul de aer condiționat își
                                            ajustează capacitatea de
                                            răcire/încălzire în funcție de
                                            cererea redusă/ridicată.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            încălzire: Aparatul de aer
                                            condiționat intră în modul de
                                            economisire a energiei atunci când
                                            este detectată o activitate intensă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            răcire: Aparatul de aer condiționat
                                            intră în modul de economisire a
                                            energiei atunci când este detectată
                                            o activitate redusă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Când senzorul detectează că nu este
                                            nimeni în încăpere, unitatea va
                                            reduce automat consumul de energie
                                            la un nivel moderat după aproximativ
                                            15 minute și va reveni la
                                            funcționarea normală odată ce
                                            oamenii revin în cameră.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            încălzire: Aparatul de aer
                                            condiționat intră în modul de
                                            economisire a energiei atunci când
                                            este detectată o activitate intensă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            răcire: Aparatul de aer condiționat
                                            intră în modul de economisire a
                                            energiei atunci când este detectată
                                            o activitate redusă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Când senzorul detectează că nu este
                                            nimeni în încăpere, unitatea va
                                            reduce automat consumul de energie
                                            la un nivel moderat după aproximativ
                                            15 minute și va reveni la
                                            funcționarea normală odată ce
                                            oamenii revin în cameră.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            id="tab4"
                            class="tab-content bg-light-grey-alt h-full p-5 lg:p-10 rounded-[10px] hidden"
                        >
                            <div class="h-[450px] overflow-y-auto">
                                <div class="pr-10">
                                    <h6
                                        class="text-lg font-black text-dark-blue pb-[18px]"
                                    >
                                        Funcția Eco 4
                                    </h6>
                                    <div class="space-y-6">
                                        <p class="text-dark-blue">
                                            Controlul automat al economisirii
                                            energiei se realizează prin
                                            detectarea activității umane.
                                        </p>
                                        <p class="text-dark-blue">
                                            Activitatea umană este detectată de
                                            un senzor de mișcare instalat în
                                            unitate.
                                        </p>
                                        <p class="text-dark-blue">
                                            Aparatul de aer condiționat își
                                            ajustează capacitatea de
                                            răcire/încălzire în funcție de
                                            cererea redusă/ridicată.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            încălzire: Aparatul de aer
                                            condiționat intră în modul de
                                            economisire a energiei atunci când
                                            este detectată o activitate intensă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            răcire: Aparatul de aer condiționat
                                            intră în modul de economisire a
                                            energiei atunci când este detectată
                                            o activitate redusă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Când senzorul detectează că nu este
                                            nimeni în încăpere, unitatea va
                                            reduce automat consumul de energie
                                            la un nivel moderat după aproximativ
                                            15 minute și va reveni la
                                            funcționarea normală odată ce
                                            oamenii revin în cameră.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            încălzire: Aparatul de aer
                                            condiționat intră în modul de
                                            economisire a energiei atunci când
                                            este detectată o activitate intensă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            răcire: Aparatul de aer condiționat
                                            intră în modul de economisire a
                                            energiei atunci când este detectată
                                            o activitate redusă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Când senzorul detectează că nu este
                                            nimeni în încăpere, unitatea va
                                            reduce automat consumul de energie
                                            la un nivel moderat după aproximativ
                                            15 minute și va reveni la
                                            funcționarea normală odată ce
                                            oamenii revin în cameră.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            id="tab5"
                            class="tab-content bg-light-grey-alt h-full p-5 lg:p-10 rounded-[10px] hidden"
                        >
                            <div class="h-[450px] overflow-y-auto">
                                <div class="pr-10">
                                    <h6
                                        class="text-lg font-black text-dark-blue pb-[18px]"
                                    >
                                        Funcția Eco 5
                                    </h6>
                                    <div class="space-y-6">
                                        <p class="text-dark-blue">
                                            Controlul automat al economisirii
                                            energiei se realizează prin
                                            detectarea activității umane.
                                        </p>
                                        <p class="text-dark-blue">
                                            Activitatea umană este detectată de
                                            un senzor de mișcare instalat în
                                            unitate.
                                        </p>
                                        <p class="text-dark-blue">
                                            Aparatul de aer condiționat își
                                            ajustează capacitatea de
                                            răcire/încălzire în funcție de
                                            cererea redusă/ridicată.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            încălzire: Aparatul de aer
                                            condiționat intră în modul de
                                            economisire a energiei atunci când
                                            este detectată o activitate intensă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            răcire: Aparatul de aer condiționat
                                            intră în modul de economisire a
                                            energiei atunci când este detectată
                                            o activitate redusă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Când senzorul detectează că nu este
                                            nimeni în încăpere, unitatea va
                                            reduce automat consumul de energie
                                            la un nivel moderat după aproximativ
                                            15 minute și va reveni la
                                            funcționarea normală odată ce
                                            oamenii revin în cameră.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            încălzire: Aparatul de aer
                                            condiționat intră în modul de
                                            economisire a energiei atunci când
                                            este detectată o activitate intensă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            răcire: Aparatul de aer condiționat
                                            intră în modul de economisire a
                                            energiei atunci când este detectată
                                            o activitate redusă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Când senzorul detectează că nu este
                                            nimeni în încăpere, unitatea va
                                            reduce automat consumul de energie
                                            la un nivel moderat după aproximativ
                                            15 minute și va reveni la
                                            funcționarea normală odată ce
                                            oamenii revin în cameră.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            id="tab6"
                            class="tab-content bg-light-grey-alt h-full p-5 lg:p-10 rounded-[10px] hidden"
                        >
                            <div class="h-[450px] overflow-y-auto">
                                <div class="pr-10">
                                    <h6
                                        class="text-lg font-black text-dark-blue pb-[18px]"
                                    >
                                        Funcția Eco 6
                                    </h6>
                                    <div class="space-y-6">
                                        <p class="text-dark-blue">
                                            Controlul automat al economisirii
                                            energiei se realizează prin
                                            detectarea activității umane.
                                        </p>
                                        <p class="text-dark-blue">
                                            Activitatea umană este detectată de
                                            un senzor de mișcare instalat în
                                            unitate.
                                        </p>
                                        <p class="text-dark-blue">
                                            Aparatul de aer condiționat își
                                            ajustează capacitatea de
                                            răcire/încălzire în funcție de
                                            cererea redusă/ridicată.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            încălzire: Aparatul de aer
                                            condiționat intră în modul de
                                            economisire a energiei atunci când
                                            este detectată o activitate intensă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            răcire: Aparatul de aer condiționat
                                            intră în modul de economisire a
                                            energiei atunci când este detectată
                                            o activitate redusă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Când senzorul detectează că nu este
                                            nimeni în încăpere, unitatea va
                                            reduce automat consumul de energie
                                            la un nivel moderat după aproximativ
                                            15 minute și va reveni la
                                            funcționarea normală odată ce
                                            oamenii revin în cameră.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            încălzire: Aparatul de aer
                                            condiționat intră în modul de
                                            economisire a energiei atunci când
                                            este detectată o activitate intensă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            răcire: Aparatul de aer condiționat
                                            intră în modul de economisire a
                                            energiei atunci când este detectată
                                            o activitate redusă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Când senzorul detectează că nu este
                                            nimeni în încăpere, unitatea va
                                            reduce automat consumul de energie
                                            la un nivel moderat după aproximativ
                                            15 minute și va reveni la
                                            funcționarea normală odată ce
                                            oamenii revin în cameră.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            id="tab7"
                            class="tab-content bg-light-grey-alt h-full p-5 lg:p-10 rounded-[10px] hidden"
                        >
                            <div class="h-[450px] overflow-y-auto">
                                <div class="pr-10">
                                    <h6
                                        class="text-lg font-black text-dark-blue pb-[18px]"
                                    >
                                        Funcția Eco 7
                                    </h6>
                                    <div class="space-y-6">
                                        <p class="text-dark-blue">
                                            Controlul automat al economisirii
                                            energiei se realizează prin
                                            detectarea activității umane.
                                        </p>
                                        <p class="text-dark-blue">
                                            Activitatea umană este detectată de
                                            un senzor de mișcare instalat în
                                            unitate.
                                        </p>
                                        <p class="text-dark-blue">
                                            Aparatul de aer condiționat își
                                            ajustează capacitatea de
                                            răcire/încălzire în funcție de
                                            cererea redusă/ridicată.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            încălzire: Aparatul de aer
                                            condiționat intră în modul de
                                            economisire a energiei atunci când
                                            este detectată o activitate intensă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            răcire: Aparatul de aer condiționat
                                            intră în modul de economisire a
                                            energiei atunci când este detectată
                                            o activitate redusă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Când senzorul detectează că nu este
                                            nimeni în încăpere, unitatea va
                                            reduce automat consumul de energie
                                            la un nivel moderat după aproximativ
                                            15 minute și va reveni la
                                            funcționarea normală odată ce
                                            oamenii revin în cameră.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            încălzire: Aparatul de aer
                                            condiționat intră în modul de
                                            economisire a energiei atunci când
                                            este detectată o activitate intensă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            răcire: Aparatul de aer condiționat
                                            intră în modul de economisire a
                                            energiei atunci când este detectată
                                            o activitate redusă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Când senzorul detectează că nu este
                                            nimeni în încăpere, unitatea va
                                            reduce automat consumul de energie
                                            la un nivel moderat după aproximativ
                                            15 minute și va reveni la
                                            funcționarea normală odată ce
                                            oamenii revin în cameră.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            id="tab8"
                            class="tab-content bg-light-grey-alt h-full p-5 lg:p-10 rounded-[10px] hidden"
                        >
                            <div class="h-[450px] overflow-y-auto">
                                <div class="pr-10">
                                    <h6
                                        class="text-lg font-black text-dark-blue pb-[18px]"
                                    >
                                        Funcția Eco 8
                                    </h6>
                                    <div class="space-y-6">
                                        <p class="text-dark-blue">
                                            Controlul automat al economisirii
                                            energiei se realizează prin
                                            detectarea activității umane.
                                        </p>
                                        <p class="text-dark-blue">
                                            Activitatea umană este detectată de
                                            un senzor de mișcare instalat în
                                            unitate.
                                        </p>
                                        <p class="text-dark-blue">
                                            Aparatul de aer condiționat își
                                            ajustează capacitatea de
                                            răcire/încălzire în funcție de
                                            cererea redusă/ridicată.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            încălzire: Aparatul de aer
                                            condiționat intră în modul de
                                            economisire a energiei atunci când
                                            este detectată o activitate intensă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            răcire: Aparatul de aer condiționat
                                            intră în modul de economisire a
                                            energiei atunci când este detectată
                                            o activitate redusă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Când senzorul detectează că nu este
                                            nimeni în încăpere, unitatea va
                                            reduce automat consumul de energie
                                            la un nivel moderat după aproximativ
                                            15 minute și va reveni la
                                            funcționarea normală odată ce
                                            oamenii revin în cameră.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            încălzire: Aparatul de aer
                                            condiționat intră în modul de
                                            economisire a energiei atunci când
                                            este detectată o activitate intensă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Funcționare economică în modul de
                                            răcire: Aparatul de aer condiționat
                                            intră în modul de economisire a
                                            energiei atunci când este detectată
                                            o activitate redusă.
                                        </p>
                                        <p class="text-dark-blue">
                                            Când senzorul detectează că nu este
                                            nimeni în încăpere, unitatea va
                                            reduce automat consumul de energie
                                            la un nivel moderat după aproximativ
                                            15 minute și va reveni la
                                            funcționarea normală odată ce
                                            oamenii revin în cameră.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img
                        class="h-full w-full object-cover rounded-[10px]"
                        src="img/img-1.png"
                        alt="img-1"
                    />
                </div>
                <div class="text-center pt-6 flex justify-center md:hidden">
                    <a class="primary-btn" href="#">
                        cumpără harukaze pro

                        <div
                            class="h-9 w-9 grid place-items-center rounded-full bg-primary"
                        >
                            <img
                                class="-translate-y-[2px]"
                                src="img/arrow-1.svg"
                                alt="arrow"
                            />
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- [advanced features end] -->

        <!-- [heating energy start] -->
        <section>
            <div class="container">
                <div
                    class="flex md:flex-row flex-col items-start lg:items-center justify-between pb-6"
                >
                    <div
                        class="flex lg:flex-row flex-col lg:items-center lg:gap-12 gap-4"
                    >
                        <h2
                            class="font-normal text-[clamp(1.5rem,1.3684rem+0.5263vw,2rem)]"
                        >
                            Control. Eficiență. Capacitate
                        </h2>
                        <div class="flex items-center gap-4">
                            <p class="uppercase font-bold">Vezi video</p>
                            <a
                                href="https://www.youtube.com/watch?v=Mgvt2TVb0Lg"
                                data-fancybox
                                class="h-9 w-9 grid place-items-center rounded-full bg-dark-blue"
                            >
                                <img
                                    class="-translate-x-[2px]"
                                    src="img/arrow-3.svg"
                                    alt="arrow-3"
                                />
                            </a>
                        </div>
                    </div>

                    <a class="primary-btn hidden md:flex" href="#">
                        cumpără harukaze pro

                        <div
                            class="h-9 w-9 grid place-items-center rounded-full bg-primary"
                        >
                            <img
                                class="-translate-y-[2px]"
                                src="img/arrow-1.svg"
                                alt="arrow"
                            />
                        </div>
                    </a>
                </div>
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 relative"
                >
                    <div
                        class="h-[196px] bg-light-grey-alt rounded-[10px] px-8 flex flex-col justify-center space-y-2 relative group hover:bg-white border border-light-grey-alt transition-all duration-300 hover:border-primary"
                    >
                        <h2 class="text-5xl font-light text-primary">A+++</h2>
                        <p
                            class="text-lg uppercase font-bold text-dark-blue group-hover:text-primary transition-all duration-300"
                        >
                            Clasă energetică încalzire
                        </p>

                        <img
                            class="absolute top-5 right-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-30"
                            src="img/icon-6.svg"
                            alt="icon-6"
                        />
                    </div>
                    <div
                        class="h-[196px] bg-light-grey-alt rounded-[10px] px-8 flex flex-col justify-center space-y-2 relative group hover:bg-white border border-light-grey-alt transition-all duration-300 hover:border-primary"
                    >
                        <h2 class="text-5xl font-light text-primary">A+++</h2>
                        <p
                            class="text-lg uppercase font-bold text-dark-blue group-hover:text-primary transition-all duration-300"
                        >
                            Clasa energetică răcire
                        </p>

                        <img
                            class="absolute top-5 right-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-30"
                            src="img/icon-6.svg"
                            alt="icon-6"
                        />
                    </div>
                    <div
                        class="h-[196px] bg-light-grey-alt rounded-[10px] px-8 flex flex-col justify-center space-y-2 relative group hover:bg-white border border-light-grey-alt transition-all duration-300 hover:border-primary"
                    >
                        <h2 class="text-5xl font-light text-primary">9.5</h2>
                        <p
                            class="text-lg uppercase font-bold text-dark-blue group-hover:text-primary transition-all duration-300"
                        >
                            Eficiență sezonieră racire SEER
                        </p>

                        <img
                            class="absolute top-5 right-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-30"
                            src="img/icon-6.svg"
                            alt="icon-6"
                        />
                    </div>
                    <div
                        class="h-[196px] bg-light-grey-alt rounded-[10px] px-8 flex flex-col justify-center space-y-2 relative group hover:bg-white border border-light-grey-alt transition-all duration-300 hover:border-primary"
                    >
                        <h2 class="text-5xl font-light text-primary">5.10</h2>
                        <p
                            class="text-lg uppercase font-bold text-dark-blue group-hover:text-primary transition-all duration-300"
                        >
                            Eficienta sezoniera incalzire SCOP
                        </p>

                        <img
                            class="absolute top-5 right-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-30"
                            src="img/icon-6.svg"
                            alt="icon-6"
                        />
                    </div>
                    <div
                        class="h-[196px] bg-light-grey-alt rounded-[10px] px-8 flex flex-col justify-center space-y-2 relative group hover:bg-white border border-light-grey-alt transition-all duration-300 hover:border-primary"
                    >
                        <h2 class="text-5xl font-light text-primary">
                            Ecologic, R32
                        </h2>
                        <p
                            class="text-lg uppercase font-bold text-dark-blue group-hover:text-primary transition-all duration-300"
                        >
                            Refrigerant
                        </p>

                        <img
                            class="absolute top-5 right-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-30"
                            src="img/icon-6.svg"
                            alt="icon-6"
                        />
                    </div>
                    <div
                        class="h-[196px] bg-light-grey-alt rounded-[10px] px-8 flex flex-col justify-center space-y-2 relative group hover:bg-white border border-light-grey-alt transition-all duration-300 hover:border-primary"
                    >
                        <h2 class="text-5xl font-light text-primary">12000</h2>
                        <p
                            class="text-lg uppercase font-bold text-dark-blue group-hover:text-primary transition-all duration-300"
                        >
                            Capacitate nominală de răcire (BTU)
                        </p>

                        <img
                            class="absolute top-5 right-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-30"
                            src="img/icon-6.svg"
                            alt="icon-6"
                        />
                    </div>
                    <div
                        class="h-[196px] bg-light-grey-alt rounded-[10px] px-8 flex flex-col justify-center space-y-2 relative group hover:bg-white border border-light-grey-alt transition-all duration-300 hover:border-primary"
                    >
                        <h2 class="text-5xl font-light text-primary">14672</h2>
                        <p
                            class="text-lg uppercase font-bold text-dark-blue group-hover:text-primary transition-all duration-300"
                        >
                            Capacitate nominală de încălzire (BTU)
                        </p>

                        <img
                            class="absolute top-5 right-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-30"
                            src="img/icon-6.svg"
                            alt="icon-6"
                        />
                    </div>
                    <div
                        class="h-[196px] bg-light-grey-alt rounded-[10px] px-8 flex flex-col justify-center space-y-2 relative group hover:bg-white border border-light-grey-alt transition-all duration-300 hover:border-primary"
                    >
                        <h2 class="text-5xl font-light text-primary">3.5</h2>
                        <p
                            class="text-lg uppercase font-bold text-dark-blue group-hover:text-primary transition-all duration-300"
                        >
                            Capacitate nominala de racire (Min~Max) (kW)
                        </p>

                        <img
                            class="absolute top-5 right-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-30"
                            src="img/icon-6.svg"
                            alt="icon-6"
                        />
                    </div>
                    <div
                        class="h-[196px] bg-light-grey-alt rounded-[10px] px-8 flex flex-col justify-center space-y-2 relative group hover:bg-white border border-light-grey-alt transition-all duration-300 hover:border-primary"
                    >
                        <h2 class="text-5xl font-light text-primary">
                            Ecologic, R32
                        </h2>
                        <p
                            class="text-lg uppercase font-bold text-dark-blue group-hover:text-primary transition-all duration-300"
                        >
                            Refrigerant
                        </p>

                        <img
                            class="absolute top-5 right-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-30"
                            src="img/icon-6.svg"
                            alt="icon-6"
                        />
                    </div>
                    <div
                        class="h-[196px] bg-light-grey-alt rounded-[10px] px-8 flex flex-col justify-center space-y-2 relative group hover:bg-white border border-light-grey-alt transition-all duration-300 hover:border-primary"
                    >
                        <h2 class="text-5xl font-light text-primary">12000</h2>
                        <p
                            class="text-lg uppercase font-bold text-dark-blue group-hover:text-primary transition-all duration-300"
                        >
                            Capacitate nominală de răcire (BTU)
                        </p>

                        <img
                            class="absolute top-5 right-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-30"
                            src="img/icon-6.svg"
                            alt="icon-6"
                        />
                    </div>
                    <div
                        class="h-[196px] bg-light-grey-alt rounded-[10px] px-8 flex flex-col justify-center space-y-2 relative group hover:bg-white border border-light-grey-alt transition-all duration-300 hover:border-primary"
                    >
                        <h2 class="text-5xl font-light text-primary">14672</h2>
                        <p
                            class="text-lg uppercase font-bold text-dark-blue group-hover:text-primary transition-all duration-300"
                        >
                            Capacitate nominală de încălzire (BTU)
                        </p>

                        <img
                            class="absolute top-5 right-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-30"
                            src="img/icon-6.svg"
                            alt="icon-6"
                        />
                    </div>
                    <div
                        class="h-[196px] bg-light-grey-alt rounded-[10px] px-8 flex flex-col justify-center space-y-2 relative group hover:bg-white border border-light-grey-alt transition-all duration-300 hover:border-primary"
                    >
                        <h2 class="text-5xl font-light text-primary">3.5</h2>
                        <p
                            class="text-lg uppercase font-bold text-dark-blue group-hover:text-primary transition-all duration-300"
                        >
                            Capacitate nominala de racire (Min~Max) (kW)
                        </p>

                        <img
                            class="absolute top-5 right-5 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-30"
                            src="img/icon-6.svg"
                            alt="icon-6"
                        />
                    </div>

                    <div
                        class="h-[236px] absolute bottom-0 inset-x-0 bg-gradient-to-t from-white from-60% to-transparent grid place-items-center"
                    >
                        <a class="secondary-btn" href="#">
                            Încarcă mai multe
                            <div
                                class="h-9 w-9 shrink-0 grid place-items-center rounded-full bg-dark-blue"
                            >
                                <img
                                    class="-translate-y-[2px]"
                                    src="img/arrow-1.svg"
                                    alt="arrow"
                                />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- [heating energy end] -->

        <!-- [cta start] -->
        <section>
            <div class="container">
                <div class="bg-primary rounded-[10px] py-20 px-4">
                    <div class="max-w-[550px] mx-auto text-center space-y-8">
                        <div
                            class="h-[86px] w-[86px] rounded-[10px] bg-white grid place-items-center mx-auto"
                        >
                            <img src="img/icon-7.svg" alt="icon-7" />
                        </div>
                        <div class="space-y-1">
                            <div class="-space-y-2">
                                <h2
                                    class="font-normal text-[clamp(1.5rem,1.3684rem+0.5263vw,2rem)] text-white"
                                >
                                    Unde găsești
                                </h2>
                                <h2
                                    class="font-bold text-[clamp(1.5rem,1.3684rem+0.5263vw,2rem)] text-white"
                                >
                                    Haruzake pro
                                </h2>
                            </div>
                            <p class="text-white text-lg">
                                Prin intermediul partenerilor noștri, ai
                                livrare, montaj și ghidaj profesionist pentru
                                unitatea ta de aer condiționat.
                            </p>
                        </div>
                        <a
                            href="#"
                            class="h-[70px] md:h-[80px] lg:h-[90px] inline-flex items-center gap-4 md:gap-6 bg-white text-primary px-[85px] text-base lg:text-[22px] font-bold rounded-[10px] hover:scale-105 transition-all duration-300 group"
                        >
                            Cumpără acum

                            <img
                                class="h-3 md:h-[18px] w-auto"
                                src="img/arrow-4.svg"
                                alt="arrow-4"
                            />
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- [cta end] -->

        <!-- [air Conditioner start] -->
        <section class="pt-[clamp(5rem,4.3421rem+2.6316vw,7.5rem)]">
            <div class="container">
                <div class="pb-4">
                    <h2
                        class="font-normal text-[clamp(1.5rem,1.3684rem+0.5263vw,2rem)]"
                    >
                        Ia-ți un aer
                    </h2>
                    <h2
                        class="font-bold text-[clamp(1.5rem,1.3684rem+0.5263vw,2rem)] uppercase"
                    >
                        Mitsubishi Heavy Industries
                    </h2>
                </div>
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5"
                >
                    <div
                        class="py-[22px] md:py-[42px] px-4 md:px-8 rounded-[10px] border border-gray"
                    >
                        <h6 class="text-lg font-bold text-dark-blue pb-[10px]">
                            GAMA Harukaze
                        </h6>
                        <p class="text-dark-blue pb-[30px]">
                            O alegere premium de la Mitsubishi Heavy Industries.
                            Design elegant și tehnologie avansată, funcții
                            inteligente și eficiență energetică superioară.
                        </p>
                        <img
                            class="mb-10"
                            src="img/product-4.png"
                            alt="product-4"
                        />
                        <a
                            class="font-black text-primary inline-flex items-center gap-4 group"
                            href="#"
                            >Cumpără Harukaze
                            <img
                                class="group-hover:rotate-45 transition-all duration-300 ease-out"
                                src="img/arrow-5.svg"
                                alt="arrow-5"
                        /></a>
                    </div>
                    <div
                        class="py-[22px] md:py-[42px] px-4 md:px-8 rounded-[10px] border border-gray"
                    >
                        <h6 class="text-lg font-bold text-dark-blue pb-[10px]">
                            GAMA NYOKO
                        </h6>
                        <p class="text-dark-blue pb-[30px]">
                            Soluția economică și modernă pentru climatizare,
                            Nyoko combină eficiența sezonieră ridicată cu un
                            design compact și funcții intuitive.
                        </p>
                        <img
                            class="mb-10"
                            src="img/product-5.png"
                            alt="product-4"
                        />
                        <a
                            class="font-black text-primary inline-flex items-center gap-4 group"
                            href="#"
                            >Cumpără Harukaze
                            <img
                                class="group-hover:rotate-45 transition-all duration-300 ease-out"
                                src="img/arrow-5.svg"
                                alt="arrow-5"
                        /></a>
                    </div>
                    <div
                        class="py-[22px] md:py-[42px] px-4 md:px-8 rounded-[10px] border border-gray"
                    >
                        <h6 class="text-lg font-bold text-dark-blue pb-[10px]">
                            GAMA HIKARI
                        </h6>
                        <p class="text-dark-blue pb-[30px]">
                            Unitate de aer condiționat axată pe performanță și
                            fiabilitate. Echilibrul perfect între putere, consum
                            redus de energie și un nivel optim de confort
                            termic.
                        </p>
                        <img
                            class="mb-10"
                            src="img/product-6.png"
                            alt="product-4"
                        />
                        <a
                            class="font-black text-primary inline-flex items-center gap-4 group"
                            href="#"
                            >Cumpără Harukaze
                            <img
                                class="group-hover:rotate-45 transition-all duration-300 ease-out"
                                src="img/arrow-5.svg"
                                alt="arrow-5"
                        /></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- [air Conditioner end] -->

        <!-- [despre start] -->
        <section class="py-[clamp(5rem,4.3421rem+2.6316vw,7.5rem)]">
            <div class="container">
                <div class="pb-4">
                    <h2
                        class="font-normal text-[clamp(1.5rem,1.3684rem+0.5263vw,2rem)]"
                    >
                        Despre
                    </h2>
                    <h2
                        class="font-bold text-[clamp(1.5rem,1.3684rem+0.5263vw,2rem)] uppercase"
                    >
                        Mitsubishi Heavy Industries
                    </h2>
                </div>
                <div
                    class="grid grid-cols-1 lg:grid-cols-2 border p-6 md:p-8 rounded-[10px] border-gray gap-6 md:gap-10 lg:gap-[60px]"
                >
                    <div class="space-y-6">
                        <h6 class="font-bold text-lg text-dark-blue">
                            Peste 120 de ani in serviciul tehnologiei recomanda
                        </h6>
                        <p class="text-dark-blue">
                            Cu o istorie de peste 130 de ani, compania
                            Mitsubishi Heavy Industries a fost fondată de către
                            Yataro Iwasaky în 1884, când închiriază de la
                            Guvernul Japonez Cartierele navale Nagasaki, punând
                            astfel bazele companiei de transport naval cu abur
                            "Nagasaki Shipyard & Machinery Works".
                        </p>
                        <p class="text-dark-blue">
                            În următoarele decenii, familia Iwasaki dezvoltă
                            afacerea și extinde aria de activitate, înființând
                            grupul de companii Mitsubishi Heavy Industries. Dupa
                            cel de-al doilea Razboi Mondial, Grupul Mitsubishi
                            Heavy Industries este dizolvat de noul guvern nipon,
                            apărând companii independente și activând în diverse
                            domenii de activitate, de la echipamente pentru
                            climatizare și industria aerospațială la nave
                            maritime de mari dimensiuni și autoturisme. Companii
                            cum sunt Mitsubishi Electric si Mitsubishi Motors
                            s-au desprins și și-au început propriul drum.
                        </p>
                        <a
                            class="font-black text-primary inline-flex items-center gap-4 group"
                            href="#"
                            >Vezi Detalii
                            <img
                                class="group-hover:rotate-45 transition-all duration-300 ease-out"
                                src="img/arrow-5.svg"
                                alt="arrow-5"
                        /></a>
                    </div>
                    <div class="relative">
                        <img
                            class="absolute top-0 right-0 h-[202px] md:h-auto w-full object-cover rounded-[10px]"
                            src="img/img-2.png"
                            alt="img-2"
                        />
                    </div>
                </div>
            </div>
        </section>
        <!-- [despre end] -->

        <!-- [footer sart] -->
        <section
            class="pt-[180px] pb-5 md:pt-[480px] md:pb-[30px] lg:pt-0 lg:pb-[100px] xl:py-[clamp(5rem,4.3421rem+2.6316vw,7.5rem)]"
        >
            <div class="container">
                <div class="bg-dark-blue pt-20 pb-[60px] rounded-[10px]">
                    <div class="max-w-[254px] mx-auto text-center">
                        <img src="img/footer-logo.png" alt="footer-logo" />
                        <div
                            class="pt-[clamp(2.8125rem,2.4013rem+1.6447vw,4.375rem)] pb-[clamp(2rem,1.6217rem+1.5132vw,3.4375rem)] flex items-center justify-center gap-4"
                        >
                            <a href="#">
                                <img
                                    class="hover:scale-110 hover:rotate-360 transition-all duration-300"
                                    src="img/yt-icon.svg"
                                    alt="icon"
                                />
                            </a>
                            <a href="#">
                                <img
                                    class="hover:scale-110 hover:rotate-360 transition-all duration-300"
                                    src="img/fb-icon.svg"
                                    alt="icon"
                                />
                            </a>
                            <a href="#">
                                <img
                                    class="hover:scale-110 hover:rotate-360 transition-all duration-300"
                                    src="img/linkedin-icon.svg"
                                    alt="icon"
                                />
                            </a>
                        </div>
                        <p class="text-gray">©2025 - ATX HVAC Distribution</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- [footer end] -->

        <!-- [js & plugins] -->
        <script src="js/vendor/swiper-bundle.min.js"></script>
        <script src="js/vendor/fancybox.umd.js"></script>
        <script src="js/app.js"></script>
    </body>
    <script>
        window.addEventListener("DOMContentLoaded", () => {
    Fancybox.bind("[data-fancybox]", {});

    // [1] navbar start

    const header = document.querySelector("#header");
    const hamburger = document.querySelector("#hamburger");
    const nav = document.querySelector("#main-nav");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 100) {
            header.classList.add("header-sticky");
        } else {
            header.classList.remove("header-sticky");
        }
    });

    hamburger.addEventListener("click", () => {
        nav.classList.toggle("hidden");
        nav.classList.toggle("flex");
    });

    window.addEventListener("click", (event) => {
        if (
            !event.target.closest("#main-nav") &&
            !event.target.closest("#hamburger")
        ) {
            nav.classList.add("hidden");
            nav.classList.remove("flex");
        }
    });

    // [1] navbar end

    // [2] hero slider start
    const swiper = new Swiper("#hero-slider", {});

    const buttons = document.querySelectorAll("#hero-button button");
    const infos = document.querySelectorAll("#hero-info [data-info]");

    const setActiveButton = (index) => {
        buttons.forEach((button, i) => {
            if (i === index) {
                button.classList.add("bg-primary", "i");
                button.querySelector("img").classList.add("invert");
                button.classList.remove("bg-white");
            } else {
                button.classList.remove("bg-primary", "i");
                button.querySelector("img").classList.remove("invert");
                button.classList.add("bg-white");
            }
        });

        infos.forEach((info, i) => {
            if (i === index) {
                info.classList.remove("hidden");
            } else {
                info.classList.add("hidden");
            }
        });
    };

    setActiveButton(0);

    buttons.forEach((button, i) => {
        button.addEventListener("click", () => {
            swiper.slideTo(i);
        });
    });

    swiper.on("slideChange", () => {
        setActiveButton(swiper.realIndex);
    });
    // [2] hero slider end

    // [3] tab start
    const tabButtons = document.querySelectorAll(".tab-btn");
    const tabContents = document.querySelectorAll(".tab-content");

    tabButtons.forEach((button) => {
        button.addEventListener("click", () => {
            tabContents.forEach((content) => content.classList.remove("block"));
            tabContents.forEach((content) => content.classList.add("hidden"));

            tabButtons.forEach((btn) => btn.classList.remove("tab-active"));
            button.classList.add("tab-active");

            document
                .getElementById(button.dataset.tab)
                .classList.remove("hidden");
            document.getElementById(button.dataset.tab).classList.add("block");
        });
    });
    // [3] tab end
});
    </script>
</html>
