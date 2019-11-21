/**
 *
 * Image Deletion using Ajax Request
 *
 */

$(document).on('click', '.voyager-x', function() {
   var _id = $(this).attr('data-del-id');
   var _pageid = $(this).attr('data-del-pageid');
   var _field = $(this).attr("data-del-name");
   if(confirm("Do You Want To Delete This Image")){
       $.ajax({
       url: 'http://'+ window.location.host + '/api/del/image',
       data: {
           id: _id,
           pageid:_pageid,
       },
       type: 'POST',
       dataType: 'json',
       success: function(response) {
           if(response.status){
               location.reload();
           }
       }})
   }
   else
   {
   }
});