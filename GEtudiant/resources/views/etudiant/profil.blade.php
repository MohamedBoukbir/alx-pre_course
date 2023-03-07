@extends('layouts.body')

@section('Title')
    etudient
@endsection

@section('UserName')
    Mohamed boukbir
@endsection

@section('content')
<style> 
.liProfil{
        font-size: 20px;
        line-height: 52px;
    }
</style>
<div class="d-flex flex-column justify-content-center">
    <div class="d-flex flex-row justify-content-center align-items-center" style="margin-top:50px; margin-bottom: 20px;">
        
        <div class="d-flex flex-column align-items-center">
            <img src="/images/user.png" alt="student" width="260">
        </div>
        
        <ul>
            <li class="liProfil"><b>Nom :</b> boukbir</li>
            <li class="liProfil"><b>Prenom :</b>  Mohamed </li>
            <li class="liProfil"><b>Date de naissance :</b>  12/12/2002 </li>
            <li class="liProfil"><b>Téléphone :</b> 0615564534 </li>
            <li class="liProfil"><b>Filière :</b>gigd</li>
            <li class="liProfil"><b>Email :</b>  fvgrrt@gmail.com </li>
            <a href="javascript:void(0)"  class="btn btn-primary" style="padding: 5px 50px;" >
                <i class="far fa-edit"></i>
                Modifier Mes Infos
            </a>
        </ul>
    </div>
  </div>
@endsection