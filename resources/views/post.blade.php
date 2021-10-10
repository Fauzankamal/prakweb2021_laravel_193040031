@extends('layouts.main')

@section('container')
<article>
  <h2>{{ $post["title"] }}</h2>
  <h5>{{ $post["author"] }}</h5>
  <p>{{ $post["body"] }}</p>
  <h5>Author</h5>
  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, sint ullam? Voluptas iste architecto quibusdam optio magni obcaecati fugit, velit omnis laborum aperiam, minima rerum maiores consequuntur, ut incidunt cupiditate.</p>
</article>

<a href="/blog">Back to Posts</a>
@endsection