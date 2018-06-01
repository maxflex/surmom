@extends('app')
@section('content')
    <style>
        .send-order {
            display: none;
        }
    </style>
<div
	class="center-wrapper">
	<div
		class="content-center">

		<ul
			class="breadcrumbs">
			<li
				class="breadcrumbs__item">
				<a
					title="Главная"
					href="#">
					Главная</a>
			</li>
			<li
				class="breadcrumbs__item">
				Услуги
			</li>
		</ul>

		<h1>
			Контакты
		</h1>

		<div
			class="contacts-wrapper">
			<div
				class="contacts-left">

				<div
					class="contacts-left__text">
					Подробную консультацию вы можете получить, записавшись на прием по номеру
				</div>

				<div
					class="phone-container">
					+7 495 123 45 67
				</div>

				<div
					class="contacts-left__info">

					<div
						class="contacts-left__hour">
						ПН-ПТ 10:00 - 20:00
					</div>

					<a
						href="mailto:info@reproductio.ru">
						info@reproductio.ru
					</a>

				</div>

			</div>


			<div
				class="contacts-right">

				<form
					action="/"
					class="contacts-right__form">

					<div
						class="contacts-right__title">
						Заполните форму и мы вам перезвоним!
					</div>

					<div
						class="form-column">
						<input
							type="text"
							placeholder="Имя"
							class="input-text"
						/>
					</div>

					<div
						class="form-column">
						<input
							type="text"
							placeholder="+7 (___) ____ - __  - __"
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

					<button
						title="Отправить"
						class="button button_bg button_right-arrow">
						Отправить
					</button>

				</form>
			</div>


		</div>

	</div>
</div>
@stop
