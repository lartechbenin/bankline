
@extends('Admintemplate/template')
@section('title','compte')
        <!-- Sidebar End -->
@section('content')


                
<div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                          <center>  <h3 class="mb-4 text-warning" >crediter un client</h3></center>
                          <form method="post" action="{{route('crediterMontant')}}">
                            @csrf
                          <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="id"
                                 placeholder="ID" value="{{$id}}" name="id">
                                <label for="id">I D</label>
                                
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="noms"
                                    placeholder="NOM ET PRENOM" value="{{$nom}} {{$prenom}}" disabled>
                                <label for="noms">NOM ET PRENOM</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="montant"  value="{{$solde}}" name="montant">
                                <label for="montant" >MONTANT</label>
                                
                            </div>
                            
                            
                            
                          
                            
                            <br>    <center>   <button type="submit" class="btn btn-primary">CREDITER</button></center>

                          </form>
  </div>
                            
                    </div>
@endsection 