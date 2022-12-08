
@extends('template/template')
@section('title','compte')
        <!-- Sidebar End -->
@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <form>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">NOM</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputtext3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">PRENOM</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputtext3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">NUMERO DE COMPTE</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputtext3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputemail" class="col-sm-2 col-form-label">EMAIL</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">ADRESSE DE DOMICILE</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputtext3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">TELEPHONE</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputtext3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">PROFESSION</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputtext3">
                                    </div>
                                </div>

                                
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3">
                                    </div>
                                </div>
                                
                                
                             <center>   <button type="submit" class="btn btn-primary">MODIFIER</button></center>
                            </form>
                        </div>
                    </div>
 
                </div>
            </div>
                

@endsection 