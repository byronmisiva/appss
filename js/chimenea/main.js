
var game = new Phaser.Game(900, 600, Phaser.AUTO, 'gameDiv', { preload: preload, create: create, update: update, render: render });
var SPAWN_RATE = 1 / 1.9;

var posY = [0, 155, 107, 186, 163, 233, 
               107, 155, 186, 164, 233, 
               155, 107, 155, 295, 186, 
               233, 155, 107, 186, 164, 
               233, 186, 164, 155];

var posX = [0,   1, 120, 106, 120, 103, 
               120, 100, 106, 120, 103, 
               100, 120, 100, 103, 106,
               103, 100, 120, 106, 120,
               103, 106, 120, 100];
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
    
    game.load.image('casa', accion+'imagenes/chimenea/jugar/casas/casa_1.png');
	game.load.image('casa2', accion+'imagenes/chimenea/jugar/casas/casa_2.png');
	game.load.image('casa3', accion+'imagenes/chimenea/jugar/casas/casa_3.png');
	game.load.image('casa4', accion+'imagenes/chimenea/jugar/casas/casa_4.png');
	game.load.image('casa5', accion+'imagenes/chimenea/jugar/casas/casa_5.png');
	game.load.image('casa6', accion+'imagenes/chimenea/jugar/casas/casa_6.png');
    game.load.image('casa7', accion+'imagenes/chimenea/jugar/casas/casa_7.png');
	game.load.image('casa8', accion+'imagenes/chimenea/jugar/casas/casa_8.png');
	game.load.image('casa9', accion+'imagenes/chimenea/jugar/casas/casa_9.png');
	game.load.image('casa10', accion+'imagenes/chimenea/jugar/casas/casa_10.png');
	game.load.image('casa11', accion+'imagenes/chimenea/jugar/casas/casa_11.png');
    game.load.image('casa12', accion+'imagenes/chimenea/jugar/casas/casa_12.png');
	game.load.image('casa13', accion+'imagenes/chimenea/jugar/casas/casa_13.png');
	game.load.image('casa14', accion+'imagenes/chimenea/jugar/casas/casa_14.png');
	game.load.image('casa15', accion+'imagenes/chimenea/jugar/casas/casa_15.png');
	game.load.image('casa16', accion+'imagenes/chimenea/jugar/casas/casa_16.png');
    game.load.image('casa17', accion+'imagenes/chimenea/jugar/casas/casa_17.png');
    game.load.image('casa18', accion+'imagenes/chimenea/jugar/casas/casa_18.png');
	game.load.image('casa19', accion+'imagenes/chimenea/jugar/casas/casa_19.png');
	game.load.image('casa20', accion+'imagenes/chimenea/jugar/casas/casa_20.png');
	game.load.image('casa21', accion+'imagenes/chimenea/jugar/casas/casa_21.png');
	game.load.image('casa22', accion+'imagenes/chimenea/jugar/casas/casa_22.png');
    game.load.image('casa23', accion+'imagenes/chimenea/jugar/casas/casa_23.png');
	game.load.image('casa24', accion+'imagenes/chimenea/jugar/casas/casa_24.png');	
    
    game.load.image('adorno_1', accion+'imagenes/chimenea/jugar/adornos/arbolgrande.png');
    game.load.image('adorno_2', accion+'imagenes/chimenea/jugar/adornos/arbolblanco.png');
    game.load.image('adorno_3', accion+'imagenes/chimenea/jugar/adornos/arbol_verde.png');
    game.load.image('adorno_4', accion+'imagenes/chimenea/jugar/adornos/lampara.png');
    game.load.image('adorno_5', accion+'imagenes/chimenea/jugar/adornos/munecodenieve.png');
	
	game.load.spritesheet('invader', accion+'imagenes/chimenea/assets/casa.png', 192, 75);
	game.load.spritesheet('ship', accion+'imagenes/chimenea/jugar/papanoel.png', 360, 110);
	game.load.spritesheet('kaboom', accion+'imagenes/chimenea/assets/trineo.png', 192, 75);
	game.load.image('nubes', accion+'imagenes/chimenea/assets/clouds.png');
	game.load.image('starfield', accion+'imagenes/chimenea/assets/starfield.png');
	game.load.image('background', 'imagenes/chimenea/assets/bg.jpg');
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
var firingTimer = 0;
var stateText;
var livingEnemies = [];
var velocidadCasas = -90;


function create() {
    game.world.setBounds(0, 0, 4844, 600);
    fondo=game.add.button(0, 0, 'fondo',fireBullet);      
    fondo.scale.set(0.7, 0.9);
        
    logo =game.add.sprite(20,10, 'logo');
    logo.scale.set(0.6, 0.6);
    samsung =game.add.sprite(775,10, 'samsung');
    samsung.scale.set(0.7, 0.7);
    
    luna =game.add.sprite(800,50, 'luna');
    luna.scale.set(0.7, 0.7);
    game.physics.startSystem(Phaser.Physics.P2JS);
    game.physics.startSystem(Phaser.Physics.ARCADE);
    
    //starfield = game.add.tileSprite(0, 0, 800, 600, 'starfield');
    //starfield = game.add.tileSprite(0, 0, 800, 0, 'nubes');
    

    // The enemy's bullets
    enemyBullets = game.add.group();
    enemyBullets.enableBody = true;
    enemyBullets.physicsBodyType = Phaser.Physics.ARCADE;
    enemyBullets.createMultiple(30, 'enemyBullet');
    enemyBullets.setAll('anchor.x', 0.5);
    enemyBullets.setAll('anchor.y', 1);
    enemyBullets.setAll('outOfBoundsKill', true);
    enemyBullets.setAll('checkWorldBounds', true);   
      
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
    
    player = game.add.sprite(360, 110, 'ship');
    player.anchor.setTo(0.5, 0.5);  
    player.scale.set(0.7,0.7);
    player.animations.add('run');
    player.animations.play('run', 14, true);   
    game.physics.enable(player, Phaser.Physics.ARCADE);
        
    suelo = game.add.group();           
    suelo.enableBody = true;
    suelo.physicsBodyType = Phaser.Physics.ARCADE;
    suelo.create(0,530, 'piso');
            
    adornos = game.add.group();
    adornos.enableBody = true;
    adornos.physicsBodyType = Phaser.Physics.ARCADE;
    
    creatAdorno();
    
    cuadro = game.add.group();
    cuadro.enableBody = true;
    cuadro.physicsBodyType = Phaser.Physics.ARCADE;
    creatOpciones();   
    
    //  Our bullet group
    bullets = game.add.group();
    bullets.enableBody = true;
    bullets.physicsBodyType = Phaser.Physics.ARCADE;
    bullets.createMultiple(30, 'bullet');
    bullets.setAll('anchor.x', 0.5);
    bullets.setAll('anchor.y', 1);
    bullets.setAll('outOfBoundsKill', true);
    bullets.setAll('checkWorldBounds', true);   
    
    //crearCuadros();    
    //  The score      
    rscore = game.add.sprite(400, 30, 'bullet');
    rscore.scale.set(0.9, 0.9);
    
    scoreText = game.add.text(400, 10, 'REGALOS ENTREGADOS: ', { font: '12px Arial', fill: '#fff' });    
    scoreText =game.add.text(450, 30, score, { font: '18px Arial', fill: '#fff' });

    //  Lives
    lives = game.add.group();
    game.add.text(600, 10, 'VIDAS: ', { font: '12px Arial', fill: '#fff' });

    //  Text
    stateText = game.add.text(game.world.centerX,game.world.centerY,' ', { font: '84px Arial', fill: '#fff' });
    stateText.anchor.setTo(0.5, 0.5);
    stateText.visible = false;

    for (var i = 0; i < 3; i++){
        var ship = lives.create(615 + (30 * i), 50, 'vidas');
        ship.scale.set(0.7, 0.7);
        ship.anchor.setTo(0.5, 0.5);
        /*ship.angle = 90;*/
        ship.alpha = 1;
    }

    //  An explosion pool
    explosions = game.add.group();
    explosions.createMultiple(30, 'kaboom');
    explosions.forEach(setupInvader, this);

    //  And some controls to play the game with
    //cursors = game.input.keyboard.createCursorKeys();
    //fireButton = game.input.keyboard.addKey(Phaser.Keyboard.SPACEBAR);
    
   /*casas = game.add.physicsGroup();    
    for (var i = 0; i < 9; i++){
        var casa = casas.create(0, game.world.height-100, 'casa');
        casas.body.velocity.x = game.rnd.between(100, 800);
    }*/    
}

var elemCasas = [];
function creatOpciones(){    
    for (var i = 0; i < 15; i++){        
        var elemento = game.rnd.between(2, 24);                
        var total = 900+(270*i);
       
        var s = houses.create(total, game.world.height-250, 'casa'+elemento);            
        s.scale.set(0.8, 0.8);
        game.physics.arcade.enable(s);
        s.body.velocity.x = velocidadCasas;
        s.autoCull = true;
        s.checkWorldBounds = true;
        s.events.onOutOfBounds.add(resetSprite, this); 
        
        var x =total+posX[elemento]-20;
        var y = game.world.height-posY[elemento]-25;        
        s = cuadro.create(x, y , 'cuadro');    
        s.scale.set(0.8, 0.8);
        game.physics.arcade.enable(s);
        s.body.velocity.x = velocidadCasas;
        s.autoCull = true;
        s.checkWorldBounds = true;
        s.positionX = posX[elemento];                           
        s.events.onOutOfBounds.add(resetSprite2, this);         
    }
}

function creatCopos(){
for (var i = 0; i < 50; i++){
        var c = copos.create(game.rnd.between(0, 900), game.rnd.between(0, 600), 'copos');    
        c.scale.set(0.1, 0.1);
        game.physics.arcade.enable(c);
        c.body.velocity.y = 40;
        c.autoCull = true;
        c.checkWorldBounds = true;
        c.events.onOutOfBounds.add(resetCopo, this);    
    }
};

function creatAdorno(){
    for (var i = 0; i < 30; i++){        
        var posicionAdorno = 10+(150*i);
        var adorno = adornos.create(posicionAdorno, game.world.height-150, 'adorno_'+game.rnd.between(1, 5));            
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

function resetSprite2(sprite) {
    sprite.x = game.world.bounds.right+sprite.positionX;
    console.log("Posicion Sprite: "+sprite.x);
}

function createCasas() {
   var casa = game.add.sprite(game.world.width, game.world.height-350, 'casa');
    game.physics.enable(casa, Phaser.Physics.ARCADE);
    casa.body.bounce.y = 0.9;
    casa.body.collideWorldBounds = true;
    /*tween = game.add.tween(casa);
    tween.to({ x: 800 }, 5000, 'Linear', true, 0);*/
    //movimientoCasa(casa);
}

function createAliens () {    
    var alien = aliens.create(-350, game.world.height-180, 'casa');
    alien.anchor.setTo(0.5, 0.5);
    /*alien.animations.add('fly', [ 0, 1, 2, 3 ], 20, true);
    alien.play('fly');*/
    alien.body.moves = false;    
    aliens.x =1000;
    aliens.y = 50;
    
    var tween = game.add.tween(aliens).to( { x: 250 }, 5000, Phaser.Easing.Linear.None, true, 0, 1000, true);
    
   //tween.onLoop.add(descend, this);
    
    /*for (var i = 0; i < 10; i++){
        game.add.sprite(-350+(310* i), game.world.height-210, 'casa');
    }*/
}

function setupInvader (invader) {
    invader.anchor.x = 0.5;
    invader.anchor.y = 0.5;
    invader.animations.add('kaboom');
}

function descend() {
    aliens.y += 0;
}

function movimientoCasa(elemento){
    elemento.x -=2
}

function update() {   
    if (player.x > game.world.width){
        player.x = -player.width;
    }
    
    if (player.x < -player.width){
        player.x = game.world.width;
    }       

    if (player.alive){
        //  Reset the player, then check for movement keys
        player.body.velocity.setTo(0, 0);
        /*if (cursors.left.isDown){
            player.body.velocity.x = -200;
        }
        else if (cursors.right.isDown){
            player.body.velocity.x = 200;
        }*/
        //  Run collision
        game.physics.arcade.overlap(bullets, suelo, llegaAlSuelo, null, this);
        game.physics.arcade.overlap(bullets, cuadro, collisionHandler, null, this);
        
        //game.physics.arcade.overlap(enemyBullets, player, enemyHitsPlayer, null, this);
    }
    
}

function render() {
    // for (var i = 0; i < aliens.length; i++)   // {
    //     game.debug.body(aliens.children[i]);
    // }
}

function collisionHandler (bullet, alien) {
    bullet.kill();   
    score += 1;
    scoreText.text = scoreString + "#"+score;
    if(score == 6 ) 
        nivel(-170);
    if(score == 11 ) 
        nivel(-220);
    if(score == 16 ) 
        nivel(-270);
    if(score == 21 ) 
        nivel(-320);
}

function llegaAlSuelo (bullet,suelo1) {        
    bullet.kill();
    live = lives.getFirstAlive();
    
    if (live){
        live.kill();
    }
    // When the player dies
    if (lives.countLiving() < 1){
        player.kill();
        inicioRegalo= false;
        //stateText.text=" Fallaste \n Click para reiniciar";        
        stateText = game.add.text(50,game.world.centerY-130,'Fallaste \nClick para volver a intentar ', { font: '64px Arial', fill: '#fff' });
        /*para detener tiros*/
        
        //stateText.visible = true;
        //the "click to restart" handler
        game.input.onTap.addOnce(restart,this);
    }
}

function llegaGrinch (bullet,grinh) {        
    bullet.kill();
    if (score >0){
        score -= 1;
        scoreText.text = scoreString + "#"+score;
    }
    // When the player dies
    if (score < 1){
        player.kill();
        game.add.text(100, 300, 'REGALOS ENTREGADOS: ', { font: '12px Arial', fill: '#fff' });
        //stateText.text=" Fallaste \n Click para reiniciar";
        stateText.visible = true;
        //the "click to restart" handler
        game.input.onTap.addOnce(restart,this);
    }
}

function enemyFires () {
    //  Grab the first bullet we can from the pool
    enemyBullet = enemyBullets.getFirstExists(false);
    livingEnemies.length=0;
    aliens.forEachAlive(function(alien){
        // put every living enemy in an array
        livingEnemies.push(alien);
    });

    if (enemyBullet && livingEnemies.length > 0){
        var random=game.rnd.integerInRange(0,livingEnemies.length-1);
        // randomly select one of them
        var shooter=livingEnemies[random];
        // And fire the bullet from this enemy
        enemyBullet.reset(shooter.body.x, shooter.body.y);
        game.physics.arcade.moveToObject(enemyBullet,player,120);
        firingTimer = game.time.now + 2000;
    }
}

function fireBullet () {
    if (inicioRegalo != false){
        if (game.time.now > bulletTime){        
        bullet = bullets.getFirstExists(false);
            if (bullet){
                bullet.reset(player.x-30, player.y + 45);
                bullet.body.velocity.y = +250;
                bulletTime = game.time.now + 700;
            }        
        }
    }
    
}

function resetBullet (bullet) {
    //  Called if the bullet goes out of the screen
    bullet.kill();
}

function restart () {    
    //resets the life count
    score = 0;
    scoreText.text = scoreString + "#"+score;
    lives.callAll('revive');
    //  And brings the aliens back from the dead :)
    aliens.removeAll();
    //revives the player
    player.revive();   
    //hides the text
    stateText.visible = false;
    nivel (-90);
    setTimeout(function(){ inicioRegalo=true; }, 1500);
}

function nivel (tiempo) {
    velocidadCasas = tiempo;
    houses.callAll('kill');
    cuadro.callAll('kill');
    //console.debug(houses);
    creatOpciones();   
    
}

































