const NomDuCache = 'ma_sauvegarde';
const assets = [
    '/',
    '/index.php',
    '/manifest.json',
    '/home.tpl',
    'sw.js'

];

//*************************************************************************//
//*************************************************************************//
//Installation du service worker
self.addEventListener('install', evt => {

    evt.waitUntil(caches.open(NomDuCache).then(cache => {
        console.log('caching shell assets');
        cache.addAll(assets);
    })
    )

});

//*************************************************************************//
//*************************************************************************//
//Activation du Service Worker
self.addEventListener('activate', evt => {
    console.log('service Worker has been activated');
});

//*************************************************************************//
//*************************************************************************//
//fetch event afin de répondre quand on est en mode hors ligne.
self.addEventListener('fetch', function (event) {
    event.respondWith(
        caches.open('ma_sauvegarde').then(function (cache) {
            return cache.match(event.request).then(function (response) {
                return response || fetch(event.request).then(function (response) {
                    cache.put(event.request, response.clone());
                    return response;
                });
            });
        })
    );
});