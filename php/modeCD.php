<div class="toggle-switch">
    <label class="switch-label">
        <input type="checkbox" class="checkbox" id="darkModeToggle">
        <span class="slider"></span>
    </label>
</div>
<script>
const toggleSwitch = document.getElementById('darkModeToggle');
const body = document.body;
const featuredGames = document.querySelector('.featured-games');
const mostPopular = document.querySelector('.most-popular');
const topDownloaded = document.querySelector('.top-downloaded');
const collections = document.querySelector('.collections');
const gamingLibraryVistos = document.querySelectorAll('.gaming-library.vistos');
const gamingLibraryCalidadPrecio = document.querySelectorAll('.gaming-library.calidad-precio');
const gamingLibraryRecomendados = document.querySelectorAll('.gaming-library.recomendados');
const pageContent = document.querySelectorAll('.page-content');
const itemPhone = document.querySelectorAll('.top.item.phone');
const downContent = document.querySelectorAll('.down-content');
const mostPopularItems = document.querySelectorAll('.most-popular .item');
const headingSectionH4 = document.querySelector('.heading-section h4');
const headingSectionH4Em = document.querySelector('.heading-section h4 em');
const h4Elements = document.querySelectorAll('h4');
const emElements = document.querySelectorAll('em');
const featuredGamesItemSpanP = document.querySelectorAll('.featured-games .item span p');
const mainBanner = document.querySelector('.main-banner');
const spanElements = document.querySelectorAll('span');


toggleSwitch.addEventListener('change', () => {
    if (toggleSwitch.checked) {
        body.classList.remove('light-mode');
        featuredGames.classList.remove('light-mode');
        mostPopular.classList.remove('light-mode');
        topDownloaded.classList.remove('light-mode');
        collections.classList.remove('light-mode');

        gamingLibraryVistos.forEach(section => {
            section.classList.remove('light-mode');
        });
        gamingLibraryCalidadPrecio.forEach(section => {
            section.classList.remove('light-mode');
        });
        gamingLibraryRecomendados.forEach(section => {
            section.classList.remove('light-mode');
        });

        pageContent.forEach(section => {
            section.style.backgroundColor = '#27292a';
        });
        itemPhone.forEach(section => {
            section.style.backgroundColor = '#27292a';
        });
        downContent.forEach(section => {
            section.style.backgroundColor = '#27292a';
        });
        mostPopularItems.forEach(item => {
            item.style.backgroundColor = '#27292a';
        });

        headingSectionH4.style.color = '#fff';
        headingSectionH4Em.style.color = '#036189';

        h4Elements.forEach(h4 => {
            h4.style.color = '#036189';
        });

        emElements.forEach(em => {
            em.style.color = '#fff';
        });

        featuredGamesItemSpanP.forEach(p => {
            p.style.color = '#1f2122';
        });

        mainBanner.style.backgroundImage = 'url(./assets/images/fondoD.jpg)';

        spanElements.forEach(span => {
            span.style.color = '#fff';
        });
        localStorage.removeItem('darkMode');

    } else {
        body.classList.add('light-mode');
        featuredGames.classList.add('light-mode');
        mostPopular.classList.add('light-mode');
        topDownloaded.classList.add('light-mode');
        collections.classList.add('light-mode');

        gamingLibraryVistos.forEach(section => {
            section.classList.add('light-mode');
        });
        gamingLibraryCalidadPrecio.forEach(section => {
            section.classList.add('light-mode');
        });
        gamingLibraryRecomendados.forEach(section => {
            section.classList.add('light-mode');
        });

        pageContent.forEach(section => {
            section.style.backgroundColor = '#d7d8da';
        });
        itemPhone.forEach(section => {
            section.style.backgroundColor = '#d7d8da';
        });
        downContent.forEach(section => {
            section.style.backgroundColor = '#d7d8da';
        });
        mostPopularItems.forEach(item => {
            item.style.backgroundColor = '#d7d8da';
        });

        headingSectionH4.style.color = '#f29d64';
        headingSectionH4Em.style.color = '#1f2122';

        h4Elements.forEach(h4 => {
            h4.style.color = '#f29d64';
        });

        emElements.forEach(em => {
            em.style.color = '#1f2122';
        });

        featuredGamesItemSpanP.forEach(p => {
            p.style.color = '#1f2122';
        });

        mainBanner.style.backgroundImage = 'url(./assets/images/fondo.jpg)';

        spanElements.forEach(span => {
            span.style.color = '#666';
        });

        localStorage.setItem('darkMode', 'enabled');
    }
});

// Check initial state
if (localStorage.getItem('darkMode') === 'enabled') {
    toggleSwitch.checked = true;
    body.classList.remove('light-mode');
    featuredGames.classList.remove('light-mode');
    mostPopular.classList.remove('light-mode');
    topDownloaded.classList.remove('light-mode');
    collections.classList.remove('light-mode');

    gamingLibraryVistos.forEach(section => {
        section.classList.remove('light-mode');
    });
    gamingLibraryCalidadPrecio.forEach(section => {
        section.classList.remove('light-mode');
    });
    gamingLibraryRecomendados.forEach(section => {
        section.classList.remove('light-mode');
    });

    pageContent.forEach(section => {
        section.style.backgroundColor = '#27292a';
    });
    itemPhone.forEach(section => {
        section.style.backgroundColor = '#27292a';
    });
    downContent.forEach(section => {
        section.style.backgroundColor = '#27292a';
    });
    mostPopularItems.forEach(item => {
        item.style.backgroundColor = '#27292a';
    });

    headingSectionH4.style.color = '#fff';
    headingSectionH4Em.style.color = '#036189';

    h4Elements.forEach(h4 => {
        h4.style.color = '#fff';
    });

    emElements.forEach(em => {
        em.style.color = '#036189';
    });

    featuredGamesItemSpanP.forEach(p => {
        p.style.color = '#1f2122';
    });

    spanElements.forEach(span => {
        span.style.color = '#fff';
    });

    mainBanner.style.backgroundImage = 'url(./assets/images/fondoD.jpg)';
} else {
    toggleSwitch.checked = false;
    body.classList.add('light-mode');
    featuredGames.classList.add('light-mode');
    mostPopular.classList.add('light-mode');
    topDownloaded.classList.add('light-mode');
    collections.classList.add('light-mode');

    gamingLibraryVistos.forEach(section => {
        section.classList.add('light-mode');
    });
    gamingLibraryCalidadPrecio.forEach(section => {
        section.classList.add('light-mode');
    });
    gamingLibraryRecomendados.forEach(section => {
        section.classList.add('light-mode');
    });

    pageContent.forEach(section => {
        section.style.backgroundColor = '#d7d8da';
    });
    itemPhone.forEach(section => {
        section.style.backgroundColor = '#d7d8da';
    });
    downContent.forEach(section => {
        section.style.backgroundColor = '#d7d8da';
    });
    mostPopularItems.forEach(item => {
        item.style.backgroundColor = '#d7d8da';
    });

    headingSectionH4.style.color = '#f29d64';
    headingSectionH4Em.style.color = '#1f2122';

    h4Elements.forEach(h4 => {
        h4.style.color = '#f29d64';
    });

    emElements.forEach(em => {
        em.style.color = '#1f2122';
    });

    featuredGamesItemSpanP.forEach(p => {
        p.style.color = '#1f2122';
    });

    spanElements.forEach(span => {
        span.style.color = '#666';
    });

    mainBanner.style.backgroundImage = 'url(./assets/images/fondo.jpg)';
}
</script>