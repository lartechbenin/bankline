
@extends('template/template')
@section('title','compte')
        <!-- Sidebar End -->
@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <div class="p-2 mb-2 bg-danger text-white"><marquee>Nous tenons à vous informer que les demandes de carte sont accepté seulement aux comptes supérieur à 3500 euro</marquee></div>
                </div>
            </div>
                
<div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                          <center>  <h3 class="mb-4 text-warning" >Demande d'optention de carte VISA</h3></center>
                          <form method="POST" action="">
                          <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="NOM">
                                <label for="floatingInput">NOM</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="PRENOM">
                                <label for="floatingInput">PRENOM</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="NAME@EXEMPLE.COM">
                                <label for="floatingInput">EMAIL</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="ADRESSE DE LIVRAISON">
                                <label for="floatingInput">ADRESSE DE LIVRAISON</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="TELEPHONE">
                                <label for="floatingInput">TELEPHONE</label>
                            </div>
                          
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">RAISON DE VOTRE DEMANDE</label>
                            </div>
                            <br>    <center>   <button type="submit" class="btn btn-primary">EFFECTUER LA DEMANDE </button></center>

                          </form>
  </div>
                            
                    </div>
@endsection 