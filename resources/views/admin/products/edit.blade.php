@extends('layouts.main')

@section('content')


         
            
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                <h1 class="h3 mb-2 text-gray-800">Edit New Products</h1>
            <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Product Edit Form</h6>

                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">Vegetarian</option>
                                    <option value="2">Vegan</option>
                                    <option value="3">Wheat Allergy</option>
                                    <option value="4">Milk Allergy</option>
                                    <option value="5">Lipodystrophy</option>
                                    <option value="6">Healthy Diet</option>
                                    <option value="7">Normal</option>
                                </select>
                                <label for="floatingSelect">Products name</label>
                            </div>


                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="Falasteen">
                                <label for="floatingInput">weight</label>
                            </div>

                           

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="">
                                <label for="floatingTextarea">Quantity</label>
                            </div>
                        
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="">
                                <label for="floatingTextarea">discount value</label>
                            </div>
                           
                    
                            <div>
                                
                                <input class="form-control form-control-lg bg-dark mb-3" id="formFileLg" type="file">
                             
                            </div>

                            <div class="form-group">
                            <button type="button" class="btn btn-success m-2">Create</button>
                            <button type="button" class="btn btn-primary m-2">Reset</button>
                </div>
                           

                        </div>
                    </div>
                    </div>
                    </div>





@endsection