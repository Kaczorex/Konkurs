@extends('layouts.app')
@section('content')


<div class="container">

    
    <div class="addToTable">
        <button class="btn btn-primary">Dodaj wyjazd</button>
    </div>
    
    <div class="table">
        
        <table class="table table-transport table-condensed">
            <thead class="">
                <tr class="success bold">
                    <td>Handlowiec</td>
                    <td>Adres dostawy</td>
                    <td>Marka samochodu</td>
                    <td>Priorytet</td>
                    <td>Godzina</td>
                    <td>Dok.Tranpostowe </br>
                        Uwagi</td>
                    <td>Kierowca</td></b>
                    </td>
                </tr>
            </thead>
            <tbody>
                @foreach($transports as $departure)
                <tr>
                    <td>{{$departure->trader}}</td>
                    <td>{{$departure->adress}}</td>
                    <td>{{$departure->mark_vechicle}}</td>
                    @if ($departure->priority=='1')
                    <td>normalny
                    @elseif ($departure->priority=='2')
                    <td>średni
                    @elseif ($departure->priority=='3')
                    <td style="background:#ff9b9b;">wysoki 
                    @endif
                    </td>
                    <td>{{$departure->time}}</td>
                    <td>{{$departure->comments}}</td>
                    <td>{{$departure->driver}}</td>
                </tr>
                @endforeach
            </tbody>
            
            
        </table>
        {{$transports->links()}}
    </div>
    
    
    
</div>





@endsection