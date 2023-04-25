<x-layout>
@include('partials._hero')
@include('partials._search')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

    {{-- @if(count($Listings) == 0)
    <p>No listing found</p>
    @endif --}}

    @unless(count($listings) == 0)

    @foreach ($listings as $listing)
        {{-- Access the component we created  and pass the props--}}
        <x-listing-card :listing="$listing" />
    @endforeach

    @else 
        <p>No Listings found</p>
    @endunless
</div>

<div class="mt-6 p-4">
    {{$listings->links()}}
</div>
</x-layout>
