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
          @error('echec')
          <span class="alert alert-danger">{{$message}}</span>
          @enderror

          
          
          
          
                  <h3 class="box-title">Modification pour l'utilisateur <span class=" alert-info">{{session('success')}}</span>
                  
                  </h3>
                  
          </div>
          
          <form method="POST" action="{{route('miseAjour')}}" id="updateform">
            @csrf

            <input type="hidden" name="id" value="{{$id}}" >
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
                      <input type="text" name="nom" value="{{$nom}}" class="form-control" id="nom"/>
                    </div><!-- /.input group -->
                    @error('nom')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Prenom*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="prenom" value="{{$prenom}}" class="form-control" id="prenom"/>
                    </div><!-- /.input group -->
                    @error('prenom')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Email*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="email" name="email" value="{{$email}}" class="form-control" id="email"/>
                    </div><!-- /.input group -->
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>sexe*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="sexe" value="{{$sexe}}" class="form-control" id="sexe"/>
                    </div><!-- /.input group -->
                    @error('sexe')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Date de naissance*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="date_naissance" value="{{$date_naissance}}" class="form-control" id="date"/>
                    </div><!-- /.input group -->
                    @error('date_naissace')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div><!-- /.form group -->
                  
                  <div class="form-group">
                    <label>Telephone*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="telephone" value="{{$telephone}}" class="form-control" id="telephone"/>
                    </div><!-- /.input group -->
                    @error('telephone')
                    <span class="text-danger">{{$telephone}}</span>
                    @enderror
                  </div><!-- /.form group -->

                  <div class="form-group">
                    <label>Pays*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="pays" value="{{$pays}}" class="form-control" id="pays"/>
                    </div><!-- /.input group -->
                    @error('pays')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
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
                      <input type="text" name="adresse_domicile" value="{{$adresse_domicile}}" class="form-control"  class="form-control" id="adresse" />
                    </div><!-- /.input group -->
                    @error('adresse_domicile')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div><!-- /.form group -->
                  
                  <div class="form-group">
                    <label>devise*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="devise" value="{{$devise}}"  class="form-control" id="devise" />
                  </div><!-- /.input group -->
                  @error('devise')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
              </div><!-- /.form group -->
              
              
              <div class="form-group">
                    <label>etape*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="etape" value="{{$etape}}"  class="form-control" id="etape" />
                    </div><!-- /.input group -->
                    @error('etape')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
              </div><!-- /.form group -->
              <div class="form-group">
                    <label>verif1*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="code1" value="{{$code1}}"  class="form-control" id="verif1" />
                    </div><!-- /.input group -->
                    @error('code1')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
              </div><!-- /.form group -->
              <div class="form-group">
                    <label>verif2*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="code2" value="{{$code2}}"  class="form-control" id="verif2" />
                    </div><!-- /.input group -->
                    @error('code2')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
              </div><!-- /.form group -->
              <div class="form-group">
                    <label>verif3*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="code3" value="{{$code3}}"  class="form-control" id="verif3" />
                    </div><!-- /.input group -->
                    @error('code3')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
              </div><!-- /.form group -->     

              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <label>verif4*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="code4" value="{{$code4}}"  class="form-control" id="verif4" />
                    </div><!-- /.input group -->
                    @error('code4')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div><!-- /.form group -->
                  <div class="form-group">
                    <label>verif5*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="code5" value="{{$code5}}"  class="form-control" id="verif5" />
                    </div><!-- /.input group -->
                    @error('code5')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div><!-- /.form group -->
                  
              
              <div class="form-group">
                    <label>Pourcentage*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="pourcentage" value="{{$pourcentage}}"  class="form-control" id="pourcentage" />
                    </div><!-- /.input group -->
                    @error('pourcentage')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
              </div><!-- /.form group -->

              <div class="form-group">
                    <label>code de blocage*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="bloque_compte" value="{{$bloque_compte}}"  class="form-control" id="code" />
                    </div><!-- /.input group -->
                    @error('bloque_compte')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
              </div><!-- /.form group -->

              <div class="form-group">
                    <label>montant de blocage*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="montant_bloque" value="{{$montant_bloque}}"  class="form-control" id="debloquer" />
                    </div><!-- /.input group -->
                    @error('montant_bloque')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
              </div><!-- /.form group -->

               <!-- phone mask -->
               <div class="form-group">
                    <label>Montant Actuel (En Euro)*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="solde" value="{{$solde}}"  class="form-control" id="montant" />
                    </div><!-- /.input group -->
                    @error('solde')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div><!-- /.form group -->
                  <!-- phone mask -->


                  <div class="form-group">
                    <div class="input-group">
                      <button class="btn btn-block btn-primary btn-lg"  id="modifier" type="submit">VALIDER</button>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                   

              </div>
            </div>
          </form>
            </div>       
          
  
            <!-- Widgets End -->


           @endsection 