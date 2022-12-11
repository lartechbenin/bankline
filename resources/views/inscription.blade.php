<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>inscription</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.1.1/dist/cdn.min.js"></script>
</head>

<body>


    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-8">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                            </a>
                            <marquee class="text-danger">Toutes les informations sur ce site demeurent confidentielles et ne seront jamais révélées.</marquee>
                            <h3</h3>
                        </div>
                        <hr></hr>
                    <div >    <center ><h5 class="text-danger">Informations personnelles</h5></center></div>
                        <hr></hr>

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
                        <p class="text-center mb-0">Avez vous déja un compte? <a href="{{route('connection')}}">connexion</a></p>
                        <marquee class="text-danger">Toutes les informations sur ce site demeurent confidentielles et ne seront jamais révélées.</marquee>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>