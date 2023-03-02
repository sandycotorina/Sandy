@extends('layouts.app')

@section('content')
<body class="d-flex h-100 text-center text-bg-dark">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Welcome</h3>
    </div>
  </header>

  <main class="px-3">
    <h1>To My Project</h1>
    <p class="lead">Selamat Datang Di Project Inventory Saya, Oh yaa..jangan lupa like, comment, and follow yaaa, Ini adalah tampilan home sandy, beri rating yaa terimakasih teman teman.</p>
    <img src="{{asset('asset/img/ganteng.jpg')}}" width="13%" alt="...">
    <p class="lead" style="margin-top: 2%">
        <a href="https://www.instagram.com/_sndyco" class="btn btn-lg btn-secondary">Instagram</a>
    </p>
  </main>
</div>
</body>
@endsection

