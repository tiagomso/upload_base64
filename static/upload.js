/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */


/* global get */

var recorder;

function createDownloadLink() {
    
    var audioBlob = document.getElementById('audio').src;
    var textoGerado = document.getElementById('generatedtext').innerHTML;

    // Anexando variaveis na requisição
    var data = new FormData();
    data.append('audio-base64', audioBlob);
    data.append('texto-gerado', textoGerado);

    // Make the HTTP request
    var oReq = new XMLHttpRequest();

    // POST the data to upload.php
    oReq.open("POST", 'upload.php', true);
    oReq.onload = function(oEvent) {
      // Data has been uploaded
    };
    oReq.send(data);

}