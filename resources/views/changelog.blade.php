@extends('partials.skeleton', ['pageTitle' => 'Monica pricing page'])

@section('content')

<div class="mw8 center ph3">
  <div class="cf">
    <div class="fl w-100 tc mb3">
      <h1 class="f2 normal lh-copy">All the changes made to Monica</h1>
    </div>
  </div>
</div>

<div class="mw8 center ph3 mb3">
  <div class="cf">
    <div class="fl w-100">
      @foreach ($releases as $release)

      <div class="pb3 pt3 bb b--gray-monica">
        <h3>
          {{ $release->release_number }}
          <span class="normal f5">
            - released {{ $release->released_on->format('Y-m-d') }} -

            <svg width="14px" height="14px" viewBox="0 0 33 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs></defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="GitHub-Mark" transform="translate(-146.000000, -55.000000)" fill="#161514">
                        <path d="M162.608,55.455 C153.614,55.455 146.32,62.748 146.32,71.745 C146.32,78.942 150.987,85.047 157.46,87.201 C158.275,87.351 158.572,86.848 158.572,86.416 C158.572,86.03 158.558,85.005 158.55,83.646 C154.019,84.63 153.063,81.462 153.063,81.462 C152.322,79.58 151.254,79.079 151.254,79.079 C149.775,78.069 151.366,78.089 151.366,78.089 C153.001,78.204 153.861,79.768 153.861,79.768 C155.314,82.257 157.674,81.538 158.602,81.121 C158.75,80.069 159.171,79.351 159.636,78.944 C156.019,78.533 152.216,77.135 152.216,70.893 C152.216,69.115 152.851,67.66 153.893,66.522 C153.725,66.11 153.166,64.453 154.053,62.211 C154.053,62.211 155.42,61.773 158.532,63.881 C159.831,63.519 161.225,63.339 162.61,63.332 C163.994,63.339 165.387,63.519 166.688,63.881 C169.798,61.773 171.163,62.211 171.163,62.211 C172.052,64.453 171.493,66.11 171.326,66.522 C172.37,67.66 173,69.115 173,70.893 C173,77.151 169.191,78.528 165.563,78.931 C166.147,79.434 166.668,80.428 166.668,81.948 C166.668,84.125 166.648,85.882 166.648,86.416 C166.648,86.852 166.942,87.359 167.768,87.2 C174.236,85.041 178.899,78.94 178.899,71.745 C178.899,62.748 171.605,55.455 162.608,55.455" id="Fill-3"></path>
                    </g>
                </g>
            </svg>
            <a href="{{ $release->github_release_url }}">View on GitHub</a>
          </span>
        </h3>
        <div class="markdown">{!! (new \Parsedown())->text($release->description) !!}</div>

        @if (count($release->notes()->ofCategory('new')->get()) > 0)
        <p class="mt3"><span class="br3 ba ph2 pv1 ttu f7 fw6 white bg-orange">New</span></p>

        @foreach ($release->notes()->ofCategory('new')->get() as $note)
        <div class="markdown div-list ml4" style="display:list-item;">
          {!! (new \Parsedown())->text($note->description) !!}
        </div>
        @endforeach

        @endif

        @if (count($release->notes()->ofCategory('improvements')->get()) > 0)
        <p class="mt3"><span class="br3 ba ph2 pv1 ttu f7 fw6 white bg-blue">Improvements</span></p>

        @foreach ($release->notes()->ofCategory('improvements')->get() as $note)
        <div class="markdown div-list ml4" style="display:list-item;">
          {!! (new \Parsedown())->text($note->description) !!}
        </div>
        @endforeach

        @endif

        @if (count($release->notes()->ofCategory('fixed')->get()) > 0)
        <p class="mt3"><span class="br3 ba ph2 pv1 ttu f7 fw6 white bg-green">Fixed</span></p>

        @foreach ($release->notes()->ofCategory('fixed')->get() as $note)
        <div class="markdown div-list ml4" style="display:list-item;">
          {!! (new \Parsedown())->text($note->description) !!}
        </div>
        @endforeach

        @endif
      </div>

      @endforeach
    </div>
  </div>
</div>

@endsection
