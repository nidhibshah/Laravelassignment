@extends('layout')	
@section('a1')
@foreach   ($assposts as $p)
    			
				
								
									<img src={{$p->imgpath}}  height="200" width="200" alt="" />
									
										
											<h2>{{$p->title}}</h2>
											<p>{{$p->postdate}}</p> 
										
										<p>{{$p->description}}</p>
									
								

						
		            @endforeach
@endsection