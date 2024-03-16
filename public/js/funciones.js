document.addEventListener('livewire:init', () => {
    //console log
    Livewire.on('log', (event) => {
    try{
        console[event[0].level](event[0].obj);
    }
    catch{
        console.log(event[0]);
    }
    });
    //usando parámetros
    Livewire.on('parametros', (event) => {
        alert(`parámetro=${event[0].valor}`);
        });
    //swal
    Livewire.on('swal', (event) => {
        Swal.fire({
            title: event[0].title,
            text: event[0].mensaje,
            icon: event[0].icon,
            confirmButtonText: 'OK'
          });
    });
    //modal
    Livewire.on('modal', (event) => {
        $('#ventana_modal').modal('show');   
        //document.getElementById('ventana_modal_title').innerHTML=event[0].titulo;
    });
    //toast 2909227777
    Livewire.on('toast', (event) => {
       
        $(document).ready(function(){
            $("#ventana_toast").toast("show");
            $("#ventana_toast").toast({
                delay: 2000
            });
            $("#ventana_toast").addClass(event[0].clase);
            $("#ventana_toast_body").html(`<i class="bi ${event[0].icon}" style="font-size:24px;"></i> ${event[0].mensaje}`);
        });


    });
     
});