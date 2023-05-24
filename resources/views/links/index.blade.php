<x-layout title="FWshorter">
    <a href="/links/create" class="btn btn-dark mb-2">adicionar</a>
<ul class="list-group">
    @foreach($links as $link)
        <li class="list-group-item">{{$link->shortLink}} ---> {{$link->longLink}}&nbsp;</li>
    @endforeach
</ul>
</x-layout>
