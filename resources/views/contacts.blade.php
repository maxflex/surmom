@extends('app')
@section('page', 'contacts')
@section('content')
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
				Контакты
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
                    <div v-show="!request_sent">
    					<div
    						class="contacts-right__title">
    						Заполните форму и мы вам перезвоним!
    					</div>

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
    						<select v-model="request.from"
    							class="input-select">
    							<option value="">
    								От кого
    							</option>
                                <option disabled>──────────────</option>
                                @foreach (\App\Util\From::OPTIONS as $id => $option)
                                    <option value="{{ $id }}">
                                        {{ $option }}
                                    </option>
                                @endforeach
    						</select>
    					</div>

    					<button @click.prevent="makeRequest"
    						title="Отправить"
    						class="button button_bg button_right-arrow">
    						Отправить
    					</button>
                    </div>
                    <div v-show="request_sent">
                        <h2>Заявка отправлена!</h2>
                    </div>
				</form>
			</div>


		</div>

	</div>
</div>
@stop
