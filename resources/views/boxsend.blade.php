
@extends('template/template')
@section('title','compte')
        <!-- Sidebar End -->
@section('content')
<center>
<div class="col-sm-12 col-xl-6">
    <form method="post">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4"><strong> Enoyer  nous un message</strong></h6>
                           
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText"
                                    placeholder="motif">
                                <label for="floatingtext"><strong>Motif</strong></label>
                            </div>
                           
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Discuter avec nous"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea"><strong>Discuter avec nous</strong> </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>

    </form>
                    </div>
</center>
@endsection 