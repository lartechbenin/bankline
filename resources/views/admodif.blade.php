@extends('Admintemplate/template')
@section('title','compte')
        <!-- Sidebar End -->
@section('content')

        <!-- Content Start -->
  
     
<div class="col-sm-12 col-xl-12 ">
                        
                    </div>
                    
                    
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <div class="col-sm-12 col-xl-12 ">
                        <div class="bg-light rounded h-100 p-4 ">
                           <center> <h6 class="mb-4 text-success">Liste des clients</h6></center>
                            <table class="table table-striped text-success " >
                                <thead >
                                    <tr>
                                    <th scope="col">ID</th>
                                        <th scope="col">Nom et Prenom</th>
                                        <th scope="col">pays</th>
                                        <th scope="col">Adresse</th>
                                        
                                        <th scope="col">Montant</th>
                                        <th scope="col">Date et heure</th>
                                        <th scope="col">Modifier</th>

                                    </tr>
                                </thead>
                                <tbody>                                    
                                @foreach($listeClient->chunk(25) as $lists)
                                @foreach($lists as $list)
                                    <tr>
                                        <th >{{$list->id}}</th>
                                        <td >{{$list->nom}} {{$list->prenom}}</td>
                                        <td >{{$list->pays}}</td>
                                        <td >{{$list->adresse_domicile}}</td>
                                        
                                        <td >{{$list->solde}}</td>
                                        <td >{{$list->created_at->diffForHumans()}}</td>
                                        <td ><a href="{{route('modifier', ['user'=>$list])}}" class="alert-info">modifier</a></td>
                                       
                                    </tr>
                                    @endforeach
                                @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
            <!-- Widgets End -->


           @endsection 