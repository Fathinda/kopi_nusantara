<x-layout>

<div class="container">
    <img class='banner' src="/assets/banner.png" alt="">
    <div class="section8">
    <div class="leftbar">
        <ul>
            @forelse($category as $categor)
             <li>
                <a href="{{route('slug',$categor->name)}}">{{$categor->name}}</a>
            </li>
            @empty

            @endforelse
        </ul>
    </div>



    
    <div class="wrap2">
        <div class="container">
            <div class="section2">
               <div class="wrapted">


                <div class="wrapcard19">
                   @forelse($product as $i => $products)
                 <div class="card1">
                        <img src="{{ asset('/uploaded/images/'.$products->images) }}" alt="">
                       <div class="text2">
                         <div class="category">
                            <p>{{$products->category->name}}</p>
                        </div>
                        <h3>{{$products->name}}</h3>
                       </div>
                    </div>
                   
                   @empty
                    <h1 class='mid'>Data Not Available</h1>
                   @endforelse
                    </div>
                </div>



               </div>

            </div>
        </div>
    </div>
    </div>
</div>



</x-layout>