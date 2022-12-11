@extends('template/template')

@section('title','Modifer mot de passe')
        <!-- Sidebar End -->
@section('content')


<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4" x-data="{

                                text: 'Afficher',
                                etat: false,
                                type: 'password',

                                cliquer: function cliquer(){
                                    
                                    this.etat = !this.etat
                                    
                                    this.text = this.etat ? 'Masquer' : 'Afficher'

                                    this.type= this.etat ? 'text' : 'password'
                                }

                            }">
                            <form method="post" action="{{route('modifierPass',['user'=>Auth::user()])}}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">MOT DE PASSE ACTUEL</label>
                                    <div class="col-sm-10">
                                        <input x-bind:type="type" class="form-control" id="inputPassword3" name="current_password" value="{{old('current_password')}}">
                                    </div>
                                    @error('current_password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    @if(session()->has('success'))
                                    <span class="alert alert-success">{{session('success')}}</span>
                                    @endif
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">NOUVEAU MOT DE PASSE</label>
                                    <div class="col-sm-10">
                                        <input  x-bind:type="type" class="form-control" id="inputPassword2" name="password_confirmation" value="{{old('password_confirmation')}}">
                                    </div>
                                    @error('password_confirmation')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword1" class="col-sm-2 col-form-label">RETAPER NOUVEAU MOT DE PASSE</label>
                                    <div class="col-sm-10">
                                        <input x-bind:type="type" class="form-control" id="inputPassword1" name="password" value="{{old('password')}}">
                                    </div>
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" x-on:click="cliquer">
                                
                                <label class="form-check-label" for="flexSwitchCheckDefault" x-text="text"></label>
                            </div>
                                
                                
                             <center>   <button type="submit" class="btn btn-primary">MODIFIER</button></center>
                            </form>
                        </div>
                    </div>
 
                </div>
            </div>
                

@endsection 