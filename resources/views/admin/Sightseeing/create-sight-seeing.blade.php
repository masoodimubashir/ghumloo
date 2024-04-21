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
        <div class="box-inn-sp">
            <div class="inn-title">
                <h4>Add New Sight Seeing</h4>
                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
            </div>
            <div class="bor">
                <form>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" type="text" class="validate">
                            <label for="list-title">Sight Seeing Name</label>
                        </div>
                        <div class="input-field col s12">
                            <div class="file-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload Blog Banner">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Sight Seeing Descriptions:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
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
                        <div class="input-field col s12">
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
                            <input id="ss-auth" type="text" class="validate">
                            <label for="ss-auth">Author Name</label>
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
</div>
@endsection