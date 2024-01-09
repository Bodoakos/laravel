<h1>alkatreszek</h1>

@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif
<ul>
    @foreach($alkatresz as $a)
    <li> {{$a->id}}
       <ul>{{$a->neve}}</ul><button>szerkeszt</button><button type7="submit" class="danger" onclick="return confirm('tutira törli?')">Törlés</button>
       
      
      
        
    </form>
    </li>
    @endforeach
</ul>
