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
            
          
          <div class="box-header">
                  <h3 class="box-title">Modification pour l'utilisateur</h3>
          </div>
          <form method="POST" action="" id="updateform">
          <div class="row">
          
            <div class="col-md-4">                
                    <input type="hidden" name="" value="">                      
                  <div class="box box-danger">
              
                <div class="box-body">
                  
                  <div class="form-group">
                    <label>Nom*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="nom" value="" class="form-control" id="nom"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Prenom*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="prenom" value="" class="form-control" id="prenom"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Email*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="email" name="email" value="" class="form-control" id="email"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>sexe*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="sexe" value="" class="form-control" id="sexe"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Date de naissance*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="date" value="" class="form-control" id="date"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  
                  <div class="form-group">
                    <label>Telephone*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="telephone" value="" class="form-control" id="telephone"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Pays*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="pays" value="" class="form-control" id="pays"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Ville*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="ville" value="" class="form-control" id="ville"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <!-- phone mask -->
                  <div class="form-group">
                    <label>Montant Actuel (En Euro)*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="montant" value=""  class="form-control" id="montant" />
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  <!-- phone mask -->
                  <div class="form-group">
                    <div class="input-group">
                      <button class="btn btn-block btn-primary btn-lg" name="modifier" id="modifier" type="submit">VALIDER</button>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <label>Adresse*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="adresse" value=""  class="form-control" id="adresse" />
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  <div class="form-group">
                    <label>Login*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="login" value=""  class="form-control" id="login" />
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  <div class="form-group">
                    <label>devise*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="devise" value=""  class="form-control" id="devise" />
                  </div><!-- /.input group -->
              </div><!-- /.form group -->
              <div class="form-group">
                    <label>compte*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="compte" value=""  class="form-control" id="compte" />
                    </div><!-- /.input group -->
              </div><!-- /.form group -->
              <div class="form-group">
                    <label>iban*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="iban" value=""  class="form-control" id="iban" />
                    </div><!-- /.input group -->
              </div><!-- /.form group -->
              <div class="form-group">
                    <label>etape*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="etape" value=""  class="form-control" id="etape" />
                    </div><!-- /.input group -->
              </div><!-- /.form group -->
              <div class="form-group">
                    <label>verif1*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="verif1" value=""  class="form-control" id="verif1" />
                    </div><!-- /.input group -->
              </div><!-- /.form group -->
              <div class="form-group">
                    <label>verif2*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="verif2" value=""  class="form-control" id="verif2" />
                    </div><!-- /.input group -->
              </div><!-- /.form group -->
              <div class="form-group">
                    <label>verif3*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="verif3" value=""  class="form-control" id="verif3" />
                    </div><!-- /.input group -->
              </div><!-- /.form group -->     

              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <label>verif4*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="verif4" value=""  class="form-control" id="verif4" />
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  <div class="form-group">
                    <label>verif5*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="verif5" value=""  class="form-control" id="verif5" />
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  <div class="form-group">
                    <label>verif6*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="verif6" value=""  class="form-control" id="verif6" />
                  </div><!-- /.input group -->
              </div><!-- /.form group -->
              <div class="form-group">
                    <label>verif7*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="verif7" value=""  class="form-control" id="verif7" />
                    </div><!-- /.input group -->
              </div><!-- /.form group -->
              <div class="form-group">
                    <label>Pourcentage*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="pourcentage" value=""  class="form-control" id="pourcentage" />
                    </div><!-- /.input group -->
              </div><!-- /.form group -->

              <div class="form-group">
                    <label>code de blocage*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="code" value=""  class="form-control" id="code" />
                    </div><!-- /.input group -->
              </div><!-- /.form group -->

              <div class="form-group">
                    <label>montant de blocage*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="debloquer" value=""  class="form-control" id="debloquer" />
                    </div><!-- /.input group -->
              </div><!-- /.form group -->
                   

              </div>
              

  </div>       
          </form>
  
            <!-- Widgets End -->


           @endsection 