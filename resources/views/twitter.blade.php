@if($html)
	<div class="flex justify-center twitter-card" style="min-height: 500px">
	    {!! $html !!}
    </div>
@else
	<p>Sorry, no tweets found.</p>
@endif
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>