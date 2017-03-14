@extends('layouts.app')

@section('content')



<div class="container">

    <div class="addToTable">
         @if ($errors -> any())
          
                 @foreach ($errors->all() as $error)
                    <div class="alert alert-danger"> {{$error}}</div>
                @endforeach
               
                @endif
        @include('transport.ModalAddDeparture')
    </div>
    <br/>

    <div class="table">

        <table class="table table-transport table-condensed">
            <thead class="">
                <tr class="success bold">
                    <td style="width: 20%">Handlowiec</td>
                    <td>Adres dostawy</td>
                    <td>Marka samochodu</td>
                    <td>Priorytet</td>
                    <td style="width: 10%;">Godzina</td>
                    <td>Dok.Tranpostowe </br>
                        Uwagi</td>
                    <td>Kierowca</td></b>
                    </td>
                </tr>
            </thead>
            <tbody>
                @foreach($transports as $departure)
                <tr>
                    <td>{{$departure->name}}</td>
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
                    @if ($departure->time=='1')
                    <td>Cały dzień
                        @elseif ($departure->time=='2')
                    <td>Rano
                        @elseif ($departure->time=='3')
                    <td> Po południu
                        @endif

                    </td>
                    <td>{{$departure->comments}}</td>
                    <td>{{$departure->driver}}</td>
                </tr>
                @endforeach
            </tbody>


        </table>

    </div>

    {{$transports->links()}}

</div>
@endsection
