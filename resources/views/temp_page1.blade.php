@extends('temp')
@section('title','temp_page1')

@section('container')
@parent
<h4 style="color:red; text-align:center; width:100vw;">This is container title from page1</h4>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nemo eius accusantium nihil molestias quod repellendus sint eligendi similique iusto, eaque ex velit sequi? Adipisci asperiores explicabo reprehenderit consectetur tempora.</p>
<a href="page2"><button>Go to page 2</button></a>
@endsection