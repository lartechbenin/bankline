<div>
<form method="post" wire:submit.prevent="inscription()">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nom" placeholder="Nom de la famille " wire:model.lazy="nom">
                                    <label for="nom">Nom de la famille</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="prenom" placeholder="Prenom " wire:model.lazy="prenom">
                                    <label for="prenom">Prenom</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="pays" placeholder="Pays" wire:model.lazy="pays">
                                    <label for="pays">Pays</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="adresse_domicile" placeholder="adresse_domicile" wire:model.lazy="adresse_domicile">
                                    <label for="adresse_domicile">Adresse domicile</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="profession" placeholder="profession" wire:model.lazy="profession">
                                    <label for="profession">Profession</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="devise" placeholder="devise" wire:model.lazy="devise">
                                    <label for="devise">Devise</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="name@example.com" wire:model.lazy="email">
                                    <label for="email">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control" id="telephone" placeholder="Telepgone" wire:model.lazy="telephone">
                                    <label for="telephone">Telephone</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="date_naissance" placeholder="Date de naissance" wire:model.lazy="date_naissance">
                                    <label for="date_naissance">Date de naissance</label>
                                </div>
                                <hr></hr>
                                <div >    <center ><h5 class="text-danger">informations complémentaires </h5><h6>(facultatif)</h6></center></div>

                                <hr></hr>
                                <div class="form-floating mb-3">
                                <br><br>
                                    <input type="text" class="form-control" id="natialite" placeholder="Nationnalité">
                                    <label for="nationalite">Veuillez nous dire quelle est votre nationalité et votre lieu de naissance.</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="ville" placeholder="ville de naissance ">
                                    <label for="ville">ville de naissance</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="paysnaissance" placeholder="Pays de naissance ">
                                    <label for="paysnaissance">Pays de naissance</label>
                                </div>
                                <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-2 pt-0">Sexe</legend>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios"
                                                        id="homme"  checked wire:model="sexe" value="M">
                                                    <label class="form-check-label" for="homme">
                                                        Homme
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios"
                                                        id="femme" value="F" wire:model="sexe">
                                                    <label class="form-check-label" for="femme">
                                                    Femme
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                <hr></hr>
                                <div >    <center ><h5 class="text-danger">informations de Sécurité</h5></center></div>

                                <hr></hr>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="numeropiece" placeholder="Numéro de votre pièce à founir" wire:model.lazy="numero_carte">
                                    <label for="numeropiece">Numéro de votre pièce à founir(pièce d'identité, permis de conduis ect...)</label>
                                </div>
                                <div x-data="{
                                    type: 'password',
                                    statut: false,
                                    texte: 'Afficher le mot de passe',
                                    afficher: function afficher(){
                                        this.statut = !this.statut;

                                        this.type = this.statut ? 'text' : 'password';

                                        this.texte = this.statut ? 'Masquer le mot de passe' : 'Afficher le mot de passe';
                                    }
                                }">
                                        <div class="form-floating mb-4">
                                            <input x-bind:type="type" class="form-control" id="password_confirmation" placeholder="Password" wire:model.lazy="password_confirmation">
                                            <label for="password_confirmation">Password</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input x-bind:type="type" class="form-control" id="password" placeholder="Entré à nouveau mot de passe" wire:model.lazy="password">
                                            <label for="password">Entré à nouveau mot le passe</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="afficherpass" x-on:click="afficher">
                                                <label class="form-check-label" for="afficherpass" x-text="texte"></label>
                                            </div>
                                        </div>
                                </div>
                                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Creer un compte</button>
                        </form>
</div>
