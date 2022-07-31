@extends('front.app')
@section('title', 'Home')
@section('content')
	<h1>Laravel Demo by Deven</h1>
  <h3>Laravel Framework Version 7.26.1</h3>
  <h3>PHP Version Minimum 7.2.5</h3>
  <h3>Admin Info</h3>
  <ul>
  	<li>Admin is developed with <a href="https://adminlte.io/themes/v3/index.html" target="_blank" >AdminLTE-3</a>.</li>
    <li>Database sample file <a href="{{ url('laravel_sample.sql') }}" >laravel_sample.sql</a></li>
  </ul>
@endsection