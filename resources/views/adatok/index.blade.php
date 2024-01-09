<h1>autok</h1>

@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif
<ul>
    @foreach($adatok as $a)
    <li> Márka:{{$a->Márka}}
       <ul> id:{{$a->id}}</ul><button type7="submit" class="danger" onclick="return confirm('tutira törli?')">Törlés</button>
       <ul>Neve:{{$a->Név}}</ul><button>szerkeszt</button><button type7="submit" class="danger" onclick="return confirm('tutira törli?')">Törlés</button>
       <ul>Évjárata:{{$a->Évjárat}}</ul><button>szerkeszt</button><button type7="submit" class="danger" onclick="return confirm('tutira törli?')">Törlés</button>
       <ul>km:{{$a->km}}</ul><button>szerkeszt</button><button type7="submit" class="danger" onclick="return confirm('tutira törli?')">Törlés</button>
       <ul>Max sebesség:{{$a->Maxkmh}}</ul><button>szerkeszt</button><button type7="submit" class="danger" onclick="return confirm('tutira törli?')">Törlés</button>
      
        
    </form>
    </li>
    @endforeach
</ul>
