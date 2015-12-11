//window.onresize = dynamicResizer;
window.onload = dynamicResizer;

function dynamicResizer() {
    anchoScreen = window.innerWidth;
    altoScreen = window.innerHeight;

    //alert('Retina Device' + anchoScreen + "," + altoScreen);
    gameFondo = new Phaser.Game(anchoScreen, altoScreen, Phaser.AUTO, 'fondo-nieve', {
        preload: preloadFondo,
        create: createFondo
    });
}

var anchoScreen;
var altoScreen;
var gameFondo;

var player;
var aliens;
var starfield;
var casa;
var houses;
var cuadro;
var adornos;
var suelo;
var enemyBullet;
var velocidadCasas = -90;

var elemCasas = [];

function preloadFondo() {
    gameFondo.load.image('fondo', accion + 'imagenes/chimenea/jugar/background.png');
    gameFondo.load.image('bullet', accion + 'imagenes/chimenea/jugar/regalo.png');
    gameFondo.load.image('enemyBullet', accion + 'imagenes/chimenea/assets/regalo-mini.png');
    gameFondo.load.image('piso', accion + 'imagenes/chimenea/jugar/piso.png');
    gameFondo.load.image('logo', accion + 'imagenes/chimenea/jugar/logo.png');
    gameFondo.load.image('samsung', accion + 'imagenes/chimenea/jugar/logo_samsung.png');
    gameFondo.load.image('luna', accion + 'imagenes/chimenea/jugar/luna.png');
    gameFondo.load.image('cuadro', accion + 'imagenes/chimenea/jugar/cuadro.png');

    gameFondo.load.image('copos', accion + 'imagenes/chimenea/copo.png');

    gameFondo.load.image('casa1', accion + 'imagenes/chimenea/jugar/casas/casa_1.png');
    gameFondo.load.image('casa2', accion + 'imagenes/chimenea/jugar/casas/casa_2.png');
    gameFondo.load.image('casa3', accion + 'imagenes/chimenea/jugar/casas/casa_3.png');
    gameFondo.load.image('casa4', accion + 'imagenes/chimenea/jugar/casas/casa_4.png');
    gameFondo.load.image('casa5', accion + 'imagenes/chimenea/jugar/casas/casa_5.png');
    gameFondo.load.image('casa6', accion + 'imagenes/chimenea/jugar/casas/casa_6.png');
    gameFondo.load.image('casa7', accion + 'imagenes/chimenea/jugar/casas/casa_7.png');
    gameFondo.load.image('casa8', accion + 'imagenes/chimenea/jugar/casas/casa_8.png');
    gameFondo.load.image('casa9', accion + 'imagenes/chimenea/jugar/casas/casa_9.png');
    gameFondo.load.image('casa10', accion + 'imagenes/chimenea/jugar/casas/casa_10.png');

    gameFondo.load.image('adorno_1', accion + 'imagenes/chimenea/jugar/adornos/arbolgrande.png');
    gameFondo.load.image('adorno_2', accion + 'imagenes/chimenea/jugar/adornos/arbolblanco.png');
    gameFondo.load.image('adorno_3', accion + 'imagenes/chimenea/jugar/adornos/arbol_verde.png');
    gameFondo.load.image('adorno_4', accion + 'imagenes/chimenea/jugar/adornos/lampara.png');
    gameFondo.load.image('adorno_5', accion + 'imagenes/chimenea/jugar/adornos/munecodenieve.png');

    //gameFondo.load.spritesheet('invader', accion+'imagenes/chimenea/assets/casa.png', 192, 75);
    gameFondo.load.spritesheet('ship', accion + 'imagenes/chimenea/jugar/papanoel.png', 360, 110);
    gameFondo.load.spritesheet('kaboom', accion + 'imagenes/chimenea/assets/trineo.png', 192, 75);
    gameFondo.load.image('nubes', accion + 'imagenes/chimenea/assets/clouds.png');
    gameFondo.load.image('starfield', accion + 'imagenes/chimenea/assets/starfield.png');

    gameFondo.load.image('vidas', 'imagenes/chimenea/jugar/vida.png');


}

function createFondo() {
    gameFondo.world.setBounds(0, 0, 4844, altoScreen);
    fondo = gameFondo.add.button(0, 0, 'fondo');
    fondo.scale.set(anchoScreen / (fondo.width - 10), altoScreen / (fondo.height - 10));

    luna = gameFondo.add.sprite(altoScreen - 50, 50, 'luna');
    //luna.scale.set(0.7, 0.7);
    gameFondo.physics.startSystem(Phaser.Physics.P2JS);
    gameFondo.physics.startSystem(Phaser.Physics.ARCADE);

    //  The baddies!
    aliens = gameFondo.add.group();
    aliens.enableBody = true;
    aliens.physicsBodyType = Phaser.Physics.ARCADE;

    houses = gameFondo.add.group();
    houses.enableBody = true;
    houses.physicsBodyType = Phaser.Physics.ARCADE;

    copos = gameFondo.add.group();
    copos.enableBody = true;
    copos.physicsBodyType = Phaser.Physics.ARCADE;
    creatCoposFondo();

    suelo = gameFondo.add.group();
    suelo.enableBody = true;
    suelo.physicsBodyType = Phaser.Physics.ARCADE;
    suelo.create(0, altoScreen - 72, 'piso');
    suelo.scale.set(anchoScreen / (suelo.width - 10), 1);

    adornos = gameFondo.add.group();
    adornos.enableBody = true;
    adornos.physicsBodyType = Phaser.Physics.ARCADE;
    creatAdornoFondo();
    cuadro = gameFondo.add.group();
    cuadro.enableBody = true;
    cuadro.physicsBodyType = Phaser.Physics.ARCADE;
    creatOpcionesFondo();
}

function creatOpcionesFondo() {
    for (var i = 0; i < 15; i++) {
        var elemento = gameFondo.rnd.between(1, 10);
        var total = 100 + (270 * i);
        var s = houses.create(total, altoScreen - 225, 'casa' + elemento);
        gameFondo.physics.arcade.enable(s);
        s.body.velocity.x = velocidadCasas;
        s.autoCull = true;
        s.checkWorldBounds = true;
        s.events.onOutOfBounds.add(resetSpriteFondo, this);
    }
}

function creatCoposFondo() {
    for (var i = 0; i < 20; i++) {
        var c = copos.create(gameFondo.rnd.between(0, anchoScreen), gameFondo.rnd.between(0, altoScreen), 'copos');
        gameFondo.physics.arcade.enable(c);
        c.body.velocity.y = 40;
        c.autoCull = true;
        c.checkWorldBounds = true;
        c.events.onOutOfBounds.add(resetCopoFondo, this);
    }
};

function creatAdornoFondo() {
    for (var i = 0; i < 20; i++) {
        var posicionAdorno = 10 + (150 * i);
        var adorno = adornos.create(posicionAdorno, altoScreen - 150, 'adorno_' + gameFondo.rnd.between(1, 5));
        gameFondo.physics.arcade.enable(adorno);
        adorno.body.velocity.x = -150;
        adorno.autoCull = true;
        adorno.checkWorldBounds = true;
        adorno.events.onOutOfBounds.add(resetSpriteFondo, this);
    }
}

function resetSpriteFondo(sprite) {
    if (isset(gameFondo.world)) {
        sprite.x = gameFondo.world.bounds.right;
    }
}

function resetCopoFondo(sprite) {
    if (isset(gameFondo.world)) {
        sprite.y = gameFondo.world.bounds.top;
    }
}


isset = function (a) {
    if ((typeof (a) === 'undefined') || (a === null))
        return false;
    else
        return true;
};