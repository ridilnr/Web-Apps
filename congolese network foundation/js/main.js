$(document).ready(function()
{
"use strict";
   // On cache la zone de texte
   $('#search-area').hide();
   // toggle() lorsque le lien avec l'ID #toggler est cliqué
   $('#Other').click(function()
  {
      $('#search-area').toggle(400);
	  $('#target').focus();
      return false;
   });
      // On cache la zone de texte
   $('#Members').hide();
   // toggle() lorsque le lien avec l'ID #toggler est cliqué
   $('#all').click(function()
  {
      $('#Members').toggle(400);
      return false;
   });

});
