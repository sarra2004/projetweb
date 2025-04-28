document.addEventListener('DOMContentLoaded', function() {
    // Get the movies data from the hidden element
    const moviesData = JSON.parse(document.getElementById('movies-data').textContent);
    const anotherMovieBtn = document.getElementById('another-movie');
    
    // Function to update the page with a new random movie
    function updateMovie() {
        if (moviesData.length === 0) return;
        
        // Get a random movie (different from current if possible)
        let randomIndex;
        const currentTitle = document.querySelector('.movie-details h2').textContent;
        
        do {
            randomIndex = Math.floor(Math.random() * moviesData.length);
        } while (moviesData.length > 1 && moviesData[randomIndex].title === currentTitle);
        
        const movie = moviesData[randomIndex];
        
        // Update the page
        document.querySelector('.movie-details h2').textContent = movie.title;
        document.querySelector('.movie-info').textContent = 
            `${movie.release_year} · ${movie.runtime} · ${movie.star_rating || ''}`;
        
        // Update genres
        const tagsContainer = document.querySelector('.tags');
        tagsContainer.innerHTML = '';
        movie.genres.forEach(genre => {
            const span = document.createElement('span');
            span.className = 'tag';
            span.textContent = genre;
            tagsContainer.appendChild(span);
        });
        
        document.querySelector('.movie-description').textContent = movie.overview;
        
        // Update video
        const iframe = document.querySelector('.trailer iframe');
        iframe.src = `https://www.youtube.com/embed/${movie.video_key}?si=jDIdQuh25BWyMGKH`;
    }
    
    // Add event listener to the button
    anotherMovieBtn.addEventListener('click', function(e) {
        e.preventDefault();
        updateMovie();
    });
});