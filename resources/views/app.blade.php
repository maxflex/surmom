<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reproductio</title>

	<meta name="description" content="">
	<meta name="author" content="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


	<link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

</head>
<body class="page-@yield('page')">
	<div
		class="main" id="app">

		<header
			class="header">
			<div
				class="header__inner">

				<div
					class="header__logo-wrapper">
                    <a class="header__logo-link" href="/">
                        <img src="/images/logo.png" />
                    </a>
                    <a href="/">
                        <div class="header__logo-title">
                            Reproductio
                        </div>
                    </a>
					<div
						class="header__title">
						Центр репродукции и <br>
						суррогатного материнства
					</div>
				</div>

				<div
					class="header__right">

					<div
						class="header__contacts">
						<div
							class="phone-container">
							+7 495 <b>123 45 67</b>
						</div>
						ПН-ПТ 10:00 - 20:00
					</div>

					<a
						href="/contacts"
						title="Записаться на прием"
						class="button">
						Записаться на прием
					</a>

				</div>

			</div>
		</header>

		<div
			class="header-menu">
			<ul
				class="header-menu__list">
				<li
					class="header-menu__item menu-about header-menu__item_active">
					<a
						href="/about"
						title="О нас"
						class="header-menu__link">
						О нас
					</a>
				</li>
				<li
					class="header-menu__item menu-services">
					<a
						href="/services"
						title="Услуги"
						class="header-menu__link">
						Услуги
					</a>

					<ul
						class="header-menu-dropdown">
						<li
							class="header-menu-dropdown__item">
							<a
								title="Программа Сопровождение"
								href="/services/1"
								class="header-menu-dropdown__link">
								Программа Сопровождение
							</a>
						</li>
						<li
							class="header-menu-dropdown__item">
							<a
								title="Программа Расширенная"
								href="#"
								class="header-menu-dropdown__link">
								Программа Расширенная
							</a>
						</li>
						<li
							class="header-menu-dropdown__item">
							<a
								title="Программа Премиум"
								href="#"
								class="header-menu-dropdown__link">
								Программа Премиум
							</a>
						</li>
						<li
							class="header-menu-dropdown__item">
							<a
								title="Программа NEW"
								href="#"
								class="header-menu-dropdown__link">
								Программа NEW
							</a>
						</li>
					</ul>
				</li>
				<li
					class="header-menu__item menu-for-parents">
					<a
						href="/for-parents"
						title="Родителям"
						class="header-menu__link">
						Родителям
					</a>
				</li>
				<li
					class="header-menu__item menu-for-surrogates">
					<a
						href="/for-surrogates"
						title="Суррогатным мамам"
						class="header-menu__link">
						Суррогатным мамам
					</a>
				</li>
				<li
					class="header-menu__item menu-for-donors">
					<a
						href="/for-donors"
						title="Донорам гамет"
						class="header-menu__link">
						Донорам гамет
					</a>
				</li>
				<li
					class="header-menu__item menu-contacts">
					<a
						href="/contacts"
						title="Контакты"
						class="header-menu__link">
						Контакты
					</a>
				</li>
			</ul>
		</div>

        @yield('content')

		<div
			class="send-order">
			<div
				class="send-order__inner">

				<form>
                    <div v-show="!request_sent">
    					<h2>Отправить заявку</h2>
    					<div
    						class="send-order__wrapper">
    						<div
    							class="form-column">
    							<input
    								type="text"
    								placeholder="Имя"
                                    v-model="request.name"
    								class="input-text"
    							/>
    						</div>

    						<div
    							class="form-column">
    							<input
    								type="text"
    								placeholder="+7 (___) ____ - __  - __"
                                    v-mask="'+7 (###) ###-##-##'"
                                    v-model="request.phone"
    								class="input-text input-phone-mask"
    							/>
    						</div>

    						<div
    							class="form-column">
    							<select
    								class="input-select">
    								<option
    									value="">
    									От кого
    								</option>
    							</select>
    						</div>

    						<button @click.prevent="makeRequest"
    							title="Отправить"
    							class="button button_bg button_right-arrow">
    							Отправить
    						</button>
    					</div>
                    </div>
                    <div v-show="request_sent">
                        <h2>Заявка отправлена!</h2>
                    </div>
				</form>

			</div>
		</div>

		<footer
			class="footer">
			<div
				class="footer-top">

				<a
					href="/"
					title="Центр репродукции и суррогатного материнства"
					class="footer__logo">
                    <div class="footer__logo--logo">
                        <img src="/images/logo.png" />
                        <span>
                            Reproductio
                        </span>
                    </div>
                    <div style='margin-left: 53px'>
                        Центр репродукции и<br />
                        суррогатного материнства
                    </div>
				</a>

				<div
					class="footer-menu__wrapper">
					<ul
						class="footer-menu">
						<li
							class="footer-menu__item">
							<a
								title="О нас"
								href="/about"
								class="footer-menu__link">
								О нас
							</a>
						</li>
						<li
							class="footer-menu__item">
							<a
								title="Родителям"
								href="/for-parents"
								class="footer-menu__link">
								Родителям
							</a>
						</li>
						<li
							class="footer-menu__item">
							<a
								title="Сурогатным мамам"
								href="/for-surrogates"
								class="footer-menu__link">
								Сурогатным мамам
							</a>
						</li>
						<li
							class="footer-menu__item">
							<a
								title="Донорам гамет"
								href="/for-donors"
								class="footer-menu__link">
								Донорам гамет
							</a>
						</li>
						<li
							class="footer-menu__item">
							<a
								title="Контакты"
								href="/contacts"
								class="footer-menu__link">
								Контакты
							</a>
						</li>
					</ul>
					<ul
						class="footer-menu">
						<li
							class="footer-menu__item">
							<a
								title="Вопрос-ответ"
								href="#"
								class="footer-menu__link">
								Вопрос-ответ
							</a>
						</li>
						<li
							class="footer-menu__item">
							<a
								title="Четный список сурогатных мам"
								href="#"
								class="footer-menu__link">
								Четный список сурогатных мам
							</a>
						</li>
					</ul>
				</div>

				<div
					class="footer__contacts">
					<div
						class="phone-container">
						+7 495 <b>123 45 67</b>
					</div>
					ПН-ПТ 10:00 - 20:00
				</div>

			</div>

			<div
				class="footer-bottom">
				<div
					class="footer-bottom__inner">

					<div
						class="footer-bottom__copy-right">
						© 2005–2018 Все права защищены.
					</div>

					<div
						class="footer-bottom__creator">
						Дизайн сайта - <a href="#">Соловьев Михаил</a>
					</div>

				</div>
			</div>

		</footer>
	</div>
    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
