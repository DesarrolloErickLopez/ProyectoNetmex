

const API_KEY = '4ec92fa487274b7f87fb8304554d7358';
const API_URL = 'https://api.themoviedb.org/3';
const IMAGE_BASE_URL = 'https://image.tmdb.org/t/p/w500';

const searchInput = document.getElementById('searchInput');
const autocompleteResults = document.getElementById('autocompleteResults');

let timeoutId;
var idpelicula;
function searchMovies(query) {
  fetch(`${API_URL}/search/movie?api_key=${API_KEY}&query=${query}`)
    .then(response => response.json())
    .then(data => {
      const results = data.results;
      autocompleteResults.innerHTML = '';
      results.forEach(movie => {
        const li = document.createElement('li');
        const imageUrl = movie.poster_path ? `${IMAGE_BASE_URL}${movie.poster_path}` : 'https://via.placeholder.com/500x750.png?text=No+image';
        li.innerHTML = `
          <img src="${imageUrl}" alt="${movie.title} poster" width="50" height="75">
          <span>${movie.title}</span>
        `;
        // idpelicula = movie.id;
        console.log(idpelicula);
        li.addEventListener('click', () => {
          searchInput.value = movie.title;
          autocompleteResults.innerHTML = '';
          idpelicula = movie.id;
          var URL = "http://localhost:8000/movies/"+idpelicula;
          console.log(idpelicula+"holaaa");
          window.location.href = "http://localhost:8000/movies/"+idpelicula;
        });
        autocompleteResults.appendChild(li);
      });
    });
}

searchInput.addEventListener('input', () => {
  clearTimeout(timeoutId);
  const query = searchInput.value;
  if (query.length >= 2) {
    timeoutId = setTimeout(() => searchMovies(query), 500);
  } else {
    autocompleteResults.innerHTML = '';
  }
});

document.addEventListener('click', (event) => {
  if (!autocompleteResults.contains(event.target)) {
    autocompleteResults.innerHTML = '';    
  }
});