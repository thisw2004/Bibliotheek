@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- veel op veel relatie --}}
            <h1>Just borrowed</h1>
            
       
            <div class="button-container" id="BackBtnJB" >
                <a href="/home" >
                    <img  id="BackBtnJBImg" src="{{ asset('img/left-arrow.png') }}">
                </a>
            </div>

            
            <div class="card" >
                <div class="card-header">

                    {{ __('Catalogus') }}
                </div>

                <div class="card-body" style="max-height: 700px; overflow-y: auto;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    @if($books->isEmpty())
                        <p>Sorry, er zijn geen recente uitleningen gevonden!</p>
                    @else
                        <div class="row row-cols-1 ">
                            <table id="TableJB">
                                <tr> 
                                    <th>Leningsnummer:</th>
                                    <th>Geleend door:</th>
                                    <th>Boek-ID:</th>
                                    <th>Uitgeleend op:</th>
                                    <th>Ingeleverd op:</th>
                                </tr>
                                @foreach($books as $book)
                                <tr>
                                          <td>{{$book->ID}}</td>
                                          <td>{{$book->UserID}}</td>
                                          <td>{{$book->BookID}}</td>
                                          <td>{{$book->DatumUitgeleend}}</td>
                                          <td>{{$book->DatumIngeleverd}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    @endif    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

