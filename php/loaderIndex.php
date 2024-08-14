<script>
window.addEventListener("load", function() {
    var loaderContainer = document.querySelector(".loader-container");
    loaderContainer.style.display = "flex";
    setTimeout(function() {
        loaderContainer.style.display = "none";
    }, 1500);
});
</script>

<div class="loader-container">
    <div class="loader">
        <svg class="logo" width="256px" height="271px" viewBox="0 0 256 271" xmlns="http://www.w3.org/2000/svg">
            <!-- Define la máscara para ocultar el logo -->
            <mask id="logoMask">
                <!-- El logo original -->
                <path
                    d="M215.906642,38.5019086 L256,61.647726 L256,209.485004 L149.289126,271.048969 L149.289126,224.813175 L215.906642,186.339186 L215.906642,38.5019086 Z M149.289126,0 L189.382484,23.1458174 L189.382484,174.110154 L149.289126,197.228051 L149.289126,153.588832 L106.710874,153.588832 L106.710874,270.993129 L66.6175155,247.791471 L66.6175155,96.9388156 L106.710874,73.7929981 L106.710874,117.739339 L149.289126,117.739339 L149.289126,0 Z"
                    fill="white" />
                <path
                    d="M106.710874,0 L106.710874,46.2357945 L40.0933581,84.709783 L40.0933581,232.547061 L0,209.401243 L0,61.5639655 L106.710874,0 Z"
                    fill="white" />
            </mask>
            <!-- Aplica la máscara al logo y las líneas -->
            <g mask="url(#logoMask)">
                <path
                    d="M215.906642,38.5019086 L256,61.647726 L256,209.485004 L149.289126,271.048969 L149.289126,224.813175 L215.906642,186.339186 L215.906642,38.5019086 Z"
                    stroke="white" stroke-width="10" fill="none" />
                <path
                    d="M149.289126,0 L189.382484,23.1458174 L189.382484,174.110154 L149.289126,197.228051 L149.289126,153.588832 L106.710874,153.588832 L106.710874,270.993129 L66.6175155,247.791471 L66.6175155,96.9388156 L106.710874,73.7929981 L106.710874,117.739339 L149.289126,117.739339 L149.289126,0 Z"
                    stroke="white" stroke-width="10" fill="none" />
                <path
                    d="M106.710874,0 L106.710874,46.2357945 L40.0933581,84.709783 L40.0933581,232.547061 L0,209.401243 L0,61.5639655 L106.710874,0 Z"
                    stroke="white" stroke-width="10" fill="none" />
            </g>
        </svg>
    </div>
</div>