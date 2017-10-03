<?php get_header();
/*
template name: front page
*/?>

<?php the_content(); ?>

<script>
    //Wave Particles

    var SEPARATION = 100, AMOUNTX = 50, AMOUNTY = 50;
    var container;
    var camera, scene, renderer;
    var particles, particle, count = 0;
    var mouseX = 0, mouseY = 0;
    var windowHalfX = window.innerWidth / 2;
    var windowHalfY = window.innerHeight / 2;


    init();
    animate();

    function init() {
        container = document.getElementById( 'particles' );
        // document.getElementById( 'main' ).appendChild(container);
        camera = new THREE.PerspectiveCamera( 65, window.innerWidth / window.innerHeight, 1, 10000 );
        camera.position.z = 200;
        camera.position.y = 425;
        camera.position.x = 800;
        scene = new THREE.Scene();
        particles = new Array();
        var PI2 = Math.PI * 2;
        var material = new THREE.SpriteCanvasMaterial( {
            color: 0xffffff,
            program: function ( context ) {
                context.beginPath();
                context.arc( 0, 0, 0.5, 0, PI2, true );
                context.fill();
            }
        } );
        var i = 0;
        for ( var ix = 0; ix < AMOUNTX; ix ++ ) {
            for ( var iy = 0; iy < AMOUNTY; iy ++ ) {
                particle = particles[ i ++ ] = new THREE.Sprite( material );
                particle.position.x = ix * SEPARATION - ( ( AMOUNTX * SEPARATION ) / 2 );
                particle.position.z = iy * SEPARATION - ( ( AMOUNTY * SEPARATION ) / 2 );
                particle.scale.x = particle.scale.y = 2;
                scene.add( particle );
            }
        }
        renderer = new THREE.CanvasRenderer({ alpha: true });
        renderer.setClearColor( 0xffffff, 0);
        renderer.setPixelRatio( window.devicePixelRatio );
        renderer.setSize( window.innerWidth, window.innerHeight );
        container.appendChild( renderer.domElement );
        document.addEventListener( 'mousemove', onDocumentMouseMove, false );
        document.addEventListener( 'touchstart', onDocumentTouchStart, false );
        document.addEventListener( 'touchmove', onDocumentTouchMove, false );
        //
        window.addEventListener( 'resize', onWindowResize, false );
    }
    function onWindowResize() {
        windowHalfX = window.innerWidth / 2;
        windowHalfY = window.innerHeight / 2;
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize( window.innerWidth, window.innerHeight );
    }
    //
    function onDocumentMouseMove( event ) {
        mouseX = event.clientX - windowHalfX;
        mouseY = event.clientY - windowHalfY;
    }
    function onDocumentTouchStart( event ) {

        if ( event.touches.length === 1 ) {

            mouseX = event.touches[ 0 ].pageX - windowHalfX;
            mouseY = event.touches[ 0 ].pageY - windowHalfY;
        }
    }
    function onDocumentTouchMove( event ) {

        if ( event.touches.length === 1 ) {
            mouseX = event.touches[ 0 ].pageX - windowHalfX;
            mouseY = event.touches[ 0 ].pageY - windowHalfY;
        }
    }
    //
    function animate() {
        requestAnimationFrame( animate );
        render();
    }
    function render() {
//        camera.position.x += ( mouseX - camera.position.x ) * .01;
//        camera.position.y += ( - mouseY - camera.position.y ) * .01;
        camera.lookAt( scene.position );
        var i = 0;
        for ( var ix = 0; ix < AMOUNTX; ix ++ ) {
            for ( var iy = 0; iy < AMOUNTY; iy ++ ) {
                particle = particles[ i++ ];
                particle.position.y = ( Math.sin( ( ix + count ) * 0.3 ) * 50 ) +
                    ( Math.sin( ( iy + count ) * 0.5 ) * 50 );
//                particle.scale.x = particle.scale.y = ( Math.sin( ( ix + count ) * 0.3 ) + 1 ) * 4 +
//                    ( Math.sin( ( iy + count ) * 0.5 ) + 1 ) * 4;
            }
        }
        renderer.render( scene, camera );
        count += 0.1;
    }

</script>

<?php get_footer(); ?>