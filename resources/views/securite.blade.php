@extends('template/template')

@section('title','compte')
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
                            <form>
                                
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">MOT DE PASSE ACTUEL</label>
                                    <div class="col-sm-10">
                                        <input x-bind:type="type" class="form-control" id="inputPassword3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword2" class="col-sm-2 col-form-label">NOUVEAU MOT DE PASSE</label>
                                    <div class="col-sm-10">
                                        <input  x-bind:type="type" class="form-control" id="inputPassword2">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword1" class="col-sm-2 col-form-label">RETAPER NOUVEAU MOT DE PASSE</label>
                                    <div class="col-sm-10">
                                        <input x-bind:type="type" class="form-control" id="inputPassword1">
                                    </div>
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