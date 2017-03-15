<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Dodaj wyjazd
</button>


<div class="modal  fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Wprowadzanie wyjazdu</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(['route'=>'transport.store']) }}
                @if ($errors -> any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger"> {{$error}}</div>
                @endforeach
                @endif
           {{Form::hidden('users_id', Auth::user()->id ) }}
                
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
                 {{Form::label('date',"Kiedy wyjazd") }}
                 <div class="form-inline">
                 {{Form::date('date',null,['id'=>'datepicker','class'=>'form-control']) }}   
                 {{Form::text(null,null,['id'=>'alternate','class'=>'form-control','size'=>'35x1','readonly'=>'true']) }}
                 </div>
                </div>
                      
                {{Form::hidden('driver','2') }}     
                
                <div class="modal-footer">
                    {{ Form::submit('Zapisz',['class'=>'btn btn-primary']) }}
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                {{ Form::close() }}
            </div>

        </div>
    </div>
</div>       