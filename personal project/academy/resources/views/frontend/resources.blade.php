@extends('frontend.app')



@section('content')
    <section>
        <div class="resource-container">
            <h2>Study Resources</h2>
            @if(count($resources) >0)
            <div class="resource-box">
                @foreach($resources as $resource)
                    <div class="resource">
                        <div class="resource-banner">
                            <img src="{{asset($resource->image)}}" alt="">
                        </div>
                        <h3>{{optional($resource->country_info)->name}} - RunBook</h3>
                        <div class="resource-download">
                            <img src="{{optional($resource->country_info)->flag}}" alt="">
                            <a download href="{{$resource->pdf}}">Download</a>
                        </div>
                    </div>

                @endforeach

            </div>
            @else
            <div class="text-center">
                <h3 class="text-danger text-center" style="margin-top: 70px; font-weight: 800;">No Resources Available</h3>
            </div>
            @endif

        </div>
    </section>
@endsection
