'use strict';

/**
 * If user is not filled all necessary fields from declaration form
 */
if (document.querySelector('a#mls-non-defined-user')) {
    document.querySelector('a#mls-non-defined-user').addEventListener('click', e => {
        e.preventDefault();
        alert('Korisnik nije popunio potrebna polja.')
    });
}