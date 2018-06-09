@extends('app')
@section('page', 'services')
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
					href="/">
					Главная</a>
			</li>
			<li
				class="breadcrumbs__item">
				Услуги
			</li>
		</ul>

		<h1>
			Услуги
		</h1>

		<ul
			class="service-list">
			<li
				class="service-list__item">

				<div
					class="service-list__name">
					программа
				</div>

				<h2>
					<a
						href="/services/1">
						Сопровождение
					</a>
				</h2>

				<div
					class="service-list__text">
					это программа суррогатного материнства полного цикла от подбора суррогатной мамы до получения свидетельства о рождении ребёнка. Весь этот нелёгкий путь мы пройдём вместе, обеспечив сурмаме максимальный комфорт. В её стоимость уже включено всё необходимое. Мы никогда не экономим на здоровье наших сурмам, обеспечивая их всем, что потребуется в процессе вынашивания беременности.
				</div>

				<a
					href="/services/1"
					title="Подробнее"
					class="button button_right-arrow">
					Подробнее
				</a>
			</li>
			<li
				class="service-list__item">

				<div
					class="service-list__name">
					программа
				</div>

				<h2>
					<a
						href="/services/2">
						Расширенная
					</a>
				</h2>

				<div
					class="service-list__text">
					безусловным достоинством данной программы является поэтапная оплата, что делает данный договор удобным и доступным для многих родителей. А минусом этой программы по сравнению с “Сопровождением” и “Премиум” выступает увеличение расходов при ненаступлении и прерывании беременности.
				</div>

				<a
					href="/services/2"
					title="Подробнее"
					class="button button_right-arrow">
					Подробнее
				</a>
			</li>

			<li
				class="service-list__item">

				<div
					class="service-list__name">
					программа
				</div>

				<h2>
					<a
						href="/services/3">
						Премиум
					</a>
				</h2>

				<div
					class="service-list__text">
					в данную программу входит весь необходимый спектр услуг. Теперь, помимо финансовых рисков, связанных с осуществлением программы суррогатного материнства, мы берем на себя и риски, связанные с проведением ЭКО, а также оплачиваем, при необходимости, расходы на донора ооцитов.				
				</div>

				<a
					href="/services/3"
					title="Подробнее"
					class="button button_right-arrow">
					Подробнее
				</a>
			</li>
			
			<li
				class="service-list__item">

				<div
					class="service-list__name">
					программа
				</div>

				<h2>
					<a
						href="/services/4">
						NEW
					</a>
				</h2>

				<div
					class="service-list__text">
					это программа суррогатного материнства полного цикла о подбора суррогатной мамы до получения свидетельства о рождении ребенка. Весь этот нелегкий путь мы пройдем вместе, обеспечив сурмаме максимальный комфорт. В ее стоимость уже включено все необходимое. Главным отличием данной программы является оплата договора в 3 этапа.				
				</div>

				<a
					href="/services/4"
					title="Подробнее"
					class="button button_right-arrow">
					Подробнее
				</a>
			</li>
			<li
				class="service-list__item">

				<div
					class="service-list__name">
					программа
				</div>

				<h2>
					<a
						href="/services/5">
						VIP
					</a>
				</h2>

				<div
					class="service-list__text">
					если вы выбрали данную программу, то вы получите максимальный комплекс услуг по рождению будущего ребенка. В рамках этой программы предусмотрены неограниченные попытки ЭКО и компенсация всех расходов по суррогатному материнству. А главное - предоставление лучшей кандидатуры суррогатной мамы с опытом рождения ребенка по программе.				
				</div>

				<a
					href="/services/5"
					title="Подробнее"
					class="button button_right-arrow">
					Подробнее
				</a>
			</li>
		</ul>


	</div>
</div>
@stop
