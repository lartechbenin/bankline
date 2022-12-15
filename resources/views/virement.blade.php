
@extends('template/template')
@section('title','compte')
        <!-- Sidebar End -->
@section('content')
<center>
    
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-8">
                        <div class="bg-light rounded h-100 p-4">
                            <form method="post" action="{{route('virementEnligne')}}">
                             
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="nom_prenom">NOM ET PRENOM</span>
                                <input type="text" class="form-control" id="nom_prenom" aria-describedby="basic-addon6" name="nom_prenom" value="{{Auth::user()->nom}} {{Auth::user()->prenom}}">
                                @error('nom_prenom')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="montant">MONTANT</span>
                                <input type="text" class="form-control" id="montant" aria-describedby="basic-addon6" name="montant" value="{{Auth::user()->solde}}">
                                @error('montant')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            
                                <div class="input-group mb-3">
                                <span class="input-group-text" id="iban">I B A N</span>
                                <input type="text" class="form-control" id="iban" aria-describedby="basic-addon6" name="iban">
                                @error('iban')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                           
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="motif">MOTIF</span>
                                <input type="text" class="form-control" id="motif" aria-describedby="basic-addon6" name="motif">
                                @error('motif')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>  

                            <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-1 pt-2"></legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="option2" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                           <strong> virement direct</strong>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                               <strong> virement sepa</strong>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            
                             <center>   <button type="submit" class="btn btn-primary">TRANSFERT</button></center>
                            </form>
                        </div>
                    </div>
 
                </div>
            </div>
</center>
@endsection 