@extends('layouts.app')

@section('body')
    <form action="{{route('company.update', $company)}}" method="post">
        @csrf
        <label for="">Pavadinimas</label>
        <input name="pavadinimas" type="text" value="{{$company->pavadinimas}}">
        @error('pavadinimas')
            <label>{{$message}}</label>
        @enderror
        <br>
        <label for="">kodas</label>
        <input name="kodas" type="text" value="{{$company->kodas}}">
        @error('kodas')
            <label>{{$message}}</label>
        @enderror
        <br>
        <label for="">pvm_kodas</label>
        <input name="pvm_kodas" type="text" value="{{$company->pvm_kodas}}">
        @error('pvm_kodas')
            <label>{{$message}}</label>
        @enderror
        <br>
        <label for="">adresas</label>
        <input name="adresas" type="text" value="{{$company->adresas}}">
        @error('adresas')
            <label>{{$message}}</label>
        @enderror
        <br>
        <label for="">telefonas</label>
        <input name="telefonas" type="text" value="{{$company->telefonas}}">
        @error('telefonas')
            <label>{{$message}}</label>
        @enderror
        <br>
        <label for="">paštas</label>
        <input name="pastas" type="text" value="{{$company->pastas}}">
        @error('pastas')
            <label>{{$message}}</label>
        @enderror
        <br>
        <label for="">veikla</label>
        <input name="veikla" type="text" value="{{$company->veikla}}">
        @error('veikla')
            <label>{{$message}}</label>
        @enderror
        <br>
        <label for="">vadovas</label>
        <input name="vadovas" type="text" value="{{$company->vadovas}}">
        @error('vadovas')
            <label>{{$message}}</label>
        @enderror
        <br>
        <input type="submit" value="Atnaujinti">
    </form>
@endsection