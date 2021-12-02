<form action="{{route('medias.search')}}" >
     <input type="text" name="Search" placeholder="Search" value="{{request()->Search ?? ''}}" required="">
    <input type="submit" value="Go">
 </form>