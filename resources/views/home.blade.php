@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 950px; margin: 0 auto">
    <div class="row" >
        <div class="col-3 p-5">
            <img src="https://instagram.fagu1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/74636020_1223377094520563_9014301889403027456_n.jpg?_nc_ht=instagram.fagu1-1.fna.fbcdn.net&_nc_ohc=7V-wp8sDRawAX_YnPFM&oh=d103a4754c3ddb3bd7185c1426b83601&oe=5F7E247C" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex " style="font-size: 16px">
                <div class="pr-5"><strong>10</strong> posts</div>
                <div class="pr-5"><strong>128.3M</strong> followers</div>
                <div class="pr-5"><strong>206</strong> following</div>
            </div>
            <div style="font-size: 16px" class="pt-4"><strong>Noé Alejandro 🍫</strong></div>
            <div style="font-size: 16px">Ing. en Computación Inteligente UAA 👨🏻‍💻</div>
            <div style="font-size: 16px"> "Siempre estás a una decisión de cambiar completamente tu vida" ⏰</div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4"><img src="https://instagram.fagu1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/42121777_1925856921057407_9072793108725597652_n.jpg?_nc_ht=instagram.fagu1-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=R6R6dUW3jhQAX8JP6T_&oh=9ed03b3ac6caeacdc5a71a4fc27e7796&oe=5F7FEE35" class="w-100" alt=""></div>
        <div class="col-4"><img src="https://instagram.fagu1-1.fna.fbcdn.net/v/t51.2885-15/e35/c227.0.585.585a/20837022_162356817663492_6258263032447631360_n.jpg?_nc_ht=instagram.fagu1-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=9XdKuhEBTr8AX_Sl2df&oh=5980284be6b711ac2f435ae97252c15a&oe=5F7FF69A"  class="w-100" alt=""></div>
        <div class="col-4"><img src="https://instagram.fagu1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/14712342_1832700300346409_1419918451505364992_n.jpg?_nc_ht=instagram.fagu1-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=mC2EzwsZUo8AX8Y1-oQ&oh=3264b0eb9cc7453f0e0c6fc40848fbf7&oe=5F80C0AD" class="w-100" alt=""></div>
    </div>
</div>
@endsection
