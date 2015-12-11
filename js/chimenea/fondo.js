
var anchoScreen = window.innerWidth;
var altoScreen = window.innerHeight;

var game = new Phaser.Game(anchoScreen, altoScreen, Phaser.AUTO, 'fondo-nieve', { preload: preload, create: create, update: update, render: render });

var SPAWN_RATE = 1 / 1.9;

function preload() {
	game.load.image('fondo', accion+'imagenes/chimenea/jugar/background.png');
	game.load.image('bullet', accion+'imagenes/chimenea/jugar/regalo.png');
	game.load.image('enemyBullet', accion+'imagenes/chimenea/assets/regalo-mini.png');
	game.load.image('piso', accion+'imagenes/chimenea/jugar/piso.png');
	game.load.image('logo', accion+'imagenes/chimenea/jugar/logo.png');
    game.load.image('samsung', accion+'imagenes/chimenea/jugar/logo_samsung.png');    
    game.load.image('luna', accion+'imagenes/chimenea/jugar/luna.png');
    game.load.image('cuadro', accion+'imagenes/chimenea/jugar/cuadro.png');
    
    game.load.image('copos', accion+'imagenes/chimenea/copo.png');    
    
    game.load.image('casa1', accion+'imagenes/chimenea/jugar/casas/casa_1.png');
	game.load.image('casa2', accion+'imagenes/chimenea/jugar/casas/casa_2.png');
	game.load.image('casa3', accion+'imagenes/chimenea/jugar/casas/casa_3.png');
	game.load.image('casa4', accion+'imagenes/chimenea/jugar/casas/casa_4.png');
	game.load.image('casa5', accion+'imagenes/chimenea/jugar/casas/casa_5.png');
	game.load.image('casa6', accion+'imagenes/chimenea/jugar/casas/casa_6.png');
    game.load.image('casa7', accion+'imagenes/chimenea/jugar/casas/casa_7.png');
	game.load.image('casa8', accion+'imagenes/chimenea/jugar/casas/casa_8.png');
	game.load.image('casa9', accion+'imagenes/chimenea/jugar/casas/casa_9.png');
	game.load.image('casa10', accion+'imagenes/chimenea/jugar/casas/casa_10.png');

    game.load.image('adorno_1', accion+'imagenes/chimenea/jugar/adornos/arbolgrande.png');
    game.load.image('adorno_2', accion+'imagenes/chimenea/jugar/adornos/arbolblanco.png');
    game.load.image('adorno_3', accion+'imagenes/chimenea/jugar/adornos/arbol_verde.png');
    game.load.image('adorno_4', accion+'imagenes/chimenea/jugar/adornos/lampara.png');
    game.load.image('adorno_5', accion+'imagenes/chimenea/jugar/adornos/munecodenieve.png');
	
	//game.load.spritesheet('invader', accion+'imagenes/chimenea/assets/casa.png', 192, 75);
	game.load.spritesheet('ship', accion+'imagenes/chimenea/jugar/papanoel.png', 360, 110);
	game.load.spritesheet('kaboom', accion+'imagenes/chimenea/assets/trineo.png', 192, 75);
	game.load.image('nubes', accion+'imagenes/chimenea/assets/clouds.png');
	game.load.image('starfield', accion+'imagenes/chimenea/assets/starfield.png');

	game.load.image('vidas', 'imagenes/chimenea/jugar/vida.png');
}

var stars;
var waveformX;
var waveformY;

var xl;
var yl;

var cx = 0;
var cy = 0;
var inicioRegalo = true;

var player;
var aliens;
var bullets;
var bulletTime = 0;
var cursors;
var fireButton;
var explosions;
var starfield;
var score = 0;
var scoreString = '';
var scoreText;
var lives;
var casa;
var casas;
var houses;
var cuadro;
var adornos;
var suelo;
var enemyBullet;
var velocidadCasas = -90;


function create() {
    game.world.setBounds(0, 0, 4844, altoScreen);
    fondo=game.add.button(0, 0, 'fondo');
    fondo.scale.set(anchoScreen/ (fondo.width - 10), altoScreen/ (fondo.height - 10));
    
    luna =game.add.sprite(altoScreen-50,50, 'luna');
    //luna.scale.set(0.7, 0.7);
    game.physics.startSystem(Phaser.Physics.P2JS);
    game.physics.startSystem(Phaser.Physics.ARCADE);
  
    //  The baddies!
    aliens = game.add.group();
    aliens.enableBody = true;
    aliens.physicsBodyType = Phaser.Physics.ARCADE;
    
    houses = game.add.group();
    houses.enableBody = true;
    houses.physicsBodyType = Phaser.Physics.ARCADE;
    
    copos = game.add.group();
    copos.enableBody = true;
    copos.physicsBodyType = Phaser.Physics.ARCADE;
    creatCopos();
              
    suelo = game.add.group();           
    suelo.enableBody = true;
    suelo.physicsBodyType = Phaser.Physics.ARCADE;
    suelo.create(0,altoScreen-72, 'piso');
    suelo.scale.set(anchoScreen/ (suelo.width - 10), 1);

    adornos = game.add.group();
    adornos.enableBody = true;
    adornos.physicsBodyType = Phaser.Physics.ARCADE;
    creatAdorno();
    cuadro = game.add.group();
    cuadro.enableBody = true;
    cuadro.physicsBodyType = Phaser.Physics.ARCADE;
    creatOpciones();  
}

var elemCasas = [];
function creatOpciones(){    
    for (var i = 0; i < 15; i++){        
        var elemento = game.rnd.between(1, 10);
        var total = 100+(270*i);
        var s = houses.create(total, altoScreen  - 225, 'casa'+elemento);
        game.physics.arcade.enable(s);
        s.body.velocity.x = velocidadCasas;
        s.autoCull = true;
        s.checkWorldBounds = true;
        s.events.onOutOfBounds.add(resetSprite, this); 
    }
}

function creatCopos(){
for (var i = 0; i < 20; i++){
        var c = copos.create(game.rnd.between(0, anchoScreen), game.rnd.between(0, altoScreen), 'copos');
        game.physics.arcade.enable(c);
        c.body.velocity.y = 40;
        c.autoCull = true;
        c.checkWorldBounds = true;
        c.events.onOutOfBounds.add(resetCopo, this);    
    }
};

function creatAdorno(){
    for (var i = 0; i < 20; i++){
        var posicionAdorno = 10+(150*i);
        var adorno = adornos.create(posicionAdorno, altoScreen-150, 'adorno_'+game.rnd.between(1, 5));
        game.physics.arcade.enable(adorno);
        adorno.body.velocity.x = -150;
        adorno.autoCull = true;
        adorno.checkWorldBounds = true;
        adorno.events.onOutOfBounds.add(resetSprite, this);    
    }
}

function resetSprite(sprite) {
    sprite.x = game.world.bounds.right;
}

function resetCopo(sprite) {
    sprite.y = game.world.bounds.top;
}

function update() {  
    
}

function render() {
    // for (var i = 0; i < aliens.length; i++)   // {
    //     game.debug.body(aliens.children[i]);
    // }
}
















































