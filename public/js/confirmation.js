
function confirmation(us) {
   us.preventDefault();
   var urlToRedirect= us.currentTarget.getAttrebute('action');
   consol.log(urlToRedirect);
   swal({
    title:"Êtes-vous sûr de vouloir supprimer ce compte ?",
    icon: "warning",
    buttons: true,
    dangerMode: true,
   })
   .then((willCancel))
   {
    if(willCancel){
        window.location.action= urlToRedirect;
    }
   }
}
