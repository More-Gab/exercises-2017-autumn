function placeHero(x, y) {
    x = Math.max(0, Math.min(350, x));
    y = Math.max(0, Math.min(350, y));

    var hero = document.getElementById('hero');
    hero.style.left = x + 'px';
    hero.style.top = y + 'px';
    hero_x = x;
    hero_y = y;
}

var hero_x; // current hero x coordinate
var hero_y; // current hero y coordinate

placeHero(150, 150);