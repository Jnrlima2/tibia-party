<!DOCTYPE html>
<html>
<head>
    <title>Rádio Online</title>
</head>
<body>
    <select id="radioSelect">
        <option value="https://live.hunter.fm/pop_high">Pop</option>
        <option value="https://stream-157.zeno.fm/k9gy85cgwy8uv?zs=tHT3Pu19QrOuUZB64Qy5og">Funk</option>
        <option value="https://live.hunter.fm/rock_high">Rock</option>
        <option value="https://live.hunter.fm/hitsbrasil_high">Hits Brasil</option>
        <option value="https://live.hunter.fm/pagode_high">Pagode</option>
        <option value="https://radio.stmsrv.com:8120/stream">Eletrônica</option>
    </select>
    <button onclick="playRadio()">Play</button>
    <button onclick="stopRadio()">Stop</button>
    <input type="range" id="volumeControl" min="0" max="1" step="0.1" value="1" onchange="changeVolume()">
    
    <audio id="radioPlayer" controls style="display: none;"></audio>
    
    <script>
        var radioPlayer = document.getElementById('radioPlayer');
        var radioSelect = document.getElementById('radioSelect');
        var volumeControl = document.getElementById('volumeControl');
        
        function playRadio() {
            var selectedRadio = radioSelect.value;
            radioPlayer.src = selectedRadio;
            radioPlayer.play();
            radioPlayer.volume = volumeControl.value;
        }
        
        function stopRadio() {
            radioPlayer.pause();
            radioPlayer.currentTime = 0;
        }
        
        function changeVolume() {
            radioPlayer.volume = volumeControl.value;
        }
    </script>
</body>
</html>
