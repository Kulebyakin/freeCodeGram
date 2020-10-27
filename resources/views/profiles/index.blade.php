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
          <a href="#">Add New Post</a>
      </div>
      <div class="d-flex">
            <div class="pr-5"><strong>326</strong>публикаций</div>
            <div class="pr-5"><strong>56,4тыс.</strong>подписчиков</div>
            <div class="pr-5"><strong>281</strong>подписок</div>
      </div>
      <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
      <div>{{ $user->profile->description }}</div>
      <div><a href="#" >{{ $user->profile->url }}</a></div>
    </div>
  </div>

  <div class="row pt-5">
    <div class="col-4">
      <img class="w-100" src="https://scontent-arn2-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c3.0.744.744a/s640x640/122402115_866444324162764_1129793397759645138_n.jpg?_nc_ht=scontent-arn2-1.cdninstagram.com&_nc_cat=104&_nc_ohc=Wv6aGsDnfgkAX-rj3AA&oh=519442a37358c322da59dffa5c77854a&oe=5FC07704" />
    </div>
    <div class="col-4">
      <img class="w-100" src="https://scontent-arn2-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c1.0.747.747a/s640x640/121822885_2668243573506060_4719594186305050896_n.jpg?_nc_ht=scontent-arn2-2.cdninstagram.com&_nc_cat=100&_nc_ohc=JkNw3rpTxcgAX-qAXoC&oh=3c005e2e8f98a07beda01753d603f24e&oe=5FBDC8D3" />
    </div>
    <div class="col-4">
      <img class="w-100" src="https://scontent-arn2-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.112.929.929a/s640x640/121302633_1416954018498485_2495968877943777077_n.jpg?_nc_ht=scontent-arn2-2.cdninstagram.com&_nc_cat=105&_nc_ohc=vD2nxfjMooAAX-HfUkw&oh=a883659827fb541114af951fcf019a5c&oe=5FBF081B" />
    </div>
  </div>

</div>
@endsection
