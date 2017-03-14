   
@extends('layouts.app')

@section('content')


<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                
         
            </div>
            <div class="modal-body">
                {{ Form::open(['route'=>'transport.store']) }}
       @if ($errors -> any())
          
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger"> {{$error}}</div>
                @endforeach
               
                @endif
                <div class="form-group">
                    {{ Form::label('adress',"Adres dostawy") }}
                    {{ Form::text('adress',null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('mark_vechicle',"Marka samochodu") }}
                    {{ Form::select('mark_vechicle', array(null=>'Wybierz','1' => 'HDS', '2' => 'Fiat','3'=>'Transit'), null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('priority',"Priorytet") }}
                    {{ Form::select('priority', array('1'=>'Normalny','2'=>'Średni','3'=>'Wysoki'),'1',['class'=>'form-control']) }}
                </div>
                    {{ Form::label('time',"Pora dnia") }}
                    {{ Form::select('time',array('1'=>'Caly dzien','2'=>'Rano','3'=>'Po południu'),'1',['class'=>'form-control']) }}

                <div class="form-group">
                    {{ Form::label('comments',"Uwagi") }}
                    {{ Form::textarea('comments',null, ['size' => '2x3','class'=>'form-control']) }}
                </div>
                <div class="form-group">
    <div class="modal-footer">
                   
                {{ Form::submit('Zapisz',['class'=>'btn btn-primary']) }}
                {{ Form::close() }}
             
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
                </div>
         

            </div>
        
        </div>
    </div>
</div>       

@endsection