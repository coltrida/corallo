<x-mail::message>
# {{$richiesta->user->nome.' '.$richiesta->user->cognome}}

{{$richiesta->testo}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Grazie,<br>
    {{$richiesta->user->nome.' '.$richiesta->user->cognome}}
</x-mail::message>
