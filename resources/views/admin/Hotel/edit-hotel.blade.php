@extends('layouts.admin.master')
@section('body')
<div class="sb2-2">
    <div class="sb2-2-2">
        <ul>
            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Dashboard</a>
            </li>
            <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <div class="sb2-2-add-blog sb2-2-1">
        <h2>Edit Hotel Details</h2>
        <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>

        <ul class="nav nav-tabs tab-list">
            <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-info" aria-hidden="true"></i> <span>Detail</span></a>
            </li>
            <li><a data-toggle="tab" href="#menu1"><i class="fa fa-bed" aria-hidden="true"></i> <span>Room Type</span></a>
            </li>
            <li><a data-toggle="tab" href="#menu2"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Photo Gallery</span></a>
            </li>
            <li><a data-toggle="tab" href="#menu3"><i class="fa fa-facebook" aria-hidden="true"></i> <span>Social Media</span></a>
            </li>
            <li><a data-toggle="tab" href="#menu4"><i class="fa fa-phone" aria-hidden="true"></i> <span>Contact Info</span></a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Listing Information</h4>
                        <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                    </div>
                    <div class="bor">
                        <form>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="list-title" type="text" class="validate">
                                    <label for="list-title">Listing Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="list-name" type="text" class="validate">
                                    <label for="list-name">Contact Person</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <div class="chips chips-placeholder"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Listing Descriptions:</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <select multiple>
                                        <option value="" disabled selected>Choose Category</option>
                                        <option value="1">Hotels</option>
                                        <option value="2">Educations</option>
                                        <option value="3">Medical</option>
                                        <option value="3">Health</option>
                                        <option value="3">Fitness</option>
                                        <option value="3">Tution</option>
                                        <option value="3">Software</option>
                                        <option value="3">Wedding</option>
                                        <option value="3">Party</option>
                                        <option value="3">Spa/Club</option>
                                    </select>
                                    <label>Select Category</label>
                                </div>
                                <div class="input-field col s6">
                                    <select multiple>
                                        <option value="" disabled selected>Choose Category</option>
                                        <option value="1">Hotels</option>
                                        <option value="2">Educations</option>
                                        <option value="3">Medical</option>
                                        <option value="3">Health</option>
                                        <option value="3">Fitness</option>
                                        <option value="3">Tution</option>
                                        <option value="3">Software</option>
                                        <option value="3">Wedding</option>
                                        <option value="3">Party</option>
                                        <option value="3">Spa/Club</option>
                                    </select>
                                    <label>Select Sub Category</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="menu1" class="tab-pane fade">
                <div class="inn-title">
                    <h4>Hotel Room Details</h4>
                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                </div>
                <div class="bor">
                    <form>
                        <div class="row">
                            <div class="input-field col s12">
                                <select multiple>
                                    <option value="" disabled selected>Room Type</option>
                                    <option value="1">Deluxe</option>
                                    <option value="2">Premium</option>
                                    <option value="3">Premium Plus</option>
                                    <option value="3">Non-Deluxe</option>
                                    <option value="3">Normal</option>
                                </select>
                                <label>Select Category</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="t2-price" type="number" class="validate">
                                <label for="t2-price">Price</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <div class="chips chips-placeholder"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea3" class="materialize-textarea"></textarea>
                                <label for="textarea3">Listing Descriptions:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>File</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload room image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="bor">
                    <form>
                        <div class="row">
                            <div class="input-field col s12">
                                <select multiple>
                                    <option value="" disabled selected>Room Type</option>
                                    <option value="1">Deluxe</option>
                                    <option value="2">Premium</option>
                                    <option value="3">Premium Plus</option>
                                    <option value="3">Non-Deluxe</option>
                                    <option value="3">Normal</option>
                                </select>
                                <label>Select Category</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="t2-price1" type="number" class="validate">
                                <label for="t2-price1">Price</label>
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
                        <div class="row">
                            <div class="input-field col s12">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>File</span>
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload room image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                <div class="inn-title">
                    <h4>Photo Gallery</h4>
                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                </div>
                <div class="bor">
                    <form action="#">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input type="file" multiple>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" class="waves-effect waves-light btn-large" value="Upload">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div id="menu3" class="tab-pane fade">
                <div class="inn-title">
                    <h4>Social Media</h4>
                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                </div>
                <div class="bor">
                    <form>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="t4-soc1" type="text" value="http://facebook.com/" class="validate">
                                <label for="t4-soc1">Facebook Url</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="t4-soc2" type="text" value="http://google.com/gplus" class="validate">
                                <label for="t4-soc2">Google Plus Url</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="t4-soc3" type="text" value="http://twitter.com/" class="validate">
                                <label for="t4-soc3">Twitter Url</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="t4-soc4" type="text" value="http://Linkedin.com/" class="validate">
                                <label for="t4-soc4">Linkedin Url</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="t4-soc5" type="text" class="validate">
                                <label for="t4-soc5">WhatsApp Number</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="t4-soc6" type="text" value="http://vk.com/" class="validate">
                                <label for="t4-soc6">Vk Url</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" class="waves-effect waves-light btn-large" value="Upload">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="menu4" class="tab-pane fade">
                <div class="inn-title">
                    <h4>Contact Info</h4>
                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                </div>
                <div class="bor">
                    <form>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="t5-n1" type="text" class="validate">
                                <label for="t5-n1">Contact Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="t5-n2" type="text" class="validate">
                                <label for="t5-n2">Alter Contact Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="t5-n3" type="number" class="validate">
                                <label for="t5-n3">Phone</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="t5-n4" type="number" class="validate">
                                <label for="t5-n4">Mobile</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="t5-n5" type="email" class="validate">
                                <label for="t5-n5">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="t5-n6" class="materialize-textarea"></textarea>
                                <label for="t5-n6">Listing Descriptions:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" class="waves-effect waves-light btn-large" value="Upload">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
