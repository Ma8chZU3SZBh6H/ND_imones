@extends('layouts.app')

@section('body')
<h1>Imonės:</h1>
<form action="{{route('home')}}" method="get">
    @csrf
    <label for="">Pajieška</label>
    <br>
    <input type="text" name="search">
    <input type="submit" value="Jieškoti">
</form>
<table>
  <tr>
    <th>Pavadinimas</th>
    <th>kodas</th>
    <th>pvm_kodas</th>
    <th>adresas</th>
    <th>telefonas</th>
    <th>paštas</th>
    <th>veikla</th>
    <th>vadovas</th>
    <th>veiksmai</th>
    <th></th>
  </tr>
  @if(count($comapnies) > 0)
    @foreach($comapnies as $company)
    <tr>
        <td>{{$company->pavadinimas}}</td>
        <td>{{$company->kodas}}</td>
        <td>{{$company->pvm_kodas}}</td>
        <td>{{$company->adresas}}</td>
        <td>{{$company->telefonas}}</td>
        <td>{{$company->pastas}}</td>
        <td>{{$company->veikla}}</td>
        <td>{{$company->vadovas}}</td>
        <td>
            <form action="{{route('company', $company)}}" method="get">
                @csrf
                <input type="submit" value="REDAGUOTI">
            </form>
        </td>
        <td>
            <form action="{{route('companies.delete', $company)}}" method="post">
                @method('delete')
                @csrf
                <input type="submit" value="IŠTRINTI">
            </form>
        </td>
    </tr>
    @endforeach
    @else
        <tr>
            <td>Nieko nerasta</td>
        </tr>
    @endif
  
</table>
{{ $comapnies->appends(Request::all())->links() }}
<br>
<form action="{{route('companies')}}" method="post">
    @csrf
    <label for="">Pavadinimas</label>
    <input name="pavadinimas" type="text" value="test{{rand()}}">
    @error('pavadinimas')
        <label>{{$message}}</label>
    @enderror
    <br>
    <label for="">kodas</label>
    <input name="kodas" type="text" value="123">
    @error('kodas')
        <label>{{$message}}</label>
    @enderror
    <br>
    <label for="">pvm_kodas</label>
    <input name="pvm_kodas" type="text" value="123">
    @error('pvm_kodas')
        <label>{{$message}}</label>
    @enderror
    <br>
    <label for="">adresas</label>
    <input name="adresas" type="text" value="test">
    @error('adresas')
        <label>{{$message}}</label>
    @enderror
    <br>
    <label for="">telefonas</label>
    <input name="telefonas" type="text" value="test">
    @error('telefonas')
        <label>{{$message}}</label>
    @enderror
    <br>
    <label for="">paštas</label>
    <input name="pastas" type="text" value="test@test.com">
    @error('pastas')
        <label>{{$message}}</label>
    @enderror
    <br>
    <label for="">veikla</label>
    <input name="veikla" type="text" value="test">
    @error('veikla')
        <label>{{$message}}</label>
    @enderror
    <br>
    <label for="">vadovas</label>
    <input name="vadovas" type="text" value="test">
    @error('vadovas')
        <label>{{$message}}</label>
    @enderror
    <br>
    <input type="submit" value="Pridėti">
</form>

@endsection