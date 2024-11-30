{{-- 

@includeunless(false,'pages.header',['names' => '$fruits'])

<h1>this is our first website</h1>
@includewhen(true,'pages.footer',['names' => '$fruits'])
 --}}

 <h1>This is our welcome  page</h1>


 <div>
    @foreach ($users as $item)
        {{$item->name}};
        {{$item->email}};
        {{$item->password}};    
    @endforeach
 </div>
