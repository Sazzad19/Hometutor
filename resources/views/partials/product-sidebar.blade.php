<div class="list-group">
@php
$parents=App\Models\Catagory::orderBy('name','asc')->where('parent_id',NULL)->get();
@endphp

@foreach($parents as $parent)
 <a href="#main-{{$parent->id}}" class="list-group-item list-group-item-action" data-toggle="collapse"aria-expanded="false" aria-controls="main-{{$parent->id}}" >{{$parent->name}}</a>

<div class="collapse" id="main-{{$parent->id}}">
@php
$childs=App\Models\Catagory::orderBy('name','asc')->where('parent_id',$parent->id)->get();
@endphp


 @foreach($childs as $child)
 <div class="child-rows">
 <a href="#main-{{$child->id}}" class="list-group-item list-group-item-action">{{$child->name}}</a>
</div>
 @endforeach

</div>
 @endforeach
 
</div>	  