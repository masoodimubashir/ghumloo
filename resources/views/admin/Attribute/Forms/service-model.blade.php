


<div
    class="modal fade"
    id="serviceModel"
    tabindex="-1"
    role="dialog"
    aria-labelledby="editModelLabel"
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

                <form action="{{route('service.update', [$service->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="input-field col s12">
                            <input
                                id="service"
                                name="service"
                                type="text"
                                class="validate">
                            <label for="service">Service Type</label>
                            @error('service')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                    </div>

                    <p>
                        <label for="icon">Service Icon</label>
                        <textarea name="icon" id="icon" cols="10" rows="10" class="form-control"></textarea>
                        @error('icon')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </p>
                    <p>
                        <input
                            type="checkbox"
                            name="status"
                            id="service_status"/>
                        <label for="service_status">Status</label>
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



