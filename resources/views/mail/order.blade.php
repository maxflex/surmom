<div>
    Имя: {{ @$request->name }}
</div>
<div>
    Телефон: {{ @$request->phone }}
</div>
@if (@$request->from)
    <div>
        {{ \App\Util\From::OPTIONS[$request->from] }}
    </div>
@endif
