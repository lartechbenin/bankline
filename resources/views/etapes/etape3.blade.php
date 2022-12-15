@extends('template/template')
@section('title','etape3')
        <!-- Sidebar End -->
@section('content')

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">transfert en cours</h6>
                    </div>                    
                </div>                
            </div> 
            <form method="post" action="{{route('verifierCode', ['etape'=>$etape])}}" id="formulaire">
                                @csrf
                                <div class="row mb-3">
                                    <label for="code" class="col-sm-2 col-form-label">code</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="code" name="code" value="{{old('code')}}">
                                    </div>
                                    @error('code')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror                                    
                                </div>                      
                             <center>   <button type="submit" class="btn btn-primary">Verifier Code</button></center>
            </form>
            
            
                    <center id="displayNone" >
                        <div class="position-relative" >
                        <img  src="{{asset('img/loading3.gif')}}" alt="loading">
                        <h1 id="pourcentage" class="alert-info"></h1>                      
                        </div>
                    </center>
                

                    <script src="{{asset('js/etapes/etape1.js')}}"></script>
           @endsection 
           