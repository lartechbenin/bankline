
@extends('Admintemplate/template')
@section('title','compte')
        <!-- Sidebar End -->
@section('content')


                
<div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                          <center>  <h3 class="mb-4 text-warning" >crediter un client</h3></center>
                          <form method="POST" action="">
                          <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="ID">
                                <label for="floatingInput">I D</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="NOM ET PRENOM">
                                <label for="floatingInput">NOM ET PRENOM</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="MONTANT">
                                <label for="floatingInput">MONTANT</label>
                            </div>
                            
                            
                            
                          
                            
                            <br>    <center>   <button type="submit" class="btn btn-primary">CREDITER</button></center>

                          </form>
  </div>
                            
                    </div>
@endsection 