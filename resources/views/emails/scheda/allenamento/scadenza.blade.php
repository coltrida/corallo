<x-mail::message>
# Introduction

La scheda di allenamento di <b>{{$scheda->user->nome.' '.$scheda->user->cognome}}</b>  sta per scadere.
    <br><br>  scadenza: <b>{{\Carbon\Carbon::make($scheda->scadenza)->format('d-m-Y')}}</b>

{{--<x-mail::button :url="''">
Button Text
</x-mail::button>--}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
