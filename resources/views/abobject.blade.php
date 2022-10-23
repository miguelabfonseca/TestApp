<x-guest-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1>A/B Test Object</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <pre>
@php
print_r($p);
@endphp
             </pre>
             <p>You will be redirected to: <strong>{{ $r['designName'] }}</strong></p>
            </div>
        </div>
    </div>
</x-guest-layout>
