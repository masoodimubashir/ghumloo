@extends('layouts.admin.master')
@section('body')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Add Hotel</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-add-blog sb2-2-1">
            <h2>Add Hotel Details</h2>

            <br>

            <ul class="nav nav-tabs tab-list">
                <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-info" aria-hidden="true"></i>
                        <span>Room Type</span></a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="box-inn-sp">
                        <div class="bor">
                            <form>
                                <div class="row">
                                    <div class=" col-md-6 ">
                                        <select name="hotel_name">
                                            @if($rooms->isNotEmpty())
                                                @foreach($rooms as $room)
                                                    <option value="{{$room->id}}"> {{$room->room_type}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <label>Select Hotel</label>
                                    </div>
                                    <div class=" col-md-6 ">
                                        <select name="room_type">
                                            @if($rooms->isNotEmpty())
                                                @foreach($rooms as $room)
                                                    <option value="{{$room->id}}"> {{$room->room_type}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <label>Select Rooms</label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <div class="chips chips-placeholder"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea2" class="materialize-textarea"></textarea>
                                        <label for="textarea2">Listing Descriptions:</label>
                                    </div>
                                </div>


                                <div>
                                    Add Images

                                    <div>
                                        <div class="upload-img">
                                        </div>
                                        <div class="upload-area">
                                            <div class="upload-area-img">
                                                <img src="assets/upload.png" alt="">
                                            </div>
                                            <p class="upload-area-text">Select images or <span>browse</span>.</p>
                                        </div>
                                    </div>
                                    <input type="file" name="hotel_images[]" class="visually-hidden" id="upload-input"
                                           multiple>
                                </div>

                                <div>
                                    <input type="submit" value="submit" class="btn btn-primary">
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        $(document).ready(function () {
            $(".upload-area").click(function () {
                $('#upload-input').trigger('click');
            });

            $('#upload-input').change(event => {
                if (event.target.files) {
                    let filesAmount = event.target.files.length;
                    $('.upload-img').html("");
                    //
                    for (let i = 0; i < filesAmount; i++) {
                        let reader = new FileReader();
                        reader.onload = function (event) {
                            let html = `
                                                        <div class = "uploaded-img">
                                                            <img src = "${event.target.result}">
                                                            <button type = "button" class = "remove-btn">
                                                                <i class = "fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                    `;
                            $(".upload-img").append(html);
                        }
                        reader.readAsDataURL(event.target.files[i]);
                    }
                    //
                    $('.upload-info-value').text(filesAmount);
                    $('.upload-img').css('padding', "20px");
                }
            });
            //
            $(window).click(function (event) {
                if ($(event.target).hasClass('remove-btn')) {
                    $(event.target).parent().remove();
                } else if ($(event.target).parent().hasClass('remove-btn')) {
                    $(event.target).parent().parent().remove();
                }
            })
        });
    </script>

@endsection
