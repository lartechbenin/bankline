<div>
<div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                             <center>   <h6 class="text-primary">ESPACE DE CONNEXION BANCAIRE</h6></center>
                            </a>
                        </div>
                        <form method="post" wire:submit.prevent="connexion()">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="name@example.com" wire:model.lazy="email">
                                        <label for="email">adress Email </label>
                                        @if(session()->has('email'))
                                        <span class="text-danger">{{session('email')}}</span>
                                        @endif
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div x-data="{
                                            type: 'password',
                                            texte: 'Afficher le mot de passe',
                                            'etat': false,
                                            cliquer: function cliquer(){
                                                this.etat = !this.etat;
                                                this.texte = this.etat ? 'Masquer le mot de passe' : 'Afficher le mot de passe';
                                                this.type = this.etat ? 'text' : 'password';
                                            }
                                        }">
                                    <div class="form-floating mb-4">
                                        <input x-bind:type="type" class="form-control" id="password" placeholder="Mot de passe" wire:model.lazy="password">
                                        <label for="password">Mot de passe</label>
                                        @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4" >
                                        <div class="form-check" >
                                            <input type="checkbox" class="form-check-input" id="clique" x-on:click="cliquer">
                                            <label class="form-check-label" for="clique" x-text="texte"></label>
                                        </div>
                                        <a href="{{route('forgetmdp')}}">Mot de passe oublier</a>
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Connexion</button>
                                    <p class="text-center mb-0">Vous n'avez pas de compte? <a href="{{route('inscription')}}">Creer un compte</a></p>
                        </form>
</div>
