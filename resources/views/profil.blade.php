
@extends('template/template')
@section('title','compte')
        <!-- Sidebar End -->
@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        
                    </div>
                    
                    
                    
                    
                    
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Information de profil</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">NOM</th>
                                            <th scope="col">PRENOM</th>
                                            <th scope="col">NUMERO DE COMPTE</th>
                                            <th scope="col">EMAIL</th>
                                            <th scope="col">ADRESSE DE DOMICILE</th>
                                            <th scope="col">TELEPHONE</th>
                                            <th scope="col">PROFESSION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td>{{Auth::user()->nom}}</td>
                                            <td>{{Auth::user()->prenom}}</td>
                                            <td>{{$numero_compte->numero_compte}}</td>
                                            <td>{{Auth::user()->email}}</td>
                                            <td>{{Auth::user()->adresse_domicile}}</td>
                                            <td>{{Auth::user()->telephone}}</td>
                                            <td>{{Auth::user()->profession}}</td>
                                        </tr>
                                       
                                       
                                    </tbody>
                                    
                                </table>
                            </div>
                           

                        </div>
                        
                    </div>
                </div>
</div>


@endsection 