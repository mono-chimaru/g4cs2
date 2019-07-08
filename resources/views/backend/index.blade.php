@extends('layouts.master_backend')

@section("title","From child")

@section('container')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            

            <table border="1">
                <tr>
                  <th>Tittle</th>
                  <th>author</th>
                  <th>Description</th>
                </tr>
                @foreach ($books as $element)
                  <tr>
                    <td>{{$element->title}}</td>
                    <td>{{$element->author}}</td>
                    <td>{{$element->description}}</td>
                  </tr>
                @endforeach
            </table>
          </div>

@endsection


