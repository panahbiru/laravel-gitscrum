<form action="{{route('labels.store')}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="labelable_type" value="{{$type}}">
    <input type="hidden" name="labelable_id" value="{{$id}}">

    <div class="form-group mbx pbx">
        <div class="input-group">
            <input class="form-control" name="title" type="text">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">{{_('Add')}}</button>
            </span>
        </div>
    </div>

</form>
