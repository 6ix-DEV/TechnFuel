<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<div>
    <h1>Liste des Produits</h1>
  </div>

  Péripherique</a> <a href="#">Boissons</a> <a href="#">Goodies</a> <a href="#">Streaming</a>     -    <a href="#">Panier</a>


@forelse ($categories as $category)
      <!-- Section: Péripherique -->
      <main class="content" role="main">
      <section id="hydro" style="margin-bottom:18px;">
         <a href="{{route('produits.filtre',$category)}}"> <h3 style="font-size:18px; margin-bottom:12px;">{{$category->description}}</h3></a>
        
        @forelse ($produits as $produit)
          <article class="card">
            <img src="{{ $produit->image_url }}" alt="{{ $produit->nom }}"/>
            <div class="title">{{ $produit->nom }}</div>
            <div class="meta">{{ $produit->description }}</div>
            <div class="badge">{{ $produit->prix}}</div>
          </article>



        <a href="#">Voir</a>
        -
        <a href="#">Ajouter au Panier</a>


@empty
@endforelse 
          </main>
        <div class="grid" aria-label="Produits Péripherique">
      </section>
@empty
@endforelse 
</body>
</html>