@if($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <div class="text-white">  {{$errors->first()}}</div>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    </div>
@endif



@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
        <div class="alert alert-{{$msg}} alert-dismissible">
            <div class="text-white">  {{ Session::get('alert-' . $msg) }}</div>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        </div>
    @endif
@endforeach


