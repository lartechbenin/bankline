
@extends('template/template')
@section('title','compte')
        <!-- Sidebar End -->
@section('content')
<center>
<div class="col-sm-12 col-xl-6">
    <form method="post" action="{{route('mailClient')}}">
        @csrf
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4"><strong> Enoyer  nous un message</strong></h6>
                           
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="motif"
                                    placeholder="motif" name="motif" value="{{old('motif')}}">
                                <label for="motif"><strong>Motif</strong></label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="hidden" class="form-control" id="motif"
                                    placeholder="eamil" name="email" value="{{Auth::user()->email}}">
                                <label for="email"><strong>Motif</strong></label>
                            </div>
                           
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Discuter avec nous"
                                    id="messageClient" style="height: 150px;" name="messageClient" ></textarea>
                                <label for="messageClient"><strong>Discuter avec nous</strong> </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>

    </form>
                    </div>
</center>
@endsection 