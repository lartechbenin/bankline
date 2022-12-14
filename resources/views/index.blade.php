@extends('template/template')
@section('title','compte')
        <!-- Sidebar End -->
@section('content')

        <!-- Content Start -->
  
     
<div class="col-sm-12 col-xl-12 ">
                        <div class="bg-light rounded h-100 p-4 ">
                           <center> <h6 class="mb-4 text-success">Informations                                            
                            bancaire</h6></center>
                            <table class="table table-striped text-success ">
                                <thead >
                                    <tr>
                                        <th scope="col">DOMICILIATION</th>
                                        <th scope="col">titulaire</th>
                                        <th scope="col">Numero de compte</th>
                                        <th scope="col">Adresse domicile</th>
                                        <th scope="col">Nom de la banque</th>



                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th scope="row">{{$banque->domiciliation}}</th>
                                        <td>{{Auth::user()->nom}}</td>
                                        <td>{{$banque->numero_compte}}</td>
                                        <td>{{Auth::user()->adresse_domicile}}</td>
                                        <td>{{$banque->nom}}</td>
                                       
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                           <center> <h6 class="mb-4 text-info">Information personnelle</h6></center>
                            <table class="table table-striped text-info">
                                <thead>
                                    <tr>
                                        <th  scope="col">Nom</th>
                                        <th scope="col">Prenom</th>
                                        <th scope="col">Numero pi??ce d'identit??</th>
                                        <th scope="col">Adresse Email</th>
                                        <th scope="col">Adresse domicile</th>
                                        <th scope="col">T??l??phone</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">{{Auth::user()->nom}}</th>
                                        <td>{{Auth::user()->prenom}}</td>
                                        <td>{{Auth::user()->numero_carte}}</td>
                                        <td>{{Auth::user()->email}}</td>
                                        <td>{{Auth::user()->adresse_domicile}}</td>
                                        <td>{{Auth::user()->telephone}}</td>
                                       
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
<i class="fa fa-credit-card-alt fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">SOLDE DU COMPTE</p>
                                <h6 class="mb-0">{{Auth::user()->solde}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-credit-card fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">MONTANT EN ATTENTE</p>
                           <h6 class="mb-0">{{Auth::user()->montant_attente}}</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-credit-card fa-3x text-primary"></i>
                            <div class="ms-3">
                             <a href="{{route('visa')}}"   <p class="mb-2">DEMANDER UNE CARTE</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user-circle-o fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">STATUT DU COMPTE</p>
                                <h6 class="mb-0">{{Auth::user()->statut_compte}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Worldwide Sales</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Salse & Revenue</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="salse-revenue"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            @if(!$historiques->isEmpty())
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Historique de Transfert</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Montant</th>
                                    <th scope="col">Iban transfert</th>
                                    <th scope="col">D??tail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($historiques->chunk(25) as $historiqus)
                                @foreach($historiqus as $historique)
                                <tr>
                                    <td>{{$historique->created_at}}</td>
                                    <td>{{$historique->montant}}</td>
                                    <td>{{$historique->iban}}</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                @endforeach
                                @endforeach
                             
                             
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-8">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                            </div>
                     
                            <div class="d-flex align-items-center pt-3">
                                <img class="rounded-circle flex-shrink-0" src="img/logo.png" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">{{$banque->nom}}</h6>
                                        <small>1 minutes </small>
                                    </div>
                                    <span>Bienvenue ?? {{$banque->nom}} ,nous exp??rons que vous ferez une bonne exp??rience avec nous ...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        
                    </div>
                </div>
            </div>
            <!-- Widgets End -->


           @endsection 