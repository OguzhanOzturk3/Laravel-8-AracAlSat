<!-- Start slider -->
<section id="aa-slider">
    <div class="aa-slider-area">
        <div id="sequence" class="seq">
            <div class="seq-screen">
                <ul class="seq-canvas">
                    <!-- single slide item -->

                   @foreach($slider as $rs)

                    <li>
                        <div class="seq-model">
                            <img data-seq src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"  alt="Men slide img" />
                        </div>
                        <div class="seq-title">

                            <h2 data-seq >{{$rs->price}}$</h2>
                            <p data-seq style="color:red">{{$rs->title}}</p>
                            <a data-seq href="{{route('car',['id' => $rs->id])}}" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                        </div>
                    </li>
                    <!-- single slide item -->
                    @endforeach

                </ul>
            </div>
            <!-- slider navigation btn -->
            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
            </fieldset>
        </div>
    </div>
</section>
<!-- / slider -->
