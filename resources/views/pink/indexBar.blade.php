<div class="widget-first widget recent-posts">

		@if($articles)
		<h3>{{ trans('ru.from_blog') }}</h3>
		<div class="recent-post group">
			@foreach($articles as $article)
			<div class="hentry-post group">
				<div class="thumb-img"><img src="{{ asset(env('THEME')) }}/images/articles/{{ $article->img->mini }}" alt="001" title="001" /></div>
				<div class="text">
					<a href="{{ route('articles.show',['alias'=>$article->alias]) }}" title="Section shortcodes &amp; sticky posts!" class="title">{{ $article->title }}</a>
<!--					{{ dump($article->created_at) }}-->
					<p class="post-date">{{ $article->created_at->format('F d, Y') }}</p>
				</div>
			</div>
			@endforeach
		</div>
		@endif
		
		
<!--		<div class="recent-post group">
			<div class="hentry-post group">
				<div class="thumb-img"><img src="{{ asset(env('THEME')) }}/images/articles/001-55x55.png" alt="001" title="001" /></div>
				<div class="text">
					<a href="article.html" title="Section shortcodes &amp; sticky posts!" class="title">Section shortcodes &amp; sticky posts!</a>
					<p class="post-date">September 24, 2012</p>
				</div>
			</div>
			<div class="hentry-post group">
				<div class="thumb-img"><img src="{{ asset(env('THEME')) }}/images/articles/003-55x55.jpg" alt="003" title="003" /></div>
				<div class="text">
					<a href="article.html" title="Nice &amp; Clean. The best for your blog!" class="title">Nice &amp; Clean. The best for your blog!</a>
					<p class="post-date">September 24, 2012</p>
				</div>
			</div>
			<div class="hentry-post group">
				<div class="thumb-img"><img src="{{ asset(env('THEME')) }}/images/articles/0037-55x55.jpg" alt="0037" title="0037" /></div>
				<div class="text">
					<a href="article.html" title="Another theme by YIThemes!" class="title">Another theme by YIThemes!</a>
					<p class="post-date">September 24, 2012</p>
				</div>
			</div>
		</div>-->
</div>

	<div class="widget-last widget text-image">
		<h3>Customer support</h3>
		<div class="text-image" style="text-align:left"><img src="{{ asset(env('THEME')) }}/images/callus.gif" alt="Customer support" /></div>
		<p>Proin porttitor dolor eu nibh lacinia at ultrices lorem venenatis. Sed volutpat scelerisque vulputate. </p>
	</div>

