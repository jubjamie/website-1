<div data-type="modal-template" data-id="award_suggest">
    {!! Form::open() !!}
    <div class="modal-body">
        <div class="form-group">
            {!! Form::label('name', 'Award Name:', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
            {!! Form::textarea('description', null, ['class' => 'form-control',
            'placeholder' => 'Describe what this is about or what sort of thing should be nominated', 'rows' => 4]) !!}
        </div>
    </div>
    <div class="modal-footer">
        <div class="btn-group">
            <button class="btn btn-success"
                    data-action="save"
                    data-type="submit-modal"
                    data-redirect="true"
                    type="button">
                <span class="fa fa-check"></span>
                <span>Suggest Award</span>
            </button>
        </div>
    </div>
    {!! Form::close() !!}
</div>