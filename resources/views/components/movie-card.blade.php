<div class="post-slide">
    <div class="post-img">
        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="Foto Pelicula">
        <a href="{{ route('movies.show', $movie['id']) }}" class="over-layer"><i class="fa fa-link"></i></a>
    </div>
    <div class="post-content">
        <h3 class="post-title">
        <p class="movieTitle" >{{ $movie['title'] }}</p>
        </h3>                                
        <div class="movieInfo">
            <span>
                <i class="zmdi zmdi-star zmdi-hc-lg" style="color: #f5c518"></i>
            </span>
            <p class="movieVoteTime">
            {{ $movie['vote_average'] * 10 . '%' }}
            </p>    
            <span class="post-date">
                <i class="fa fa-clock-o"></i>
            </span>
            <p class="movieVoteTime">
            {{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}
            </p>                                    
        </div>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Genres
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                @foreach ($movie['genre_ids'] as $genre)
                    <li class="dropdown-item">
                        {{ $genres->get($genre) }}
                        <!-- {{ $genres->get($genre) }} @if(!$loop->last),@endif -->
                    </li>
                @endforeach
            </ul>
        </div>                        
    </div>
</div>