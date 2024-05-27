import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

//selezionare il tasto elimina con id e salvarli in una variabile
//per tutti i bottoni creo un foreach che agirà su ogni singolo bottone
    //mettere in ascolto il bottone elimina in index, quando si clicca:
        //togliere comportamento di default
        //selezionare la modale con get element
        //renderla un'istanza di della classe Modal di Bootstrap
        //mostrarla con .show()
        //popolare la modale
            //creare dei data nel bottone in ascolto che verranno passati al JS
            //recuperarli in JS con this.dataset = comicTitle (nome del data senza 'data' senza - e in camelcase)
            //seleziono con queryselector tramite nome di classe, il contenitore da popolare con testo 
        //aprire la modale


const allDeleteButtons = document.querySelectorAll('.js-delete-item-btn');
allDeleteButtons.forEach((singleDeleteButton) => {
    singleDeleteButton.addEventListener('click', function(event) {
        event.preventDefault();
        
        //selezionare la modale con get element
        const confirmationModal = document.getElementById('deleteConfirmModal');
        
        //renderla un'istanza di della classe Modal di Bootstrap
        const bootstrapModal = new bootstrap.Modal(confirmationModal);

        //mostrarla con .show()
        bootstrapModal.show();

        //popolare la modale

        //salvo il titolo del comic in una variabile prendendolo dai data
        const comicTitle = this.dataset.comicTitle

        //seleziono contenitore non dal documento tutto ma direttamente da dentro la modale e lo popolo con innerHTML
        confirmationModal.querySelector('.modal-body').innerHTML = `Vuoi davvero cancellare definitivamente l'elemento ${comicTitle}?`
        
    });  
});
