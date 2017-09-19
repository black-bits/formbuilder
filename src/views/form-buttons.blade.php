<div class='form-group'>
    @if($cancelAction)
    <a href='{{ $cancelAction }}' class='btn btn-default pull-left' role='button'>
        <span class='glyphicon glyphicon-chevron-left gcBtnLeft' aria-hidden='true'></span>{{ $cancelLabel }}
    </a>
    @endif

    <button type='submit' class='btn btn-primary pull-right'>
        <span class='glyphicon glyphicon-ok gcBtnLeft' aria-hidden='true'></span>{{ $submitLabel }}
    </button>
</div>