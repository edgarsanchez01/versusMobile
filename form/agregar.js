// Obtener el contenedor de las cámaras
const camarasContainer = document.getElementById("camaras-container");

// Obtener el botón de agregar cámara
const agregarCamaraBtn = document.getElementById("agregar-camara-btn");

// Obtener el botón de quitar cámara
const quitarCamaraBtn = document.getElementById("quitar-camara-btn");


// Obtener el contenedor de las cámaras delanteras
const camarasContainerf = document.getElementById("camaras-containerf");

// Obtener el botón de agregar cámara delantera
const agregarCamaraBtnf = document.getElementById("agregar-camara-btnf");

// Obtener el botón de quitar cámara delantera
const quitarCamaraBtnf = document.getElementById("quitar-camara-btnf");

// Agregar evento de clic al botón de agregar cámara
agregarCamaraBtn.addEventListener("click", function(event) {
  event.preventDefault();
  agregarCampoCamara();
});

// Agregar evento de clic al botón de quitar cámara
quitarCamaraBtn.addEventListener("click", function(event) {
  event.preventDefault();
  quitarCampoCamara();
});

// Agregar evento de clic al botón de agregar cámara delantera
agregarCamaraBtnf.addEventListener("click", function(event) {
  event.preventDefault();
  agregarCampoCamaraDelantera();
});

// Agregar evento de clic al botón de quitar cámara delantera
quitarCamaraBtnf.addEventListener("click", function(event) {
  event.preventDefault();
  quitarCampoCamaraDelantera();
});

// Función para agregar un nuevo campo de entrada de cámara
  function agregarCampoCamara() {
    const nuevoCampo = document.createElement("div");
    nuevoCampo.classList.add("campo-camara");
    nuevoCampo.innerHTML = `
      <input name="c_principalD[]" placeholder="Agrega la otra cámara" type="text" />
    `;
    camarasContainer.appendChild(nuevoCampo);
  }

// Función para quitar el último campo de entrada de cámara
function quitarCampoCamara() {
  const camposCamara = camarasContainer.getElementsByClassName("campo-camara");
  if (camposCamara.length > 1) {
    camarasContainer.removeChild(camposCamara[camposCamara.length - 1]);
  }
}

// Función para agregar un nuevo campo de entrada de cámara delantera
function agregarCampoCamaraDelantera() {
  const nuevoCampo = document.createElement("div");
  nuevoCampo.classList.add("campo-camaraf");
  nuevoCampo.innerHTML = `
    <input name="c_principalF[]" placeholder="Agrega la otra cámara" type="text" />
  `;
  camarasContainerf.appendChild(nuevoCampo);
}

// Función para quitar el último campo de entrada de cámara delantera
function quitarCampoCamaraDelantera() {
  const camposCamara = camarasContainerf.getElementsByClassName("campo-camaraf");
  if (camposCamara.length > 1) {
    camarasContainerf.removeChild(camposCamara[camposCamara.length - 1]);
  }
}




/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/

'use strict';

;( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
}( document, window, 0 ));