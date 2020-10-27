@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
        <img src="https://scontent-arn2-2.cdninstagram.com/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-arn2-2.cdninstagram.com&_nc_ohc=MOamfUs_2yEAX-gEdJY&oh=357255f905e20a162cd0549afe89e945&oe=5FC169E7" class="rounded-circle"/>
    </div>
    <div class="col-9 pt-5">
      <div class="d-flex justify-content-between align-items-baseline">
          <h1>{{ $user->username }}</h1>
          <a href="/p/create">Add New Post</a>
      </div>
      <div class="d-flex">
            <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> публикаций</div>
            <div class="pr-5"><strong>56,4тыс.</strong> подписчиков</div>
            <div class="pr-5"><strong>281</strong> подписок</div>
      </div>
      <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
      <div>{{ $user->profile->description }}</div>
      <div><a href="#" >{{ $user->profile->url }}</a></div>
    </div>
  </div>

  <div class="row pt-5">
      @foreach($user->posts as $post)
          <div class="col-4 pb-4">
              <img class="w-100" src="/storage/{{ $post->image }}" />
          </div>
      @endforeach
  </div>

</div>
@endsection
