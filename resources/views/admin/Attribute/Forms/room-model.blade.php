<div
    class="modal fade"
    id="roomModel"
    tabindex="-1"
    role="dialog"
    aria-labelledby="formModelLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="flex-div">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="child">&times;</span>
                </button>
            </div>
            <hr>
            <div class="modal-body">
                <form action="{{route('room.update', [$room_type->id])}}" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="" style="margin-bottom: 10px;">
                        <div class="input-field col s12">
                            <input
                                id="room_type"
                                name="room_type"
                                type="text"
                                class="validate">
                            <label for="room_type">Room Type</label>
                            @error('room_type')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                    </div>
                    <p>
                        <input
                            type="checkbox"
                            name="status"
                            id="room_status"/>
                        <label for="room_status">Status</label>
                    </p>

                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit"
                                   class="waves-effect waves-light btn btn-sm"
                                   value="Submit">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>



