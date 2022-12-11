
@extends('template/template')
@section('title','compte')
        <!-- Sidebar End -->
@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <form method="post" action="{{route('modifierProfil', ['user'=>Auth::user()])}}">
                            @csrf    
                            <div class="row mb-3">
                                    <label for="nom" class="col-sm-2 col-form-label">NOM</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nom" name="nom" disabled value="{{Auth::user()->nom}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="prenom" class="col-sm-2 col-form-label">PRENOM</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="prenom" name="prenom" disabled value="{{Auth::user()->prenom}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="numero_compte" class="col-sm-2 col-form-label">NUMERO DE COMPTE</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="numero_compte" disabled value>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">EMAIL</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" disabled>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="adresse_domicile" class="col-sm-2 col-form-label">ADRESSE DE DOMICILE</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="adresse_domicile" name="adresse_domicile"  value="{{Auth::user()->adresse_domicile}}">
                                    </div>
                                    @error('adresse_domicile')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror

                                    @if(session()->has('success'))
                                    <span class="alert alert-success">{{session('success')}}</span>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <label for="telephone" class="col-sm-2 col-form-label">TELEPHONE</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="telephone" name="telephone" disabled value="{{Auth::user()->telephone}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="profession" class="col-sm-2 col-form-label">PROFESSION</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="profession" name="profession" disabled value="{{Auth::user()->profession}}">
                                    </div>
                                </div>

                                
                               
                                
                                
                             <center>   <button type="submit" class="btn btn-primary">MODIFIER</button></center>
                            </form>
                        </div>
                    </div>
 
                </div>
            </div>
                

@endsection 