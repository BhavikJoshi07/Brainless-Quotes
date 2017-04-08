$(document).ready(function() {
    getRandomQuote();
});

$('#randomButton').click(getRandomQuote);

function getRandomQuote() {
   $.ajax({
       url : "http://api.forismatic.com/api/1.0/",
       jsonp : "jsonp",
       dataType : "jsonp",
       data : {
           method : "getQuote",
           lang : "en",
           format : "jsonp"
       }
   })
   .done(update)
   .fail(handleError);
}

function update(response) {
    var quote = response.quoteText;
    var author = response.quoteAuthor;
    if(!author) {
        author = "Unknown";
    }
    $('#quoteHere').html(quote);
    $('.authorName').html(author);
}
function handleError(jqxhr, textStatus, err) {
  alert("Request Failed: " + textStatus + ", " + err);
}