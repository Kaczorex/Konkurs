<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(['route'=>'transport.store']) }}

                <div class="form-group">
                    {{ Form::label('adress',"Adres dostawy") }}
                    {{ Form::text('adress',null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('mark_vechicle',"Marka samochodu") }}
                    {{ Form::select('mark_vechicle', array('1' => 'HDS', '2' => 'Fiat','3'=>'Transit'), null,['class'=>'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('priority',"Priorytet") }}
                    {{ Form::select('priority', array('1'=>'Normalny','2'=>'Średni','3'=>'Wysoki'),'1',['class'=>'form-control']) }}
                </div>
                    {{ Form::label('time',"Pora dnia") }}
                    {{ Form::select('time',array('1'=>'Caly dzien','2'=>'Rano','3'=>'Po południu')) }}

                <div class="form-group">

                </div>
                {{ Form::close() }}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>