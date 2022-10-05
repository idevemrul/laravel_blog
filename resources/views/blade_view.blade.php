<h1>blade view</h1>

{{$data['name']}}

@if($data['name']=='Rajik2')
{{ $data['name']}}
@else

<br>
{{ 'Not valid user'}}
@endif

@for($i=1; $i < 10; $i++) {{$i}} @endfor @foreach($data as $key=>$val) {{$val}} @endforeach