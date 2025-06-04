<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Copyright" content="Inazuma" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Ranyeh" />
    <meta name="rating" content="general" />
    <meta name="language" content="English" />
    <meta name="application-name" content="Inazuma" />
    <meta name="description" content="Tailwind CSS Company Landing Page Template by Ranyeh." />
    <meta name="keywords" content="company" />
    <meta name="twitter:title" content="Inazuma | Tailwind CSS Company Landing Page" />
    <meta name="twitter:description" content="Tailwind CSS Company Landing Page Template by Ranyeh." />
    <meta name="twitter:image" content="./assets/img/inazuma-cover.png" />
    <meta content="Inazuma | Tailwind CSS Company Landing Page" property="og:title" />
    <meta content="Inazuma" property="og:site_name" />
    <meta content="Tailwind CSS Company Landing Page Template by Ranyeh." property="og:description" />
    <meta content="./assets/img/inazuma-cover.png" property="og:image" />
    <meta content="https://ranyeh24.github.io/inazuma-tailwind" property="og:url" />
    <meta content="website" property="og:type" />

    <meta name="msapplication-TileColor" content="#3d63dd" />
    <meta name="msapplication-TileImage" content="./assets/favicon/mstile-144x144.png" />
    <meta name="theme-color" content="#3d63dd" />

    <!-- Page title -->
    <title>Eklase jopcik</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Canonical -->
    <link rel="canonical" href="https://ranyeh24.github.io/inazuma-tailwind" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="194x194" href="./assets/favicon/favicon-194x194.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="./assets/favicon/android-chrome-192x192.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png" />
    <link rel="manifest" href="./assets/favicon/site.webmanifest.json" />
    <link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#3d63dd" />

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />

    <link rel="stylesheet" href="./assets/css/main.css" />
</head>

<body>
    <!-- Page loading -->
    <div class="page-loading fixed top-0 bottom-0 left-0 right-0 z-[99999] flex items-center justify-center bg-primary-light-1 dark:bg-primary-dark-1 opacity-100 visible pointer-events-auto"
        role="status" aria-live="polite" aria-atomic="true" aria-label="Loading...">
        <div class="grid-loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Navbar -->
    <header class="ic-navbar absolute left-0 top-0 z-40 flex w-full items-center bg-transparent" role="banner"
        aria-label="Navigation bar">
        <div class="container">
            <div class="ic-navbar-container relative -mx-5 flex items-center justify-between">
                <div class="w-60 lg:w-56 max-w-full px-5">
                    <a href="." class="ic-navbar-logo block w-full py-5 text-primary-color">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="80" height="33" viewBox="0 0 80 33"
                            fill="none">
                            <g clip-path="url(#clip0_66_1925)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M27.2719 32.9459H25.9332L22.97 28.6259C21.9885 29.5869 21.3766 30.1985 21.1122 30.4843V32.9459H20.0046V23.6875H21.1122V28.9302L26.3926 23.6875H27.454V24.1381L27.3604 24.2517L23.7891 27.8143L27.2719 32.9459Z"
                                    fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M35.6118 32.9459H28.1411V23.6875H29.2684V31.8461H35.6118V32.9459Z" fill="white">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M37.4107 27.8381H42.6654V27.3152C42.6654 26.6479 42.4035 26.0443 41.8655 25.4712C41.296 25.07 40.7076 24.86 40.1167 24.8473C39.2412 24.8482 38.5681 25.1331 38.0588 25.7186C37.623 26.221 37.4107 26.8286 37.4107 27.5756V27.8381ZM43.7729 32.947H42.6654V28.9171H37.4311V32.947H36.2976L36.3031 27.5552C36.3031 26.4225 36.6671 25.4834 37.3859 24.7645C37.826 24.3082 38.4895 23.9832 39.3544 23.8018C39.4343 23.773 39.6065 23.7455 40.2713 23.7285C40.9537 23.7796 41.572 23.9764 42.1424 24.3148C43.229 25.0315 43.7729 26.0517 43.7729 27.3551V32.947Z"
                                    fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M49.5277 32.9471H44.4592V31.8885H48.8415C49.6632 31.8885 49.8853 31.798 49.934 31.7701C50.5186 31.4881 50.7813 31.025 50.7813 30.3022C50.7813 30.0894 50.6916 29.808 50.5143 29.4659C50.3664 29.2246 50.1071 29.0365 49.7328 28.909L49.4016 28.8573H46.7204C46.1756 28.8573 45.6428 28.5958 45.1365 28.0799C44.7058 27.5206 44.5003 26.9632 44.5003 26.3932V26.2927C44.5003 25.4287 44.8532 24.7109 45.5492 24.1594C46.059 23.8524 46.5764 23.709 47.1229 23.709H51.9086V24.788H47.487C46.7444 24.788 46.4764 24.8838 46.3829 24.9411C45.8573 25.2273 45.6087 25.6735 45.6087 26.3127C45.6087 26.9071 45.8774 27.3501 46.4295 27.6662C46.6982 27.7586 46.8674 27.7783 46.9631 27.7783H49.7311C50.0717 27.7783 50.4677 27.9337 50.9416 28.2537L50.977 28.2816C51.5816 28.8268 51.888 29.5272 51.888 30.3633C51.888 31.3755 51.4483 32.1484 50.581 32.661C50.1767 32.8551 49.8306 32.9471 49.5277 32.9471Z"
                                    fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M60.0662 32.9459H57.1803C55.9027 32.9459 54.7439 32.4136 53.7356 31.3635C53.3475 30.8732 53.0946 30.4603 52.9421 30.0776C52.7113 29.4043 52.5972 28.8169 52.5972 28.3166C52.5972 27.6831 52.7695 26.9782 53.1095 26.2213C53.6548 25.2355 54.4243 24.5219 55.4087 24.0766C56.0399 23.8168 56.7001 23.6875 57.3811 23.6875H60.0662V24.8063H57.3205C56.1424 24.8063 55.1875 25.2848 54.402 26.269C54.0829 26.7126 53.8676 27.2303 53.7705 27.7971H58.0861V28.896H53.7736C53.8705 29.402 54.0679 29.8903 54.362 30.3526C54.7982 30.9462 55.34 31.3741 55.9608 31.6072C56.3368 31.7829 56.8474 31.8669 57.5025 31.8669H60.0662V32.9459Z"
                                    fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M66.5378 28.0077L66.3472 27.3997L66.8348 27.2146C69.5049 26.202 72.2656 25.1553 74.0213 23.2555C74.6101 22.6193 75.2224 21.8292 75.2997 20.7935C75.3937 19.4988 74.7058 18.588 74.0957 17.939C73.5243 17.3255 72.8338 16.7725 71.9832 16.247C67.0373 13.1857 60.0234 11.9508 53.8376 11.0335L53.6735 11.0092L53.3035 10.2871L53.8957 10.3527C60.7575 11.1124 68.5832 12.2941 74.6015 15.2981C76.4773 16.2359 78.4667 17.5026 79.0013 19.7873L79.0095 19.8594L79.0043 20.6531C78.7321 22.1511 77.707 23.1207 76.9593 23.7195C76.1714 24.352 75.1826 24.9349 73.8491 25.5542C71.7469 26.5264 69.2875 27.3518 66.5378 28.0077Z"
                                    fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.6066 27.9199C9.14327 27.3359 6.80864 26.5204 4.85455 25.5618C3.72568 25.0087 2.79043 24.425 1.99522 23.7776C1.30083 23.2107 0.347177 22.2924 0.0792535 20.8626L0.0737305 20.8043L0.082719 19.9673C0.645856 17.6355 2.70239 16.345 4.43111 15.4813C10.2658 12.5702 17.818 11.3839 25.1101 10.5357L25.3327 10.5098L25.6677 11.1637L25.2104 11.2176C20.5206 11.7692 16.0234 12.7332 12.2048 14.0053C10.0406 14.7257 8.27377 15.5266 6.803 16.4542C5.92408 17.0087 5.23402 17.5757 4.69438 18.1873C4.19914 18.7492 3.54071 19.6244 3.53724 20.7307C3.53562 21.5711 3.88249 22.3788 4.59821 23.1997C6.36722 25.2301 9.12746 26.2885 11.7972 27.3121L11.6066 27.9199Z"
                                    fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M39.5006 21.0741C38.1457 21.0741 36.8087 20.9223 35.5281 20.6227C33.8835 20.2403 32.3624 19.6279 31.007 18.8018C29.4867 17.8762 28.2511 16.7312 27.3341 15.3987C26.8341 14.6732 26.4377 13.8941 26.1557 13.083C25.8638 12.2413 25.6984 11.3676 25.663 10.4858L25.6501 10.1584L28.3232 10.1241L28.3181 10.4523C28.2981 11.7014 28.6583 12.9665 29.3602 14.1112C30.0195 15.1957 30.9968 16.1989 32.1863 17.0134C33.3088 17.7862 34.5975 18.3869 36.0174 18.7998C37.3796 19.1961 38.8148 19.4046 40.2847 19.4198L40.4577 19.4207C41.8798 19.4207 43.271 19.2402 44.5921 18.8846C46.0449 18.4942 47.3776 17.9069 48.5527 17.1385C49.8323 16.3009 50.8553 15.2926 51.5941 14.1418C52.3914 12.9076 52.8174 11.5195 52.8273 10.1266L53.4694 10.1133C53.5442 11.6427 53.16 13.1938 52.3584 14.5991C51.621 15.9071 50.5605 17.0762 49.2064 18.0728C47.969 18.9832 46.5509 19.7038 44.9916 20.215C43.5073 20.7024 41.931 20.9854 40.3073 21.0563C40.0391 21.0682 39.7698 21.0741 39.5006 21.0741Z"
                                    fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M52.9736 11.9426C52.8796 11.9426 52.7826 11.9193 52.6971 11.899C52.6694 11.8923 52.6442 11.8855 52.6253 11.8828L52.439 11.8614C52.2574 11.8412 52.0755 11.8207 51.899 11.7859C51.6622 11.7392 51.423 11.6939 51.1832 11.6516C50.6983 11.5655 50.2142 11.4867 49.7275 11.4138C48.7772 11.2732 47.7868 11.1482 46.7844 11.0424C44.877 10.8426 42.8747 10.7051 40.8335 10.6329C36.9504 10.4972 32.9113 10.5984 28.8461 10.934L28.7662 10.3018C32.8164 9.62444 36.8756 9.18502 40.8314 8.9954C42.9072 8.89705 44.933 8.86824 46.9399 8.91167C47.9577 8.93284 48.99 8.97713 50.0091 9.04334C50.2325 9.05818 50.4569 9.0743 50.6812 9.09214C50.512 8.36163 50.2202 7.65691 49.8121 6.99229C49.1511 5.90641 48.1739 4.90233 46.9856 4.08775C45.8598 3.31521 44.571 2.71455 43.155 2.30167C41.7885 1.90588 40.3512 1.69789 38.8838 1.68305L38.7078 1.68219C37.2952 1.68219 35.9052 1.86224 34.5777 2.21772C33.1253 2.60727 31.7939 3.19482 30.6193 3.96392C29.3409 4.79903 28.3179 5.80741 27.5783 6.96123C26.7797 8.19706 26.3538 9.58478 26.3447 10.9752L25.7026 10.9894C25.6244 9.46579 26.0076 7.91457 26.8109 6.50353C27.5411 5.21083 28.6316 4.00982 29.963 3.03111C31.1983 2.12098 32.6164 1.39981 34.1786 0.888044C35.6638 0.400568 37.2396 0.117005 38.8612 0.0453078C40.4755 -0.0271417 42.1001 0.120015 43.6434 0.478392C45.2893 0.862031 46.8105 1.47484 48.1649 2.30016C49.6865 3.22685 50.9214 4.37196 51.8357 5.70346C52.3356 6.42721 52.7322 7.20695 53.0138 8.01991C53.2035 8.56629 53.3415 9.13417 53.424 9.70732L53.4376 9.80224C53.4722 10.0417 53.5111 10.3131 53.5209 10.5874C53.5316 10.8944 53.5017 11.1565 53.4299 11.3881C53.4291 11.3948 53.4286 11.4127 53.4273 11.4308C53.4188 11.5448 53.3988 11.8118 53.1372 11.914C53.0838 11.9339 53.0317 11.9426 52.9736 11.9426Z"
                                    fill="white"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_66_1925">
                                    <rect width="80" height="33" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="flex w-full items-center justify-between px-5">
                    <div>
                        <button type="button"
                            class="ic-navbar-toggler absolute right-4 top-1/2 block -translate-y-1/2 rounded-md px-3 py-[6px] text-[22px]/none text-primary-color ring-primary focus:ring-2 lg:hidden"
                            data-web-toggle="navbar-collapse" data-web-target="navbarMenu" aria-expanded="false"
                            aria-label="Toggle navigation menu">
                            <i class="lni lni-menu"></i>
                        </button>


                        <nav id="navbarMenu"
                            class="ic-navbar-collapse absolute right-4 top-[80px] w-full max-w-[250px] rounded-lg hidden bg-primary-light-1 py-5 shadow-lg dark:bg-primary-dark-1 lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:shadow-none dark:lg:bg-transparent xl:px-6">
                            <ul class="block lg:flex gap-4" role="menu" aria-label="Navigation menu">
                                <li class="group relative">
                                    <a href="/" role="menuitem"
                                        class=" mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mx-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70 ">Home</a>
                                </li>
                                <?php if (Validator::Role('Teacher') || Validator::Role('Admin')): ?>
                                <li class="group relative">
                                    <a href="/students" role="menuitem"
                                        class=" mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mx-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70 ">Students</a>
                                </li>
                                <li class="group relative">
                                    <a href="/grades" role="menuitem"
                                        class=" mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mx-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70 ">Grades</a>
                                </li>
                                <li class="group relative">
                                    <a href="/subjects" role="menuitem"
                                        class=" mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mx-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70 ">Subjects</a>
                                    <?php endif; ?>
                                    <?php if (Validator::Role('Student')): ?>
                                <li class="group relative">
                                    <a href="/my-grades" role="menuitem"
                                        class=" mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mx-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70 ">My
                                        Grades</a>
                                </li>
                                <?php endif; ?>
                                <li class="group relative">
                                    <a href="/profile" role="menuitem"
                                        class=" mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mx-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70 ">Profile</a>
                                </li>
                                <li class="group relative">
                                    <a href="/logout" role="menuitem"
                                        class=" mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mx-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70 ">Logout</a>
                                </li>
                            </ul>
                        </nav>



                    </div>
                    <div class="flex items-center justify-end pr-[52px] lg:pr-0">
                        <button type="button" class="inline-flex items-center text-primary-color text-[24px]/none"
                            aria-label="Switch theme" data-web-trigger="web-theme"></button>
                        <div class="hidden sm:flex">
                            <a href="javascript:void(0)"
                                class="btn-navbar ml-5 px-6 py-3 rounded-md bg-primary-color bg-opacity-20 text-base font-medium text-primary-color hover:bg-opacity-100 hover:text-primary"
                                role="button"> poga</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="main relative">

        <section id="home"
            class="relative overflow-hidden bg-primary text-primary-color pt-[120px] md:pt-[130px] lg:pt-[160px]">
            <div class="container">
                <div class="-mx-5 flex flex-wrap items-center">
                    <div class="w-full px-5 min-h-[300px] lg:w-1/2 lg:min-h-[400px] pb-8">
                        <?= $content ?? '' ?>

                    </div>

                </div>
            </div>
        </section>


    </main>

    <!-- Footer -->
    <footer class="bg-primary-dark-2 text-white">
        <div class="container py-20 lg:py-[100px]">
            <div class="row">
                <div class="col-12 order-first lg:col-4">
                    <div class="w-full">
                        <a href="." class="inline-block mb-5">
                            <svg class="" xmlns="http://www.w3.org/2000/svg" width="80" height="33" viewBox="0 0 80 33"
                                fill="none">
                                <g clip-path="url(#clip0_66_1925)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M27.2719 32.9459H25.9332L22.97 28.6259C21.9885 29.5869 21.3766 30.1985 21.1122 30.4843V32.9459H20.0046V23.6875H21.1122V28.9302L26.3926 23.6875H27.454V24.1381L27.3604 24.2517L23.7891 27.8143L27.2719 32.9459Z"
                                        fill="white"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M35.6118 32.9459H28.1411V23.6875H29.2684V31.8461H35.6118V32.9459Z"
                                        fill="white">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M37.4107 27.8381H42.6654V27.3152C42.6654 26.6479 42.4035 26.0443 41.8655 25.4712C41.296 25.07 40.7076 24.86 40.1167 24.8473C39.2412 24.8482 38.5681 25.1331 38.0588 25.7186C37.623 26.221 37.4107 26.8286 37.4107 27.5756V27.8381ZM43.7729 32.947H42.6654V28.9171H37.4311V32.947H36.2976L36.3031 27.5552C36.3031 26.4225 36.6671 25.4834 37.3859 24.7645C37.826 24.3082 38.4895 23.9832 39.3544 23.8018C39.4343 23.773 39.6065 23.7455 40.2713 23.7285C40.9537 23.7796 41.572 23.9764 42.1424 24.3148C43.229 25.0315 43.7729 26.0517 43.7729 27.3551V32.947Z"
                                        fill="white"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M49.5277 32.9471H44.4592V31.8885H48.8415C49.6632 31.8885 49.8853 31.798 49.934 31.7701C50.5186 31.4881 50.7813 31.025 50.7813 30.3022C50.7813 30.0894 50.6916 29.808 50.5143 29.4659C50.3664 29.2246 50.1071 29.0365 49.7328 28.909L49.4016 28.8573H46.7204C46.1756 28.8573 45.6428 28.5958 45.1365 28.0799C44.7058 27.5206 44.5003 26.9632 44.5003 26.3932V26.2927C44.5003 25.4287 44.8532 24.7109 45.5492 24.1594C46.059 23.8524 46.5764 23.709 47.1229 23.709H51.9086V24.788H47.487C46.7444 24.788 46.4764 24.8838 46.3829 24.9411C45.8573 25.2273 45.6087 25.6735 45.6087 26.3127C45.6087 26.9071 45.8774 27.3501 46.4295 27.6662C46.6982 27.7586 46.8674 27.7783 46.9631 27.7783H49.7311C50.0717 27.7783 50.4677 27.9337 50.9416 28.2537L50.977 28.2816C51.5816 28.8268 51.888 29.5272 51.888 30.3633C51.888 31.3755 51.4483 32.1484 50.581 32.661C50.1767 32.8551 49.8306 32.9471 49.5277 32.9471Z"
                                        fill="white"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M60.0662 32.9459H57.1803C55.9027 32.9459 54.7439 32.4136 53.7356 31.3635C53.3475 30.8732 53.0946 30.4603 52.9421 30.0776C52.7113 29.4043 52.5972 28.8169 52.5972 28.3166C52.5972 27.6831 52.7695 26.9782 53.1095 26.2213C53.6548 25.2355 54.4243 24.5219 55.4087 24.0766C56.0399 23.8168 56.7001 23.6875 57.3811 23.6875H60.0662V24.8063H57.3205C56.1424 24.8063 55.1875 25.2848 54.402 26.269C54.0829 26.7126 53.8676 27.2303 53.7705 27.7971H58.0861V28.896H53.7736C53.8705 29.402 54.0679 29.8903 54.362 30.3526C54.7982 30.9462 55.34 31.3741 55.9608 31.6072C56.3368 31.7829 56.8474 31.8669 57.5025 31.8669H60.0662V32.9459Z"
                                        fill="white"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M66.5378 28.0077L66.3472 27.3997L66.8348 27.2146C69.5049 26.202 72.2656 25.1553 74.0213 23.2555C74.6101 22.6193 75.2224 21.8292 75.2997 20.7935C75.3937 19.4988 74.7058 18.588 74.0957 17.939C73.5243 17.3255 72.8338 16.7725 71.9832 16.247C67.0373 13.1857 60.0234 11.9508 53.8376 11.0335L53.6735 11.0092L53.3035 10.2871L53.8957 10.3527C60.7575 11.1124 68.5832 12.2941 74.6015 15.2981C76.4773 16.2359 78.4667 17.5026 79.0013 19.7873L79.0095 19.8594L79.0043 20.6531C78.7321 22.1511 77.707 23.1207 76.9593 23.7195C76.1714 24.352 75.1826 24.9349 73.8491 25.5542C71.7469 26.5264 69.2875 27.3518 66.5378 28.0077Z"
                                        fill="white"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.6066 27.9199C9.14327 27.3359 6.80864 26.5204 4.85455 25.5618C3.72568 25.0087 2.79043 24.425 1.99522 23.7776C1.30083 23.2107 0.347177 22.2924 0.0792535 20.8626L0.0737305 20.8043L0.082719 19.9673C0.645856 17.6355 2.70239 16.345 4.43111 15.4813C10.2658 12.5702 17.818 11.3839 25.1101 10.5357L25.3327 10.5098L25.6677 11.1637L25.2104 11.2176C20.5206 11.7692 16.0234 12.7332 12.2048 14.0053C10.0406 14.7257 8.27377 15.5266 6.803 16.4542C5.92408 17.0087 5.23402 17.5757 4.69438 18.1873C4.19914 18.7492 3.54071 19.6244 3.53724 20.7307C3.53562 21.5711 3.88249 22.3788 4.59821 23.1997C6.36722 25.2301 9.12746 26.2885 11.7972 27.3121L11.6066 27.9199Z"
                                        fill="white"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M39.5006 21.0741C38.1457 21.0741 36.8087 20.9223 35.5281 20.6227C33.8835 20.2403 32.3624 19.6279 31.007 18.8018C29.4867 17.8762 28.2511 16.7312 27.3341 15.3987C26.8341 14.6732 26.4377 13.8941 26.1557 13.083C25.8638 12.2413 25.6984 11.3676 25.663 10.4858L25.6501 10.1584L28.3232 10.1241L28.3181 10.4523C28.2981 11.7014 28.6583 12.9665 29.3602 14.1112C30.0195 15.1957 30.9968 16.1989 32.1863 17.0134C33.3088 17.7862 34.5975 18.3869 36.0174 18.7998C37.3796 19.1961 38.8148 19.4046 40.2847 19.4198L40.4577 19.4207C41.8798 19.4207 43.271 19.2402 44.5921 18.8846C46.0449 18.4942 47.3776 17.9069 48.5527 17.1385C49.8323 16.3009 50.8553 15.2926 51.5941 14.1418C52.3914 12.9076 52.8174 11.5195 52.8273 10.1266L53.4694 10.1133C53.5442 11.6427 53.16 13.1938 52.3584 14.5991C51.621 15.9071 50.5605 17.0762 49.2064 18.0728C47.969 18.9832 46.5509 19.7038 44.9916 20.215C43.5073 20.7024 41.931 20.9854 40.3073 21.0563C40.0391 21.0682 39.7698 21.0741 39.5006 21.0741Z"
                                        fill="white"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M52.9736 11.9426C52.8796 11.9426 52.7826 11.9193 52.6971 11.899C52.6694 11.8923 52.6442 11.8855 52.6253 11.8828L52.439 11.8614C52.2574 11.8412 52.0755 11.8207 51.899 11.7859C51.6622 11.7392 51.423 11.6939 51.1832 11.6516C50.6983 11.5655 50.2142 11.4867 49.7275 11.4138C48.7772 11.2732 47.7868 11.1482 46.7844 11.0424C44.877 10.8426 42.8747 10.7051 40.8335 10.6329C36.9504 10.4972 32.9113 10.5984 28.8461 10.934L28.7662 10.3018C32.8164 9.62444 36.8756 9.18502 40.8314 8.9954C42.9072 8.89705 44.933 8.86824 46.9399 8.91167C47.9577 8.93284 48.99 8.97713 50.0091 9.04334C50.2325 9.05818 50.4569 9.0743 50.6812 9.09214C50.512 8.36163 50.2202 7.65691 49.8121 6.99229C49.1511 5.90641 48.1739 4.90233 46.9856 4.08775C45.8598 3.31521 44.571 2.71455 43.155 2.30167C41.7885 1.90588 40.3512 1.69789 38.8838 1.68305L38.7078 1.68219C37.2952 1.68219 35.9052 1.86224 34.5777 2.21772C33.1253 2.60727 31.7939 3.19482 30.6193 3.96392C29.3409 4.79903 28.3179 5.80741 27.5783 6.96123C26.7797 8.19706 26.3538 9.58478 26.3447 10.9752L25.7026 10.9894C25.6244 9.46579 26.0076 7.91457 26.8109 6.50353C27.5411 5.21083 28.6316 4.00982 29.963 3.03111C31.1983 2.12098 32.6164 1.39981 34.1786 0.888044C35.6638 0.400568 37.2396 0.117005 38.8612 0.0453078C40.4755 -0.0271417 42.1001 0.120015 43.6434 0.478392C45.2893 0.862031 46.8105 1.47484 48.1649 2.30016C49.6865 3.22685 50.9214 4.37196 51.8357 5.70346C52.3356 6.42721 52.7322 7.20695 53.0138 8.01991C53.2035 8.56629 53.3415 9.13417 53.424 9.70732L53.4376 9.80224C53.4722 10.0417 53.5111 10.3131 53.5209 10.5874C53.5316 10.8944 53.5017 11.1565 53.4299 11.3881C53.4291 11.3948 53.4286 11.4127 53.4273 11.4308C53.4188 11.5448 53.3988 11.8118 53.1372 11.914C53.0838 11.9339 53.0317 11.9426 52.9736 11.9426Z"
                                        fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_66_1925">
                                        <rect width="80" height="33" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>

                        <p class="mb-8 text-body-dark-11">
                            yoyo
                        </p>

                        <div class="-mx-3 flex items-center">
                            <a href="javascript:void(0)"
                                class="px-3 text-body-dark-11 hover:text-primary text-[22px] leading-none">
                                <i class="lni lni-facebook-fill"></i>
                            </a>

                            <a href="javascript:void(0)"
                                class="px-3 text-body-dark-11 hover:text-primary text-[22px] leading-none">
                                <i class="lni lni-twitter-original"></i>
                            </a>

                            <a href="javascript:void(0)"
                                class="px-3 text-body-dark-11 hover:text-primary text-[22px] leading-none">
                                <i class="lni lni-instagram-original"></i>
                            </a>

                            <a href="javascript:void(0)"
                                class="px-3 text-body-dark-11 hover:text-primary text-[22px] leading-none">
                                <i class="lni lni-linkedin-original"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-6 lg:col-2">
                    <div class="w-full">
                        <h4 class="mb-9 text-lg font-semibold text-inherit">Solutions</h4>
                        <ul>
                            <li>
                                <a href="javascript:void(0)"
                                    class="mb-3 inline-block text-body-dark-11 hover:text-primary">Marketing</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="mb-3 inline-block text-body-dark-11 hover:text-primary">Analytics</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="mb-3 inline-block text-body-dark-11 hover:text-primary">Commerce</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="mb-3 inline-block text-body-dark-11 hover:text-primary">Insights</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 lg:col-2">
                    <div class="w-full">
                        <h4 class="mb-9 text-lg font-semibold text-inherit">Support</h4>
                        <ul>
                            <li>
                                <a href="javascript:void(0)"
                                    class="mb-3 inline-block text-body-dark-11 hover:text-primary">Pricing</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="mb-3 inline-block text-body-dark-11 hover:text-primary">Documentation</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="mb-3 inline-block text-body-dark-11 hover:text-primary">Guides</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="mb-3 inline-block text-body-dark-11 hover:text-primary">API Status</a>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="w-full border-t border-solid border-alpha-dark"></div>
        <div class="container py-8">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2">
                    <div class="my-1">
                        <div class="flex flex-wrap justify-center gap-x-3 md:justify-start">
                            <a href="javascript:void(0)" class="text-body-dark-11 hover:text-body-dark-12">No Privacy
                                Policy</a>
                            <a href="javascript:void(0)" class="text-body-dark-11 hover:text-body-dark-12">No Legal
                                Notices</a>
                            <a href="javascript:void(0)" class="text-body-dark-11 hover:text-body-dark-12">No Terms of
                                Service</a>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/2">
                    <div class="my-1 flex justify-center md:justify-end">
                        <p class="text-body-dark-11">
                            &#169; 2025 Koļa un Rūdis. All rights reserved. Distributed by <a
                                href="https://www.instagram.com/sandis_i/" target="_blank">Iesmiņš</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <button type="button"
        class="inline-flex w-12 h-12 rounded-md items-center justify-center text-lg/none bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10 fixed bottom-[117px] right-[20px] hover:-translate-y-1 opacity-100 visible z-50 is-hided"
        data-web-trigger="scroll-top" aria-label="Scroll to top">
        <i class="lni lni-chevron-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <script src="./assets/js/main.js"></script>
    <script>
    // Scroll Reveal
    const sr = ScrollReveal({
        origin: "bottom",
        distance: "16px",
        duration: 1000,
        reset: false,
    });

    sr.reveal(`.scroll-revealed`, {
        cleanup: true,
    });

    // GLightBox
    GLightbox({
        selector: ".video-popup",
        href: "https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM",
        type: "video",
        source: "youtube",
        width: 900,
        autoplayVideos: true,
    });

    const myGallery3 = GLightbox({
        selector: ".portfolio-box",
        type: "image",
        width: 900,
    });

    // Testimonial
    const testimonialSwiper = new Swiper(".testimonial-carousel", {
        slidesPerView: 1,
        spaceBetween: 30,

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1280: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
    </script>
</body>

</html>