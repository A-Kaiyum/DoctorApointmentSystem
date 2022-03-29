@if(\Illuminate\Support\Facades\Session::has('message'))
    <div class="alert alert-success" style="background-color: rgba(103,131,255,0.91) !important; font-weight:bold; color:#000000; text-align: center">
        {{ \Illuminate\Support\Facades\Session::get('message') }}

    </div>
@endif
