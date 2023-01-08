 if (window.location.href.includes('index.php')) {
            
            document.getElementById('search-input').style.display = 'block';
            document.getElementById('search-button').style.display = 'block';
        } else {
            document.getElementById('search-input').style.display = 'none';
            document.getElementById('search-button').style.display = 'none';
        }