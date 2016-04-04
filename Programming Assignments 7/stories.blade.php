<html>
	<body>
		@foreach ($stories as $story)
			<p>{{ $story->title }}</p>
	    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{ $story->story }}</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;Published: {{ $story->published }}</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;Tags</p>
			<ol>
				@foreach($story->tags as $tag)
					<li>{{ $tag->value }}</li>
				@endforeach
			</ol>
		@endforeach
	</body>
</html>

