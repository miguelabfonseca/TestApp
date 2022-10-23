<x-guest-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1>Today's TV Series</h1>
            </div>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col">
                <label for="serie">Filter by TV Serie</label>
                <form action="{{ route('nextontvform') }}" method="post">
                    @csrf
                    <select name="serie" id="serie">
                        <option value=""></option>
                        @forelse ($series as $item)
                        <option value="{{ $item->id }}" @if($selectedSerie == $item->id) selected @endif>{{ $item->title }}</option>
                        @empty
                        @endforelse
                    </select>
                    <input type="submit" value="Filter">
                </form>
            </div>
        </div>
        @if($nextOnTv)
        @php
        $on = \Carbon\Carbon::parse($nextOnTv->week_day);
        @endphp
        <div class="row justify-content-center">
            <div class="col">
                <p>Next on TV: <strong>{{ $nextOnTv->tvSerie->title }}</strong> {{ $nextOnTv->tvSerie->season }} {{ $nextOnTv->tvSerie->episode }}</p>
                <p>Chanel: {{ $nextOnTv->tvSerie->channel }}</p>
                <p>Genre: {{ $nextOnTv->tvSerie->gender }}</p>
                <p>On: {{ $on->format('l') }} - {{ $on->format('Y-m-d') }} at {{ $nextOnTv->show_time }}</p>
            </div>
        </div>
        @else
        <div class="row justify-content-center">
            <div class="col">
                <h1>There are no schedulled shows on TV!</h1>
                <h2>You show try Netflix now.<br>&nbsp;</h2>
            </div>
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col">
                <p>&nbsp;</p>
                <p><strong>Today:</strong> {{ $today->format('Y-m-d') }} {{ $today->format('H:i') }}</p>
            </div>
        </div>
    </div>
</x-guest-layout>
