<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer data-domain="weilbyte.github.io/tiktok-tts" src="https://plausible.io/js/plausible.js"></script>
    <script src="static/script.js"></script>
    <script src="static/upload.js"></script>
    <title>Upload Audio</title>
    <style>
        #funny:hover {
            opacity: 0;
            transition: opacity 1s ease-out 100ms
        }
        #funny {
            transition: opacity 1s ease-in 100ms
        }
        .bold {
            font-weight:bold;
        }
    </style>
</head>
<body class="flex flex-col" style="background-color: #fbfbfb">
    <div class="bg-stone-100 p-12 grow">
        <img src="static/ebb.png" width="64px" height="64px" class="mx-auto"/>
        <h1 class="text-6xl font-bold text-center">
            Upload Audio
        </h1>
        <p class="text-center pt-6">Faça o upload do audio e salve em banco ou arquivo no servidor.</p>
    </div>
    <div class="bg-slate-200 md:mt-11 p-11 md:mx-auto h-2/4 md:w-3/5 md:rounded">
        <form onsubmit="event.preventDefault(); submitForm()">
            <label for="text" hidden>Text to generate into speech</label>
            <p class="rounded bg-slate-100 h-8 w-16 text-center leading-8 mb-2 float-right" id="charcount">999/999</p>
            <textarea id="text" name="text" placeholder="The fungus among us." oninput="onTextareaInput()" class="h-full w-full rounded p-2 bg-slate-100" disabled>TESTE DE AUDIO</textarea><br/>
            <label for="voice" hidden>Voice to use</label>
            <select name="voice" id="voice" class="rounded p-1 bg-slate-100 mt-2 w-full sm:w-1/2" disabled>
                <option selected disabled hidden value="none">Select a voice</option>
                <option disabled class="bold">Portuguese BR</option>
                <!-- <option value="br_001">Female 1</option> -->
                <option value="br_003" >Female 2</option>
                <option value="br_004">Female 3</option>
                <option value="br_005" selected="true">Homem - Brasil</option>
                <option disabled></option>
            </select>
            <button class="rounded bg-slate-100 p-1 w-full sm:w-24 sm:float-right mt-2" id="submit" disabled>Generate</button>
        </form>
    </div>
    
    <div class="bg-orange-200 md:mt-6 p-6 pt-3 md:mx-auto h-2/4 md:w-2/4 md:rounded" id="info">
        <h1 class="text-center font-bold text-xl">Fazer Upload</h1>
        <button class="h-10 px-6 font-semibold rounded-md bg-black text-white" onclick="createDownloadLink();">Upload</button>
    </div>

    <div class="bg-red-200 md:mt-6 p-6 pt-3 md:mx-auto h-2/4 md:w-2/4 md:rounded" id="error" style="display: none">
        <h1 class="text-center font-bold text-xl">Error</h1>
        <p class="text-center" id="errortext">There was an error.</p>
    </div>

    <div class="bg-green-200 md:mt-6 p-6 pt-3 md:mx-auto h-2/4 md:w-2/4 md:rounded" id="success" style="display: none">
        <h1 class="text-center font-bold text-xl">Success</h1>
        <p class="text-center" id="generatedtext"></p>
        <audio controls class="mx-auto mt-2" id="audio" src="">
            Umm, update your browser.
        </audio>
    </div>
    
                
    
</body>
</html>