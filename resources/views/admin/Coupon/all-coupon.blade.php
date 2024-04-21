@php use Carbon\Carbon; @endphp
@extends('layouts.admin.master')
@section('body')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="{{route('admin.dashboard')}}">
                        <i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#">Coupon</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title flex-div">
                            <h4>Coupon List</h4>
                            <button
                                class="btn btn-sm"
                                style="border: none"
                                data-toggle="modal"
                                data-target="#createForm"
                                data-item-type="">
                                Add Coupon
                            </button>
                        </div>


                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>

                                        <th>Coupon Name</th>
                                        <th>Coupon Code</th>
                                        <th>Coupon Type</th>
                                        <th>Discount Type</th>
                                        <th>Date From</th>
                                        <th>Date To</th>
                                        <th>Coupon Use</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>
                                    </thead>
                                    @if($coupon_codes->isNotEmpty())

                                        <tbody>
                                        @foreach($coupon_codes as $coupon)
                                            <tr>
                                                <td>{{$coupon->name}}</td>
                                                <td>{{$coupon->code}}</td>
                                                <td>{{$coupon->type}}</td>
                                                <td>{{$coupon->type === 'Percentage' ? $coupon->discount . '%' : $coupon->discount}}</td>
                                                <td>
                                                    {{ Carbon::parse($coupon->valid_from)->format('d-M-Y') }}

                                                </td>
                                                <td>{{ Carbon::parse($coupon->valid_to)->format('d-M-Y') }}</td>
                                                <td>{{$coupon->used_coupon === '1' ? 'One Time' : 'Not Restricted'}}</td>
                                                <td>{{$coupon->status === '1' ? 'Active' : 'InActive' }}</td>

                                                <td>
                                                    <a href="{{route('coupon-code.edit', [$coupon->id])}}"
                                                    >
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                                <td>

                                                    <form id="deleteForm{{$coupon->id}}"
                                                          action="{{ route('coupon-code.destroy', [$coupon->id]) }}"
                                                          method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="#"
                                                           onclick="event.preventDefault();
                               document.getElementById('deleteForm{{$coupon->id}}').submit();"
                                                        >
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    @endif
                                </table>
                                <div class="pagination">
                                    <li class="page-item {{ $coupon_codes->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link"
                                           href="{{ $coupon_codes->previousPageUrl() }}">Previous</a>
                                    </li>

                                    <li class="page-item {{ $coupon_codes->hasMorePages() ? '' : 'disabled' }}">
                                        <a class="page-link" href="{{ $coupon_codes->nextPageUrl() }}">Next</a>
                                    </li>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @section('form-heading')
            <strong>Coupon</strong>
        @endsection
        @section('create')
            <form id="submitForm" action="{{route('coupon-code.store')}}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="code" id="code" placeholder="Coupon Code">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <select name="type" id="type">
                            <option value="Percentage">Percentage</option>
                            <option value="Amount">Amount</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="number" class="form-control" id="discount" placeholder="discount" name="discount">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="valid_from">Valid From:</label>
                        <input type="date" class="form-control" id="valid_from" placeholder="Select a date"
                               name="valid_from">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="valid_to">Valid To:</label>
                        <input type="date" class="form-control" id="valid_to" placeholder="Select a date"
                               name="valid_to">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-check col-md-6">
                        <input class="form-check-input" name="status" type="checkbox" id="status">
                        <label class="form-check-label" for="status">
                            Status
                        </label>
                    </div>
                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="checkbox" id="used_coupon" name="used_coupon">
                        <label class="form-check-label" for="used_coupon">
                            One Time
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>

            </form>
        @endsection


        <script>
            $(document).ready(function () {
                $('.edit-coupon').on('click', function (event) {
                    event.preventDefault();

                    var id = $(this).data('item-id');
                    var form = $('#editForm');

                    console.log($('#editForm').attr('action'))
                    $.ajax({
                        url: id ? 'coupon-code/' + id + '/edit' : '',
                        type: 'GET',
                        success: function (response) {
                            // Populate form fields with response data
                            form.find('#edit-name').val(response.data.name);
                            form.find('#edit-code').val(response.data.code);
                            form.find('#edit-type').val(response.data.type);
                            form.find('#edit-discount').val(response.data.discount);
                            form.find('#edit-valid_from').val(response.data.valid_from.split('T')[0]);
                            form.find('#edit-valid_to').val(response.data.valid_to.split('T')[0]);
                            form.find('#edit-status').prop('checked', response.data.status === '1');
                            form.find('#edit-used_coupon').prop('checked', response.data.used_coupon === '1');
                        },
                        error: function (xhr, status, error) {
                            console.log(xhr.responseText);
                        }
                    });
                });
            });

        </script>

@endsection

