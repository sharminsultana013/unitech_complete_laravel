@extends('Admin.layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Add New Machine Information</h4>
                        <div class="form-group row">
                            <label for="fname"
                                class="col-sm-3 text-end control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname"
                                    placeholder="Product Title here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label"
                                place>Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname"
                                class="col-sm-3 text-end control-label col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="lname">
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Machine Overview Table</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>
                                            <button class="btn btn-primary" type="submit"><a href=""
                                                    title="Edit">
                                                    <i class="far fa-edit" style="color: white;"></i>
                                                </a></button>
                                            <button class="btn btn-danger" type="submit"><a href=""
                                                    title="Delete">
                                                    <i class="far fa-trash-alt" style="color: white;"></i>
                                                </a></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>
                                            <button class="btn btn-primary" type="submit"><a href=""
                                                    title="Edit">
                                                    <i class="far fa-edit" style="color: white;"></i>
                                                </a></button>
                                            <button class="btn btn-danger" type="submit"><a href=""
                                                    title="Delete">
                                                    <i class="far fa-trash-alt" style="color: white;"></i>
                                                </a></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>
                                            <button class="btn btn-primary" type="submit"><a href=""
                                                    title="Edit">
                                                    <i class="far fa-edit" style="color: white;"></i>
                                                </a></button>
                                            <button class="btn btn-danger" type="submit"><a href=""
                                                    title="Delete">
                                                    <i class="far fa-trash-alt" style="color: white;"></i>
                                                </a></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>
                                            <button class="btn btn-primary" type="submit"><a href=""
                                                    title="Edit">
                                                    <i class="far fa-edit" style="color: white;"></i>
                                                </a></button>
                                            <button class="btn btn-danger" type="submit"><a href=""
                                                    title="Delete">
                                                    <i class="far fa-trash-alt" style="color: white;"></i>
                                                </a></button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    
@endsection