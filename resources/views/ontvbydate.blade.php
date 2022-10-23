<x-guest-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1>TV Series</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <h1>Will be On TV after:</h1>
                <p><strong>Selected date:</strong> {{ $date->format('Y-m-d') }}<br>
                    @if(isset($time) && $time != '')
                    <strong>Selected Hour:</strong> {{ $time }}
                    @endisset
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <p>Next on TV: <strong>{{ $nextOnTv->tvSerie->title }}</strong> {{ $nextOnTv->tvSerie->season }} {{ $nextOnTv->tvSerie->episode }}</p>
                <p>Chanel: {{ $nextOnTv->tvSerie->channel }}</p>
                <p>Genre: {{ $nextOnTv->tvSerie->gender }}</p>
                <p>On: {{ $on->format('l') }} - {{ $on->format('Y-m-d') }} at {{ $nextOnTv->show_time }}</p>
            </div>
        </div>
    </div>
</x-guest-layout>
