<x-guest-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1>TV Series</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <p><strong>Plase select date</strong></p>
                <form action="{{ route('tvseriesbydate') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="row justify-content-center mt-5 mb-3">
                        <div class="col">
                            <label for="serie">Filter by TV Serie</label>
                                <select name="serie" id="serie">
                                    <option value=""></option>
                                    @forelse ($series as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @empty
                                    @endforelse
                                </select>
                        </div>
                    </div>
                    <div class="col">
                        <p>
                            <label for="date">Date</label>
                            <input type="text" name="date" class="datepicker">
                        </p>
                        <p>
                            <label for="time">Hour</label>
                            <input type="text" name="time" class="time"> Feel free to leave blank
                        </p> <input type="hidden" name="minDate" id="minDate"
                            value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                        <input type="submit" value="Search">
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
