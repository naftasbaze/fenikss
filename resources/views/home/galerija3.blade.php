<section class="slice sct-color-1 bb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper style-2 v1" id="{{$lapa->slug}}">
                    <h3 class="section-title section-title-sm left">
                        <span>{{$lapa->nosaukums}}</span>
                    </h3>
                </div>


                <div class="row">
                    <div class="owl-carousel owl-theme">

                        <!-- Slide -->

                        @for ( $k=0 ; $k<$galerijas->count(); $k++)
                            <div class="item">
                                <div class="block style-3 v2">

                                    <div class="block-image">
                                        <div class="view view-third">
                                            <img src="{{ asset($galerijas[$k]->foto[0]->thumbnail_path) }}">
                                            <div class="mask mask-4 v2">
                                                <h2>{{$galerijas[$k]->nosaukums}}</h2>
                                                <p>{{$galerijas[$k]->apaksnos}}</p>
                                                <p>
                                                <a href="{{ asset($galerijas[$k]->foto[0]->thumbnail_path) }}"
                                                   class="btn btn-b-base-5 fancybox" data-fancybox="galerija-{{$galerijas[$k]->id}}">
                                                    {{ Lang::get('viskas.skatit')}}
                                                </a></p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="block-body">
                                        <h3 class="block-title no-margin no-padding">{{$galerijas[$k]->apaksnos}}</h3>
                                        <h5 class="no-margin no-padding">{{$galerijas[$k]->apraksts}}</h5>
                                    </div>

                                </div>
                            </div>{{--Item--}}
                        @endfor {{--k--}}
                    </div>
                </div> {{--Row--}}
            </div>
        </div>
    </div>
</section>

{{--<p>
    <a href="http://127.0.0.1:8000/galerijas/DSC07106.JPG" data-fancybox="images-preview">
        <img src="http://127.0.0.1:8000/galerijas/IM000018_m.jpg" />
    </a>
</p>--}}

<div style="display: none;">

    @foreach ($galerijas as $galerija)
        {{--{{$galerija}}--}}
        @foreach ($galerija->foto as $foto)
            <a href="{{asset($foto->path)}}" data-fancybox="galerija-{{$galerija->id}}"
               data-thumb="{{asset($foto->thumbnail_path)}}"></a>
            {{--{{$foto}}--}}
        @endforeach
    @endforeach

{{--

    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg" data-fancybox="images-preview"
       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"></a>

    <a href="http://127.0.0.1:8000/galerijas/DSC07106.JPG" data-fancybox="images-preview"
       data-thumb="https://farm1.staticflickr.com/582/32752534825_c25321a594_m_d.jpg"></a>

    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg" data-fancybox="images-preview"
       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"></a>

    <a href="http://127.0.0.1:8000/galerijas/DSC07106.JPG" data-fancybox="images-preview"
       data-thumb="https://farm1.staticflickr.com/582/32752534825_c25321a594_m_d.jpg"></a>

    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg" data-fancybox="images-preview"
       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"></a>

    <a href="http://127.0.0.1:8000/galerijas/DSC07106.JPG" data-fancybox="images-preview"
       data-thumb="https://farm1.staticflickr.com/582/32752534825_c25321a594_m_d.jpg"></a>

    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg" data-fancybox="images-preview"
       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"></a>

    <a href="http://127.0.0.1:8000/galerijas/DSC07106.JPG" data-fancybox="images-preview"
       data-thumb="https://farm1.staticflickr.com/582/32752534825_c25321a594_m_d.jpg"></a>

    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg" data-fancybox="images-preview"
       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"></a>

    <a href="http://127.0.0.1:8000/galerijas/DSC07106.JPG" data-fancybox="images-preview"
       data-thumb="https://farm1.staticflickr.com/582/32752534825_c25321a594_m_d.jpg"></a>

    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg" data-fancybox="images-preview"
       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"></a>


    <a href="http://127.0.0.1:8000/galerijas/DSC07106.JPG" data-fancybox="images-preview"
       data-thumb="https://farm1.staticflickr.com/582/32752534825_c25321a594_m_d.jpg"></a>

    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg" data-fancybox="images-preview"
       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"></a>

    <a href="http://127.0.0.1:8000/galerijas/DSC07106.JPG" data-fancybox="images-preview"
       data-thumb="https://farm1.staticflickr.com/582/32752534825_c25321a594_m_d.jpg"></a>

    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg" data-fancybox="images-preview"
       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"></a>

    <a href="http://127.0.0.1:8000/galerijas/DSC07106.JPG" data-fancybox="images-preview"
       data-thumb="https://farm1.staticflickr.com/582/32752534825_c25321a594_m_d.jpg"></a>

    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg" data-fancybox="images-preview"
       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"></a>

    <a href="http://127.0.0.1:8000/galerijas/DSC07106.JPG" data-fancybox="images-preview"
       data-thumb="https://farm1.staticflickr.com/582/32752534825_c25321a594_m_d.jpg"></a>

    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg" data-fancybox="images-preview"
       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"></a>

    <a href="http://127.0.0.1:8000/galerijas/DSC07106.JPG" data-fancybox="images-preview"
       data-thumb="https://farm1.staticflickr.com/582/32752534825_c25321a594_m_d.jpg"></a>

    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg" data-fancybox="images-preview"
       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"></a>

    <a href="http://127.0.0.1:8000/galerijas/DSC07106.JPG" data-fancybox="images-preview"
       data-thumb="https://farm1.staticflickr.com/582/32752534825_c25321a594_m_d.jpg"></a>

    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg" data-fancybox="images-preview"
       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"></a>

    <a href="http://127.0.0.1:8000/galerijas/DSC07106.JPG" data-fancybox="images-preview"
       data-thumb="https://farm1.staticflickr.com/582/32752534825_c25321a594_m_d.jpg"></a>

    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg" data-fancybox="images-preview"
       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"></a>

    <a href="http://127.0.0.1:8000/galerijas/DSC07106.JPG" data-fancybox="images-preview"
       data-thumb="https://farm1.staticflickr.com/582/32752534825_c25321a594_m_d.jpg"></a>

    <a href="https://farm3.staticflickr.com/2859/33395734202_522f9d8efd_k_d.jpg" data-fancybox="images-preview"
       data-thumb="https://farm3.staticflickr.com/2859/33395734202_15a81c4ef3_m_d.jpg"></a>
--}}

</div>