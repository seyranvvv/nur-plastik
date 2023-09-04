<section class="customer-logos slider mt-5 mb-1" style="background-color: #00044b">


    @foreach($flags as $flag)
        <div class="slide mt-2"><img src="{!! Storage::disk('local')->url($flag->image) !!}"></div>
    @endforeach

</section>