window.Popper = require('popper.js').default;

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

function show()
{
    let h2 = document.getElementById('h2');
    h2.hidden = false;
}