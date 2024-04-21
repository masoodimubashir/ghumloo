

<div
    class="modal fade"
    id="propertyModel"
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

                <form action="{{route('property.update', [$property_type->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="input-field col s12">
                            <input
                                id="property_type"
                                name="property_type"
                                type="text"
                                class="validate">
                            <label for="property_name">Property Type</label>
                            @error('property_name')
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
                            id="property_status"/>
                        <label for="property_status">Status</label>
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





