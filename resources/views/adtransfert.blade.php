@extends('Admintemplate/template')
@section('title','compte')
        <!-- Sidebar End -->
@section('content')

        <!-- Content Start -->
  
     
<div class="col-sm-12 col-xl-12 ">
                        
                    </div>
                    
                    
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Rappel </h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre de client</th>
                                    <th scope="col">Transfert en cour</th>
                                    <th scope="col">Transfert terminé</th>
                                    <th scope="col">pourcentage transfert emit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>02</td>
                                    <td>05</td>
                                    <td>1</td>
                                    <td>10%</td>
                                </tr>
                             
                             
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
            <hr>

            <div class="col-sm-12 col-xl-12 ">
                        <div class="bg-light rounded h-100 p-4 ">
                           <center> <h6 class="mb-4 text-success">Légende de transfert</h6></center>
                            <table class="table table-striped text-success ">
                                <thead >
                                    <tr>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                        <th scope="col">3</th>
                                        <th scope="col">4</th>
                                        <th scope="col">5</th>
                                        <th scope="col">6 </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>


            <hr>


            <!-- Widgets Start -->
            <div class="col-sm-12 col-xl-12 ">
                        <div class="bg-light rounded h-100 p-4 ">
                           <center> <h6 class="mb-4 text-success">Liste des clients</h6></center>
                            <table class="table table-striped text-success ">
                                <thead >
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nom et Prenom</th>
                                        <th scope="col">Etape</th>
                                        <th scope="col">Code1</th>
                                        <th scope="col">Code2</th>
                                        <th scope="col">Code3 </th>
                                        <th scope="col">Code4</th>
                                        <th scope="col">Code5</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                       
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
            <!-- Widgets End -->


           @endsection 