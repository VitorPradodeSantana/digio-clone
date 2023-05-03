<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbarColor">
            <div class="d-flex justify-content-between container containerProprio">
                <div>
                    <a class="navbar-brand" href="#">
                        <img src="./src/digio-logo-0-2.png" width="120px" height="120px" />
                    </a>
                </div>
                <div id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown pe-4">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                para você
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown pe-4">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                o digio
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown pe-4">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Simulação créditos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link" href="#">duvidas</a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link" href="#">negocie</a>
                        </li>
                        <li class="nav-item pe-4">
                            <a class="nav-link" href="#">blog</a>
                        </li>
                    </ul>
                </div>
                <div class="me-3">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#" class="btn-header">
                                <span>
                                    Simule seu Impréstimo
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://static.digio.com.br/media/banner_digio_fgts_v2_desktop_680f3e9e0b.png"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://static.digio.com.br/media/Header_Home_2161x910_d13d5a893d.png"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://static.digio.com.br/media/Grana_Extra_Banner_Site_DESKTOP_d82d26dcf5.jpg"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <section id="cards">
            <div class="container">
                <div class="row card-body">
                    <div class="col cardImg">
                        <p>Sua conta digital sem complicações!</p>
                        <div class="btn-box">
                            <a href="#" class="btn-card">Ative sua conta</a>
                        </div>
                    </div>
                    <div class="col cardImg segunda-imagem">
                        <p>Aproveite muito o descontinho</p>
                        <div class="btn-box">
                            <a href="#" class="btn-card">Ver descontos</a>
                        </div>
                    </div>
                    <div class="col cardImg terceira-imagem">
                        <div></div>
                        <div>
                            <p>Dinheiro de volta? Aqui tem Cashback</p>
                            <div class="btn-box">
                                <a href="#" class="btn-card">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="servicos" class="container">
            <p>
                <span>
                    para você
                </span>
            </p>
            <h2>
                Conheça alguns produtos do Digio:
            </h2>
            <div class="row align-items-start">
                <div class="col">
                    <div class="servico-box">
                        <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24" class="icone-servicos">
                            <svg viewBox="0 0 37 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28.521 36.753c-.28 0-.467.187-.467.468v7.389c0 1.31-.795 2.432-1.777 2.432H3.641c-.982 0-1.777-1.076-1.777-2.432v-2.993h22.634c.281 0 .468-.187.468-.468 0-.28-.187-.467-.468-.467H1.865V6.917h26.189v1.637c0 .28.187.467.467.467s.468-.187.468-.467V3.597c0-.889-.28-1.684-.748-2.339-.515-.608-1.216-.982-1.965-.982H3.642C2.146.276.93 1.773.93 3.643v41.014c0 1.824 1.216 3.367 2.712 3.367h22.634c1.497 0 2.713-1.497 2.713-3.367V37.22a.503.503 0 0 0-.468-.468ZM3.642 1.212h22.634c.468 0 .889.234 1.216.654.374.468.562 1.076.562 1.73v2.339H1.865V3.597c0-1.31.795-2.385 1.777-2.385Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M13.229 4.111h3.414c.28 0 .467-.187.467-.468 0-.28-.187-.467-.467-.467h-3.414c-.28 0-.468.187-.468.467 0 .281.234.468.468.468ZM13.042 44.423c0 1.075.842 1.917 1.917 1.917a1.896 1.896 0 0 0 1.918-1.917 1.896 1.896 0 0 0-1.918-1.918 1.896 1.896 0 0 0-1.917 1.918Zm2.9 0c0 .561-.421.982-.983.982a.959.959 0 0 1-.982-.982c0-.561.421-.982.982-.982.515 0 .982.467.982.982ZM26.043 19.59a.54.54 0 0 0-.561.562.54.54 0 0 0 .56.56.54.54 0 0 0 .562-.56.54.54 0 0 0-.561-.562ZM17.204 20.713a.561.561 0 1 0 0-1.122.561.561 0 0 0 0 1.122ZM14.725 18a.369.369 0 0 0-.374.375v2.15c-.467-.467-1.169-.794-1.87-.794a2.615 2.615 0 0 0-2.62 2.619c0 1.45 1.17 2.618 2.62 2.618.748 0 1.403-.28 1.87-.795v.421c0 .234.187.374.374.374a.369.369 0 0 0 .375-.374v-6.173c0-.233-.14-.42-.375-.42Zm-2.244 6.267a1.876 1.876 0 0 1-1.87-1.87c0-1.03.84-1.871 1.87-1.871 1.028 0 1.87.841 1.87 1.87 0 1.076-.842 1.871-1.87 1.871ZM17.204 21.274a.369.369 0 0 0-.374.374v2.993c0 .234.187.374.374.374a.369.369 0 0 0 .374-.374v-2.993a.402.402 0 0 0-.374-.374ZM26.043 21.274a.369.369 0 0 0-.374.374v2.993c0 .234.187.374.374.374a.402.402 0 0 0 .374-.374v-2.993a.369.369 0 0 0-.374-.374ZM30.439 19.73a2.615 2.615 0 0 0-2.62 2.62c0 1.45 1.17 2.618 2.62 2.618 1.45 0 2.665-1.169 2.665-2.618-.047-1.403-1.216-2.62-2.665-2.62Zm0 4.537a1.876 1.876 0 0 1-1.871-1.87c0-1.03.842-1.871 1.87-1.871 1.03 0 1.871.841 1.871 1.87 0 1.03-.842 1.871-1.87 1.871ZM24.172 20.152a.369.369 0 0 0-.374-.375h-2.245a2.615 2.615 0 0 0-2.619 2.62c0 1.45 1.17 2.618 2.62 2.618.56 0 1.122-.187 1.542-.514.234.327.375.795.328 1.262-.094.936-.842 1.684-1.777 1.73a1.889 1.889 0 0 1-1.964-1.59c-.047-.186-.188-.327-.375-.327-.233 0-.42.187-.374.421a2.597 2.597 0 0 0 2.666 2.198c1.356-.047 2.525-1.169 2.572-2.525a2.493 2.493 0 0 0-.561-1.73c.327-.468.561-.983.561-1.59 0-.749-.28-1.403-.795-1.871h.42c.235.047.375-.14.375-.327Zm-.748 2.244c0 1.03-.842 1.87-1.87 1.87a1.876 1.876 0 0 1-1.871-1.87c0-1.029.841-1.87 1.87-1.87 1.029 0 1.87.841 1.87 1.87Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M33.525 12.201H9.675a3.233 3.233 0 0 0-3.227 3.227V30.02a3.233 3.233 0 0 0 3.227 3.227h23.803a3.233 3.233 0 0 0 3.227-3.227V15.43c.047-1.778-1.403-3.228-3.18-3.228Zm2.292 17.818a2.295 2.295 0 0 1-2.292 2.292H9.675a2.295 2.295 0 0 1-2.292-2.292V15.43a2.295 2.295 0 0 1 2.292-2.292h23.803a2.295 2.295 0 0 1 2.292 2.291V30.02h.047Z"
                                    fill="currentColor"></path>
                            </svg>
                        </svg>
                        <h4>Conta Digio</h4>
                        <p>Conta 100% digital com tudo o que você precisa.</p>
                        <a href="#">Saiba Mais</a>
                    </div>
                </div>
                <div class="col">
                    <div class="servico-box">
                        <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24" class="icone-servicos">
                            <svg viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M27.177 25.617a.46.46 0 0 1-.318-.79c.1-.097.2-.198.298-.304l.675-.742a.459.459 0 1 1 .68.618l-.68.749c-.115.122-.225.233-.335.34a.46.46 0 0 1-.32.129Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M3.571 31.91a1.174 1.174 0 0 1-1.034-.607c-1.01-1.92-1.539-4.227-1.618-7.05a2.144 2.144 0 0 1 .995-1.86c.3-.204.57-.45.802-.728.07-.077.142-.156.22-.238a9.537 9.537 0 0 1 6.085-3.047 16.365 16.365 0 0 1 3.496.102c.697.112 1.38.296 2.04.55a3.545 3.545 0 0 0 1.536.185 4.126 4.126 0 0 0 1.491-.473 24.807 24.807 0 0 1 5.127-2.017 1.918 1.918 0 0 1 2.36 1.444 1.92 1.92 0 0 1-.97 2.096l-5.943 3.182a.06.06 0 0 0-.033.032.06.06 0 0 0 0 .047.063.063 0 0 0 .023.043.064.064 0 0 0 .047.014h.075c2.21.026 4.384-.56 6.282-1.693a11.126 11.126 0 0 0 4.118-4.614c1.691-3.381 3.182-3.532 3.347-3.538a.918.918 0 0 1 .69.225c.212.202.34.478.359.77a9.507 9.507 0 0 1-.873 4.235 15.25 15.25 0 0 1-1.436 2.67.46.46 0 0 1-.763-.512c.532-.79.984-1.63 1.35-2.51a8.624 8.624 0 0 0 .806-3.821.296.296 0 0 0-.05-.141l-.049.002c.008 0-1.13.175-2.558 3.03a12.043 12.043 0 0 1-4.465 4.99 12.891 12.891 0 0 1-6.757 1.826h-.08a.993.993 0 0 1-.465-1.866l5.944-3.18a1 1 0 0 0 .403-1.363 1 1 0 0 0-1.124-.477 23.902 23.902 0 0 0-4.938 1.942 5.04 5.04 0 0 1-1.838.574 4.458 4.458 0 0 1-1.936-.237 9.229 9.229 0 0 0-1.845-.505 15.398 15.398 0 0 0-3.297-.097 8.619 8.619 0 0 0-5.491 2.763c-.074.078-.142.153-.209.226a4.764 4.764 0 0 1-.98.879 1.23 1.23 0 0 0-.577 1.064c.075 2.68.57 4.855 1.512 6.648a.263.263 0 0 0 .299.101c.135-.055.288-.13.564-.271.217-.11 5.358-2.665 13.08-1.021.96.19 1.955.11 2.871-.233.092-.032.15-.052.207-.079a.457.457 0 0 1 .616.22.46.46 0 0 1-.228.613c-.085.04-.17.07-.251.099a6.214 6.214 0 0 1-3.406.278c-7.386-1.574-12.421.916-12.471.941-.308.158-.482.241-.633.303-.135.055-.28.084-.427.083Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M23.541 28.675a.459.459 0 0 1-.256-.841c.342-.23.7-.49 1.094-.796a.46.46 0 0 1 .564.724c-.41.322-.786.593-1.146.834a.456.456 0 0 1-.256.08ZM16.458 15.239a7.574 7.574 0 1 1 7.575-7.575 7.58 7.58 0 0 1-7.575 7.575Zm0-14.229a6.655 6.655 0 1 0 6.656 6.654 6.662 6.662 0 0 0-6.656-6.654Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M16.458 8.124A2.337 2.337 0 0 1 14.027 5.9c-.002-.181.022-.361.07-.535.023-.09.056-.179.098-.262a2.503 2.503 0 0 1 4.543.035.46.46 0 1 1-.855.338 1.587 1.587 0 0 0-2.849 0 .67.67 0 0 0-.05.125c-.027.097-.04.198-.038.299a1.424 1.424 0 0 0 1.512 1.304.46.46 0 1 1 0 .919Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M16.458 11.659a2.431 2.431 0 0 1-2.28-1.47.46.46 0 0 1 .856-.338 1.587 1.587 0 0 0 2.85 0 .66.66 0 0 0 .049-.125c.027-.097.04-.198.038-.299a1.425 1.425 0 0 0-1.513-1.304.46.46 0 1 1 0-.92 2.338 2.338 0 0 1 2.432 2.224c.002.18-.022.36-.069.533a1.33 1.33 0 0 1-.099.264 2.416 2.416 0 0 1-2.264 1.435Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M16.458 12.281a.46.46 0 0 1-.46-.46V3.509a.46.46 0 1 1 .92 0v8.316a.46.46 0 0 1-.46.457Z"
                                    fill="currentColor"></path>
                            </svg>
                        </svg>
                        <h4>Pix</h4>
                        <p>Faça pagamentos e transferências gratuitas em segundos, 24 horas, todos os dias.</p>
                        <a href="#">Saiba Mais</a>
                    </div>
                </div>
                <div class="col">
                    <div class="servico-box">
                        <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24" class="icone-servicos">
                            <svg viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.501 26.19a.847.847 0 0 1-.847-.847V24.07a.847.847 0 0 1 1.694 0v1.273c0 .468-.38.847-.847.847Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M20.925 24.496H17.96a.847.847 0 0 1 0-1.695h2.965c.701 0 1.27-.57 1.27-1.27 0-.7-.569-1.271-1.27-1.271h-.847a2.968 2.968 0 0 1-2.965-2.965 2.968 2.968 0 0 1 2.965-2.965h2.965a.847.847 0 0 1 0 1.694h-2.965c-.702 0-1.271.571-1.271 1.27 0 .7.57 1.272 1.27 1.272h.848a2.968 2.968 0 0 1 2.965 2.965 2.968 2.968 0 0 1-2.965 2.965Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M20.501 15.602a.847.847 0 0 1-.847-.847v-1.272a.847.847 0 0 1 1.694 0v1.272c0 .468-.38.847-.847.847Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M20.501 29.579c-5.606 0-10.166-4.56-10.166-10.166 0-5.607 4.56-10.166 10.166-10.166 5.607 0 10.166 4.56 10.166 10.166 0 5.606-4.56 10.166-10.166 10.166Zm0-18.638c-4.671 0-8.471 3.8-8.471 8.472 0 4.671 3.8 8.471 8.471 8.471s8.472-3.8 8.472-8.471-3.8-8.472-8.472-8.472ZM20.501 38.05a.847.847 0 0 1 0-1.694c9.343 0 16.943-7.6 16.943-16.943a.848.848 0 0 1 1.695 0c0 10.276-8.362 18.637-18.638 18.637Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M37.292 14.415a.85.85 0 0 1-.802-.57A16.925 16.925 0 0 0 20.501 2.47c-3.856 0-7.468 1.265-10.449 3.658a.848.848 0 1 1-1.06-1.32C12.275 2.17 16.255.775 20.502.775c7.929 0 14.999 5.03 17.591 12.515a.85.85 0 0 1-.801 1.125ZM14.571 37.017a.86.86 0 0 1-.281-.048C6.859 34.363 1.864 27.31 1.864 19.413c0-3.761 1.118-7.372 3.233-10.442a.846.846 0 1 1 1.394.959 16.657 16.657 0 0 0-2.933 9.483c0 7.177 4.54 13.59 11.294 15.957a.847.847 0 0 1-.28 1.647ZM23.043 41.439a.85.85 0 0 1-.6-.248l-3.389-3.388a.848.848 0 0 1 0-1.198l3.389-3.389a.848.848 0 0 1 1.198 1.198l-2.79 2.789 2.79 2.789a.848.848 0 0 1-.598 1.447Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M7.242 14.33a.848.848 0 0 1-.819-.627L5.327 9.611l-4.092 1.096a.853.853 0 0 1-1.037-.6.847.847 0 0 1 .6-1.036l4.91-1.315a.852.852 0 0 1 1.037.598l1.315 4.909a.847.847 0 0 1-.818 1.067ZM37.444 15.343a.838.838 0 0 1-.423-.114l-4.402-2.541a.847.847 0 1 1 .847-1.467l3.668 2.118 2.118-3.669a.846.846 0 1 1 1.467.848l-2.541 4.401a.85.85 0 0 1-.734.424Z"
                                    fill="currentColor"></path>
                            </svg>
                        </svg>
                        <h4>Cashback</h4>
                        <p>Receba de volta parte do valor das suas compras em lojas online parceiras como crédito na
                            fatura ou saldo na conta Digio.</p>
                        <a href="#">Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <div class="servico-box">
                        <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24" class="icone-servicos">
                            <svg viewBox="0 0 39 34" x="0" y="0" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="13.1" cy="31.4" r="2.6" fill="currentColor"></circle>
                                <path d="M22.1 28.7c-1.5 0-2.6 1.2-2.6 2.6s1.2 2.6 2.6 2.6c1.5 0 2.6-1.2 2.6-2.6s-1.2-2.6-2.6-2.6z" fill="currentColor"></path>
                                <path d="M38.5.7c-.2-.3-.6-.3-.8-.1l-2.6 1.8c-.1.1-.2.2-.2.3l-1.7 5.7v.1L33 9.8h-3.9c-.3 0-.6.3-.6.6s.3.6.6.6h3.8l-1.3 14.4H5.5L1.8 11h4.5c.3 0 .6-.3.6-.6s-.3-.6-.7-.6H1c-.2 0-.4.1-.5.2-.1.1-.2.3-.1.5l4 15.6c.1.3.3.5.6.5h26.5l-.4 4.2h-3.6c-.3 0-.6.3-.6.6s.3.6.6.6h4.1c.3 0 .6-.2.6-.5l.5-5.4 1.5-17.4 1.6-5.5 2.4-1.7c.4-.2.5-.6.3-.8z" fill="currentColor"></path>
                                <path d="M17.7 19c5.1 0 9.3-4.2 9.3-9.3S22.8.4 17.7.4 8.4 4.6 8.4 9.7s4.2 9.3 9.3 9.3zm0-17.4c4.5 0 8.1 3.6 8.1 8.1s-3.6 8.1-8.1 8.1-8.1-3.6-8.1-8.1 3.7-8.1 8.1-8.1z" fill="currentColor"></path>
                                <path d="M17.7 13c-.8 0-1.4-.6-1.4-1.4 0-.3-.3-.6-.6-.6s-.6.3-.6.6c0 1.2.8 2.2 2 2.5v.4c0 .3.3.6.6.6s.6-.3.6-.6v-.4c1.1-.3 2-1.3 2-2.5 0-1.4-1.2-2.6-2.6-2.6-.8 0-1.4-.6-1.4-1.4s.6-1.4 1.4-1.4 1.4.6 1.4 1.4c0 .3.3.6.6.6s.6-.3.6-.6c0-1.2-.8-2.2-2-2.5v-.4c0-.3-.3-.6-.6-.6s-.6.3-.6.6v.4c-1.1.3-2 1.3-2 2.5 0 1.4 1.2 2.6 2.6 2.6.8 0 1.4.6 1.4 1.4s-.6 1.4-1.4 1.4z" fill="currentColor"></path>
                            </svg>
                        </svg>
                        <h4>Descontinho</h4>
                        <p>Descontos exclusivos de até 90% em mais de 1,4 mil parceiros.</p>
                        <a href="#">Saiba Mais</a>
                    </div>
                </div>
                <div class="col">
                    <div class="servico-box">
                        <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24" class="icone-servicos">
                            <svg viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 69 49" xml:space="preserve">
                                <path
                                    d="M68.3 30.8 59.2 7.4c-.1-.2-.2-.3-.4-.4-.1-.1-.3-.1-.5 0L41 14.1c0-.1 0-.1-.1-.2-.2-.4-5.5-9.5-7-11.6-1.5-2-4.1-2-6.3-2H1C.6.3.3.6.3 1c0 .4.3.7.7.8h26.6c2 0 4 0 5.1 1.4 1.5 2 6.8 11.1 7 11.4l-1.3.5c-.4.1-.5.5-.4.9s.5.5.9.4l19.2-7.8 8.5 22-38.8 15.9-6.2-16.4c-.1-.4-.5-.5-.9-.4-.4.1-.5.5-.4.9l6.5 17.1c.1.2.2.3.4.4.1.1.2.1.3.1h.3l40.1-16.5c.4-.1.5-.5.4-.9z"
                                    fill="currentColor"></path>
                                <path
                                    d="M33.9 28.6c-1.3.6-1.9 2.1-1.4 3.3.2.6.7 1.1 1.3 1.4.3.1.7.2 1 .2.4 0 .7 0 .9-.2 1.3-.6 1.9-2 1.4-3.3-.2-.6-.7-1.1-1.3-1.4-.6-.3-1.3-.3-1.9 0zm1.4 1.4c.3.1.5.3.6.6.3.7-.1 1.3-.6 1.5-.2.1-.5.1-.8 0-.3-.1-.5-.3-.6-.6-.3-.5 0-1.2.6-1.5.1-.1.3-.1.4-.1.1 0 .3 0 .4.1zM38.9 26.3c.3.9 1 1.5 1.8 1.9.8.4 1.7.4 2.6 0 .4-.2.9-.2 1.4 0s.9.6 1.1 1.1c.4 1-.1 2.1-1.1 2.6-.4.2-.9.2-1.4 0-.5-.2-.9-.6-1.1-1.1-.1-.3-.5-.5-.9-.4-.3.1-.5.5-.4.9.3.8.9 1.5 1.8 1.9.4.2.8.3 1.2.3.2 0 .4 0 .6-.1l.3.7c.1.2.3.4.6.4h.3c.4-.1.5-.5.4-.9l-.3-.8c1.2-.9 1.7-2.5 1.2-4-.3-.8-.9-1.5-1.8-1.9-.8-.4-1.7-.4-2.5 0-.5.2-1 .2-1.5 0s-.8-.6-1-1.1c-.4-1.1.1-2.2 1.1-2.6.5-.2 1-.2 1.5 0s.8.6 1 1.1c.1.3.5.5.9.4.3-.1.5-.5.4-.9-.3-.9-1-1.5-1.8-1.9-.6-.2-1.2-.3-1.9-.2l-.2-.7c-.1-.3-.5-.5-.9-.4-.3.1-.5.5-.4.9l.2.7c-1.2.9-1.7 2.6-1.2 4.1zM50.4 26.6c.3.1.7.2 1 .2.3 0 .6 0 1-.3 1.3-.6 1.9-2 1.4-3.3-.3-.6-.7-1-1.3-1.3-.6-.3-1.3-.3-1.9 0-1.3.6-1.9 2-1.4 3.3.2.6.6 1.1 1.2 1.4zm.7-3.3c.2-.1.3-.1.4-.1s.2 0 .4.1c.3.1.5.3.6.6.3.7-.1 1.3-.6 1.5-.3.1-.6.1-.9 0-.2-.1-.4-.3-.5-.6-.3-.7.1-1.3.6-1.5zM36.6 22.1c0-2.7-2.2-4.9-4.8-4.9H22c.3-2.3 2.2-4 4.5-4 .4 0 .7-.3.7-.7 0-.4-.3-.7-.7-.7-3.3 0-6 2.7-6 6.1 0 .4.3.7.7.7h10.7c1.9 0 3.4 1.6 3.4 3.5s-1.5 3.5-3.4 3.5H18.2c-2.7 0-5.9 0-8-4.3-2.1-4.8-8.6-7.3-8.9-7.4-.4-.1-.8 0-.9.4-.1.4 0 .8.4.9 0 .1 6.2 2.4 8.1 6.7 2.5 5.1 6.5 5.1 9.2 5.1h13.7c2.6 0 4.8-2.2 4.8-4.9z"
                                    fill="currentColor"></path>
                            </svg>
                        </svg>
                        <h4>Empréstimos</h4>
                        <p>Empréstimo pessoal do Digio, com contratação 100% digital e sem burocracia.</p>
                        <a href="#">Saiba Mais</a>
                    </div>
                </div>
                <div class="col">
                    <div class="servico-box">
                        <svg focusable="false" aria-hidden="true" viewBox="0 0 24 24" class="icone-servicos">
                            <svg viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.501 26.19a.847.847 0 0 1-.847-.847V24.07a.847.847 0 0 1 1.694 0v1.273c0 .468-.38.847-.847.847Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M20.925 24.496H17.96a.847.847 0 0 1 0-1.695h2.965c.701 0 1.27-.57 1.27-1.27 0-.7-.569-1.271-1.27-1.271h-.847a2.968 2.968 0 0 1-2.965-2.965 2.968 2.968 0 0 1 2.965-2.965h2.965a.847.847 0 0 1 0 1.694h-2.965c-.702 0-1.271.571-1.271 1.27 0 .7.57 1.272 1.27 1.272h.848a2.968 2.968 0 0 1 2.965 2.965 2.968 2.968 0 0 1-2.965 2.965Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M20.501 15.602a.847.847 0 0 1-.847-.847v-1.272a.847.847 0 0 1 1.694 0v1.272c0 .468-.38.847-.847.847Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M20.501 29.579c-5.606 0-10.166-4.56-10.166-10.166 0-5.607 4.56-10.166 10.166-10.166 5.607 0 10.166 4.56 10.166 10.166 0 5.606-4.56 10.166-10.166 10.166Zm0-18.638c-4.671 0-8.471 3.8-8.471 8.472 0 4.671 3.8 8.471 8.471 8.471s8.472-3.8 8.472-8.471-3.8-8.472-8.472-8.472ZM20.501 38.05a.847.847 0 0 1 0-1.694c9.343 0 16.943-7.6 16.943-16.943a.848.848 0 0 1 1.695 0c0 10.276-8.362 18.637-18.638 18.637Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M37.292 14.415a.85.85 0 0 1-.802-.57A16.925 16.925 0 0 0 20.501 2.47c-3.856 0-7.468 1.265-10.449 3.658a.848.848 0 1 1-1.06-1.32C12.275 2.17 16.255.775 20.502.775c7.929 0 14.999 5.03 17.591 12.515a.85.85 0 0 1-.801 1.125ZM14.571 37.017a.86.86 0 0 1-.281-.048C6.859 34.363 1.864 27.31 1.864 19.413c0-3.761 1.118-7.372 3.233-10.442a.846.846 0 1 1 1.394.959 16.657 16.657 0 0 0-2.933 9.483c0 7.177 4.54 13.59 11.294 15.957a.847.847 0 0 1-.28 1.647ZM23.043 41.439a.85.85 0 0 1-.6-.248l-3.389-3.388a.848.848 0 0 1 0-1.198l3.389-3.389a.848.848 0 0 1 1.198 1.198l-2.79 2.789 2.79 2.789a.848.848 0 0 1-.598 1.447Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M7.242 14.33a.848.848 0 0 1-.819-.627L5.327 9.611l-4.092 1.096a.853.853 0 0 1-1.037-.6.847.847 0 0 1 .6-1.036l4.91-1.315a.852.852 0 0 1 1.037.598l1.315 4.909a.847.847 0 0 1-.818 1.067ZM37.444 15.343a.838.838 0 0 1-.423-.114l-4.402-2.541a.847.847 0 1 1 .847-1.467l3.668 2.118 2.118-3.669a.846.846 0 1 1 1.467.848l-2.541 4.401a.85.85 0 0 1-.734.424Z"
                                    fill="currentColor"></path>
                            </svg>
                        </svg>
                        <h4>Cashback</h4>
                        <p>Receba de volta parte do valor das suas compras em lojas online parceiras como crédito na
                            fatura ou saldo na conta Digio.</p>
                        <a href="#">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <script>
    </script>
</body>

</html>