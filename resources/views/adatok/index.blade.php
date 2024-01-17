<h1>autok</h1>

@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif
<ul>
    @foreach($adatok as $a)
    <form action="{{route('destroy',$a->id)}}" method="Post">
            @csrf
           
    <li> Márka:{{$a->Márka}}
       <ul> id:{{$a->id}}</ul>
       <ul>Neve:{{$a->Név}}</ul>
       <ul>Évjárata:{{$a->Évjárat}}</ul>
       <ul>km:{{$a->km}}</ul>
       <ul>Max sebesség:{{$a->Maxkmh}}</ul>
       @method('DELETE')
            <button type7="submit" class="danger" onclick="return confirm('tutira törli?')">Törlés</button>
    </form>
        
    
    </li>
    @endforeach
</ul>
