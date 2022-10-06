@extends('app')

@section('title','App Page1')


@section('header')
@parent
<h2>This header come form app_page1</h2>
<ul>
    <li>
        <a href="#">Test</a>
    </li>
    <li>
        <a href="#">Test</a>
    </li>
    <li>
        <a href="#">Test</a>
    </li>
</ul>
@endsection


@section('body')
@parent

<h4>This is body forom app_page1 </h4>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae ipsum error, deleniti accusamus repellendus repellat. Corporis esse nemo, quo quis sunt suscipit aperiam, consequuntur et, necessitatibus dolore reprehenderit aliquam soluta.</p>

<button>testing</button>

@endsection