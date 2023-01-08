document.getElementById('search-input').addEventListener('input', function() {
            let searchQuery = this.value;
            let xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Parsim JSON response
                    const response = JSON.parse(xhr.responseText);
                    let results = response.results;
                    let session = response.session;

                    if (searchQuery.trim().length === 0) {
                        document.getElementById('search-results').innerHTML = '';
                        return;
                    }

                    // smazat predchozi vysledky
                    document.getElementById('search-results').innerHTML = '';

                    for (let i = 0; i < results.length; i++) {
                        let product = results[i];
                        let productName = product.name;
                        let productHtml = 
                            '<div class="card mt-3 mb-3" style="background-color: #D3D3D3">' +
                            '<div class="card-body w-50 mx-auto text-center">' +
                            `<a href="./actions/details.php?id=${product.id}" style="text-decoration:none">` + '<h2>' + productName + '</h2>' + '</a>' +
                            '</div>'+ 
                            '</div>';
                        document.getElementById('search-results').innerHTML += productHtml;
                    }

                    // Updatovat pristi search query
                    session.previousSearchQuery = searchQuery;
                }
            };
            xhr.open('GET', './actions/search.php?q=' + searchQuery, true);
            xhr.send();



        });