<<<<<<< HEAD
var typed = new Typed('#typed',{
    strings: ["la seule tontine en ligne au mali", "Gérer vos tontines","Créer vos tondenw","Payer vos côtisation",'Tout ça en un clic'],
    typeSpeed : 150,
    backSpeed: 50,
    loop: true,
    showCursor: false
});


var reseaux = new Typed('#reseaux',{
    strings: ["Facebook","Instagram","TikTok"],
    typeSpeed : 150,
    backSpeed: 50,
    loop: true,
    showCursor: false
});

const html = document.getElementsByTagName('html')[0];
const themeSwitch = document.getElementById('themeLogo');

themeSwitch.addEventListener('click',()=> {
    html.classList.toggle('nuit');

    if(html.classList.contains('nuit')){
        themeSwitch.innerHTML = '&#9788;';
    }else{
        themeSwitch.innerHTML = '&#9789;';
    }
})

=======
let btn = document.getElementById('btn')
btn.onclick = function() {
 swal({
        title: "vous etes sure?",
        text: "de vouloir supprimer ce tonden!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            swal(" ce tonden a ete supprimer avec succes", {
            icon: "success",
            });
        } else {
            swal("yes retour a liste tondenw avec succes!")
        }
        
    }) };

    let oum = document.getElementById('rue')
           oum.onclick = function() {
            swal({
                title: "vous etes sure?",
                text: "de vouloir supprimer ce tonden!",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                     swal(" ce tonden a ete supprimer avec succes", {
                    icon: "success",
                     });
               } else {
                     swal("yes retour a liste tondenw avec succes!")
                }
            }) };

            let brt = document.getElementById('brt')
            brt.onclick = function() {
           swal({
                   title: "vous etes sure?",
                  text: "de vouloir supprimer ce tonden!",
                  icon: "warning",
                 buttons: true,
                 dangerMode: true,
                   })
                .then((willDelete) => {
                  if (willDelete) {
                       swal(" ce tonden a ete supprimer avec succes", {
                       icon: "success",
                       });
                   } else {
                       swal("yes retour a liste tondenw avec succes!");
                   }
               }) };

               let mgs = document.getElementById('mgs')
                     mgs.onclick = function() {
                     swal({
                         title: "vous etes sure?",
                        text: "de vouloir supprimer ce tonden!",
                         icon: "warning",
                        buttons: true,
                         dangerMode: true,
                         })
                         .then((willDelete) => {
                         if (willDelete) {
                             swal(" ce tonden a ete supprimer avec succes", {
                            icon: "success",
                        });
                        } else {
                         swal("yes retour a liste tondenw avec succes!");
                         }
                     }) };

                     
               
                    let blue = document.getElementById('blue')
                    blue.onclick = function() {
                    swal({
                        title: "vous etes sure?",
                        text: "de vouloir supprimer ce tonden!",
                        icon: "warning",
                        buttons: true,
                      dangerMode: true,
                         })
                      .then((willDelete) => {
                         if (willDelete) {
                            swal(" ce tonden a ete supprimer avec succes", {
                           icon: "success",
                          });
                         } else {
                            swal("yes retour a liste tondenw avec succes!");
                       }
                    }) };
                
// js modifier information 
let modife = document.getElementById('modi1')
modife.onclick = function() {
 swal({
        title: "vous etes sure?",
        text: "de vouloir modifer ce tonden!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            swal(" modification reussi", {
            icon: "success",
            });
        } else {
            swal("retour a la liste tondenw!")
        }
        
    }) };
  
    let modi2 = document.getElementById('modi2')
modi2.onclick = function() {
 swal({
        title: "vous etes sure?",
        text: "de vouloir modifer ce tonden!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            swal(" modification reussi", {
            icon: "success",
            });
        } else {
            swal("retour a la liste tondenw!")
        }
        
    }) };

    let modi3 = document.getElementById('modi3')
modi3.onclick = function() {
 swal({
        title: "vous etes sure?",
        text: "de vouloir modifer ce tonden!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            swal(" modification reussi", {
            icon: "success",
            });
        } else {
            swal("retour a la liste tondenw!")
        }
        
    }) };
  
    let modi4 = document.getElementById('modi4')
modi4.onclick = function() {
 swal({
        title: "vous etes sure?",
        text: "de vouloir modifer ce tonden!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            swal(" modification reussi", {
            icon: "success",
            });
        } else {
            swal("retour a la liste tondenw!")
        }
        
    }) };
  
    let modi5 = document.getElementById('modi5')
    modi5.onclick = function() {
     swal({
            title: "vous etes sure?",
            text: "de vouloir modifer ce tonden!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal(" modification reussi", {
                icon: "success",
                });
            } else {
                swal("retour a la liste tondenw!")
            }
            
        }) };
      
>>>>>>> 899f88d03ac58158431b849a0e26c41d46ff4b0e
