<div class="player-in-bottom">
    <div class="container">
        <div class="cover">
            <img src="<?= asset('img/bg-2.jpg') ?>" alt="">
        </div>
        <div class="player-controls">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M12 12l12-7v14l-12-7zm-12 0l12-7v14l-12-7z" />
                </svg>
            </a>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M3 22v-20l18 10-18 10z" />
                </svg>
            </a>
            <a href="">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M10 24h-6v-24h6v24zm10 0h-6v-24h6v24zm-11-23h-4v22h4v-22zm10 0h-4v22h4v-22z" />
                </svg>
            </a>
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 19v-14l12 7-12 7zm12 0v-14l12 7-12 7z" />
                </svg>
            </a>
        </div>
        <div id="timeline"></div>
        <div class="player-close">
            &times;
        </div>
    </div>
</div>

<input type="hidden" id="load_me" value="<?= media('tudo') ?>">

<script>
    var wavesurfer = Object.create(WaveSurfer);

    wavesurfer.init({
        container: document.querySelector('#timeline'),
        waveColor: '#8a8a8a',
        progressColor: 'white'
    });

    wavesurfer.on('ready', function() {
        wavesurfer.play();
    });

    wavesurfer.load($('#load_me').val());
</script>