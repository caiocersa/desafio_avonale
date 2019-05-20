
$(document).ready(function(){

    $.getJSON( "Desafio_Avonale.php").done( function( json ) {
        gerarCodigoAlbum("#ftalbum1","#album1",json,1);
        gerarCodigoAlbum("#ftalbum2","#album2",json,2);

});


function millisToMinutesAndSeconds(millis) {
    var minutes = Math.floor(millis / 60000);
    var seconds = ((millis % 60000) / 1000).toFixed(0);
    return minutes + ":" + (seconds < 10 ? '0' : '') + seconds;
}

function gerarCodigoAlbum(ft,album,json,numeroalbum){



    if(numeroalbum === 1){
        $(ft).html("<img class='mx-auto d-block ' src='"+json.results["0"].artworkUrl100+"'>");
        ht = "<div class='row border-bottom m-1'>" +
            "<div class='col-md-12 text-gray-600'>"+parseInt(json.results["0"].releaseDate)+"</div> " +
            "<div class='col-md-12'><h3>"+json.results["0"].collectionName+"</h3></div>" +
            "</div>";

        for( var x = 1; x < 13; x++){
            ht += "<div class='row border-bottom m-2'>"+
                "<div class='col-md-12'><label>"+json.results[x].trackName+"</label> <span class='float-right text-gray-600 d-none d-lg-inline'>"+millisToMinutesAndSeconds(json.results[x].trackTimeMillis)+"</span></div>"+
                "</div>";
        }
    }else{
        $(ft).html("<img class='mx-auto d-block ' src='"+json.results["13"].artworkUrl100+"'>");
        ht = "<div class='row border-bottom m-1'>" +
            "<div class='col-md-12 text-gray-600'>"+parseInt(json.results["13"].releaseDate)+"</div> " +
            "<div class='col-md-12'><h3>"+json.results["13"].collectionName+"</h3></div>" +
            "</div>";

        for( var x = 14; x < 26; x++){
            ht += "<div class='row border-bottom m-2'>"+
                "<div class='col-md-12'><label>"+json.results[x].trackName+"</label> <span class='float-right text-gray-600 d-none d-lg-inline'>"+millisToMinutesAndSeconds(json.results[x].trackTimeMillis)+"</span></div>"+
                "</div>";
        }
    }

    $(album).html(ht);



}
});