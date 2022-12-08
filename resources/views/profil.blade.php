
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
                                            <th scope="row">1</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>jhon@email.com</td>
                                            <td>USA</td>
                                            <td>123</td>
                                            <td>Member</td>
                                        </tr>
                                       
                                       
                                    </tbody>
                                    
                                </table>
                            </div>
                            <button type="button" class="btn btn-success m-2" >MODIFIER</button>

                        </div>
                        
                    </div>
                </div>
</div>


@endsection 