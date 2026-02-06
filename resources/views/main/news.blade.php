<x-layout>

    <div class="container">
        <img class='banner' src="/assets/banner.png" alt="">
        <div class="section8">

            <div class="wrap2">
                <div class="container">
                    <div class="section2">
                        <div class="wrapted">


                            <div class="wrapcard19" style="margin-top: 40px;">
                                @foreach($news as $data)
                                <div class="card1">
                                    <img src="{{ url('/uploaded/images/'.$data->images) }}" alt="">
                                    <div class="text2" style="overflow: hidden;">
                                        <div class="category">
                                            <p>{{ $data->title }}</p>
                                        </div>
                                        <h3>{{ $data->description }}</h3>
                                    </div>
                                </div>
                                @endforeach
                                    
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



</x-layout>