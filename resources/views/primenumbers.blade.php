<x-guest-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                    <h1>List of Prime numbers till {{ $total }}</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            @php
                $a=0;
            @endphp
            @foreach($data as $id => $char)
                <div class="col text-center" style="border:solid 1px black"><div class="container-fluid text-center"><div class="col text-center">[{{ $id }}]</div><div class="col text-center" style="background: #cfcfcf;">[{{ $char }}]</div></div></div>
                @php
                    $a++;
                    if($a==8) {
                        $a=0;
                        echo '</div><div class="row justify-content-center">';
                    }
                @endphp
            @endforeach
        </div>
        <div class="row justify-content-center">
            <div class="cell mt-5">
                <form method="get">
                    <label><strong>Enter a number to test from 0 to </strong></label> <input type="text" name="total" id="total"><button>Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
