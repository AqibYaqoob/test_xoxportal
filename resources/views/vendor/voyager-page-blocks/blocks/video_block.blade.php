@if (!empty($blockData->video)) 
 	<div class="xp-section">
        <div style="position: relative; width: 100%; overflow: hidden;">
            <div style="position: relative; width: 100%;">
                <video autoplay muted loop id="myVideo2">
                    <source src="{{ asset('storage/'.$blockData->video) }}" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </div>
        </div>
    </div>
@endif