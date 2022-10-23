<x-guest-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                    <h1>ASCII Table</h1>
                    <h2>{{ $title }} {{ $data['removedChar'] }} (id: {{ $data['id'] }})</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            @php
                $a=0;
            @endphp
            @foreach($data['array'] as $id => $char)
                <div class="col text-center" style="border:solid 1px black"><div class="container-fluid text-center"><div class="col text-center">{{ $id }}</div><div class="col text-center" style="background: #cfcfcf;">{{ $char }}</div></div></div>
                @php
                    $a++;
                    if($a==10) {
                        $a=0;
                        echo '</div><div class="row justify-content-center">';
                    }
                @endphp
            @endforeach
            <div class="col text-center" style="border:solid 1px black">&nbsp;</div>
            <div class="col text-center" style="border:solid 1px black">&nbsp;</div>
            <div class="col text-center" style="border:solid 1px black">&nbsp;</div>
            <div class="col text-center" style="border:solid 1px black">&nbsp;</div>
            <div class="col text-center" style="border:solid 1px black">&nbsp;</div>
            <div class="col text-center" style="border:solid 1px black">&nbsp;</div>
            <div class="col text-center" style="border:solid 1px black">&nbsp;</div>
            <div class="col text-center" style="border:solid 1px black">&nbsp;</div>
            <div class="col text-center" style="border:solid 1px black">&nbsp;</div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                    <h1>ASCII Table with removed character: {{ $data['removedChar'] }} (id: {{ $data['id'] }})</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            @php
                $a=0;
            @endphp
            @foreach($data['arrayWithoutChar'] as $id => $char)
                <div class="col text-center" style="border:solid 1px black"><div class="container-fluid text-center"><div class="col text-center">{{ $id }}</div><div class="col text-center" style="background: #cfcfcf;">{{ $char }}</div></div></div>
                @php
                    $a++;
                    if($a==10) {
                        $a=0;
                        echo '</div><div class="row justify-content-center">';
                    }
                @endphp
            @endforeach
        </div>
    </div>
</x-guest-layout>
